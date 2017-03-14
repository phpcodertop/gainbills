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
      <div class="item col-lg-4 col-md-4 col-sm-6 col-xs-12" id="<?php echo $ads_item['ads_id']?>" user_id="<?php if($user_id!=NULL) echo $user_id; ?>"adv_url="<?php echo  base_url().'ads/adv_page/'.$ads_item['ads_id'];?>">
	  <div class="inner">
       <h4 id="<?php echo 'title'.$ads_item['ads_id']?>"><?php echo $ads_item['title'];?></h4>
       <div class="ads_image col-xs-12">
       <img src="<?php echo base_url().'images/no_image.png'?>"/>
       </div>
       <div class="ads_desc col-xs-12">
       <span><?php echo $ads_item['description'];?></span>							
       </div>
	   <div class="clicked col-xs-12" id="<?php echo 'ads'.$ads_item['ads_id']?>">
	   <?php 
	if (in_array($ads_item['ads_id'], $clickads_id))echo 'clicked';
	else echo '60sec-0.02$';?> </div>
  </div>
  </div>
<?php }?>

</div>
	
<script>
$('.item').click(function(){
	var id= $(this).attr('id');
	var url=$(this).attr('adv_url');
	
	document.getElementById('ads'+id).innerHTML='Clicked';
	document.getElementById('ads'+id).style.color="#ad3434";
	document.getElementById('title'+id).style.background='#ddd';
	var info='adv_id='+$(this).attr('id')+'&user_id='+$(this).attr('user_id');
	   $.ajax({
           type: "POST",
           url: "<?php echo  site_url ('ads/add_row')?>",
           data: info
        });
		window.open(url,'_blank');
	 
});
</script>