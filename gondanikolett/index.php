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



<div class="page-content-wrapper">

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
  <div class="hamburger-text">MENÜ</div>
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



<section id="carousel">
	<div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="imgs/original/3.jpg" class="d-block w-100" alt="..." data-interval="500">
	    </div>
	    <div class="carousel-item">
	      <img src="imgs/original/3.jpg" class="d-block w-100" alt="..." data-interval="500">
	    </div>
	    <div class="carousel-item">
	      <img src="imgs/original/3.jpg" class="d-block w-100" alt="..." data-interval="500">
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
</section>



<section id="index-contact">
	<div class="container my-5">
		<div class="row contact">
			<div class="">
				<h2>Üdvözöllek a honlapomon!</h2>
				<p>Szilágyi Niki vagyok, lifestyle stílusú fotókat készítek Budapesten, és Pest megye északi részén. Főként portréfotózással, páros fotózásokkal és üzleti jellegű branding fotózásokkal foglalkozom. :)</p>
				<p>Nézz körül a galériáimban, és ha kérdésed van, keress bizalommal!</p>
		    </div>
		</div>
		<hr>
	</div>

</section>




<section id="index-contact">
	<div class="container text-center my-5">
		<h2>KAPCSOLAT</h2>
		<div class="row contact">

			<div class="contact-form p-3 ">
		      <form>

		      	<div class="form-group">
		            <label for="name"></label>
		            <input type="text" class="form-control" id="name" placeholder="Név">
	          	</div>
		        <div class="form-group">
		            <label for="email"></label>
		            <input type="email" class="form-control" id="email" placeholder="E-mail">
		        </div>
		        <div class="form-group">
		            <label for="phonenumber"></label>
		            <input type="text" class="form-control" id="phonenumber" placeholder="Telefon">
	            </div>
	            <h5 class="pt-3">Melyik szolgáltatás érdekel?</h5>
				<form action="/action_page.php">
				   <ul class="contact-orders">
				   	
						<div class="flexbox">
							<div class="col-xl-6">
								<li><label class="" for="female"><input class="order-type" type="checkbox" name="female" value="female"/><p>Női portré</p></label></li>
							</div>
							<div class="col-xl-6">
								 <li><label class="" for="male"><input class="order-type" type="checkbox" name="male" value="male"/><p>Férfi portré</p></label></li>
							</div>
												
							<div class="col-xl-6">
								<li><label class="" for="family"><input class="order-type" type="checkbox" name="family" value="family"/><p>Családi és gyermek</p></label></li>
							</div>
												 
							<div class="col-xl-6">
								<li><label class="" for="couple"><input class="order-type" type="checkbox" name="couple" value="couple"/><p>Páros</p></label></li>
							</div>
												 
							<div class="col-xl-6">
								<li><label class="" for="galmour"><input class="order-type" type="checkbox" name="galmour" value="galmour"/><p>Glamour/Budoir</p></label></li>
							</div>
												 
							<div class="col-xl-6">
								<li><label class="" for="branding"><input class="order-type" type="checkbox" name="branding" value="branding"/><p>Branding</p></label></li>
							</div>
						</div>				 

					</ul>
				</form>


		        <div class="form-group">
		          <label for="message"></label>
		          <textarea type="text" class="form-control" id="message" placeholder="Üzenet"></textarea>
		        </div>

		          <div>
		            <button class="custombutton">Küldés</button>
		          </div>

		      </form>
		    </div>
		</div>
		<hr>
	</div>

</section>


<section id="instagram-index">
	<div class="container-fluid">
		<div class="row">
			<div class="col-6 col-md-3 col-lg no-gutter">
				<a href="https://www.instagram.com/">
					<div class="instagram-photo">
						<div class="overlay"></div>
					</div>
				</a>
			</div>
			<div class="col-6 col-md-3 col-lg no-gutter">
				<a href="https://www.instagram.com/">
					<div class="instagram-photo">
						<div class="overlay"></div>
					</div>
				</a>
			</div>
			<div class="col-6 col-md-3 col-lg no-gutter">
				<a href="https://www.instagram.com/">
					<div class="instagram-photo">
						<div class="overlay"></div>
					</div>
				</a>
			</div>
			<div class="col-6 col-md-3 col-lg no-gutter">
				<a href="https://www.instagram.com/">
					<div class="instagram-photo">
						<div class="overlay"></div>
					</div>
				</a>
			</div>
			<div class="d-none d-lg-block col-6 col-md-3 col-lg no-gutter">
				<a href="https://www.instagram.com/">
					<div class="instagram-photo">
						<div class="overlay"></div>
					</div>
				</a>
			</div>	


			</div>
		</div>
		

		
	</div>
</section>





<!-- 
<section>
	<div class="container">
		<div class="row text-center">
			<div class="col-xl-3 col-md-6">
				<div class="image-wrapper">
					<img class="" src="imgs/original/8.jpg">
				</div>
			</div>
			<div class="col-xl-3 col-md-6">
				<div class="image-wrapper">
					<img class="" src="imgs/original/8.jpg">
				</div>
			</div>
			<div class="col-xl-3 col-md-6">
				<div class="image-wrapper">
					<img class="" src="imgs/original/8.jpg">
				</div>
			</div>
			<div class="col-xl-3 col-md-6">
				<div class="image-wrapper">
					<img class="" src="imgs/original/8.jpg">
				</div>
			</div>
		</div>
	</div>
</section>
 -->




</div>


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