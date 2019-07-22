<?php
$session = $this->session->userdata("session_data");
if (empty($session)) {
        $subtotal = 0;
        $cheklogin = 1;
        $systemipaddress = $_SERVER['REMOTE_ADDR'];
        
        $this->load->model('foodzoon_model', 'food');
        $data = $this->food->getWishlist('', $systemipaddress , $cheklogin);
//        print_r($data);die;
    } else {
        
        $user_id = $session->userssite_id;
        $this->load->model('foodzoon_model', 'food');
        $data = $this->food->getWishlist($user_id);
        $subtotal = 0;
    }
    ?>

    <div class="breadcrumb-area mb-50">
       
    </div>
    
	

    <div class="page-section section mb-50">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<form action="#">				
							<!--=======  cart table  =======-->
							
							<div class="cart-table table-responsive">
								<table class="table">
									<thead>
										<tr>
											<th class="pro-thumbnail">Image</th>
											<th class="pro-title">Product</th>
											<th class="pro-price">Price</th>
											<th class="pro-quantity">Quantity</th>
											<th class="pro-subtotal">Total</th>
											<th class="pro-remove">Remove</th>
										</tr>
									</thead>
									<tbody>
                                                                            
                                                                            <?php if ($data){ ?>
                                                                                  <?php
                             
                                                                                  foreach ($data as $each){
                                                                                    ?>
                                                                                <tr>
                                                                                        <td class="pro-thumbnail"><a href="#"><img height="100" width="400" src="<?php echo getImage($each->productImage); ?>" class="img-responsive"/></a></td>
                                                                                        <td class="pro-title"><a href="#"><?php echo $each->product_name ?></a></td>
                                       
                                                                                        <td class="pro-price"><div><input  readonly  style=" border:none; background-color: white; text-align: center; " size="10" type="text" value="<?php echo $each->product_price ?>" class="cost" name="price[]" id="prize_<?php echo $each->w_id ?>" ></div><span></span></td>
                                       
                                                                                        <td class="pro-quantity"><div class="pro-qty"><input  value="1"  type="text"  name="prqty[]" id="pqty_<?php echo $each->w_id ?>" ></div></td> 
                                        
                                                                                        <td class="pro-subtotal"><div><input  style=" border:none; background-color: white; text-align: center; " size="10" value="<?php echo $each->product_price ?>"  type="text" class="cost" name="submount[]" readonly id="psubmount_<?php echo $each->w_id ?>" ></div><span></span></td>
                                       
                                                                                        <td class="pro-remove"><a href="#" id="removewishlist_<?php echo $each->w_id ?>"><i class="fa fa-trash-o"></i></a></td>
                                                                                </tr>
                                                                                
                                                                            <?php 
                                                                            
                                                                                  }
                                                                            
                                                                                }
                                                                                ?>
                                  
									</tbody>
								</table>
							</div>
							
							<!--=======  End of cart table  =======-->
							
						</form>	
					</div>
				</div>
			</div>
		</div>
    <?php // } ?>
		<!--=====  End of Cart page content  ======-->
                
<script type="text/javascript">
    
    $(document).ready(function(){
        
        if ($("[id^='removewishlist_']").length > 0)
             $("[id^='removewishlist_']").click(function (){
         var row_id = $(this).attr('id').split('_')[1];
//            alert(row_id );
            $.ajax({
                url : "<?php echo site_url('front/foodzoon/delete_wishlist');?>",
                method : "POST",
                data : {row_id : row_id},
                success :function(msg){
//                    alert(msg);
                  if(msg) {
  
                       setTimeout(function(){
                       location.reload();  //Refresh page
                       }, 500);
                  }


               }
            });
        });
    });
</script>

<script>
   
        if ($("[id^='pqty_']").length > 0) {
         
            $(document).on('keyup', '[id^="pqty_"]', function () {
                var id = $(this).attr('id').split('_')[1];
//          alert(id);
                var price = isNaN(parseFloat($('#prize_' + id).val())) ? 0 : parseFloat($('#prize_' + id).val());
                var prqty = isNaN(parseFloat($('#pqty_' + id).val())) ? 0 : parseFloat($('#pqty_' + id).val());
//                var discount = isNaN(parseFloat($('#discount_' + id).val())) ? 0 : parseFloat($('#discount_' + id).val());
                var prtamt = parseFloat(price * prqty);
//                var finalammount = parseFloat(prtamt - discount);
//                $('#prammount_' + id).val(finalammount);
                $('#psubmount_' + id).val(prtamt);
            });
        }



</script>            