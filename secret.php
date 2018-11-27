<?php 
	session_start();

	if (!$_SESSION['is_login']) {
		# code...
		die('you no see page!');
	}
 ?>
<html>
<body>
	<div style="text-align: right;"><h4>Hello <?php echo $_SESSION['name']; ?> (<a href="logout.php">Logout</a>)</h4></div>
	<h1>Secret Page Here</h1>

</body>
</html>