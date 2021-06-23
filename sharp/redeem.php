<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
<title>Webshop</title>
  <script type="text/javascript" src="assets\js\lib\jquery-3.5.1.min.js"></script>
  <script type="text/javascript" src="assets\js\lib\bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/cd3074c91f.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="assets\css\lib\bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets\css\sharp.css">
  <link href="assets\css\lightbox.css" rel="stylesheet" />
</head>
<body >

<!-- <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button> -->



<div class="page-wrap">



<section>
	<div id="topNav" class="container-fluid">
		<div class="nav">
		  <a href="index.php">Home</a>
		  <a href="gallery.php">Gallery</a>
		  <a href="redeem.php">Redeem</a>
		</div>	
	</div>
</section>


<div class="flash">

<section class="mb-5">
	<div class="container-fluid">
		<div class="container">

			<div class="container bio">
				<div class="row contact">
					<div class="contact-form">
						<h1>Contact</h1>
				      <form>
				          <div class="form-group">
				            <label for="redeem">
				            	You can redeem your code on this page. After submiting the code, you will see the photos that i took.
				            </label>
				            <input type="text" class="form-control" id="redeem" placeholder="Enter your personal code here!">
				          </div>
				          <button id="showgal" class="custombutton" type="button">Redeem</button>
				      </form>
				    </div>
				</div>
			</div>

		<div >
			<h2 class="text-center hiddenh1">Your photo gallery</h2>
				<div class="row hidden"> 
				  <div class="column">
				  	<div><a href="imgs/original/1.jpg" data-lightbox="roadtrip"><img src="imgs/original/1.jpg"></a></div>
					<div><a href="imgs/original/2.jpg" data-lightbox="roadtrip"><img src="imgs/original/2.jpg"></a></div>
					<div><a href="imgs/original/3.jpg" data-lightbox="roadtrip"><img src="imgs/original/3.jpg"></a></div>
					<div><a href="imgs/original/4.jpg" data-lightbox="roadtrip"><img src="imgs/original/4.jpg"></a></div>
					<div><a href="imgs/original/5.jpg" data-lightbox="roadtrip"><img src="imgs/original/5.jpg"></a></div>
				  </div>
				  <div class="column">
				  	<div><a href="imgs/original/6.jpg" data-lightbox="roadtrip"><img src="imgs/original/6.jpg"></a></div>
					<div><a href="imgs/original/7.jpg" data-lightbox="roadtrip"><img src="imgs/original/7.jpg"></a></div>
					<div><a href="imgs/original/8.jpg" data-lightbox="roadtrip"><img src="imgs/original/8.jpg"></a></div>
					<div><a href="imgs/original/9.jpg" data-lightbox="roadtrip"><img src="imgs/original/9.jpg"></a></div>
					<div><a href="imgs/original/10.jpg" data-lightbox="roadtrip"><img src="imgs/original/10.jpg"></a></div>
				  </div> 
				  <div class="column">
				  	<div><a href="imgs/original/5.jpg" data-lightbox="roadtrip"><img src="imgs/original/5.jpg"></a></div>
					<div><a href="imgs/original/4.jpg" data-lightbox="roadtrip"><img src="imgs/original/4.jpg"></a></div>
					<div><a href="imgs/original/3.jpg" data-lightbox="roadtrip"><img src="imgs/original/3.jpg"></a></div>
					<div><a href="imgs/original/2.jpg" data-lightbox="roadtrip"><img src="imgs/original/2.jpg"></a></div>
					<div><a href="imgs/original/1.jpg" data-lightbox="roadtrip"><img src="imgs/original/1.jpg"></a></div>
				  </div>
				  <div class="column">
				  	<div><a href="imgs/original/10.jpg" data-lightbox="roadtrip"><img src="imgs/original/10.jpg"></a></div>
					<div><a href="imgs/original/9.jpg" data-lightbox="roadtrip"><img src="imgs/original/9.jpg"></a></div>
					<div><a href="imgs/original/8.jpg" data-lightbox="roadtrip"><img src="imgs/original/8.jpg"></a></div>
					<div><a href="imgs/original/7.jpg" data-lightbox="roadtrip"><img src="imgs/original/7.jpg"></a></div>
					<div><a href="imgs/original/6.jpg" data-lightbox="roadtrip"><img src="imgs/original/6.jpg"></a></div>
				  </div>
				</div>
			</div>
		</div>



	</div>
</section>
</div>
</div>


	<footer class="footer wrapper">
		
		<div class="flexbox container pb-3">
		    <div>
		          <a href="https://www.facebook.com/nikolett.gonda.7" class="fb-ic">
		            <i class="fab fa-facebook-f fa-lg white-text "> </i>
		          </a>
		    </div>
		    <div>
		          <a href="https://www.twitter.com" class="tw-ic">
		            <i class="fab fa-twitter fa-lg white-text "> </i>
		          </a>
		    </div>
		    <div>
		          <a href="https://www.linkedin.com">
		            <i class="fab fa-linkedin-in fa-lg white-text "> </i>
		          </a>
		    </div>
		    <div>
		          <a href="https://www.instagram.com">
		            <i class="fab fa-instagram fa-lg white-text "> </i>
		          </a>
		    </div>
	  	</div>
  
	  <div>
	  	Készítette: 
	    <a href="https://www.facebook.com/anka.gabor.52"> Anka Gábor</a>
	  </div>

	</footer>


</div>

<script type="text/javascript" src="assets\js\sharp.js"></script>
<script src="assets\js\lightbox.js"></script>
</body>

</html>


<!--


<div class="dropdown">
			  <button onclick="myFunction()" class="dropbtn">
			  	<i class="fas fa-bars"></i>
			  </button>
			  <div id="myDropdown" class="dropdown-content">
			    <a href="#home">Home</a>
			    <a href="#about">About</a>
			    <a href="#contact">Contact</a>
			  </div>
			</div>
			<div class="navs">
				<ul>
					<li>About</li>
					<li>Gallery</li>
					<li>Code</li>
					<li>Contact</li>
				</ul>
			</div>
-->