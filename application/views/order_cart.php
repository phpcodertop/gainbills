    <title>Codeigniter cart class</title>
<?php
$grand_total = 0;
if ($cart = $this->cart->contents()):
    foreach ($cart as $item):
        $grand_total = $grand_total + $item['subtotal'];
    endforeach;
endif;
?>
        <div id="cart" >
                <div id="text"> 
            <?php  $cart_check = $this->cart->contents();
            
                 if(empty($cart_check)) {
             echo 'empty cart from your order'; 
             }  
             ?> 
			 <span class="fa fa-shopping-cart">Billing Cart</span>
             </div>
                <table id="table" border="0" cellpadding="5px" cellspacing="1px">
                  <?php
                  // All values of cart store in "$cart". 
                  if ($cart = $this->cart->contents()): ?>
                    <tr id= "main_heading">
                       
                    <?php
                    echo form_open('Cart/update_cart');
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
<input type="button" class ='btns_cart' value="Place Order" onclick="window.location = 'show_orders'"></td>
                    </tr>
<?php endif; ?>
            </table>
        </div>