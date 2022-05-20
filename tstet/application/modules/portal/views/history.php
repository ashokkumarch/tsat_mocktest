<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Orders Management</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url($this->folder_key);?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Order Status List</li>
         </ol>
	   </div>
     </div>
    <!-- End Breadcrumb-->
      <div class="row">
        <div class="col-lg-12">
        <div class="card">
        <div class="card-body">
         <?php echo form_open(base_url($this->folder_key.'/'.$this->uri->segment(2).'/his_submit/').$id); ?>
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Delivery Status <span class="tx-danger">*</span></label>
                      <select class="form-control" name="status">
                        <option></option>	               
                        <?php /*?><option value="0">Pending</option><?php */?>                   
                        <option value="1">Order Accepted</option>                  
                        <option value="2">Parcel Ready</option>                    
                        <option value="3">Delivered</option>                   
                        <option value="4">Cancelled</option>                    
                      </select>
                  <?php echo form_error('status', '<span style="color:#b94a48;">', '</span>'); ?>
                </div>
              </div>
              <div class="col-lg-6">
              	<div class="form-group mg-b-10-force">
                  <label class="form-control-label">Message</label>
                  <input type="text" name="message" class="form-control" value="<?php if(isset($_POST['message'])){echo $this->input->post('message');}?>">
                </div>               
              </div>
              <div class="col-lg-2">
            <div class="form-group">
              <input class="btn btn-info" type="submit" name="submit" value="Submit" style="margin-top:30px;" />
            </div>
            </div>
            </div> 
         <?php echo form_close();?>
         </div>
         </div>
         <div class="clearfix"></div>
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Order Status List</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="datatable" class="table table-bordered">
                <thead>
                    <tr>
                       <th>S.No</th>
                       <th>Status</th>
                       <th>Message</th>
                       <th>Date</th>
                    </tr>
                </thead>
                <tbody id="information">
                	<?php foreach($history as $key => $value){?>
                    <tr>
                         <td><?php echo $key+1;?></td>
                         <td><?php if($value['status']==0){echo 'Pending';}else if($value['status']==1){echo 'Order Accepted';}else if($value['status']==2){echo 'Parcel Ready';}else if($value['status']==3){echo 'Delivered';}else if($value['status']==4){echo 'Cancelled';}?></td>
                         <td><?php echo $value['message'];?></td>
                         <td><?php echo date('d-m-Y h:i A',strtotime($value['now']));?></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div>
	 <div class="overlay toggle-menu"></div>
    </div>
    </div>
<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url('assets/admin'.$theme.'/js/jquery.min.js');?>"></script>
<script src="<?php echo base_url('assets/admin'.$theme.'/js/popper.min.js');?>"></script>
<script src="<?php echo base_url('assets/admin'.$theme.'/js/bootstrap.min.js');?>"></script>
<!-- simplebar js -->
<script src="<?php echo base_url('assets/admin'.$theme.'/plugins/simplebar/js/simplebar.js');?>"></script>
<!-- sidebar-menu js -->
<script src="<?php echo base_url('assets/admin'.$theme.'/js/sidebar-menu.js');?>"></script>
<!-- Custom scripts -->
<script src="<?php echo base_url('assets/admin'.$theme.'/js/app-script.js');?>"></script>
<!--Data Tables js-->
<script src="<?php echo base_url('assets/admin'.$theme.'/plugins/bootstrap-datatable/js/jquery.dataTables.min.js');?>"></script>
<script src="<?php echo base_url('assets/admin'.$theme.'/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js');?>"></script>
<script src="<?php echo base_url('assets/admin'.$theme.'/plugins/bootstrap-datatable/js/dataTables.buttons.min.js');?>"></script>
<script src="<?php echo base_url('assets/admin'.$theme.'/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js');?>"></script>
<script src="<?php echo base_url('assets/admin'.$theme.'/plugins/bootstrap-datatable/js/jszip.min.js');?>"></script>
<script src="<?php echo base_url('assets/admin'.$theme.'/plugins/bootstrap-datatable/js/pdfmake.min.js');?>"></script>
<script src="<?php echo base_url('assets/admin'.$theme.'/plugins/bootstrap-datatable/js/vfs_fonts.js');?>"></script>
<script src="<?php echo base_url('assets/admin'.$theme.'/plugins/bootstrap-datatable/js/buttons.html5.min.js');?>"></script>
<script src="<?php echo base_url('assets/admin'.$theme.'/plugins/bootstrap-datatable/js/buttons.print.min.js');?>"></script>
<script src="<?php echo base_url('assets/admin'.$theme.'/plugins/bootstrap-datatable/js/buttons.colVis.min.js');?>"></script>
<!--Form Validatin Script-->
<script src="<?php echo base_url('assets/admin'.$theme.'/plugins/jquery-validation/js/jquery.validate.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/admin'.$theme.'/plugins/fileupload/bootstrap-fileupload.min.js');?>"></script>
<script>
$(document).ready(function() {
var table = $('#datatable').DataTable( {
// buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
} );
table.buttons().container().appendTo( '#datatable_wrapper .col-md-6:eq(0)' );} );
</script>    
<script>
$().ready(function() {				
$('#form').on('submit', function(e){
	e.preventDefault();
    $.ajax({
     type: 'POST',
     url: '<?php echo base_url($this->folder_key.'/category/submit');?>',            
     data:new FormData(this),
     processData:false,
     contentType:false,
     cache:false,
     async:false,
     success: function(msg){
		var json = JSON.parse(msg);
		if(json['success']){
			window.location="";
		}else{
		Object.keys(json).forEach(function(key) {
			if($('#'+key).length){
			 if($('#'+key+'-error')){$('#'+key+'-error').remove();}
			 if(json[key]!=''){
			  	$('#'+key).after('<label id="'+key+'-error" class="error" for="'+key+'">'+json[key]+'</label>');
			  }
			}
		});
		}
		 
		 return false;
     }
   });
 });
});
function getinfo(tab,val){
	$.ajax({			   
		type: "POST",			   
		url: "<?php echo base_url($this->folder_key.'/');?>"+tab+"/edit/"+val,			   
		success: function(msg){			 	 
		var json = JSON.parse(msg);
		Object.keys(json).forEach(function(key) {
			if($('#'+key).length){
			 if(key=='image'){
			  $('#'+key).attr("src", json[key]); 
			 }else{
			  $('#'+key).val(json[key]);
			 }
			}
		});
		}			
	});
}
$('#model').on('hidden.bs.modal', function () {
	$('#model form')[0].reset();
	$('#image').attr("src", '<?php echo base_url('assets/admin'.$theme.'/images/no-image.gif');?>');
});
</script>