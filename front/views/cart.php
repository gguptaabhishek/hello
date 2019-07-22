 <?php
$session = $this->session->userdata("session_data");
if (empty($session)) {
        $subtotal = 0;
        $cheklogin = 1;
        $systemipaddress = $_SERVER['REMOTE_ADDR'];
        
        $this->load->model('foodzoon_model', 'food');
        $data = $this->food->getCart('', $systemipaddress , $cheklogin);

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
                     <form action="#"  >			
                        <!--=======  cart table  =======-->
                        
                        <div class="cart-table table-responsive mb-40">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="pro-thumbnail">Image</th>
                                        <th class="pro-title">Product Name</th>
                                        <th class="pro-price">Price</th>
                                        <th class="pro-quantity">Quantity</th>
                                        <th class="pro-subtotal">Total</th>
                                        <th class="pro-remove">Remove</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                      <?php if ($data){ ?>
                                        <?php
                                           

                                              $add = count($data);
                                              $i = 1;
                                              $subtotal = 0;
                                             foreach ($data as $each){
                                                 
                                                  $price =  $each->product_price ;
                                                  $qty = $each->product_qty ;
                                                  
                                                  $total = ($price * $qty);
                                                  $subtotal += $total ;
                                                  

                                            ?>
                                    <tr>

                                        <div><input type="hidden"  id="counttotal" class="form-control input-sm prcls6 " value="<?php echo $add ?>"></div>
                                        
                                        <input type="hidden"  id="id_<?php echo $i ; ?>" class="form-control input-sm prcls6 " value="<?php $each->cart_id ?>">
                                        
                                        <td class="pro-thumbnail"><a href="#"><img height="100" width="400" src="<?php echo getImage($each->productImage); ?>" class="img-responsive"/></a></td>
                                       
                                        <td class="pro-title"><a href="#"><?php echo $each->product_name ?></a></td>
                                       
                                        <td class="pro-price"> <span> <input  style=" border:none; background-color: white; text-align: center; " size="10" readonly  type="text" class="cost" value="<?php echo $each->product_price ?>"  name="price[]" id="price_<?php echo $i; ?>" ></span></td>
                                        
                                        <td class="pro-quantity"><div class="pro-qty"><input type="text" value="<?php echo $each->product_qty ?>"  class="pr"   name="prqty[]" id="qty_<?php echo $i; ?>" ></div></td> 
                                        
                                        <input type="hidden" value="<?php echo $each->cart_id ?>"  class="pr"    id="cartid_<?php echo $i; ?>" >
                                        
                                        <td class="pro-subtotal"> <span> <input style=" border:none; background-color: white; text-align: center; " size="10" readonly value="<?php echo $total ?>" type="text"  name="submount[]"  id="total_<?php echo $i; ?>" ></span></td>
                                        
                                        <td class="pro-remove"><a href="#" id="removecart_<?php echo $i; ?>"><i class="fa fa-trash-o"></i></a></td>
                                        <input type="hidden" value="<?php echo $each->product_price ?>"  class="pr"    id="ppid_<?php echo $i; ?>" >
                                        <input type="hidden" value="<?php echo $each->product_qty ?>"  class="pr"    id="pqid_<?php echo $i; ?>" >
                                        <input type="hidden" value="<?php echo $each->cart_id ?>"  class="pr"    id="caid_<?php echo $i; ?>" >
                                    </tr>
                                             <?php
                                              $i++;
                                                }
                                             }
                                             
                                           ?>
                               
                                </tbody>
                            </table>
                        </div>
                        
                        <!--=======  End of cart table  =======-->
                       
                        
                    </form>	
                        
                    <div class="row">
    
                        <div class="col-lg-6 col-12">
                            <!--=======  Calculate Shipping  =======-->
                            
                            <div class="calculate-shipping">
                                <h4>Calculate Shipping</h4>
                                <form action="#">
                                    <div class="row">
                                        <div class="col-md-6 col-12 mb-25">
                                            <select class="nice-select">
                                                <option>Bangladesh</option>
                                                <option>China</option>
                                                <option>country</option>
                                                <option>India</option>
                                                <option>Japan</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 col-12 mb-25">
                                            <select class="nice-select">
                                                <option>Dhaka</option>
                                                <option>Barisal</option>
                                                <option>Khulna</option>
                                                <option>Comilla</option>
                                                <option>Chittagong</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 col-12 mb-25">
                                            <input type="text" placeholder="Postcode / Zip">
                                        </div>
                                        <div class="col-md-6 col-12 mb-25">
                                            <input type="submit" value="Estimate">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            
                            <!--=======  End of Calculate Shipping  =======-->
                            
                            <!--=======  Discount Coupon  =======-->
                            
                            <div class="discount-coupon">
                                <h4>Discount Coupon Code</h4>
                                <form action="#">
                                    <div class="row">
                                        <div class="col-md-6 col-12 mb-25">
                                            <input type="text" placeholder="Coupon Code">
                                        </div>
                                        <div class="col-md-6 col-12 mb-25">
                                            <input type="submit" value="Apply Code">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            
                            <!--=======  End of Discount Coupon  =======-->
                            
                        </div>
    
                       
                        <div class="col-lg-6 col-12 d-flex">
                            <!--=======  Cart summery  =======-->
                        
                            <div class="cart-summary">
                                <div class="cart-summary-wrap">
                                    <h4>Cart Summary</h4>

                                     <p>Sub Total <span> <input style=" border:none; background-color: #dedede; text-align: right; " id="stotal" value="<?php echo $subtotal; ?>" readonly  type="text"   name="price[]"  >₹ </span></p>
                                    
                                     <p>Shipping Cost <span><input style=" border: none; background-color: #dedede; text-align: right;" id="ship" value="<?php echo 0; ?>" readonly   type="text"   name="price[]"  > ₹</span></p>
                                     
                                     <h2>Grand Total <span><input style=" border: none; background-color: #dedede;  text-align: right; font-weight: bold; " size="12"  id="final" value="<?php echo $subtotal; ?>" type="text" readonly >₹</span></h2>
                                
                                </div>
                                
                                <div class="cart-summary-button">
                                    <button onclick="location.href='checkout';" class="checkout-btn">Checkout</button>
                                
                                    <!--<button class="update-btn">Update Cart</button>-->
                                  
                                </div>
                            </div>
                        
                            <!--=======  End of Cart summery  =======-->
                            
                        </div>
    
                    </div>
                    </form> 
                </div>
           
            </div>
        </div>
    </div>
    <?php // } ?>
<script type="text/javascript">
    
    $(document).ready(function(){
        
        
         if ($("[id^='addCart_']").length > 0)
            $("[id^='addCart_']").click(function () {
                var id = $(this).attr('id').split('_')[1];
        
            var product_id    = $('#pid_' + id).val();
            var product_name  = $('#pname_' + id).val();
            var product_price = $('#pprice_'+ id ).val();
//            alert(product_name);
           
            $.ajax({
                url: '<?php echo site_url('front/foodzoon/add_to_cart'); ?>',
                method : "POST",
                data : {product_id: product_id, product_name: product_name, product_price: product_price  },
                success: function(msg){
//                    alert(msg);
                    
                }
            });
        });
 
         

 
         
        
//         if ($("[id^='removecart_']").length > 0)
//             $("[id^='removecart_']").click(function (){
//         var row_id = $(this).attr('id').split('_')[1];
////            alert(row_id );
//            $.ajax({
//                url : "<?php echo site_url('front/foodzoon/delete_cart');?>",
//                method : "POST",
//                data : {row_id : row_id},
//                success :function(msg){
////                    alert(msg);
//                  if(msg) {
////  
//                       setTimeout(function(){
//                       location.reload();  //Refresh page
//                       }, 500);
//                  }
////
////
//               }
//            });
//        });
        
        
    });
</script>


<script>
  $(document).ready(function(){
      $(document).on('change', "[id^='qty_']", function () {
               var id = $(this).attr('id').split('_')[1];
               var qty =  isNaN(parseFloat($('#qty_' + id).val())) ? 0 : parseFloat($('#qty_' + id).val());
               var cost = isNaN(parseFloat($('#price_' + id).val())) ? 0 : parseFloat($('#price_' + id).val());
                var cartid = isNaN(parseFloat($('#cartid_' + id).val())) ? 0 : parseFloat($('#cartid_' + id).val());
               var  stotal = 0;
               var total = parseFloat(qty * cost);
//               alert(total);
         var i = 1;
         var sumtotal = 0;
         var stotal = 0;
       var count = $('#counttotal').val();
         for (i = 1; i <= count; i++) {
             if (id == i) {
                 var p4 = total;
             } else {
                 var p4 = isNaN(parseFloat($('#total_' + i).val())) ? 0 : parseFloat($('#total_' + i).val());
             }

             var sstotal  = parseFloat(p4);
             stotal += parseFloat(sstotal);
         }

         var sumtotal = parseFloat(stotal);

         $('#total_' + id).val(total);
        $('#stotal').text(sumtotal);
        $('#ship').text(0);
        $('#final').text(sumtotal);
        
        $.ajax({
                url : "<?php echo site_url('front/foodzoon/edit_cart');?>",
                datatype : 'json',
                method : "post",
                data : { cartid: cartid , product_pqty: qty },
                success :function(msg){
                     
                     setTimeout(function(){
                       location.reload();  //Refresh page
                       }, 100);
                 
                   }
            });
                
                
                
            
        

       });
  });


                                                    
</script>

<script>
   
 $(document).ready(function(){  
     
            $(document).on('click', '[id^="removecart_"]', function () {
                var id = $(this).attr('id').split('_')[1];
//           alert(id);
                var psubmount = isNaN(parseFloat($('#psubmount_' + id).val())) ? 0 : parseFloat($('#psubmount_' + id).val());
                var totalamout = isNaN(parseFloat($('#totalsubmount').val())) ? 0 : parseFloat($('#totalsubmount').val());
                var cartid = isNaN(parseFloat($('#caid_' + id).val())) ? 0 : parseFloat($('#caid_' + id).val());
//                var discount  = 0;
//              alert(totalamout);
                var finalamount = parseFloat(totalamout - psubmount);
//                var finalammount = parseFloat(prtamt - discount);

//                var subamout = 0;
             
//                var length = $('#counttotal').val();
             
//                for(var i =  1;i <= length; i++){
                   
//                if(i == id){
//                    totalamout += psubmount;
//                }else{
//                    var submountget = isNaN(parseFloat($('#psubmount_' + i).val())) ? 0 : parseFloat($('#psubmount_' + i).val());
//                    totalamout -= submountget ;
//                 alert(submountget);
//                }    
//                   
//               }
                
               
        
//                $('#prammount_' + id).val(finalammount);
//                $('#psubmount_' + id).val(prtamt);
                $('#totalsubmount').val(finalamount);
                $('#ship').val(0);
                $('#final').val(finalamount);
           
                $.ajax({
                url : "<?php echo site_url('front/foodzoon/delete_cart');?>",
                method : "POST",
                data : {row_id : cartid},
                success :function(msg){
//                    alert(msg);
                  if(msg) {
                        
                       setTimeout(function(){
                       location.reload();  //Refresh page
                       }, 100);
                  }
//
//
               }
            });
                
                
                
            });
        });



</script> 

