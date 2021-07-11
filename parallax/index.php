<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
<title>Parallax</title>
  <script type="text/javascript" src="assets\js\lib\jquery-3.5.1.min.js"></script>
  <script type="text/javascript" src="assets\js\lib\bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/cd3074c91f.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="assets\css\lib\bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets\css\parallax.css">

</head>
<body>

<!-- <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button> -->
	<div class="scroller">
			<div id="buzi"> pos </div>

					<br>

			<div>Max height: 
				<div class="height">0</div>
			</div>
			<div>Top of screen: 
				<div class="scroll">0</div>
			</div>
			<div>Screen mid: 
				<div class="middle">0</div>
			</div>

					<br>

			<div>About position: 
				<div class="aboutPos">0</div>
			</div>
			<div>Gal position: 
				<div class="galPos">0</div>
			</div>
			<div>Contact position: 
				<div class="contactPos">0</div>
			</div>

					<br>

			<div>About bot: 
				<div class="aboutBot">0</div>
			</div>
			<div>Gal bot: 
				<div class="galBot">0</div>
			</div>
			<div>Contact bot: 
				<div class="contactBot">0</div>
			</div>
	</div>

<nav class="nav-wrap nav">
	  <ul class="group" id="example-two">
	  	
		  	<li class="home current_page_item_two">
		  		<a href="#">Home</a></li>
		    <li>
		    	<a class="about navAbout" href="#about">About</a></li>
		    <li>
		    	<a class="gallery navGal" href="#gallery">Gallery</a></li>
		    <li>
		    	<a class="contact navContact" href="#contact">Contact</a></li>
	  </ul>
</nav>

<main>
<div class="parallax1"></div>

<section id="about" class="">
	<div class="container-fluid">
		<div class="container py-5 gal">
			<div class="row">
				<div class="">
					<div class="text-center">
						<h3 class="">Rólam</h3>
						<p><em>Szakmám a hobbim</em></p>
					</div>		
					<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</div>
			</div>
			<div class="row">

				<div class="column text-center">
					<p><strong>Kutyi</strong></p>
					<img class="image mb-3" src="imgs/final/bio.jpg">
				</div>

				<div class="column text-center">
					<h3>Mottóim:</h3>
					<p>"Bármire képes vagy, csak tanulj meg hinni magadban."</p>
					<p>"Ha nem valósítod meg a saját álmaidat, akkor valaki másnak fogsz dolgozni, és majd az ő álmait fogod megvalósítani." - Tony Gaskins</p>
					<p>"Soha ne adj fel egy álmot pusztán azért, mert sok időbe telne elérni. Az idő mindenképp eltelik..."</p>					
				</div>
			</div>
		</div>
	</div>
	<div id="aboutBot"></div>
</section>
		

<div class="parallax2" >
	<div class="parallax-center">
		<span>PORTFOLIO</span>
	</div>
</div>

<section id="gallery" class="">
	<div class="container-fluid" >
		<div class="container my-5 " >
			<div class="text-center">
				<h3>Munkáim</h3>
				<p>
					<em>Szemezgess a képek között :)</em>
				<br>
					<em>Képre kattintva nagyítható </em>
				</p>
			</div>

				<div class="row gallery mb-5 gal">
				  <div class="columng">
				  	<a href="imgs/original/1.jpg" data-lightbox="roadtrip"><img src="imgs/original/1.jpg"></a>
					<a href="imgs/original/2.jpg" data-lightbox="roadtrip"><img src="imgs/original/2.jpg"></a>
					<a href="imgs/original/3.jpg" data-lightbox="roadtrip"><img src="imgs/original/3.jpg"></a>
					<a href="imgs/original/4.jpg" data-lightbox="roadtrip"><img src="imgs/original/4.jpg"></a>
					<a href="imgs/original/5.jpg" data-lightbox="roadtrip"><img src="imgs/original/5.jpg"></a>
				  </div>
				  <div class="columng">
				  	<a href="imgs/original/6.jpg" data-lightbox="roadtrip"><img src="imgs/original/6.jpg"></a>
					<a href="imgs/original/7.jpg" data-lightbox="roadtrip"><img src="imgs/original/7.jpg"></a>
					<a href="imgs/original/8.jpg" data-lightbox="roadtrip"><img src="imgs/original/8.jpg"></a>
					<a href="imgs/original/9.jpg" data-lightbox="roadtrip"><img src="imgs/original/9.jpg"></a>
					<a href="imgs/original/10.jpg" data-lightbox="roadtrip"><img src="imgs/original/10.jpg"></a>
				  </div> 
				  <div class="columng">
				  	<a href="imgs/original/5.jpg" data-lightbox="roadtrip"><img src="imgs/original/5.jpg"></a>
					<a href="imgs/original/4.jpg" data-lightbox="roadtrip"><img src="imgs/original/4.jpg"></a>
					<a href="imgs/original/3.jpg" data-lightbox="roadtrip"><img src="imgs/original/3.jpg"></a>
					<a href="imgs/original/2.jpg" data-lightbox="roadtrip"><img src="imgs/original/2.jpg"></a>
					<a href="imgs/original/1.jpg" data-lightbox="roadtrip"><img src="imgs/original/1.jpg"></a>
				  </div>
				  <div class="columng">
				  	<a href="imgs/original/10.jpg" data-lightbox="roadtrip"><img src="imgs/original/10.jpg"></a>
					<a href="imgs/original/9.jpg" data-lightbox="roadtrip"><img src="imgs/original/9.jpg"></a>
					<a href="imgs/original/8.jpg" data-lightbox="roadtrip"><img src="imgs/original/8.jpg"></a>
					<a href="imgs/original/7.jpg" data-lightbox="roadtrip"><img src="imgs/original/7.jpg"></a>
					<a href="imgs/original/6.jpg" data-lightbox="roadtrip"><img src="imgs/original/6.jpg"></a>
				  </div>
				</div>
		</div>
	</div>
	<div id="galBot"></div>
</section>

<div class="parallax3">
	<div class="parallax-center">
		<span>Kapcsolat</span>
	</div>
</div>

<section id="contact" class="">
	<div class="container-fluid">
		<div class="container my-5 gal">
			<div class="text-center">
				<h3>Lorem ipsum dolor sit amet</h3>
				<p><em>Lorem ipsum dolor sit amet!</em></p>
			</div>
		</div>
	</div>
	<div id="contactBot"></div>
</section>

</main>

<script type="text/javascript" src="assets\js\parallax.js"></script>
</body>

</html>
