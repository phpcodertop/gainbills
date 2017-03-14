
    
    <div class="border-main">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="wrap-title-page">

              <ol class="breadcrumb">
                <li><a href="javascript:void(0);">Home</a></li>
                <li><a href="javascript:void(0);">Shop</a></li>
                <li class="active">Product</li>
              </ol>
            </div>
            <!-- end wrap-title-page --> 
          </div>
          <!-- end col --> 
        </div>
        <!-- end row -->
        
        <section class="product-card">
        <div class="row">
          <div class="col-sm-5">
            <div class="product-card__slider" id="image-block">
                <img src="<?php echo base_url(); ?><?php echo $product->image; ?>" width="460" height="570px">
            </div>
          </div>
        </div>
        <!-- end product-card__slider --> 
      </div>
      <div class="col-sm-7">
        <div class="product-card__main">
          <h1 class="product-card__name"><?php echo  $product->title; ?></h1>
          <div class="product-card__category"><a href="#">In <?php echo  $product->cat; ?></a></div>
          <div class="wrap-rating">
            <ul class="rating">
              <li><i class="icon fa fa-star"></i></li>
              <li><i class="icon fa fa-star"></i></li>
              <li><i class="icon fa fa-star"></i></li>
              <li><i class="icon fa fa-star"></i></li>
              <li><i class="icon fa fa-star disabled"></i></li>
            </ul>
            <span class="product-card__reviews product-card__reviews_marker">5 Reviews</span> <span class="product-card__reviews"><a href="javascript:void(0);">Add Your Review</a></span> </div>
          <div class="product-card__availability"><i class="icon fa fa-check-circle"></i>Available in Stock</div>
          <div class="product-card__price"> <span class="product-card__price-new">EGP <?php echo  $product->price; ?></span> <span class="product-card__price-old">$89.00</span> </div>
          <div class="product-card__description">
            <p><?php echo  $product->description; ?></p>
          </div>
          <div class="product-card__options">
            <div class="product-card__group"> <span class="product-card__label">Select Color</span>
                 <div class="jelect">
                <input  name="tool" value="0" data-text="imagemin" type="text" class="jelect-input">
                <div tabindex="0" role="button" class="jelect-current">Black</div>
                <ul class="jelect-options">
                  <li data-val='0' tabindex="0"  class="jelect-option jelect-option_state_active">Black</li>
                  <li data-val='1' tabindex="0"  class="jelect-option">White</li>
                  <li data-val='2' tabindex="0"  class="jelect-option">Green</li>
                </ul>
              </div>
              <!-- end jelect --> 
            </div>
            <div class="product-card__group"> <span class="product-card__label">Select Size</span>
              <div  class="jelect">
                <input  name="tool" value="0" data-text="imagemin" type="text" class="jelect-input">
                <div tabindex="0" role="button" class="jelect-current">Free-Size</div>
                <ul class="jelect-options">
                  <li data-val='0' tabindex="0"  class="jelect-option jelect-option_state_active">Free-Size 1</li>
                  <li data-val='1' tabindex="0"  class="jelect-option">Free-Size 2</li>
                  <li data-val='2' tabindex="0"  class="jelect-option">Free-Size 3</li>
                </ul>
              </div>
              <!-- end jelect --> 
            </div>
            <div class="product-card__group"> <span class="product-card__label">Display Type</span>
              <div  class="jelect">
                <input  name="tool" value="0" data-text="imagemin" type="text" class="jelect-input">
                <div tabindex="0" role="button" class="jelect-current">Digital</div>
                <ul class="jelect-options">
                  <li data-val='0' tabindex="0"  class="jelect-option jelect-option_state_active">Digital 1</li>
                  <li data-val='1' tabindex="0"  class="jelect-option">Digital 2</li>
                  <li data-val='2' tabindex="0"  class="jelect-option">Digital 3</li>
                </ul>
              </div>
              <!-- end jelect --> 
            </div>
          </div>
          <footer class="card-btns">
            <div class="enumerator"> <a class="minus_btn card-btns__btn"><i class="icon fa fa-minus"></i></a>
              <input type="text" placeholder="1">
              <a class="plus_btn card-btns__btn"><i class="icon fa fa-plus"></i></a> </div>
            <button class="card-btns__add"><i class="icon icon-bag"></i> Add to cart</button>
            <span class="card-btns__other">
            <button class="card-btns__btn"><i class="icon icon-heart"></i></button>
            <button class="card-btns__btn"><i class="icon icon-shuffle"></i></button>
            </span> </footer>
          <div class="product-card__social"> <span class="product-card__label">Share This Product</span> <img src="<?php echo base_url(); ?>assets2/assets/img/social-temp.png" height="24" width="247" alt=""> </div>
        </div>
      </div>
    </div>
    <!-- end row -->
    </section>
    <!-- end product-card -->
    

    
    <div class="section-area section-products_mod-a">
      <div class="row">
        <div class="col-xs-12">
          <div class="products clearfix owl-carousel owl-theme owl-theme_mod-b enable-owl-carousel"
                    data-min480="1"
                    data-min768="3"
                    data-min992="4"
                    data-min1200="4"
                    data-pagination="false"
                    data-navigation="true"
                    data-auto-play="4000"
                    data-stop-on-hover="true">
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
            </div>
            <div class="products__item"> <a class="products__foto" href="<?php echo base_url(); ?>assets2/assets/media/catalog/5.jpg" rel="prettyPhoto"> <img src="<?php echo base_url(); ?>assets2/assets/media/catalog/5.jpg" height="260" width="260" alt="Goods"> </a>
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
              <span class="label-wrap"><span class="label label-danger">SALE</span></span> </div>
            <div class="products__item"> <a class="products__foto" href="<?php echo base_url(); ?>assets2/assets/media/catalog/3.jpg" rel="prettyPhoto"> <img src="<?php echo base_url(); ?>assets2/assets/media/catalog/3.jpg" height="260" width="260" alt="Goods"> </a>
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
              <span class="label-wrap"><span class="label label-warning">NEW</span></span> </div>
            <div class="products__item"> <a class="products__foto" href="<?php echo base_url(); ?>assets2/assets/media/catalog/4.jpg" rel="prettyPhoto"> <img src="<?php echo base_url(); ?>assets2/assets/media/catalog/4.jpg" height="260" width="260" alt="Goods"> </a>
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
            </div>
            <div class="products__item"> <a class="products__foto" href="<?php echo base_url(); ?>assets2/assets/media/catalog/5.jpg" rel="prettyPhoto"> <img src="<?php echo base_url(); ?>assets2/assets/media/catalog/5.jpg" height="260" width="260" alt="Goods"> </a>
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
              <span class="label-wrap"><span class="label label-danger">SALE</span></span> </div>
          </div>
          <!-- end products --> 
        </div>
        <!-- end col --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end section-products_mod-a --> 
  </div>
  <!-- end container --> 
</div>
<!-- end border-main -->



