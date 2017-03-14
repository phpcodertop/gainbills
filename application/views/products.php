<?php if($ajax_result=='no'){?>  
<div id="products_list">
<?php }?>
<?php if(empty($products)){?><div id="ajax_result"> No Products available!!!</div>
<?php }else {?>
<?php foreach($products as $product){?>
   <div class="product_item col-sm-4">
		<div class="product-image-wrapper">
				<div class="single-products"  id="<?php echo $product['id']?>">
					<div class="productinfo text-center">
								<img src="<?php if($product['image']!=NULL)echo base_url().$product['image']; else echo                                       base_url().'assets/images/no_image.png'?>" alt="" />
											<h2>EGP &nbsp;<?php echo $product['price']?></h2>
											<p><?php echo $product['title'];?></p>
					     </div>
					 <div class="product-overlay">
							<div class="overlay-content">
							  <h2>Show more details</h2>
							</div>
					</div>
		     </div>
		<div class="choose">
			<ul class="nav nav-pills nav-justified">
                 <li >    <?php      
                        echo form_open('/Cart/add');
                        echo form_hidden('id', $product['id']);
                        echo form_hidden('name',  $product['title']);
                        echo form_hidden('price', $product['price']);
                        ?>  
<li class ="fa fa-plus-square">
                        <?php
                        $btn = array(
                            'class' => 'add_cart_btn',
                            'value' => 'Add to Cart',
                            'name' => 'action'
                        );
                        echo form_submit($btn);
                        echo form_close();
                        ?>     
			</li>
<!-- <li><a href="/Cart/add"><i class="fa fa-plus-square"></i>Add to compare</a></li> -->

			</ul>
		</div>
      </div>  
<div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
</div>    
 </div>
              <?php }}?>  
                              <?php if(isset($links))echo $links;?>
                               <?php if($ajax_result=='no'){?>                       
                                 </div>                       
                                 <?php }?>
              
                              <?php if(isset($pages) &&$pages>1&&$ajax_result=='no'){?>
                                   	
                                    <div id="load_more">
                                      <div style="display:none;" class="animation_image"> Loading...</div>
                                      <p id="load_more" class="load_more_photo load_button">Load More</p>
                                    </div> 
                              <?php }?>
<style>
#ajax_result{background-color:#fe980f;color:#fff;font-weight:bold;font-size:14pt; padding:20px; margin-top:47px;}
.product_item{margin-top:8px;}
</style> 
<script>
$('.single-products').click(function(){
	var id= $(this).attr('id');
	var url="<?php echo base_url().'products/';?>"+id;
		window.open(url,'_blank');
	 
});
    
</script>
<?php if($ajax_result=='no'){?>  
<style>
#load_more{position:absolute; bottom:0px;left:31px; margin-bottom:-8px;display:block;left:15px;width:33%;}
#load_more p{background-color:#fe980f;color:#fff;font-weight:bold; padding:10px; margin-top:7px;}
#load_more p:hover{ cursor:pointer;}
</style>
<script>
//pagination////////
 var page_num=1;
 var total_pages = <?php echo $pages; ?>;
	if(page_num<total_pages){
	  $(".load_more_photo").click(function (e) { 
	   //page_num++
	  //alert(page_num);
	  if(page_num==total_pages-1) {
		  $(this).hide(); 
	  }
				$('.animation_image').show();
					$.ajax({
                         type: "POST",
                         url: "<?php echo  site_url ('home/show_cat_products')?>",
                          data: "page_num="+page_num+"&cat_id=<?php echo $product['cat_id']?>",
                         success: function(result){
							 $('.animation_image').hide();
							 $('#products_list').append(result);
				             if(page_num<total_pages){
						         page_num++; //user click increment on load button
					          }	
						   }
                    });
					
				
	  });
	}
<?php }?>	
</script>
<script>
$('.add_cart_btn').on('click', function () {
        var cart = $('.fa fa-shopping-cart');
        var imgtodrag = $(this).parent('.productinfo text-center').find("img").eq(0);
       alert( imgtodrag.offset());
          if (imgtodrag) {
            var imgclone = imgtodrag.clone()
                .offset({
                top: imgtodrag.offset().top,
                left: imgtodrag.offset().left
            })
                .css({
                'opacity': '0.5',
                    'position': 'absolute',
                    'height': '150px',
                    'width': '150px',
                    'z-index': '100'
            })
                .appendTo($('body'))
                .animate({
                'top': cart.offset().top + 10,
                    'left': cart.offset().left + 10,
                    'width': 75,
                    'height': 75
            }, 1000, 'easeInOutExpo');
            
            setTimeout(function () {
                cart.effect("shake", {
                    times: 2
                }, 200);
            }, 1500);

            imgclone.animate({
                'width': 0,
                    'height': 0
            }, function () {
                $(this).detach()
            });
        }
    });
</script>