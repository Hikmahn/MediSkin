
<?php
include 'koneksi.php';
session_start();
 


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Klinik</title>
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

<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
</head>



<body style="background-image: url(images/1.jpg) ; width:100%">


	
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
						<li class="active" ><a href="index.php">Home</a></li>
						
						<li><a href="registrasi_clinic.php">Register for Clinic</a></li>
						
						<li class="active"><a href="login_klinik.php">Login</a></li>

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
function myFunction2() {
	document.getElementById("Dropdown").classList.toggle("show");
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

<li><a href="about.php">About Us</a></li>
<li><a href="datadokter.php">Doctors</a></li>
<li><a href="Clinic.html">Clinic</a></li>
<li><a href="appointment.php">Appointment</a></li>
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

	  <div class="social header_social">
    <ul class="d-flex flex-row align-items-center justify-content-start">
      <li><a href="http://www.instagram.com"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
      <li><a href="http://www.facebook.com"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
      <li><a href="http://www.twitter.com"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
    </ul>
  </div>
	<!--<div class="social menu_social">
		<ul class="d-flex flex-row align-items-center justify-content-start">
			<li><i class="fas fa-instagram" aria-hidden="true"></i></a></li>
			<li><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
			<li><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
		</ul>
	</div>-->
</div>

<!-- Home -->



<!--isiregistrasi----->


<div class="newsletter">
	<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="" data-speed="0.8"></div>
	<div class="container">
		<div class="row">

			<section class="sign-in">
				<div class="container">
					<div class="signin-content">
						<div class="signin-image">
							<figure><img src="images/id.png" alt="sing up image" style="border-image: inherit; border-style: double;"></figure>
							<a href="registrasi customer.php" class="signup-image-link">Create an account clinic</a>
						</div>

						<div class="signin-form" style=" padding: 15px; border-color: lightgrey;">
							<h2 class="form-title" style="font-family: timesrowman">Login as Clinic</h2>
							<form method="POST" class="register-form" id="login-form"  style="border-radius: 10px;">
								<div class="form-group">
									<label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
									<input type="text" name="email" id="Email" placeholder="Email" style="border-radius: 10px;" />
								</div>
								<div class="form-group">
									<label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
									<input type="password" name="password" id="your_pass" placeholder="Password" style="border-radius: 10px;"/>
								</div>
								<div class="form-group">
									<input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
									<label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
								</div>
								<div class="form-group form-button">
									<input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
								</div>
							</form>

						</div>
					</div>
				</div>
			</section>

<?php

	 if (isset($_POST['signin']))
                                    {
                                     $ambil=$koneksi->query ("SELECT * FROM data_clinic WHERE email='$_POST[email]' AND password='$_POST[password]'");
                                      $cocok=$ambil->num_rows;
                                      if($cocok==1)
                                      {
                                      	
                                        $klinik=$ambil->fetch_assoc();
                                        $_SESSION['klinik']=$klinik['klinik'];
                                         $_SESSION['nama_pemilik']=$klinik['nama_pemilik'];
                                          $_SESSION['email']=$klinik['email'];
                                          $_SESSION['telepon']=$klinik['telepon'];
                                           $_SESSION['alamat']=$klinik['alamat'];
                                         	  $_SESSION['jadwal_klinik']=$klinik['jadwal_klinik'];
                                         	   $_SESSION['berlangganan']=$klinik['berlangganan'];
                                         	  $_SESSION['level']=$klinik['level'];
                                         
                                         
                                       echo"<script>alert('Anda berhasil Login');</script>";
                                       echo "<meta http-equiv='refresh'content='1;url=myclinic.php'>";

                                      }
                                      else{
                                         echo"<script>alert('Anda gagal login, periksa kembali akun anda');</script>";
                                       echo "<meta http-equiv='refresh'content='1;url=login_klinik.php'>";
                                      }

                                    }
                                    ?>

 


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
<div class="row newsletter_row">
	<div class="col-lg-8 offset-lg-2">

	</div>
</div>
</div>
</div>
</div>

<!-- Footer -->

<footer style="background-color:black ;">
 <div class="container">
   <div class="row">
   
    
  <div class="col-md-4 col-sm-6 col-xs-12">

            <div class="col-md-4 col-sm-6 col-xs-12">
              <span class="logo" id="ku" style="color: #5F9EA0; font-size: 32px; font-style: italic;"><strong>MediSkin</strong></span>
              	<span style="color:#BDB76B;font-size: 32px; font-style: italic;">Appointment</span><hr>
            </div>
            </div>


    <div class="col-md-4 col-sm-6 col-xs-12">
              <ul class="address">
                    <span>Contact Us</span>       
                    <li>
                       <i class="fas fa-phone" aria-hidden="true"></i> : <a href="#">     +62 225 757 630</a>
                    </li> 
                    <li>
                       <i class="fas fa-envelope" aria-hidden="true"></i> : <a href="#">   MediSkinku77@gmail.com</a>
                    </li> 
               </ul>
           </div>


            <div class="col-md-4 col-sm-6 col-xs-12">
              <ul class="address">
                    <span>Find Us</span>       
                    <li>
                       <i class="fab fa-facebook" aria-hidden="true"></i>  : <a href="#">  MediSkin_Appointment</a>
                    </li> 
                      <li>
                       <i class="fab fa-twitter" aria-hidden="true"></i>   : <a href="#">  MediSkinku</a>
                    </li> 
                    <li>
                       <i class="fab fa-instagram" aria-hidden="true"></i> : <a href="#">  MediSkin_Appointment</a>
                    </li> 
               </ul>
           </div>
      <div class="col-12">
      <h6 style="text-align:center;">Copy Right by Rina Anjari</h6>
      </div>
  </div>
</div>
</footer>
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