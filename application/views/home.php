<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title;?></title>
<link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css'?>"/>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="<?php echo base_url().'assets/css/animate.css'?>"/>
<link rel="stylesheet" href="<?php echo base_url().'assets/css/font-awesome.min.css'?>"/>
<link rel="stylesheet" href="<?php echo base_url().'assets/css/main.css'?>"/>
<link rel="stylesheet" href="<?php echo base_url().'assets/css/responsive.css'?>"/>
<script type="text/javascript" src="<?php echo base_url().'assets/JS/jquery.min.js'?>"></script>
<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<script>
$('.product_item').click(function(){
	var id= $(this).attr('id');
	var url="<?php echo base_url().'home/product_page/';?>"+id;
		window.open(url,'_blank');
});
</script>
</head>
<body>
<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><!--<i class="fa fa-phone"></i>--> contact mail</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> support@gainbills.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header-middle">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="<?php echo base_url().'home'?>" class="<?php if($this->uri->segment(1) == 'home'||                              $this->uri->segment(1)==NULL) echo 'active';?>">
                            <img src="<?php echo base_url();?>/assets/images/2logo.png" alt="GainBills"</img></a>
						</div>
						<div class="btn-group pull-right">
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
                            <?php if($this->session->userdata('email') &&($user_name!=NULL)){?>
                            <li class="my_name">
                                  Welcome <?php echo $user_name;?>
                                </li>
								<li class="my_points" id="user_points">
                                  <i class="fa fa-certificate"><?php echo $user_points;?> Points</i>
                                </li>
								<li>
                                 <a href="<?php echo base_url().'auth/edit_user/'.$user_id?>">My Profile</a>
                                </li>
								<li><a href="#"><i class="fa fa-bars"></i> MY Ads</a></li>
							 <li> <a href="<?php echo base_url().'logout'?>"><i class="fa fa-lock"></i> Logout</a>
                             </li>
                             <?php }else {?> 
                                 <li>
                                 <a href="<?php echo base_url().'create_user'?>"><i class="fa fa-user"></i> Account
                                 </a>
                                 </li>
								<!--<li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>-->
								<li><a href="<?php echo base_url().'login'?>"><i class="fa fa-lock"></i> Login</a>
                                </li>
<li><a href="<?php echo base_url() .'/home/show_cart' ?>"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                             <?php }?>  
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header-bottom">
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=          ".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="<?php echo base_url().'home'?>" class="<?php if($this->uri->segment(1) ==                                     'home'||$this->uri->segment(1)==NULL) echo 'active';?>">Home</a>
                                </li>
					             <li><a href="<?php echo base_url().'ads'?>" class="<?php if($this->uri->segment(1) ==                                       'ads')echo 'active';?>"></i>View Ads</a>
                                 </li>
								<li><a href="<?php echo base_url().'contact_us' ?>" class="<?php if($this->uri->segment(1)                                        == 'contact_us')echo 'active';?>">Contact Us</a>
                                </li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->	
	<section>
		<div class="container">
			<div class="row">
               
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>		
                        <ul>
<div class="panel-group category-products" id="accordian">
                                                    <?php if(isset($product_cats)){ foreach($product_cats as $cats){ ?>
							<div class="panel panel-default">
                                                	<div class="panel-heading">
								<h4 class="panel-title">
                                <a href="#" onclick="javascript:show_cats(<?php echo $cats->id?>)"><?php echo $cats->cat_title?></a>
                                </h4>

								</div>
							</div>
						<?php }}?>
                                                 
						</div>
<div class="wrappert">
<h2>Latest News</h2>
<div class="news5">
<?php if(isset($main_rss)){
	                       echo $main_rss;}
else{echo "no news" ;}?>

   <ul id="newrs">
      </ul>
        </div>
             </div>			
					</div>
				</div>
				
				<div class="col-sm-9 padding-right" id="right_container">
 <?php if(isset($cart_lst)){?>
                                                
                                                        <?php
                                                          echo $cart_lst;
                                                      }
                                                     ?>
					<?php  if(isset($order_lst)){?>
                                                
                                                        <?php
                                                          echo $order_lst;
                                                      }
                                                     ?>								 
                     <?php if(isset($main_content)){
	                       echo $main_content;}?><!--/recommended_items-->		
				</div>
			</div>
		</div>
	</section>
	<footer id="footer">				
		<div class="footer-widget"> 	
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">T-Shirt</a></li>
								<li><a href="#">Mens</a></li>
								<li><a href="#">Womens</a></li>
								<li><a href="#">Gift Cards</a></li>
								<li><a href="#">Shoes</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privacy Policy</a></li>
							         <li><a href="#">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About US</h2>
							<ul class="nav nav-pills nav-stacked">
												<li><a href="<?php echo base_url().'contact_us' ?>">Contact Us</a></li>
                                                   </ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>subscribe</h2>
							   <form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
							</form>
						</div>
					</div>	
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
<!--<div class="companyinfo">
							<h2><span>G</span>ainBills</h2>
							<p>  E-Marketing  and advertisements site that anybody can win from it by collecting Points to buy product or replace it by money</p> 
						</div>-->
				<div class="row">
					<p class="pull-left"> Copyright© 2016 GainBills.com .</p>
				</div>
			</div>
		</div>		
	</footer><!--/Footer-->
<script type="text/javascript" src="<?php echo base_url().'assets/JS/bootstrap.min.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/JS/jquery.scrollUp.min.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/JS/main.js'?>"></script>
<script src="<?php echo base_url().'assets/JS/jquery.datetimepicker.js'?>"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="<?php echo base_url().'assets/JS/jquery.easy-ticker.js'?>"></script> 
<script>
/*$(function(){
	$('.news5').easyTicker({
		direction: 'up',
		visible:  5,
	    interval: 2000
	});
});
setInterval(get_news,10000);*/
function get_news(){
	 $.ajax({
           type: "POST",
           datatype:"xml",
           contentType: "text/xml; charset=\"utf-8\"",
            url: "<?php echo  base_url().'home/rss_loading/'?>",
            beforeSend: function() {
              	   $('.news5').html('loading...');
            },
			error: function(jqXHR, textStatus, errorThrown) {
     console.log(textStatus, errorThrown);
},
   success: function($xml){
    console.log(typeof $xml.responseText);
          //   console.log($xml);
 }
 });
}
</script>
<script>
function show_cats(cat_id){
	 $.ajax({
        type: "POST",
        url: "<?php echo  base_url ().'home/show_cat_products/'?>",
        data:"page_num=0&cat_id="+cat_id,
    beforeSend: function() {
              	   $('#right_container').html('loading...');
            },
			error: function(jqXHR, textStatus, errorThrown) {
  console.log(textStatus, errorThrown);
},
   success: function(result){
	  $('#right_container').html(result);
  }
 });
}					
</script>
</body>
</html>