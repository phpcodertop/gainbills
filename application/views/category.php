<div class="border-main">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="wrap-title-page">
                            <h1 class="ui-title-page">SHOP CATEgory</h1>
                            <ol class="breadcrumb">
                                <li><a href="javascript:void(0);">Home</a></li>
                                <li class="active">Shop</li>
                            </ol>
                        </div>
                        <!-- end wrap-title-page -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

                <div class="section-area"> <a href="javascript:void(0);"><img class="img-responsive" src="<?php  echo base_url();?>assets2/assets/media/banners/9.jpg" height="160" width="1170" alt="Banner"></a> </div>
                <div class="sorting clearfix">
                    <div class="sorting__item"> <span class="sorting__name">Sort By</span>
                        <div class="jelect">
                            <input  name="tool" value="0" data-text="imagemin" type="text" class="jelect-input">
                            <div tabindex="0" role="button" class="jelect-current">Default Sorting</div>
                            <ul class="jelect-options">
                                <li data-val='0' tabindex="0"  class="jelect-option jelect-option_state_active">Sorting-1</li>
                                <li data-val='1' tabindex="0"  class="jelect-option">Sorting-2</li>
                                <li data-val='2' tabindex="0"  class="jelect-option">Sorting-3</li>
                            </ul>
                        </div>
                    </div>
                    <div class="sorting__selects">
                        <div class="sorting__item">
                            <div  class="jelect">
                                <input  name="tool" value="0" data-text="imagemin" type="text" class="jelect-input">
                                <div tabindex="0" role="button" class="jelect-current">Manufacturer</div>
                                <ul class="jelect-options">
                                    <li data-val='0' tabindex="0"  class="jelect-option jelect-option_state_active">Manufacturer-1</li>
                                    <li data-val='1' tabindex="0"  class="jelect-option">Manufacturer-2</li>
                                    <li data-val='2' tabindex="0"  class="jelect-option">Manufacturer-3</li>
                                </ul>
                            </div>
                            <div  class="jelect">
                                <input  name="tool" value="0" data-text="imagemin" type="text" class="jelect-input">
                                <div tabindex="0" role="button" class="jelect-current">Price</div>
                                <ul class="jelect-options">
                                    <li data-val='0' tabindex="0"  class="jelect-option jelect-option_state_active">Price-1</li>
                                    <li data-val='1' tabindex="0"  class="jelect-option">Price-2</li>
                                    <li data-val='2' tabindex="0"  class="jelect-option">Price-3</li>
                                </ul>
                            </div>
                            <div  class="jelect">
                                <input  name="tool" value="0" data-text="imagemin" type="text" class="jelect-input">
                                <div tabindex="0" role="button" class="jelect-current">Color</div>
                                <ul class="jelect-options">
                                    <li data-val='0' tabindex="0"  class="jelect-option jelect-option_state_active">Color-1</li>
                                    <li data-val='1' tabindex="0"  class="jelect-option">Color-2</li>
                                    <li data-val='2' tabindex="0"  class="jelect-option">Color-3</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end sorting -->
                <div class="section-area">


<?php
    if(empty($products)){
        echo 'There is no products ';
    }else{
?>
                    <ul class="products clearfix">

                    <?php foreach($products as $product): ?>
                        <li class="products__item"> <a class="products__foto" href="<?php  echo base_url().$product['image']; ?>" rel="prettyPhoto"> <img src="<?php  echo base_url().$product['image']; ?>" height="260" width="260" alt="<?php echo substr($product['title'],0,20); ?>"> </a>
                            <h4 class="products__name"><a href="<?php echo base_url(); ?>ProductController/product_page/<?php echo $product['id']; ?>"><?php echo substr($product['title'],0,25); ?> ..</a></h4>
                            <div class="products__inner clearfix"> <span class="products__price-new"><?php echo $product['price']; ?> EGP</span> <span class="products__price-old">$89.00</span>
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
                    <?php endforeach; ?>



                    </ul>
    <?php } ?>
                    <!-- end products -->
                </div>
                <!-- end section-area -->

<!--                <ul class="pagination">-->
<!--                    <li><a href="#"><i class="icon fa fa-arrow-left"></i></a></li>-->
<!--                    <li class="active"><a href="#">1</a></li>-->
<!--                    <li><a href="#">2</a></li>-->
<!--                    <li><a href="#">3</a></li>-->
<!--                    <li><a href="#"><i class="icon fa fa-arrow-right"></i></a></li>-->
<!--                </ul>-->

                <?php //echo $links; ?>
                <br />
                <br />
                <br />

                <br />
                <br />
                <br />

            </div>

            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!--end border-main -->


<!-- end section-area -->
