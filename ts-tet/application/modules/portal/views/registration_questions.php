<?php $questions = json_decode($info->questions);?>
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Registrations Management</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url($this->folder_key);?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Questions List</li>
         </ol>
	   </div>
     </div>
    <!-- End Breadcrumb-->
      <div class="row">
        <div class="col-lg-12">
         <div class="clearfix"></div>
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Questions List (Score: <?php echo $info->score;?>)</div>
            <div class="card-body">
              <ul class="nav nav-tabs nav-tabs-info nav-justified">
                  <?php foreach($questions as $key => $value){?>
                  <li class="nav-item">
                    <a class="nav-link <?php if($key==0){echo 'active';}?>" data-toggle="tab" href="#tab_<?php echo $key;?>"><?php echo $value->title;?><br />(Score: <?php echo $value->score;?>)</a>
                  </li>
                  <?php }?>
                </ul>
                <div class="tab-content">
                  <?php foreach($questions as $key => $value){?>
                  <div id="tab_<?php echo $key;?>" class="container tab-pane <?php if($key==0){echo 'active';}?>">
                   <?php foreach($value->list as $key1 => $value1){?>	
                   <div class="row">
                    <div class="col-md-12"><p><b>Q-<?php echo $key1+1;?>:</b> <?php echo $value1->question_name;?></p></div>
                    <div class="col-md-3"><p><b>1:</b> <?php echo $value1->question_ans_1;?></p></div>
                    <div class="col-md-3"><p><b>2:</b> <?php echo $value1->question_ans_2;?></p></div>
                    <div class="col-md-3"><p><b>3:</b> <?php echo $value1->question_ans_3;?></p></div>
                    <div class="col-md-3"><p><b>4:</b> <?php echo $value1->question_ans_4;?></p></div>
                    <div class="col-md-12"><hr /></div>
                    <div class="col-md-4"><p><b>Correct Answer:</b> <?php echo $value1->question_correct_ans;?></p></div>
                    <div class="col-md-4"><p><b>Given Answer:</b> <?php if(isset($value1->answer)){echo $value1->answer;}else{echo 'N/A';}?></p></div>
                    <div class="col-md-4"><p><b>Yet to be Review:</b> <?php if(isset($value1->ytr)){if($value1->ytr==1){echo 'Yes';}else{echo 'No';}}else{echo 'N/A';}?></p></div>
                   </div>
                   <?php if(($key1+1)!=count($value->list)){?>
                   <hr style="border:1px solid;" />
                  <?php }}?>  
                  </div>
                  <?php }?>
                </div>
            </div>
          </div>
        </div>
      </div>
	 <div class="overlay toggle-menu"></div>
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