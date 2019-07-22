 <?php
$session = $this->session->userdata("session_data");
if (empty($session)) {
        $subtotal = 0;
        $cheklogin = 1;
        $systemipaddress = $_SERVER['REMOTE_ADDR'];
        
        $this->load->model('foodzoon_model', 'food');
        $data = $this->food->getCart('', $systemipaddress , $cheklogin);
//        print_r($data);die;
    } else {
        
        $user_id = $session->userssite_id;
        $this->load->model('foodzoon_model', 'food');
        $data = $this->food->getCart($user_id);
        $subtotal = 0;
    }
        
      


    ?>
    <div class="breadcrumb-area mb-50">
        
    </div>
    
	<div class="page-section section mb-50">
		<div class="container">
			<div class="row">
				<div class="col-12">
					
					<!-- Checkout Form s-->
                                        <form action="<?php echo site_url('front/foodzoon/checkout') ?>" class="checkout-form" method="post" >
					<!--<form action="#" class="checkout-form">-->
						<div class="row row-40">
							
							<div class="col-lg-7 mb-20">
								
								<!-- Billing Address -->
								<div id="billing-form" class="mb-40">
									<h4 class="checkout-title">Billing Address</h4>
	
									<div class="row">
	
										<div class="col-md-12 col-12 mb-20">
											<label> Name*</label>
                                                                                        <input type="text" placeholder="First Name" name="custName">
										</div>
	
										<div class="col-md-6 col-12 mb-20">
											<label>Email Address*</label>
                                                                                        <input type="email" placeholder="Email Address" name="custemail">
										</div>
	
										<div class="col-md-6 col-12 mb-20">
											<label>Mobile no*</label>
                                                                                        <input type="text" placeholder="Phone number" name="mobile">
										</div>
	
	
										<div class="col-12 mb-20">
											<label>Address*</label>
                                                                                        <input type="text" placeholder="Address line 1" name="custAddress" >
											<!--<input type="text" placeholder="Address line 2">-->
										</div>
	
<!--										
	
-->										<div class="col-md-6 col-12 mb-20">
											<label>Remark*</label>
                                                                                        <input type="text" placeholder="Remark" name="remark" >
										</div>
	
										<div class="col-md-6 col-12 mb-20">
											<label>Zip Code*</label>
                                                                                        <input type="text" placeholder="Zip Code" name="pinnum">
                                                                                      
                                                                                        
                                                                                      
										</div>
	
										<div class="col-12 mb-20">
											<div class="check-box">
												<input type="checkbox" id="create_account">
												<label for="create_account">Create an Acount?</label>
											</div>
											<div class="check-box">
												<input type="checkbox" id="shiping_address" data-shipping>
												<label for="shiping_address">Ship to Different Address</label>
											</div>
										</div>
	
									</div>
	
								</div>
								
								<!-- Shipping Address -->
								<div id="shipping-form" class="mb-40">
									<h4 class="checkout-title">Shipping Address</h4>
	
									<div class="row">
	
										<div class="col-md-6 col-12 mb-20">
											<label>First Name*</label>
											<input type="text" placeholder="First Name">
										</div>
	
										<div class="col-md-6 col-12 mb-20">
											<label>Last Name*</label>
											<input type="text" placeholder="Last Name">
										</div>
	
										<div class="col-md-6 col-12 mb-20">
											<label>Email Address*</label>
											<input type="email" placeholder="Email Address">
										</div>
	
										<div class="col-md-6 col-12 mb-20">
											<label>Phone no*</label>
											<input type="text" placeholder="Phone number">
										</div>
	
										<div class="col-12 mb-20">
											<label>Company Name</label>
											<input type="text" placeholder="Company Name">
										</div>
	
										<div class="col-12 mb-20">
											<label>Address*</label>
											<input type="text" placeholder="Address line 1">
											<input type="text" placeholder="Address line 2">
										</div>
	
										<div class="col-md-6 col-12 mb-20">
											<label>Country*</label>
											<select class="nice-select">
												<option>Bangladesh</option>
												<option>China</option>
												<option>country</option>
												<option>India</option>
												<option>Japan</option>
											</select>
										</div>
	
										<div class="col-md-6 col-12 mb-20">
											<label>Town/City*</label>
											<input type="text" placeholder="Town/City">
										</div>
	
										<div class="col-md-6 col-12 mb-20">
											<label>State*</label>
											<input type="text" placeholder="State">
										</div>
	
										<div class="col-md-6 col-12 mb-20">
											<label>Zip Code*</label>
											<input type="text" placeholder="Zip Code">
										</div>
	
									</div>
	
								</div>
								
							</div>
							
							<div class="col-lg-5">
								<div class="row">
									
									<!-- Cart Total -->
									<div class="col-12 mb-60">
									
										<h4 class="checkout-title">Cart Total</h4>
								
										<div class="checkout-cart-total">

											<h4>Product <span>Total</span></h4>
											<?php if ($data){ ?>
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
                                                                                        
											<ul>
												<li><?php echo $each->product_name ?> X <?php echo $each->product_qty ?><span><?php echo $total; ?> ₹</span></li>

											</ul>
                                                                                        
                                                                                        <input type="hidden" value="<?php echo $total ?>" name="total[]"  readonly>
                                                                                        <input type="hidden" value="<?php echo $each->product_id ?>" name="hsnCode[]"  readonly>
                                                                                        <input type="hidden" value="<?php echo $each->product_price ?>"  name="price[]"  placeholder="Enter Price">
                                                                                        <input type="hidden" value="<?php echo $each->product_qty ?>" name="prqty[]"  placeholder="Enter Quantity">
                                                                                        <input type="hidden" value="<?php echo $each->product_name ?>" readonly  name="productDetail[]"  placeholder="Enter Product Name">
                                                                                        <input type="hidden" value="<?php echo $subtotal ?>" name="totalammount"  readonly>
											<?php
                                            
                                                                                            }
                                                                                         
                                                                                        }
                                                                                          
                                                                                         ?>

                                                                                       
											<p>Sub Total <span> <?php if($data){ echo $subtotal ; }else{ echo 0 ; }?> ₹</span></p>
											<p>Shipping Fee <span>0 ₹</span></p>
											
											<h4>Grand Total <span><?php echo $subtotal ; ?> ₹</span></h4>
                                                                                      
										</div>
										
									</div>
									
									<!-- Payment Method -->
									<div class="col-12">
									
										<h4 class="checkout-title">Payment Method</h4>
								
										<div class="checkout-payment-method">
											
											<div class="single-method">
												<input type="radio" id="payment_check" name="payment-method" value="check">
												<label for="payment_check">Check Payment</label>
												<p data-method="check">Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>
											</div>
											
											<div class="single-method">
												<input type="radio" id="payment_bank" name="payment-method" value="bank">
												<label for="payment_bank">Direct Bank Transfer</label>
												<p data-method="bank">Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>
											</div>
											
											<div class="single-method">
												<input type="radio" id="payment_cash" name="payment-method" value="cash">
												<label for="payment_cash">Cash on Delivery</label>
												<p data-method="cash">Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>
											</div>
											
											<div class="single-method">
												<input type="radio" id="payment_paypal" name="payment-method" value="paypal">
												<label for="payment_paypal">Paypal</label>
												<p data-method="paypal">Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>
											</div>
											
											<div class="single-method">
												<input type="radio" id="payment_payoneer" name="payment-method" value="payoneer">
												<label for="payment_payoneer">Payoneer</label>
												<p data-method="payoneer">Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>
											</div>
											
											<div class="single-method">
												<input type="checkbox" id="accept_terms">
												<label for="accept_terms">I’ve read and accept the terms & conditions</label>
											</div>
											
										</div>
										
										<button type="submit" class="place-order">Place order</button>

										
									</div>
									
								</div>
							</div>
							
						</div>
					</form>
					
				</div>
			</div>
		</div>
	</div>
	
<script>
   
 $(document).ready(function(){  
     
            $(document).on('change', '[id^="pqty_"]', function () {
                var id = $(this).attr('id').split('_')[1];
//           alert(id);
                var price = isNaN(parseFloat($('#prize_' + id).val())) ? 0 : parseFloat($('#prize_' + id).val());
                var prqty = isNaN(parseFloat($('#pqty_' + id).val())) ? 0 : parseFloat($('#pqty_' + id).val());
                var cartid = isNaN(parseFloat($('#cartid_' + id).val())) ? 0 : parseFloat($('#cartid_' + id).val());
                var discount  = 0;
                
                var prtamt = parseFloat(price * prqty);
                var finalammount = parseFloat(prtamt - discount);

                var subamout = 0;
              
               var length = $('#counttotal').val();
//                alert(length);
               for(var i =  1;i <= length; i++){
                   
                if(i == id){
                    subamout += finalammount;
                }else{
                    var submountget = isNaN(parseFloat($('#prammount_' + i).val())) ? 0 : parseFloat($('#prammount_' + i).val());
                    subamout += submountget;
//                 alert(subamout);
                }    
                   
               }
                
               
        
                $('#prammount_' + id).val(finalammount);
                $('#psubmount_' + id).val(prtamt);
                $('#totalsubmount').val(subamout);
                $('#ship').val(0);
                $('#final').val(subamout);
           
               var product_pqty = $('#pqty_'+ id ).val();
//           alert(product_pqty);
               $.ajax({
                url : "<?php echo site_url('front/foodzoon/edit_cart');?>",
                datatype : 'json',
                method : "post",
                data : { cartid: cartid , product_pqty: product_pqty },
                success :function(msg){
//                    alert(msg);
                  if(msg) {
  
//                       setTimeout(function(){
//                       location.reload();  //Refresh page
//                       }, 500);
                  }


               }
            });
                
                
                
            });
        });



</script> 	