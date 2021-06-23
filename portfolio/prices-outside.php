<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
	<title>Gonda Nikolett Photography</title>
		<script type="text/javascript" src="assets\js\lib\jquery-3.5.1.min.js"></script>
		<script type="text/javascript" src="assets\js\lib\bootstrap.min.js"></script>
		<script src="https://kit.fontawesome.com/cd3074c91f.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="assets\css\lib\bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets\css\gonda.css">
</head>
<body>



 <!-- compact navbar -->
<div id="mySidenav" class="sidenav sidebar left">
  <a href="index.php">FŐOLDAL</a>
  <a href="seasonal.php">SZEZONÁLIS AJÁNLAT</a>
  <a href="gallery-main.php">GALÉRIA</a>
	  <div class="tab">
		  	<a href="gallery-female.php">Női portré</a>
		    <a href="gallery-male.php">Férfi portré</a>
		    <a href="gallery-family.php">Családi és gyermek</a>
		    <a href="gallery-couple.php">Páros</a>
		    <a href="gallery-glamour.php">Glamour/Budoir</a>
		    <a href="gallery-branding.php">Branding</a>
	  </div>
  <a href="prices-main.php">ÁRAK</a>
  	  <div class="tab">
	  	    <a href="prices-outside.php">Szabadtéri fotózás</a>
	        <a href="prices-studio.php">Stúdió fotózás</a>
      </div>
  <a href="info.php">INFORMÁCIÓK</a>
  <a class="pb-5" href="contact.php">KAPCSOLAT</a>
</div>

<div id="mySidenav" class="hamburger" onclick="myFunction(this)">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div>

<!-- wide navbar -->
<nav id="navigation-bar">
	<div class="container-fluid nav-container">
		<div class="container">
			<div class="nav-box text-center row ">
				<div class="col-lg-5 "> <!-- left navbar -->
					<ul class="nav-list ">
						<li><a href="index.php">
							FŐOLDAL
						</a></li>
						<li><a href="seasonal-offer.php">
							SZEZONÁLIS AJÁNLAT
						</a></li>
						<li>
							<div class="dropdown"><a href="gallery-main.php">GALÉRIA</a> 
							  <div class="dropdown-content">
							    <a href="gallery-female.php">NŐI PORTRÉ</a>
							    <a href="gallery-male.php">FÉRFI PORTRÉ</a>
							    <a href="gallery-family.php">CSALÁDI ÉS GYERMEK</a>
							    <a href="gallery-couple.php">PÁROS</a>
							    <a href="gallery-glamour.php">GLAMOUR/BUDOIR</a>
							    <a href="gallery-branding.php">BRANDING</a>
							  </div>
							</div>
						</li>
					</ul>
				</div>
				
				<div class="col-lg-2 logo-wrapper "> <!-- middle(logo) navbar -->
					<a href="index.php"><img class="logo" src="imgs/logo2.png"></a>					
				</div>
				
				<div class="col-lg-5 "> <!-- right navbar -->
					<ul class="nav-list ">
						<li>
							<div class="dropdown"><a href="prices-main.php">ÁRAK</a> 
							  <div class="dropdown-content">
							    <a href="prices-outside.php">SZABADTÉRI</a>
							    <a href="prices-studio.php">STÚDIÓ</a>
							  </div>
							</div>
						</li>
						<li><a href="information.php">
							INFORMÁCIÓK
						</a></li>
						<li><a href="contact.php">
							KAPCSOLAT
						</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</nav>








<div class="site-title text-center">
	<span class="title">Szabadtéri fotózás</span>
</div>




<section id="prices">
	<div class="container text-center">
		<div>
			<h1 class="price-title">Csomagok</h1>
		</div>
		<div class="row prices-row">
			<div class=" col-md-4">
				<div class="price-image-frame">
					<img class="price-image" src="imgs/p1.jpg">
				</div>
				<div class="price-text">
					<h2>Mini csomag</h2>
					<p>1,5 óra fotózás</p>
					<p>10 db retusált digitális kép</p>
					<p>25 000 Ft</p>
				</div>
			</div>

			<div class=" col-md-4">
				<div class="price-image-frame">
					<img class="price-image" src="imgs/p1.jpg">
				</div>
				<div class="price-text">
					<h2>Standard csomag</h2>
					<p>2 óra fotózás</p>
					<p>20 db retusált digitális kép</p>
					<p>35 000 Ft</p>
				</div>
			</div>

			<div class=" col-md-4">
				<div class="price-image-frame">
					<img class="price-image" src="imgs/p1.jpg">
				</div>
				<div class="price-text">
					<h2>Maxi csomag</h2>
					<p>2-2,5 óra fotózás</p>
					<p>30 db retusált digitális kép</p>
					<p>Smink</p>
					<p>50 000 Ft</p>
				</div>				
			</div>
		</div>

		<hr>

		<div class="row prices-row text-center">
			<p>A nyers képeket nem tartalmazzák a csomagok, kizárólag a retusált, nagy felbontású képek kerülnek átadásra.</p>

			<p>Fotózást követően egy online galériában tudjátok megtekinteni a fotózáson készült képeket és kiválasztani azokat, amelyek később utómunkával együtt átadásra kerülnek.</p>

			<p>Csomagokon kívüli felár: 2000 Ft/retusált kép.</p>
			<p>A helyszínre külön kérhető sminkes.</p>
		</div>
		<hr>
	</div>
</section>





	<div class="container site-footer">
		<ul class="site-footer-list">
			<li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
			<li><a href=""><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
			<li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			<li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
		</ul>
		<p>© 2021 Gonda Nikolett fotográfus</p>
	</div>







<script type="text/javascript" src="assets\js\gonda.js"></script>
</body>

</html>


<!--



-->