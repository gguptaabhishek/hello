<div class="row">
						<div class="col-lg-5 col-md-6 col-xs-12">
							<!-- product quickview image gallery -->
							<div class="product-image-slider">
								<!--Modal Tab Content Start-->
								<div class="tab-content product-large-image-list" id="myTabContent">
									
                                                                        <div class="tab-pane fade show active" id="single-slide1" role="tabpanel" aria-labelledby="single-slide-tab-1">
										<!--Single Product Image Start-->
										<div class="single-product-img img-full">
                                                                                    <img src="<?php echo base_url() ?>/public/images/<?php echo $data->productImage; ?>"  style=" height: 300px; width:400px;  " class="img-fluid" alt="">
										</div>
										<!--Single Product Image End-->
									</div>
<!--									<div class="tab-pane fade" id="single-slide2" role="tabpanel" aria-labelledby="single-slide-tab-2">
										Single Product Image Start
										<div class="single-product-img img-full">
											<img src="<?php echo base_url() ?>/assets/images/products/product02.jpg" class="img-fluid" alt="">
										</div>
										Single Product Image End
									</div>
									<div class="tab-pane fade" id="single-slide3" role="tabpanel" aria-labelledby="single-slide-tab-3">
										Single Product Image Start
										<div class="single-product-img img-full">
											<img src="<?php echo base_url() ?>/assets/images/products/product03.jpg" class="img-fluid" alt="">
										</div>
										Single Product Image End
									</div>
									<div class="tab-pane fade" id="single-slide4" role="tabpanel" aria-labelledby="single-slide-tab-4">
										Single Product Image Start
										<div class="single-product-img img-full">
											<img src="<?php echo base_url() ?>/assets/images/products/product04.jpg" class="img-fluid" alt="">
										</div>
										Single Product Image End
									</div>-->
								</div>
								<!--Modal Content End-->
								<!--Modal Tab Menu Start-->
								<div class="product-small-image-list"> 
									<div class="nav small-image-slider" role="tablist">
<!--										<div class="single-small-image img-full">
											<a data-toggle="tab" id="single-slide-tab-1" href="#single-slide1"><img src="<?php echo base_url() ?>/assets/images/products/product01.jpg"
												class="img-fluid" alt=""></a>
										</div>
										<div class="single-small-image img-full">
											<a data-toggle="tab" id="single-slide-tab-2" href="#single-slide2"><img src="<?php echo base_url() ?>/assets/images/products/product02.jpg"
												class="img-fluid" alt=""></a>
										</div>
										<div class="single-small-image img-full">
											<a data-toggle="tab" id="single-slide-tab-3" href="#single-slide3"><img src="<?php echo base_url() ?>/assets/images/products/product03.jpg"
												class="img-fluid" alt=""></a>
										</div>
										<div class="single-small-image img-full">
											<a data-toggle="tab" id="single-slide-tab-4" href="#single-slide4"><img src="<?php echo base_url() ?>/assets/images/products/product04.jpg"
												alt=""></a>
										</div>-->
									</div>
								</div>
								<!--Modal Tab Menu End-->
							</div>
							<!-- end of product quickview image gallery -->
						</div>
                                             <?php // if ($productdata){ ?>

                                            <div class="col-lg-7 col-md-6 col-xs-12">
							<!-- product quick view description -->
							<div class="product-feature-details">
                                                            <h2 class="product-title mb-15"><?php echo $data->productName ?></h2>

								<h2 class="product-price mb-15"> 
									<!--<span class="main-price">$12.90</span>--> 
									<span class="discounted-price"> <?php echo $data->price ?> ₹</span>
								</h2>

								<p class="product-description mb-20"><?php echo $data->productDescription ?></p>
								

								<div class="cart-buttons mb-20">
									<div class="pro-qty mr-10">
										<input type="text"  value="1">
									</div>
									<div class="add-to-cart-btn">
                                                                            <input type="hidden" name="p_id"  id="pid_<?php echo $data->productId ?>" class="form-control" value="<?php echo $data->productId; ?>"  placeholder="E">
                                                                            <input type="hidden" name="p_name"  id="pname_<?php echo $data->productId ?>" class="form-control" value="<?php echo $data->productName; ?>"  placeholder="E">
                                                                            <input type="hidden" name="p_price" id="pprice_<?php echo $data->productId ?>" class="form-control" value="<?php echo $data->price; ?>" placeholder="E">
                                                                            <input type="hidden" name="p_qty" id="pqty_<?php echo $data->productId ?>" class="form-control" value="1" placeholder="E">       

                                                                            
                                                                            <!--<a id="addCart_<?php // echo $data->productId ?>" data-tooltip="Add to cart"> <span class="icon_cart_alt"></span></a>-->
										<a id="addCart_<?php echo $data->productId ?>" ><i class="fa fa-shopping-cart"></i> Add to Cart</a>
									</div>
								</div>

						
								<div class="social-share-buttons">
									<h3>share this product</h3>
									<ul>
										<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
										<li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
									</ul>
								</div>
							</div>
							<!-- end of product quick view description -->
						</div>
                                            <?php // } ?>
					</div>
<script type="text/javascript">
    
    $(document).ready(function(){
        
        
         if ($("[id^='addCart_']").length > 0)
            $("[id^='addCart_']").click(function () {
//                window.location.reload(false);
                var id = $(this).attr('id').split('_')[1];
        
            var product_id    = $('#pid_' + id).val();
            var product_name  = $('#pname_' + id).val();
            var product_price = $('#pprice_'+ id ).val();
            var product_qty = $('#pqty_'+ id ).val();
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
 
         
      
      if ($("[id^='addWishlist_']").length > 0)
            $("[id^='addWishlist_']").click(function () {
                var id = $(this).attr('id').split('_')[1];
        
            var product_id    = $('#pid_' + id).val();
            var product_name  = $('#pname_' + id).val();
            var product_price = $('#pprice_'+ id ).val();
//            alert(product_name);
           
            $.ajax({
                url: '<?php echo site_url('front/foodzoon/add_to_wishlist'); ?>',
                method : "POST",
                data : {product_id: product_id, product_name: product_name, product_price: product_price  },
                success: function(msg){
//                    alert(msg);
                    
                }
            });
        });
 
      
      
 
         
       
    });
</script>