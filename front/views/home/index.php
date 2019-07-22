
	<div class="hero-slider-container mb-35">
		<!--=======  Slider area  =======-->
		
		<div class="hero-slider-one">
			<!--=======  hero slider item  =======-->
			<?php
                            
                                if($bannerresult){
                
                                  foreach($bannerresult as $each){
   
                            ?>	
			<div class="hero-slider-item slider-bg-1">
                                <div class="slider-content d-flex flex-column justify-content-center align-items-center">
                                        <h1><?php echo $each->title; ?></h1>
                                        <p>get fresh food from our  restaurant to your table</p>
                                        <a href="<?php echo base_url('#') ?>" class="slider-btn">SHOP NOW</a>
                                </div>
		        </div>
			
			<!--=======  End of hero slider item  =======-->


			<!--=======  Hero slider item  =======-->
			
<!--			<div class="hero-slider-item slider-bg-2">
				<div class="slider-content d-flex flex-column justify-content-center align-items-center">
					<h1>Fresh & Nature</h1>
					<p>get fresh food from our firm to your table</p>
					<a href="<?php echo base_url() ?>/shop-left-sidebar.html" class="slider-btn">SHOP NOW</a>
				</div>
			</div>-->
			
			<!--=======  End of Hero slider item  =======-->
			 <?php }
                         
                            } 
                              ?>
		</div>
		
		<!--=======  End of Slider area  =======-->

	</div>
	
	<!--=====  End of Hero slider Area  ======-->



	<!--=============================================
	=            Policy area         =
	=============================================-->
	
<!--	<div class="policy-section mb-35">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="policy-titles d-flex align-items-center flex-wrap">
						=======  single policy  =======
						
						<div class="single-policy">
							<span><img src="<?php echo base_url() ?>/assets/images/policy-icon1.png" class="img-fluid" alt=""></span>
							<p> FREE SHIPPING ON ORDERS OVER $200</p>
						</div>
						
						=======  End of single policy  =======


						=======  single policy  =======
						
						<div class="single-policy">
							<span><img src="<?php echo base_url() ?>/assets/images/policy-icon2.png" class="img-fluid" alt=""></span>
							<p>30 -DAY RETURNS MONEY BACK</p>
						</div>
						
						=======  End of single policy  =======
						
						=============================================
						=            single policy         =
						=============================================
						
						<div class="single-policy">
							<span><img src="<?php echo base_url() ?>/assets/images/policy-icon3.png" class="img-fluid" alt=""></span>
							<p> 24/7 SUPPORT</p>
						</div>
						
						=====  End of single policy  ======

					</div>
				</div>
			</div>
		</div>
	</div>-->
	
	<!--=====  End of Policy area  ======-->

	<!--=============================================
	=            category slider         =
	=============================================-->
	
	<div class="slider category-slider mb-35">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!--=======  category slider section title  =======-->
					
					<div class="section-title">
						<h3>top categories</h3>
					</div>
					
					<!--=======  End of category slider section title  =======-->
					
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<!--=======  category container  =======-->
					
					<div class="category-slider-container">
                                     <?php
                                      if ($category){

                                             foreach ($category as $each){
                                           ?>
						<!--=======  single category  =======-->
						
						<div class="single-category">
							<div class="category-image">
								<a href="<?php echo site_url("shop",'catID=' .$each->categoryId) ?>" title="Vegetables">
                                                                    <img src="<?php echo base_url('public/images/category/' . $each->categoryImage); ?>" style=" width:120px; height:120px;  " class="img-fluid" alt="">
								</a>
							</div>
							<div class="category-title">
								<h3>
									<a href="<?php echo site_url("shop",'catID=' .$each->categoryId) ?>"> <?php echo $each->categoryName; ?></a>
								</h3>
							</div>
						</div>
						

						      <?php
                                                      }
                                                   } 
                                                      ?>
					</div>
					
					<!--=======  End of category container  =======-->

				</div>
			</div>
		</div>
	</div>
	
	<!--=====  End of category slider  ======-->

	<!--=============================================
	=            Tab slider         =
	=============================================-->
	
	<div class="slider tab-slider mb-35">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="tab-slider-wrapper">
						<nav>
							<div class="nav nav-tabs" id="nav-tab" role="tablist">
								<a class="nav-item nav-link active" id="featured-tab" data-toggle="tab" href="#featured" role="tab"
									aria-selected="true">Featured</a>
								<a class="nav-item nav-link" id="new-arrival-tab" data-toggle="tab" href="#new-arrivals" role="tab"
									aria-selected="false">New Arrival</a>
								<a class="nav-item nav-link" id="nav-onsale-tab" data-toggle="tab" href="#on-sale" role="tab"
									aria-selected="false">On Sale</a>
							</div>
						</nav>
						<div class="tab-content" id="nav-tabContent">
							<div class="tab-pane fade show active" id="featured" role="tabpanel" aria-labelledby="featured-tab">
								<!--=======  tab slider container  =======-->
								
								<div class="tab-slider-container">
									<!--=======  single tab slider item  =======-->
                                                                         
                                                                             <?php if ($product){
                                                                                      for($i=0;$i<count($product);$i++){
                                                                                         
                                                                                    ?>
									<div class="single-tab-slider-item">
										<!--=======  tab slider sub product  =======-->
                                                                                
                                                                                <div class="gf-product tab-slider-sub-product">
											<div class="image">
												<a href="<?php echo site_url("single-product",'id=' .$product[$i]->productId) ?>">
													<img src="<?php echo base_url('public/images/' . $product[$i]->productImage); ?>" style="width:260px; height:250px; " class="img-responsive img-rounded" alt="">
												</a>
												<div class="product-hover-icons">
                                                                                                    <input type="hidden" name="p_id"  id="pid_<?php echo $product[$i]->productId ?>" class="form-control" value="<?php echo $product[$i]->productId; ?>"  >
                                                                                                    <input type="hidden" name="p_name"  id="pname_<?php echo $product[$i]->productId ?>" class="form-control" value="<?php echo $product[$i]->productName; ?>"  >
                                                                                                    <input type="hidden" name="p_price" id="pprice_<?php echo $product[$i]->productId ?>" class="form-control" value="<?php echo $product[$i]->price; ?>" >
                                                                                                    <input type="hidden" name="p_qty" id="pqty_<?php echo $product[$i]->productId ?>" class="form-control" value="1" placeholder="E">
                                                                                                    
                                                                                                    
											                <a  class="active" id="addCart_<?php echo $product[$i]->productId ?>" data-tooltip="Add to Cart" > <span  class="icon_cart_alt"></span></a>
                                                                                                   
                                                                                                        <a href="<?php echo site_url("") ?>" class="active" id="addWishlist_<?php echo $product[$i]->productId ?>" data-tooltip="Add to wishlist" > <span class="icon_heart_alt"></span></a>
													
													<a href="#" data-tooltip="Quick view" data-toggle = "modal" id="view_<?php echo $product[$i]->productId ?>" data-target="#quick-view-modal-container"> <span class="icon_search"></span> </a>
												</div>
											</div>
											<div class="product-content">
												<div class="product-categories">
													<a href="<?php echo site_url("shop",'catID=' .$product[$i]->categoryId ) ?>"><?php echo $product[$i]->categoryName ; ?></a>
													
												</div>
												<h3 class="product-title"><a href="<?php echo site_url("single-product",'id=' .$product[$i]->productId) ?>"><?php echo $product[$i]->productName; ?></a></h3>
												<div class="price-box">
													<span class="discounted-price"><?php echo $product[$i]->price; ?> ₹</span>
												</div>
											</div>
										</div>
									
										<!--=======  End of tab slider sub product  =======-->

										<!--=======  tab slider sub product  =======-->
                                                                                
                                                                           <?php if(($i+1)  < count($product)){ ?>
                                                                        
										<div class="gf-product tab-slider-sub-product">
											<div class="image">
												<a href="<?php echo site_url("single-product",'id=' .$product[$i+1]->productId) ?>">
													<img src="<?php echo base_url('public/images/' . $product[$i+1]->productImage); ?>" style="width:260px; height:250px; " class="img-responsive img-rounded" alt="">
												</a>
												<div class="product-hover-icons">
                                                                                                    <input type="hidden" name="p_id"  id="pid_<?php echo $product[$i+1]->productId ?>" class="form-control" value="<?php echo $product[$i+1]->productId; ?>"  >
                                                                                                    <input type="hidden" name="p_name"  id="pname_<?php echo $product[$i+1]->productId ?>" class="form-control" value="<?php echo $product[$i+1]->productName; ?>"  >
                                                                                                    <input type="hidden" name="p_price" id="pprice_<?php echo $product[$i+1]->productId ?>" class="form-control" value="<?php echo $product[$i+1]->price; ?>" >
                                                                                                    <input type="hidden" name="p_qty" id="pqty_<?php echo $product[$i+1]->productId ?>" class="form-control" value="1" placeholder="E">
                                                                                                    
                                                                                                    
											                <a  class="active" id="addCart_<?php echo $product[$i+1]->productId ?>" data-tooltip="Add to Cart" > <span  class="icon_cart_alt"></span></a>
                                                                                                   
                                                                                                        <a href="<?php echo site_url("") ?>" class="active" id="addWishlist_<?php echo $product[$i+1]->productId ?>" data-tooltip="Add to wishlist" > <span class="icon_heart_alt"></span></a>
													
													<a href="#" data-tooltip="Quick view" data-toggle = "modal" id="view_<?php echo $product[$i+1]->productId ?>" data-target="#quick-view-modal-container"> <span class="icon_search"></span> </a>
												</div>
											</div>
											<div class="product-content">
												<div class="product-categories">
													<a href="<?php echo site_url("shop",'catID=' .$product[$i+1]->categoryId ) ?>"><?php echo $product[$i+1]->categoryName ; ?></a>
													
												</div>
												<h3 class="product-title"><a href="<?php echo site_url("single-product",'id=' .$product[$i+1]->productId) ?>"><?php echo $product[$i+1]->productName; ?></a></h3>
												<div class="price-box">
													<span class="discounted-price"><?php echo $product[$i+1]->price; ?> ₹</span>
												</div>
											</div>
										</div>
                                                                                
                                                                           <?php } ?>
									
										<!--=======  End of tab slider sub product  =======-->
										
							
									</div>
                                                                      <?php
                                                                      $i = $i+1;
                                                                                }
                                                                              }
                                                                           
                                                                                ?>
									<!--=======  End of single tab slider product  =======-->
									<!--=======  single tab slider item  =======-->
<!--									<div class="single-tab-slider-item">
										=======  tab slider sub product  =======
										
										<div class="gf-product tab-slider-sub-product">
											<div class="image">
												<a href="<?php echo base_url() ?>/single-product.html">
													<img src="<?php echo base_url() ?>/assets/images/products/product03.jpg" class="img-fluid" alt="">
												</a>
												<div class="product-hover-icons">
													<a href="#" data-tooltip="Add to cart"> <span class="icon_cart_alt"></span></a>
													<a href="#" data-tooltip="Add to wishlist"> <span class="icon_heart_alt"></span> </a>
													<a href="#" data-tooltip="Compare"> <span class="arrow_left-right_alt"></span> </a>
													<a href="#" data-tooltip="Quick view" data-toggle = "modal" data-target="#quick-view-modal-container"> <span class="icon_search"></span> </a>
												</div>
											</div>
											<div class="product-content">
												<div class="product-categories">
													<a href="shop-left-sidebar.html">Fast Foods</a>,
													<a href="shop-left-sidebar.html">Vegetables</a>
												</div>
												<h3 class="product-title"><a href="single-product.html">Sed tempor ehicula non commodo</a></h3>
												<div class="price-box">
													<span class="discounted-price">$80.00</span>
												</div>
											</div>
										</div>
									
										=======  End of tab slider sub product  =======

										=======  tab slider sub product  =======
										
										<div class="gf-product tab-slider-sub-product">
											<div class="image">
												<a href="single-product.html">
													<span class="onsale">Sale!</span>
													<img src="<?php echo base_url() ?>/assets/images/products/product04.jpg" class="img-fluid" alt="">
												</a>
												<div class="product-hover-icons">
													<a href="#" data-tooltip="Add to cart"> <span class="icon_cart_alt"></span></a>
													<a href="#" data-tooltip="Add to wishlist"> <span class="icon_heart_alt"></span> </a>
													<a href="#" data-tooltip="Compare"> <span class="arrow_left-right_alt"></span> </a>
													<a href="#" data-tooltip="Quick view" data-toggle = "modal" data-target="#quick-view-modal-container"> <span class="icon_search"></span> </a>
												</div>
											</div>
											<div class="product-content">
												<div class="product-categories">
													<a href="shop-left-sidebar.html">Fast Foods</a>,
													<a href="shop-left-sidebar.html">Vegetables</a>
												</div>
												<h3 class="product-title"><a href="single-product.html">Sed tempor ehicula non commodo</a></h3>
												<div class="price-box">
													<span class="main-price">$89.00</span>
													<span class="discounted-price">$80.00</span>
												</div>
											</div>
										</div>
									
										=======  End of tab slider sub product  =======
										
							
									</div>-->
									<!--=======  End of single tab slider product  =======-->
									<!--=======  single tab slider item  =======-->
<!--									<div class="single-tab-slider-item">
										=======  tab slider sub product  =======
										
										<div class="gf-product tab-slider-sub-product">
											<div class="image">
												<a href="single-product.html">
													<span class="onsale">Sale!</span>
													<img src="<?php echo base_url() ?>/assets/images/products/product05.jpg" class="img-fluid" alt="">
												</a>
												<div class="product-hover-icons">
													<a href="#" data-tooltip="Add to cart"> <span class="icon_cart_alt"></span></a>
													<a href="#" data-tooltip="Add to wishlist"> <span class="icon_heart_alt"></span> </a>
													<a href="#" data-tooltip="Compare"> <span class="arrow_left-right_alt"></span> </a>
													<a href="#" data-tooltip="Quick view" data-toggle = "modal" data-target="#quick-view-modal-container"> <span class="icon_search"></span> </a>
												</div>
											</div>
											<div class="product-content">
												<div class="product-categories">
													<a href="shop-left-sidebar.html">Fast Foods</a>,
													<a href="shop-left-sidebar.html">Vegetables</a>
												</div>
												<h3 class="product-title"><a href="single-product.html">Sed tempor ehicula non commodo</a></h3>
												<div class="price-box">
													<span class="main-price">$89.00</span>
													<span class="discounted-price">$80.00</span>
												</div>
											</div>
										</div>
									
										=======  End of tab slider sub product  =======

										=======  tab slider sub product  =======
										
										<div class="gf-product tab-slider-sub-product">
											<div class="image">
												<a href="single-product.html">
													<img src="<?php echo base_url() ?>/assets/images/products/product06.jpg" class="img-fluid" alt="">
												</a>
												<div class="product-hover-icons">
													<a class="active" href="#" data-tooltip="Add to cart"> <span class="icon_cart_alt"></span></a>
													<a href="#" data-tooltip="Add to wishlist"> <span class="icon_heart_alt"></span> </a>
													<a href="#" data-tooltip="Compare"> <span class="arrow_left-right_alt"></span> </a>
													<a href="#" data-tooltip="Quick view" data-toggle = "modal" data-target="#quick-view-modal-container"> <span class="icon_search"></span> </a>
												</div>
											</div>
											<div class="product-content">
												<div class="product-categories">
													<a href="shop-left-sidebar.html">Fast Foods</a>,
													<a href="shop-left-sidebar.html">Vegetables</a>
												</div>
												<h3 class="product-title"><a href="single-product.html">Sed tempor ehicula non commodo</a></h3>
												<div class="price-box">
													<span class="discounted-price">$80.00</span>
												</div>
											</div>
										</div>
									
										=======  End of tab slider sub product  =======
									</div>-->
									<!--=======  End of single tab slider product  =======-->

									<!--=======  single tab slider item  =======-->
<!--									<div class="single-tab-slider-item">
										=======  tab slider sub product  =======
										
										<div class="gf-product tab-slider-sub-product">
											<div class="image">
												<a href="single-product.html">
													<span class="onsale">Sale!</span>
													<img src="<?php echo base_url() ?>/assets/images/products/product07.jpg" class="img-fluid" alt="">
												</a>
												<div class="product-hover-icons">
													<a href="#" data-tooltip="Add to cart"> <span class="icon_cart_alt"></span></a>
													<a href="#" data-tooltip="Add to wishlist"> <span class="icon_heart_alt"></span> </a>
													<a href="#" data-tooltip="Compare"> <span class="arrow_left-right_alt"></span> </a>
													<a href="#" data-tooltip="Quick view" data-toggle = "modal" data-target="#quick-view-modal-container"> <span class="icon_search"></span> </a>
												</div>
											</div>
											<div class="product-content">
												<div class="product-categories">
													<a href="shop-left-sidebar.html">Fast Foods</a>,
													<a href="shop-left-sidebar.html">Vegetables</a>
												</div>
												<h3 class="product-title"><a href="single-product.html">Sed tempor ehicula non commodo</a></h3>
												<div class="price-box">
													<span class="main-price">$89.00</span>
													<span class="discounted-price">$80.00</span>
												</div>
											</div>
										</div>
									
										=======  End of tab slider sub product  =======

										=======  tab slider sub product  =======
										
										<div class="gf-product tab-slider-sub-product">
											<div class="image">
												<a href="single-product.html">
													<span class="onsale">Sale!</span>
													<img src="<?php echo base_url() ?>/assets/images/products/product08.jpg" class="img-fluid" alt="">
												</a>
												<div class="product-hover-icons">
													<a href="#" data-tooltip="Add to cart"> <span class="icon_cart_alt"></span></a>
													<a href="#" data-tooltip="Add to wishlist"> <span class="icon_heart_alt"></span> </a>
													<a href="#" data-tooltip="Compare"> <span class="arrow_left-right_alt"></span> </a>
													<a href="#" data-tooltip="Quick view" data-toggle = "modal" data-target="#quick-view-modal-container"> <span class="icon_search"></span> </a>
												</div>
											</div>
											<div class="product-content">
												<div class="product-categories">
													<a href="shop-left-sidebar.html">Fast Foods</a>,
													<a href="shop-left-sidebar.html">Vegetables</a>
												</div>
												<h3 class="product-title"><a href="single-product.html">Sed tempor ehicula non commodo</a></h3>
												<div class="price-box">
													<span class="main-price">$89.00</span>
													<span class="discounted-price">$80.00</span>
												</div>
											</div>
										</div>
									
										=======  End of tab slider sub product  =======
									</div>-->
									<!--=======  End of single tab slider product  =======-->

									<!--=======  single tab slider item  =======-->

<!--									<div class="single-tab-slider-item">
										=======  tab slider sub product  =======
										
										<div class="gf-product tab-slider-sub-product">
											<div class="image">
												<a href="single-product.html">
													<span class="onsale">Sale!</span>
													<img src="<?php echo base_url() ?>/assets/images/products/product09.jpg" class="img-fluid" alt="">
												</a>
												<div class="product-hover-icons">
													<a class="active" href="#" data-tooltip="Add to cart"> <span class="icon_cart_alt"></span></a>
													<a href="<?php echo base_url() ?>/#" data-tooltip="Add to wishlist"> <span class="icon_heart_alt"></span> </a>
													<a href="<?php echo base_url() ?>/#" data-tooltip="Compare"> <span class="arrow_left-right_alt"></span> </a>
													<a href="<?php echo base_url() ?>/#" data-tooltip="Quick view" data-toggle = "modal" data-target="#quick-view-modal-container"> <span class="icon_search"></span> </a>
												</div>
											</div>
											<div class="product-content">
												<div class="product-categories">
													<a href="shop-left-sidebar.html">Fast Foods</a>,
													<a href="shop-left-sidebar.html">Vegetables</a>
												</div>
												<h3 class="product-title"><a href="single-product.html">Sed tempor ehicula non commodo</a></h3>
												<div class="price-box">
													<span class="main-price">$89.00</span>
													<span class="discounted-price">$80.00</span>
												</div>
											</div>
										</div>
									
										=======  End of tab slider sub product  =======

										=======  tab slider sub product  =======
										
										<div class="gf-product tab-slider-sub-product">
											<div class="image">
												<a href="single-product.html">
													<span class="onsale">Sale!</span>
													<img src="<?php echo base_url() ?>/assets/images/products/product10.jpg" class="img-fluid" alt="">
												</a>
												<div class="product-hover-icons">
													<a href="#" data-tooltip="Add to cart"> <span class="icon_cart_alt"></span></a>
													<a href="#" data-tooltip="Add to wishlist"> <span class="icon_heart_alt"></span> </a>
													<a href="#" data-tooltip="Compare"> <span class="arrow_left-right_alt"></span> </a>
													<a href="#" data-tooltip="Quick view" data-toggle = "modal" data-target="#quick-view-modal-container"> <span class="icon_search"></span> </a>
												</div>
											</div>
											<div class="product-content">
												<div class="product-categories">
													<a href="shop-left-sidebar.html">Fast Foods</a>,
													<a href="shop-left-sidebar.html">Vegetables</a>
												</div>
												<h3 class="product-title"><a href="single-product.html">Sed tempor ehicula non commodo</a></h3>
												<div class="price-box">
													<span class="main-price">$89.00</span>
													<span class="discounted-price">$80.00</span>
												</div>
											</div>
										</div>
									
										=======  End of tab slider sub product  =======
										
							
									</div>-->
									<!--=======  End of single tab slider product  =======-->
								</div>
                                                                
									
								<!--=======  End of tab slider container  =======-->
								</div>
							<div class="tab-pane fade" id="new-arrivals" role="tabpanel" aria-labelledby="new-arrival-tab">
								<!--=======  tab slider container  =======-->
																
								<div class="tab-slider-container">
									<!--=======  single tab slider item  =======-->
                                                                         <?php if ($productbylimitdecricingorder){ 
                                                                                   
                                                                           for($i=0;$i<count($productbylimitdecricingorder);$i++){
                                                                                        ?>
									<div class="single-tab-slider-item">
											<!--=======  tab slider sub product  =======-->
											
											<div class="gf-product tab-slider-sub-product">
                                                                                                <div class="image">
                                                                                                        <a href="<?php echo site_url("single-product",'id=' .$productbylimitdecricingorder[$i]->productId) ?>">
                                                                                                                <img src="<?php echo base_url('public/images/' . $productbylimitdecricingorder[$i]->productImage); ?>" style="width:260px; height:250px; " class="img-responsive img-rounded" alt="">
                                                                                                        </a>
                                                                                                        <div class="product-hover-icons">
                                                                                                            <input type="hidden" name="p_id"  id="pid_<?php echo $productbylimitdecricingorder[$i]->productId ?>" class="form-control" value="<?php echo $productbylimitdecricingorder[$i]->productId; ?>"  >
                                                                                                            <input type="hidden" name="p_name"  id="pname_<?php echo $productbylimitdecricingorder[$i]->productId ?>" class="form-control" value="<?php echo $productbylimitdecricingorder[$i]->productName; ?>"  >
                                                                                                            <input type="hidden" name="p_price" id="pprice_<?php echo $productbylimitdecricingorder[$i]->productId ?>" class="form-control" value="<?php echo $productbylimitdecricingorder[$i]->price; ?>" >
                                                                                                            <input type="hidden" name="p_qty" id="pqty_<?php echo $productbylimitdecricingorder[$i]->productId ?>" class="form-control" value="1" placeholder="E">


                                                                                                                <a  class="active" id="addCart_<?php echo $productbylimitdecricingorder[$i]->productId ?>" data-tooltip="Add to Cart" > <span  class="icon_cart_alt"></span></a>

                                                                                                                <a href="<?php echo site_url("") ?>" class="active" id="addWishlist_<?php echo $productbylimitdecricingorder[$i]->productId ?>" data-tooltip="Add to wishlist" > <span class="icon_heart_alt"></span></a>

                                                                                                                <a href="#" data-tooltip="Quick view" data-toggle = "modal" id="view_<?php echo $productbylimitdecricingorder[$i]->productId ?>" data-target="#quick-view-modal-container"> <span class="icon_search"></span> </a>
                                                                                                        </div>
                                                                                                </div>
                                                                                                <div class="product-content">
                                                                                                        <div class="product-categories">
                                                                                                                <a href="<?php echo site_url("shop",'catID=' .$productbylimitdecricingorder[$i]->categoryId ) ?>"><?php echo $product[$i]->categoryName ; ?></a>
                                                                                                        </div>
                                                                                                        <h3 class="product-title"><a href="<?php echo site_url("single-product",'id=' .$productbylimitdecricingorder[$i]->productId) ?>"><?php echo $productbylimitdecricingorder[$i]->productName; ?></a></h3>
                                                                                                        <div class="price-box">
                                                                                                                <span class="discounted-price"><?php echo $productbylimitdecricingorder[$i]->price; ?> ₹</span>
                                                                                                        </div>
                                                                                                </div>
										       </div>
										
											<!--=======  End of tab slider sub product  =======-->
                                                                                    <?php if(($i+1)  < count($productbylimitdecricingorder)){ ?>
											<!--=======  tab slider sub product  =======-->
											
											<div class="gf-product tab-slider-sub-product">
                                                                                                <div class="image">
                                                                                                        <a href="<?php echo site_url("single-product",'id=' .$productbylimitdecricingorder[$i+1]->productId) ?>">
                                                                                                                <img src="<?php echo base_url('public/images/' . $productbylimitdecricingorder[$i+1]->productImage); ?>" style="width:260px; height:250px; " class="img-responsive img-rounded" alt="">
                                                                                                        </a>
                                                                                                        <div class="product-hover-icons">
                                                                                                            <input type="hidden" name="p_id"  id="pid_<?php echo $productbylimitdecricingorder[$i+1]->productId ?>" class="form-control" value="<?php echo $productbylimitdecricingorder[$i+1]->productId; ?>"  >
                                                                                                            <input type="hidden" name="p_name"  id="pname_<?php echo $productbylimitdecricingorder[$i+1]->productId ?>" class="form-control" value="<?php echo $productbylimitdecricingorder[$i+1]->productName; ?>"  >
                                                                                                            <input type="hidden" name="p_price" id="pprice_<?php echo $productbylimitdecricingorder[$i+1]->productId ?>" class="form-control" value="<?php echo $productbylimitdecricingorder[$i+1]->price; ?>" >
                                                                                                            <input type="hidden" name="p_qty" id="pqty_<?php echo $productbylimitdecricingorder[$i+1]->productId ?>" class="form-control" value="1" placeholder="E">


                                                                                                                <a  class="active" id="addCart_<?php echo $productbylimitdecricingorder[$i+1]->productId ?>" data-tooltip="Add to Cart" > <span  class="icon_cart_alt"></span></a>

                                                                                                                <a href="<?php echo site_url("") ?>" class="active" id="addWishlist_<?php echo $productbylimitdecricingorder[$i+1]->productId ?>" data-tooltip="Add to wishlist" > <span class="icon_heart_alt"></span></a>

                                                                                                                <a href="#" data-tooltip="Quick view" data-toggle = "modal" id="view_<?php echo $productbylimitdecricingorder[$i+1]->productId ?>" data-target="#quick-view-modal-container"> <span class="icon_search"></span> </a>
                                                                                                        </div>
                                                                                                </div>
                                                                                                <div class="product-content">
                                                                                                        <div class="product-categories">
                                                                                                                <a href="<?php echo site_url("shop",'catID=' .$productbylimitdecricingorder[$i+1]->categoryId ) ?>"><?php echo $productbylimitdecricingorder[$i+1]->categoryName ; ?></a>
                                                                                                        </div>
                                                                                                        <h3 class="product-title"><a href="<?php echo site_url("single-product",'id=' .$productbylimitdecricingorder[$i+1]->productId) ?>"><?php echo $productbylimitdecricingorder[$i+1]->productName; ?></a></h3>
                                                                                                        <div class="price-box">
                                                                                                                <span class="discounted-price"><?php echo $productbylimitdecricingorder[$i+1]->price; ?> ₹</span>
                                                                                                        </div>
                                                                                                </div>
										       </div>
										 <?php } ?>
											<!--=======  End of tab slider sub product  =======-->
											
								
									</div>
                                                                        
                                                                          <?php
                                                                      $i = $i+1;
                                                                                }
                                                                              }
                                                                           
                                                                                ?>
									<!--=======  End of single tab slider product  =======-->
									<!--=======  single tab slider item  =======-->
<!--									<div class="single-tab-slider-item">
										=======  tab slider sub product  =======
										
										<div class="gf-product gf-product tab-slider-sub-product">
											<div class="image">
												<a href="single-product.html">
													<span class="onsale">Sale!</span>
													<img src="<?php echo base_url() ?>/assets/images/products/product01.jpg" class="img-fluid" alt="">
												</a>
												<div class="product-hover-icons">
													<a class="active" href="#" data-tooltip="Add to cart"> <span class="icon_cart_alt"></span></a>
													<a href="#" data-tooltip="Add to wishlist"> <span class="icon_heart_alt"></span> </a>
													<a href="#" data-tooltip="Compare"> <span class="arrow_left-right_alt"></span> </a>
													<a href="#" data-tooltip="Quick view" data-toggle = "modal" data-target="#quick-view-modal-container"> <span class="icon_search"></span> </a>
												</div>
											</div>
											<div class="product-content">
												<div class="product-categories">
													<a href="shop-left-sidebar.html">Fast Foods</a>,
													<a href="shop-left-sidebar.html">Vegetables</a>
												</div>
												<h3 class="product-title"><a href="single-product.html">Sed tempor ehicula non commodo</a></h3>
												<div class="price-box">
													<span class="main-price">$89.00</span>
													<span class="discounted-price">$80.00</span>
												</div>
											</div>
										</div>
									
										=======  End of tab slider sub product  =======

										=======  tab slider sub product  =======
										
										<div class="gf-product tab-slider-sub-product">
											<div class="image">
												<a href="single-product.html">
													<img src="<?php echo base_url() ?>/assets/images/products/product02.jpg" class="img-fluid" alt="">
												</a>
												<div class="product-hover-icons">
													<a href="#" data-tooltip="Add to cart"> <span class="icon_cart_alt"></span></a>
													<a href="#" data-tooltip="Add to wishlist"> <span class="icon_heart_alt"></span> </a>
													<a href="#" data-tooltip="Compare"> <span class="arrow_left-right_alt"></span> </a>
													<a href="#" data-tooltip="Quick view" data-toggle = "modal" data-target="#quick-view-modal-container"> <span class="icon_search"></span> </a>
												</div>
											</div>
											<div class="product-content">
												<div class="product-categories">
													<a href="shop-left-sidebar.html">Fast Foods</a>,
													<a href="shop-left-sidebar.html">Vegetables</a>
												</div>
												<h3 class="product-title"><a href="single-product.html">Sed tempor ehicula non commodo</a></h3>
												<div class="price-box">
													<span class="discounted-price">$80.00</span>
												</div>
											</div>
										</div>
									
										=======  End of tab slider sub product  =======
										
							
									</div>
									=======  End of single tab slider product  =======

									=======  single tab slider item  =======
									<div class="single-tab-slider-item">
										=======  tab slider sub product  =======
										
										<div class="gf-product tab-slider-sub-product">
											<div class="image">
												<a href="single-product.html">
													<span class="onsale">Sale!</span>
													<img src="<?php echo base_url() ?>/assets/images/products/product05.jpg" class="img-fluid" alt="">
												</a>
												<div class="product-hover-icons">
													<a href="#" data-tooltip="Add to cart"> <span class="icon_cart_alt"></span></a>
													<a href="#" data-tooltip="Add to wishlist"> <span class="icon_heart_alt"></span> </a>
													<a href="#" data-tooltip="Compare"> <span class="arrow_left-right_alt"></span> </a>
													<a href="#" data-tooltip="Quick view" data-toggle = "modal" data-target="#quick-view-modal-container"> <span class="icon_search"></span> </a>
												</div>
											</div>
											<div class="product-content">
												<div class="product-categories">
													<a href="shop-left-sidebar.html">Fast Foods</a>,
													<a href="shop-left-sidebar.html">Vegetables</a>
												</div>
												<h3 class="product-title"><a href="single-product.html">Sed tempor ehicula non commodo</a></h3>
												<div class="price-box">
													<span class="main-price">$89.00</span>
													<span class="discounted-price">$80.00</span>
												</div>
											</div>
										</div>
									
										=======  End of tab slider sub product  =======

										=======  tab slider sub product  =======
										
										<div class="gf-product tab-slider-sub-product">
											<div class="image">
												<a href="single-product.html">
													<img src="<?php echo base_url() ?>/assets/images/products/product06.jpg" class="img-fluid" alt="">
												</a>
												<div class="product-hover-icons">
													<a class="active" href="#" data-tooltip="Add to cart"> <span class="icon_cart_alt"></span></a>
													<a href="#" data-tooltip="Add to wishlist"> <span class="icon_heart_alt"></span> </a>
													<a href="#" data-tooltip="Compare"> <span class="arrow_left-right_alt"></span> </a>
													<a href="#" data-tooltip="Quick view" data-toggle = "modal" data-target="#quick-view-modal-container"> <span class="icon_search"></span> </a>
												</div>
											</div>
											<div class="product-content">
												<div class="product-categories">
													<a href="shop-left-sidebar.html">Fast Foods</a>,
													<a href="shop-left-sidebar.html">Vegetables</a>
												</div>
												<h3 class="product-title"><a href="single-product.html">Sed tempor ehicula non commodo</a></h3>
												<div class="price-box">
													<span class="discounted-price">$80.00</span>
												</div>
											</div>
										</div>
									
										=======  End of tab slider sub product  =======
									</div>
									=======  End of single tab slider product  =======

									=======  single tab slider item  =======
									<div class="single-tab-slider-item">
										=======  tab slider sub product  =======
										
										<div class="gf-product tab-slider-sub-product">
											<div class="image">
												<a href="single-product.html">
													<span class="onsale">Sale!</span>
													<img src="<?php echo base_url() ?>/assets/images/products/product07.jpg" class="img-fluid" alt="">
												</a>
												<div class="product-hover-icons">
													<a href="#" data-tooltip="Add to cart"> <span class="icon_cart_alt"></span></a>
													<a href="#" data-tooltip="Add to wishlist"> <span class="icon_heart_alt"></span> </a>
													<a href="#" data-tooltip="Compare"> <span class="arrow_left-right_alt"></span> </a>
													<a href="#" data-tooltip="Quick view" data-toggle = "modal" data-target="#quick-view-modal-container"> <span class="icon_search"></span> </a>
												</div>
											</div>
											<div class="product-content">
												<div class="product-categories">
													<a href="shop-left-sidebar.html">Fast Foods</a>,
													<a href="shop-left-sidebar.html">Vegetables</a>
												</div>
												<h3 class="product-title"><a href="single-product.html">Sed tempor ehicula non commodo</a></h3>
												<div class="price-box">
													<span class="main-price">$89.00</span>
													<span class="discounted-price">$80.00</span>
												</div>
											</div>
										</div>
									
										=======  End of tab slider sub product  =======

										=======  tab slider sub product  =======
										
										<div class="gf-product tab-slider-sub-product">
											<div class="image">
												<a href="single-product.html">
													<span class="onsale">Sale!</span>
													<img src="<?php echo base_url() ?>/assets/images/products/product08.jpg" class="img-fluid" alt="">
												</a>
												<div class="product-hover-icons">
													<a href="#" data-tooltip="Add to cart"> <span class="icon_cart_alt"></span></a>
													<a href="#" data-tooltip="Add to wishlist"> <span class="icon_heart_alt"></span> </a>
													<a href="#" data-tooltip="Compare"> <span class="arrow_left-right_alt"></span> </a>
													<a href="#" data-tooltip="Quick view" data-toggle = "modal" data-target="#quick-view-modal-container"> <span class="icon_search"></span> </a>
												</div>
											</div>
											<div class="product-content">
												<div class="product-categories">
													<a href="shop-left-sidebar.html">Fast Foods</a>,
													<a href="shop-left-sidebar.html">Vegetables</a>
												</div>
												<h3 class="product-title"><a href="single-product.html">Sed tempor ehicula non commodo</a></h3>
												<div class="price-box">
													<span class="main-price">$89.00</span>
													<span class="discounted-price">$80.00</span>
												</div>
											</div>
										</div>
									
										=======  End of tab slider sub product  =======
									</div>
									=======  End of single tab slider product  =======

									=======  single tab slider item  =======

									<div class="single-tab-slider-item">
										=======  tab slider sub product  =======
										
										<div class="gf-product tab-slider-sub-product">
											<div class="image">
												<a href="single-product.html">
													<span class="onsale">Sale!</span>
													<img src="<?php echo base_url() ?>/assets/images/products/product09.jpg" class="img-fluid" alt="">
												</a>
												<div class="product-hover-icons">
													<a class="active" href="#" data-tooltip="Add to cart"> <span class="icon_cart_alt"></span></a>
													<a href="#" data-tooltip="Add to wishlist"> <span class="icon_heart_alt"></span> </a>
													<a href="#" data-tooltip="Compare"> <span class="arrow_left-right_alt"></span> </a>
													<a href="#" data-tooltip="Quick view" data-toggle = "modal" data-target="#quick-view-modal-container"> <span class="icon_search"></span> </a>
												</div>
											</div>
											<div class="product-content">
												<div class="product-categories">
													<a href="shop-left-sidebar.html">Fast Foods</a>,
													<a href="shop-left-sidebar.html">Vegetables</a>
												</div>
												<h3 class="product-title"><a href="single-product.html">Sed tempor ehicula non commodo</a></h3>
												<div class="price-box">
													<span class="main-price">$89.00</span>
													<span class="discounted-price">$80.00</span>
												</div>
											</div>
										</div>
									
										=======  End of tab slider sub product  =======

										=======  tab slider sub product  =======
										
										<div class="gf-product tab-slider-sub-product">
											<div class="image">
												<a href="single-product.html">
													<span class="onsale">Sale!</span>
													<img src="<?php echo base_url() ?>/assets/images/products/product10.jpg" class="img-fluid" alt="">
												</a>
												<div class="product-hover-icons">
													<a href="#" data-tooltip="Add to cart"> <span class="icon_cart_alt"></span></a>
													<a href="#" data-tooltip="Add to wishlist"> <span class="icon_heart_alt"></span> </a>
													<a href="#" data-tooltip="Compare"> <span class="arrow_left-right_alt"></span> </a>
													<a href="#" data-tooltip="Quick view" data-toggle = "modal" data-target="#quick-view-modal-container"> <span class="icon_search"></span> </a>
												</div>
											</div>
											<div class="product-content">
												<div class="product-categories">
													<a href="shop-left-sidebar.html">Fast Foods</a>,
													<a href="shop-left-sidebar.html">Vegetables</a>
												</div>
												<h3 class="product-title"><a href="single-product.html">Sed tempor ehicula non commodo</a></h3>
												<div class="price-box">
													<span class="main-price">$89.00</span>
													<span class="discounted-price">$80.00</span>
												</div>
											</div>
										</div>
									
										=======  End of tab slider sub product  =======
										
							
									</div>-->
									<!--=======  End of single tab slider product  =======-->
								</div>
										
								<!--=======  End of tab slider container  =======-->
							</div>
							<div class="tab-pane fade" id="on-sale" role="tabpanel" aria-labelledby="nav-onsale-tab">
								<!--=======  tab slider container  =======-->
																
								<div class="tab-slider-container">
									<!--=======  single tab slider item  =======-->
                                                                        <?php if ($product){
                                                                                      for($i=0;$i<count($product);$i++){
                                                                                         
                                                                                    ?>
									<div class="single-tab-slider-item">
										<!--=======  tab slider sub product  =======-->
                                                                                
                                                                                <div class="gf-product tab-slider-sub-product">
											<div class="image">
												<a href="<?php echo site_url("single-product",'id=' .$product[$i]->productId) ?>">
													<img src="<?php echo base_url('public/images/' . $product[$i]->productImage); ?>" style="width:260px; height:250px; " class="img-responsive img-rounded" alt="">
												</a>
												<div class="product-hover-icons">
                                                                                                    <input type="hidden" name="p_id"  id="pid_<?php echo $product[$i]->productId ?>" class="form-control" value="<?php echo $product[$i]->productId; ?>"  >
                                                                                                    <input type="hidden" name="p_name"  id="pname_<?php echo $product[$i]->productId ?>" class="form-control" value="<?php echo $product[$i]->productName; ?>"  >
                                                                                                    <input type="hidden" name="p_price" id="pprice_<?php echo $product[$i]->productId ?>" class="form-control" value="<?php echo $product[$i]->price; ?>" >
                                                                                                    <input type="hidden" name="p_qty" id="pqty_<?php echo $product[$i]->productId ?>" class="form-control" value="1" placeholder="E">
                                                                                                    
                                                                                                    
											                <a  class="active" id="addCart_<?php echo $product[$i]->productId ?>" data-tooltip="Add to Cart" > <span  class="icon_cart_alt"></span></a>
                                                                                                   
                                                                                                        <a href="<?php echo site_url("") ?>" class="active" id="addWishlist_<?php echo $product[$i]->productId ?>" data-tooltip="Add to wishlist" > <span class="icon_heart_alt"></span></a>
													
													<a href="#" data-tooltip="Quick view" data-toggle = "modal" id="view_<?php echo $product[$i]->productId ?>" data-target="#quick-view-modal-container"> <span class="icon_search"></span> </a>
												</div>
											</div>
											<div class="product-content">
												<div class="product-categories">
													<a href="<?php echo site_url("shop",'catID=' .$product[$i]->categoryId ) ?>"><?php echo $product[$i]->categoryName ; ?></a>
												</div>
												<h3 class="product-title"><a href="<?php echo site_url("single-product",'id=' .$product[$i]->productId) ?>"><?php echo $product[$i]->productName; ?></a></h3>
												<div class="price-box">
													<span class="discounted-price"><?php echo $product[$i]->price; ?> ₹</span>
												</div>
											</div>
										</div>
									
										<!--=======  End of tab slider sub product  =======-->

										<!--=======  tab slider sub product  =======-->
                                                                                
                                                                           <?php if(($i+1)  < count($product)){ ?>
                                                                        
										<div class="gf-product tab-slider-sub-product">
											<div class="image">
												<a href="<?php echo site_url("single-product",'id=' .$product[$i+1]->productId) ?>">
													<img src="<?php echo base_url('public/images/' . $product[$i+1]->productImage); ?>" style="width:260px; height:250px; " class="img-responsive img-rounded" alt="">
												</a>
												<div class="product-hover-icons">
                                                                                                    <input type="hidden" name="p_id"  id="pid_<?php echo $product[$i+1]->productId ?>" class="form-control" value="<?php echo $product[$i+1]->productId; ?>"  >
                                                                                                    <input type="hidden" name="p_name"  id="pname_<?php echo $product[$i+1]->productId ?>" class="form-control" value="<?php echo $product[$i+1]->productName; ?>"  >
                                                                                                    <input type="hidden" name="p_price" id="pprice_<?php echo $product[$i+1]->productId ?>" class="form-control" value="<?php echo $product[$i+1]->price; ?>" >
                                                                                                    <input type="hidden" name="p_qty" id="pqty_<?php echo $product[$i+1]->productId ?>" class="form-control" value="1" placeholder="E">
                                                                                                    
                                                                                                    
											                <a  class="active" id="addCart_<?php echo $product[$i+1]->productId ?>" data-tooltip="Add to Cart" > <span  class="icon_cart_alt"></span></a>
                                                                                                   
                                                                                                        <a href="<?php echo site_url("") ?>" class="active" id="addWishlist_<?php echo $product[$i+1]->productId ?>" data-tooltip="Add to wishlist" > <span class="icon_heart_alt"></span></a>
													
													<a href="#" data-tooltip="Quick view" data-toggle = "modal" id="view_<?php echo $product[$i+1]->productId ?>" data-target="#quick-view-modal-container"> <span class="icon_search"></span> </a>
												</div>
											</div>
											<div class="product-content">
												<div class="product-categories">
													<a href="<?php echo site_url("shop",'catID=' .$product[$i+1]->categoryId ) ?>"><?php echo $product[$i+1]->categoryName ; ?></a>
												</div>
												<h3 class="product-title"><a href="<?php echo site_url("single-product",'id=' .$product[$i+1]->productId) ?>"><?php echo $product[$i+1]->productName; ?></a></h3>
												<div class="price-box">
													<span class="discounted-price"><?php echo $product[$i+1]->price; ?> ₹</span>
												</div>
											</div>
										</div>
                                                                                
                                                                           <?php } ?>
									
										<!--=======  End of tab slider sub product  =======-->
										
							
									</div>
                                                                       <?php
                                                                      $i = $i+1;
                                                                                }
                                                                              }
                                                                           
                                                                                ?>
									<!--=======  End of single tab slider product  =======-->
									<!--=======  single tab slider item  =======-->
<!--									<div class="single-tab-slider-item">
										=======  tab slider sub product  =======
										
										<div class="gf-product gf-product tab-slider-sub-product">
											<div class="image">
												<a href="single-product.html">
													<span class="onsale">Sale!</span>
													<img src="<?php echo base_url() ?>/assets/images/products/product01.jpg" class="img-fluid" alt="">
												</a>
												<div class="product-hover-icons">
													<a class="active" href="#" data-tooltip="Add to cart"> <span class="icon_cart_alt"></span></a>
													<a href="#" data-tooltip="Add to wishlist"> <span class="icon_heart_alt"></span> </a>
													<a href="#" data-tooltip="Compare"> <span class="arrow_left-right_alt"></span> </a>
													<a href="#" data-tooltip="Quick view" data-toggle = "modal" data-target="#quick-view-modal-container"> <span class="icon_search"></span> </a>
												</div>
											</div>
											<div class="product-content">
												<div class="product-categories">
													<a href="shop-left-sidebar.html">Fast Foods</a>,
													<a href="shop-left-sidebar.html">Vegetables</a>
												</div>
												<h3 class="product-title"><a href="single-product.html">Sed tempor ehicula non commodo</a></h3>
												<div class="price-box">
													<span class="main-price">$89.00</span>
													<span class="discounted-price">$80.00</span>
												</div>
											</div>
										</div>
									
										=======  End of tab slider sub product  =======

										=======  tab slider sub product  =======
										
										<div class="gf-product tab-slider-sub-product">
											<div class="image">
												<a href="single-product.html">
													<img src="<?php echo base_url() ?>/assets/images/products/product02.jpg" class="img-fluid" alt="">
												</a>
												<div class="product-hover-icons">
													<a href="#" data-tooltip="Add to cart"> <span class="icon_cart_alt"></span></a>
													<a href="#" data-tooltip="Add to wishlist"> <span class="icon_heart_alt"></span> </a>
													<a href="#" data-tooltip="Compare"> <span class="arrow_left-right_alt"></span> </a>
													<a href="#" data-tooltip="Quick view" data-toggle = "modal" data-target="#quick-view-modal-container"> <span class="icon_search"></span> </a>
												</div>
											</div>
											<div class="product-content">
												<div class="product-categories">
													<a href="shop-left-sidebar.html">Fast Foods</a>,
													<a href="shop-left-sidebar.html">Vegetables</a>
												</div>
												<h3 class="product-title"><a href="single-product.html">Sed tempor ehicula non commodo</a></h3>
												<div class="price-box">
													<span class="discounted-price">$80.00</span>
												</div>
											</div>
										</div>
									
										=======  End of tab slider sub product  =======
										
							
									</div>
									=======  End of single tab slider product  =======
									=======  single tab slider item  =======
									<div class="single-tab-slider-item">
										=======  tab slider sub product  =======
										
										<div class="gf-product tab-slider-sub-product">
											<div class="image">
												<a href="single-product.html">
													<img src="<?php echo base_url() ?>/assets/images/products/product03.jpg" class="img-fluid" alt="">
												</a>
												<div class="product-hover-icons">
													<a href="#" data-tooltip="Add to cart"> <span class="icon_cart_alt"></span></a>
													<a href="#" data-tooltip="Add to wishlist"> <span class="icon_heart_alt"></span> </a>
													<a href="#" data-tooltip="Compare"> <span class="arrow_left-right_alt"></span> </a>
													<a href="#" data-tooltip="Quick view" data-toggle = "modal" data-target="#quick-view-modal-container"> <span class="icon_search"></span> </a>
												</div>
											</div>
											<div class="product-content">
												<div class="product-categories">
													<a href="shop-left-sidebar.html">Fast Foods</a>,
													<a href="shop-left-sidebar.html">Vegetables</a>
												</div>
												<h3 class="product-title"><a href="single-product.html">Sed tempor ehicula non commodo</a></h3>
												<div class="price-box">
													<span class="discounted-price">$80.00</span>
												</div>
											</div>
										</div>
									
										=======  End of tab slider sub product  =======

										=======  tab slider sub product  =======
										
										<div class="gf-product tab-slider-sub-product">
											<div class="image">
												<a href="single-product.html">
													<span class="onsale">Sale!</span>
													<img src="<?php echo base_url() ?>/assets/images/products/product04.jpg" class="img-fluid" alt="">
												</a>
												<div class="product-hover-icons">
													<a href="#" data-tooltip="Add to cart"> <span class="icon_cart_alt"></span></a>
													<a href="#" data-tooltip="Add to wishlist"> <span class="icon_heart_alt"></span> </a>
													<a href="#" data-tooltip="Compare"> <span class="arrow_left-right_alt"></span> </a>
													<a href="#" data-tooltip="Quick view" data-toggle = "modal" data-target="#quick-view-modal-container"> <span class="icon_search"></span> </a>
												</div>
											</div>
											<div class="product-content">
												<div class="product-categories">
													<a href="shop-left-sidebar.html">Fast Foods</a>,
													<a href="shop-left-sidebar.html">Vegetables</a>
												</div>
												<h3 class="product-title"><a href="single-product.html">Sed tempor ehicula non commodo</a></h3>
												<div class="price-box">
													<span class="main-price">$89.00</span>
													<span class="discounted-price">$80.00</span>
												</div>
											</div>
										</div>
									
										=======  End of tab slider sub product  =======
										
							
									</div>
									=======  End of single tab slider product  =======
									=======  single tab slider item  =======
									<div class="single-tab-slider-item">
										=======  tab slider sub product  =======
										
										<div class="gf-product tab-slider-sub-product">
											<div class="image">
												<a href="single-product.html">
													<span class="onsale">Sale!</span>
													<img src="<?php echo base_url() ?>/assets/images/products/product05.jpg" class="img-fluid" alt="">
												</a>
												<div class="product-hover-icons">
													<a href="#" data-tooltip="Add to cart"> <span class="icon_cart_alt"></span></a>
													<a href="#" data-tooltip="Add to wishlist"> <span class="icon_heart_alt"></span> </a>
													<a href="#" data-tooltip="Compare"> <span class="arrow_left-right_alt"></span> </a>
													<a href="#" data-tooltip="Quick view" data-toggle = "modal" data-target="#quick-view-modal-container"> <span class="icon_search"></span> </a>
												</div>
											</div>
											<div class="product-content">
												<div class="product-categories">
													<a href="shop-left-sidebar.html">Fast Foods</a>,
													<a href="shop-left-sidebar.html">Vegetables</a>
												</div>
												<h3 class="product-title"><a href="single-product.html">Sed tempor ehicula non commodo</a></h3>
												<div class="price-box">
													<span class="main-price">$89.00</span>
													<span class="discounted-price">$80.00</span>
												</div>
											</div>
										</div>
									
										=======  End of tab slider sub product  =======

										=======  tab slider sub product  =======
										
										<div class="gf-product tab-slider-sub-product">
											<div class="image">
												<a href="single-product.html">
													<img src="<?php echo base_url() ?>/assets/images/products/product06.jpg" class="img-fluid" alt="">
												</a>
												<div class="product-hover-icons">
													<a class="active" href="#" data-tooltip="Add to cart"> <span class="icon_cart_alt"></span></a>
													<a href="#" data-tooltip="Add to wishlist"> <span class="icon_heart_alt"></span> </a>
													<a href="#" data-tooltip="Compare"> <span class="arrow_left-right_alt"></span> </a>
													<a href="#" data-tooltip="Quick view" data-toggle = "modal" data-target="#quick-view-modal-container"> <span class="icon_search"></span> </a>
												</div>
											</div>
											<div class="product-content">
												<div class="product-categories">
													<a href="shop-left-sidebar.html">Fast Foods</a>,
													<a href="shop-left-sidebar.html">Vegetables</a>
												</div>
												<h3 class="product-title"><a href="single-product.html">Sed tempor ehicula non commodo</a></h3>
												<div class="price-box">
													<span class="discounted-price">$80.00</span>
												</div>
											</div>
										</div>
									
										=======  End of tab slider sub product  =======
									</div>
									=======  End of single tab slider product  =======

									=======  single tab slider item  =======
									<div class="single-tab-slider-item">
										=======  tab slider sub product  =======
										
										<div class="gf-product tab-slider-sub-product">
											<div class="image">
												<a href="single-product.html">
													<span class="onsale">Sale!</span>
													<img src="<?php echo base_url() ?>/assets/images/products/product07.jpg" class="img-fluid" alt="">
												</a>
												<div class="product-hover-icons">
													<a href="#" data-tooltip="Add to cart"> <span class="icon_cart_alt"></span></a>
													<a href="#" data-tooltip="Add to wishlist"> <span class="icon_heart_alt"></span> </a>
													<a href="#" data-tooltip="Compare"> <span class="arrow_left-right_alt"></span> </a>
													<a href="#" data-tooltip="Quick view" data-toggle = "modal" data-target="#quick-view-modal-container"> <span class="icon_search"></span> </a>
												</div>
											</div>
											<div class="product-content">
												<div class="product-categories">
													<a href="shop-left-sidebar.html">Fast Foods</a>,
													<a href="shop-left-sidebar.html">Vegetables</a>
												</div>
												<h3 class="product-title"><a href="single-product.html">Sed tempor ehicula non commodo</a></h3>
												<div class="price-box">
													<span class="main-price">$89.00</span>
													<span class="discounted-price">$80.00</span>
												</div>
											</div>
										</div>
									
										=======  End of tab slider sub product  =======

										=======  tab slider sub product  =======
										
										<div class="gf-product tab-slider-sub-product">
											<div class="image">
												<a href="single-product.html">
													<span class="onsale">Sale!</span>
													<img src="<?php echo base_url() ?>/assets/images/products/product08.jpg" class="img-fluid" alt="">
												</a>
												<div class="product-hover-icons">
													<a href="#" data-tooltip="Add to cart"> <span class="icon_cart_alt"></span></a>
													<a href="#" data-tooltip="Add to wishlist"> <span class="icon_heart_alt"></span> </a>
													<a href="#" data-tooltip="Compare"> <span class="arrow_left-right_alt"></span> </a>
													<a href="#" data-tooltip="Quick view" data-toggle = "modal" data-target="#quick-view-modal-container"> <span class="icon_search"></span> </a>
												</div>
											</div>
											<div class="product-content">
												<div class="product-categories">
													<a href="shop-left-sidebar.html">Fast Foods</a>,
													<a href="shop-left-sidebar.html">Vegetables</a>
												</div>
												<h3 class="product-title"><a href="single-product.html">Sed tempor ehicula non commodo</a></h3>
												<div class="price-box">
													<span class="main-price">$89.00</span>
													<span class="discounted-price">$80.00</span>
												</div>
											</div>
										</div>
									
										=======  End of tab slider sub product  =======
									</div>-->
									<!--=======  End of single tab slider product  =======-->
								</div>
										
								<!--=======  End of tab slider container  =======-->
							</div>
                                                    
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
	<!--=====  End of Tab slider  ======-->

	<!--=============================================
	=            Featured product image gallery         =
	=============================================-->
	
	<div class="featured-product-image-gallery mb-80 pt-120 section-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!--=======  gallery product container  =======-->
					<div class="gallery-product-container">
						<div class="row no-gutters">
							<div class="col-lg-4 col-sm-6">
								<!--=======  single featured product  =======-->
								
								<div class="single-featured-product">
									<a href="<?php echo base_url() ?>/single-product.html">
										<img src="<?php echo base_url() ?>/assets/images/product-banners/fullbanner-1.jpg" class="img-fluid" alt="">
									</a>
								</div>
								
								<!--=======  End of single featured product  =======-->
							</div>
							<div class="col-lg-4 col-sm-6">
								<!--=======  single featured product  =======-->
								
								<div class="single-featured-product">
									<a href="<?php echo base_url() ?>/single-product.html">
										<img src="<?php echo base_url() ?>/assets/images/product-banners/fullbanner-2.jpg" class="img-fluid" alt="">
									</a>
								</div>
								
								<!--=======  End of single featured product  =======-->
							</div>
							<div class="col-lg-4 col-sm-6">
								<!--=======  single featured product  =======-->
								
								<div class="single-featured-product">
									<a href="single-product.html">
										<img src="<?php echo base_url() ?>/assets/images/product-banners/fullbanner-3.jpg" class="img-fluid" alt="">
									</a>
								</div>
								
								<!--=======  End of single featured product  =======-->
							</div>
							<div class="col-lg-4 col-sm-6">
								<!--=======  single featured product  =======-->
								
								<div class="single-featured-product">
									<a href="single-product.html">
										<img src="<?php echo base_url() ?>/assets/images/product-banners/fullbanner-4.jpg" class="img-fluid" alt="">
									</a>
								</div>
								
								<!--=======  End of single featured product  =======-->
							</div>
							<div class="col-lg-4 col-sm-6">
								<!--=======  single featured product  =======-->
								
								<div class="single-featured-product">
									<a href="single-product.html">
										<img src="<?php echo base_url() ?>/assets/images/product-banners/fullbanner-5.jpg" class="img-fluid" alt="">
									</a>
								</div>
								
								<!--=======  End of single featured product  =======-->
							</div>
							<div class="col-lg-4 col-sm-6">
								<!--=======  single featured product  =======-->
								
								<div class="single-featured-product">
									<a href="single-product.html">
										<img src="<?php echo base_url() ?>/assets/images/product-banners/fullbanner-6.jpg" class="img-fluid" alt="">
									</a>
								</div>
								
								<!--=======  End of single featured product  =======-->
							</div>
						</div>
					</div>
					
					<!--=======  End of gallery product container  =======-->

				</div>
			</div>
		</div>
	</div>
	
	<!--=====  End of Featured product image gallery  ======-->

	<!--=============================================
	=            Sale product slider         =
	=============================================-->
	
	<div class="sale-single-product-section mb-35">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-big-title text-center mb-30">
						<h2>Combo Product 20% sale off <span>AWARAN HAND LOOM DEAL OF THE DAY</span></h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<!--=======  sale single product container  =======-->
					
					<div class="sale-single-product-container">
						<!--=======  sale single product  =======-->
                                                 <?php
                                                          if($cproduct) {
                                                          $count   = count($cproduct);
                    //                                    
                                                    
                                                       foreach ($cproduct as $each) {


                                                  ?>
						<div class="sale-single-product">
							<!--<div class="product-countdown" data-countdown="2020/05/01"></div>-->
							<div class="row">
								<div class="col-lg-4 offset-lg-2 col-md-12">
									<!--=======  sale single product image  =======-->
									
									<div class="image text-md-center">
										<a href="<?php echo site_url("single-comboproduct",'id=' .$each->com_id) ?>">
											<span class="onsale">Sale!</span>
											<!--<img src="<?php echo base_url() ?>/assets/images/products/product01.jpg" class="img-fluid" alt="">-->
                                                                                        <img src="<?php echo base_url('public/images/comboproduct/' . $each->image); ?>" class="img-responsive img-rounded" style="width:350px; height:340px; " >
										</a>
										<div class="product-hover-icons">
											<a href="<?php echo site_url("single-comboproduct",'id=' .$each->com_id) ?>" data-tooltip="Quick view"> <span class="icon_search"></span> </a>
										</div>

									</div>
									
									<!--=======  End of sale single product image  =======-->
								</div>
								<div class="col-lg-6 col-md-12">
									<!--=======  sale single product content  =======-->
									
									<div class="sale-single-product-content text-center">
										<h2 class="product-title"><a href="<?php echo site_url("single-comboproduct",'id=' .$each->com_id) ?>"><?php echo $each->combo_name ; ?></a></h2>
                                                                                <h2 class="price"> <span class="discounted-price"><?php echo $each->taotalammount ;  ?> ₹</span></h2>
										<p class="product-description">
									        <?php echo substr($each->comboDescription, 0, 140); ?>
										</p>
                                                                                
                                                                                <input type="hidden" name="p_id"  id="pcid_<?php echo $each->com_id ?>" class="form-control" value="<?php echo $each->com_id; ?>"  placeholder="E">
                                                                                <input type="hidden" name="p_name"  id="pcname_<?php echo $each->com_id ?>" class="form-control" value="<?php echo $each->combo_name; ?>"  placeholder="E">
                                                                                <input type="hidden" name="p_price" id="pcprice_<?php echo $each->com_id ?>" class="form-control" value="<?php echo $each->taotalammount; ?>" placeholder="E">
                                                                                <input type="hidden" name="p_qty" id="pcqty_<?php echo $each->com_id ?>" class="form-control" value="1" placeholder="E">                                                      
                                                                                
                                                                                
                                                                                
										<a id="addcomboCart_<?php echo $each->com_id ?>" class="single-sale-add-to-cart-btn">add to cart</a>
									</div>
									
									<!--=======  End of sale single product content  =======-->
								</div>
							</div>
						</div>
						<?php
                                                       }
                                                          
                                                       
                                                   }
                                                
                                                ?>
						<!--=======  End of sale single product  =======-->
						<!--=======  sale single product  =======-->
						
<!--						<div class="sale-single-product">
							<div class="product-countdown" data-countdown="2020/05/01"></div>
							<div class="row">
								<div class="col-lg-4 offset-lg-2">
									=======  sale single product image  =======
									
									<div class="image">
										<a href="single-product.html">
											<span class="onsale">Sale!</span>
											<img src="<?php echo base_url() ?>/assets/images/products/product02.jpg" class="img-fluid" alt="">
										</a>
										<div class="product-hover-icons">
											<a href="#" data-tooltip="Quick view" data-toggle = "modal" data-target="#quick-view-modal-container"> <span class="icon_search"></span> </a>
										</div>
									</div>
									
									=======  End of sale single product image  =======
								</div>
								<div class="col-lg-6">
									=======  sale single product content  =======
									
									<div class="sale-single-product-content text-center">
										<h2 class="product-title"><a href="single-product.html">Dolorum fuga eget posuere</a></h2>
										<h2 class="price"> <span class="main-price">$15.09</span> <span class="discounted-price">$12.00</span></h2>
										<p class="product-description">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus
										</p>
										<a href="#" class="single-sale-add-to-cart-btn">add to cart</a>
									</div>
									
									=======  End of sale single product content  =======
								</div>
							</div>
						</div>-->
						
						<!--=======  End of sale single product  =======-->
						<!--=======  sale single product  =======-->
						
<!--						<div class="sale-single-product">
							<div class="product-countdown" data-countdown="2020/05/01"></div>
							<div class="row">
								<div class="col-lg-4 offset-lg-2">
									=======  sale single product image  =======
									
									<div class="image">
										<a href="single-product.html">
											<span class="onsale">Sale!</span>
											<img src="<?php echo base_url() ?>/assets/images/products/product03.jpg" class="img-fluid" alt="">
										</a>
										<div class="product-hover-icons">
											<a href="#" data-tooltip="Quick view" data-toggle = "modal" data-target="#quick-view-modal-container"> <span class="icon_search"></span> </a>
										</div>
									</div>
									
									=======  End of sale single product image  =======
								</div>
								<div class="col-lg-6">
									=======  sale single product content  =======
									
									<div class="sale-single-product-content text-center">
										<h2 class="product-title"><a href="single-product.html">Dolorum fuga eget posuere</a></h2>
										<h2 class="price"> <span class="main-price">$15.09</span> <span class="discounted-price">$12.00</span></h2>
										<p class="product-description">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus
										</p>
										<a href="#" class="single-sale-add-to-cart-btn">add to cart</a>
									</div>
									
									=======  End of sale single product content  =======
								</div>
							</div>
						</div>-->
						
						<!--=======  End of sale single product  =======-->
					</div>
					
					<!--=======  End of sale single product container  =======-->
				</div>
			</div>
		</div>
	</div>
	
	<!--=====  End of Sale product slider  ======-->

	<!--=============================================
	=            Best seller slider         =
	=============================================-->
	
<!--	<div class="slider best-seller-slider mb-35">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					=======  category slider section title  =======

					<div class="section-title">
						<h3>best seller</h3>
					</div>
					
					=======  End of category slider section title  =======
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					=======  best seller slider container  =======
					
					<div class="best-seller-slider-container pt-15 pb-15">

						=======  single best seller product  =======
						<div class="col">
							<div class="single-best-seller-item">
								<div class="best-seller-sub-product">
									<div class="row">
										<div class="col-lg-4 pl-0 pr-0">
											<div class="image">
												<a href="single-product.html">
													<img src="<?php echo base_url() ?>/assets/images/products/product01.jpg" class="img-fluid" alt="">
												</a>
											</div>
										</div>
										<div class="col-lg-8 pl-0 pr-0">
											<div class="product-content">
												<div class="product-categories">
													<a href="shop-left-sidebar.html">Fast Foods</a>,
													<a href="shop-left-sidebar.html">Vegetables</a>
												</div>
												<h3 class="product-title"><a href="single-product.html">Sed tempor ehicula non commodo</a></h3>
												<div class="price-box">
													<span class="main-price">$89.00</span>
													<span class="discounted-price">$80.00</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="best-seller-sub-product">
										<div class="row">
											<div class="col-lg-4 pl-0 pr-0">
												<div class="image">
													<a href="single-product.html">
														<img src="<?php echo base_url() ?>/assets/images/products/product02.jpg" class="img-fluid" alt="">
													</a>
												</div>
											</div>
											<div class="col-lg-8 pl-0 pr-0">
												<div class="product-content">
													<div class="product-categories">
														<a href="shop-left-sidebar.html">Fast Foods</a>,
														<a href="shop-left-sidebar.html">Vegetables</a>
													</div>
													<h3 class="product-title"><a href="single-product.html">Officiis debitis varius risus</a></h3>
													<div class="price-box">
														<span class="main-price">$89.00</span>
														<span class="discounted-price">$80.00</span>
													</div>
												</div>
											</div>
										</div>
									</div>
							</div>
						</div>
						=======  End of single best seller product  =======

						=======  single best seller product  =======
						<div class="col">
							<div class="single-best-seller-item">
								<div class="best-seller-sub-product">
									<div class="row">
										<div class="col-lg-4 pl-0 pr-0">
											<div class="image">
												<a href="single-product.html">
													<img src="<?php echo base_url() ?>/assets/images/products/product03.jpg" class="img-fluid" alt="">
												</a>
											</div>
										</div>
										<div class="col-lg-8 pl-0 pr-0">
											<div class="product-content">
												<div class="product-categories">
													<a href="shop-left-sidebar.html">Fast Foods</a>,
													<a href="shop-left-sidebar.html">Vegetables</a>
												</div>
												<h3 class="product-title"><a href="single-product.html">Phasellus vel hendrerit eget</a></h3>
												<div class="price-box">
													<span class="main-price">$89.00</span>
													<span class="discounted-price">$80.00</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="best-seller-sub-product">
										<div class="row">
											<div class="col-lg-4 pl-0 pr-0">
												<div class="image">
													<a href="single-product.html">
														<img src="<?php echo base_url() ?>/assets/images/products/product04.jpg" class="img-fluid" alt="">
													</a>
												</div>
											</div>
											<div class="col-lg-8 pl-0 pr-0">
												<div class="product-content">
													<div class="product-categories">
														<a href="shop-left-sidebar.html">Fast Foods</a>,
														<a href="shop-left-sidebar.html">Vegetables</a>
													</div>
													<h3 class="product-title"><a href="single-product.html">Ornare sed consequat nisl eget</a></h3>
													<div class="price-box">
														<span class="main-price">$89.00</span>
														<span class="discounted-price">$80.00</span>
													</div>
												</div>
											</div>
										</div>
									</div>
							</div>
						</div>
						=======  End of single best seller product  =======

						=======  single best seller product  =======
						<div class="col">
							<div class="single-best-seller-item">
								<div class="best-seller-sub-product">
									<div class="row">
										<div class="col-lg-4 pl-0 pr-0">
											<div class="image">
												<a href="single-product.html">
													<img src="<?php echo base_url() ?>/assets/images/products/product05.jpg" class="img-fluid" alt="">
												</a>
											</div>
										</div>
										<div class="col-lg-8 pl-0 pr-0">
											<div class="product-content">
												<div class="product-categories">
													<a href="shop-left-sidebar.html">Fast Foods</a>,
													<a href="shop-left-sidebar.html">Vegetables</a>
												</div>
												<h3 class="product-title"><a href="single-product.html">Sed tempor ehicula non commodo</a></h3>
												<div class="price-box">
													<span class="main-price">$89.00</span>
													<span class="discounted-price">$80.00</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="best-seller-sub-product">
										<div class="row">
											<div class="col-lg-4 pl-0 pr-0">
												<div class="image">
													<a href="single-product.html">
														<img src="<?php echo base_url() ?>/assets/images/products/product06.jpg" class="img-fluid" alt="">
													</a>
												</div>
											</div>
											<div class="col-lg-8 pl-0 pr-0">
												<div class="product-content">
													<div class="product-categories">
														<a href="shop-left-sidebar.html">Fast Foods</a>,
														<a href="shop-left-sidebar.html">Vegetables</a>
													</div>
													<h3 class="product-title"><a href="single-product.html">Ornare sed consequat nisl eget</a></h3>
													<div class="price-box">
														<span class="main-price">$89.00</span>
														<span class="discounted-price">$80.00</span>
													</div>
												</div>
											</div>
										</div>
									</div>
							</div>
						</div>
						=======  End of single best seller product  =======

						=======  single best seller product  =======
						<div class="col">
							<div class="single-best-seller-item">
								<div class="best-seller-sub-product">
									<div class="row">
										<div class="col-lg-4 pl-0 pr-0">
											<div class="image">
												<a href="single-product.html">
													<img src="<?php echo base_url() ?>/assets/images/products/product07.jpg" class="img-fluid" alt="">
												</a>
											</div>
										</div>
										<div class="col-lg-8 pl-0 pr-0">
											<div class="product-content">
												<div class="product-categories">
													<a href="shop-left-sidebar.html">Fast Foods</a>,
													<a href="shop-left-sidebar.html">Vegetables</a>
												</div>
												<h3 class="product-title"><a href="single-product.html">Sed tempor ehicula non commodo</a></h3>
												<div class="price-box">
													<span class="main-price">$89.00</span>
													<span class="discounted-price">$80.00</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="best-seller-sub-product">
										<div class="row">
											<div class="col-lg-4 pl-0 pr-0">
												<div class="image">
													<a href="single-product.html">
														<img src="<?php echo base_url() ?>/assets/images/products/product08.jpg" class="img-fluid" alt="">
													</a>
												</div>
											</div>
											<div class="col-lg-8 pl-0 pr-0">
												<div class="product-content">
													<div class="product-categories">
														<a href="shop-left-sidebar.html">Fast Foods</a>,
														<a href="shop-left-sidebar.html">Vegetables</a>
													</div>
													<h3 class="product-title"><a href="single-product.html">Ornare sed consequat nisl eget</a></h3>
													<div class="price-box">
														<span class="main-price">$89.00</span>
														<span class="discounted-price">$80.00</span>
													</div>
												</div>
											</div>
										</div>
									</div>
							</div>
						</div>
						=======  End of single best seller product  =======

						=======  single best seller product  =======
						<div class="col">
							<div class="single-best-seller-item">
								<div class="best-seller-sub-product">
									<div class="row">
										<div class="col-lg-4 pl-0 pr-0">
											<div class="image">
												<a href="single-product.html">
													<img src="<?php echo base_url() ?>/assets/images/products/product09.jpg" class="img-fluid" alt="">
												</a>
											</div>
										</div>
										<div class="col-lg-8 pl-0 pr-0">
											<div class="product-content">
												<div class="product-categories">
													<a href="shop-left-sidebar.html">Fast Foods</a>,
													<a href="shop-left-sidebar.html">Vegetables</a>
												</div>
												<h3 class="product-title"><a href="single-product.html">Sed tempor ehicula non commodo</a></h3>
												<div class="price-box">
													<span class="main-price">$89.00</span>
													<span class="discounted-price">$80.00</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="best-seller-sub-product">
										<div class="row">
											<div class="col-lg-4 pl-0 pr-0">
												<div class="image">
													<a href="single-product.html">
														<img src="<?php echo base_url() ?>/assets/images/products/product10.jpg" class="img-fluid" alt="">
													</a>
												</div>
											</div>
											<div class="col-lg-8 pl-0 pr-0">
												<div class="product-content">
													<div class="product-categories">
														<a href="shop-left-sidebar.html">Fast Foods</a>,
														<a href="shop-left-sidebar.html">Vegetables</a>
													</div>
													<h3 class="product-title"><a href="single-product.html">Ornare sed consequat nisl eget</a></h3>
													<div class="price-box">
														<span class="main-price">$89.00</span>
														<span class="discounted-price">$80.00</span>
													</div>
												</div>
											</div>
										</div>
									</div>
							</div>
						</div>
						=======  End of single best seller product  =======

						=======  single best seller product  =======
						<div class="col">
							<div class="single-best-seller-item">
								<div class="best-seller-sub-product">
									<div class="row">
										<div class="col-lg-4 pl-0 pr-0">
											<div class="image">
												<a href="single-product.html">
													<img src="<?php echo base_url() ?>/assets/images/products/product11.jpg" class="img-fluid" alt="">
												</a>
											</div>
										</div>
										<div class="col-lg-8 pl-0 pr-0">
											<div class="product-content">
												<div class="product-categories">
													<a href="shop-left-sidebar.html">Fast Foods</a>,
													<a href="shop-left-sidebar.html">Vegetables</a>
												</div>
												<h3 class="product-title"><a href="single-product.html">Sed tempor ehicula non commodo</a></h3>
												<div class="price-box">
													<span class="main-price">$89.00</span>
													<span class="discounted-price">$80.00</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="best-seller-sub-product">
										<div class="row">
											<div class="col-lg-4 pl-0 pr-0">
												<div class="image">
													<a href="single-product.html">
														<img src="<?php echo base_url() ?>/assets/images/products/product12.jpg" class="img-fluid" alt="">
													</a>
												</div>
											</div>
											<div class="col-lg-8 pl-0 pr-0">
												<div class="product-content">
													<div class="product-categories">
														<a href="shop-left-sidebar.html">Fast Foods</a>,
														<a href="shop-left-sidebar.html">Vegetables</a>
													</div>
													<h3 class="product-title"><a href="single-product.html">Ornare sed consequat nisl eget</a></h3>
													<div class="price-box">
														<span class="main-price">$89.00</span>
														<span class="discounted-price">$80.00</span>
													</div>
												</div>
											</div>
										</div>
									</div>
							</div>
						</div>
						=======  End of single best seller product  =======

					</div>
					
					=======  End of best seller slider container  =======
				</div>
			</div>
		</div>
	</div>-->
	
	<!--=====  End of Best seller slider  ======-->

	<!--=============================================
	=            Blog post slider container         =
	=============================================-->
	
	<div class="slider blog-slider mb-35">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!--=======  blog slider section title  =======-->
					
					<div class="section-title">
						<h3>BLOGS</h3>
					</div>
					
					<!--=======  End of blog slider section title  =======-->
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<!--=======  blog slide container  =======-->
					
					<div class="blog-slider-container pt-30 pb-30 pr-30 pl-30">

							<!--=======  single blog post  =======-->
                                                         <?php if ($hinglish){ ?>
                                                                         <?php foreach ($hinglish as $each){ ?>
                                                        
							<div class="col">
                                                            
                                                           
								<div class="single-post-wrapper">
                                                                    
                                                                     
									<div class="post-thumb">
										<a href="<?php echo site_url("blogdetail",'id=' .$each->blogId) ?>">
											 <img style="width:100%;height:200px;" src="<?php echo base_url('public/images/blog/' . $each->blog_image); ?>" alt="">
										</a>
									</div>
									<div class="post-info">
										<div class="post-meta">
											<div class="post-date"><?php echo date('d-m-Y', strtotime($each->createdDate)); ?></div>
										</div>
                                                                            
                                                                             <?php if($each->status == 0) { ?>

                                                                            <a href="<?php echo site_url("blogdetail",'id=' .$each->blogId) ?>"><b><?php echo $each->blogTitleHindi; ?></b></a>
                              

                                                                             <?php } else if($each->status == 1) { ?>

                      

                                                                               <a href="<?php echo site_url("blogdetail",'id=' .$each->blogId) ?>"><b><?php echo $each->blogTitleEnglish ?></b></a>
                                

                                                                                 <?php } else if($each->status == 2) {?>

                            

                                                                               <a href="<?php echo site_url("blogdetail",'id=' .$each->blogId) ?>"><b><?php echo $each->blogTitleEnglish ?></b></a>
                                

                                                                                <?php }else{ ?>
                                
                                
                                                                                  <a href="">Blog</a>
                                                                                <p>Description</p>
                                                                                <?php } ?>
                                                                            <br>
										<!--<h3 class="post-title"><a href="<?php echo base_url() ?>/blog-post-image-format.html"><?php echo $each->blogTitleEnglish; ?><br><?php echo substr($each->blogTitleHindi,0,100); ?></a></h3>-->
										<a href="<?php echo site_url("blogdetail",'id=' .$each->blogId) ?>" class="readmore-btn">continue <i class="fa fa-arrow-right"></i></a>
									</div>
                                                                    
								</div>
                                                           
							</div>
							 <?php }}?>
							
							<!--=======  End of single blog post  =======-->

							<!--=======  single blog post  =======-->
<!--							<div class="col">
								<div class="single-post-wrapper">
									<div class="post-thumb">
										<a href="blog-post-image-gallery.html">
											<img src="<?php echo base_url() ?>/assets/images/blog-image/blog02.jpg" class="img-fluid" alt="">
										</a>
									</div>
									<div class="post-info">
										<div class="post-meta">
											<div class="post-date">29.09.2018</div>
										</div>
										<h3 class="post-title"><a href="blog-post-image-gallery.html">Post with gallery</a></h3>
										<a href="blog-post-image-gallery.html" class="readmore-btn">continue <i class="fa fa-arrow-right"></i></a>
									</div>
								</div>
							</div>
							-->
							<!--=======  End of single blog post  =======-->

							<!--=======  single blog post  =======-->
<!--							<div class="col">
								<div class="single-post-wrapper">
									<div class="post-thumb">
										<a href="blog-post-audio-format.html">
											<img src="<?php echo base_url() ?>/assets/images/blog-image/blog03.jpg" class="img-fluid" alt="">
										</a>
									</div>
									<div class="post-info">
										<div class="post-meta">
											<div class="post-date">29.09.2018</div>
										</div>
										<h3 class="post-title"><a href="blog-post-audio-format.html">Blog with audio</a></h3>
										<a href="blog-post-audio-format.html" class="readmore-btn">continue <i class="fa fa-arrow-right"></i></a>
									</div>
								</div>
							</div>-->
							
							<!--=======  End of single blog post  =======-->

							<!--=======  single blog post  =======-->
<!--							<div class="col">
								<div class="single-post-wrapper">
									<div class="post-thumb">
										<a href="blog-post-video-format.html">
											<img src="<?php echo base_url() ?>/assets/images/blog-image/blog04.jpg" class="img-fluid" alt="">
										</a>
									</div>
									<div class="post-info">
										<div class="post-meta">
											<div class="post-date">29.09.2018</div>
										</div>
										<h3 class="post-title"><a href="blog-post-video-format.html">Blog with video</a></h3>
										<a href="blog-post-video-format.html" class="readmore-btn">continue <i class="fa fa-arrow-right"></i></a>
									</div>
								</div>
							</div>-->
							
							<!--=======  End of single blog post  =======-->

					</div>
					
					<!--=======  End of blog slide container  =======-->
				</div>
			</div>
		</div>
	</div>
	
	<!--=====  End of Blog post slider  ======-->


	<!--=============================================
	=            Brand logo slider         =
	=============================================-->
	
	<div class="slider brand-logo-slider mb-35">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!--=======  blog slider section title  =======-->
					
					<div class="section-title">
						<h3>brand logos</h3>
					</div>
					
					<!--=======  End of blog slider section title  =======-->
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<!--=======  brand logo wrapper  =======-->
					
					<div class="brand-logo-wrapper pt-20 pb-20">

						<!--=======  single-brand-logo  =======-->
 <?php 
                                                if($brands){
                                                    
                                                    foreach ($brands as $each){                                               
                                               ?>
						
                                                <div class="col">
							<div class="single-brand-logo">
								<a href="<?php echo base_url() ?>/#">
                                                                    <?php if (!empty($each->brandImage)) {
                                                                        ?>
                                                    <img src="<?php echo base_url('public/images/' . $each->brandImage); ?>" class="img-responsive img-rounded"   alt="<?php echo $each->brandName; ?>">
                                                    <?php
                                                } else {
                                                    ?>
                                                    <img src="<?php echo base_url('public/admin/images/NoImage.jpg'); ?>" class="img-responsive img-rounded"  alt="<?php echo $each->brandName; ?>">

                                                    <?php
                                                }
                                                ?>
                                                                    
                                                                    
                                                                    
									<!--<img src="<?php echo base_url() ?>/assets/images/brands/brand1.png" class="img-fluid" alt="">-->
								</a>
							</div>
						</div>
						
                                                <?php  
                                                    }
                                                    
                                                }
                                                ?>
                                                
						
						<!--=======  End of single-brand-logo  =======-->
						<!--=======  single-brand-logo  =======-->

<!--						<div class="col">
							<div class="single-brand-logo">
								<a href="#">
									<img src="<?php echo base_url() ?>/assets/images/brands/brand2.png" class="img-fluid" alt="">
								</a>
							</div>
						</div>
						-->
						<!--=======  End of single-brand-logo  =======-->
						<!--=======  single-brand-logo  =======-->

<!--						<div class="col">
							<div class="single-brand-logo">
								<a href="#">
									<img src="<?php echo base_url() ?>/assets/images/brands/brand3.png" class="img-fluid" alt="">
								</a>
							</div>
						</div>
						
						=======  End of single-brand-logo  =======
						=======  single-brand-logo  =======

						<div class="col">
							<div class="single-brand-logo">
								<a href="#">
									<img src="<?php echo base_url() ?>/assets/images/brands/brand4.png" class="img-fluid" alt="">
								</a>
							</div>
						</div>
						
						=======  End of single-brand-logo  =======
						=======  single-brand-logo  =======

						<div class="col">
							<div class="single-brand-logo">
								<a href="#">
									<img src="<?php echo base_url() ?>/assets/images/brands/brand5.png" class="img-fluid" alt="">
								</a>
							</div>
						</div>
						
						=======  End of single-brand-logo  =======
						=======  single-brand-logo  =======

						<div class="col">
							<div class="single-brand-logo">
								<a href="#">
									<img src="<?php echo base_url() ?>/assets/images/brands/brand6.png" class="img-fluid" alt="">
								</a>
							</div>
						</div>-->
						
						<!--=======  End of single-brand-logo  =======-->
					</div>
					
					<!--=======  End of brand logo wrapper  =======-->
				</div>
			</div>
		</div>
	</div>
	
	<!--=====  End of Brand logo slider  ======-->

<?php $this->load->view('front/home/addtocartjs'); ?>

<script type="text/javascript">
    
    $(document).ready(function(){
        
        
         if ($("[id^='addcomboCart_']").length > 0)
            $("[id^='addcomboCart_']").click(function () {
                var id = $(this).attr('id').split('_')[1];
        
            var product_id    = $('#pcid_' + id).val();
            var product_name  = $('#pcname_' + id).val();
            var product_price = $('#pcprice_'+ id ).val();
            var product_qty = $('#pcqty_'+ id ).val();
//            alert(product_name);
           
            $.ajax({
                url: '<?php echo site_url('front/foodzoon/add_to_cart'); ?>',
                method : "POST",
                data : {product_id: product_id, product_name: product_name, product_price: product_price ,product_qty:product_qty },
                success: function(msg){
                    $('.ajaxpagecard').html(msg);
                    
                }
            });
        });
 
         
      
        
        
         
      
      
 
         
       
    });
</script>	