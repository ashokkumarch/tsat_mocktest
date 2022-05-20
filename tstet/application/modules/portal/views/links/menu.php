<ul class="sidebar-menu">
  <?php foreach($this->menu_list as $key => $value){
	if($value['access']==1){
	if(count($value['list'])==0){
	if($value['image']!=''){$icon='<img src="'.base_url($value['image']).'" style="width:20px;">';}else if($value['icon']!=''){$icon='<i class="'.$value['icon'].'"></i>';}else{$icon='<i class="zmdi zmdi-view-dashboard"></i>';}
	?>
  <li class="<?php echo activate_menu($value['controller']);?>"><a href="<?php echo base_url($this->folder_key.'/'.$value['controller']);?>" class="waves-effect"><?php echo $icon;?> <span><?php echo $value['title'];?></span></a>
  </li>
  <?php }else if($this->session->userdata($this->folder_key.'_type')=='Admin'){
	  $array = array();
	  foreach($value['list'] as $key1 => $value1){$array[] = $value1['controller'];}
	  if($value['image']!=''){$icon='<img src="'.base_url($value['image']).'" style="width:20px;">';}else if($value['icon']!=''){$icon='<i class="'.$value['icon'].'"></i>';}else{$icon='<i class="zmdi zmdi-view-dashboard"></i>';}
	  ?>
  <li class="<?php if(in_array($this->router->fetch_class(), $array)){echo activate_menu($this->router->fetch_class());}?>">
    <a href="javaScript:void();" class="waves-effect"><?php echo $icon;?> <span><?php echo $value['title'];?></span><i class="fa fa-angle-left pull-right"></i></a>
    <ul class="sidebar-submenu">
     <?php foreach($value['list'] as $key1 => $value1){
	 if($value['image']!=''){$icon1='<img src="'.base_url($value['image']).'" style="width:20px;">';}else if($value['icon']!=''){$icon1='<i class="'.$value['icon'].'"></i>';}else{$icon1='<i class="zmdi zmdi-view-dashboard"></i>';}
	 if($value1['access']==1){	 
	 ?>
      <li class="<?php echo activate_menu($value1['controller']);?>"><a href="<?php echo base_url($this->folder_key.'/'.$value1['controller']);?>"><?php echo $icon1;?> <?php echo $value1['title'];?></a></li>
      <?php }}?>
    </ul>
  </li>
  <?php }else{
	 foreach($value['list'] as $key1 => $value1){
	 if($value1['access']==1){	 
	 ?>
      <li class="<?php echo activate_menu($value1['controller']);?>"><a href="<?php echo base_url($this->folder_key.'/'.$value1['controller']);?>" class="waves-effect"><?php echo $icon1;?> <?php echo $value1['title'];?></a></li>
    <?php }}}}}?>
</ul>