<div class="col-lg-3 fileupload fileupload-new" data-provides="fileupload">
     <div class="fileupload-new thumbnail" >
     	<img src="<?php echo base_url('assets/admin'.$theme.'/images/no-image.gif');?>" />
     </div>
     <div class="fileupload-preview fileupload-exists thumbnail"></div>
     <div>
         <span class="btn btn-file"><span class="fileupload-new">Select Image</span><span class="fileupload-exists" style="padding:6px;">Change</span><input type="file" accept="image/*" name="file<?php echo $cnt; ?>" /></span>
         <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
     </div>
 </div>