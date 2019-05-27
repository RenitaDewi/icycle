<?php
session_start();
unset( $_SESSION['nama'] );
unset($_SESSION["products"]);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>DollyNation Shop</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="wrap">
  <div class="header">
    <div class="logo"><img src="images/logo.gif" alt="" border="0" /></div>
    <div id="menu">
      <ul>
        <li class="selected"></li>
        <li><a href="about.php">tentang kami</a></li>
        <li><a href="category.php">boneka</a></li>
        <li><a href="myaccount.php">akun saya</a></li>
        <li><a href="register.php">daftar</a></li>
        <li><a href="view_cart.php">order</a></li>
		<li><a href="konfirmasi.php">konfirmasi</a></li>
        <li><a href="contact.php">kontak</a></li>
      </ul>
    </div>
  </div>
  <div class="center_content">
    <div class="left_content">
      <div class="title">Boneka di DollyNation</div>
      <div class="feat_prod_box">
        <div class="prod_img"><img src="product image/produk1.gif" alt="" width="146" border="0" /></div>
        <div class="prod_det_box">
          <div class="box_top"></div>
          <div class="box_center">
            <div class="prod_title">HELLO KITTY </div>
            <p class="details">Boneka Hello Kitty adalah  boneka kucing imut yang lucu. Sangat disukai anak-anak, khususnya anak perempuan. Kucing putih yang memakai pita di kepala.</p>
            <div class="clear"></div>
          </div>
          <div class="box_bottom"></div>
        </div>
        <div class="clear"></div>
      </div>
      <div class="feat_prod_box">
        <div class="prod_img"><img src="product image/produk2.gif" alt="" width="146" border="0" /></div>
        <div class="prod_det_box">
          <div class="box_top"></div>
          <div class="box_center">
            <div class="prod_title">TEDDY BEAR </div>
            <p class="details">Boneka beruang yang sangat digandrungi di seluruh dunia ini disukai oleh anak-anak dan orang dewasa. Beruang manis ini sering kali dijadikan sebagai hadiah.</p>
            <div class="clear"></div>
          </div>
          <div class="box_bottom"></div>
        </div>
        <div class="clear"></div>
      </div>
	  <div class="clear"></div>
      <div class="title">Produk Baru di DollyNation</div>
      <div class="new_products">
        <div class="new_prod_box">HIJABERS
          <div class="new_prod_bg"> <span class="new_icon"><img src="images/new_icon.gif" alt="" /></span> <img src="product image/produk3.gif" alt="" class="thumb" border="0" /> </div>
        </div>
        <div class="new_prod_box"> PINK PIG
          <div class="new_prod_bg"> <span class="new_icon"><img src="images/new_icon.gif" alt="" /></span> <img src="product image/produk4.gif" alt="" class="thumb" border="0" /> </div>
        </div>
        <div class="new_prod_box"> COW MILK
          <div class="new_prod_bg"> <span class="new_icon"><img src="images/new_icon.gif" alt="" /></span> <img src="product image/produk5.gif" alt="" width="104" height="111" border="0" class="thumb" /> </div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
    <!--end of left content-->
    <div class="right_content">
      <div class="title">DollyNation Shop</div>
      <div class="about">
        <p> <img src="images/about.gif" alt="" class="right" />DollyNation merupakan toko boneka online yang menyediakan berbagai macam boneka. DollyNation menyediakan boneka - boneka berkualitas dengan harga murah. </p>
      </div>
	  <div>
	  <PRE>
	<FORM NAME="frmLogIn" METHOD="post" ACTION="cek.php">
    <p1>USERNAME	: <INPUT TYPE="text" NAME="nama"></p1>
    <p1>PASSWORD	: <INPUT TYPE="password" NAME="Password"></p1>

	<INPUT TYPE="submit" VALUE="Login">
	</FORM>
</PRE>
	  </div>
	  <div class="shopping-cart"> <h3>Keranjang Belanja</h3>
<?php
if(isset($_SESSION["products"]))
{
$current_url = base64_encode("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']); 
    $total = 0;
    echo '<ol>';
    foreach ($_SESSION["products"] as $cart_itm)
    {
        echo '<li class="cart-itm">';
        echo '<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">Hapus dari keranjang</a></span>';
        echo '<h3>'.$cart_itm["name"].'</h3>';
        echo '<div class="p-code">P code : '.$cart_itm["code"].'</div>';
        echo '<div class="p-qty">Qty : '.$cart_itm["qty"].'</div>';
        echo '<div class="p-price">Price :'.$cart_itm["price"].'</div>';
        echo '</li>';
        $subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
		echo '<div class="p-sprice">Subtotal :'.$subtotal.'</div>';
		echo '<br/>';
        $total = ($total + $subtotal);
    }
    echo '</ol>';
    echo '<span class="check-out-txt"><strong>Total : '.$total.'</strong> </br> <a href="view_cart.php">Check-out!</a></span>';
	echo '</br>';
    echo '<span class="empty-cart"><a href="cart_update.php?emptycart=1&return_url='.$current_url.'">Empty Cart</a></span>';
}else{
    echo 'Keranjang Belanja Anda Kosong';
}
?>
</div>
	  <div> 
	  <br/>
	  <br/>
	  <img src="images/jne.jpg" alt="" width="320" />
	  </div>
      <div class="right_box">
        <div class="title">Kategori</div>
        <ul class="list">
          <li><a href="categoryhk.php">HELLO KITTY</a></li>
          <li><a href="categorytb.php">TEDDY BEAR</a></li>
		  <li><a href="categorydy.php">DISNEY</a></li>
          <li><a href="categorydo.php">DORAEMON</a></li>
          <li><a href="categorypg.php">PIG</a></li>
          <li><a href="categorycw.php">COW</a></li>
          <li><a href="categorysp.php">SPESIAL</a></li>
          
        </ul>
      </div>
    </div>
    <!--end of right content-->
    <div class="clear"></div>
  </div>
  <!--end of center content-->
  <div class="footer">
  <center>Created By Leliana Yurmila</center>
  </div>
</div>
</body>
</html>
