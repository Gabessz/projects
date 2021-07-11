<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
<title>Learning</title>
  <script type="text/javascript" src="assets\js\lib\jquery-3.5.1.min.js"></script>
  <script type="text/javascript" src="assets\js\lib\bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="assets\css\lib\bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets\css\dom_man_main.css">

</head>
<body>

<div class=" custom-container text-center my-5">
	<h1>SIMPLE DOM MANIPULATION</h1>
	<div class="flexbox">
		<div class="col-4">
			<button id="hide-show">Hide/Show</button>
			<button id="fade">Fade</button>
			<button id="slide">Slide</button>
			<button id="simple-animate">Animate</button>
			<button id="start-animation">Start</button>
			<button id="stop-animation">Stop</button>
			<button id="callback">Callback</button>
			<button id="chain-animation">Chaining</button>
		</div>
		<div class="col-8">
			<img id="hide-show-target" src="imgs/1.jpg">
			<img id="fade-target" src="imgs/3.jpg">
			<img id="slide-target" src="imgs/4.jpg">
			<img id="simple-animate-target" src="imgs/5.jpg">
			<img id="start-stop-animation-target" src="imgs/6.jpg">
			<img id="callback-target" src="imgs/8.jpg">
			<img id="chain-animation-target" src="imgs/9.jpg">
		</div>
	</div>

	<div>
	<h1>BASIC STUFF</h1>
		<div class="calculation">
		<h3>Pythagorean calculation</h3>
			<label>Side A:</label>
			<input type="text" id="side-a" value="0"> <br>
			<label>Side B:</label>
			<input type="text" id="side-b" value="0"> <br>
			<input type="button" id="calculate" value="Calculate!">
			<br>
			<p id="solution-pow"></p>
			<p id="solution"></p>

		<h3>Basic stuff</h3>
		<div class="array">
			<!-- <input type="button" id="add-number" value="Add a number to the array!">
			<p></p> -->
			<input type="button" id="show-numbers" value="Show array items!">
			<p id="array"></p>
			<input type="button" id="sum-button" value="Sums up the numbers!">
			<p id="sum"></p>
			<input type="button" id="num-button" value="Shows the number of items!">
			<p id="num"></p>
			<input type="button" id="max-button" value="Shows biggest number!">
			<p id="max"></p>
		</div>
		</div>
	</div>


</div>

	<script type="text/javascript" src="assets\js\dom_man_main.js"></script>
</body>

</html>


