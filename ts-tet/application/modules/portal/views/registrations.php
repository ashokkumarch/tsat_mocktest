<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Registrations Management</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url($this->folder_key);?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Registrations List</li>
         </ol>
	   </div>
     </div>
    <!-- End Breadcrumb-->
      <div class="row">
        <div class="col-lg-12">
         <?php /*?><button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#model">Add Registration</button><?php */?>
         <?php /*?><a href="<?php echo base_url($this->folder_key.'/registrations/export');?>"><button class="btn btn-success waves-effect waves-light pull-right">Excel Download</button></a><?php */?>
         <div class="clearfix"></div>
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Registrations List</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="datatable" class="table table-bordered">
                <thead>
                    <tr>
                       <th>S.No</th>
                       <th>Name</th>
                       <th>Qualification</th>
                       <th>Email</th>
                       <th>Phone</th>
                       <th>Score</th>
                       <?php /*?><th>Status</th><?php */?>
                       <th>Action</th>
                    </tr>
                </thead>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div>
	 <div class="overlay toggle-menu"></div>
    </div>
    </div>
    <div class="modal fade" id="model">
      <div class="modal-dialog modal-lg">
        <div class="modal-content animated flipInX">
        <?php echo form_open_multipart(base_url($this->folder_key.'/registrations/submit'),array('id' => 'form')); ?>
          <input type="hidden" class="form-control" id="id" name="id">
          <div class="modal-header">
            <h5 class="modal-title">Registration</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">            
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Full Name *</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="name" name="name">
                  </div>
                  <label class="col-sm-2 col-form-label">Phone *</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="phone" name="phone">
                  </div>              
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Email *</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="email" name="email">
                  </div>
                  <label class="col-sm-2 col-form-label">Qualification *</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="qualification" name="qualification">
                  </div>
                </div>
                <div class="form-group row">
                  
                </div>            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
            <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> Submit</button>
          </div>
          <?php echo form_close();?>
        </div>
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
<script>
$(document).ready(function() {
$('#datatable').DataTable( {
	"processing": true,
	"serverSide": true,
	"ajax": "<?php echo base_url($this->folder_key.'/'.strtolower($this->router->fetch_class()).'/data');?>",
	 "dom": "<'row'<'col-sm-3'l><'col-sm-3'f><'col-sm-6'p>>" +
	 "<'row'<'col-sm-12'tr>>" +
	 "<'row'<'col-sm-5'i><'col-sm-7'p>>",
});
} );
</script>    
<script>
$().ready(function() {
$('#form').on('submit', function(e){
	e.preventDefault();
    $.ajax({
     type: 'POST',
     url: '<?php echo base_url($this->folder_key.'/registrations/submit');?>',            
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
		$('#password').prop('required',false); 
		Object.keys(json).forEach(function(key) {
			if($('#'+key).length){
			  $('#'+key).val(json[key]);
			}
		});
		}			
	});
}
$('#model').on('hidden.bs.modal', function () {
	$('#model form')[0].reset();
});
</script>