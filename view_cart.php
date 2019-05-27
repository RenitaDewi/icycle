<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
session_start();
require_once('tes.php');
if ( !isset($_SESSION['username']) ) {
    header('location:view_cart.php'); 
}
else { 
    $nama = $_SESSION['username']; 

$query = mysql_query("SELECT * FROM daftar WHERE username = '$nama'");
$hasil = mysql_fetch_array($query);
}
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Free Aditii Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- start slider -->	
<script type="text/javascript" src="jquery.validate.js"></script>	
	<link href="css/slider.css" rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
	<script type="text/javascript" src="js/jquery.cslider.js"></script>
	<script type="text/javascript">
		$(function() {
			$('#da-slider').cslider();
		});
	</script>
		<!-- Owl Carousel Assets -->
		<link href="css/owl.carousel.css" rel="stylesheet">
		     <!-- Owl Carousel Assets -->
		    <!-- Prettify -->
		    <script src="js/owl.carousel.js"></script>
		        <script>
		    $(document).ready(function() {
		
		      $("#owl-demo").owlCarousel({
		        items : 4,
		        lazyLoad : true,
		        autoPlay : true,
		        navigation : true,
			    navigationText : ["",""],
			    rewindNav : false,
			    scrollPerPage : false,
			    pagination : false,
    			paginationNumbers: false,
		      });
		
		    });
		    </script>
		   <!-- //Owl Carousel Assets -->
		<!-- start top_js_button -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		   <script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
					});
				});
			</script>
</head>
<body>
<!-- start header -->
<div class="header_bg">
<div class="wrap">
			<div class="header-bottom-left">
				<div class="logo">
					<a href="index.html"><img src="images/logo.png" alt=""/></a>
				</div>
				
		</div>
	   <div class="header-bottom-right">
         <div class="search">	  
				<input type="text" name="s" class="textbox" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
				<input type="submit" value="Subscribe" id="submit" name="submit">
				<div id="response"> </div>
		 </div>
	  
     <div class="clear"></div>
     </div>
</div>
<div class="header_btm">
<div class="wrap">
	<div class="header_sub">
		<div class="h_menu">
			<ul>
				<li><a href="contact.php">Contact</a></li> |
                <li><a href="index.php">LogOut</a></li> |
                <li><a href="view_cart.php">My Account</a></li> |
                 <li><a>
				 <?php 
	echo "Hallo : " . $hasil['username'] . "<br />";
		 ?>
         </a></li>
	  </div>
			</ul>
		<div class="top-nav">
	          <nav class="nav">	        	
	    	    <a href="#" id="w3-menu-trigger"> </a>
	                  <ul class="nav-list" style="">
							<li class="nav-item"><a href="contact.php">Contact</a></li>
                            <li class="nav-item"><a href="index.php">LogOut</a></li>
                            <li class="nav-item"><a href="daftar.php">SignUp</a></li>
	                 </ul>
	           </nav>
	             <div class="search_box">
				<form>
				   <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
			    </form>
			</div>
	          <div class="clear"> </div>
	          <script src="js/responsive.menu.js"></script>
         </div>		  
	<div class="clear"></div>
</div>
</div>
</div>
<!-- start slider -->
			
        </div>
<!----start-cursual---->
<div class="wrap">
<!----start-img-cursual---->
	<div id="owl-demo" class="owl-carousel">
		<div class="item" onclick="location.href='home.html';">
			<div class="cau_left">
				<img class="lazyOwl" data-src="images/c1.jpg" alt="Lazy Owl Image">
			</div>
			<div class="cau_left">
				<h4><a href="home.html">branded division</a></h4>
				<a href="home.html" class="btn">shop</a>
			</div>
		</div>	
		<div class="item" onclick="location.href='home.html';">
			<div class="cau_left">
				<img class="lazyOwl" data-src="images/c2.jpg" alt="Lazy Owl Image">
			</div>
			<div class="cau_left">
				<h4><a href="home.html">branded fixie</a></h4>
				<a href="home.html" class="btn">shop</a>
			</div>
		</div>	
		<div class="item" onclick="location.href='accessories.html';">
			<div class="cau_left">
				<img class="lazyOwl" data-src="images/c3.jpg" alt="Lazy Owl Image">
			</div>
			<div class="cau_left">
				<h4><a href="accessories.html">branded accessories</a></h4>
				<a href="accessories.html" class="btn">shop</a>
			</div>
		</div>	
		<div class="item" onclick="location.href='home.html';">
			<div class="cau_left">
				<img class="lazyOwl" data-src="images/c2.jpg" alt="Lazy Owl Image">
			</div>
			<div class="cau_left">
				<h4><a href="home.html">branded fixie</a></h4>
				<a href="home.html" class="btn">shop</a>
			</div>
		</div>	
		<div class="item" onclick="location.href='home.html';">
			<div class="cau_left">
				<img class="lazyOwl" data-src="images/c1.jpg" alt="Lazy Owl Image">
			</div>
			<div class="cau_left">
				<h4><a href="home.html">branded division</a></h4>
				<a href="home.html" class="btn">shop</a>
			</div>
		</div>	
		<div class="item" onclick="location.href='accessories.html';">
			<div class="cau_left">
				<img class="lazyOwl" data-src="images/c2.jpg" alt="Lazy Owl Image">
			</div>
			<div class="cau_left">
				<h4><a href="accessories.html">branded accessories</a></h4>
				<a href="accessories.html" class="btn">shop</a>
			</div>
		</div>	
		<div class="item" onclick="location.href='home.html';">
			<div class="cau_left">
				<img class="lazyOwl" data-src="images/c3.jpg" alt="Lazy Owl Image">
			</div>
			<div class="cau_left">
				<h4><a href="home.html">branded fixie</a></h4>
				<a href="home.html" class="btn">shop</a>
			</div>
		</div>	
	</div>
    <!----//End-img-cursual---->
</div>
<!-- start main1 -->
<div class="main_bg1">
<div class="wrap">	
	<div class="main1">
		
        <div class="wrap">
	<div class="header_sub">
		<div class="h_menu">
        
				<h2>featured products</h2> 
			<ul>
				<li><a href="sale.php">sale</a></li> |
				<li><a href="accessories.php">accessories</a></li> |
				<li><a href="men.php">Men Division</a></li> |
                <li><a href="women.php">Women Division</a></li> |
				<li><a href="service.php">services</a></li>
			</ul>
		</div>
		<div class="top-nav">
	          <nav class="nav">	        	
	    	    <a href="#" id="w3-menu-trigger"> </a>
	                  <ul class="nav-list" style="">
							<li class="nav-item"><a href="sale.php">Sale</a></li>
							<li class="nav-item"><a href="accessories.php">Accessories</a></li>
							<li class="nav-item"><a href="men.php">Men Division</a></li>
                            <li class="nav-item"><a href="women.php">Women Division</a></li>
							<li class="nav-item"><a href="service.php">Services</a></li>
	                 </ul>
	           </nav>
	             <div class="search_box">
				<form>
				   <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
			    </form>
			</div>
	          <div class="clear"> </div>
	          <script src="js/responsive.menu.js"></script>
         </div>		  
	<div class="clear"></div>
</div>
</div>
	</div>
</div>
</div>

<!-- start main -->
<div class="wrap">	
<div class="main">
<div class="login">
	 	 <div class="wrap">
				<div class="col_1_of_login span_1_of_login">
					<h4 class="title">Order Customers</h4>
                  <div class="center_content">
    <div class="left_content">
      <div class="new_products">
	  <?php
	  $current_url = base64_encode("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']); 
	  if(isset($_SESSION["products"]))
    {
        $total = 0;
        echo '<form method="post" action="PAYMENT-GATEWAY">';
		echo '<input type="hidden" name="command" />';
        echo '<ul>';
        $cart_items = 0;
        foreach ($_SESSION["products"] as $cart_itm)
        {
           $product_code = $cart_itm["code"];
           $results = mysql_query("SELECT nama,kategori,harga FROM listproduk WHERE idProduk='$product_code' LIMIT 1");
           $obj = mysql_fetch_object($results);
           
            echo '<li class="cart-itm">';
			echo '<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">Hapus dari keranjang</a></span>';
            echo '<div class="product-info">';
            echo '<h3>'.$obj->nama.' (Code :'.$product_code.')</h3> ';
			echo '<div class="p-price">Harga : @'.$obj->harga.'</div>';
            echo '<div class="p-qty">Qty : '.$cart_itm["qty"].'</div>';
            echo '<div>Kategori : '.$obj->kategori.'</div>';
            echo '</div>';
            echo '</li>';
            $subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
			echo '<div>Subtotal : '.$subtotal.'</div>';
			echo '<br/>';
            $total = ($total + $subtotal);
			
            echo '<input type="hidden" name="item_name['.$cart_items.']" value="'.$obj->nama.'" />';
            echo '<input type="hidden" name="item_code['.$cart_items.']" value="'.$product_code.'" />';
            echo '<input type="hidden" name="item_qty['.$cart_items.']" value="'.$cart_itm["qty"].'" />';
            $cart_items ++;
			
        }
        echo '</ul>';
        echo '<span class="check-out-txt">';
        echo '<strong>Total : '.$total.'</strong>  ';
        echo '</span>';
		$go="'billing.php'";
        echo '<div> <input type="button" value="Selesai" onclick="window.location='.$go.'"> </div>';
        echo '</form>';
        
    }else{
        echo 'Keranjang Belanja Anda Kosong';
    }
?>
	  </div>
 <div class="clear"></div>
    </div>
</div>
					<div class="clear"></div>
				</div>
                
				<div class="col_1_of_login span_1_of_login">
				<div class="login-title">
	           		<h4 class="title">My Account</h4>
					<div class="center_content">
    <div class="left_content">
      <div class="feat_prod_box_details">
<?php
$results = mysql_query("SELECT * FROM daftar WHERE username = '$nama'");
if ($results) { 
        //output results from database
        while($obj = mysql_fetch_object($results))
        {
echo '<div><h4> ID Customer : '.$obj->idCustomer.'</h4></div>';
echo '<div><h4> Username : '.$obj->username.'</h4></div>';
echo '<div><h4> Name : '.$obj->name.'</h4></div>';
echo '<div><h4> Email : '.$obj->email.'</h4></div>';
echo '<div><h4> Address : '.$obj->address.'</h4></div>';
echo '<div><h4> Country : '.$obj->country.'</h4></div>';
echo '<div><h4> Telephone Number : '.$obj->telp.'</h4></div>';
}
}
?>
	   </div>
      <div class="clear"></div>
    </div>
			    </div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
        </div>
</div>
<div class="left_sidebar">
					<div class="sellers">
						
						  <div class="banner-wrap bottom_banner color_link">
								<a href="#" class="main_link">
								<figure><img src="images/delivery.png" alt=""></figure>
								<h5><span>Free Shipping</span><br> on orders over $999.</h5><p>This offer is valid on all our store items.</p></a>
						 </div>
						 <div class="brands">
							 <h1>Products</h1>
					  		 <div class="field">
				                 <select class="select1">
				                   <option>Please Select</option>
										<option>Fixie Bike</option>
										<option>Accessories</option>
										<option>Sales</option>
				                  </select>
				            </div>
			    		</div>
					</div>
				</div>
					<!-- end sidebar -->
          	    <div class="clear"></div>
	       </div>
				<div class="clear"></div>
		    </div>
		   </div>
		  <div class="clear"></div>
		    </div>
		  </div>
</div>	
<!-- start footer -->
<div class="footer_bg1">
<div class="wrap">
	<div class="footer">
		<!-- scroll_top_btn -->
	    <script type="text/javascript">
			$(document).ready(function() {
			
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
		 <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
		<!--end scroll_top_btn -->
		<div class="copy">
			<p class="link">&copy;  All rights reserved | Template by&nbsp;&nbsp;<a href="http://w3layouts.com/"> W3Layouts</a></p>
		</div>
        <div class="f-list2">
				  <ul>
					<li class="active"><a href="index.html">About Us</a></li> |
					<li><a href="service.html">Delivery & Returns</a></li> |
					<li><a href="service.html">Terms & Conditions</a></li> |
					<li><a href="contact.html">Contact Us</a></li> 
				  </ul>
			   </div>
		<div class="clear"></div>
	</div>
</div>
</div>
</body>
</html>