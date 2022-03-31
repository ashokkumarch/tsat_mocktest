<?php 
if($this->session->userdata($this->folder_key.'_type')=='Admin'){
//header('Location:'.base_url().$this->folder_key.'/dashboard/');
}
?>
<div class="content-wrapper">
    <div class="container-fluid">
	  
	<div class="row">
     <div class="col-12 col-lg-12 col-xl-12">
	    <div class="card">
		 <div class="card-body" style="margin:17% auto;">
		   <h1 class="text-center" style="margin:auto;">Welcome <span style="color:#7934f3"><?php echo ucwords($this->session->userdata($this->folder_key.'_name'));?></span></h1>
		 </div>
		</div>
	 </div>
	</div><!--End Row-->
	  <div class="overlay toggle-menu"></div>
	<!--end overlay-->
    </div>
    <!-- End container-fluid-->
    
    </div>  
<script src="<?php echo base_url('assets/admin'.$theme.'/js/jquery.min.js');?>"></script>
<script src="<?php echo base_url('assets/admin'.$theme.'/js/popper.min.js');?>"></script>
<script src="<?php echo base_url('assets/admin'.$theme.'/js/bootstrap.min.js');?>"></script>
<!-- simplebar js -->
<script src="<?php echo base_url('assets/admin'.$theme.'/plugins/simplebar/js/simplebar.js');?>"></script>
<!-- sidebar-menu js -->
<script src="<?php echo base_url('assets/admin'.$theme.'/js/sidebar-menu.js');?>"></script>
<!-- Custom scripts -->
<script src="<?php echo base_url('assets/admin'.$theme.'/js/app-script.js');?>"></script>
<!-- Chart js -->
<script src="<?php echo base_url('assets/admin'.$theme.'/plugins/Chart.js/Chart.min.js');?>"></script>
<!-- Vector map JavaScript -->
<script src="<?php echo base_url('assets/admin'.$theme.'/plugins/vectormap/jquery-jvectormap-2.0.2.min.js');?>"></script>
<script src="<?php echo base_url('assets/admin'.$theme.'/plugins/vectormap/jquery-jvectormap-world-mill-en.js');?>"></script>
<!-- Easy Pie Chart JS -->
<script src="<?php echo base_url('assets/admin'.$theme.'/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js');?>"></script>
<!-- Sparkline JS -->
<script src="<?php echo base_url('assets/admin'.$theme.'/plugins/sparkline-charts/jquery.sparkline.min.js');?>"></script>
<script src="<?php echo base_url('assets/admin'.$theme.'/plugins/jquery-knob/excanvas.js');?>"></script>
<script src="<?php echo base_url('assets/admin'.$theme.'/plugins/jquery-knob/jquery.knob.js');?>"></script>
<script>
	$(function() {
		$(".knob").knob();
	});
</script>
<!-- Index js -->
<script src="<?php echo base_url('assets/admin'.$theme.'/js/index.js');?>"></script>