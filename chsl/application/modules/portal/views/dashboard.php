<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-3">
		    <h4 class="page-title">Dashboard</h4>		    
	   </div>
     </div>
    <!-- End Breadcrumb-->
    <div class="row mt-3">
       <div class="col-12 col-lg-6 col-xl-4">
         <div class="card bg-success" style="background: #0f2a3d !important;">
           <div class="card-body">
              <h5 class="text-white mb-2"><?php echo $orders_day->cnt;?></h5>
              <p class="mb-0 text-white small-font">Orders Per Day</p>
            </div>
         </div> 
       </div>
       <div class="col-12 col-lg-6 col-xl-4">
         <div class="card bg-success" style="background: #db8901 !important;">
           <div class="card-body">
              <h5 class="text-white mb-2"><?php if($orders_sales->cnt==''){echo 0;}else{echo round($orders_sales->cnt,3);}?> KD</h5>                
              <p class="mb-0 text-white small-font">Sales Per Day</p>
            </div>
         </div>
       </div>
       <div class="col-12 col-lg-6 col-xl-4">
         <div class="card bg-success" style="background: #ff5035 !important;">
            <div class="card-body">
              <h5 class="text-white mb-2"><?php echo $orders_pending->cnt;?></h5>                
              <p class="mb-0 text-white small-font">Pending Orders</p>
            </div>
         </div>
       </div>
     </div>
      <div class="row">
        <div class="col-lg-12">
        <ul class="nav nav-tabs nav-tabs-info nav-justified" role="tablist" style="ms-flex-wrap: nowrap; flex-wrap: nowrap; overflow-x: auto; overflow-y: hidden;">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="pill" href="#newo" onclick="changeval()"><span>New Order</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#accepto" onclick="changeval()"><span>Accepted</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#parcelo" onclick="changeval()"><span>Parcel Ready</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#delevero" onclick="changeval()"><span>Delivered</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#cancelo" onclick="changeval()"><span>Cancelled</span></a>
              </li>
          </ul>
         <div class="clearfix"></div>
          <div class="card">
            <!--<div class="card-header"><i class="fa fa-table"></i> Orders List</div>-->
            <div class="card-body">            
              <div class="tab-content">
                <div id="newo" class="tab-pane active">
                 <div class="table-responsive">
                      <table class="datatable table table-bordered">
                        <thead>
                            <tr>                               
                               <th>S.No</th>   
                               <th class="no-sort"><input type="checkbox" id="ckbCheckAll" /></th>
                               <th>Invoice</th>                       
                               <th>Items</th>
                               <th>Billing Address</th>
                               <th>Price</th>
                               <th>Coupon Code</th>                  
                               <th>Time In</th>
                               <th>Delivery Status</th>	
                            </tr>
                        </thead>
                        <tbody id="information">
                            <?php 
                            foreach($invoice as $key => $value){
                            $str='';
                            if($value['addr_type']=='Delivery'){
                              if($value['area']!='' && $value['area']!='0'){
                                $str.='<br>Country: '.$value['country'].'<br>Area: '.$value['area'].', Block: '.$value['block'].'<br>Street: '.$value['street'].', Avenue: '.$value['avenue'];
                                if($value['type']=='House'){$str.='<br>House: '.$value['house'];}
                                else{$str.=', Building: '.$value['building'].'<br>Floor: '.$value['floor'].', '.$value['type'].' : '.$value['flat'];}
                                if($value['directions']!=''){$str.='<br>Directions: '.$value['directions'];}
                              }else{
                                $str.='<br>Address: '.$value['address'].', '.$value['address2'].'<br>City: '.$value['city'].'<br>State: '.$value['state'].'<br>Country: '.$value['country'].' - '.$value['pincode'];
                              }
                          }else{$str.='<br>Branch : '.$value['branch'];}
                          if($value['phone']!=''){$str.='<br>Ph: '.$value['phone'];}
                          if($value['email']!=''){$str.='<br>E: '.$value['email'];}
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
                                 <td><input type="checkbox" name="invoice" value="<?php echo $value['id'];?>" class="checkBoxClass" /></td>
                                 <td><?php echo $value['id'];?><br />
                                 <a href="<?php echo base_url($this->folder_key.'/dashboard/view/'.$value['id']);?>" title="Invoice View" class="<?php echo $class;?>">View</a> | <a href="<?php echo base_url($this->folder_key.'/dashboard/print_page/'.$value['id']);?>" title="Print" target="_blank" class="<?php echo $class;?>">Print</a><br />
                                 
                                 <?php /*?><a href="<?php echo base_url($this->folder_key.'/dashboard/history/'.$value['id']);?>" title="Change Order Status" target="_blank" class="<?php echo $class;?>">Order Status</a><?php */?>
                                 </td>
                                 <td><?php echo rtrim($prods,', ');?></td>
                                 <td><?php echo $value['fname'].' '.$value['lname'].$str;?></td>
                                 <td><?php echo $value['currency'].' '.str_replace(',','',number_format(($value['total_price']*$value['currency_price']),3));?></td>
                                 <td><?php echo $value['coupon'];?></td>
                                 <td><?php echo date('d-m-Y',strtotime($value['now'])).'<br>'.date('h:i A',strtotime($value['now']));?></td>
                                 <td>
								 	<select class="form-control" <?php if($value['delivery']!=0){echo 'style="color:white!important;background:grey!important;"';}?> onchange="changedelivery(this.value,'<?php echo $value['id'];?>')">
                                        <option></option>	               
                                        <option value="0" <?php if($value['delivery']==0){echo 'selected';}?>>Pending</option>                   
                                        <option value="1" <?php if($value['delivery']==1){echo 'selected';}?>>Order Accepted</option>                  
                                        <option value="2" <?php if($value['delivery']==2){echo 'selected';}?>>Parcel Ready</option>                    
                                        <option value="3" <?php if($value['delivery']==3){echo 'selected';}?>>Delivered</option>                   
                                        <option value="4" <?php if($value['delivery']==4){echo 'selected';}?>>Cancelled</option>                    
                                      </select><br />
                                      <select class="form-control" <?php if($value['delivery']!=0){echo 'style="color:white!important;background:grey!important;"';}?> onchange="changedriver(this.value,'<?php echo $value['id'];?>')">
                                        <option value=''>Select Driver</option>
                                        <?php foreach($drivers as $key1 => $value1){?>
                                        <option value="<?php echo $value1['id'];?>" <?php if($value['driver_id']==$value1['id']){echo 'selected';}?>><?php echo $value1['fname'];?></option>                   
                                        <?php }?>                    
                                     </select><br />
                                      <select class="form-control" <?php if($value['delivery']!=0){echo 'style="color:white!important;background:grey!important;"';}?> onchange="changestaff(this.value,'<?php echo $value['id'];?>')">
                                        <option value=''>Select Staff</option>
                                        <?php foreach($staff as $key1 => $value1){?>
                                        <option value="<?php echo $value1['id'];?>" <?php if($value['staff_id']==$value1['id']){echo 'selected';}?>><?php echo $value1['fname'];?></option>                   
                                        <?php }?>                    
                                     </select>
                                 </td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                    </div>
            	</div>
                <div id="accepto" class="tab-pane fade">
				 <div class="table-responsive">
                      <table class="datatable table table-bordered">
                        <thead>
                            <tr>
                               <th>S.No</th>
                               <th class="no-sort"><input type="checkbox" id="ckbCheckAll1" /></th>
                               <th>Invoice</th>                       
                               <th>Items</th>
                               <th>Billing Address</th>
                               <th>Price</th>
                               <th>Coupon Code</th>                  
                               <th>Time In</th>
                               <th>Delivery Status</th>	
                            </tr>
                        </thead>
                        <tbody id="information">
                            <?php 
                            foreach($invoice1 as $key => $value){
                            $str='';
                            if($value['addr_type']=='Delivery'){
                              if($value['area']!='' && $value['area']!='0'){
                                $str.='<br>Country: '.$value['country'].'<br>Area: '.$value['area'].', Block: '.$value['block'].'<br>Street: '.$value['street'].', Avenue: '.$value['avenue'];
                                if($value['type']=='House'){$str.='<br>House: '.$value['house'];}
                                else{$str.=', Building: '.$value['building'].'<br>Floor: '.$value['floor'].', '.$value['type'].' : '.$value['flat'];}
                                if($value['directions']!=''){$str.='<br>Directions: '.$value['directions'];}
                              }else{
                                $str.='<br>Address: '.$value['address'].', '.$value['address2'].'<br>City: '.$value['city'].'<br>State: '.$value['state'].'<br>Country: '.$value['country'].' - '.$value['pincode'];
                              }
                          }else{$str.='<br>Branch : '.$value['branch'];}
                          if($value['phone']!=''){$str.='<br>Ph: '.$value['phone'];}
                          if($value['email']!=''){$str.='<br>E: '.$value['email'];}
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
                                 <td><input type="checkbox" name="invoice" value="<?php echo $value['id'];?>" class="checkBoxClass1" /></td>
                                 <td><?php echo $value['id'];?><br />
                                 <a href="<?php echo base_url($this->folder_key.'/dashboard/view/'.$value['id']);?>" title="Invoice View" class="<?php echo $class;?>">View</a> | <a href="<?php echo base_url($this->folder_key.'/dashboard/print_page/'.$value['id']);?>" title="Print" target="_blank" class="<?php echo $class;?>">Print</a><br />
                                 
                                 <?php /*?><a href="<?php echo base_url($this->folder_key.'/dashboard/history/'.$value['id']);?>" title="Change Order Status" target="_blank" class="<?php echo $class;?>">Order Status</a><?php */?>
                                 </td>
                                 <td><?php echo rtrim($prods,', ');?></td>
                                 <td><?php echo $value['fname'].' '.$value['lname'].$str;?></td>
                                 <td><?php echo $value['currency'].' '.str_replace(',','',number_format(($value['total_price']*$value['currency_price']),3));?></td>
                                 <td><?php echo $value['coupon'];?></td>
                                 <td><?php echo date('d-m-Y',strtotime($value['now'])).'<br>'.date('h:i A',strtotime($value['now']));?></td>
                                 <td>
								 	<select class="form-control" <?php if($value['delivery']!=0){echo 'style="color:white!important;background:grey!important;"';}?> onchange="changedelivery(this.value,'<?php echo $value['id'];?>')">
                                        <option></option>	               
                                        <option value="0" <?php if($value['delivery']==0){echo 'selected';}?>>Pending</option>                   
                                        <option value="1" <?php if($value['delivery']==1){echo 'selected';}?>>Order Accepted</option>                  
                                        <option value="2" <?php if($value['delivery']==2){echo 'selected';}?>>Parcel Ready</option>                    
                                        <option value="3" <?php if($value['delivery']==3){echo 'selected';}?>>Delivered</option>                   
                                        <option value="4" <?php if($value['delivery']==4){echo 'selected';}?>>Cancelled</option>                    
                                      </select><br />
                                      <select class="form-control" <?php if($value['delivery']!=0){echo 'style="color:white!important;background:grey!important;"';}?> onchange="changedriver(this.value,'<?php echo $value['id'];?>')">
                                        <option value=''>Select Driver</option>
                                        <?php foreach($drivers as $key1 => $value1){?>
                                        <option value="<?php echo $value1['id'];?>" <?php if($value['driver_id']==$value1['id']){echo 'selected';}?>><?php echo $value1['fname'];?></option>                   
                                        <?php }?>                    
                                     </select><br />
                                      <select class="form-control" <?php if($value['delivery']!=0){echo 'style="color:white!important;background:grey!important;"';}?> onchange="changestaff(this.value,'<?php echo $value['id'];?>')">
                                        <option value=''>Select Staff</option>
                                        <?php foreach($staff as $key1 => $value1){?>
                                        <option value="<?php echo $value1['id'];?>" <?php if($value['staff_id']==$value1['id']){echo 'selected';}?>><?php echo $value1['fname'];?></option>                   
                                        <?php }?>                    
                                     </select>
                                 </td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                    </div>
                </div>
                <div id="parcelo" class="tab-pane fade">
                 <div class="table-responsive">
                  <table class="datatable table table-bordered">
                    <thead>
                        <tr>
                           <th>S.No</th>
                           <th class="no-sort"><input type="checkbox" id="ckbCheckAll2" /></th>
                           <th>Invoice</th>                       
                           <th>Items</th>
                           <th>Billing Address</th>
                           <th>Price</th>
                           <th>Coupon Code</th>                  
                           <th>Time In</th>
                           <th>Delivery Status</th>	
                        </tr>
                    </thead>
                    <tbody id="information">
                        <?php 
                        foreach($invoice2 as $key => $value){
                        $str='';
                        if($value['addr_type']=='Delivery'){
                          if($value['area']!='' && $value['area']!='0'){
                            $str.='<br>Country: '.$value['country'].'<br>Area: '.$value['area'].', Block: '.$value['block'].'<br>Street: '.$value['street'].', Avenue: '.$value['avenue'];
                            if($value['type']=='House'){$str.='<br>House: '.$value['house'];}
                            else{$str.=', Building: '.$value['building'].'<br>Floor: '.$value['floor'].', '.$value['type'].' : '.$value['flat'];}
                            if($value['directions']!=''){$str.='<br>Directions: '.$value['directions'];}
                          }else{
                            $str.='<br>Address: '.$value['address'].', '.$value['address2'].'<br>City: '.$value['city'].'<br>State: '.$value['state'].'<br>Country: '.$value['country'].' - '.$value['pincode'];
                          }
                      }else{$str.='<br>Branch : '.$value['branch'];}
                      if($value['phone']!=''){$str.='<br>Ph: '.$value['phone'];}
                      if($value['email']!=''){$str.='<br>E: '.$value['email'];}
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
                             <td><input type="checkbox" name="invoice" value="<?php echo $value['id'];?>" class="checkBoxClass2" /></td>
                             <td><?php echo $value['id'];?><br />
                             <a href="<?php echo base_url($this->folder_key.'/dashboard/view/'.$value['id']);?>" title="Invoice View" class="<?php echo $class;?>">View</a> | <a href="<?php echo base_url($this->folder_key.'/dashboard/print_page/'.$value['id']);?>" title="Print" target="_blank" class="<?php echo $class;?>">Print</a><br />
                             
                             <?php /*?><a href="<?php echo base_url($this->folder_key.'/dashboard/history/'.$value['id']);?>" title="Change Order Status" target="_blank" class="<?php echo $class;?>">Order Status</a><?php */?>
                             </td>
                             <td><?php echo rtrim($prods,', ');?></td>
                             <td><?php echo $value['fname'].' '.$value['lname'].$str;?></td>
                             <td><?php echo $value['currency'].' '.str_replace(',','',number_format(($value['total_price']*$value['currency_price']),3));?></td>
                             <td><?php echo $value['coupon'];?></td>
                             <td><?php echo date('d-m-Y',strtotime($value['now'])).'<br>'.date('h:i A',strtotime($value['now']));?></td>
                             <td>
								 	<select class="form-control" <?php if($value['delivery']!=0){echo 'style="color:white!important;background:grey!important;"';}?> onchange="changedelivery(this.value,'<?php echo $value['id'];?>')">
                                        <option></option>	               
                                        <option value="0" <?php if($value['delivery']==0){echo 'selected';}?>>Pending</option>                   
                                        <option value="1" <?php if($value['delivery']==1){echo 'selected';}?>>Order Accepted</option>                  
                                        <option value="2" <?php if($value['delivery']==2){echo 'selected';}?>>Parcel Ready</option>                    
                                        <option value="3" <?php if($value['delivery']==3){echo 'selected';}?>>Delivered</option>                   
                                        <option value="4" <?php if($value['delivery']==4){echo 'selected';}?>>Cancelled</option>                    
                                      </select><br />
                                      <select class="form-control" <?php if($value['delivery']!=0){echo 'style="color:white!important;background:grey!important;"';}?> onchange="changedriver(this.value,'<?php echo $value['id'];?>')">
                                        <option value=''>Select Driver</option>
                                        <?php foreach($drivers as $key1 => $value1){?>
                                        <option value="<?php echo $value1['id'];?>" <?php if($value['driver_id']==$value1['id']){echo 'selected';}?>><?php echo $value1['fname'];?></option>                   
                                        <?php }?>             
                                     </select><br />
                                      <select class="form-control" <?php if($value['delivery']!=0){echo 'style="color:white!important;background:grey!important;"';}?> onchange="changestaff(this.value,'<?php echo $value['id'];?>')">
                                        <option value=''>Select Staff</option>
                                        <?php foreach($staff as $key1 => $value1){?>
                                        <option value="<?php echo $value1['id'];?>" <?php if($value['staff_id']==$value1['id']){echo 'selected';}?>><?php echo $value1['fname'];?></option>                   
                                        <?php }?>                    
                                     </select>
                                 </td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
                </div>
                </div>
                <div id="delevero" class="tab-pane fade">
                 <div class="table-responsive">
                  <table class="datatable table table-bordered">
                    <thead>
                        <tr>
                           <th>S.No</th>
                           <th class="no-sort"><input type="checkbox" id="ckbCheckAll3" /></th>
                           <th>Invoice</th>                       
                           <th>Items</th>
                           <th>Billing Address</th>
                           <th>Price</th>
                           <th>Coupon Code</th>                  
                           <th>Time In</th>
                           <th>Delivery Status</th>	
                        </tr>
                    </thead>
                    <tbody id="information">
                        <?php 
                        foreach($invoice3 as $key => $value){
                        $str='';
                        if($value['addr_type']=='Delivery'){
                          if($value['area']!='' && $value['area']!='0'){
                            $str.='<br>Country: '.$value['country'].'<br>Area: '.$value['area'].', Block: '.$value['block'].'<br>Street: '.$value['street'].', Avenue: '.$value['avenue'];
                            if($value['type']=='House'){$str.='<br>House: '.$value['house'];}
                            else{$str.=', Building: '.$value['building'].'<br>Floor: '.$value['floor'].', '.$value['type'].' : '.$value['flat'];}
                            if($value['directions']!=''){$str.='<br>Directions: '.$value['directions'];}
                          }else{
                            $str.='<br>Address: '.$value['address'].', '.$value['address2'].'<br>City: '.$value['city'].'<br>State: '.$value['state'].'<br>Country: '.$value['country'].' - '.$value['pincode'];
                          }
                      }else{$str.='<br>Branch : '.$value['branch'];}
                      if($value['phone']!=''){$str.='<br>Ph: '.$value['phone'];}
                      if($value['email']!=''){$str.='<br>E: '.$value['email'];}
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
                             <td><input type="checkbox" name="invoice" value="<?php echo $value['id'];?>" class="checkBoxClass3" /></td>
                             <td><?php echo $value['id'];?><br />
                             <a href="<?php echo base_url($this->folder_key.'/dashboard/view/'.$value['id']);?>" title="Invoice View" class="<?php echo $class;?>">View</a> | <a href="<?php echo base_url($this->folder_key.'/dashboard/print_page/'.$value['id']);?>" title="Print" target="_blank" class="<?php echo $class;?>">Print</a><br />
                             
                             <?php /*?><a href="<?php echo base_url($this->folder_key.'/dashboard/history/'.$value['id']);?>" title="Change Order Status" target="_blank" class="<?php echo $class;?>">Order Status</a><?php */?>
                             </td>
                             <td><?php echo rtrim($prods,', ');?></td>
                             <td><?php echo $value['fname'].' '.$value['lname'].$str;?></td>
                             <td><?php echo $value['currency'].' '.str_replace(',','',number_format(($value['total_price']*$value['currency_price']),3));?></td>
                             <td><?php echo $value['coupon'];?></td>
                             <td><?php echo date('d-m-Y',strtotime($value['now'])).'<br>'.date('h:i A',strtotime($value['now']));?></td>
                             <td>
								 	<select class="form-control" <?php if($value['delivery']!=0){echo 'style="color:white!important;background:grey!important;"';}?> onchange="changedelivery(this.value,'<?php echo $value['id'];?>')">
                                        <option></option>	               
                                        <option value="0" <?php if($value['delivery']==0){echo 'selected';}?>>Pending</option>                   
                                        <option value="1" <?php if($value['delivery']==1){echo 'selected';}?>>Order Accepted</option>                  
                                        <option value="2" <?php if($value['delivery']==2){echo 'selected';}?>>Parcel Ready</option>                    
                                        <option value="3" <?php if($value['delivery']==3){echo 'selected';}?>>Delivered</option>                   
                                        <option value="4" <?php if($value['delivery']==4){echo 'selected';}?>>Cancelled</option>                    
                                      </select><br />
                                      <select class="form-control" <?php if($value['delivery']!=0){echo 'style="color:white!important;background:grey!important;"';}?> onchange="changedriver(this.value,'<?php echo $value['id'];?>')">
                                        <option value=''>Select Driver</option>
                                        <?php foreach($drivers as $key1 => $value1){?>
                                        <option value="<?php echo $value1['id'];?>" <?php if($value['driver_id']==$value1['id']){echo 'selected';}?>><?php echo $value1['fname'];?></option>                   
                                        <?php }?>                   
                                     </select><br />
                                      <select class="form-control" <?php if($value['delivery']!=0){echo 'style="color:white!important;background:grey!important;"';}?> onchange="changestaff(this.value,'<?php echo $value['id'];?>')">
                                        <option value=''>Select Staff</option>
                                        <?php foreach($staff as $key1 => $value1){?>
                                        <option value="<?php echo $value1['id'];?>" <?php if($value['staff_id']==$value1['id']){echo 'selected';}?>><?php echo $value1['fname'];?></option>                   
                                        <?php }?>                    
                                     </select>
                                 </td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
                </div>
                </div>
                <div id="cancelo" class="tab-pane fade">
                 <div class="table-responsive">
                  <table class="datatable table table-bordered">
                    <thead>
                        <tr>
                           <th>S.No</th>
                           <th class="no-sort"><input type="checkbox" id="ckbCheckAll4" /></th>
                           <th>Invoice</th>                       
                           <th>Items</th>
                           <th>Billing Address</th>
                           <th>Price</th>
                           <th>Coupon Code</th>                  
                           <th>Time In</th>
                           <th>Delivery Status</th>	
                        </tr>
                    </thead>
                    <tbody id="information">
                        <?php 
                        foreach($invoice4 as $key => $value){
                        $str='';
                        if($value['addr_type']=='Delivery'){
                          if($value['area']!='' && $value['area']!='0'){
                            $str.='<br>Country: '.$value['country'].'<br>Area: '.$value['area'].', Block: '.$value['block'].'<br>Street: '.$value['street'].', Avenue: '.$value['avenue'];
                            if($value['type']=='House'){$str.='<br>House: '.$value['house'];}
                            else{$str.=', Building: '.$value['building'].'<br>Floor: '.$value['floor'].', '.$value['type'].' : '.$value['flat'];}
                            if($value['directions']!=''){$str.='<br>Directions: '.$value['directions'];}
                          }else{
                            $str.='<br>Address: '.$value['address'].', '.$value['address2'].'<br>City: '.$value['city'].'<br>State: '.$value['state'].'<br>Country: '.$value['country'].' - '.$value['pincode'];
                          }
                      }else{$str.='<br>Branch : '.$value['branch'];}
                      if($value['phone']!=''){$str.='<br>Ph: '.$value['phone'];}
                      if($value['email']!=''){$str.='<br>E: '.$value['email'];}
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
                             <td><input type="checkbox" name="invoice" value="<?php echo $value['id'];?>" class="checkBoxClass4" /></td>
                             <td><?php echo $value['id'];?><br />
                             <a href="<?php echo base_url($this->folder_key.'/dashboard/view/'.$value['id']);?>" title="Invoice View" class="<?php echo $class;?>">View</a> | <a href="<?php echo base_url($this->folder_key.'/dashboard/print_page/'.$value['id']);?>" title="Print" target="_blank" class="<?php echo $class;?>">Print</a><br />
                             
                             <?php /*?><a href="<?php echo base_url($this->folder_key.'/dashboard/history/'.$value['id']);?>" title="Change Order Status" target="_blank" class="<?php echo $class;?>">Order Status</a><?php */?>
                             </td>
                             <td><?php echo rtrim($prods,', ');?></td>
                             <td><?php echo $value['fname'].' '.$value['lname'].$str;?></td>
                             <td><?php echo $value['currency'].' '.str_replace(',','',number_format(($value['total_price']*$value['currency_price']),3));?></td>
                             <td><?php echo $value['coupon'];?></td>
                             <td><?php echo date('d-m-Y',strtotime($value['now'])).'<br>'.date('h:i A',strtotime($value['now']));?></td>
                             <td>
                                <select class="form-control" <?php if($value['delivery']!=0){echo 'style="color:white!important;background:grey!important;"';}?> onchange="changedelivery(this.value,'<?php echo $value['id'];?>')">
                                    <option></option>	               
                                    <option value="0" <?php if($value['delivery']==0){echo 'selected';}?>>Pending</option>                   
                                    <option value="1" <?php if($value['delivery']==1){echo 'selected';}?>>Order Accepted</option>                  
                                    <option value="2" <?php if($value['delivery']==2){echo 'selected';}?>>Parcel Ready</option>                    
                                    <option value="3" <?php if($value['delivery']==3){echo 'selected';}?>>Delivered</option>                   
                                    <option value="4" <?php if($value['delivery']==4){echo 'selected';}?>>Cancelled</option>                    
                                  </select><br />
                                  <select class="form-control" <?php if($value['delivery']!=0){echo 'style="color:white!important;background:grey!important;"';}?> onchange="changedriver(this.value,'<?php echo $value['id'];?>')">
                                    <option value=''>Select Driver</option>
                                    <?php foreach($drivers as $key1 => $value1){?>
                                    <option value="<?php echo $value1['id'];?>" <?php if($value['driver_id']==$value1['id']){echo 'selected';}?>><?php echo $value1['fname'];?></option>                   
                                    <?php }?>                    
                                 </select><br />
                                  <select class="form-control" <?php if($value['delivery']!=0){echo 'style="color:white!important;background:grey!important;"';}?> onchange="changestaff(this.value,'<?php echo $value['id'];?>')">
                                    <option value=''>Select Staff</option>
                                    <?php foreach($staff as $key1 => $value1){?>
                                    <option value="<?php echo $value1['id'];?>" <?php if($value['staff_id']==$value1['id']){echo 'selected';}?>><?php echo $value1['fname'];?></option>                   
                                    <?php }?>                    
                                 </select>
                             </td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
                
                </div>
                </div>
                
              </div>
              <div class="row" style="margin-top:20px">
                    <div class="col-sm-3">
               			 <select class="form-control" onchange="changedriverall(this.value)" >
                            <option value="">Select Driver</option>
                            <?php foreach($drivers as $key1 => $value1){?>
                            <option value="<?php echo $value1['id'];?>"><?php echo $value1['fname'];?></option>                   
                            <?php }?>                    
                         </select>
                      </div>
                      <div class="col-sm-3">
               			 <select class="form-control" onchange="changestaffall(this.value)" >
                            <option value="">Select Staff</option>
                            <?php foreach($staff as $key1 => $value1){?>
                            <option value="<?php echo $value1['id'];?>"><?php echo $value1['fname'];?></option>                   
                            <?php }?>                    
                         </select>
                      </div>
                      <div class="col-sm-3">
                         <select class="form-control" onchange="changedeliveryall(this.value)">
                            <option value="">Select Delivery</option>	               
                            <option value="0">Pending</option>                   
                            <option value="1">Order Accepted</option>                  
                            <option value="2">Parcel Ready</option>                    
                            <option value="3">Delivered</option>                   
                            <option value="4">Cancelled</option>                    
                          </select>
                      </div>
                </div>
            </div>
          </div>
        </div>
      </div>
	 <div class="overlay toggle-menu"></div>
    </div>
    </div>

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
var table = $('.datatable').DataTable( {
// buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
"columnDefs": [ {
      "targets"  : 'no-sort',
      "orderable": false,
    }]
});
table.buttons().container().appendTo( '#datatable_wrapper .col-md-6:eq(0)' );} );
function countdown() {
    var seconds = 45;
    var mins = 0
    function tick() {
        var counter = document.getElementById("timer");
        var current_minutes = 0
        seconds--;
        counter.innerHTML = current_minutes.toString() + ":" + (seconds < 10 ? "0" : "") + String(seconds);
        if( seconds > 0 ) {
            setTimeout(tick, 1000);
        } else {
			window.location="";
            if(mins > 1){
               // countdown(mins-1);   never reach "00″ issue solved:Contributed by Victor Streithorst
               setTimeout(function () { countdown(mins - 1); }, 1000);
            }
        }
    }
    tick();
}
 
countdown();
function changedelivery(val,id){
	$.ajax({			   
	type: "POST",			   
	url: "<?php echo base_url($this->folder_key.'/dashboard/delivery/');?>"+id+"/"+val,			   
	success: function(msg){		 	 
	
	}			
	});		
}
function changedriver(val,id){
	$.ajax({			   
	type: "POST",			   
	url: "<?php echo base_url($this->folder_key.'/dashboard/drivers/');?>"+id+"/"+val,			   
	success: function(msg){	 	 
	
	}			
	});		
}
function changestaff(val,id){
	$.ajax({			   
	type: "POST",			   
	url: "<?php echo base_url($this->folder_key.'/dashboard/staff/');?>"+id+"/"+val,			   
	success: function(msg){	 	 
	
	}			
	});		
}
$(document).ready(function () {
    $("#ckbCheckAll").click(function () {
        $(".checkBoxClass").prop('checked', $(this).prop('checked'));
    });
	$("#ckbCheckAll1").click(function () {
        $(".checkBoxClass1").prop('checked', $(this).prop('checked'));
    });
	$("#ckbCheckAll2").click(function () {
        $(".checkBoxClass2").prop('checked', $(this).prop('checked'));
    });
	$("#ckbCheckAll3").click(function () {
        $(".checkBoxClass3").prop('checked', $(this).prop('checked'));
    });
	$("#ckbCheckAll4").click(function () {
        $(".checkBoxClass4").prop('checked', $(this).prop('checked'));
    });
});
function changedeliveryall(val){
	if (confirm('Are you sure you want to change Delivery Status')) {
		var invoice = [];
		$.each($("input[name='invoice']:checked"), function(){
			invoice.push($(this).val());
		});
		$.ajax({			   
		type: "POST",			   
		url: "<?php echo base_url($this->folder_key.'/dashboard/deliveryall');?>",
		data: {val: val,invoice: invoice.join(",")},			   
		success: function(msg){		 	 
			<?php /*?>$.each($("input[name='invoice']:checked"), function(){
				$("#delivery_"+$(this).val()).val(val);
			});<?php */?>
			window.location="";
		}			
		});
	}
}
function changedriverall(val){
	if (confirm('Are you sure you want to assign Driver')) {
		var invoice = [];
		$.each($("input[name='invoice']:checked"), function(){
			invoice.push($(this).val());
		});
		$.ajax({			   
		type: "POST",			   
		url: "<?php echo base_url($this->folder_key.'/dashboard/driversall/');?>",			   
		data: {val: val,invoice: invoice.join(",")},
		success: function(msg){	 	 
			<?php /*?>$.each($("input[name='invoice']:checked"), function(){
				$("#driver_"+$(this).val()).val(val);
			});<?php */?>
			window.location="";
		}			
		});
	} 			
}
function changestaffall(val){
	if (confirm('Are you sure you want to assign Staff')) {
		var invoice = [];
		$.each($("input[name='invoice']:checked"), function(){
			invoice.push($(this).val());
		});
		$.ajax({			   
		type: "POST",			   
		url: "<?php echo base_url($this->folder_key.'/dashboard/staffall/');?>",			   
		data: {val: val,invoice: invoice.join(",")},
		success: function(msg){	 	 
			<?php /*?>$.each($("input[name='invoice']:checked"), function(){
				$("#staff_"+$(this).val()).val(val);
			});<?php */?>
			window.location="";
		}			
		});
	} 			
}
function changeval(){
	$('input:checkbox').removeAttr('checked');
}
</script>