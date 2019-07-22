<?php $comboproductreview ;
                                
       $count = count($comboproductreview);
      
       $productimagesdata ;  
    
  ?>
    
    <div class="breadcrumb-area mb-50">
        
    </div>
 
    
    <div class="single-product-content ">
        <div class="container">
            
            <div class="single-product-content-container mb-35">
                <div class="row">
                    <?php if ($comboproductdata){ ?>
                                 
                                  
                    
                    <div class="col-lg-6 col-md-12 col-xs-12"> 

                        
                                    <!-- product image gallery -->
                             <div class="product-image-slider d-flex flex-custom-xs-wrap flex-sm-nowrap align-items-center mb-sm-35">
                                        <!--Modal Tab Menu Start-->
                                         
                                        <div class="product-small-image-list"> 
                                           
                                            <div class="nav small-image-slider-single-product" role="tablist">
                                     
                                           <?php      
                                             foreach ($productimagesdata as $each){

                                                           $id =  $each->hsnCode_id;  
                                                           $product = $this->food->getProduct($id);
                                            ?>
                                                
                                            <div class="single-small-image img-full">
                                                
                                                <a data-toggle="tab" id="single-slide-tab-1" href="#single-slide1"><img src="<?php echo base_url('public/images/' . $product->productImage); ?>"
                                                 class="img-fluid" alt="" style="width:90px;height:80px;"   ></a>
                                            </div>
                                                
                                             
                                            <div class="single-small-image img-full">
                                                <a data-toggle="tab" id="single-slide-tab-2" href="#single-slide2"><img src="<?php echo base_url('public/images/comboproduct/' . $comboproductdata->image); ?>"
                                                    class="img-fluid" alt=""></a>
                                            </div>
                                            
                                           
                                               <?php } ?> 
                                            </div>
                                           
                                        </div>
                                      
                                           <!--Modal Tab Menu End-->

                                        <!--Modal Tab Content Start-->
                                  <div class="tab-content product-large-image-list">
                                             <div class="tab-pane fade show active" id="single-slide1" role="tabpanel" aria-labelledby="single-slide-tab-1">
                                              
                                                <div class="single-product-img easyzoom img-full">
                                                    <!--<img src="<?php echo base_url() ?>/assets/images/big-product-image/product04.jpg" class="img-fluid" alt="">-->
                                                    <img src="<?php echo base_url('public/images/comboproduct/' . $comboproductdata->image); ?>" style="width:400px;height:350px;" class="img-responsive img-rounded" alt="">
                                                    <a href="<?php echo base_url('public/images/comboproduct/' . $comboproductdata->image); ?>" class="big-image-popup"><i class="fa fa-search-plus"></i></a>
                                                </div>
                                              
                                            </div>
                                      
                                      
                                            <div class="tab-pane fade" id="single-slide2" role="tabpanel" aria-labelledby="single-slide-tab-2">
                                               
                                                <div class="single-product-img easyzoom img-full">
                                                    <img src="<?php echo base_url('public/images/' . $product->productImage); ?>" style="width:400px;height:350px;" class="img-fluid" alt="">
                                                    <a href="<?php echo base_url('public/images/' . $product->productImage); ?>" class="big-image-popup"><i class="fa fa-search-plus"></i></a>
                                                </div>
                                                
                                            </div>
-->                                           
<!--                                            <div class="tab-pane fade" id="single-slide4" role="tabpanel" aria-labelledby="single-slide-tab-4">
                                                Single Product Image Start
                                                <div class="single-product-img easyzoom img-full">
                                                    <img src="<?php echo base_url() ?>/assets/images/big-product-image/product07.jpg" class="img-fluid" alt="">
                                                    <a href="<?php echo base_url() ?>/assets/images/big-product-image/product07.jpg" class="big-image-popup"><i class="fa fa-search-plus"></i></a>
                                                </div>
                                            </div>-->

                                   </div>
                                        

                             </div>
                                   
                    </div>
                    <div class="col-lg-6 col-md-12 col-xs-12">
                                    
                                    <div class="product-feature-details">
                                        <h2 class="product-title mb-15"><?php echo $comboproductdata->combo_name; ?></h2>

                                        <p class="product-rating">
                                            <?php
                                               $r  = $comboproductdata->rating ;
                                                    for($i= 1; $i<=$r; $i++){ ?>
                                                     
                                                 <i class="fa fa-star active"></i>
                                                    
                                                    <?php } ?>

                                            <a href="#">(<?php  echo $count ; ?> customer review)</a>
                                        </p>
                                        
                                        <h2 class="product-price mb-15"> 
                                            <!--<span class="main-price">$12.90</span>--> 
                                            <span class="discounted-price"> <?php echo $comboproductdata->taotalammount ; ?> ₹</span>
                                        </h2>
                                        
                                        <p class="product-description mb-20"><?php echo substr($comboproductdata->comboDescription, 0, 200); ?></p>
                                        
                                        
                                        <div class="cart-buttons mb-20">
                                            <input type="hidden" name="p_id"  id="pid_<?php echo $comboproductdata->com_id ?>" class="form-control" value="<?php echo $comboproductdata->com_id; ?>"  placeholder="E">
                                            <input type="hidden" name="p_name"  id="pname_<?php echo $comboproductdata->com_id ?>" class="form-control" value="<?php echo $comboproductdata->combo_name; ?>"  placeholder="E">
                                            <input type="hidden" name="p_price" id="pprice_<?php echo $comboproductdata->com_id ?>" class="form-control" value="<?php echo $comboproductdata->taotalammount; ?>" placeholder="E">
                                            <input type="hidden" name="p_qty" id="pqty_<?php echo $comboproductdata->com_id ?>" class="form-control" value="1" placeholder="E">                                                      
                                            <div class="pro-qty mr-20 mb-xs-20">
                                                <input type="text" value="1">
                                            </div>
                                           
                                             <div class="add-to-cart-btn">
                                                <a  id="addCart_<?php echo $comboproductdata->com_id ?>" ><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                                             </div>
                                        </div>

                                        <div class="single-product-action-btn mb-20">
                                            <a href="<?php echo site_url("wishlist") ?>" id="addWishlist_<?php echo $comboproductdata->com_id ?>" data-tooltip="Add to wishlist"> <span class="icon_heart_alt"></span> Add to wishlist</a>

                                        </div>


<!--                                        <div class="single-product-category mb-20">
                                            <h3>Categories: <span><a href="#"></a> <a href="#">Vegetables</a></span></h3>
                                        </div>-->
                                        
                                        
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
                        </div>
                    
                                         <div>

                                                <div class="row">
                               
                                                   <div class="col-md-12">
                                             
                                                        
                                                       <?php
                                                        if ($productimagesdata){
                                                            ?> 
                                                            <?php
                                                           
                                                            foreach ($productimagesdata as $each){
                                                                
                                                                $id =  $each->hsnCode_id;  
                                                                $product = $this->food->getProduct($id);
                                                         
                                                                ?>
<!--                                                                <div>
                                                                    <a data-toggle="tab" id="single-slide-tab-1" href="#single-slide1"><img src="<?php echo base_url('public/images/' . $product->productImage); ?>"
                                                                     class="img-fluid" alt="" style="width:90px;height:80px;"   ></a>
                                                                </div>-->
                                                

                                                                <div class="food-img col-xs-12 col-sm-6 col-md-3 col-lg-3" style="display:inline-block; padding: 20px;">
                                                                    <span  class="description-text"><img src="<?php echo base_url('public/images/' . $product->productImage); ?>"
                                                                        class="img-fluid" alt="" style="width:90px; height:80px; "   > 
                                                                        <b><br><center><?php echo $each->productName ; ?></b> <b><br><?php echo $each->quantity ; ?> qty.</b></center> </h3></span><br><br>

                                                                </div>
                                                
                                                               
<!--                                                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                                                    <span  class="description-text">Customer Name: &nbsp;<b><?php echo $each->quantity ; ?></b></h3></span><br><br>

                                                                </div>-->
                                                        
                                                        <?php
                                                            }
                                                        }
                                                           ?>
                                                        

                                                   </div>
                                            </div>
                                       
                                    </div>
                    
                    
                    <?php } ?>
                   </div>
               </div>              
          </div>
     </div>
                
                <!--=====  End of single product content  ======-->

   
    <div class="single-product-tab-section mb-35">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-slider-wrapper">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab"
                                aria-selected="true">Description</a>
                                <a class="nav-item nav-link" id="features-tab" data-toggle="tab" href="#features" role="tab"
                                aria-selected="false">Features</a>
                                <a class="nav-item nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab"
                                aria-selected="false">Reviews (<?php  echo $count ; ?>)</a>
                            </div>
                        </nav>
                       
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                                <p class="product-desc"><?php echo $comboproductdata->comboDescription; ?></p>
                            </div>
                            <div class="tab-pane fade" id="features" role="tabpanel" aria-labelledby="features-tab">
                                <table class="table-data-sheet">
                                    <tbody>
                                        <tr class="odd">

                                            <td>Name</td>
                                            <td><?php echo $comboproductdata->combo_name; ?></td>
                                       
                                        </tr>
                                        <tr class="even">

                                            <td>Quality</td>
                                            <td>Best Quality</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                                <div class="product-ratting-wrap">
<!--                                    <div class="pro-avg-ratting">
                                        <h4>4.5 <span>(Overall)</span></h4>
                                        <span>Based on 9 Comments</span>
                                    </div>-->
<!--                                    <div class="ratting-list">
                                        <div class="sin-list float-left">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span>(5)</span>
                                        </div>
                                        <div class="sin-list float-left">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <span>(3)</span>
                                        </div>
                                        <div class="sin-list float-left">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <span>(1)</span>
                                        </div>
                                        <div class="sin-list float-left">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <span>(0)</span>
                                        </div>
                                        <div class="sin-list float-left">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <span>(0)</span>
                                        </div>
                                    </div>-->
                                    <div class="rattings-wrapper">
                                   <?php 
                                        
                                       if($comboproductreview){
                                   
                                       foreach($comboproductreview as $each){    
                                        
                                     ?>
                                        <div class="sin-rattings">
                                            <div class="ratting-author">
                                                <h3><?php echo $each->review_name ; ?></h3>
                                                <div class="ratting-star">
                                                     <?php 
                                                          $r  = $each->rating ;
                                                    for($i= 1; $i<=$r; $i++){ ?>
                                                     
                                                    <i class="fa fa-star active" style="color:#f39c12" ></i>
                                                    
                                                    <?php } ?>

                                                    <span>(<?php echo $each->rating ; ?>)</span>
                                                </div>
                                            </div>
                                            <p><?php echo $each->review ; ?></p>
                                        </div>

                                        
                                        
                                   <?php } }  ?>


                                    </div>
                                    <div class="ratting-form-wrapper fix">
                                        <h3>Add your Comments</h3>
                                        <!--<form action="#">-->
                                        <form action="<?php echo site_url("single-comboproduct",'id='.$comboproductdata->com_id) ?>" method="post" >
                                            <div class="ratting-form row">
                                                <div class="col-12 mb-15">
                                                    <h5>Rating:</h5>
                                                    
                                                    <div class="ratting-star fix">
                                                        <link rel="stylesheet" href="<?php echo base_url('public/admin/css/rating/before_rate.css'); ?>">

                                                        <input type="hidden" id="feedBack_rate_driver" name="quick_rating" value="">

                                                        <fieldset class="rating">


                                                            <link rel="stylesheet" href="<?php echo base_url('public/admin/css/rating/before_rate.css'); ?>">


                                                            <input type="radio" id="5star" name="rating" value="5" />
                                                            <label class="full" for="5star" title="Excellent"></label>

                                                            <input type="radio" id="4star" name="rating" value="4" />
                                                            <label class="full" for="4star" title="Pretty Good"></label>

                                                            <input type="radio" id="3star" name="rating" value="3" />
                                                            <label class="full" for="3star" title="Ok"></label>

                                                            <input type="radio" id="2star" name="rating" value="2" />
                                                            <label class="full" for="2star" title="Bad"></label>
                                                           
                                                            <input type="radio" id="1star" name="rating" value="1" />
                                                            <label class="full" for="1star" title="Worst"></label>

<!--                                                            <input type="radio" id="halfstar" name="rating" value="0.5" />
                                                            <label class="half" for="halfstar" title="Worst"></label>-->

                                                        </fieldset>
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-md-6 col-12 mb-15">
                                                    <label for="name">Name:</label>
                                                    <input id="name" placeholder="Name" name="Rname" type="text">
                                                </div>
                                                <div class="col-md-6 col-12 mb-15">
                                                    <label for="email">Email:</label>
                                                    <input id="email" placeholder="Email" name="remail" type="email">
                                                </div>
                                                <div class="col-12 mb-15">
                                                    <label for="your-review">Your Review:</label>
                                                    <textarea name="review" id="your-review"
                                                    placeholder="Write a review"></textarea>
                                                </div>
                                                <div class="col-12">
                                                    <input value="add review" type="submit">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--=====  End of single product tab  ======-->
    
    <!--=============================================
	=            Related Product slider         =
	=============================================-->
	
<!--	<div class="slider related-product-slider mb-35">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                   
                    
                    <div class="section-title">
                        <h3>Related Product</h3>
                    </div>
                    
                   
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    =======  related product slider wrapper  =======
                    
                    <div class="related-product-slider-wrapper">
                        =======  single related slider product  =======
                        <?php if ($product){ ?>
                                       <?php
                            
                          foreach ($product as $each){
                                   ?>
                        <div class="gf-product related-slider-product">
                            <div class="image">
                                <a href="<?php echo site_url("single-product",'id=' .$each->productId) ?>">
                                    <span class="onsale">Sale!</span>

                                     <img src="<?php echo base_url('public/images/' . $each->productImage); ?>" style="width:265px; height:255px; " class="img-responsive img-rounded" alt="">
                                </a>
                                <div class="product-hover-icons">
                                    
                                      <input type="hidden" name="p_id"  id="productid_<?php echo $each->productId ?>" class="form-control" value="<?php echo $productdata->productId; ?>"  placeholder="E">
                                      <input type="hidden" name="p_name"  id="productname_<?php echo $each->productId ?>" class="form-control" value="<?php echo $productdata->productName; ?>"  placeholder="E">
                                      <input type="hidden" name="p_price" id="productprice_<?php echo $each->productId ?>" class="form-control" value="<?php echo $productdata->price; ?>" placeholder="E">
                                         <input type="hidden" name="p_qty" id="pqty_<?php echo $productdata->productId ?>" class="form-control" value="1" placeholder="E">                                                      
                                    
                                    
                                    <a href="<?php echo site_url("cart") ?>"  id="addbyupsellCart_<?php echo $each->productId ?>" data-tooltip="Add to cart"> <span class="icon_cart_alt"></span></a>
                                    <a href="<?php echo site_url("wishlist") ?>" id="addbyupsellWishlist_<?php echo $each->productId ?>" data-tooltip="Add to wishlist"> <span class="icon_heart_alt"></span> </a>
                                    <a href="#" data-tooltip="Compare"> <span class="arrow_left-right_alt"></span> </a>
                                    <a href="#" data-tooltip="Quick view" data-toggle = "modal" data-target="#quick-view-modal-container"> <span class="icon_search"></span> </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-categories">
                                    <a href="<?php echo base_url() ?>/shop-left-sidebar.html">Fast Foods</a>,
                                    <a href="<?php echo base_url() ?>/shop-left-sidebar.html">Vegetables</a>
                                </div>
                                <h3 class="product-title"><a href="<?php echo site_url("single-product",'id=' .$each->productId) ?>"><?php echo $each->productName; ?></a></h3>
                                <div class="price-box">
                                    <span class="main-price">$89.00</span>
                                    <span class="discounted-price"><?php echo $each->price; ?></span>
                                </div>
                            </div>
                            
                        </div>
                        <?php } } ?>
                        =======  End of single related slider product  =======
                       
                      
                      
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    -->
    <!--=====  End of Related product slider  ======-->	
    
    
    
<?php $this->load->view('front/home/addtocartjs'); ?>
<!--<script type="text/javascript">
    
    $(document).ready(function(){
        
        
         if ($("[id^='addCart_']").length > 0)
            $("[id^='addCart_']").click(function () {
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
//                    alert(msg);
                    
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
</script>-->