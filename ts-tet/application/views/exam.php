<link id="styleSheet0" rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/common.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/jquery-steps.css');?>">
<section class="homepage">
<div class="background1">
<div class="container-fluid">
    <div class="tophead">
         <div class="row">
             <div class="col-sm-3">
                <div class="logo">
                 <img src="<?php echo base_url('assets/images/logo.png');?>" class="logoimg" style="width: 46px;">
                 </div>
             </div>
             <div class="col-sm-6">
                 <h1>T-SAT TS TET MOCK TEST</h1>
             </div>
             <div class="col-sm-3 mt-2">                 
                 <h1 class='timer' data-minutes-left=<?php echo $timer;?>></h1>
				<div class='actions'></div>
             </div>
         </div>
        </div>
        
        <div class="row">
            <div class="col-sm-9">
    <div class="lbelhead">
    <div class="row">
        <div class="col-sm-6 form-group">
            <label for="name">Name:  <?php echo $member->name;?></label>
        </div>
            
      <div class="col-sm-6 form-group">
        <label for="email-address">Email Id: <?php echo $member->email;?></label>
        </div>
        
        <div class="col-sm-6 form-group">
            <label for="phone">Mobile : <?php echo $member->phone;?></label>
        </div>
        
        <div class="col-sm-6 form-group">
            <label for="qualification">Qualification: <?php echo $member->qualification;?></label>
        </div>
        
    </div>
            </div>
            </div>
            
            <div class="col-sm-3">
                <div class="attemptslbl">
                <div class="row">
                <div class="col-md-9">
                     <label>Current Attempt:</label>
                </div>
                <div class="col-md-2">
                     <label><span><?php echo $attempts;?></span></label>
                </div>
                <div class="col-md-9" >
                   <label>Previous Attempts: </label>
                </div>
            
             <div class="col-md-2">
                   <label><span><?php echo ($attempts-1);?></span></label>
                </div>
                
                <div class="col-md-9">
                    <label>Previous Score: </label>
                </div>
            
            <div class="col-md-2">
                    <label> <span><?php if($last_attempt!=''){echo $last_attempt->score;}else{echo '0';}?></span></label>
                </div>
       		 </div>
            </div>
            </div>
                 
            </div>
            
<div class="clearfix"></div>
    
</div>
</div>
<div class="background2" style="padding-bottom: 5px;">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-xs-12 margin-auto">
            
         	<?php echo form_open('exam/submit', array('class' => 'testform','id' => 'regForm'));?>
            <div class="tab-content">
            <div class="tab-pane fade in active">        
              <div class="row" id="results"></div>            
            </div>
            </div>
           <?php echo form_close();?>
    
    <div class="row">
        <div class="col-md-9">	
            <div class="sx-icon-box-wraper  icon-count-2-outer mt-2" style="margin-top: 15px;">
                <div class="icon-count-2 bg-white text-center">
                    <?php foreach($this->session->userdata('questions_list') as $key => $value){?>
                    <div class="icon-content active">
                        <a href="javascript:void(0)" data-id="<?php echo $key;?>" class="cate taba<?php echo ($key+1);?><?php if($this->session->userdata('questions_cat')==$key){echo ' active';}?>"><?php echo $value['title'];?></a>
                      </div>
                    <?php }?>
                    
                </div>
            </div>  	
        </div>        
        <div class="col-md-3"  >
            <div class="boxnbrs ansclue mt-2" style="padding: 8px 10px;margin-top: 15px;">                 
                  <div class="col-md-5 ans">
					  <span></span><label>Answered</label>
                    </div>                 
                 <div class="col-md-7 skip">
                        <span></span><label>Skip the question</label>
                    </div>                 
                  <div class="col-md-6 ybr">
                         <span></span><label>Yet to be review</label>
                    </div>
                </div>
            </div>
        </div>            
        </div>
    </div>
</div>
</div>
</section>
<script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-latest.min.js"></script>
<?php /*?><script src="<?php echo base_url('assets/js/jquery-steps.js');?>"></script><?php */?>
<script src="<?php echo base_url('assets/js/index.js');?>"></script>
<script src="<?php echo base_url('assets/js/jsCookie.js');?>"></script>
<script src="<?php echo base_url('assets/js/jquery.simple.timer.js');?>"></script>
<script src="<?php echo base_url('assets/js/dojo.js');?>"></script>

  <SCRIPT TYPE="text/javascript"> 

var message="Sorry, right-click has been disabled"; 
/////////////////////////////////// 
function clickIE() {if (document.all) {(message);return false;}} 
function clickNS(e) {if 
(document.layers||(document.getElementById&&!document.all)) { 
if (e.which==2||e.which==3) {(message);return false;}}} 
if (document.layers) 
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;} 
else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;} 
document.oncontextmenu=new Function("return false") 

</SCRIPT> 


<script>
document.onkeydown = function(e) {
  if(event.keyCode == 123) {
     return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
     return false;
  }
   if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
     return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
     return false;
  }
  if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
     return false;
  }
   if(e.ctrlKey && e.keyCode == 'C'.charCodeAt(0)) {
     return false;
  }
}
</script>
<script>
	function filters() {
	  setTimeout(getfilters, 1000);
	}
	function getfilters(){
	  $.ajax({			   
		type: "POST",			   
		url: "<?php echo base_url('questions');?>",		   
		beforeSend: function(){
		//$('.loading').show();
		},
		success: function(msg){			 	 
		$("#results").html(msg);
		//$('.loading').hide(); 
		}			
		});	
	}
$(document).ready(function(){
   filters();
});
$(".cate").on('click', function() {
  var id = $(this).data("id"); 
	$.ajax({			   
		type: "POST",			   
		url: "<?php echo base_url('questions/prevtab');?>",	
		data: "id="+id,
		success: function(msg){	
		for(i=1;i<=<?php echo ($key+1);?>;i++){
		$(".taba"+i).removeClass("active");
		}
	    $(".taba"+(id+1)).toggleClass("active");		 	 
		getfilters();
		}			
	});
});
</script>
<style>
.mb-20px{float: left;    margin-right: 5px;}
	.icon-content  a.active { color: #f44336;} 
/*.icon-content  a.taba1.active { color: #f44336 !important;} 
.icon-content  a.taba2.active { color: #f44336 !important;} 
.icon-content  a.taba3.active { color: #f44336 !important;} 
.icon-content  a.taba4.active { color: #f44336 !important;} */
.step-app > .step-content {		border: none;}
.step-btn{float: right;}
.step-btn a{background-color: #4CAF50;    color: #ffffff;    font-size: 15px;    cursor: pointer;    border-radius: 5px;}
.step-app > .step-steps > li{padding: 0;}
.step-app > .step-steps{    visibility: hidden;    opacity: 0;line-height: 0;}
.step-app > .step-content > .step-tab-panel.active {     height: 190px;    overflow: auto;}
#regForm {padding-top: 15px;padding-bottom: 10px;}
#regForm .tab{    height: 186px;  overflow: auto;}
input {padding: 10px;width: 100%;font-size: 17px;font-family: Raleway;border: 1px solid #aaaaaa;}
/* Mark input boxes that gets an error on validation: */
input.invalid {background-color: #ffdddd;}
/* Hide all steps by default: */
.tab {display: none;}
button {background-color: #4CAF50;color: #ffffff;border: none;padding: 6px 20px;font-size: 15px;/* font-family: Raleway; */cursor: pointer;    border-radius: 5px;}
button:hover {opacity: 0.8;}
#prevBtn {background-color: #bbbbbb;}
/* Make circles that indicate the steps of the form: */
.step {height: 15px;width: 15px;margin: 0 2px;background-color: #bbbbbb;border: none;  border-radius: 50%;display: inline-block;opacity: 0.5;}
.step.active {opacity: 1;}
/* Mark the steps that are finished and valid: */
.step.finish {background-color: #4CAF50;}	
.tab .col-sm-12.form-group{/*border-bottom: solid 1px #d0d0d0;*/ padding-bottom:10px;}
.tab .submtformvsbl {display: none;}
.tab.highlights .submtformvsbl {display: block !important;position: absolute;bottom: 10px;right: 10px;z-index: 9;}
.sumitform {float: right;background-color: #4CAF50;color: #ffffff;border: none;padding: 8px 20px;font-size: 17px;/* font-family: Raleway; */cursor: pointer;border-radius: 5px;}
.icon-content a {font-size: 14px;}
</style>	