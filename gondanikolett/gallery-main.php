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


<!-- Core CSS file -->
<link rel="stylesheet" href="assets/gallery/photoswipe.css"> 

<!-- Skin CSS file (styling of UI - buttons, caption, etc.)
     In the folder of skin CSS file there are also:
     - .png and .svg icons sprite, 
     - preloader.gif (for browsers that do not support CSS animations) -->
<link rel="stylesheet" href="assets/gallery/default-skin/default-skin.css"> 

<!-- Core JS file -->
<script src="assets/gallery/photoswipe.min.js"></script> 

<!-- UI JS file -->
<script src="assets/gallery/photoswipe-ui-default.min.js"></script> 





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










<section>
	<div class="text-center">
		<h1 class="my-5">Galériák</h1>
			<div class="flexbox card-box">

				
				<div class="card" style="max-width: 20rem;">
				  <a href="gallery-female.php"><img class="card-img-top"  src="imgs/original/1.jpg" alt="Card image cap"></a>
				  <div class="card-body text-center">
				    <p class="card-text">Női portré</p>
				  </div>
				</div>

				<div class="card" style="max-width: 20rem;">
				   <a href="gallery-male.php"><img class="card-img-top" src="imgs/original/dog.jpg" alt="Card image cap"></a>
				  <div class="card-body">
				    <p class="card-text">Férfi portré</p>
				  </div>
				</div>
				<div class="card" style="max-width: 20rem;">
				  <a href="gallery-family.php"><img class="card-img-top" src="imgs/family/familymain.jpg" alt="Card image cap"></a>
				  <div class="card-body">
				    <p class="card-text">Családi és gyermek</p>
				  </div>
				</div>
				<div class="card" style="max-width: 20rem;">
				   <a href="gallery-couple.php"><img class="card-img-top" src="imgs/original/8.jpg" alt="Card image cap"></a>
				  <div class="card-body">
				    <p class="card-text">Páros</p>
				  </div>
				</div>
				<div class="card" style="max-width: 20rem;">
				   <a href="gallery-glamour.php"><img class="card-img-top" src="imgs/original/1.jpg" alt="Card image cap"></a>
				  <div class="card-body">
				    <p class="card-text">Glamour/Budoir</p>
				  </div>
				</div>
				<div class="card" style="max-width: 20rem;">
				   <a href="gallery-branding.php"><img class="card-img-top" src="imgs/original/1.jpg" alt="Card image cap"></a>
				  <div class="card-body">
				    <p class="card-text">Branding</p>
				  </div>
				</div>

		</div>
	</div>
</section>








<div class="container site-footer">
	<hr>
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