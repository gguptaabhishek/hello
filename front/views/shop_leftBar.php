<div class="col-lg-3 order-2 order-lg-1">
    <!--=======  sidebar area  =======-->

    <div class="sidebar-area">
        <!--=======  single sidebar  =======-->

        <div class="sidebar mb-35">
            <h3 class="sidebar-title">PRODUCT CATEGORIES</h3>
            <ul class="product-categories">

                <?php
                if ($category) {

                    foreach ($category as $each) {
                        ?>

                        <li><a  href="<?php echo site_url("shop", 'catID=' . $each->categoryId) ?>"><?php echo $each->categoryName; ?></a></li>

                        <?php
                    }
                }
                ?>



            </ul>
        </div>

        <!--=======  End of single sidebar  =======-->

        <!--=======  single sidebar  =======-->

        <div class="sidebar mb-35">
            <h3 class="sidebar-title">Filter By Subcategories</h3>
            <ul class="product-categories">
                <?php
                if ($subCategory) {

                    foreach ($subCategory as $each) {
                        ?>


                <!--								<li><a class="active" href="<?php echo base_url() ?>/shop-left-sidebar.html">Gold</a></li>-->
                        <li><a  href="<?php echo site_url("shop", 'subID=' . $each->subcategory_id) ?>"><?php echo $each->subcategory_name; ?></a></li>

                        <?php
                    }
                }
                ?>
            </ul>
        </div>

        <!--=======  End of single sidebar  =======-->

        <!--=======  single sidebar  =======-->

        <div class="sidebar mb-35">
            <h3 class="sidebar-title">Filter By Price</h3>
           <form action="<?php echo site_url('shop'); ?>" method="get">
            <div class="sidebar-price">
                <div id="price-range"></div>
                <input type="text" id="price-amount" name="pricebyserch" class="pricevalue" readonly>
                <input type="submit" id="" class="btn btn-primary" style="background-color:#99cc00  ; border: none;" value="Search">
            </div>
           </form>
        </div>

        <!--=======  End of single sidebar  =======-->



        <!--=======  single sidebar  =======-->

        <div class="sidebar mb-35">
            <h3 class="sidebar-title">Top rated products</h3>

            <!--=======  top rated product container  =======-->

            <div class="top-rated-product-container">
                <!--=======  single top rated product  =======-->
                    <?php if($productbyrating){
                       
                        foreach ($productbyrating as $each){
                        
                     ?>
                <div class="single-top-rated-product d-flex align-content-center">
                    
                    
                    <div class="image">
                        <a href="<?php echo site_url("single-product",'id=' .$each->productId) ?>">
                            
                            <img src="<?php echo base_url('public/images/' . $each->productImage); ?>" style="width:100px;height:70px;" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="content">
                        <p><a href="<?php echo site_url("single-product",'id=' .$each->productId) ?>"><?php echo $each->productName; ?></a></p>
                        <p class="product-rating">
                            
                             <?php 
                                $r = $each->rating ;    
                                for($i= 1; $i<=$r ; $i++){ ?>

                                <i class="fa fa-star active"></i>

                                <?php } ?>

                        </p>

                        <p class="product-price"> 
                            <span class="discounted-price"><?php echo $each->price; ?> ₹</span>
                            <!--<span class="main-price">$12.90</span>--> 

                        </p>
                    </div>
                </div>
                        <?php 
                        
                            }
                        
                          }
                        ?>
               

            </div>

        </div>
 
    </div>

</div>