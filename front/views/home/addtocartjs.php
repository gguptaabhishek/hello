<!--=======  THis is for Add to Cart and Wishlist =======-->
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
<!--=======  THis is for Add to Cart and Wishlist in up sell product  on single product page  =======-->
<script type="text/javascript">
    
    $(document).ready(function(){
        
        
         if ($("[id^='addbyupsellCart_']").length > 0)
            $("[id^='addbyupsellCart_']").click(function () {
                var id = $(this).attr('id').split('_')[1];
        
            var product_id    = $('#productid_' + id).val();
            var product_name  = $('#productname_' + id).val();
            var product_price = $('#productprice_'+ id ).val();
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
 
         
      
      if ($("[id^='addbyupsellWishlist_']").length > 0)
            $("[id^='addbyupsellWishlist_']").click(function () {
                var id = $(this).attr('id').split('_')[1];
        
            var product_id    = $('#productid_' + id).val();
            var product_name  = $('#productname_' + id).val();
            var product_price = $('#productprice_'+ id ).val();
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

<!--<script type="text/javascript">
    
    $(document).ready(function(){
        
        
         if ($("[id^='view_']").length > 0)
            $("[id^='view_']").click(function () {
                var id = $(this).attr('id').split('_')[1];
//        alert(id);
//            var product_id    = $('#pid_' + id).val();
//            var product_name  = $('#pname_' + id).val();
//            var product_price = $('#pprice_'+ id ).val();
//            var product_qty = $('#pqty_'+ id ).val();
//            alert(product_name);
           
            $.ajax({
                url: '<?php echo site_url('front/foodzoon/get_product_by_id'); ?>',
                method : "POST",
                data : {product_id: id   },
                success: function(msg){
//                    alert(msg);
//                    $('#quick-view-modal-container' + id).val(msg);
                    $('#price_' + id).val(msg.productId);
                    $('#productDetail' + id).val(msg.productName);
                    $('#productDetail_' + id).val(msg.productImage);
                      $('#productDetail_' + id).val(msg.productName);
                    
                }
            });
        });
 
         
      
    
      
 
         
       
    });
</script>-->
