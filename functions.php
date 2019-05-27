<?php
include('tes.php');
function get_order_total(){
		 if(isset($_SESSION["products"]))
    {
        $total = 0;
        $cart_items = 0;
        foreach ($_SESSION["products"] as $cart_itm)
        {
		$subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
        $total = ($total + $subtotal);
		}
		}
		return $total;
	}
	
?>