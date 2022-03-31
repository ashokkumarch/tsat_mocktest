<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Questions Management</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url($this->folder_key);?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Questions List</li>
         </ol>
	   </div>
     </div>
    <!-- End Breadcrumb-->
      <div class="row">
        <div class="col-lg-12">
         <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#model">Add Question</button>
         <div class="clearfix"></div>
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Questions List</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="datatable" class="table table-bordered">
                <thead>
                    <tr>
                       <th>S.No</th>
                       <th>Question</th>
                       <th>Answer 1</th>
                       <th>Answer 2</th>
                       <th>Answer 3</th>
                       <th>Answer 4</th>
                       <th>Correct Answer</th>
                       <th>Question</th>
                       <th>Status</th>
                       <th>Action</th>
                    </tr>
                </thead>
                <?php /*?><tbody id="information">
                	<?php foreach($list as $key => $value){?>
                    <tr id="info_<?php echo $value['id'];?>">
                         <td><?php echo $key+1;?></td>
                         <td><?php echo $value['question_name'];?></td>
                         <td><?php echo $value['answer1'];?></td>
                         <td><?php echo $value['answer2'];?></td>
                         <td><?php echo $value['answer3'];?></td>
                         <td><?php echo $value['answer4'];?></td>
                         <td><?php echo $value['question_correct_ans'];?></td>
                         <td><?php echo $value['questions'];?></td>
                         <td><a href="javascript:void(0)" id="status<?php echo $value['id'];?>" onclick="return status(<?php echo $value['id'];?>,'questions')"><?php if($value['status']==1){echo 'Active';}else{echo 'Inactive';}?></a></td>
                         <td>
                         <a href="javascript:void(0)" onclick="getinfo('questions','<?php echo $value['id'];?>')"  data-toggle="modal" data-target="#model" title="Edit"><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;
                         <a href="<?php echo base_url($this->folder_key.'/questions/delete/'.$value['id']);?>" onClick="return confirm('Are you sure you want to delete ?')" title="Delete" class=""><i class="fa fa-trash-o text-danger"></i></a>&nbsp;&nbsp;
                         </td>
                    </tr>
                    <?php }?>
                </tbody><?php */?>
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
        <?php echo form_open_multipart(base_url($this->folder_key.'/questions/submit'),array('id' => 'form')); ?>
          <input type="hidden" class="form-control" id="id" name="id">
          <div class="modal-header">
            <h5 class="modal-title">Question</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">  
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Question *</label>
              <div class="col-sm-10">
                <textarea type="text" class="form-control" id="question_name" name="question_name"></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Answer 1 *</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="question_ans_1" name="question_ans_1">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Answer 2 *</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="question_ans_2" name="question_ans_2">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Answer 3 *</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="question_ans_3" name="question_ans_3">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Answer 4 *</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="question_ans_4" name="question_ans_4">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Correct Answer *</label>
              <div class="col-sm-4">
                <select class="form-control" id="question_correct_ans" name="question_correct_ans">
                	<option value=""></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
              </div>
              <label class="col-sm-2 col-form-label">Category *</label>
              <div class="col-sm-4">
                <select class="form-control" id="category" name="category">
                	<option value=""></option>
                    <?php foreach($categories as $key => $value){?>
                    <option value="<?php echo $value['id'];?>"><?php echo $value['title'];?></option>
                    <?php }?>
                </select>
              </div>
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
<script type="text/javascript" src="<?php echo base_url('assets/admin'.$theme.'/plugins/fileupload/bootstrap-fileupload.min.js');?>"></script>
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
     url: '<?php echo base_url($this->folder_key.'/questions/submit');?>',            
     data:new FormData(this),
     processData:false,
     contentType:false,
     cache:false,
     async:false,
     success: function(msg){
		var json = JSON.parse(msg);
		if(json['success']){
			<?php /*?>if($('#'+json['key']).length){
			$('#'+json['key']).html(json['info']);	
			}else{
			$('table > tbody > tr:first').before('<tr id="'+json['key']+'">'+json['info']+'</tr>');	
			}<?php */?>
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
<script>
function checkhome(tab,iid,str)
{
if(document.getElementById(str+''+iid).checked==true){val=1;}else{val=0;}
$.ajax({
   type: "POST",
   url: "<?php echo base_url($this->folder_key.'/');?>"+tab+"/check/"+iid+"/"+str+"/"+val,
   success: function(msg){}
 });
}
</script>