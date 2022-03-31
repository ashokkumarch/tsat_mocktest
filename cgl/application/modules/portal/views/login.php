<?php defined('BASEPATH') OR exit('No direct script access allowed');
if($this->data->theme>0){$theme = '-dark';}else{$theme = '';}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>.:: <?php echo $this->data->title;?> | Login ::.</title>
  <!--favicon-->
  <link rel="icon" href="<?php echo base_url($this->data->favicon);?>" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url('assets/admin'.$theme.'/css/bootstrap.min.css');?>" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="<?php echo base_url('assets/admin'.$theme.'/css/animate.css');?>" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="<?php echo base_url('assets/admin'.$theme.'/css/icons.css');?>" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="<?php echo base_url('assets/admin'.$theme.'/css/app-style.css');?>" rel="stylesheet"/>
  
</head>
<body<?php if($this->data->theme>0){echo ' class="bg-theme bg-theme'.$this->data->theme.'"';}?>>
<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->
<!-- Start wrapper-->
 <div id="wrapper">
 <div class="loader-wrapper"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div>
	<div class="card card-authentication1 mx-auto my-5">
		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<?php if($this->data->image==''){echo $this->data->title;}else {?><img src="<?php echo base_url($this->data->image);?>" style="height:165px;" alt=""><?php }?>
		 	</div>
		  <div class="card-title text-uppercase text-center py-3">Sign In</div>
		    <?php echo form_open(base_url($this->folder_key.'/login/login_user')); ?>
			  <div class="form-group">
			  <label class="sr-only">Username</label>
			   <div class="position-relative has-icon-right">
                  <input type="text" class="form-control input-shadow" name="username" placeholder="Enter Username" autocomplete="off" value="<?php echo set_value('username'); ?>" />
				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
			   </div>
               <?php echo form_error('username', '<span style="color:#a81b1f;">', '</span>'); ?>
			  </div>
			  <div class="form-group">
			  <label class="sr-only">Password</label>
			   <div class="position-relative has-icon-right">
                  <input type="password" class="form-control input-shadow" name="password" placeholder="Enter Password" autocomplete="off" value="<?php echo set_value('password'); ?>" />
				  <div class="form-control-position">
					  <i class="icon-lock"></i>
				  </div>
			   </div>
               <?php echo form_error('password', '<span style="color:#a81b1f;">', '</span>'); ?>
          		<span style="color:#a81b1f;"><?php if(isset($error)){echo $error;}?></span>
			  </div>
			 <button type="submit" class="btn btn-primary btn-block">Sign In</button>
			 <?php echo form_close();?>
		   </div>
		  </div>
	     </div>
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	</div><!--wrapper-->
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('assets/admin'.$theme.'/js/jquery.min.js');?>"></script>
  <script src="<?php echo base_url('assets/admin'.$theme.'/js/popper.min.js');?>"></script>
  <script src="<?php echo base_url('assets/admin'.$theme.'/js/bootstrap.min.js');?>"></script>
  <!-- sidebar-menu js -->
  <script src="<?php echo base_url('assets/admin'.$theme.'/js/sidebar-menu.js');?>"></script>
  <!-- Custom scripts -->
  <script src="<?php echo base_url('assets/admin'.$theme.'/js/app-script.js');?>"></script>
</body>
</html>