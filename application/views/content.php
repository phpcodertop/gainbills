    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <aside class="sidebar">
            <section class="widget widget-category widget-category_mod-a wow bounceInLeft" data-wow-duration="2s">
              <h3 class="widget-title ui-title-block ui-title-block_small"><i class="icon fa fa-bars"></i>CATEGORIES</h3>
              <div class="block_content">
                <ul class="list-categories list list-links">
                <?php foreach($category as $cat): ?>
                  <li class="list-categories__item"> <a class="list-sidebar__link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="javascript:void(0);"> 
                    <span class="list-categories__mark"></span>
                   </a> 
                 <a href="<?php echo base_url().'CategoryController/show_cat_products/'.$cat['id']; ?>">  <span class="list-categories__name"><?php echo $cat['title']; ?></span></a> 
                  <?php 
                    $id = $cat['id'];
                    $ccat = $this->Admin_products_cat->Get_all_Catgs($id);
                    $ccatnum = $this->Admin_products_cat->Get_num_Catgs($id);
                  ?>
                    <?php
                    foreach($ccat as $cat):
                  ?>

                      <?php if($ccatnum != 0): ?>
                      <ul class="dropdown-menu">

                      <li> <a style="font-size: 10px;" href="<?php echo base_url().'CategoryController/show_cat_products/'.$cat['id']; ?>"><?php echo $cat['title']; ?></a> </li>

                        </ul>
                      <?php endif; ?>

                  <?php endforeach; ?>
                   </li>
                <?php endforeach; ?>
                </ul>
              </div>
            </section>
            <!-- end widget-category -->
            <div class="widget text-center"> <a class="banner wow bounceInLeft" href="javascript:void(0);" data-wow-duration="2s" data-wow-delay=".5s"> <img class="img-responsive" src="<?php echo base_url(); ?>assets2/assets/media/banners/2.jpg" height="170" width="270" alt="Banner">
              <div class="banner-border banner-border_brown">
                <div class="banner-border__inner"></div>
              </div>
              </a> </div>
          </aside>
          <!-- end sidebar --> 
        </div>
        <!-- end col -->
        
        <div class="col-md-9">
        
        
            <script type="text/javascript" src="<?php echo base_url(); ?>assets2/assets/plugins/sliderpro/js/jquery.sliderPro.min.js"></script>
    <div id="sliderpro3" class="slider-pro main-slider">
      <div class="sp-slides">
        <div class="sp-slide"> <img class="sp-image" 
            src="<?php echo base_url(); ?>assets2/assets/media/main-slider/d.png"
        	data-src="<?php echo base_url(); ?>assets2/assets/media/main-slider/d.png"
            data-retina="<?php echo base_url(); ?>assets2/assets/media/main-slider/d.png" alt="img"/>
          <div class="item-wrap sp-layer  sp-padding" data-horizontal="605" data-vertical="25"
					data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200"> <img src="<?php echo base_url(); ?>assets2/assets/media/main-slider/d1.png"  alt="slide element"/></div>
 <div class="item-wrap sp-layer  sp-padding" data-horizontal="635" data-vertical="95"
					data-show-transition="left" data-hide-transition="up" data-show-delay="700" data-hide-delay="200"> <img src="<?php echo base_url(); ?>assets2/assets/media/main-slider/d2.png"   alt="slide element"/></div>
        <div class="item-wrap sp-layer  sp-padding" data-horizontal="25" data-vertical="25"
					data-show-transition="left" data-hide-transition="up" data-show-delay="500" data-hide-delay="300"> <a href="category-1.html"><img src="<?php echo base_url(); ?>assets2/assets/media/main-slider/d3.png"   alt="slide element"/></a></div>
        </div>
        
        
        <div class="sp-slide"> <img class="sp-image" 
            src="<?php echo base_url(); ?>assets2/assets/media/main-slider/z.png"
        	data-src="<?php echo base_url(); ?>assets2/assets/media/main-slider/z.png"
            data-retina="<?php echo base_url(); ?>assets2/assets/media/main-slider/z.png" alt="img"/>
          <div class="item-wrap sp-layer  sp-padding" data-horizontal="205px" data-vertical="25"
					data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200"> <img src="<?php echo base_url(); ?>assets2/assets/media/main-slider/z1.png"  alt="slide element"/></div>
 <div class="item-wrap sp-layer  sp-padding" data-horizontal="270" data-vertical="135"
					data-show-transition="left" data-hide-transition="up" data-show-delay="700" data-hide-delay="200"> <img src="<?php echo base_url(); ?>assets2/assets/media/main-slider/z2.png"   alt="slide element"/></div>
        <div class="item-wrap sp-layer  sp-padding" data-horizontal="25" data-vertical="-10"
					data-show-transition="left" data-hide-transition="up" data-show-delay="500" data-hide-delay="300"> <a href="category-1.html"><img src="<?php echo base_url(); ?>assets2/assets/media/main-slider/z3.png"   alt="slide element"/></a></div>
        </div>
        
        
        
      </div>
    </div>
        

          
          <!-- end main-slider -->
          
          <ul class="category-images cat-img-2">
            <li class="grid"> 
              <figure class="effect-bubba wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;"> <img class="img-responsive" src="<?php echo base_url(); ?>assets2/assets/media/420x170/1.jpg" height="170" width="420" alt="Foto">
                <figcaption> <span class="links-categories__inner"> <span class="links-categories__label">NEW</span> <span class="links-categories__name">FASHION COLLECTION</span> </span> <a href="#">View more</a> </figcaption>
              </figure>
            </li>
            <li class="grid left-space right-space">
              <figure class="effect-bubba wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;"> <img class="img-responsive" src="<?php echo base_url(); ?>assets2/assets/media/420x170/2.jpg" height="170" width="420" alt="Foto">
                <figcaption> <span class="links-categories__inner"> <span class="links-categories__label">NEW</span> <span class="links-categories__name">PERFUMES COLLECTION</span> </span> <a href="#">View more</a> </figcaption>
              </figure>
            </li>
            
          </ul>
          <!-- end section-area --> 
        </div>
        <!-- end col --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container -->
    
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="section-area section-advantages no-top-padding">
            <ul class="list-advantages list-advantages_mod-a list-unstyled wow bounceInUp" data-wow-duration="2s">
              <li class="list-advantages__item"> <a class="list-advantages__link" href="javascript:void(0);"> <span class="list-advantages__icon helper"><i class="icon icon-diamond"></i></span>
                <div class="list-advantages__inner"> <span class="list-advantages__name">Special Offers</span> <span class="list-advantages__description">Shop Big Save Big</span> </div>
                </a> </li>
              <li class="list-advantages__item"> <a class="list-advantages__link" href="javascript:void(0);"> <span class="list-advantages__icon helper"><i class="icon icon-basket-loaded"></i></span>
                <div class="list-advantages__inner"> <span class="list-advantages__name">Free Delivery</span> <span class="list-advantages__description">On Orders Above $99</span> </div>
                </a> </li>
              <li class="list-advantages__item"> <a class="list-advantages__link" href="javascript:void(0);"> <span class="list-advantages__icon helper"><i class="icon icon-like"></i></span>
                <div class="list-advantages__inner"> <span class="list-advantages__name">30 Days Return</span> <span class="list-advantages__description">Policy We offers</span> </div>
                </a> </li>
              <li class="list-advantages__item"> <a class="list-advantages__link" href="javascript:void(0);"> <span class="list-advantages__icon helper"><i class="icon icon-rocket"></i></span>
                <div class="list-advantages__inner"> <span class="list-advantages__name">Fastest Shipping</span> <span class="list-advantages__description">2 Days Express</span> </div>
                </a> </li>
            </ul>
            <!-- end list-advantages --> 
          </div>
          <!-- end section-area --> 
        </div>
        <!-- end col --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container -->
    
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="section-area">
            <ul id="filter" class="clearfix wow bounceInLeft" data-wow-duration="2s" data-wow-delay=".5s">
              <li><a href="#" data-filter="*" class="current">ALL PRODUCTS</a></li>
              <li><a href="#" data-filter=".best">BEST SELLERS</a></li>
              <li><a href="#" data-filter=".newest">NEWEST ADDED</a></li>
            </ul>
          </div>
          <!-- end section-area --> 
        </div>
        <!-- end col --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container -->
    
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="section-area">
            <div class="isotope-frame wow bounceInRight" data-wow-duration="2s">
              <ul class="isotope-filter products clearfix">
                <li class="isotope-item best products__item"> <a class="products__foto" href="<?php echo base_url(); ?>assets2/assets/media/catalog/1.jpg" rel="prettyPhoto"> <img src="<?php echo base_url(); ?>assets2/assets/media/catalog/1.jpg" height="260" width="260" alt="Goods"> </a>
                  <h4 class="products__name"><a href="#">Montblanc Meisterstück</a></h4>
                  <div class="products__category"><a href="#">WATCHES</a></div>
                  <div class="products__inner clearfix"> <span class="products__price-new">$4500</span> <span class="products__price-old">$89.00</span>
                    <ul class="rating">
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star disabled"></i></li>
                    </ul>
                  </div>
                  <footer class="products-btns clearfix">
                    <button class="products-btns__btn products-btns__add"><i class="icon icon-bag color_primary" aria-hidden="true"></i> Add to cart</button>
                    <span class="products-btns__other pull-right">
                    <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                    <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                    </span> </footer>
                  <span class="label-wrap"><span class="label label-danger">SALE</span></span> </li>
                <li class="isotope-item newest products__item"> <a class="products__foto" href="<?php echo base_url(); ?>assets2/assets/media/catalog/2.jpg" rel="prettyPhoto"> <img src="<?php echo base_url(); ?>assets2/assets/media/catalog/2.jpg" height="260" width="260" alt="Goods"> </a>
                  <h4 class="products__name"><a href="#">Samsung Galaxy S6 White</a></h4>
                  <div class="products__category"><a href="#">SMARTPHONES</a></div>
                  <div class="products__inner clearfix"> <span class="products__price-new">$720</span> <span class="products__price-old">$89.00</span>
                    <ul class="rating">
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star disabled"></i></li>
                    </ul>
                  </div>
                  <footer class="products-btns clearfix">
                    <button class="products-btns__btn products-btns__add"><i class="icon icon-bag color_primary" aria-hidden="true"></i> Add to cart</button>
                    <span class="products-btns__other pull-right">
                    <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                    <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                    </span> </footer>
                  <span class="label-wrap"><span class="label label-warning">NEW</span></span> </li>
                <li class="isotope-item hot products__item"> <a class="products__foto" href="<?php echo base_url(); ?>assets2/assets/media/catalog/3.jpg" rel="prettyPhoto"> <img src="<?php echo base_url(); ?>assets2/assets/media/catalog/3.jpg" height="260" width="260" alt="Goods"> </a>
                  <h4 class="products__name"><a href="#">Perfume de Toilet</a></h4>
                  <div class="products__category"><a href="#">PERFUMES</a></div>
                  <div class="products__inner clearfix"> <span class="products__price-new">$235</span> <span class="products__price-old">$89.00</span>
                    <ul class="rating">
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star disabled"></i></li>
                    </ul>
                  </div>
                  <footer class="products-btns clearfix">
                    <button class="products-btns__btn products-btns__add"><i class="icon icon-bag color_primary" aria-hidden="true"></i> Add to cart</button>
                    <span class="products-btns__other pull-right">
                    <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                    <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                    </span> </footer>
                  <span class="label-wrap"><span class="label label-info">HOT</span></span> </li>
                <li class="isotope-item newest products__item"> <a class="products__foto" href="<?php echo base_url(); ?>assets2/assets/media/catalog/4.jpg" rel="prettyPhoto"> <img src="<?php echo base_url(); ?>assets2/assets/media/catalog/4.jpg" height="260" width="260" alt="Goods"> </a>
                  <h4 class="products__name"><a href="#">Beats Solo Wireless</a></h4>
                  <div class="products__category"><a href="#">HEADPHONES</a></div>
                  <div class="products__inner clearfix"> <span class="products__price-new">$360</span> <span class="products__price-old">$89.00</span>
                    <ul class="rating">
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star disabled"></i></li>
                    </ul>
                  </div>
                  <footer class="products-btns clearfix">
                    <button class="products-btns__btn products-btns__add"><i class="icon icon-bag color_primary" aria-hidden="true"></i> Add to cart</button>
                    <span class="products-btns__other pull-right">
                    <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                    <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                    </span> </footer>
                  <span class="label-wrap"><span class="label label-warning">NEW</span></span> </li>
                <li class="isotope-item hot products__item"> <a class="products__foto" href="<?php echo base_url(); ?>assets2/assets/media/catalog/9.jpg" rel="prettyPhoto"> <img src="<?php echo base_url(); ?>assets2/assets/media/catalog/9.jpg" height="260" width="260" alt="Goods"> </a>
                  <h4 class="products__name"><a href="#">Apple Macbook Air 13”</a></h4>
                  <div class="products__category"><a href="#">LAPTOPS</a></div>
                  <div class="products__inner clearfix"> <span class="products__price-new">$1.333</span> <span class="products__price-old">$89.00</span>
                    <ul class="rating">
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star disabled"></i></li>
                    </ul>
                  </div>
                  <footer class="products-btns clearfix">
                    <button class="products-btns__btn products-btns__add"><i class="icon icon-bag color_primary" aria-hidden="true"></i> Add to cart</button>
                    <span class="products-btns__other pull-right">
                    <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                    <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                    </span> </footer>
                  <span class="label-wrap"><span class="label label-info">HOT</span></span> </li>
                <li class="isotope-item best products__item"> <a class="products__foto" href="<?php echo base_url(); ?>assets2/assets/media/catalog/10.jpg" rel="prettyPhoto"> <img src="<?php echo base_url(); ?>assets2/assets/media/catalog/10.jpg" height="260" width="260" alt="Goods"> </a>
                  <h4 class="products__name"><a href="#">Eye Shadow Makeup Kit</a></h4>
                  <div class="products__category"><a href="#">MAKEUP</a></div>
                  <div class="products__inner clearfix"> <span class="products__price-new">$80</span> <span class="products__price-old">$89.00</span>
                    <ul class="rating">
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star disabled"></i></li>
                    </ul>
                  </div>
                  <footer class="products-btns clearfix">
                    <button class="products-btns__btn products-btns__add"><i class="icon icon-bag color_primary" aria-hidden="true"></i> Add to cart</button>
                    <span class="products-btns__other pull-right">
                    <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                    <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                    </span> </footer>
                  <span class="label-wrap"><span class="label label-danger">SALE</span></span> </li>
                <li class="isotope-item best products__item"> <a class="products__foto" href="<?php echo base_url(); ?>assets2/assets/media/catalog/5.jpg" rel="prettyPhoto"> <img src="<?php echo base_url(); ?>assets2/assets/media/catalog/5.jpg" height="260" width="260" alt="Goods"> </a>
                  <h4 class="products__name"><a href="#">MP3 Active 2 Neon Blue 4GB</a></h4>
                  <div class="products__category"><a href="#">Music Players</a></div>
                  <div class="products__inner clearfix"> <span class="products__price-new">$235</span> <span class="products__price-old">$89.00</span>
                    <ul class="rating">
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star disabled"></i></li>
                    </ul>
                  </div>
                  <footer class="products-btns clearfix">
                    <button class="products-btns__btn products-btns__add"><i class="icon icon-bag color_primary" aria-hidden="true"></i> Add to cart</button>
                    <span class="products-btns__other pull-right">
                    <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                    <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                    </span> </footer>
                  <span class="label-wrap"><span class="label label-danger">SALE</span></span> </li>
                <li class="isotope-item hot products__item"> <a class="products__foto" href="<?php echo base_url(); ?>assets2/assets/media/catalog/7.jpg" rel="prettyPhoto"> <img src="<?php echo base_url(); ?>assets2/assets/media/catalog/7.jpg" height="260" width="260" alt="Goods"> </a>
                  <h4 class="products__name"><a href="#">Elekta 50” UHD 3D LED TV</a></h4>
                  <div class="products__category"><a href="#">LED TV’s</a></div>
                  <div class="products__inner clearfix"> <span class="products__price-new">$685</span> <span class="products__price-old">$89.00</span>
                    <ul class="rating">
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star disabled"></i></li>
                    </ul>
                  </div>
                  <footer class="products-btns clearfix">
                    <button class="products-btns__btn products-btns__add"><i class="icon icon-bag color_primary" aria-hidden="true"></i> Add to cart</button>
                    <span class="products-btns__other pull-right">
                    <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                    <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                    </span> </footer>
                  <span class="label-wrap"><span class="label label-info">HOT</span></span> </li>
              </ul>
            </div>
          </div>
          <!-- end section-area --> 
        </div>
        <!-- end col --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container -->
    
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="section-area section-banner">
            <div class="banner banner_w-btn wow bounceInUp" data-wow-duration="2s"> <img class="img-responsive" src="<?php echo base_url(); ?>assets2/assets/media/banners/5.jpg" height="200" width="1170" alt="Banner">
              <div class="banner__inner">
                <div class="banner__title">Mega Makeup Sale</div>
                <span class="banner__info">UPTO 35% OFF</span> <a class="banner__btn ui-btn ui-btn_primary" href="javascript:void(0);">SHOP NOW</a> </div>
            </div>
          </div>
        </div>
        <!-- end col --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container -->
    
    <div class="border-main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <aside class="sidebar">
              <section class="widget widget-slider widget_first wow bounceInLeft" data-wow-duration="2s">
                <h3 class="widget-title ui-title-block"><i class="icon fa fa-bars"></i>DEALS OF THE WEEK</h3>
                <div class="block_content">
                  <div class="products products_slider owl-carousel owl-theme_mod-a owl-theme enable-owl-carousel" id="sidebar-slider"
												data-min480="2"
												data-min768="3"
												data-min992="1"
												data-min1200="1"
												data-pagination="false"
												data-navigation="true"
												data-auto-play="400000"
												data-stop-on-hover="true">
                    <div class="products__item"> <a class="products__foto" href="<?php echo base_url(); ?>assets2/assets/media/260x305/1.jpg" rel="prettyPhoto"> <img src="<?php echo base_url(); ?>assets2/assets/media/260x305/1.jpg" height="305" width="260" alt="Goods"> </a>
                      <h4 class="products__name"><a href="#">Apple iPhone 6 Plus 64GB LTE Smartphone Silver</a></h4>
                      <div class="products__category"><a href="#">SMARTPHONE</a></div>
                      <div class="products__inner clearfix"> <span class="products__price-new">$499</span> <span class="products__price-old">$689.00</span>
                        <ul class="rating">
                          <li><i class="icon fa fa-star"></i></li>
                          <li><i class="icon fa fa-star"></i></li>
                          <li><i class="icon fa fa-star"></i></li>
                          <li><i class="icon fa fa-star"></i></li>
                          <li><i class="icon fa fa-star disabled"></i></li>
                        </ul>
                      </div>
                      <footer class="products-counter"> <i class="icon icon-clock color_primary"></i> ENDS IN <span class="products-counter__inner"> <span class="products-counter__item">12 <span class="color_primary">D</span></span> <span class="products-counter__item">16 <span class="color_primary">H</span></span> <span class="products-counter__item">60 <span class="color_primary">M</span></span> </span> </footer>
                    </div>
                    <div class="products__item"> <a class="products__foto" href="<?php echo base_url(); ?>assets2/assets/media/260x305/1.jpg" rel="prettyPhoto"> <img src="<?php echo base_url(); ?>assets2/assets/media/260x305/1.jpg" height="305" width="260" alt="Goods"> </a>
                      <h4 class="products__name"><a href="#">Apple iPhone 6 Plus 64GB LTE Smartphone Silver</a></h4>
                      <div class="products__category"><a href="#">SMARTPHONE</a></div>
                      <div class="products__inner clearfix"> <span class="products__price-new">$499</span> <span class="products__price-old">$689.00</span>
                        <ul class="rating">
                          <li><i class="icon fa fa-star"></i></li>
                          <li><i class="icon fa fa-star"></i></li>
                          <li><i class="icon fa fa-star"></i></li>
                          <li><i class="icon fa fa-star"></i></li>
                          <li><i class="icon fa fa-star disabled"></i></li>
                        </ul>
                      </div>
                      <footer class="products-counter"> <i class="icon icon-clock color_primary"></i> ENDS IN <span class="products-counter__inner"> <span class="products-counter__item">12 <span class="color_primary">D</span></span> <span class="products-counter__item">16 <span class="color_primary">H</span></span> <span class="products-counter__item">60 <span class="color_primary">M</span></span> </span> </footer>
                    </div>
                    <div class="products__item"> <a class="products__foto" href="<?php echo base_url(); ?>assets2/assets/media/260x305/1.jpg" rel="prettyPhoto"> <img src="<?php echo base_url(); ?>assets2/assets/media/260x305/1.jpg" height="305" width="260" alt="Goods"> </a>
                      <h4 class="products__name"><a href="#">Apple iPhone 6 Plus 64GB LTE Smartphone Silver</a></h4>
                      <div class="products__category"><a href="#">SMARTPHONE</a></div>
                      <div class="products__inner clearfix"> <span class="products__price-new">$499</span> <span class="products__price-old">$689.00</span>
                        <ul class="rating">
                          <li><i class="icon fa fa-star"></i></li>
                          <li><i class="icon fa fa-star"></i></li>
                          <li><i class="icon fa fa-star"></i></li>
                          <li><i class="icon fa fa-star"></i></li>
                          <li><i class="icon fa fa-star disabled"></i></li>
                        </ul>
                      </div>
                      <footer class="products-counter"> <i class="icon icon-clock color_primary"></i> ENDS IN <span class="products-counter__inner"> <span class="products-counter__item">12 <span class="color_primary">D</span></span> <span class="products-counter__item">16 <span class="color_primary">H</span></span> <span class="products-counter__item">60 <span class="color_primary">M</span></span> </span> </footer>
                    </div>
                    <div class="products__item"> <a class="products__foto" href="<?php echo base_url(); ?>assets2/assets/media/260x305/1.jpg" rel="prettyPhoto"> <img src="<?php echo base_url(); ?>assets2/assets/media/260x305/1.jpg" height="305" width="260" alt="Goods"> </a>
                      <h4 class="products__name"><a href="#">Apple iPhone 6 Plus 64GB LTE Smartphone Silver</a></h4>
                      <div class="products__category"><a href="#">SMARTPHONE</a></div>
                      <div class="products__inner clearfix"> <span class="products__price-new">$499</span> <span class="products__price-old">$689.00</span>
                        <ul class="rating">
                          <li><i class="icon fa fa-star"></i></li>
                          <li><i class="icon fa fa-star"></i></li>
                          <li><i class="icon fa fa-star"></i></li>
                          <li><i class="icon fa fa-star"></i></li>
                          <li><i class="icon fa fa-star disabled"></i></li>
                        </ul>
                      </div>
                      <footer class="products-counter"> <i class="icon icon-clock color_primary"></i> ENDS IN <span class="products-counter__inner"> <span class="products-counter__item">12 <span class="color_primary">D</span></span> <span class="products-counter__item">16 <span class="color_primary">H</span></span> <span class="products-counter__item">60 <span class="color_primary">M</span></span> </span> </footer>
                    </div>
                  </div>
                </div>
              </section>
              <!-- end widget-slider -->
              
              <div class="widget text-center"> <a class="banner wow bounceInLeft" data-wow-duration="2s" href="javascript:void(0);"> <img class="img-responsive" src="<?php echo base_url(); ?>assets2/assets/media/banners/1.jpg" height="585" width="270" alt="Banner">
                <div class="banner-border banner-border_yellow">
                  <div class="banner-border__inner"></div>
                </div>
                <div class="label-wrap"><span class="label label-danger">NEW</span></div>
                </a> </div>
              <!-- end widget -->
              
              <section class="widget widget-cloud clearfix wow bounceInLeft" data-wow-duration="2s">
                <h3 class="widget-title ui-title-block"><i class="icon fa fa-bars"></i>TAGS</h3>
                <div class="block_content">
                  <div class="tagcloud">
                    <ul class="wp-tag-cloud list-unstyled">
                      <li><a href="http://html.templines.com/">Shoes For Her</a></li>
                      <li><a href="http://html.templines.com/">Perfumes</a></li>
                      <li><a href="http://html.templines.com/">Stuff</a></li>
                      <li><a href="http://html.templines.com/">Tablets</a></li>
                      <li><a href="http://html.templines.com/">Smartphones</a></li>
                      <li><a href="http://html.templines.com/">Office</a></li>
                      <li><a href="http://html.templines.com/">iPad</a></li>
                      <li><a href="http://html.templines.com/">Apple</a></li>
                      <li><a href="http://html.templines.com/">Home Appliances</a></li>
                      <li><a href="http://html.templines.com/">Outdoor</a></li>
                      <li><a href="http://html.templines.com/">Brand Watches</a></li>
                    </ul>
                  </div>
                </div>
              </section>
              <!-- end widget-cloud --> 
            </aside>
            <!-- end sidebar --> 
          </div>
          <!-- end col -->
          
          <div class="col-md-9">
            <section class="section-area section-default wow bounceInRight" data-wow-duration="2s">
              <h3 class="ui-title-block"><i class="icon fa fa-bars"></i>SPECIAL PRODUCTS</h3>
              <div class="wrap-slider">
                <ul class="products clearfix owl-carousel owl-theme owl-theme_mod-b enable-owl-carousel"
												data-min480="2"
												data-min768="3"
												data-min992="3"
												data-min1200="3"
												data-pagination="false"
												data-navigation="true"
												data-auto-play="4000"
												data-stop-on-hover="true">
                  <li class="products__item"> <a class="products__foto" href="<?php echo base_url(); ?>assets2/assets/media/catalog/5.jpg" rel="prettyPhoto"> <img src="<?php echo base_url(); ?>assets2/assets/media/catalog/2.jpg" height="260" width="260" alt="Goods"> </a>
                    <h4 class="products__name"><a href="#">Samsung Galaxy S6 White</a></h4>
                    <div class="products__category"><a href="#">SMARTPHONES</a></div>
                    <div class="products__inner clearfix"> <span class="products__price-new">$720</span> <span class="products__price-old">$89.00</span>
                      <ul class="rating">
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star disabled"></i></li>
                      </ul>
                    </div>
                    <footer class="products-btns clearfix">
                      <button class="products-btns__btn products-btns__add"><i class="icon icon-bag color_primary" aria-hidden="true"></i> Add to cart</button>
                      <span class="products-btns__other pull-right">
                      <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                      <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                      </span> </footer>
                  </li>
                  <li class="products__item"> <a class="products__foto" href="<?php echo base_url(); ?>assets2/assets/media/catalog/6.jpg" rel="prettyPhoto"> <img src="<?php echo base_url(); ?>assets2/assets/media/catalog/3.jpg" height="260" width="260" alt="Goods"> </a>
                    <h4 class="products__name"><a href="#">Perfume de Toilet</a></h4>
                    <div class="products__category"><a href="#">PERFUMES</a></div>
                    <div class="products__inner clearfix"> <span class="products__price-new">$129</span> <span class="products__price-old">$89.00</span>
                      <ul class="rating">
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star disabled"></i></li>
                      </ul>
                    </div>
                    <footer class="products-btns clearfix">
                      <button class="products-btns__btn products-btns__add"><i class="icon icon-bag color_primary" aria-hidden="true"></i> Add to cart</button>
                      <span class="products-btns__other pull-right">
                      <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                      <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                      </span> </footer>
                    <span class="label-wrap"><span class="label label-warning">NEW</span></span> </li>
                  <li class="products__item"> <a class="products__foto" href="<?php echo base_url(); ?>assets2/assets/media/catalog/7.jpg" rel="prettyPhoto"> <img src="<?php echo base_url(); ?>assets2/assets/media/catalog/4.jpg" height="260" width="260" alt="Goods"> </a>
                    <h4 class="products__name"><a href="#">Beats Solo Wireless</a></h4>
                    <div class="products__category"><a href="#">HEADPHONES</a></div>
                    <div class="products__inner clearfix"> <span class="products__price-new">$360</span> <span class="products__price-old">$89.00</span>
                      <ul class="rating">
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star disabled"></i></li>
                      </ul>
                    </div>
                    <footer class="products-btns clearfix">
                      <button class="products-btns__btn products-btns__add"><i class="icon icon-bag color_primary" aria-hidden="true"></i> Add to cart</button>
                      <span class="products-btns__other pull-right">
                      <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                      <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                      </span> </footer>
                  </li>
                  <li class="products__item"> <a class="products__foto" href="<?php echo base_url(); ?>assets2/assets/media/catalog/6.jpg" rel="prettyPhoto"> <img src="<?php echo base_url(); ?>assets2/assets/media/catalog/3.jpg" height="260" width="260" alt="Goods"> </a>
                    <h4 class="products__name"><a href="#">Perfume de Toilet</a></h4>
                    <div class="products__category"><a href="#">PERFUMES</a></div>
                    <div class="products__inner clearfix"> <span class="products__price-new">$129</span> <span class="products__price-old">$89.00</span>
                      <ul class="rating">
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star disabled"></i></li>
                      </ul>
                    </div>
                    <footer class="products-btns clearfix">
                      <button class="products-btns__btn products-btns__add"><i class="icon icon-bag color_primary" aria-hidden="true"></i> Add to cart</button>
                      <span class="products-btns__other pull-right">
                      <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                      <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                      </span> </footer>
                    <span class="label-wrap"><span class="label label-warning">NEW</span></span> </li>
                </ul>
                <!-- end products --> 
              </div>
              <!-- end wrap-slider --> 
            </section>
            <!-- end section-area -->
            
            <section class="section-area section-default wow bounceInRight" data-wow-duration="2s">
              <h3 class="ui-title-block"><i class="icon fa fa-bars"></i>HOT DEALS</h3>
              <div class="wrap-slider">
                <div class="products clearfix owl-carousel owl-theme owl-theme_mod-b enable-owl-carousel"
												data-min480="2"
												data-min768="3"
												data-min992="3"
												data-min1200="3"
												data-pagination="false"
												data-navigation="true"
												data-auto-play="400000"
												data-stop-on-hover="true">
                  <div class="products__item"> <a class="products__foto" href="<?php echo base_url(); ?>assets2/assets/media/catalog/6.jpg" rel="prettyPhoto"> <img src="<?php echo base_url(); ?>assets2/assets/media/catalog/3.jpg" height="260" width="260" alt="Goods"> </a>
                    <h4 class="products__name"><a href="#">Perfume de Toilet</a></h4>
                    <div class="products__category"><a href="#">PERFUMES</a></div>
                    <div class="products__inner clearfix"> <span class="products__price-new">$235</span> <span class="products__price-old">$89.00</span>
                      <ul class="rating">
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star disabled"></i></li>
                      </ul>
                    </div>
                    <footer class="products-btns clearfix">
                      <button class="products-btns__btn products-btns__add"><i class="icon icon-bag color_primary" aria-hidden="true"></i> Add to cart</button>
                      <span class="products-btns__other pull-right">
                      <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                      <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                      </span> </footer>
                    <span class="label-wrap"><span class="label label-info">HOT</span></span> </div>
                  <div class="products__item"> <a class="products__foto" href="<?php echo base_url(); ?>assets2/assets/media/catalog/9.jpg" rel="prettyPhoto"> <img src="<?php echo base_url(); ?>assets2/assets/media/catalog/9.jpg" height="260" width="260" alt="Goods"> </a>
                    <h4 class="products__name"><a href="#">Apple Macbook Air 13”</a></h4>
                    <div class="products__category"><a href="#">LAPTOPS</a></div>
                    <div class="products__inner clearfix"> <span class="products__price-new">$1.333</span> <span class="products__price-old">$89.00</span>
                      <ul class="rating">
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star disabled"></i></li>
                      </ul>
                    </div>
                    <footer class="products-btns clearfix">
                      <button class="products-btns__btn products-btns__add"><i class="icon icon-bag color_primary" aria-hidden="true"></i> Add to cart</button>
                      <span class="products-btns__other pull-right">
                      <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                      <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                      </span> </footer>
                    <span class="label-wrap"><span class="label label-info">HOT</span></span> </div>
                  <div class="products__item"> <a class="products__foto" href="<?php echo base_url(); ?>assets2/assets/media/catalog/7.jpg" rel="prettyPhoto"> <img src="<?php echo base_url(); ?>assets2/assets/media/catalog/7.jpg" height="260" width="260" alt="Goods"> </a>
                    <h4 class="products__name"><a href="#">Elekta 50” UHD 3D LED TV</a></h4>
                    <div class="products__category"><a href="#">LED TV’s</a></div>
                    <div class="products__inner clearfix"> <span class="products__price-new">$685</span> <span class="products__price-old">$89.00</span>
                      <ul class="rating">
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star disabled"></i></li>
                      </ul>
                    </div>
                    <footer class="products-btns clearfix">
                      <button class="products-btns__btn products-btns__add"><i class="icon icon-bag color_primary" aria-hidden="true"></i> Add to cart</button>
                      <span class="products-btns__other pull-right">
                      <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                      <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                      </span> </footer>
                    <span class="label-wrap"><span class="label label-info">HOT</span></span> </div>
                  <div class="products__item"> <a class="products__foto" href="<?php echo base_url(); ?>assets2/assets/media/catalog/9.jpg" rel="prettyPhoto"> <img src="<?php echo base_url(); ?>assets2/assets/media/catalog/9.jpg" height="260" width="260" alt="Goods"> </a>
                    <h4 class="products__name"><a href="#">Apple Macbook Air 13”</a></h4>
                    <div class="products__category"><a href="#">LAPTOPS</a></div>
                    <div class="products__inner clearfix"> <span class="products__price-new">$1.333</span> <span class="products__price-old">$89.00</span>
                      <ul class="rating">
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star disabled"></i></li>
                      </ul>
                    </div>
                    <footer class="products-btns clearfix">
                      <button class="products-btns__btn products-btns__add"><i class="icon icon-bag color_primary" aria-hidden="true"></i> Add to cart</button>
                      <span class="products-btns__other pull-right">
                      <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                      <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                      </span> </footer>
                    <span class="label-wrap"><span class="label label-info">HOT</span></span> </div>
                </div>
                <!-- end products --> 
              </div>
              <!-- end wrap-slider --> 
            </section>
            <!-- end section-area -->
            
            <section class="section-area section-list-posts wow bounceInRight" data-wow-duration="2s">
              <h3 class="ui-title-block"><i class="icon fa fa-bars"></i>LATEST BLOG POSTS</h3>
              <div class="wrap-slider">
                
                <div class="list-posts_mod-a list-posts_carusel list-unstyled owl-carousel owl-theme_mod-b owl-theme enable-owl-carousel"
													data-min480="1"
													data-min768="2"
													data-min992="2"
													data-min1200="2"
													data-pagination="false"
													data-navigation="true"
													data-auto-play="4000"
													data-stop-on-hover="true">
                  <article class="list-posts__article clearfix">
                    <div class="img-hover-effect"><img class="img-responsive" src="<?php echo base_url(); ?>assets2/assets/media/420x250/1.png" height="250" width="420" alt="Foto"></div>
                    <div class="list-posts__info"> <i class="icon icon-user"></i><span class="list-posts__autor">By <a class="color_primary" href="javascript:void(0);">MEX</a></span> <i class="icon icon-calendar"></i><span class="list-posts__date"> June 20, 2015 </span> </div>
                    <h2 class="list-posts__title">Praesent auctor justo et pulvinar</h2>
                    <p>Crabitur venenatis lacus nec erat. Sed velit urna sollicitu euismo nec hendrerit vel velit. Mauris dolor. Aliquam erat volutpat ipsum In lorem felis sollicitudin sed.</p>
                    <a class="btn btn-info pull-right" href="javascript:void(0);">READ MORE</a> </article>
                  <article class="list-posts__article clearfix">
                    <div class="img-hover-effect"><img class="img-responsive" src="<?php echo base_url(); ?>assets2/assets/media/420x250/2.png" height="250" width="420" alt="Foto"></div>
                    <div class="list-posts__info"> <i class="icon icon-user"></i><span class="list-posts__autor">By <a class="color_primary" href="javascript:void(0);">MEX</a></span> <i class="icon icon-calendar"></i><span class="list-posts__date">June 20, 2015 </span> </div>
                    <h2 class="list-posts__title">Nam volutpat ornare enim cras</h2>
                    <p>Crabitur venenatis lacus nec erat. Sed velit urna sollicitu euismo nec hendrerit vel velit. Mauris dolor. Aliquam erat volutpat ipsum In lorem felis sollicitudin sed.</p>
                    <a class="btn btn-info pull-right" href="javascript:void(0);">READ MORE</a> </article>
                  <article class="list-posts__article clearfix">
                    <div class="img-hover-effect"><img class="img-responsive" src="<?php echo base_url(); ?>assets2/assets/media/420x250/1.png" height="250" width="420" alt="Foto"></div>
                    <div class="list-posts__info"> <i class="icon icon-user"></i><span class="list-posts__autor">By <a class="color_primary" href="javascript:void(0);">MEX</a></span> <i class="icon icon-calendar"></i><span class="list-posts__date">June 20, 2015 </span> </div>
                    <h2 class="list-posts__title">Praesent auctor justo et pulvinar</h2>
                    <p>Crabitur venenatis lacus nec erat. Sed velit urna sollicitu euismo nec hendrerit vel velit. Mauris dolor. Aliquam erat volutpat ipsum In lorem felis sollicitudin sed.</p>
                    <a class="btn btn-info pull-right" href="javascript:void(0);">READ MORE</a> </article>
                  <article class="list-posts__article clearfix">
                    <div class="img-hover-effect"><img class="img-responsive" src="<?php echo base_url(); ?>assets2/assets/media/420x250/2.png" height="250" width="420" alt="Foto"></div>
                    <div class="list-posts__info"> <i class="icon icon-user"></i><span class="list-posts__autor">By <a class="color_primary" href="javascript:void(0);">MEX</a></span> <i class="icon icon-calendar"></i><span class="list-posts__date">June 20, 2015 </span> </div>
                    <h2 class="list-posts__title">Nam volutpat ornare enim cras</h2>
                    <p>Crabitur venenatis lacus nec erat. Sed velit urna sollicitu euismo nec hendrerit vel velit. Mauris dolor. Aliquam erat volutpat ipsum In lorem felis sollicitudin sed.</p>
                    <a class="btn btn-info pull-right" href="javascript:void(0);">READ MORE</a> </article>
                </div>
                
              </div>
              <!-- end wrap-slider --> 
            </section>
            <!-- end section-area --> 
            
          </div>
          <!-- end col --> 
        </div>
        <!-- end row --> 
      </div>
      <!-- end container --> 
    </div>
    <!-- end border-main -->
    
    <div class="section-area section-default section-list-clients wow bounceInUp" data-wow-duration="2s">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="list-clients list-unstyled owl-carousel owl-theme_mod-a owl-theme enable-owl-carousel"
									data-min480="2"
									data-min768="4"
									data-min992="4"
									data-min1200="5"
									data-pagination="false"
									data-navigation="true"
									data-auto-play="4000"
									data-stop-on-hover="true">
              <div class="list-clients__item"> <img class="img-responsive" src="<?php echo base_url(); ?>assets2/assets/media/clients/1.png" height="80" width="136" alt="Clients"> </div>
              <div class="list-clients__item"> <img class="img-responsive" src="<?php echo base_url(); ?>assets2/assets/media/clients/2.png" height="80" width="146" alt="Clients"> </div>
              <div class="list-clients__item"> <img class="img-responsive" src="<?php echo base_url(); ?>assets2/assets/media/clients/3.png" height="80" width="98" alt="Clients"> </div>
              <div class="list-clients__item"> <img class="img-responsive" src="<?php echo base_url(); ?>assets2/assets/media/clients/4.png" height="80" width="171" alt="Clients"> </div>
              <div class="list-clients__item"> <img class="img-responsive" src="<?php echo base_url(); ?>assets2/assets/media/clients/5.png" height="80" width="100" alt="Clients"> </div>
              <div class="list-clients__item"> <img class="img-responsive" src="<?php echo base_url(); ?>assets2/assets/media/clients/3.png" height="80" width="98" alt="Clients"> </div>
            </div>
          </div>
          <!-- end col --> 
        </div>
        <!-- end row --> 
      </div>
      <!-- end container --> 
    </div>
    <!-- end section-area -->
