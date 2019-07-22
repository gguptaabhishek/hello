 <?php
$session = $this->session->userdata("session_data");
if(empty($session)){
//        $user_id = $session->userssite_id;
        $cheklogin = 1;
        $systemipaddress = $_SERVER['REMOTE_ADDR'];
        
        $this->load->model('foodzoon_model', 'food');
        $data = $this->food->getCart('', $systemipaddress , $cheklogin);
}else{
    
        $user_id = $session->userssite_id;
        $this->load->model('foodzoon_model', 'food');
        $data = $this->food->getCart($user_id);
        $subtotal = 0;
        
}

    ?>


<!DOCTYPE html>
<html class="no-js" lang="zxx">


<!-- Mirrored from demo.devitems.com/greenfarm-v1/greenfarm/index-4.html by HTTrack Website Copier/3.x [XR&CO'2010], Sat, 08 Jun 2019 09:57:27 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo (!empty($title))?($title):('Food Zone'); ?></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="icon" href="<?php echo base_url() ?>assets/images/favicon.ico">

	<!-- CSS
	============================================ -->
	<!-- Bootstrap CSS -->
	<link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">

	<!-- FontAwesome CSS -->
	<link href="<?php echo base_url() ?>assets/css/font-awesome.min.css" rel="stylesheet">

	<!-- Elegent CSS -->
	<link href="<?php echo base_url() ?>assets/css/elegent.min.css" rel="stylesheet">

	<!-- Plugins CSS -->
	<link href="<?php echo base_url() ?>assets/css/plugins.css" rel="stylesheet">

	<!-- Helper CSS -->
	<link href="<?php echo base_url() ?>assets/css/helper.css" rel="stylesheet">

	<!-- Main CSS -->
	<link href="<?php echo base_url() ?>assets/css/main.css" rel="stylesheet">

	<!-- Modernizer JS -->
	<script src="<?php echo base_url() ?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
         <script type="text/javascript" src="<?php echo base_url('public/js/jquery.min.js'); ?>"> </script>
           <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
           
  
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
    

</head>

<body>

	<!--=============================================
	=            Header         =
	=============================================-->

	<header>
			<!--=======  header top  =======-->
	
			<div class="header-top pt-10 pb-10 pt-lg-10 pb-lg-10 pt-md-10 pb-md-10">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center text-sm-left text-lg-right">
							<!-- currncy language dropdown -->
							<div class="lang-currency-dropdown">
								<ul>
									<li> <a href="<?php echo base_url() ?>/#">English <i class="fa fa-chevron-down"></i></a>
										<ul>
											<li><a href="<?php echo base_url() ?>/#">French</a></li>
											<li><a href="<?php echo base_url() ?>/#">Japanease</a></li>
										</ul>
									</li>
									<li><a href="<?php echo base_url() ?>/#">Dollar <i class="fa fa-chevron-down"></i></a>
										<ul>
											<li><a href="<?php echo base_url() ?>/#">Euro</a></li>
										</ul>
									</li>
								</ul>
							</div>
							<!-- end of currncy language dropdown -->
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12  text-center text-sm-right">
							<!-- header top menu -->
							<div class="header-top-menu">
								<ul>
                                                                    <?php
                                                                    $session = $this->session->userdata("session_data");
                                                                    
                                                                    ?>
                                                                    
                                                                    <?php
                                                                  if (empty($session)) {
                                                                      ?>
                                                                        <li><a href="<?php echo site_url('register') ?>">Registration</a></li>
                                                                        <li><a href="<?php echo site_url('login') ?>">Login</a></li>
									<li><a href="<?php echo site_url('wishlist') ?>">Wishlist</a></li>
                                                                   <?php } else { ?>
                                                                        
                                                                        <li><a href="<?php echo site_url('my-account') ?>">My account</a></li>
                                                                        <li><a href="<?php echo site_url('wishlist') ?>">Wishlist</a></li>
									<li><a href="<?php echo site_url('checkout') ?>">Checkout</a></li>
                                                                        
                                                    <?php
                                                }
                                                ?>
								</ul>
							</div>
							<!-- end of header top menu -->
						</div>
					</div>
				</div>
			</div>
	
			<!--=======  End of header top  =======-->
	
			<!--=======  header bottom  =======-->
                        
                       
	
			<div class="header-bottom header-bottom-other header-sticky">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-12 col-xs-12 text-lg-left text-md-center text-sm-center">
							<!-- logo -->
							<div class="logo">
								<a href="<?php echo site_url('home') ?>">
									<img src="<?php echo base_url() ?>assets/images/logo.png" class="img-fluid" alt="">
								</a>
							</div>
							<!-- end of logo -->
						</div>
						<div class="col-md-9 col-sm-12 col-xs-12">
							<div class="menubar-top d-flex justify-content-between align-items-center flex-sm-wrap flex-md-wrap flex-lg-nowrap mt-sm-15">
								<!-- header phone number -->
								<div class="header-contact d-flex">
									<div class="phone-icon">
										<img src="<?php echo base_url() ?>assets/images/icon-phone.png" class="img-fluid" alt="">
									</div>
									<div class="phone-number">
										Mobile: <span class="number">87178-28884</span>
									</div>
								</div>
								<!-- end of header phone number -->
								<!-- search bar -->
								<div class="header-advance-search">
                                                                    <form action="<?php echo site_url('shop') ?>" method="get">
										<input type="text" placeholder="Search your product" name="search">
                                                                                <button type="submit" ><span class="icon_search"></span></button>
                                                                    </form>
								</div>
								<!-- end of search bar -->
								<!-- shopping cart -->
                                                                <div class="ajaxpagecard">
								<div class="shopping-cart" id="shopping-cart">
									<a href="<?php echo site_url('cart') ?>">
										<div class="cart-icon d-inline-block">
											<span class="icon_bag_alt"></span>
										</div>
                                                                            
                                                                            <?php 
                                                                             $subtotal = 0;
                                                                             $add = 0;
//                                                                            if($session){
                                                                            
                                                                            if ($data){ ?>
                                                                                            <?php
//                                                                                                print_r($data);die;
                                                                                                  $add = count($data);
                                                                                                  $i = 1;
                                                                                                  $subtotal = 0;
                                                                                                 foreach ($data as $each){
                                                                                                     
                                                                                                     $price =  $each->product_price ;
                                                                                                      $qty = $each->product_qty ;
                                                  
                                                                                                      $total = ($price * $qty);
                                                                                                      $subtotal += $total ;
//                                                                                                      print_r($subtotal);die;

                                                                                              ?>
                                                                            <?php } }  ?>
										<div class="cart-info d-inline-block">
											<p>Shopping Cart 
												<span>
                                                                                                        <?php if($data){ echo $add ; }else{  echo 0 ;} ?> items - <?php if($data){ echo $subtotal ; }else{ echo 0; } ?> ₹
												</span>
											</p>
										</div>
                                                                           
									</a>
								<!-- end of shopping cart -->
	
								<!-- cart floating box -->
                                                              
								<div class="cart-floating-box" id="cart-floating-box">
									
                                                                    <?php 
                                                                    
//                                                                    if($session){
                                                                    
                                                                    
                                                                    if ($data){ ?>
                                                                                            <?php
//                                                                                                print_r($data);die;
                                                                                                  $add = count($data);
                                                                                                  $i = 1;
                                                                                                  $subtotal = 0;
                                                                                                 foreach ($data as $each){
                                                                                                     
                                                                                                     $price =  $each->product_price ;
                                                                                                      $qty = $each->product_qty ;
                                                  
                                                                                                      $total = ($price * $qty);
                                                                                                      $subtotal += $total ;
//                                                                                                      print_r($subtotal);die;

                                                                                              ?>
                                                                    
                                                                    
                                                                    
                                                                    
                                                                        <div class="cart-items">
                                                                            
                                                                            
										<div class="cart-float-single-item d-flex">
											<!--<span class="remove-item"><a href="<?php // echo base_url() ?>/#"><i class="fa fa-times"></i></a></span>-->
											<div class="cart-float-single-item-image">
												<a href="<?php echo site_url("single-product",'id=' .$each->product_id) ?>"><img src="<?php echo getImage($each->productImage); ?>" class="img-fluid" alt=""></a>
											</div>
											<div class="cart-float-single-item-desc">
												<p class="product-title"> <a href="<?php echo site_url("single-product",'id=' .$each->product_id) ?>"><?php echo $each->product_name ?></a></p>
												<p class="price"><span class="count"><?php echo $each->product_qty ?> x </span> <?php echo $each->product_price ?> ₹</p>
											</div>
										</div>

									</div>
                                                                    
                                                                     <?php
                                                                                               }
                                                                                            }
//                                                                                         }
                                             
                                                                                         ?>
									<div class="cart-calculation">
                                                                            
										<div class="calculation-details">
                                                                                        <p class="total">Subtotal <span><?php if($data){echo $subtotal ; }else{ echo 0 ;} ?> ₹</span></p>
										</div>
                                                                           
										<div class="floating-cart-btn text-center">
											<a href="<?php echo site_url('checkout') ?>">Checkout</a>
											<a href="<?php echo site_url('cart') ?>">View Cart</a>
										</div>
									</div>
                                                                    
                                                                   
                                                                    
                                                                    
								</div>
                                                                    <!--</div>-->
								<!-- end of cart floating box -->
								</div>
                                                                </div>
							</div>

							<!--=============================================
							=            navigation menu         =
							=============================================-->
							
								<!-- navigation section -->
								
						<!--</div>-->
                                            
                                                	<!-- navigation section -->
								<div class="main-menu main-menu-other-homepage">
									<nav>
										<ul>
                                                                                    
									        <li class="active"><a href="<?php echo site_url('home'); ?>">HOME</a>
											
										</li>
										<li class=""><a href="<?php echo site_url('shop'); ?>">Shop</a>
											
										</li>
										
										<li class=""><a href="<?php echo site_url('blog') ?>">BLOG</a>
											
										</li>
										<li><a href="<?php echo site_url('contact') ?> ">CONTACT</a></li>
									
										</ul>
									</nav>
								</div>
								<!-- end of navigation section -->
                                                 </div>
						<div class="col-12">
							<!-- Mobile Menu -->
							<div class="mobile-menu d-block d-lg-none"></div>
						</div>
					</div>
				</div>

			<!--=============================================
			=            navigation menu         =
			=============================================-->
			
			<div class="home-other-navigation-menu">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<!-- navigation section -->
							<div class="main-menu">
								<nav>
									<ul>
										<li class="active"><a href="<?php echo site_url('home'); ?>">HOME</a>
											
										</li>
										<li class=""><a href="<?php echo site_url('shop'); ?>">Shop</a>
											
										</li>
										
										<li class=""><a href="<?php echo site_url('blog') ?>">BLOG</a>
											
										</li>
										<li><a href="<?php echo site_url('contact') ?> ">CONTACT</a></li>
									</ul>
								</nav>
							</div>
							<!-- end of navigation section -->
						</div>
					</div>
				</div>
			</div>
				
			<!--=====  End of navigation menu  ======-->

				
			</div>
	
			<!--=======  End of header bottom  =======-->


	</header>

	<!--=====  End of Header  ======-->