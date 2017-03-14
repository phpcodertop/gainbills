<div id="ads_container">
<?php 
///prepare array of clickable ads
$clickads_id=array();
foreach($clickable_ads as $clickads){ 
$clickads_id[]=$clickads['adv_id'];	
}
$current_date= date('Y-m-d H:i:s');
$current_date= date('Y-m-d H:i:s');
 // CDT
foreach($ads as $ads_item){?>
     <?php /*?> <div class="item col-lg-4 col-md-4 col-sm-6 col-xs-12" id="<?php echo $ads_item['ads_id']?>" user_id="<?php if($user_id!=NULL) echo $user_id; ?>"adv_url="<?php echo  base_url().'ads/adv_page/'.$ads_item['ads_id'];?>">
	  <div class="inner">
       <h4 id="<?php echo 'title'.$ads_item['ads_id']?>"><?php echo $ads_item['title'];?></h4>
       <div class="ads_image col-xs-12">
        <img src="<?php if($ads_item['image']!=NULL)echo base_url().$ads_item['image']; else echo base_url().'assets/images/no_image.png'?>"/>       </div>
       <div class="ads_desc col-xs-12">
       <span><?php echo $ads_item['description'];?></span>							
       </div>
	   <div class="clicked col-xs-12" id="<?php echo 'ads'.$ads_item['ads_id']?>">
	   <?php 
	if (in_array($ads_item['ads_id'], $clickads_id))echo 'clicked';
	else echo $ads_item['duration'].' Seconds-'.$ads_item['points'].' Points';?> </div>
  </div>
  </div><?php */?>
  <div class="adv_item col-sm-4"  id="<?php echo $ads_item['ads_id']?>" user_id="<?php if($user_id!=NULL) echo $user_id; ?>"adv_url="<?php echo  base_url().'ads/adv_page/'.$ads_item['ads_id'];?>">
	<div class="product-image-wrapper">
		<div class="single-products">
			<div class="productinfo text-center">
              <h4 id="<?php echo 'title'.$ads_item['ads_id']?>"><?php echo $ads_item['title'];?></h4>
		      <img src="<?php if($ads_item['image']!=NULL)echo base_url().$ads_item['image']; else echo base_url(). 'assets/images/no_image.png'?>" alt="" />
			    <p><?php echo $ads_item['description'];?></p>
                <h2 class="clicked col-xs-12" id="<?php echo 'ads'.$ads_item['ads_id']?>">
                   <?php if (in_array($ads_item['ads_id'], $clickads_id))echo 'clicked';
	                else echo $ads_item['duration'].' Seconds-'.$ads_item['points'].' Points';?>
                </h2>

			</div>
		</div>
		<!--<div class="choose">
			<ul class="nav nav-pills nav-justified">
				<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
				<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
			</ul>
		</div>-->
	</div>
</div>
<?php }?>
</div>
<?php if(isset($links))echo $links;?>
<script type='text/javascript' src='//eclkmpbn.com/adServe/banners?tid=94139_154105_0&type=footer&size=728x90'></script>
<script>
$('.adv_item').click(function(){
	var id= $(this).attr('id');
	var url=$(this).attr('adv_url');
	
	document.getElementById('ads'+id).innerHTML='Clicked';
	document.getElementById('ads'+id).style.color="##fe980f";
	//document.getElementById('title'+id).style.background='#ddd';
	var info='adv_id='+$(this).attr('id')+'&user_id='+$(this).attr('user_id');
	   $.ajax({
           type: "POST",
           url: "<?php echo  site_url ('ads/add_row')?>",
           data: info
        });
		window.open(url,'_blank');
	 
});
</script>