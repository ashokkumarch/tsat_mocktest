<div class="content-wrapper">
<div class="container-fluid">
  <!-- Breadcrumb-->
 <div class="row pt-2 pb-2">
    <div class="col-sm-9">
        <h4 class="page-title">Users Management</h4>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url($this->folder_key);?>">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">User</li>
     </ol>
   </div>
 </div>
<!-- End Breadcrumb-->
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header"><i class="fa fa-table"></i> User</div>
        <div class="card-body">
         <?php echo form_open_multipart(base_url($this->folder_key.'/users/submit'),array('id' => 'form')); ?>
          <input type="hidden" class="form-control" id="id" name="id" value="<?php if(isset($_GET['id'])){echo $info->id;}?>">
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Name *</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="name" name="name" value="<?php if(isset($_GET['id'])){echo $info->name;}?>">
              </div>
              <label class="col-sm-2 col-form-label">Email *</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="email" name="email" value="<?php if(isset($_GET['id'])){echo $info->email;}?>">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Username *</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="username" name="username" value="<?php if(isset($_GET['id'])){echo $info->username;}?>">
              </div>
              <label class="col-sm-2 col-form-label">Password *</label>
              <div class="col-sm-4">
                <input type="password" class="form-control" id="password" name="password">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Type *</label>
              <div class="col-sm-4">
                <select class="form-control" id="type" name="type">
                    <option></option>	               
                    <option value="Admin" <?php if(isset($_GET['id'])){if($info->type=='Admin'){echo 'selected="selected"';}}?>>Admin</option>
                    <option value="User" <?php if(isset($_GET['id'])){if($info->type=='User'){echo 'selected="selected"';}}?>>User</option>
              </select>
              </div>
            </div>
            <?php $access = json_decode($info->access);?>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Access *</label>
              <div class="col-sm-10">
                <select name="access[]" multiple="multiple" class="form-control multi-select" id="access">
                    <?php foreach($this->menu_list as $key => $value){
                        if($value['controller']==''){
                        ?>
                       <optgroup label="<?php echo $value['title'];?>">
                       <?php foreach($value['list'] as $key1 => $value1){?>
                       <option <?php if(isset($_GET['id'])){if(in_array($value1['id'], $access)){echo 'selected="selected"';}}?> value="<?php echo $value1['id'];?>">--><?php echo $value1['title'];?></option>
                       <?php }?>
                       </optgroup> 
                        <?php }else{?>
                        <option <?php if(isset($_GET['id'])){if(in_array($value['id'], $access)){echo 'selected="selected"';}}?> value="<?php echo $value['id'];?>">-><?php echo $value['title'];?></option>
                     <?php }}?>
                </select>
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
<style>.ms-container{width:auto!important;}</style>
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
<script src="<?php echo base_url('assets/admin'.$theme.'/plugins/select2/js/select2.min.js');?>"></script>
<script src="<?php echo base_url('assets/admin'.$theme.'/plugins/jquery-multi-select/jquery.multi-select.js');?>"></script> 
<!--Form Validatin Script-->
<script src="<?php echo base_url('assets/admin'.$theme.'/plugins/jquery-validation/js/jquery.validate.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/ckfinder/ckfinder.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/ckfinder/ckeditor/ckeditor.js');?>"></script>     
<script>
$().ready(function() {
$('#access').multiSelect({
	selectableOptgroup: true
});	
$('#form').on('submit', function(e){
	e.preventDefault();
    $.ajax({
     type: 'POST',
     url: '<?php echo base_url($this->folder_key.'/users/submit');?>',            
     data:new FormData(this),
     processData:false,
     contentType:false,
     cache:false,
     async:false,
     success: function(msg){
		var json = JSON.parse(msg);
		if(json['success']){
			window.location="<?php echo base_url($this->folder_key.'/users');?>";
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
</script>