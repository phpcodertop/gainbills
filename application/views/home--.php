<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title;?></title>
<script type="text/javascript" src="<?php echo base_url().'assets/JS/jquery.min.js'?>"></script>
<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/JS/bootstrap.min.js'?>"></script>
<link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css'?>"/>

<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
<script src="<?php echo base_url().'assets/JS/jquery.datetimepicker.js'?>"></script>
<link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css'?>"/>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- first -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-8653911547162219"
     data-ad-slot="6776557089"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<script type='text/javascript' src='//eclkmpsa.com/adServe/banners?tid=94139_154105_3&tagid=2'></script>
</head>
<body>
<div id="main_container" class="container main" >
<div id="container">
  <div id="main-header">
    <div class="container-fluid header-top">
      <div class="row">
        <div class="col-md-4 col-sm-3 col-xs-12">
          
         <div class="navbar-header navbar-default ">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
          <a class="" href="#"><img class="img-responsive image_brand" src="#"></a>
        </div>
      </div> <!-- col-md-4 col-xs-12 -->
      <div class="col-md-8 col-sm-9 col-xs-12 xs_color">
        <div class="navbar-header navbar-kanan " >
           <ul class="nav nav-pills ">
         <?php if($this->session->userdata('email') &&($user_name!=NULL)){
				  ?>
            <li class="grey"><a href="#">
                <span>You have</span>
                <span class="round_text red_date"><?php echo $user_points;?></span>
                <span>Points</span>
              </a></li>
             
             <li class="light-blue">
           <a href="<?php echo base_url().'auth/edit_user/'.$user_id?>">My Profile</a>
           </li>    
           <li class="light-blue">
           <a href="#">My Ads</a>
           </li>
           <li class="light-blue">
           <a href="#">My Products</a>
           </li>
              <li class="light-blue">
             <a href="<?php echo base_url().'auth/logout'?>"> <span class="user-info hidden-xs">Logout</span></a>
           </li> 
              <?php  echo '<p>welcome '.$user_name.'</p>';
              } else{?>
           <li class="light-blue">
             <a href="<?php echo base_url().'auth/create_user'?>"> <span class="user-info hidden-xs">Sign Up
             </span></a>
           </li>   
           <li class="light-blue">
            <a href="<?php echo base_url().'auth/login'?>"><span class="user-info hidden-xs"> Sign IN</span>
            </a>
           
           <!-- <ul class="dropdown-menu xs-menu-left"  role="menu">
               
              <li><a href="#">Sign In</a></li>
              <li><a href="#">S</a></li>
              <li class="divider"></li>
              <li><a href="#">Logout</a></li>
            </ul>-->
          </li>

          <?php }?>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div> <!-- col-md-8 col-xs-12 -->
  </div>
</div>
<div class="container-fluid header-bottom">
<div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-kiri" id="bottom_menu">
        <li><a href="<?php echo base_url().'home'?>"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="<?php echo base_url().'ads'?>"><i class="fa fa-users"></i>View Ads</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-tasks"></i> 
            Items <span class="caret"></span></a>
          <ul class="dropdown-menu menu-top-front" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
        <li><a href="#"><i class="fa fa-file-text-o"></i> Reports</a></li>
        <li><a href="#"><i class="fa fa-cart-plus"></i> Sales</a></li>
        <li><a href="#"><i class="fa fa-sliders"></i> Config</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
</div><!-- container fluid 2 -->
</div><!-- main header -->
<div id="wrapper">
  <!-- Sidebar -->
  <div id="sidebar-wrapper"> 
    sidebar
  </div><!-- /#sidebar-wrapper -->
  <!-- Page Content -->
  <div id="page-content-wrapper">
 <?php if(isset($main_content)){
	  echo $main_content;}?>
  </div><!-- /#page-content-wrapper -->
 
 </div> 
<div class="clear"></div>
</div> 
 <div id="footer" class="container-fluid footer">footer footer footer</div> 
</div> 
</body>
</html>