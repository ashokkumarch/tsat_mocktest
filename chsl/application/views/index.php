<!-- Revolution Slider 5.x CSS settings -->
<link  href="<?php echo base_url('assets/js/revolution-slider/css/settings.css');?>" rel="stylesheet" type="text/css"/>
<link  href="<?php echo base_url('assets/js/revolution-slider/css/layers.css');?>" rel="stylesheet" type="text/css"/>
<link  href="<?php echo base_url('assets/js/revolution-slider/css/navigation.css');?>" rel="stylesheet" type="text/css"/>
<link  href="<?php echo base_url('assets/css/rel-slider-style.css');?>" rel="stylesheet" type="text/css"/>        
<!-- CSS | Theme Color -->

<!-- external javascripts -->
<script src="<?php echo base_url('assets/js/jquery-2.2.4.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
<!-- Revolution Slider 5.x SCRIPTS -->
<script src="<?php echo base_url('assets/js/revolution-slider/js/jquery.themepunch.tools.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/revolution-slider/js/jquery.themepunch.revolution.min.js');?>"></script>

<section class="homepage">
<div class="container-fluid">
    <div class="tophead">
         <div class="row">
             <div class="col-sm-3">
                <div class="logo">
                 <img src="<?php echo base_url('assets/images/logo1.png');?>" class="logoimg">
                 <img src="<?php echo base_url('assets/images/logo2.png');?>" class="logoimg">
                 </div>
             </div>
             <div class="col-sm-6">
                 <h1 style="margin-top: 31px;">T-SAT SSC (CHSL) MOCK TEST - TIER1</h1>
             </div>
             <div class="col-sm-3">
                  <div class="logo">
                 <img src="<?php echo base_url('assets/images/logo3.png');?>" class="logoimg">
                 <img src="<?php echo base_url('assets/images/logo4.png');?>" class="logoimg">
                 </div>
             </div>
         </div>
        </div>
</div>
<section id="home">
<div class="container-fluid p-0">

<!-- Slider Revolution Start -->
<div class="rev_slider_wrapper">
  <div class="rev_slider" data-version="5.0">
    <ul>	<!-- SLIDE  -->
 <?php foreach($banners as $key => $value){?>
    <li data-transition="zoomout" data-slotamount="1" data-masterspeed="500" data-thumb="<?php echo base_url($value['image']);?>"  data-saveperformance="on"  data-title="Intro Slide">
    <!-- MAIN IMAGE -->
    <img src="<?php echo base_url($value['image']);?>"  alt="Slider" data-lazyload="<?php echo base_url($value['image']);?>" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
    </li>
  <?php }?>

</ul>
  </div>
  <!-- end .rev_slider -->
</div>
<!-- Slider Revolution Script -->
<script>
  $(document).ready(function(e) {
    $(".rev_slider").revolution({
      dottedOverlay:"none",
                delay:16000,
                startwidth:1170,
                startheight:440,
                hideThumbs:200,
                
                thumbWidth:100,
                thumbHeight:50,
                thumbAmount:5,
                
                navigationType:"bullet",
                navigationArrows:"solo",
                navigationStyle:"preview2",
                
                touchenabled:"on",
                onHoverStop:"on",
                 navigation: {
          keyboardNavigation: "off",
          keyboard_direction: "horizontal",
          mouseScrollNavigation: "off",
          
          touch: {
              touchenabled: "on",
              swipe_threshold: 75,
              swipe_min_touches: 1,
              swipe_direction: "horizontal",
              drag_block_vertical: false
          },
        arrows: {
          style:"zeus",
          enable:true,
          hide_onmobile:true,
          hide_under:600,
          hide_onleave:true,
          hide_delay:200,
          hide_delay_mobile:1200,
          tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
          left: {
            h_align:"left",
            v_align:"center",
            h_offset:30,
            v_offset:0
          },
          right: {
            h_align:"right",
            v_align:"center",
            h_offset:30,
            v_offset:0
          }
        },
        bullets: {
          enable:true,
          hide_onmobile:true,
          hide_under:600,
          style:"metis",
          hide_onleave:true,
          hide_delay:200,
          hide_delay_mobile:1200,
          direction:"horizontal",
          h_align:"center",
          v_align:"bottom",
          h_offset:0,
          v_offset:30,
          space:5,
          tmp:'<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">{{title}}</span>'
        }
      },
                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,
                                        
                                        parallax:"mouse",
                parallaxBgFreeze:"on",
                parallaxLevels:[7,4,3,2,5,4,3,2,1,0],
                                        
                keyboardNavigation:"off",
                
                navigationHAlign:"center",
                navigationVAlign:"bottom",
                navigationHOffset:0,
                navigationVOffset:20,

                soloArrowLeftHalign:"left",
                soloArrowLeftValign:"center",
                soloArrowLeftHOffset:20,
                soloArrowLeftVOffset:0,

                soloArrowRightHalign:"right",
                soloArrowRightValign:"center",
                soloArrowRightHOffset:20,
                soloArrowRightVOffset:0,
                        
                shadow:0,
                fullWidth:"on",
                fullScreen:"off",

                spinner:"spinner4",
                
                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,

                shuffle:"off",
                
                autoHeight:"off",						
                forceFullWidth:"off",						
                                        
                                        
                                        
                hideThumbsOnMobile:"off",
                hideNavDelayOnMobile:1500,						
                hideBulletsOnMobile:"off",
                hideArrowsOnMobile:"off",
                hideThumbsUnderResolution:0,
                
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                startWithSlide:0,
                videoJsPath:"rs-plugin/videojs/",
                fullScreenOffsetContainer: ""	
            });
            
            
            
                            
        });	//ready
    
</script>
<!-- Slider Revolution Ends -->

</div>
</section>
<div class="container" style="margin-top:40px;margin-bottom:40px;">
    <div class="row">
        <div class="col-md-10 col-xs-12 margin-auto">
		<?php echo form_open('/home/submit',array('id' => 'testform'));?>
            <fieldset class="personal-data">
                <div class="col-md-6 form-group">
                    <label for="name">Full Name: <span class="required">*</span></label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Full Name" value="<?php if(isset($_POST['name'])){echo $this->input->post('name');}?>" />
                    <?php echo form_error('name', '<span style="color:#b94a48;">', '</span>'); ?>
                </div>                    
        		<div class="col-md-6 form-group">
                    <label for="qualification">Qualification: <span class="required">*</span></label>
                    <input type="text" name="qualification" class="form-control" placeholder="Enter Qualification" value="<?php if(isset($_POST['qualification'])){echo $this->input->post('qualification');}?>" />
                    <?php echo form_error('qualification', '<span style="color:#b94a48;">', '</span>'); ?>
                </div>
                <div class="col-md-6 form-group">
                <label for="email-address">Email Id: <span class="required">*</span></label>
                    <input type="email" name="email" class="form-control" placeholder="Enter Email Id" value="<?php if(isset($_POST['email'])){echo $this->input->post('email');}?>" />
                    <?php echo form_error('email', '<span style="color:#b94a48;">', '</span>'); ?>
                     <p style="color:#f00;"></p>
                </div>
                <div class="col-md-6 form-group">
                    <label for="email-address">Phone Number: <span class="required">*</span></label>
                    <input type="tel" name="phone" class="form-control" placeholder="Enter Phone Number" value="<?php if(isset($_POST['phone'])){echo $this->input->post('phone');}?>" />
                    <?php echo form_error('phone', '<span style="color:#b94a48;">', '</span>'); ?>
                </div>
            </fieldset>
        
            <div class="col-md-6 form-group">
            <input type="submit" name="submit" value="Submit" class="btn-primary submit">
            </div>
            <div class="clear"></div>
        <?php echo form_close();?>
        </div>
    </div>
</div>
<div class="background3">
<div class="container-fluid">
<div class="row" style="margin-top: 15px;">
<div class="col-md-12 col-xs-12 margin-auto text-center">
    <div class="pwrdby">
        <p>Powered By:</p>
        <a target="_blank" href="http://www.outline.co.in"><img src="https://www.outlinedesigns.in/images/outline_powerdby.png" alt=""></a>

    </div>
    </div>
    </div>
    </div>
</div>
</section>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
       
        <h4 class="modal-title">T-SAT SSC (CHSL) MOCK TEST</h4>
      </div>
      <div class="modal-body">
        <h4>General Instructions:</h4>
		  <p>1. The clock has been set at the server and the countdown timer at the top right corner of your
screen will display the time remaining for you to complete the exam. When the clock runs out the
exam ends by default you are not required to end or submit your exam.</p>
		  <p>2. The question palette at the right of screen show one of the following statuses of each of the
questions numbered.</p>
<ul class="ansclue">
<li class="skip"> <span></span>  <label> &nbsp; You have not answered the question </label></li>
<li class="ans"> <span></span>  <label> &nbsp; You have answered the question </label></li>
<li class="ybr"> <span></span>   <label> &nbsp; You have mark for preview </label></li>
</ul>
		  <p>The marked for review status simply acts as a reminder that you have set to look at the question
again. If a question marked for preview the answer will be considered in the final evaluation.</p>
		  
		  <h4>Navigating to a question:</h4>
		  <p>3. To select a question to answer, you can do one of the following</p>
		  <ul>
		  <li>a. Click on the question number on the question palette at the right of your screen to go that
numbered question directly. Note that using this option does not save your answer to the correct
question.</li>
		  <li>b. Click next to save answer to current question and go to the next question sequence.</li>
		  <li>c. Click on mark for review to save answer to current question, mark it for review and go to the next
question in sequence.</li>
		  </ul>
		  
		  <h4>Answering Questions:</h4>
		  <p>4. For multiple choice type question you can do one of the following</p>
		  
		  <ul>
		  <li>a. To select your answer , click on the option buttons</li>
		  <li>b. To change your answer, click the another desired option button</li>
		  <li>c. To save your answer, you must click on Next</li>
		  <li>d. To deselect a chosen answer click on the Clear Response Button</li>
		  <li>e. To mark a question for review click on Mark for Review. If an answer is selected for a question
that is marked for review, the answer will be considered in final evaluation.</li>
		  </ul>
		  
		  <p>5. To change an answer to question, first select the question and then click Clear response and select
desired option followed by a click on the next button</p>
		  <p>6. Questions that are saved or marked for review after answering will only be considered for evaluation.</p>
		  
		  <h4>Navigating through Sections:</h4>
		  
		 <p>7. Sections in this question paper are displayed on the lower bar of the screen. Questions in a section
can be viewed by clicking on the section name. The section you are currently viewing as highlighted.</p>
		 <p>8. After clicking next button on the last question for a section, you will automatically be taken to the first
question of the next section.</p>
		 <p>9. You can move the mouse cursor over the section names to view the status of the questions for that
section.</p>
		 <p>10. You can shuffle between sections and questions anytime during the examination as per your
convenience.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">I Agree</button>
      </div>
    </div>

  </div>
</div>


<script type="text/javascript">
    $(window).on('load', function() {
        $('#myModal').modal('show');
    });
	
	  $(document).ready(function () {
    $('#myModal').modal({
           backdrop: 'static',
           keyboard: false
    })
   });
</script>


<style>
	.modal-footer .btn{    color: #fff;background: #001394;}
fieldset.personal-data {	border: none !important;}	
.tophead{margin-bottom: 0;}
.pwrdby p, .pwrdby a {    display: inline-block;}
.pwrdby img {    margin-top: -8px;}
.modal-dialog {   width: 80%;   margin: 30px auto;}
.modal-body{ height: 460px;    overflow-y: auto;}
	.ansclue span{width: 16px;  height: 16px;  border-radius: 50px;    display: inline-block;  float: left;  margin-top: 2px;}
.ansclue label{float: none;}
.ansclue .ans span{background-color: #4caf50;}
.ansclue .skip span{background-color: #f44336;}
.ansclue .ybr span{background-color: #ffa500;}
.ansclue  li{list-style-type: none;display: block;margin-bottom: 10px;}
	.ansclue  li label{font-weight: normal;}
</style>
<script src="<?php echo base_url('assets/js/jquery.validate.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/simpleform.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/revolution-slider/js/extensions/revolution.extension.actions.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/revolution-slider/js/extensions/revolution.extension.migration.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/revolution-slider/js/extensions/revolution.extension.video.min.js');?>"></script>

<script type="text/javascript">
$(".testform").simpleform({
	speed : 500,
	transition : 'fade',
	progressBar : true,
	showProgressText : true,
	validate: true
});
function validateForm(formID, Obj){

	switch(formID){
		case 'testform' :
			Obj.validate({
				rules: {
					email: {
						required: true,
						email: true
					},
					name: {
						required: true
					},
					street: {
						required: true
					}
				},
				messages: {
					email: {
						required: "Please enter an email address",
						email: "Not a valid email address"
					},
					name: {
						required: "Please enter your name"
					},
					street: {
						required: "Please enter street name"
					}
				}
			});
		return Obj.valid();
		break;
	}
}
</script>