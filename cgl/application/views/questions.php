<?php 
$questions_no = $this->session->userdata('questions_no');
$question = $questions[$questions_no];?>
<div class="col-md-9">	
<div class="col-sm-12 form-group tabheight">
        <div class="row widthfull">
            <div class="col-md-12">
            <p class="mb-30px"><strong>Q-<?php echo $questions_no+1;?> : <?php echo $question['question_name'];?>?</strong></p>
            </div>
            <div class="clearfix"></div>
            <?php for($i=1;$i<5;$i++){?>
            <div class="col-md-3">
                <input type="radio" name="answer" id="ans_<?php echo $i;?>" value="<?php echo $i;?>" <?php if((isset($question['answer']) && $question['answer']==$i)){echo 'checked';}?>> <label for="ans_<?php echo $i;?>"> <?php echo $question['question_ans_'.$i];?></label>
            </div>                            
            <?php }?>
        </div>
    </div>
<div class="col-md-12" style="padding: 20px 0; border-top: solid 1px #d0d0d0;">                      
    <div class="col-md-4">
        <input type="radio" name="ytr" class="ytr" id="ytr" value="5" <?php if((isset($question['ytr']) && $question['ytr']==1)){echo 'checked';}?>> 
        <label for="ytr">Yet to be Review</label>
    </div>    
    <div class="col-md-4 ">
        <input type="radio" name="ytr" id="clear"> 
        <label for="clear">Clear Response</label>
    </div>   
    <?php if((count($this->session->userdata('questions_list')) > ($this->session->userdata('questions_cat')+1)) || (count($this->session->userdata('questions_list')) == ($this->session->userdata('questions_cat')+1)) && (count($questions) > ($questions_no+1))){?>                  
    <div class="col-md-4">
    <button type="button" class="btnnext pull-right" data-id="<?php echo $questions_no;?>">Next</button>
    </div>
    <?php }?>
</div>
</div>         
<div class="col-md-3"  style="padding-right: 8px;">
<div class="boxnbrs">
     <p><?php echo $questions_cat;?></p>
    <ul>
        <?php foreach($questions as $key => $value){?>
        <li><button type="button" class="btnprev <?php if((isset($value['answer']) && $value['answer']==0) && (isset($value['ytr']) && $value['ytr']==0)){echo 'skip';}else if((isset($value['answer']) && $value['answer']!=0) && (isset($value['ytr']) && $value['ytr']==1)){echo 'ybr';}else if((isset($value['answer']) && $value['answer']!=0) && (isset($value['ytr']) && $value['ytr']==0)){echo 'ans';}?>" id="prevBtn<?php echo $key;?>" data-id="<?php echo $key;?>"> <?php echo ($key+1);?></button></li>
        <?php }?>                                        
    </ul>
 </div>
<div class="col-md-12" style="padding: 0;text-align: center;">
    <button class="btn" name="submit" id="submit" value="submit" type="submit" style="color:#fff;">Final Submit</button>
</div>
</div> 
<script>
$(".btnprev").on('click', function() {
  var id = $(this).data("id"); 
	$.ajax({			   
		type: "POST",			   
		url: "<?php echo base_url('questions/previous');?>",	
		data: "id="+id,
		success: function(msg){			 	 
		getfilters();
		}			
	});
});

$(".btnnext").on('click', function() {
  var id = $(this).data("id"); 
  var answer = 0;
	var selected = $("input[name='answer']:checked");
	if (selected.length > 0) {
		answer = selected.val();
	}
	
	if($("#ytr").is(":checked")) {
      ytr = 1;
    }else{
	  ytr = 0;
	}	
	$.ajax({			   
		type: "POST",			   
		url: "<?php echo base_url('questions/answer');?>",	
		data: "answer="+answer+"&ytr="+ytr,
		success: function(msg){		
			re = msg.split('@@');	 	 
			if(re[0]=='Success'){
			   for(i=1;i<=<?php echo count($this->session->userdata('questions_list'));?>;i++){
			   $(".taba"+i).removeClass("active");
			   }
			   $(".taba"+re[1]).toggleClass("active");
				getfilters();
			}
		}			
	});
});
function getfilters(){
  $.ajax({			   
	type: "POST",			   
	url: "<?php echo base_url('questions');?>",	
	success: function(msg){			 	 
	$("#results").html(msg);
	}			
	});	
}
$("#clear").on('click', function() {
	$('input[name="answer"]').prop('checked', false);
});
</script>