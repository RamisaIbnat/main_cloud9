<?php 
	 include_once "db_login.php";

	session_start();

	if (!$_SESSION['is_login']) {
		# code...
		die('you no see page!');
	}

	if (isset($_POST["update"])){

		$filepath = "images/" . $_FILES["file"]["name"];
 
		if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) 
		{
		echo "<img src=".$filepath." height=200 width=300 />";
		} 
		else 
		{
		echo "Error !!";
		}

		$sl = mysqli_real_escape_string($con, $_POST['sl']);
		$picture = mysqli_real_escape_string($con, $_POST['picture']);
		$description = mysqli_real_escape_string($con, $_POST['description']);

		$query1="INSERT INTO client (picture, description) VALUES ('$picture', '$description')";
		
		$retval = mysqli_query($con, $query1);
		
		header("main_cloud9/secret.php");

		if(!$retval ) {
			die('Could not update data: ' . mysql_error());
			}
			else{
			echo "Updated data successfully\n";
			}

			
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

	<!-- <center><div class="content" id="changeContent">

	 <table >

		<tr>
		<th> Sl</th>
		<th> Product</th>
		<th> Picture </th>
		</tr> 
		<?php 
			// $q = "SELECT * from products";
			// $r = mysqli_query($con,$q);
			// while($row = mysqli_fetch_array($r)){
			// 	echo "<tr>";
			// 	echo "<td>". $row['Sl']."</td>";
			// 	echo "<td>". $row['Product']."</td>";
			// 	echo "<td>". $row['Picture']."</td>";
			// 	echo "</tr>";
			// }
		?>
		</table>

	
		<div id=UpdateInfo>
			<form name="updateList" action="secret.php" method="post">To Update information: 
			<span>Picture <input type="file" name="file"></span>
			 <span>Description <input type="text" name="description" placeholder="Write a description of the item" ></span> -->
			<!-- <input type="Submit" name="update" value="Update information"/><br><br>
			</form>
		</div>
	</table> --> 

	<div id="clientInfo"><h2>User Query: </h2>
		<table >

			<tr>
			<th> Sl</th>
			<th> Name</th>
			<th> Email id </th>
			<th> Company Name</th>
			<th> Product Name </th>
			<th> date </th>
			<th> Query </th>
			
			</tr> 

			<?php 
				$q = "SELECT * from query";
				$r = mysqli_query($con,$q);
				while($row = mysqli_fetch_array($r)){
					echo "<tr>";
					echo "<td>". $row['sl']."</td>";
					echo "<td>". $row['name']."</td>";
					echo "<td>". $row['email']."</td>";
					echo "<td>". $row['comp_name']."</td>";
					echo "<td>". $row['product_name']."</td>";
					echo "<td>".$row['date']."</td>";
					echo "<td>". $row['query']."</td>";
					
					echo "</tr>";
				}
			?>
		 </table>
	 </div>
</div>
<script src="js/slideshow.js"></script>
</body>
</html>