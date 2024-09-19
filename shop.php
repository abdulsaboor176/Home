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
	<link href="css/shop.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">
	<script src="js/bootstrap.bundle.min.js"></script>

</head>

<body>

<?php
include ('header.php');
?>

<section id="center" class="center_shop">
 <div class="promo_m center_om">
  <div class="container-fluid">
    <div class="center_o1 row text-center">
	 <div class="col-md-12">
	   <h6 class="col_yell fw-bold"><a class="text-white" href="#">HOME PAGE</a> <span class="mx-2 text-muted">/</span> SHOP</h6>
	   <h1 class="mb-0 font_60 text-white mt-3">Shop</h1>
	 </div>
	</div>
 </div>
 </div>
</section>

<section id="shop" class="p_3  px-4">
 <div class="container-fluid">
   <div class="shop_1 row">
    <div class="col-md-3">
	 <div class="shop_1l">
	   <div class="shop_1l1">
	     <h5>Categories</h5>
		 <hr class="line mb-4">
		 <h6 class="mb-0"><a href="detail.php">Accessories <span class="pull-right">(6)</span></a></h6><hr>
		<h6 class="mb-0"><a href="detail.php">Clothing <span class="pull-right">(4)</span></a></h6><hr>
		<h6 class="mb-0"><a href="detail.php">Hoodies <span class="pull-right">(5)</span></a></h6><hr>
		<h6 class="mb-0"><a href="detail.php">Music <span class="pull-right">(8)</span></a></h6><hr>
		<h6 class="mb-0"><a href="detail.php">Uncategorized <span class="pull-right">(7)</span></a></h6>
	    </div>
		<div class="shop_1l1 mt-4">
	     <h5>Filter By Price</h5>
		 <hr class="line mb-4">
		 <h6 class="mb-0 font_14">Price: $80 — $400 <a class="bg_yell text-white p-2 ms-3 px-4 d-inline-block" href="detail.php">FILTER</a></h6>
	    </div>
		<div class="shop_1l1 mt-4">
	     <h5>Bestsellers</h5>
		 <hr class="line mb-4">
	    <div class="row shop_1l1i">
		     <div class="col-md-4 col-4 pe-0">
			  <div class="shop_1l1il">
			    <figure class="effect-jazz mb-0">
					<a href="detail.php"><img src="img/31.jpg" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
			 </div>
			 <div class="col-md-8 col-8">
			  <div class="shop_1l1ir">
			   <h6 class="fw-bold"><a href="detail.php">Semper Porta Nulla</a></h6>
			   <h5 class="mb-0 col_yell">$50.00</h5>
			  </div>
			 </div>
	    </div><hr>
		<div class="row shop_1l1i">
		     <div class="col-md-4 col-4 pe-0">
			  <div class="shop_1l1il">
			    <figure class="effect-jazz mb-0">
					<a href="detail.php"><img src="img/32.jpg" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
			 </div>
			 <div class="col-md-8 col-8">
			  <div class="shop_1l1ir">
			   <h6 class="fw-bold"><a href="detail.php">Lorem Ipsum Amet</a></h6>
			   <h5 class="mb-0 col_yell">$40.00</h5>
			  </div>
			 </div>
	    </div><hr>
		<div class="row shop_1l1i">
		     <div class="col-md-4 col-4 pe-0">
			  <div class="shop_1l1il">
			    <figure class="effect-jazz mb-0">
					<a href="detail.php"><img src="img/33.jpg" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
			 </div>
			 <div class="col-md-8 col-8">
			  <div class="shop_1l1ir">
			   <h6 class="fw-bold"><a href="detail.php">Sed Augue Dolor</a></h6>
			   <h5 class="mb-0 col_yell">$60.00</h5>
			  </div>
			 </div>
	    </div>
	    </div>
		<div class="blog_pg1r1 mt-4">
	     <h5>Product Tags</h5>
		 <hr class="line mb-4">
		 <ul class="mb-0">
				 <li class="d-inline-block"><a href="detail.php">Architechture</a></li>
				 <li class="d-inline-block"><a href="detail.php">Construction</a></li>
				 <li class="d-inline-block"><a href="detail.php">Design</a></li>
				 <li class="d-inline-block"><a href="detail.php">Decoration</a></li>
				 <li class="d-inline-block"><a href="detail.php">Furniture</a></li>
				 <li class="d-inline-block"><a href="detail.php">Interior</a></li>
				 <li class="d-inline-block"><a href="detail.php">Mattresses</a></li>
		</ul>
	    </div>
	 </div>
	</div>
	<div class="col-md-9">
	 <div class="shop_1r">
	   <div class="shop_1r1 row">
	      <div class="col-md-8">
		   <div class="shop_1r1l pt-3">
		    <p class="mb-0">Showing 1–9 of 18 results</p>
		   </div>
		  </div>
		  <div class="col-md-4">
		   <div class="shop_1r1r">
		     <select class="form-select" aria-label="Default select example">
			<option selected="">Default Sorting</option>
			<option value="1">Sort by Price</option>
			<option value="2">Sort by Popularity</option>
			<option value="3">Sort by Rating</option>
			<option value="4">Sort by Time</option>
			</select>
		   </div>
		  </div>
	    </div>
	   <div class="shop_1r1 mt-4 row">
	    <div class="col-md-6">
		 <div class="shop_1r1l border_1">
		   <div class="shop_1r1l1 position-relative">
		     <div class="shop_1r1l1i">
			   <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="detail.php"><img src="img/31.jpg" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
			 </div>
			 <div class="shop_1r1l1i1 position-absolute top-0 text-end w-100 p-4 h-100">
			   <ul class="mb-0">
			    <li><a class="border_1 rounded-circle text-center" href="detail.php"><i class="fa fa-heart-o"></i></a></li>
				 <li class="mt-2"><a class="border_1 rounded-circle text-center" href="detail.php"><i class="fa fa-eye"></i></a></li>
				  <li class="mt-2"><a class="border_1 rounded-circle text-center" href="detail.php"><i class="fa fa-share-alt"></i></a></li>
			   </ul>
			 </div>
		   </div>
		   <div class="shop_1r1l2 text-center p-4">
		    <span class="col_yell font_14">
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			</span>
		    <h5 class="fw-bold mt-2"><a href="detail.php">Semper Porta Nulla</a></h5>
			<h4 class="col_yell">$50.00</h4>
			<h6 class="mb-0 mt-3"><a class="button_1" href="detail.php">READ MORE <i class="fa fa-long-arrow-right ms-1"></i></a></h6>
		   </div>
		 </div>
		</div>
		<div class="col-md-6">
		 <div class="shop_1r1l border_1">
		   <div class="shop_1r1l1 position-relative">
		     <div class="shop_1r1l1i">
			   <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="detail.php"><img src="img/32.jpg" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
			 </div>
			 <div class="shop_1r1l1i1 position-absolute top-0 text-end w-100 p-4 h-100">
			   <ul class="mb-0">
			    <li><a class="border_1 rounded-circle text-center" href="detail.php"><i class="fa fa-heart-o"></i></a></li>
				 <li class="mt-2"><a class="border_1 rounded-circle text-center" href="detail.php"><i class="fa fa-eye"></i></a></li>
				  <li class="mt-2"><a class="border_1 rounded-circle text-center" href="detail.php"><i class="fa fa-share-alt"></i></a></li>
			   </ul>
			 </div>
		   </div>
		   <div class="shop_1r1l2 text-center p-4">
		    <span class="col_yell font_14">
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star-half-o"></i>
			 <i class="fa fa-star-o"></i>
			</span>
		    <h5 class="fw-bold mt-2"><a href="detail.php">Lorem Augue Dolor</a></h5>
			<h4 class="col_yell">$55.00</h4>
			<h6 class="mb-0 mt-3"><a class="button_1" href="detail.php">VIEW PRODUCTS <i class="fa fa-long-arrow-right ms-1"></i></a></h6>
		   </div>
		 </div>
		</div>
	   </div>
	   <div class="shop_1r1 mt-4 row">
	    <div class="col-md-6">
		 <div class="shop_1r1l border_1">
		   <div class="shop_1r1l1 position-relative">
		     <div class="shop_1r1l1i">
			   <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="detail.php"><img src="img/33.jpg" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
			 </div>
			 <div class="shop_1r1l1i1 position-absolute top-0 text-end w-100 p-4 h-100">
			   <ul class="mb-0">
			    <li><a class="border_1 rounded-circle text-center" href="detail.php"><i class="fa fa-heart-o"></i></a></li>
				 <li class="mt-2"><a class="border_1 rounded-circle text-center" href="detail.php"><i class="fa fa-eye"></i></a></li>
				  <li class="mt-2"><a class="border_1 rounded-circle text-center" href="detail.php"><i class="fa fa-share-alt"></i></a></li>
			   </ul>
			 </div>
		   </div>
		   <div class="shop_1r1l2 text-center p-4">
		    <span class="col_yell font_14">
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			</span>
		    <h5 class="fw-bold mt-2"><a href="detail.php">Semper Porta Nulla</a></h5>
			<h4 class="col_yell">$50.00</h4>
			<h6 class="mb-0 mt-3"><a class="button_1" href="detail.php">READ MORE <i class="fa fa-long-arrow-right ms-1"></i></a></h6>
		   </div>
		 </div>
		</div>
		<div class="col-md-6">
		 <div class="shop_1r1l border_1">
		   <div class="shop_1r1l1 position-relative">
		     <div class="shop_1r1l1i">
			   <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="detail.php"><img src="img/34.jpg" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
			 </div>
			 <div class="shop_1r1l1i1 position-absolute top-0 text-end w-100 p-4 h-100">
			   <ul class="mb-0">
			    <li><a class="border_1 rounded-circle text-center" href="detail.php"><i class="fa fa-heart-o"></i></a></li>
				 <li class="mt-2"><a class="border_1 rounded-circle text-center" href="detail.php"><i class="fa fa-eye"></i></a></li>
				  <li class="mt-2"><a class="border_1 rounded-circle text-center" href="detail.php"><i class="fa fa-share-alt"></i></a></li>
			   </ul>
			 </div>
		   </div>
		   <div class="shop_1r1l2 text-center p-4">
		    <span class="col_yell font_14">
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star-half-o"></i>
			</span>
		    <h5 class="fw-bold mt-2"><a href="detail.php">Lorem Augue Dolor</a></h5>
			<h4 class="col_yell">$55.00</h4>
			<h6 class="mb-0 mt-3"><a class="button_1" href="detail.php">VIEW PRODUCTS <i class="fa fa-long-arrow-right ms-1"></i></a></h6>
		   </div>
		 </div>
		</div>
	   </div>
	   <div class="shop_1r1 mt-4 row">
	    <div class="col-md-6">
		 <div class="shop_1r1l border_1">
		   <div class="shop_1r1l1 position-relative">
		     <div class="shop_1r1l1i">
			   <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="detail.php"><img src="img/35.jpg" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
			 </div>
			 <div class="shop_1r1l1i1 position-absolute top-0 text-end w-100 p-4 h-100">
			   <ul class="mb-0">
			    <li><a class="border_1 rounded-circle text-center" href="detail.php"><i class="fa fa-heart-o"></i></a></li>
				 <li class="mt-2"><a class="border_1 rounded-circle text-center" href="detail.php"><i class="fa fa-eye"></i></a></li>
				  <li class="mt-2"><a class="border_1 rounded-circle text-center" href="detail.php"><i class="fa fa-share-alt"></i></a></li>
			   </ul>
			 </div>
		   </div>
		   <div class="shop_1r1l2 text-center p-4">
		    <span class="col_yell font_14">
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			</span>
		    <h5 class="fw-bold mt-2"><a href="detail.php">Semper Porta Nulla</a></h5>
			<h4 class="col_yell">$50.00</h4>
			<h6 class="mb-0 mt-3"><a class="button_1" href="detail.php">READ MORE <i class="fa fa-long-arrow-right ms-1"></i></a></h6>
		   </div>
		 </div>
		</div>
		<div class="col-md-6">
		 <div class="shop_1r1l border_1">
		   <div class="shop_1r1l1 position-relative">
		     <div class="shop_1r1l1i">
			   <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="detail.php"><img src="img/36.jpg" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
			 </div>
			 <div class="shop_1r1l1i1 position-absolute top-0 text-end w-100 p-4 h-100">
			   <ul class="mb-0">
			    <li><a class="border_1 rounded-circle text-center" href="detail.php"><i class="fa fa-heart-o"></i></a></li>
				 <li class="mt-2"><a class="border_1 rounded-circle text-center" href="detail.php"><i class="fa fa-eye"></i></a></li>
				  <li class="mt-2"><a class="border_1 rounded-circle text-center" href="detail.php"><i class="fa fa-share-alt"></i></a></li>
			   </ul>
			 </div>
		   </div>
		   <div class="shop_1r1l2 text-center p-4">
		    <span class="col_yell font_14">
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star-o"></i>
			</span>
		    <h5 class="fw-bold mt-2"><a href="detail.php">Lorem Augue Dolor</a></h5>
			<h4 class="col_yell">$55.00</h4>
			<h6 class="mb-0 mt-3"><a class="button_1" href="detail.php">VIEW PRODUCTS <i class="fa fa-long-arrow-right ms-1"></i></a></h6>
		   </div>
		 </div>
		</div>
	   </div>
	   <div class="pages mt-4 row text-center">
		 <div class="col-md-12">
		   <ul class="mb-0">
			<li><a href="detail.php"><i class="fa fa-chevron-left"></i></a></li>
			<li><a class="act" href="detail.php">1</a></li>
			<li><a href="detail.php">2</a></li>
			<li><a href="detail.php">3</a></li>
			<li><a href="detail.php">4</a></li>
			<li><a href="detail.php">5</a></li>
			<li><a href="detail.php">6</a></li>
			<li><a href="detail.php"><i class="fa fa-chevron-right"></i></a></li>
		   </ul>
		 </div>
	 </div>
	 </div>
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