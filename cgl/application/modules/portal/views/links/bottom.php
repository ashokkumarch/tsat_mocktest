<!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<?php /*?><footer class="footer">
      <div class="container">
        <div class="text-center">
          Powered by: <a href="http://webykw.com" target="_blank">Weby</a>
        </div>          
      </div>      
    </footer><?php */?>
    <div onclick="playSound('bell_ring');" id="notify"></div>  
   	  <div id="sound"></div>
	<!--End footer-->  
  </div><!--End wrapper-->
  <script src="<?php echo base_url('assets/admin'.$theme.'/plugins/switchery/js/switchery.min.js');?>"></script>
<script>
  var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
  $('.js-switch').each(function() {
		new Switchery($(this)[0], $(this).data());
   });
</script>
<!--Bootstrap Switch Buttons-->
<script src="<?php echo base_url('assets/admin'.$theme.'/plugins/bootstrap-switch/bootstrap-switch.min.js');?>"></script>
<script>
$(".bt-switch input[type='checkbox'], .bt-switch input[type='radio']").bootstrapSwitch();
var radioswitch = function() {
	var bt = function() {
		$(".radio-switch").on("switch-change", function() {
			$(".radio-switch").bootstrapSwitch("toggleRadioState")
		}), $(".radio-switch").on("switch-change", function() {
			$(".radio-switch").bootstrapSwitch("toggleRadioStateAllowUncheck")
		}), $(".radio-switch").on("switch-change", function() {
			$(".radio-switch").bootstrapSwitch("toggleRadioStateAllowUncheck", !1)
		})
	};
	return {
		init: function() {
			bt()
		}
	}
}();
$(document).ready(function() {
	radioswitch.init()
});
</script>
  <script>
		function invoice(){	document.getElementById("notify").click();  }	
	  <?php if($this->orders_cnt>0){?>
	  	invoice();
		setInterval(function(){ invoice() }, 5000);
		<?php }?>
      function playSound(filename){
        var mp3Source = '<source src="<?php echo base_url('assets/admin'.$theme.'/sounds/');?>' + filename + '.mp3" type="audio/mpeg">';
        var oggSource = '<source src="<?php echo base_url('assets/admin'.$theme.'/sounds/');?>' + filename + '.ogg" type="audio/ogg">';
        var embedSource = '<embed hidden="true" autostart="true" loop="false" src="<?php echo base_url('assets/admin'.$theme.'/sounds/');?>' + filename +'.mp3">';
        document.getElementById("sound").innerHTML='<audio autoplay="autoplay">' + mp3Source + oggSource + embedSource + '</audio>';
   }
    </script>
  <script>		
		function status(sid,tab){
			var status=document.getElementById('status'+sid).innerHTML;			
			$.ajax({			   
			type: "POST",			   
			url: "<?php echo base_url($this->folder_key.'/');?>"+tab+"/status/"+sid+"/"+status,			   
			success: function(msg){			 	 
			document.getElementById('status'+sid).innerHTML=msg;				   
			}			
			});		
		}	
		function substatus(sid,cont,tab){
			var status=document.getElementById('status'+sid).innerHTML;			
			$.ajax({			   
			type: "POST",			   
			url: "<?php echo base_url($this->folder_key.'/');?>"+cont+"/sub_status/"+tab+"/"+sid+"/"+status,			   
			success: function(msg){			 	 
			document.getElementById('status'+sid).innerHTML=msg;				   
			}			
			});		
		}	
		function changesort(val,id,tab){
			$.ajax({			   
			type: "POST",			   
			url: "<?php echo base_url($this->folder_key.'/');?>"+tab+"/sorting/"+id+"/"+val,
			success: function(msg){ }			 
			});		
		}
		function changesubsort(val,id,cont,tab){
			$.ajax({			   
			type: "POST",			   
			url: "<?php echo base_url($this->folder_key.'/');?>"+cont+"/sub_sort/"+tab+"/"+id+"/"+val,
			success: function(msg){ }			 
			});		
		}
		function changesort_img(val,id,tab){
			$.ajax({			   
			type: "POST",			   
			url: "<?php echo base_url($this->folder_key.'/');?>"+tab+"/sorting_img/"+id+"/"+val,
			success: function(msg){ }			 
			});		
		}
		function curstatus(){
			if($('#cur_status').is(':checked')){status = 0;}else{status = 1;}
			$.ajax({
			type: "POST",
			url: "<?php echo base_url();?>admin/dashboard/curstatus/"+status,
			success: function(msg){
			}			 
			});		
		}
    </script>
  
</body>
</html>