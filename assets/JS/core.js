$(document).ready(function() { 

		$("ul.products form").submit(function() {
   	        var id = $(this).find('input[name=product_id]').val();
		var qty = $(this).find('input[name=quantity]').val();
	        alert('ID:' + id + '\n\rQTY:' + qty);         
               $.post( "<?php echo base_url()?>" +"cart/add_cart_item", { product_id: id, quantity: qty, ajax: '1' },
  				function(data){	
                                     /////////////
                                     if(data == 'true'){
 		 			$.get( "<?php echo base_url()?>"+ "Cart/show_cart", function(cart){ // Get the contents of the url cart/show_cart
  							$("#cart_content").html(cart); // Replace the information in the div #cart_content with the retrieved data
						}); 		 
 		 			}else{
 		 				alert("Product does not exist");
 		 			}
                                    /////////////////////////////////////////// 	
 			 });
                          
			return false; // Stop the browser of loading the page defined in the form "action" parameter.
		});
	
	});