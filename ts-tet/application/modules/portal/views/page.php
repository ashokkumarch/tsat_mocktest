<div class="content-wrapper">
<div class="container-fluid">
  <!-- Breadcrumb-->
 <div class="row pt-2 pb-2">
    <div class="col-sm-9">
        <h4 class="page-title">Pages Management</h4>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url($this->folder_key);?>">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Page</li>
     </ol>
   </div>
 </div>
<!-- End Breadcrumb-->
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header"><i class="fa fa-table"></i> Page</div>
        <div class="card-body">
         <?php echo form_open_multipart(base_url($this->folder_key.'/pages/submit'),array('id' => 'form')); ?>
          <input type="hidden" class="form-control" id="id" name="id" value="<?php if(isset($_GET['id'])){echo $info->id;}?>">
          <div class="form-group row">
              <label class="col-sm-2 col-form-label">Title *</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="title" name="title" value="<?php if(isset($_GET['id'])){echo $info->title;}?>">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-4 col-form-label">Description</label>
              <div class="col-sm-12">
                <textarea class="summernoteEditor" id="description" name="description"><?php if(isset($_GET['id'])){echo $info->description;}?></textarea>
              </div>
            </div>
            <div class="form-footer">
                <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> SUBMIT</button>
            </div>
            <?php echo form_close();?>
        </div>
      </div>
    </div>
  </div>
 <div class="overlay toggle-menu"></div>
</div>
</div>
<link rel="stylesheet" href="<?php echo base_url('assets/admin'.$theme.'/plugins/summernote/dist/summernote-bs4.css');?>"/>
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
<!--Form Validatin Script-->
<script src="<?php echo base_url('assets/admin'.$theme.'/plugins/jquery-validation/js/jquery.validate.min.js');?>"></script>
<script src="<?php echo base_url('assets/admin'.$theme.'/plugins/summernote/dist/summernote-bs4.min.js');?>"></script>
<script>
$('.summernoteEditor').summernote({
		height: 200,
		tabsize: 2
	});
</script>
<?php /*?><script type="text/javascript" src="<?php echo base_url('assets/ckfinder/ckfinder.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/ckfinder/ckeditor/ckeditor.js');?>"></script>    <?php */?> 
<script>
$().ready(function() {
$('#form').on('submit', function(e){
	e.preventDefault();
    $.ajax({
     type: 'POST',
     url: '<?php echo base_url($this->folder_key.'/pages/submit');?>',            
     data:new FormData(this),
     processData:false,
     contentType:false,
     cache:false,
     async:false,
     success: function(msg){
		var json = JSON.parse(msg);
		if(json['success']){
			window.location="<?php echo base_url($this->folder_key.'/pages');?>";
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
$('#model').on('hidden.bs.modal', function () {
	$('#model form')[0].reset();
});
 <?php /*?>$('textarea.ckeditor').each( function () {
	CKEDITOR.replace( this.id,
	{
		filebrowserBrowseUrl : '<?php echo base_url('assets/ckfinder/ckfinder.html?Connector');?>=<?php echo base_url('assets/ckfinder/core/connector/php/connector.php');?>',
		filebrowserImageBrowseUrl : '<?php echo base_url('assets/ckfinder/ckfinder.html?type=Images&Connector');?>=<?php echo base_url('assets/ckfinder/core/connector/php/connector.php');?>',
		filebrowserFlashBrowseUrl : '<?php echo base_url('assets/ckfinder/ckfinder.html?type=Flash&Connector');?>=<?php echo base_url('assets/ckfinder/core/connector/php/connector.php');?>',
		filebrowserUploadUrl : '<?php echo base_url('assets/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files');?>',
		filebrowserImageUploadUrl : '<?php echo base_url('assets/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images');?>',
		filebrowserFlashUploadUrl : '<?php echo base_url('assets/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash');?>'
	});
});<?php */?>
</script>