<div class="content-wrapper">
<div class="container-fluid">
  <!-- Breadcrumb-->
 <div class="row pt-2 pb-2">
    <div class="col-sm-9">
        <h4 class="page-title">Bulkupload Management</h4>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url($this->folder_key);?>">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Bulkupload</li>
     </ol>
   </div>
 </div>
<!-- End Breadcrumb-->
  <div class="row">
    <div class="col-lg-12">
       <?php echo form_open_multipart(base_url($this->folder_key.'/bulkupload/submit'),array('id' => 'form')); ?>
       <div class="card">
        <div class="card-header">Bulkupload</div>
        <div class="card-body">         
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">File *</label>
              <div class="col-sm-4">
                <input type="file" class="form-control" id="file" name="file" accept=".csv">
                <?php if(isset($_SESSION['success'])){echo '<span style="color:green">'.$_SESSION['success'].'<span>'; unset($_SESSION['success']);}?>
              </div>
            </div>
            <div class="form-footer">
                <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> SUBMIT</button>
            </div>
        </div>
        </div>
        <?php echo form_close();?>
    </div>
  </div>
 <div class="overlay toggle-menu"></div>
</div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url('assets/admin'.$theme.'/js/jquery.min.js');?>"></script>
<script src="<?php echo base_url('assets/admin'.$theme.'/js/popper.min.js');?>"></script>
<script src="<?php echo base_url('assets/admin'.$theme.'/js/bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('assets/admin'.$theme.'/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.js');?>"></script>
<!-- simplebar js -->
<script src="<?php echo base_url('assets/admin'.$theme.'/plugins/simplebar/js/simplebar.js');?>"></script>
<!-- sidebar-menu js -->
<script src="<?php echo base_url('assets/admin'.$theme.'/js/sidebar-menu.js');?>"></script>
<!-- Custom scripts -->
<script src="<?php echo base_url('assets/admin'.$theme.'/js/app-script.js');?>"></script>
<script src="<?php echo base_url('assets/admin'.$theme.'/plugins/select2/js/select2.min.js');?>"></script>
<!--Form Validatin Script-->
<script src="<?php echo base_url('assets/admin'.$theme.'/plugins/jquery-validation/js/jquery.validate.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/ckfinder/ckfinder.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/ckfinder/ckeditor/ckeditor.js');?>"></script>  
<script type="text/javascript" src="<?php echo base_url('assets/admin'.$theme.'/plugins/fileupload/bootstrap-fileupload.min.js');?>"></script>   
<script>
$().ready(function() {
$('.single-select').select2();	
$('.bs-colorpicker').colorpicker();
$('#form').on('submit', function(e){
	e.preventDefault();
    $.ajax({
     type: 'POST',
     url: '<?php echo base_url($this->folder_key.'/bulkupload/submit');?>',            
     data:new FormData(this),
     processData:false,
     contentType:false,
     cache:false,
     async:false,
     success: function(msg){
		var json = JSON.parse(msg);
		if(json['success']){
			window.location="<?php echo base_url($this->folder_key.'/bulkupload');?>";
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
</script>