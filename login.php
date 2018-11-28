<?php 
    session_start();
    
    if (!empty($_POST['submit'])) {
		# code...
		include 'db_login.php';
        $sql = "SELECT * FROM users WHERE username='" . $_POST["uname"] ."' and password = '". $_POST["passwd"] . "'";
        
		$result=$con->query($sql);

		// if ($_POST[uname] == 'abul' and $_POST['passwd'] == 'p') {
		if ($row= $result->fetch_assoc()) {
			$_SESSION['is_login'] = true;
			$_SESSION['name'] = $_POST[uname];
			header('Location: secret.php');
			die('passed :)');
		}else{
			echo 'Login failed :(';
		}
	}
 ?>
<html>
	<head>
		<title>login</title>
		<link rel="Stylesheet" href="css\style.css">
		<link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative:700|Cinzel:700|Oswald" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Crimson+Text|Fira+Sans|PT+Sans+Narrow|Roboto+Condensed" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Pragati+Narrow" rel="stylesheet">
		<meta charset=="utf-8">
		<script src='https://code.jquery.com/jquery-1.12.0.min.js'></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="crossorigin="anonymous"></script>
		<script src="js/jquery.fullpage.js"></script>
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
	<h1>Login</h1>
	<form action="" method="POST">
		username: <input type="text" name="uname"/><br>
		password: <input type="password" name="passwd"/><br>
		<input type="submit" name="submit"/>
	</form>
	or <a href="signup.php">Signup</a>
	<script src="js/slideshow.js"></script>
	</body>
</html>