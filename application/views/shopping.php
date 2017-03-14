        <title>Gainbills cart </title>
  <script type="text/javascript" src="<?php echo base_url().'assets/JS/jquery.min.js'?>"></script>  
       <script type="text/javascript">
            function clear_cart() {
                var result = confirm('Are you sure want to clear all bookings?');
                if (result) {
                    window.location = "<?php echo base_url(); ?>/Cart/remove/all";
                } else {
                    return false; // cancel button
                }
            }
        </script>
<script>
$(document).ready(function(){
 
    $("#place_ord").click(function(){
           if($("#order_div").css('display')=="none")
            {
                   $("#order_div").fadeIn();     
             }
        else
           {
                    $("#order_div").fadeOut();
            }
       });
     });
</script>

        <div id="cart" >
                <div id="text"> 
            <?php  $cart_check = $this->cart->contents();
            
                 if(empty($cart_check)) {
             echo 'empty cart from your order'; 
             }  
             ?> 
			 <span class="fa fa-shopping-cart">Cart</span>
             </div>
                <table id="table" border="0" cellpadding="5px" cellspacing="1px">
                  <?php
                  // All values of cart store in "$cart". 
                  if ($cart = $this->cart->contents()): ?>
                    <tr id= "main_heading">
                        <td>Serial</td>
                        <td>Name</td>
                        <td>Price</td>
                        <td>Qty</td>
                        <td>Amount</td>
                        <td>Cancel Product</td>
                    </tr>
                    <?php
                    echo form_open('Cart/update_cart');
                    $grand_total = 0;
                    $i = 1;
                    foreach ($cart as $item):
                        
                        echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                        echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
                        echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
                        echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
                        echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
                        ?>
                        <tr>
                            <td>
                       <?php echo $i++; ?>
                            </td>
                            <td>
                      <?php echo $item['name']; ?>
                            </td>
                            <td>
                                EGP <?php echo number_format($item['price'], 3); ?>
                            </td>
                            <td>
                            <?php echo form_input('cart[' . $item['id'] . '][qty]', $item['qty'], 'maxlength="3" size="1" style="text-align: right"'); ?>
                            </td>
                        <?php $grand_total = $grand_total + $item['subtotal']; ?>
                            <td>
                                EGP <?php echo number_format($item['subtotal'], 4) ?>
                            </td>
                            <td>
                              
                            <?php 
                            // cancle image.
                            $path = "<img src='http://localhost/codeigniter_cart/images/cart_cross.jpg' width='25px' height='20px'>";
                            echo anchor('Cart/remove/' . $item['rowid'], $path); ?>
                            </td>
                     <?php endforeach; ?>
                    </tr>
                    <tr>
<td><b>Order Total: EGP<?php 
                                  echo number_format($grand_total, 2); ?></b></td>
                        
                        <?php // "clear cart" button call javascript confirmation message ?>
 <td colspan="5" align="right"><input type="button" class ='btns_cart' value="Clear Cart" onclick="clear_cart()">                            
                            <?php  ?>
                            <input type="submit" class ='btns_cart' value="Update Cart">
                            <?php echo form_close(); ?> 
<input type="button" class ="btns_cart" value="Place Order"  id="place_ord" ></input></td>
                    </tr>
<?php endif; ?>
            </table>
<?php
$total_order = 0;
if ($cart = $this->cart->contents()):
    foreach ($cart as $item):
        $total_order = $total_order + $item['subtotal'];
    endforeach;
endif;
?>
        <div id="order_div" class="order_cart" style="display:none">
         
            <?php // Create form for enter user imformation and send values 'shopping/save_order' function?>
            <form name="billing" method="post" action="<?php echo base_url() . 'Cart/save_order' ?>" >
                <input type="hidden" name="command" />
                    <table  id="table" border="0" cellpadding="1px">
                        <tr><td>Order Total:</td><td><strong>EGP &nbsp;<?php echo number_format($total_order, 2); ?></strong></td></tr>
                        <tr><td>Your Name:</td><td><input type="text" name="name" required=""/></td></tr>
                        <tr><td>Address:</td><td><input type="text" name="address" required="" /></td></tr>
                        <tr><td>Email:</td><td><input type="text" name="email" required="" /></td></tr>
                        <tr><td>Phone:</td><td><input type="text" name="phone"  required="" /></td></tr>
                        <tr><td><?php
                                                echo "<a class ='fg-button teal' id='back' href=" . base_url() . "index.php/shopping>Back</a>";  ?>
    </td><td><input  type="submit" class ='fg-button teal' value="Place Order" /></td></tr> 
                     
                    </table>
            </form>
        </div>
        </div>