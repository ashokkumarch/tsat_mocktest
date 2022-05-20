<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Reports</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url($this->folder_key);?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Reports</li>
         </ol>
	   </div>
     </div>
    <!-- End Breadcrumb-->
    
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
            <?php echo form_open(base_url($this->folder_key.'/reports'),array('id' => 'form'));?>
             <div class="form-group row">
              <div class="col-sm-2">
                <input type="text" name="date_from" class="form-control datepicker" required autocomplete="off" placeholder="From Date" value="<?php if(isset($_POST['date_from'])){echo $this->input->post('date_from');}?>" />
              </div>
              <div class="col-sm-2">
                <input type="text" name="date_to" class="form-control datepicker" required autocomplete="off" placeholder="To Date"  value="<?php if(isset($_POST['date_to'])){echo $this->input->post('date_to');}?>" />
              </div>
              <div class="col-sm-2">
                <input type="text" name="delivery_date" class="form-control datepicker" autocomplete="off" placeholder="Delivery Date"  value="<?php if(isset($_POST['delivery_date'])){echo $this->input->post('delivery_date');}?>" />
              </div>
              <div class="col-sm-2">
                <select name="payment" class="form-control">
                    <option value="all">ALL</option>	               
                    <option <?php if(isset($_POST['payment'])){if($this->input->post('payment')=='COD'){echo 'selected="selected"';}}?> value="COD">COD</option>
                    <option <?php if(isset($_POST['payment'])){if($this->input->post('payment')=='KNET'){echo 'selected="selected"';}}?> value="KNET">KNET</option>
                    <option <?php if(isset($_POST['payment'])){if($this->input->post('payment')=='VISAMASTER'){echo 'selected="selected"';}}?> value="VISAMASTER">VISA/MASTER</option>
                </select>
              </div>
              <div class="col-sm-2">
                <select name="delivery" class="form-control">
                    <option value="all">ALL</option>	               
                    <option <?php if(isset($_POST['delivery'])){if($this->input->post('delivery')=='0'){echo 'selected="selected"';}}?> value="0">Pending</option>
                    <option <?php if(isset($_POST['delivery'])){if($this->input->post('delivery')=='1'){echo 'selected="selected"';}}?> value="1">Order Accepted</option>
                    <option <?php if(isset($_POST['delivery'])){if($this->input->post('delivery')=='2'){echo 'selected="selected"';}}?> value="2">Parcel Ready</option>
                    <option <?php if(isset($_POST['delivery'])){if($this->input->post('delivery')=='3'){echo 'selected="selected"';}}?> value="3">Delivered</option>
                    <option <?php if(isset($_POST['delivery'])){if($this->input->post('delivery')=='4'){echo 'selected="selected"';}}?> value="4">Cancelled</option>
                </select>
              </div>
                            
              <div class="col-sm-2">
                <select name="country" class="form-control">
                    <option value="all">ALL</option>	 
                    <?php foreach($countries as $key => $value){?>              
                    <option <?php if(isset($_POST['country'])){if($this->input->post('country')==$value['id']){echo 'selected="selected"';}}?> value="<?php echo $value['id'];?>"><?php echo $value['title'];?></option>
                    <?php }?>
                </select>
              </div>
              <div class="col-sm-2">
              <button type="submit" name="submit" class="btn btn-success waves-effect waves-light">Search</button>
              </div>
            </div>
            <?php echo form_close();?>
            </div>
         </div>
        </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header">Total Orders</div>
            <div class="card-body">
                <div class="row">
                  <div class="col"><p>Today</p></div>
                  <div class="col"><p><?php echo $orders[0]->cnt;?></p></div>
                 </div>
                 <div class="row">
                  <div class="col"><p>Last 7 Days</p></div>
                  <div class="col"><p><?php echo $orders[7]->cnt;?></p></div>
                 </div>
                 <div class="row">
                  <div class="col"><p>Last 30 Days</p></div>
                  <div class="col"><p><?php echo $orders[30]->cnt;?></p></div>
                 </div>
                 <div class="row">
                  <div class="col"><p>Last 90 Days</p></div>
                  <div class="col"><p><?php echo $orders[90]->cnt;?></p></div>
                 </div>
                 <div class="row">
                  <div class="col"><p>Total</p></div>
                  <div class="col"><p><?php echo $orders['All']->cnt;?></p></div>
                 </div>
                 <?php if(isset($_POST['submit'])){?>
                 <div class="row">
                  <div class="col"><p>Custom Range</p></div>
                  <div class="col"><p><?php echo $orders['custom']->cnt;?></p></div>
                </div>
                <?php }?>
            </div>
           </div>
         </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header">Total Income</div>
            <div class="card-body">
                <div class="row">
                  <div class="col"><p>Today</p></div>
                  <div class="col"><p>KD <?php if($income[0]->cnt==''){echo 0;}else{echo round($income[0]->cnt,3);}?></p></div>
                 </div>
                 <div class="row">
                  <div class="col"><p>Last 7 Days</p></div>
                  <div class="col"><p>KD <?php if($income[7]->cnt==''){echo 0;}else{echo round($income[7]->cnt,3);}?></p></div>
                 </div>
                 <div class="row">
                  <div class="col"><p>Last 30 Days</p></div>
                  <div class="col"><p>KD <?php if($income[30]->cnt==''){echo 0;}else{echo round($income[30]->cnt,3);}?></p></div>
                 </div>
                 <div class="row">
                  <div class="col"><p>Last 90 Days</p></div>
                  <div class="col"><p>KD <?php if($income[90]->cnt==''){echo 0;}else{echo round($income[90]->cnt,3);}?></p></div>
                 </div>
                 <div class="row">
                  <div class="col"><p>Total</p></div>
                  <div class="col"><p>KD <?php if($income['All']->cnt==''){echo 0;}else{echo round($income['All']->cnt,3);}?></p></div>
                 </div>
                 <?php if(isset($_POST['submit'])){?>
                 <div class="row">
                  <div class="col"><p>Custom Range</p></div>
                  <div class="col"><p>KD <?php if($income['custom']->cnt==''){echo 0;}else{echo round($income['custom']->cnt,3);}?></p></div>
                </div>
                <?php }?>
            </div>
          </div>
         </div>
        <div class="col-xl-6">
         <div class="card">
            <div class="card-header">Total Orders</div>
            <div class="card-body">
              <div class="chart-container-1">
                 <canvas id="total_chart1"></canvas>
               </div>
            </div>
          </div>   
        </div>
        <div class="col-xl-6">
         <div class="card">
            <div class="card-header">Total Income</div>
            <div class="card-body">
              <div class="chart-container-1">
                 <canvas id="total_chart2"></canvas>
               </div>
            </div>
          </div>   
        </div>
        <?php if(isset($list)){
			//if($this->input->post('delivery_date')==''){$delivery_date = '0';}else{$delivery_date = $this->input->post('delivery_date');}
			?>
        <div class="col-lg-12">
         <div class="clearfix"></div>
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Orders List <a href="<?php echo base_url($this->folder_key.'/reports/export/'.$this->input->post('date_from').'/'.$this->input->post('date_to').'/'.$this->input->post('delivery_date').'/'.$this->input->post('payment').'/'.$this->input->post('delivery'));?>"><button type="button" class="btn btn-success btn-sm waves-effect waves-light pull-right">Excel Download</button></a></div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="datatable" class="table table-bordered">
                <thead>
                    <tr>
                       <th>S.No</th>
                       <th>Invoice</th>                       
                       <th>Items</th>
                       <th>Billing Address</th>
                       <th>Price</th>                       
                       <th>Time In</th>
                       <th>Delivery Status</th>	
                    </tr>
                </thead>
                <tbody id="information">
                    <?php foreach($list as $key => $value){
                    $str='';
                    if($value['addr_type']=='Delivery'){
                      $str.='<br>Country : '.$value['country'];
                      }else{$str.='<br>Branch : '.$value['branch'];}
                      $prods='';
                  foreach($value['products'] as $key1 => $value1){
                        $addons='';
                        foreach($value1['addons'] as $key2 => $value2){
                            $addons.=$value2['addon_title'].', ';
                        }
                    $prods.=$value1['quantity'].' x '.$value1['product_name'];
                    if($addons!=''){$prods.='<br>('.rtrim($addons,', ').')';}
                    $prods.='<br>';
                  }		
                  if($value['delivery']!=0){$class='text-white';}else{$class='text-black';}			
                    ?>
                    <tr class="<?php if($value['delivery']==1){echo 'gradient-violet text-white';}else if($value['delivery']==2){echo 'gradient-titanium text-white';}else if($value['delivery']==3){echo 'gradient-quepal text-white';}else if($value['delivery']==4){echo 'gradient-ibiza text-white';}?>">
                         <td><?php echo $key+1;?></td>
                         <td><?php echo $value['id'];?></td>
                         <td><?php echo rtrim($prods,', ');?></td>
                         <td><?php echo $value['fname'].' '.$value['lname'].$str;?></td>
                         <td><?php echo $value['currency'].' '.str_replace(',','',number_format(($value['total_price']*$value['currency_price']),3));?></td>
                         <td><?php echo date('d-m-Y',strtotime($value['now'])).'<br>'.date('h:i A',strtotime($value['now']));?></td>
                         <td><?php if($value['delivery']==0){echo 'Pending';}else if($value['delivery']==1){echo 'Order Accepted';}else if($value['delivery']==2){echo 'Parcel Ready';}else if($value['delivery']==3){echo 'Delivered';}else if($value['delivery']==4){echo 'Cancelled';}?></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
            </div>
            </div>
          </div>
        </div>
        <?php }?>
    </div>
    <div class="overlay toggle-menu"></div>
 </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url('assets/admin'.$theme.'/js/jquery.min.js');?>"></script>
<script src="<?php echo base_url('assets/admin'.$theme.'/js/popper.min.js');?>"></script>
<script src="<?php echo base_url('assets/admin'.$theme.'/js/bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('assets/admin'.$theme.'/plugins/select2/js/select2.min.js');?>"></script>
<!-- simplebar js -->
<script src="<?php echo base_url('assets/admin'.$theme.'/plugins/simplebar/js/simplebar.js');?>"></script>
<!-- sidebar-menu js -->
<script src="<?php echo base_url('assets/admin'.$theme.'/js/sidebar-menu.js');?>"></script>
<!-- Custom scripts -->
<script src="<?php echo base_url('assets/admin'.$theme.'/js/app-script.js');?>"></script>
<!--Data Tables js-->
<script src="<?php echo base_url('assets/admin'.$theme.'/plugins/bootstrap-datatable/js/jquery.dataTables.min.js');?>"></script>
<script src="<?php echo base_url('assets/admin'.$theme.'/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js');?>"></script>
<script src="<?php echo base_url('assets/admin'.$theme.'/plugins/bootstrap-datatable/js/dataTables.buttons.min.js');?>"></script>
<script src="<?php echo base_url('assets/admin'.$theme.'/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js');?>"></script>
<script src="<?php echo base_url('assets/admin'.$theme.'/plugins/bootstrap-datatable/js/jszip.min.js');?>"></script>
<script src="<?php echo base_url('assets/admin'.$theme.'/plugins/bootstrap-datatable/js/pdfmake.min.js');?>"></script>
<script src="<?php echo base_url('assets/admin'.$theme.'/plugins/bootstrap-datatable/js/vfs_fonts.js');?>"></script>
<script src="<?php echo base_url('assets/admin'.$theme.'/plugins/bootstrap-datatable/js/buttons.html5.min.js');?>"></script>
<script src="<?php echo base_url('assets/admin'.$theme.'/plugins/bootstrap-datatable/js/buttons.print.min.js');?>"></script>
<script src="<?php echo base_url('assets/admin'.$theme.'/plugins/bootstrap-datatable/js/buttons.colVis.min.js');?>"></script>
<script src="<?php echo base_url('assets/admin'.$theme.'/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js');?>"></script>
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
<script>
$().ready(function() {
$('.single-select').select2();
});
  $('.datepicker').datepicker({
	format: 'dd-mm-yyyy',
	autoclose: true,
	todayHighlight: true
  });
$(document).ready(function() {
var table = $('#datatable').DataTable( {
// buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
} );
table.buttons().container().appendTo( '#datatable_wrapper .col-md-6:eq(0)' );} );
$(function() {
"use strict";
<?php 
$tot_val=0;$max_val=0;
$chart_months=array(date('M', mktime(0, 0, 0, date('m')-5, 1, date('Y'))),date('M', mktime(0, 0, 0, date('m')-4, 1, date('Y'))),date('M', mktime(0, 0, 0, date('m')-3, 1, date('Y'))),date('M', mktime(0, 0, 0, date('m')-2, 1, date('Y'))),date('M', mktime(0, 0, 0, date('m')-1, 1, date('Y'))),date('M'));
?>
var ctx = document.getElementById('total_chart1').getContext('2d');
var myChart = new Chart(ctx, {
type: 'line',
data: {
	labels: [<?php foreach($chart_months as $key => $value){?>'<?php echo $value;?>',<?php }?>],
	datasets: [{
		label: 'Total Orders',
		data: [<?php echo $orders_chart[0]->cnt;?>, <?php echo $orders_chart[1]->cnt;?>, <?php echo $orders_chart[2]->cnt;?>, <?php echo $orders_chart[3]->cnt;?>, <?php echo $orders_chart[4]->cnt;?>, <?php echo $orders_chart[5]->cnt;?>],
		backgroundColor: '<?php if($this->data->theme>0){echo '#fff';}else{echo '#14abef';}?>',
		borderColor: "transparent",
		pointRadius :"0",
		borderWidth: 3
	}]
},
options: {
maintainAspectRatio: false,
legend: {
  display: false,
  labels: {
	fontColor: '<?php if($this->data->theme>0){echo '#ddd';}else{echo '#585757';}?>',  
	boxWidth:40
  }
},
tooltips: {
  displayColors:false
},	
scales: {
  xAxes: [{
	ticks: {
		beginAtZero:true,
		fontColor: '<?php if($this->data->theme>0){echo '#ddd';}else{echo '#585757';}?>'
	},
	gridLines: {
	  display: true ,
	  color: "<?php if($this->data->theme>0){echo 'rgba(255, 255, 255, 0.25)';}else{echo 'rgba(0, 0, 0, 0.05)';}?>"
	},
  }],
   yAxes: [{
	ticks: {
		beginAtZero:true,
		fontColor: '<?php if($this->data->theme>0){echo '#ddd';}else{echo '#585757';}?>'
	},
	gridLines: {
	  display: true ,
	  color: "<?php if($this->data->theme>0){echo 'rgba(255, 255, 255, 0.25)';}else{echo 'rgba(0, 0, 0, 0.05)';}?>"
	},
  }]
 }
}
});
<?php $tot_val=0;$max_val=0;?>
var ctx = document.getElementById('total_chart2').getContext('2d');
var myChart = new Chart(ctx, {
type: 'line',
data: {
	labels: [<?php foreach($chart_months as $key => $value){?>'<?php echo $value;?>',<?php }?>],
	datasets: [{
		label: 'Total Income',
		data: [<?php if($income_chart[0]->cnt==''){echo 0;}else{echo round($income_chart[0]->cnt,3);}?>, <?php if($income_chart[1]->cnt==''){echo 0;}else{echo round($income_chart[1]->cnt,3);}?>, <?php if($income_chart[2]->cnt==''){echo 0;}else{echo round($income_chart[2]->cnt,3);}?>, <?php if($income_chart[3]->cnt==''){echo 0;}else{echo round($income_chart[3]->cnt,3);}?>, <?php if($income_chart[4]->cnt==''){echo 0;}else{echo round($income_chart[4]->cnt,3);}?>, <?php if($income_chart[5]->cnt==''){echo 0;}else{echo round($income_chart[5]->cnt,3);}?>],
		backgroundColor: '<?php if($this->data->theme>0){echo '#fff';}else{echo '#14abef';}?>',
		borderColor: "transparent",
		pointRadius :"0",
		borderWidth: 3
	}]
},
options: {
maintainAspectRatio: false,
legend: {
  display: false,
  labels: {
	fontColor: '<?php if($this->data->theme>0){echo '#ddd';}else{echo '#585757';}?>',  
	boxWidth:40
  }
},
tooltips: {
  displayColors:false
},	
scales: {
  xAxes: [{
	ticks: {
		beginAtZero:true,
		fontColor: '<?php if($this->data->theme>0){echo '#ddd';}else{echo '#585757';}?>'
	},
	gridLines: {
	  display: true ,
	  color: "<?php if($this->data->theme>0){echo 'rgba(255, 255, 255, 0.25)';}else{echo 'rgba(0, 0, 0, 0.05)';}?>"
	},
  }],
   yAxes: [{
	ticks: {
		beginAtZero:true,
		fontColor: '<?php if($this->data->theme>0){echo '#ddd';}else{echo '#585757';}?>'
	},
	gridLines: {
	  display: true ,
	  color: "<?php if($this->data->theme>0){echo 'rgba(255, 255, 255, 0.25)';}else{echo 'rgba(0, 0, 0, 0.05)';}?>"
	},
  }]
 }
}
});
});	
</script>