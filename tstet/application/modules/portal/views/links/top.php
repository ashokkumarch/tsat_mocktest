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
  <title>.:: <?php echo $this->data->title;?> | Admin ::.</title>
  <!--favicon-->
  <link rel="icon" href="<?php echo base_url($this->data->favicon);?>" type="image/x-icon"/>
  <!-- Vector CSS -->
  <link href="<?php echo base_url('assets/admin'.$theme.'/plugins/vectormap/jquery-jvectormap-2.0.2.css');?>" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="<?php echo base_url('assets/admin'.$theme.'/plugins/simplebar/css/simplebar.css');?>" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url('assets/admin'.$theme.'/css/bootstrap.min.css');?>" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="<?php echo base_url('assets/admin'.$theme.'/css/animate.css');?>" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="<?php echo base_url('assets/admin'.$theme.'/css/icons.css');?>" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="<?php echo base_url('assets/admin'.$theme.'/css/sidebar-menu.css');?>" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="<?php echo base_url('assets/admin'.$theme.'/css/app-style.css');?>" rel="stylesheet"/>
  <link href="<?php echo base_url('assets/admin'.$theme.'/plugins/select2/css/select2.min.css');?>" rel="stylesheet"/>
  <link href="<?php echo base_url('assets/admin'.$theme.'/plugins/jquery-multi-select/multi-select.css');?>" rel="stylesheet" type="text/css">
  <!-- skins CSS-->
  <link href="<?php echo base_url('assets/admin'.$theme.'/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css');?>" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url('assets/admin'.$theme.'/plugins/bootstrap-colorpicker/bootstrap-colorpicker.css');?>" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url('assets/admin'.$theme.'/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css');?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets/admin'.$theme.'/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css');?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets/admin'.$theme.'/plugins/switchery/css/switchery.min.css');?>" rel="stylesheet" />
<link href="<?php echo base_url('assets/admin'.$theme.'/plugins/bootstrap-switch/bootstrap-switch.min.css');?>" rel="stylesheet">
<style>.modal-lg{max-width:70%!important;}</style>  
</head>
<body<?php if($this->data->theme>0){echo ' class="bg-theme bg-theme'.$this->data->theme.'"';}?>>
   <!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner"><div class="loaderr"></div></div></div></div>
   <!-- end loader -->
<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="<?php echo base_url($this->folder_key);?>"><?php if($this->data->image==''){echo $this->data->title;}else {?><img src="<?php echo base_url($this->data->image);?>" style="height:100%;" alt=""><?php }?>
       <h5 class="logo-text"><?php echo $this->data->title;?></h5> 
      </a>
   </div>
   <?php include('menu.php');?>
   
   </div>
   <!--End sidebar-wrapper-->
<!--Start topbar header-->
<header class="topbar-nav">
 <nav id="header-setting" class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
   <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><?php echo $this->session->userdata($this->folder_key.'_name');?></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="<?php if($this->data->image!=''){echo base_url($this->data->image);}else{echo base_url('assets/portal'.$theme.'/images/no-image.gif');}?>" alt=""></div>
            <div class="media-body">
            <h6 class="mt-2 user-title"><?php echo $this->session->userdata($this->folder_key.'_name');?></h6>
            <p class="user-subtitle"><?php echo $this->session->userdata($this->folder_key.'_type');?></p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
       <?php /*?> <li class="dropdown-item"><a href="<?php echo base_url($this->folder_key.'/settings');?>"><i class="icon-settings mr-2"></i> Settings</a></li>
        <li class="dropdown-divider"></li><?php */?>
        <li class="dropdown-item"><a href="<?php echo base_url($this->folder_key.'/login/logout_user');?>"><i class="icon-power mr-2"></i> Logout</a></li>
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->
<div class="clearfix"></div>