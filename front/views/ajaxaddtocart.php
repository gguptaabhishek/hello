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


<div class="shopping-cart" id="shopping-cart">
    <a href="<?php echo site_url('#') ?>">
        <div class="cart-icon d-inline-block">
            <span class="icon_bag_alt"></span>
        </div>

        <?php
        $subtotal = 0;
        $add = 0;
//                                                                            if($session){

        if ($data) {
            ?>
            <?php
//                                                                                                print_r($data);die;
            $add = count($data);
            $i = 1;
            $subtotal = 0;
            foreach ($data as $each) {

                $price = $each->product_price;
                $qty = $each->product_qty;

                $total = ($price * $qty);
                $subtotal += $total;
//                                                                                                      print_r($subtotal);die;
                ?>
                <?php
            }
        }
        ?>
        <div class="cart-info d-inline-block">
            <p>Shopping Cart 
                <span>
                    <?php
                    if ($data) {
                        echo $add;
                    } else {
                        echo 0;
                    }
                    ?> items - <?php
                    if ($data) {
                        echo $subtotal;
                    } else {
                        echo 0;
                    }
                    ?> ₹
                </span>
            </p>
        </div>

    </a>
    <!-- end of shopping cart -->

    <!-- cart floating box -->

    <div class="cart-floating-box" id="cart-floating-box">

        <?php
//                                                                    if($session){


        if ($data) {
            ?>
            <?php
//                                                                                                print_r($data);die;
            $add = count($data);
            $i = 1;
            $subtotal = 0;
            foreach ($data as $each) {

                $price = $each->product_price;
                $qty = $each->product_qty;

                $total = ($price * $qty);
                $subtotal += $total;
//                                                                                                      print_r($subtotal);die;
                ?>




                <div class="cart-items">


                    <div class="cart-float-single-item d-flex">
                        <span class="remove-item"><a href="<?php echo base_url() ?>/#"><i class="fa fa-times"></i></a></span>
                        <div class="cart-float-single-item-image">
                            <a href="<?php echo site_url("single-product", 'id=' . $each->product_id) ?>"><img src="<?php echo getImage($each->productImage); ?>" class="img-fluid" alt=""></a>
                        </div>
                        <div class="cart-float-single-item-desc">
                            <p class="product-title"> <a href="<?php echo site_url("single-product", 'id=' . $each->product_id) ?>"><?php echo $each->product_name ?></a></p>
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
                <p class="total">Subtotal <span><?php
                        if ($data) {
                            echo $subtotal;
                        } else {
                            echo 0;
                        }
                        ?> ₹</span></p>
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