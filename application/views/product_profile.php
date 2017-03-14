<?php foreach ($product as $item):?>  
<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="<?php  echo base_url().$item->image ?>" alt="" />
								<h3>ZOOM</h3>
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<h2><?php echo $item->title;  ?></h2>
								<p><?php echo $item->cat;?></p>
								<span>
									<span>$<?php echo $item->price;?></span>
									<label>Quantity:</label>
									<input type="text" value="3" />
									<button type="button" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Order Now
									</button> 
								</span>
								<p><b>Availability:</b> In Stock</p>
								<p><b>Condition:</b> New</p>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->  
                    <?php if(!empty($recommended)){?>
                    <div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">recommended items</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">
                                <?php foreach($recommended as $rec){?>	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
                                                  <a href="<?php echo base_url().'home/product_page/'.$rec['id']?>">
													<img src="<?php  echo base_url().$rec['image'] ?>" alt="" />
													<h2><?php echo $rec['price']?></h2>
													<p><?php echo $rec['title']?></p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                    </a>
												</div>
											</div>
										</div>
									</div>
								<?php }?>
                                </div>
                                </div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
                    <?php }?>
 <?php endforeach;?>
