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
    header('location:accessories.php'); 
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
<div class="main_bg">
<div class="wrap">	
	<div class="main">
    <h2 class="style top">Featured For Accessories</h2>
		<!-- start grids_of_3 -->
		<div class="grids_of_3">
        
			<div class="grid1_of_3">
                <img src="images/acc1.jpg" alt=""/>
                
            <?php
//current URL of the Page. cart_update.php redirects back to this URL
$current_url = base64_encode("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']); 
    $results = mysql_query("SELECT * FROM listproduk WHERE idProduk='acc001v' ORDER BY idProduk");
    if ($results) { 
        //output results from database
        while($obj = mysql_fetch_object($results))
        {
            echo '<div class="new_prod_box">'; 
            echo '<form method="post" action="cart_update.php">';
            echo '<div class="product-content"><h3>'.$obj->nama.'</h3> </div>';
			echo '<div class="product-kategori">Kategori '.$obj->kategori.'</div>';
			echo '<div class="product-stok">Stok '.$obj->stock.'</div>';
            echo '<div class="product-info">Harga '.$obj->harga.'</div>';
			echo '<div><input type="text" name="product_qty" value=1></div>';
			echo '<div> <button class="add_to_cart">Indulge</button></div>';
            echo '<input type="hidden" name="product_code" value="'.$obj->idProduk.'" />';
            echo '<input type="hidden" name="type" value="add" />';
            echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
            echo '</form>';
            echo '</div>';
			
        }
}
?>
				</a>
			</div>
            
			<div class="grid1_of_3">
					<img src="images/acc2.jpg" alt=""/>
            
            <?php
//current URL of the Page. cart_update.php redirects back to this URL
$current_url = base64_encode("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']); 
    $results = mysql_query("SELECT * FROM listproduk WHERE idProduk='acc002v' ORDER BY idProduk");
    if ($results) { 
        //output results from database
        while($obj = mysql_fetch_object($results))
        {
            echo '<div class="new_prod_box">'; 
            echo '<form method="post" action="cart_update.php">';
            echo '<div class="product-content"><h3>'.$obj->nama.'</h3> </div>';
			echo '<div class="product-kategori">Kategori '.$obj->kategori.'</div>';
			echo '<div class="product-stok">Stok '.$obj->stock.'</div>';
            echo '<div class="product-info">Harga '.$obj->harga.'</div>';
			echo '<div><input type="text" name="product_qty" value=1></div>';
			echo '<div> <button class="add_to_cart">Tambahkan Ke Keranjang</button></div>';
            echo '<input type="hidden" name="product_code" value="'.$obj->idProduk.'" />';
            echo '<input type="hidden" name="type" value="add" />';
            echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
            echo '</form>';
            echo '</div>';
			
        }
    
}
?>
				</a>
			</div>
            
			<div class="grid1_of_3">
					<img src="images/acc3.jpg" alt=""/>
            <?php
//current URL of the Page. cart_update.php redirects back to this URL
$current_url = base64_encode("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']); 
    $results = mysql_query("SELECT * FROM listproduk WHERE idProduk='acc001g' ORDER BY idProduk");
    if ($results) { 
        //output results from database
        while($obj = mysql_fetch_object($results))
        {
            echo '<div class="new_prod_box">'; 
            echo '<form method="post" action="cart_update.php">';
            echo '<div class="product-content"><h3>'.$obj->nama.'</h3> </div>';
			 echo '<div class="product-kategori">Kategori '.$obj->kategori.'</div>';
			  echo '<div class="product-stok">Stok '.$obj->stock.'</div>';
            echo '<div class="product-info">Harga '.$obj->harga.'</div>';
			echo '<div><input type="text" name="product_qty" value=1></div>';
			echo '<div> <button class="add_to_cart">Indulge</button></div>';
            echo '<input type="hidden" name="product_code" value="'.$obj->idProduk.'" />';
            echo '<input type="hidden" name="type" value="add" />';
            echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
            echo '</form>';
            echo '</div>';
			
        }
}
?>
				</a>
			</div>
            
			<div class="clear"></div>
		</div>
		<div class="grids_of_3">
			<div class="grid1_of_3">
					<img src="images/acc4.jpg" alt=""/>
					 <?php
//current URL of the Page. cart_update.php redirects back to this URL
$current_url = base64_encode("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']); 
    $results = mysql_query("SELECT * FROM listproduk WHERE idProduk='acc002g' ORDER BY idProduk");
    if ($results) { 
        //output results from database
        while($obj = mysql_fetch_object($results))
        {
            echo '<div class="new_prod_box">'; 
            echo '<form method="post" action="cart_update.php">';
            echo '<div class="product-content"><h3>'.$obj->nama.'</h3> </div>';
			 echo '<div class="product-kategori">Kategori '.$obj->kategori.'</div>';
			  echo '<div class="product-stok">Stok '.$obj->stock.'</div>';
            echo '<div class="product-info">Harga '.$obj->harga.'</div>';
			echo '<div><input type="text" name="product_qty" value=1></div>';
			echo '<div> <button class="add_to_cart">Indulge</button></div>';
            echo '<input type="hidden" name="product_code" value="'.$obj->idProduk.'" />';
            echo '<input type="hidden" name="type" value="add" />';
            echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
            echo '</form>';
            echo '</div>';
			
        }
}
?>
				</a>
			</div>
            
			<div class="grid1_of_3">
					<img src="images/acc5.jpg" alt=""/>
                    <?php
//current URL of the Page. cart_update.php redirects back to this URL
$current_url = base64_encode("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']); 
    $results = mysql_query("SELECT * FROM listproduk WHERE idProduk='acc001h' ORDER BY idProduk");
    if ($results) { 
        //output results from database
        while($obj = mysql_fetch_object($results))
        {
            echo '<div class="new_prod_box">'; 
            echo '<form method="post" action="cart_update.php">';
            echo '<div class="product-content"><h3>'.$obj->nama.'</h3> </div>';
			 echo '<div class="product-kategori">Kategori '.$obj->kategori.'</div>';
			  echo '<div class="product-stok">Stok '.$obj->stock.'</div>';
            echo '<div class="product-info">Harga '.$obj->harga.'</div>';
			echo '<div><input type="text" name="product_qty" value=1></div>';
			echo '<div> <button class="add_to_cart">Indulge</button></div>';
            echo '<input type="hidden" name="product_code" value="'.$obj->idProduk.'" />';
            echo '<input type="hidden" name="type" value="add" />';
            echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
            echo '</form>';
            echo '</div>';
			
        }
}
?>
				</a>
			</div>
            
			<div class="grid1_of_3">
					<img src="images/acc6.jpg" alt=""/>
                    <?php
//current URL of the Page. cart_update.php redirects back to this URL
$current_url = base64_encode("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']); 
    $results = mysql_query("SELECT * FROM listproduk WHERE idProduk='acc002h' ORDER BY idProduk");
    if ($results) { 
        //output results from database
        while($obj = mysql_fetch_object($results))
        {
            echo '<div class="new_prod_box">'; 
            echo '<form method="post" action="cart_update.php">';
            echo '<div class="product-content"><h3>'.$obj->nama.'</h3> </div>';
			 echo '<div class="product-kategori">Kategori '.$obj->kategori.'</div>';
			  echo '<div class="product-stok">Stok '.$obj->stock.'</div>';
            echo '<div class="product-info">Harga '.$obj->harga.'</div>';
			echo '<div><input type="text" name="product_qty" value=1></div>';
			echo '<div> <button class="add_to_cart">Indulge</button></div>';
            echo '<input type="hidden" name="product_code" value="'.$obj->idProduk.'" />';
            echo '<input type="hidden" name="type" value="add" />';
            echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
            echo '</form>';
            echo '</div>';
			
        }
}
?>
				</a>
			</div>
			<div class="clear"></div>
		</div>	
	<!-- end grids_of_3 -->
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