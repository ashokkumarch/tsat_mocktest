<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<link href="<?php echo base_url('assets/admin'.$theme.'/css/bootstrap.min.css');?>" rel="stylesheet"/>
<script>window.onload = function() { window.print(); }</script>
<div class="content-wrapper">
<div class="container-fluid">
  <div class="row" style="margin-bottom:20px;">
    <div class="col-sm-3">
        <?php if($this->data->image==''){?><h3><?php echo $this->data->title;?></h3><?php }else{?><img src="<?php echo base_url($this->data->image);?>" width="130"><?php }?>
    </div>
    <div class="col-sm-6">
        <div class="text-center">Delivery Invoice</div>
    </div>	
    <div class="col-sm-3 text-right">
    <a href="<?php echo base_url($this->folder_key.'/'.$this->uri->segment(2).'/print_page/'.$list->id);?>"><button type="button" class="btn btn-info btn-sm waves-effect waves-light m-1 pull-right"> <i class="fa fa fa-print"></i> Print</button></a>		
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
     <div class="clearfix"></div>
      <div class="row">
           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <table class="table table-bordered" style="margin-bottom:10px!important;">
            <thead>
              <tr>
                <td>Billing Address</td>
              </tr>
            </thead>
            <tbody>
              <?php $str=''; 
              if($list->addr_type=='Delivery'){
                 if($list->area!='' && $list->area!='0'){
					$str.='<br>Country: '.$list->country.'<br>Area: '.$list->area.', Block: '.$list->block.'<br>Street: '.$list->street.', Avenue: '.$list->avenue;
					if($list->type=='House'){$str.='<br>House: '.$list->house;}
					else{$str.=', Building: '.$list->building.'<br>Floor: '.$list->floor.', '.$list->type.' : '.$list->flat;}
					if($list->directions!=''){$str.='<br>Directions: '.$list->directions;}
				  }else{
					$str.='<br>Address: '.$list->address.', '.$list->address2.'<br>City: '.$list->city.'<br>State: '.$list->state.'<br>Country: '.$list->country.' - '.$list->pincode;
				  }
              }else{$str.='<br>Branch : '.$list->branch;}
			  if($list->phone!=''){$str.='<br>Ph: '.$list->phone;}
			  if($list->email!=''){$str.='<br>E: '.$list->email;}
              ?>
              <tr>
                <td><?php echo $list->fname.' '.$list->lname.$str;?></td>
              </tr>
            </tbody>
          </table>
           </div>
           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
          	 <table class="table table-bordered">
                <thead>
                  <tr>
                    <td style="width: 50%; text-align:center;"><?php echo ('Order Number');?></td>
                    <td style="text-align:center;"><?php echo ('Payment Method');?></td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  <?php if($list->payment_method=='COD'){$payment_method='Cash on Delivery';}else{$payment_method=$list->payment_method.'<br>(Transaction Id: '.$list->payment_id.')';}?>
                    <td style="text-align:center;"><?php echo $list->id;?></td>
                    <td style="text-align:center;"><?php echo $payment_method;?></td>
                  </tr>
                </tbody>
              </table>
             <table class="table table-bordered">
            <thead>
              <tr>
                <td style="width: 50%; text-align:center;"><?php echo ('Order Date');?></td>
                <td style="text-align:center;"><?php echo ('Delivery Date');?></td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="text-align:center;"><?php echo date('d-m-Y h:i A',strtotime($list->now));?></td>
                <td style="text-align:center;"><?php if($list->delivery_timing==1){echo date('d-m-Y',strtotime('+'.$list->deliver_time,strtotime($list->now)));}else{echo date('d-m-Y',strtotime($list->delivery_date)).' '.$list->delivery_time;}?></td>
              </tr>
            </tbody>
          </table>
          </div>
          </div>
      <hr />
      <div class="row">
          <div class="col-lg-12 table-responsive">
           <table class="table table-bordered">
              <thead>
                <tr>
                  <td class="text-center">Sr No</td>              
                  <td class="text-center">Item Name</td>
                  <td class="text-center">Quantity</td>
                  <td class="text-center" style="width:110px;">Unit Price</td>
                  <td class="text-right" style="width:110px;">Total Price</td>
               </tr>
              </thead>
              <tbody>
              <?php 
              foreach($products as $key => $value){
                $addons='';
                foreach($value['addons'] as $keyy => $valuee){
                    $addons.=$valuee['addon_title'].', ';
                }
				if($addons!=''){$addons='<br>('.rtrim($addons,', ').')';}
				$ins='';
				if($value['extra_details']!=''){$ins.='<br />Extra Details: '.nl2br($value['extra_details']);}
				if($value['tag_product_title']!=''){$ins.='<br />Tag : '.$value['tag_product_title'];}
				if($value['instructions']!=''){$ins.='<br />Text for the Tag : '.$value['instructions'];}
                ?>
                <tr>
                  <td class="text-center" style="vertical-align: middle;"><?php echo $key+1;?></td>
                  <td class="text-left" style="vertical-align: middle;"><?php if($value['image']!=''){?><img src="<?php echo base_url($value['image']);?>" style="width:70px;padding-right:10px;float:left;float:left;" /><?php }?><?php echo $value['product_name'].'<br>Code : '.$value['product_code'].$addons.$ins;?></td>
                  <td class="text-center" style="vertical-align: middle;"><?php echo $value['quantity'];?></td>
                  <td class="text-center" style="vertical-align: middle;"><?php echo $list->currency.' '.str_replace(',','',number_format(($value['price']*$list->currency_price),3));?></td>
                  <td class="text-right" style="vertical-align: middle;"><?php echo $list->currency.' '.str_replace(',','',number_format(($value['total']*$list->currency_price),3));?></td> 
                </tr>
                <?php }?>
               </tbody>
              <tfoot>            
                 <tr>
                  <td class="text-right" colspan="4">Sub Total</td>
                  <td class="text-right"><?php echo $list->currency.' '.str_replace(',','',number_format(($list->price*$list->currency_price),3));?></td>
                 </tr>
                 <tr>
                  <td class="text-right" colspan="4">Discount(-)</td>
                  <td class="text-right"><?php echo $list->currency.' '.str_replace(',','',number_format(($list->discount*$list->currency_price),3));?></td>
                 </tr>
                 <tr>
                  <td class="text-right" colspan="4"><?php if($list->area==''){echo 'Shipping';}else{echo 'Delivery';}?> Charges(+)</td>
                  <td class="text-right"><?php echo $list->currency.' '.str_replace(',','',number_format(($list->delivery_charges*$list->currency_price),3));?></td>
                 </tr>
                 <tr>
                  <td class="text-right" colspan="4">Grand Total</td>
                  <td class="text-right"><?php echo $list->currency.' '.str_replace(',','',number_format(($list->total_price*$list->currency_price),3));?></td>
                 </tr>
                </tfoot>
            </table>
           <br><br>
            <div style='float:left;'>For <?php echo $this->data->title;?></div>
            <div style='float:right;'>Customer Sign</div>
            <br><br>
           </div>
          </div>
    </div>
  </div>
 <div class="overlay toggle-menu"></div>
</div>
</div>