

    <div class="breadcrumb-area mb-50">
		
	</div>

	<div class="shop-page-container mb-50">
		<div class="container">
			<div class="row">
                            
                                <?php  $this->load->view('shop_leftBar'); ?>
			
				<div class="col-lg-9 order-1 order-lg-2 mb-sm-35 mb-xs-35">

					<!--=======  shop page banner  =======-->
					
					<div class="shop-page-banner mb-35">
						<a href="#">
							<img src="<?php echo base_url() ?>/assets/images/banners/b.png" style="width:825px;height:320px;" class="img-fluid" alt="">
						</a>
					</div>
					
					<!--=======  End of shop page banner  =======-->

					<!--=======  Shop header  =======-->
					
					<div class="shop-header mb-35">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-12 d-flex align-items-center">
								<!--=======  view mode  =======-->
								
								<div class="view-mode-icons mb-xs-10">
									<a class="active" href="<?php echo base_url() ?>/#" data-target="grid"><i class="fa fa-th"></i></a>
									<a href="<?php echo base_url() ?>/#" data-target="list"><i class="fa fa-list"></i></a>
								</div>
								
								<!--=======  End of view mode  =======-->
								
							</div>
							<div class="col-lg-8 col-md-8 col-sm-12 d-flex flex-column flex-sm-row justify-content-between align-items-left align-items-sm-center">
								<!--=======  Sort by dropdown  =======-->
								
								<div class="sort-by-dropdown d-flex align-items-center mb-xs-10">
									<p class="mr-10">Sort By: </p>
									<select name="sort-by" id="sort-by" class="nice-select shotbyhhh">
                                                                                <option value="" > Product Sort By </option>
                                                                                <option value="newness">Sort By Newness</option>
										<option value="lower">Sort By Price: Low to High</option>
										<option value="higher">Sort By Price: High to Low</option>
									</select>
								</div>
								
								<!--=======  End of Sort by dropdown  =======-->

								<!--<p class="result-show-message">Showing <?php echo $start ;?> – <?php echo $start+11  ;?> of <?php echo $count ;?> results</p>-->
							</div>
						</div>
					</div>
					
                                        
                                          <script>

                            $(document).ready(function () {

                                if ($(".shotbyhhh").length > 0) {
                                    $(".shotbyhhh").on('change', function () {
                                        var url = $(this).val();
                                       
                                       if(url){
                                           
                                            window.location.href = '<?php echo site_url("shop") ?>?searchorderby='+ url;
                                       }
                                  
                                    });
                                }

                            });
                        </script>
                                        
					<!--=======  End of Shop header  =======-->

					<!--=======  Grid list view  =======-->
					
					<div class="shop-product-wrap grid row no-gutters mb-35">
						 <?php if ($product){ ?>
                                                     <?php
                            
                                                         foreach ($product as $each){
                                                     ?>
						<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
								<!--=======  Grid view product  =======-->
								
								<div class="gf-product shop-grid-view-product">
									<div class="image">
										<a href="<?php echo site_url("single-product",'id=' .$each->productId) ?>">
											<span class="onsale">Sale!</span>
											<!--<img src="<?php echo base_url() ?>/assets/images/products/product03.jpg" class="img-fluid" alt="">-->
                                                                                        <img src="<?php echo base_url('public/images/' . $each->productImage); ?>" style="width:270px; height:270px;" class="img-responsive img-rounded" alt="">
										</a>
										<div class="product-hover-icons">
                                                                                    
                                                                                            <input type="hidden" name="p_id"  id="pid_<?php echo $each->productId ?>" class="form-control" value="<?php echo $each->productId; ?>"  placeholder="E">
                                                                                            <input type="hidden" name="p_name"  id="pname_<?php echo $each->productId ?>" class="form-control" value="<?php echo $each->productName; ?>"  placeholder="E">
                                                                                            <input type="hidden" name="p_price" id="pprice_<?php echo $each->productId ?>" class="form-control" value="<?php echo $each->price; ?>" placeholder="E">
                                                                                            <input type="hidden" name="p_qty" id="pqty_<?php echo $each->productId ?>" class="form-control" value="1" placeholder="E">       
                                                                                    
											<a id="addCart_<?php echo $each->productId ?>" data-tooltip="Add to cart"> <span class="icon_cart_alt"></span></a>
											<a href="<?php echo site_url("wishlist") ?>"  id="addWishlist_<?php echo $each->productId ?>" data-tooltip="Add to wishlist"> <span class="icon_heart_alt"></span> </a>
											<!--<a href="<?php echo base_url() ?>/#" data-tooltip="Compare"> <span class="arrow_left-right_alt"></span> </a>-->
											<a href="#" data-tooltip="Quick view" data-toggle = "modal" id="view_<?php echo $each->productId ?>" data-target="#quick-view-modal-container"> <span class="icon_search"></span> </a>
										</div>
									</div>
									<div class="product-content">
										<div class="product-categories">
											 <a href="<?php echo site_url("shop",'catID=' .$each->categoryId ) ?>"><?php echo $each->categoryName ; ?></a>
										</div>
										<h3 class="product-title"><a href="<?php echo site_url("single-product",'id=' .$each->productId) ?>"><?php echo $each->productName; ?></a></h3>
										<div class="price-box">
											<!--<span class="main-price">$89.00</span>-->
											<span class="discounted-price"><?php echo $each->price; ?> ₹</span>
										</div>
									</div>
									
								</div>
								
								<!--=======  End of Grid view product  =======-->
	
								<!--=======  Shop list view product  =======-->
								
								<div class="gf-product shop-list-view-product">
									<div class="image">
										<a href="<?php echo site_url("single-product",'id=' .$each->productId) ?>">
											<span class="onsale">Sale!</span>
                                                                                        <img src="<?php echo base_url('public/images/' . $each->productImage); ?>"  style="width:290px; height:270px;" class="img-fluid" alt="">
										</a>
										<div class="product-hover-icons">
											<a href="" data-tooltip="Quick view" data-toggle = "modal" id="view_<?php echo $each->productId ?>" data-target="#quick-view-modal-container"> <span class="icon_search"></span> </a>
										</div>
									</div>
									<div class="product-content">
										<div class="product-categories">
											 <a href="<?php echo site_url("shop",'catID=' .$each->categoryId ) ?>"><?php echo $each->categoryName ; ?></a>
										</div>
										<h3 class="product-title"><a href="<?php echo site_url("single-product",'id=' .$each->productId) ?>"><?php echo $each->productName; ?></a></h3>
										<div class="price-box mb-20">
											<!--<span class="main-price">$89.00</span>-->
											<span class="discounted-price"><?php echo $each->price; ?> ₹</span>
										</div>
										<p class="product-description"><?php echo substr($each->productDescription, 0, 140); ?> ....</p>
										<div class="list-product-icons">
											<a id="addCart_<?php echo $each->productId ?>" data-tooltip="Add to cart"> <span class="icon_cart_alt"></span></a>
                                                                                        <a href=""  id="addWishlist_<?php echo $each->productId ?>" data-tooltip="Add to wishlist"> <span class="icon_heart_alt"></span> </a>
											
										</div>
									</div>
									
								</div>
							
							<!--=======  End of Shop list view product  =======-->
                                                </div>
                                                <?php }}?>


					</div>
					
					<!--=======  End of Grid list view  =======-->

					<!--=======  Pagination container  =======-->
					
					<div class="pagination-container">
						<div class="container">
							<div class="row">
								<div class="col-lg-12">
									<!--=======  pagination-content  =======-->
									 
									<div class="pagination-content text-center">
                                                                            
                                                                          
                                                                            
										<ul>
                                                                                  
                                                                                  <?php 
                                                                                  if($pages< 8){
                                                                                      ?>
                                                                                       <li><a class="" href="<?php echo site_url("shop"),'?pid=' .'1'.'&catID=' . $this->input->get('catID').'&search=' . $this->input->get('search').'&subID=' . $this->input->get('subID').'&pricebyserch=' . $this->input->get('pricebyserch').'&searchorderby=' . $this->input->get('searchorderby')  ?>"><<</a></li>
                                                                                       <?php
                                                                                         for($i=1; $i<=$pages; $i++){
                                                                                       ?>
                                                                                    
                                                                                       <li><a class="" href="<?php echo site_url("shop"), '?pid=' .$i.'&catID=' . $this->input->get('catID').'&search=' . $this->input->get('search').'&subID=' . $this->input->get('subID').'&pricebyserch=' . $this->input->get('pricebyserch').'&searchorderby=' . $this->input->get('searchorderby') ?>"><?php echo $i ;?></a></li>
                                                                                    
                                                                                       <?php }?>
                                                                                       <li><a class="" href="<?php echo site_url("shop"),'?pid=' .$pages.'&catID=' . $this->input->get('catID').'&search=' . $this->input->get('search').'&subID=' . $this->input->get('subID').'&pricebyserch=' . $this->input->get('pricebyserch').'&searchorderby=' . $this->input->get('searchorderby') ?>">>></a></li>
                                                                                 
                                                                                       <?php  
                                                                                  
                                                                                      }else{
                                                                                        if($pageno < 3){
                                                                                           $i=1;
                                                                                           $j= $i+1;
                                                                                           $m= $i+2;
                                                                                           
                                                                                      
                                                                                       ?>
                                                                                       
                                                                                      <li><a class="" href="<?php echo site_url("shop"),'?pid=' .'1'.'&catID=' . $this->input->get('catID').'&search=' . $this->input->get('search').'&subID=' . $this->input->get('subID').'&pricebyserch=' . $this->input->get('pricebyserch').'&searchorderby=' . $this->input->get('searchorderby') ?>"><<</a></li>
                                                                                      <li><a class="" href="<?php echo site_url("shop"),'?pid=' .$i.'&catID=' . $this->input->get('catID').'&search=' . $this->input->get('search').'&subID=' . $this->input->get('subID').'&pricebyserch=' . $this->input->get('pricebyserch').'&searchorderby=' . $this->input->get('searchorderby') ?>">1</a></li> 
                                                                                      <li><a class="" href="<?php echo site_url("shop"),'?pid=' .$j.'&catID=' . $this->input->get('catID').'&search=' . $this->input->get('search').'&subID=' . $this->input->get('subID').'&pricebyserch=' . $this->input->get('pricebyserch').'&searchorderby=' . $this->input->get('searchorderby') ?>">2</a></li>
                                                                                      <li><a class="" href="<?php echo site_url("shop"),'?pid=' .$m.'&catID=' . $this->input->get('catID').'&search=' . $this->input->get('search').'&subID=' . $this->input->get('subID').'&pricebyserch=' . $this->input->get('pricebyserch').'&searchorderby=' . $this->input->get('searchorderby') ?>">3</a></li>
                                                                                      <li>.....</li>
                                                                                      <li><a class="" href="<?php echo site_url("shop"),'?pid=' .$pages.'&catID=' . $this->input->get('catID').'&search=' . $this->input->get('search').'&subID=' . $this->input->get('subID').'&pricebyserch=' . $this->input->get('pricebyserch').'&searchorderby=' . $this->input->get('searchorderby') ?>"><?php echo $pages ;  ?></a></li>
                                                                                      <li><a class="" href="<?php echo site_url("shop"),'?pid=' .$pages.'&catID=' . $this->input->get('catID').'&search=' . $this->input->get('search').'&subID=' . $this->input->get('subID').'&pricebyserch=' . $this->input->get('pricebyserch').'&searchorderby=' . $this->input->get('searchorderby') ?>">>></a></li>
                                                                                      
                                                                                    <?php }elseif($pageno>=$pages-1){
                                                                                        
                                                                                        $j= $pages-1;
                                                                                        $m= $pages-2;
                                                                                        ?>
                                                                                        
                                                                                        
                                                                                      <li><a class="" href="<?php echo site_url("shop"),'?pid=' .'1'.'&catID=' . $this->input->get('catID').'&search=' . $this->input->get('search').'&subID=' . $this->input->get('subID').'&pricebyserch=' . $this->input->get('pricebyserch').'&searchorderby=' . $this->input->get('searchorderby') ?>"><<</a></li>
                                                                                      <li><a class="" href="<?php echo site_url("shop"),'?pid=' .'1'.'&catID=' . $this->input->get('catID').'&search=' . $this->input->get('search').'&subID=' . $this->input->get('subID').'&pricebyserch=' . $this->input->get('pricebyserch').'&searchorderby=' . $this->input->get('searchorderby') ?>">1</a></li>         
                                                                                      <li>.....</li>  
                                                                                      <li><a class="" href="<?php echo site_url("shop"),'?pid=' .$m.'&catID=' . $this->input->get('catID').'&search=' . $this->input->get('search').'&subID=' . $this->input->get('subID').'&pricebyserch=' . $this->input->get('pricebyserch').'&searchorderby=' . $this->input->get('searchorderby') ?>"><?php echo $pages-2 ;  ?></a></li>
                                                                                      <li><a class="" href="<?php echo site_url("shop"),'?pid=' .$j.'&catID=' . $this->input->get('catID').'&search=' . $this->input->get('search').'&subID=' . $this->input->get('subID').'&pricebyserch=' . $this->input->get('pricebyserch').'&searchorderby=' . $this->input->get('searchorderby') ?>"><?php echo $pages-1 ;  ?></a></li>
                                                                                      <li><a class="" href="<?php echo site_url("shop"),'?pid=' .$pages.'&catID=' . $this->input->get('catID').'&search=' . $this->input->get('search').'&subID=' . $this->input->get('subID').'&pricebyserch=' . $this->input->get('pricebyserch').'&searchorderby=' . $this->input->get('searchorderby') ?>"><?php echo $pages ;  ?></a></li>
                                                                                      <li><a class="" href="<?php echo site_url("shop"),'?pid=' .$pages.'&catID=' . $this->input->get('catID').'&search=' . $this->input->get('search').'&subID=' . $this->input->get('subID').'&pricebyserch=' . $this->input->get('pricebyserch').'&searchorderby=' . $this->input->get('searchorderby') ?>">>></a></li>
                                                                                    <?php }else{ 
                                                                                        
                                                                                           
                                                                                           $j= $pageno-1;
                                                                                           $m= $pageno+1;
                                                                                        
                                                                                        ?>
                                                                                          
                                                                                      <li><a class="" href="<?php echo site_url("shop"),'?pid=' .'1'.'&catID=' . $this->input->get('catID').'&search=' . $this->input->get('search').'&subID=' . $this->input->get('subID').'&pricebyserch=' . $this->input->get('pricebyserch').'&searchorderby=' . $this->input->get('searchorderby') ?>"><<</a></li>
                                                                                      <li><a class="" href="<?php echo site_url("shop"),'?pid=' .'1'.'&catID=' . $this->input->get('catID').'&search=' . $this->input->get('search').'&subID=' . $this->input->get('subID').'&pricebyserch=' . $this->input->get('pricebyserch').'&searchorderby=' . $this->input->get('searchorderby') ?>">1</a></li>   
                                                                                      <li>.....</li>  
                                                                                      <li><a class="" href="<?php echo site_url("shop"), '?pid=' .$j.'&catID=' . $this->input->get('catID').'&search=' . $this->input->get('search').'&subID=' . $this->input->get('subID').'&pricebyserch=' . $this->input->get('pricebyserch').'&searchorderby=' . $this->input->get('searchorderby') ?>"><?php echo $pageno-1 ;?></a></li>
                                                                                      <li><a class="active" href="<?php echo site_url("shop"), '?pid=' .$pageno.'&catID=' . $this->input->get('catID').'&search=' . $this->input->get('search').'&subID=' . $this->input->get('subID').'&pricebyserch=' . $this->input->get('pricebyserch').'&searchorderby=' . $this->input->get('searchorderby') ?>"><?php echo $pageno ;?></a></li>
                                                                                      <li><a class="" href="<?php echo site_url("shop"), '?pid=' .$m.'&catID=' . $this->input->get('catID').'&search=' . $this->input->get('search').'&subID=' . $this->input->get('subID').'&pricebyserch=' . $this->input->get('pricebyserch').'&searchorderby=' . $this->input->get('searchorderby') ?>"><?php echo $pageno+1 ;?></a></li>
                                                                                      <li>.....</li>  
                                                                                      <li><a class="" href="<?php echo site_url("shop"),'?pid=' .$pages.'&catID=' . $this->input->get('catID').'&search=' . $this->input->get('search').'&subID=' . $this->input->get('subID').'&pricebyserch=' . $this->input->get('pricebyserch').'&searchorderby=' . $this->input->get('searchorderby') ?>"><?php echo $pages ;  ?></a></li>
                                                                                      <li><a class="" href="<?php echo site_url("shop"),'?pid=' .$pages.'&catID=' . $this->input->get('catID').'&search=' . $this->input->get('search').'&subID=' . $this->input->get('subID').'&pricebyserch=' . $this->input->get('pricebyserch').'&searchorderby=' . $this->input->get('searchorderby') ?>">>></a></li>    

                                                                                    <?php  } } ?>
                                                                               
                                                                                </ul>
                                                                          
									</div>
									
									<!--=======  End of pagination-content  =======-->
								</div>
							</div>
						</div>
					</div>
					
					<!--=======  End of Pagination container  =======-->

				</div>
			</div>
		</div>
	</div>
	
	<!--=====  End of Shop page container  ======-->

<?php $this->load->view('front/home/addtocartjs'); ?>