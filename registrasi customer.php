<?php
include 'koneksi.php';
session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registrasi Customer</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Dr PRO template project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css`	<link rel="stylesheet" type="text/css" href="styles/about.css">
	<link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
	<link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
	<link href="plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/responsive.css">

	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin=""/>
	<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>

	<link rel="stylesheet" type="text/css" href="styles/loginsignup.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


</head>



<body style="background-image: url()">


	
	<!-- Header -->

	<header class="header trans_400">
		<div class="header_content d-flex flex-row align-items-center jusity-content-start trans_400">

			<!-- Logo -->
			<div class="logo">
				<a href="#">
					<div style="color: #5F9EA0	">MediSkin<span style="color:#BDB76B ">Appointment</span></div><hr>
					<div style="color: #556B2F">Make An Appointment <span style="color: #556B2F"> with your favorite clinic!</span></div><hr>
					
				</a>
			</div>

			<!-- Main Navigation -->
			<div class="topnav" id="myTopnav">
				<nav class="main_nav" style="color: black    ">
					<ul class="d-flex flex-row align-items-center justify-content-start">
						<li ><a href="index.html">Home</a></li>
						<li class="active" ><a href="registrasi_clinic">Registrasi Customer</a></li>






						<li ><div class="Login">
							<button onclick="myFunction2()" class="dropbtn" style="font-size: 15px;
							font-weight: 600;
							">Login</button>
							<div id="Dropdown" class="dropdown-content2" style="color: #57ccc3">
								<a href="login.php">Login Customer</a>
								<a href="login_klinik.php">Login Klinik</a>


							</div>
						</div></li>






						<style>
						.dropbtn {
							background-color: white;
							color:  black;

							font-size: 15px;
							border: none;
							cursor: pointer;
						}

						.dropbtn:hover, .dropbtn:focus {
							background-color: white;
							color:  #57ccc3;
						}


						.dropdown {
							position: relative;
							display: inline-block;
						}

						.dropdown-content {
							display: none;
							position: absolute;
							background-color: white;
							min-width: 160px;
							overflow: auto;
							
						}

						.dropdown-content a {
							color: black;
							padding: 12px 16px;
							text-decoration: none;
							display: block;
						}

						.dropdown-content2 {
							display: none;
							position: absolute;
							background-color: white;
							min-width: 160px;
							overflow: auto;
							
						}

						.dropdown-content2 a {
							color: black;
							padding: 12px 16px;
							text-decoration: none;
							display: block;
						}


						.dropdown a:hover {background-color:  white;}

						.show {display: block;}
					</style>
					<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
	document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
	if (!event.target.matches('.dropbtn')) {

		var dropdowns = document.getElementsByClassName("dropdown-content");
		var i;
		for (i = 0; i < dropdowns.length; i++) {
			var openDropdown = dropdowns[i];
			if (openDropdown.classList.contains('show')) {
				openDropdown.classList.remove('show');
			}
		}
	}
}
</script>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction2() {
	document.getElementById("Dropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
	if (!event.target.matches('.dropbtn')) {

		var dropdowns = document.getElementsByClassName("dropdown-content2");
		var i;
		for (i = 0; i < dropdowns.length; i++) {
			var openDropdown = dropdowns[i];
			if (openDropdown.classList.contains('show')) {
				openDropdown.classList.remove('show');
			}
		}
	}
}
</script>
<li><a href="about.php">About Us</a></li>
<li><a href="contact.html">Appointment</a></li>
</ul>
</nav>

</div>


<div class="header_extra d-flex flex-row align-items-center justify-content-end ml-auto">

	<!-- Work Hourse -->


	<!-- Header Social -->
	<div class="social header_social">
		<ul class="d-flex flex-row align-items-center justify-content-start">
			<li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
			<li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
			<li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
		</ul>
	</div>

</div>
<!-- Hamburger -->
<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
</div>
</div>
</header>

<!-- Menu -->

<div class="menu_overlay trans_400"></div>
<div class="menu trans_400">
	<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>

	<div class="menu_extra">
		<div class="menu_link">Mo - Sat: 8:00am - 9:00pm</div>
		<div class="menu_link">+34 586 778 8892</div>
		<div class="menu_link"><a href="#">Make an appointment</a></div>
	</div>
	<div class="social menu_social">
		<ul class="d-flex flex-row align-items-center justify-content-start">
			<li><i class="fas fa-instagram" aria-hidden="true"></i></a></li>
			<li><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
			<li><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
		</ul>
	</div>
</div>


<!-- Home -->
<div class="Home">

	<div class="home d-flex flex-column align-items-start justify-content-end">
		<!-- <div class="background_image" style="background-image:url(images/about.jpg)"></div> -->
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="" data-speed="0.8"></div>
		<div class="home_overlay"><img src="images/1.jpg" alt=""></div>
		<div class="home_container">

			<div id="container">	
	

	<div class="product-details">
		
	
	<h1>What is MediSkin Appointment?</h1>
		
	<span class="hint-star star">
		<i class="fa fa-star" aria-hidden="true"></i>
		<i class="fa fa-star" aria-hidden="true"></i>
		<i class="fa fa-star" aria-hidden="true"></i>
		<i class="fa fa-star" aria-hidden="true"></i>
		<i class="fa fa-star" aria-hidden="true"></i>
	</span>
		
	
<!-- The most important information about the product -->
		<p class="information">" Mau Cantik? Perawatan ke Klinik ternama? Tapi... Bosan, Males ngantri?Sudah saat gunakan Webiste Kami!!"</p>

		
		
<!-- 		Control -->
<div class="control">
	

	
</div>
			
</div>
	
<!-- 	End	Product details   -->
	
	
	
<!-- 	Start product image & Information -->
	
<div class="product-image">
	
	<img src="images/kk.jpg" alt="Omar Dsoky">
	
<!-- 	product Information-->
<div class="info" >
	<h2 class="information" style="color: white">Deskripsi</h2>
<p class="information" style="color: white; text-align: center;"> "MediSkin Appointment adalah Website yang memberi kemudahan untuk melakukan Appointment dengan klinik Ternama. Kamu akan mendapatkan nomor antrian tanpa perlu menunggu!"</p>

</div>
</div>
<!--  End product image  -->


</div>



					
				</div>
			</div>
		</div>
	</div>

</div>


<style type="">
/* fonts  */
@import url('https://fonts.googleapis.com/css?family=Abel|Aguafina+Script|Artifika|Athiti|Condiment|Dosis|Droid+Serif|Farsan|Gurajada|Josefin+Sans|Lato|Lora|Merriweather|Noto+Serif|Open+Sans+Condensed:300|Playfair+Display|Rasa|Sahitya|Share+Tech|Text+Me+One|Titillium+Web');


#container{
	box-shadow: 0 15px 30px 1px rgba(128, 128, 128, 0.31);
	background: rgba(255, 255, 255, 0.90);
	text-align: center;
	border-radius: 5px;
	overflow: hidden;
	margin: 5em auto;
	height: 350px;
	width: 700px;
	
}



/* 	Product details  */
.product-details {
	position: relative;
	text-align: left;
	overflow: hidden;
	padding: 30px;
	height: 100%;
	float: left;
	width: 40%;

}

/* 	Product Name */
#container .product-details h1{
	font-family: 'Old Standard TT', serif;
	display: inline-block;
	position: relative;
	font-size: 34px;
	color: #344055;
	margin: 0;
	
}

#container .product-details h1:before{
	position: absolute;
	content: '';
	right: 0%; 
	top: 0%;
	transform: translate(25px, -15px);
	font-family: 'Farsan', cursive;
	display: inline-block;
	background: #FFA69E;
	border-radius: 5px;
	font-size: 14px;
	padding: 5px;
	color: #FFF;
	margin: 0;
	animation: chan-sh 6s ease infinite;

}


@keyframes chan-sh {
	from  {content: 'Cantik itu?';}
	to  {content: 'Mudah';}
	
}

/*Product Rating  */
.hint-star {
	display: inline-block;
	margin-left: 0.5em;
	color: gold;
	width: 50%;
}


/* The most important information about the product */
#container .product-details > p {
	font-family: 'Farsan', cursive;
	text-align: center;
	font-size: 20px;
	color: #7d7d7d;
	
}

/* control */

.control{
	position: absolute;
	bottom: 20%;
	left: 22.8%;
	
}
/* the Button */
.btn {
	transform: translateY(0px);
	transition: 0.3s linear;
	background: #49C608;
	border-radius: 5px;
  position: relative;
  overflow: hidden;
	cursor: pointer;
	outline: none;
	border: none;
	color: #eee;
	padding: 0;
	margin: 0;
	
}

.btn:hover{transform: translateY(-4px);}

.btn span {
	font-family: 'Farsan', cursive;
	transition: transform 0.3s;
	display: inline-block;
  padding: 10px 20px;
	font-size: 1.2em;
	margin:0;
	
}
/* shopping cart icon */
.btn .price, .shopping-cart{
	background: #333;
	border: 0;
	margin: 0;
}

.btn .price {
	transform: translateX(-10%); padding-right: 15px;
}

/* the Icon */
.btn .shopping-cart {
	transform: translateX(-100%);
  position: absolute;
	background: #333;
	z-index: 1;
  left: 0;
  top: 0;
}

/* buy */
.btn .buy {z-index: 3; font-weight: bolder;}

.btn:hover .price {transform: translateX(-110%);}

.btn:hover .shopping-cart {transform: translateX(0%);}



/* product image  */
.product-image {
	transition: all 0.3s ease-out;
	display: inline-block;
	position: relative;
	overflow: hidden;
	height: 100%;
	float: right;
	width: 50%;
	display: inline-block;
}

#container img {width: 100%;height: 100%;}

.info {
    background: rgba(27, 26, 26, 0.9);
    font-family: 'Farsan', cursive;
    transition: all 0.3s ease-out;
    transform: translateX(-100%);
    position: absolute;
    line-height: 1.9;
    text-align: left;
    font-size: 120%;
    cursor: no-drop;
    color: #FFF;
    height: 100%;
    width: 100%;
    left: 0;
    top: 0;
}

.info h2 {text-align: center}
.product-image:hover .info{transform: translateX(0);}

.info ul li{transition: 0.3s ease;}
.info ul li:hover{transform: translateX(50px) scale(1.3);}

.product-image:hover img {transition: all 0.3s ease-out;}
.product-image:hover img {transform: scale(1.2, 1.2);}
</style>

<!--isiregistrasi----->


<div class="newsletter">
	<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/2.jpg" data-speed="0.8"></div>

	<div class="container">
	
<div class="col">
						<div class="home_content" style="float: center;">
							<div class="home_title" style="font-size: 60px; text-align: right; font-family: times rowman;" >Registrasi Customer</div>
							
						</div>
			<section class="signup" >
				<div class="container " id="con1">
					
					<div class="signup-content">
						<div class="signup-form">
							<form action="simpan.php" method="post" class="register-form" id="register-form">
								<div class="controls">
									<span><i class="fas fa-id-card-alt"></i></span>
									<label class="control-label"></label>
									<input class="form-control" type="text" name="nama"placeholder="Nama Lengkap" style="font-size: 12px;" ><hr>
								</div>
								<div class="controls">
									<span><i class="fas fa-user" style="float: center; "> </i></span>
									<label class="control-label"></label>
									<input class="form-control" type="text" name="username"placeholder="Username" style="font-size: 12px;" ><hr>
								</div>
								<div class="controls">
									<span><i class="fas fa-at" style="float: center; "> </i></span>
									<label class="control-label"></label>
									<input class="form-control" type="text" name="email"placeholder="Email" style="font-size: 12px;" ><hr>
								</div>
								<div class="controls">
									<span><i class="fas fa-qrcode" style="float: center; "> </i></span>
									<label class="control-label"></label>
									<input class="form-control" type="Password" name="pass"placeholder="Password" style="font-size: 12px;" ><hr>
								</div>
								<div class="controls">
									<span><i class="fas fa-edit" style="float: center; "> </i></span>
									<label class="control-label"></label>

									<input class="form-control" type="text" name="umur"placeholder="Umur" style="font-size: 12px;"  ><hr>
								</div>

								<div class="controls">
									<span><i class="fas fa-venus-mars" style="float: center; "> </i></span>
									<label class="control-label"></label>
									<select class="form-control" name="gender" class="required" style="font-size: 12px;">
										<option disabled="disabled" elected="selected" >Gender</option>

										<option value="Laki laki">Laki-laki </option>
										<option value="Perempuan">Perempuan </option>

									</select> <hr> 
								</div>                       

								<div class="controls">
									<span><i class="fas fa-phone" style="float: center; "> </i></span>
									<label class="control-label"></label>

									<input class="form-control" type="text" name="telepon"placeholder="Telepon" style="font-size: 12px;"  ><hr>
								</div>

								<div class="controls">
									<span><i class="fas fa-address-card" style="float: center; "> </i></span>
									<label class="control-label"></label>

									<input class="form-control" type="text" name="alamat"placeholder="Alamat" style="font-size: 12px;"  ><hr>
								</div>

								<div class="form-group">
									<input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />

									<label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
								</div>
								<div class="form-group form-button">
									<input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
								</div>
							</form>
						</div>
						<div class="signup-image">
							<figure><img src="images/card.png" alt="sing up image"></figure>
							<a href="login.html" class="signup-image-link">I am already member</a>
						</div>
					</div>
				</div>
			</section>
					</div>
					


			<!-- Sign up form -->

		</div>
	</div>

</div>






<!-- JS -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/main.js"></script>
<script src="vendor/jquery/jquery.min.js"></script>
<!-- Vendor JS-->
<script src="vendor/select2/select2.min.js"></script>
<script src="vendor/datepicker/moment.min.js"></script>
<script src="vendor/datepicker/daterangepicker.js"></script>

<!-- Main JS-->
<script src="js/global.js"></script>
</div>
</div>


<!-- Footer -->

<footer class="footer" id="1"style="background-image: url(images/qq3.jpg); background-size: 100%">
	<div class="footer_content" >
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 style="text-align: center; color: white; font-family: times rowman; color: darkgrey;">Who Join with Us</h1>
					
				</div>
				<!-- Footer Erha -->
				<div class="col-lg-3 footer_col">
					<div class="footer_contact">
						<div class="footer_title" style="text-align: center; color: darkgrey;">Erha Klinik</div><hr>
						<div class="flip-card">
							<div class="flip-card-inner">
								<div class="flip-card-front">
									<img src="images/11.jpg" alt="Avatar" style="width:300px;height:300px;">
								</div>
								<div class="flip-card-back"style="background-image: url(images/Erha1.jpg); color: black" >
									<ul class="opening_hours_list" ><div class="footer_title" style="color: black;">Opening Hours<hr></div>
										<li class="d-flex flex-row align-items-start justify-content-start">
											<div><i class="fas fa-calendar-check"></i> Senin: </div>
											<div class="ml-auto">9:00am - 8:00pm</div>
										</li>
										<li class="d-flex flex-row align-items-start justify-content-start">
											<div><i class="fas fa-calendar-check"></i> Selasa: </div>
											<div class="ml-auto">9:00am - 8:00pm</div>
										</li>
										<li class="d-flex flex-row align-items-start justify-content-start">
											<div><i class="fas fa-calendar-check"></i> Rabu: </div>
											<div class="ml-auto">9:00am - 8:00pm</div>
										</li>
										<li class="d-flex flex-row align-items-start justify-content-start">
											<div><i class="fas fa-calendar-check"></i> Kamis: </div>
											<div class="ml-auto">9:00am - 8:00pm</div>
										</li>
										<li class="d-flex flex-row align-items-start justify-content-start">
											<div><i class="fas fa-calendar-check"></i> Jumat: </div>
											<div class="ml-auto">9:00am - 8:00pm</div>
										</li>
										<li class="d-flex flex-row align-items-start justify-content-start">
											<div><i class="fas fa-calendar-check"></i> Sabtu: </div>
											<div class="ml-auto">9:00am - 8:00pm</div>
										</li>

									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Footer Airin-->
				
				<div class="col-lg-3 footer_col">
					<div class="footer_contact">
						<div class="footer_title" style="text-align: center;color: darkgrey;">Airin Klinik<hr></div>
						<div class="flip-card">
							<div class="flip-card-inner">
								<div class="flip-card-front">
									<img src="images/16.jpg" alt="Avatar" style="width:300px;height:300px;">
								</div>
								<div class="flip-card-back"style="background-image: url(images/airin1.jpg); color: black">
									<ul class="opening_hours_list" >
										<div class="footer_title" style="color: black">Opening Hours</div><hr>

										<li class="d-flex flex-row align-items-start justify-content-start">
											<div><i class="fas fa-calendar-check"></i> Senin: </div>
											<div class="ml-auto">10:00am - 6:00pm</div>
										</li>
										<li class="d-flex flex-row align-items-start justify-content-start">
											<div><i class="fas fa-calendar-check"></i> Selasa: </div>
											<div class="ml-auto">10:00am - 6:00pm</div>
										</li>
										<li class="d-flex flex-row align-items-start justify-content-start">
											<div><i class="fas fa-calendar-check"></i> Rabu: </div>
											<div class="ml-auto">10:00am - 6:00pm</div>
										</li>
										<li class="d-flex flex-row align-items-start justify-content-start">
											<div><i class="fas fa-calendar-check"></i> Kamis: </div>
											<div class="ml-auto">10:00am - 6:00pm</div>
										</li>
										<li class="d-flex flex-row align-items-start justify-content-start">
											<div><i class="fas fa-calendar-check"></i> Jumat: </div>
											<div class="ml-auto">10:00am - 6:00pm</div>
										</li>
										<li class="d-flex flex-row align-items-start justify-content-start">
											<div><i class="fas fa-calendar-check"></i> Sabtu: </div>
											<div class="ml-auto">10:00am - 6:00pm</div>
										</li>

									</ul>



								</div>
							</div>
						</div>
					</div>
				</div>
				<!-------natasha----->
				<div class="col-lg-3 footer_col">
					<div class="footer_contact">
						<div class="footer_title" style="text-align: center; color: darkgrey;">Natasha Klinik</div><hr>
						<div class="flip-card">
							<div class="flip-card-inner">
								<div class="flip-card-front">
									<img src="images/10.jpg" alt="Avatar" style="width:300px;height:300px;">
								</div>
								<div class="flip-card-back"style="background-image: url(images/8.jpg); color: black" >
									<ul class="opening_hours_list" ><div class="footer_title" style="color: black;">Opening Hours <hr></div>
										<li class="d-flex flex-row align-items-start justify-content-start">
											<div><i class="fas fa-calendar-check"></i> Senin: </div>
											<div class="ml-auto">9:00am - 8:00pm</div>
										</li>
										<li class="d-flex flex-row align-items-start justify-content-start">
											<div><i class="fas fa-calendar-check"></i> Selasa: </div>
											<div class="ml-auto">9:00am - 8:00pm</div>
										</li>
										<li class="d-flex flex-row align-items-start justify-content-start">
											<div><i class="fas fa-calendar-check"></i> Rabu: </div>
											<div class="ml-auto">9:00am - 8:00pm</div>
										</li>
										<li class="d-flex flex-row align-items-start justify-content-start">
											<div><i class="fas fa-calendar-check"></i> Kamis: </div>
											<div class="ml-auto">9:00am - 8:00pm</div>
										</li>
										<li class="d-flex flex-row align-items-start justify-content-start">
											<div><i class="fas fa-calendar-check"></i> Jumat: </div>
											<div class="ml-auto">9:00am - 8:00pm</div>
										</li>
										<li class="d-flex flex-row align-items-start justify-content-start">
											<div><i class="fas fa-calendar-check"></i> Sabtu: </div>
											<div class="ml-auto">9:00am - 8:00pm</div>
										</li>

									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!---------carissa--->
				<div class="col-lg-3 footer_col">
					<div class="footer_contact">

						<div class="footer_title" style="text-align: center; color: darkgrey;">Carissa Klinik<hr></div>
						<div class="flip-card">
							<div class="flip-card-inner">
								<div class="flip-card-front">
									<img src="images/carisa1.jpg" alt="Avatar" style="width:300px;height:300px;">
								</div>
								<div class="flip-card-back"style="background-image: url(images/carisa.jpg); color: black" >
									<ul class="opening_hours_list" ><div class="footer_title" style="color: black;">Opening Hours<hr></div>
										<li class="d-flex flex-row align-items-start justify-content-start">
											<div><i class="fas fa-calendar-check"></i> Senin: </div>
											<div class="ml-auto">10:00am - 6:00pm</div>
										</li>
										<li class="d-flex flex-row align-items-start justify-content-start">
											<div><i class="fas fa-calendar-check"></i> Selasa: </div>
											<div class="ml-auto">10:00am - 6:00pm</div>
										</li>
										<li class="d-flex flex-row align-items-start justify-content-start">
											<div><i class="fas fa-calendar-check"></i> Rabu: </div>
											<div class="ml-auto">10:00am - 6:00pm</div>
										</li>
										<li class="d-flex flex-row align-items-start justify-content-start">
											<div><i class="fas fa-calendar-check"></i> Kamis: </div>
											<div class="ml-auto">10:00am - 6:00pm</div>
										</li>
										<li class="d-flex flex-row align-items-start justify-content-start">
											<div><i class="fas fa-calendar-check"></i> Jumat: </div>
											<div class="ml-auto">10:00am - 6:00pm</div>
										</li>
										<li class="d-flex flex-row align-items-start justify-content-start">
											<div><i class="fas fa-calendar-check"></i> Sabtu: </div>
											<div class="ml-auto">10:00am - 6:00pm</div>
										</li>

									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<style type="">
			.flip-card {
				background-color: transparent;
				width: 300px;
				height: 300px;
				perspective: 1000px;
			}

			.flip-card-inner {
				position: relative;
				width: 100%;
				height: 100%;
				text-align: center;
				transition: transform 0.6s;
				transform-style: preserve-3d;
				box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
			}

			.flip-card:hover .flip-card-inner {
				transform: rotateY(180deg);
			}

			.flip-card-front, .flip-card-back {
				position: absolute;
				width: 100%;
				height: 100%;
				backface-visibility: hidden;
			}

			.flip-card-front {
				background-color: #bbb;
				color: black;
				z-index: 2;
			}

			.flip-card-back {

				background-size: 100%;
				color: white;
				transform: rotateY(180deg);
				z-index: 1;
			}
		</style>

		<!-- Footer Opening Hours -->
	</div>
</div>




</div>
</footer>
<div class="footer_bar" style="background-color: black; text-align: center">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="" style="float: center; text-align: center;">
				<div class="copyright" style="text-align: center; float: center;">
				Copyright by Rina Anjari

				</div>

			</div>
		</div>
	</div>
</div>			
</div>
</footer>
</div>
<link rel="stylesheet" type="text/css" href="css/footer.css">
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/jquery-datepicker/jquery-ui.js"></script>
<script src="js/custom.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-23581568-13');
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-23581568-13');
</script>

</body>
</html>