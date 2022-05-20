<div class="content-wrapper">
<div class="container-fluid">
  <!-- Breadcrumb-->
 <div class="row pt-2 pb-2">
    <div class="col-sm-9">
        <h4 class="page-title">Settings Management</h4>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url($this->folder_key);?>">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Settings</li>
     </ol>
   </div>
 </div>
<!-- End Breadcrumb-->
  <div class="row">
    <div class="col-lg-12">
       <?php echo form_open_multipart(base_url($this->folder_key.'/settings/submit'),array('id' => 'form')); ?>
       <div class="card">
        <div class="card-header">Basic Settings</div>
        <div class="card-body">         
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Title *</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="title" name="title" value="<?php echo $this->data->title;?>">
              </div>
              <label class="col-sm-2 col-form-label">Email Address</label>
              <div class="col-sm-4">
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $this->data->email;?>">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Phone Number</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $this->data->phone;?>">
              </div>
              <label class="col-sm-2 col-form-label">Address</label>
              <div class="col-sm-4">
                <textarea class="form-control" id="address" rows="5" name="address"><?php echo $this->data->address;?></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Image *</label>
              <div class="col-sm-4">
                <div class="fileupload fileupload-new" data-provides="fileupload" id="file">
                   <div class="fileupload-new thumbnail" >
                   <img src="<?php if($this->data->image!=''){echo base_url($this->data->image);}else{echo base_url('assets/admin'.$theme.'/images/no-image.gif');}?>" id="image" />
                   </div>
                   <div class="fileupload-preview fileupload-exists thumbnail"></div>
                   <div>
                       <span class="btn btn-file"><span class="fileupload-new">Select Image</span><span class="fileupload-exists" style="padding:6px;">Change</span><input type="file" name='file' accept="image/*" /></span>
                       <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                   </div>
               </div>
              </div>
              <label class="col-sm-2 col-form-label">Favicon (40x40) *</label>
              <div class="col-sm-4">
                <div class="fileupload fileupload-new" data-provides="fileupload" id="file1">
                   <div class="fileupload-new thumbnail" >
                   <img src="<?php if($this->data->favicon!=''){echo base_url($this->data->favicon);}else{echo base_url('assets/admin'.$theme.'/images/no-image.gif');}?>" id="favicon" />
                   </div>
                   <div class="fileupload-preview fileupload-exists thumbnail"></div>
                   <div>
                       <span class="btn btn-file"><span class="fileupload-new">Select Image</span><span class="fileupload-exists" style="padding:6px;">Change</span><input type="file" name='file1' accept="image/*" /></span>
                       <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                   </div>
               </div>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Meta Title</label>
              <div class="col-sm-4">
                <textarea class="form-control" id="meta_title" rows="5" name="meta_title"><?php echo $this->data->meta_title;?></textarea>
              </div>
              <label class="col-sm-2 col-form-label">Meta Keywords</label>
              <div class="col-sm-4">
                <textarea class="form-control" id="meta_keywords" rows="5" name="meta_keywords"><?php echo $this->data->meta_keywords;?></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Meta Description</label>
              <div class="col-sm-4">
                <textarea class="form-control" id="meta_description" rows="5" name="meta_description"><?php echo $this->data->meta_description;?></textarea>
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
     url: '<?php echo base_url($this->folder_key.'/settings/submit');?>',            
     data:new FormData(this),
     processData:false,
     contentType:false,
     cache:false,
     async:false,
     success: function(msg){
		var json = JSON.parse(msg);
		if(json['success']){
			window.location="<?php echo base_url($this->folder_key.'/settings');?>";
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