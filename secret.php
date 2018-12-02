<?php 
	session_start();

	if (!$_SESSION['is_login']) {
		# code...
		die('you no see page!');
	}
 ?>
<html>
	<head>
	<link rel="Stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative:700|Cinzel:700|Oswald" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Fira+Sans|PT+Sans+Narrow|Roboto+Condensed" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Pragati+Narrow" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <script src='https://code.jquery.com/jquery-1.12.0.min.js'></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="crossorigin="anonymous"></script>
		<script src="js/jquery.fullpage.js"></script>
  <script src="js/slideshow.js"></script>
</head>

<body>
<div id='fullpage'>
		<div class="slideshow-container">
			<div class="mySlides fade" id="image1">
		    	<img class='SlideImage'  src="css/images/telecom6.jpg">
		    </div>
		    <div class="mySlides fade" id="image2">
		    	<img class='SlideImage'  src="css/images/telecom21.jpg">
		  	</div>
		  	<div class="mySlides fade" id="image3">
		    	<img class='SlideImage'  src="css/images/telecom4.jpg">
		    </div>
		</div>
		<div class="main">
	<div style="margin-left: 85%;
    font-family: 'Crimson Text', serif;
    font-size: 1.2vw;
    color: white;"><h4>Hello <?php echo $_SESSION['name']; ?> (<a href="logout.php">Logout</a>)</h4></div>
	<button class="button" id="ChngCont">Change Content</button>
	<button class="button" id="ViewQuery">View Queries</button>
</div>
</div>
<script src="js/slideshow.js"></script>
</body>
</html>