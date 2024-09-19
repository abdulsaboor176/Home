<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Furniture</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" >
	<link href="css/font-awesome.min.css" rel="stylesheet" >
	<link href="css/global.css" rel="stylesheet">
	<link href="css/cart.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">
	<script src="js/bootstrap.bundle.min.js"></script>

</head>

<body>

<?php
include ('header.php');
?>

<section id="center" class="center_cart">
 <div class="promo_m center_om">
  <div class="container-fluid">
    <div class="center_o1 row text-center">
	 <div class="col-md-12">
	   <h6 class="col_yell fw-bold"><a class="text-white" href="#">HOME PAGE</a> <span class="mx-2 text-muted">/</span> SHOPPING CART</h6>
	   <h1 class="mb-0 font_60 text-white mt-3">Shoping Cart</h1>
	 </div>
	</div>
 </div>
 </div>
</section>

<section id="cart_page" class="cart p_3">
 <div class="container-xl">
   <div class="cart_2 row">
	 <div class="col-md-6">
	  <h5>MY CART</h5>
	 </div>
	 <div class="col-md-6">
      <h5 class="text-end text-uppercase"><a href="#">Continue Shopping</a></h5>
	 </div>
	</div>
	<div class="cart_3 row mt-3">
	 <div class="col-md-8">
	  <div class="cart_3l">
	   <h6>PRODUCT</h6>
	  </div>
	  <div class="cart_3l1 mt-3 row ms-0 me-0">
	   <div class="col-md-3 ps-0 col-3">
	    <div class="cart_3l1i">
		 <a href="#"><img src="img/31.jpg" alt="abc" class="w-100"></a>		</div>
	   </div>
	   <div class="col-md-9 col-9">
	    <div class="cart_3l1i1">
		 <h6 class="fw-bold"><a href="#">Naminos elementum disus tincidunts cosmo de cosmopolis</a></h6>
		 <h6 class="fw-normal font_14 mt-3">RED / XS</h6>
		 <h6 class="font_14 mt-3">Vendor</h6>
		 <h5 class="col_red mt-3">$175.00</h5>
		 <h6 class="font_14 mt-3 mb-3">Quantity</h6>
		</div>
		<div class="cart_3l1i2">
         <input type="number" min="1" value="1" class="form-control" placeholder="Qty">
		 <h6><a class="button_1" href="#">REMOVE</a></h6>
         <h6><a class="button_2" href="#">UPDATE CART</a></h6>
		</div>
	   </div>
	  </div>
	  <div class="cart_3l1 mt-3 row ms-0 me-0">
	   <div class="col-md-3 ps-0 col-3">
	    <div class="cart_3l1i">
		 <a href="#"><img src="img/32.jpg" alt="abc" class="w-100"></a>		</div>
	   </div>
	   <div class="col-md-9 col-9">
	    <div class="cart_3l1i1">
		 <h6 class="fw-bold"><a href="#">Naminos elementum disus tincidunts cosmo de cosmopolis</a></h6>
		 <h6 class="fw-normal font_14 mt-3">RED / XS</h6>
		 <h6 class="font_14 mt-3">Vendor</h6>
		 <h5 class="col_red mt-3">$175.00</h5>
		 <h6 class="font_14 mt-3 mb-3">Quantity</h6>
		</div>
		<div class="cart_3l1i2">
         <input type="number" min="1" value="1" class="form-control" placeholder="Qty">
		 <h6><a class="button_1" href="#">REMOVE</a></h6>
         <h6><a class="button_2" href="#">UPDATE CART</a></h6>
		</div>
	   </div>
	  </div>
	  <div class="cart_3l1 mt-3 row ms-0 me-0 pb-0 border-0">
	   <div class="col-md-3 ps-0 col-3">
	    <div class="cart_3l1i">
		 <a href="#"><img src="img/33.jpg" alt="abc" class="w-100"></a>		</div>
	   </div>
	   <div class="col-md-9 col-9">
	    <div class="cart_3l1i1">
		 <h6 class="fw-bold"><a href="#">Naminos elementum disus tincidunts cosmo de cosmopolis</a></h6>
		 <h6 class="fw-normal font_14 mt-3">RED / XS</h6>
		 <h6 class="font_14 mt-3">Vendor</h6>
		 <h5 class="col_red mt-3">$175.00</h5>
		 <h6 class="font_14 mt-3 mb-3">Quantity</h6>
		</div>
		<div class="cart_3l1i2">
         <input type="number" min="1" value="1" class="form-control" placeholder="Qty">
		 <h6><a class="button_1" href="#">REMOVE</a></h6>
         <h6><a class="button_2" href="#">UPDATE CART</a></h6>
		</div>
	   </div>
	  </div>
	 </div>
	 <div class="col-md-4">
	  <div class="cart_3r">
	   <h6 class="head_1">SUBTOTAL</h6>
	   <h5 class="text-center col_red mt-3">$1,347.00</h5>
	   <hr>
	   <h6 class="font_14">Additional comments</h6>
	   <textarea class="form-control"></textarea>
	   <h6 class="text-center mt-3"><a class="button_2" href="checkout.php">PROCEED TO CHECKOUT</a></h6><br>
	   <h5>GET SHIPPING ESTIMATES</h5>
	   <hr>
	  </div>
	  <div class="cart_3r1">
	    <h6 class="font_14">Country</h6>
	   <select class="form-select" id="subject" name="subject">
		<option>America</option>
		<option>India</option>
		<option>England</option>
		<option>Africa</option>
		</select><br>
		<h6 class="font_14">State</h6>
	   <select class="form-select" id="subject_1" name="subject">
		<option>Delhi</option>
		<option>Uttar Pradesh</option>
		<option>Punjab</option>
		<option>Madhya Pradesh</option>
		</select><br>
	  <h6 class="font_14">Postal/Zip Code</h6>
	   <input class="form-control" type="text">
	   <h6 class="text-center mt-3"><a class="button_2" href="#">CALCULATE SHIPPING</a></h6>
	   </div>
	 </div>
	</div>
 </div>	 
</section>


<section id="chat">
 <div class="promo_m pt-5 pb-5 px-4">
  <div class="container-fluid">
    <div class="project_1 row text-center">
	 <div class="col-md-12">
	  <h6 class="col_yell fw-bold">YOU DREAM IT, WE DESIGN IT</h6>
	  <h1 class="text-white mt-3">We can build you the kitchen <br> of your dreams</h1>
	  <h6 class="mb-0 mt-4"><a class="button" href="#">SCHEDULE A CHAT <i class="fa fa-calendar ms-1"></i></a></h6>
	 </div>
	</div>
 </div>
 </div>
</section>

<?php
include ('footer.php');
?>


<script>
window.onscroll = function() {myFunction()};
var navbar_sticky = document.getElementById("navbar_sticky");
var sticky = navbar_sticky.offsetTop;
var navbar_height = document.querySelector('.navbar').offsetHeight;
function myFunction() {
  if (window.pageYOffset >= sticky + navbar_height) {
    navbar_sticky.classList.add("sticky")
	document.body.style.paddingTop = navbar_height + 'px';
  } else {
    navbar_sticky.classList.remove("sticky");
	document.body.style.paddingTop = '0'
  }
}
</script>

</body>

</html>