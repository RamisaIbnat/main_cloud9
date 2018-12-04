<?php
    include_once "db_login.php"; 

    if (!$con)   /*  check if the connection was actually successful  */
    {
        exit("Could not connect to the database: <br/>" . 
            htmlspecialchars(mysql_error()) );
    }
    else{
        // echo "connected";

        if (isset($_POST["submit"])){

            $name = mysqli_real_escape_string($con, $_POST['name']);
			$email = mysqli_real_escape_string($con, $_POST['email']);
			$comp_name = mysqli_real_escape_string($con, $_POST['comp_name']);
            $product_name = mysqli_real_escape_string($con, $_POST['product_name']);
            $query = mysqli_real_escape_string($con, $_POST['query']);

            // $sqlMech="UPDATE mechanics SET Appointments = 'Appointments'+1 WHERE Name = '$mechanic'";
            // $res1 = mysqli_query($con,$sqlMech);
            
            $sql="INSERT INTO query (name, email, comp_name, product_name, query)
                VALUES
                ('$name','$email', '$comp_name','$product_name', '$query')";

            if (!mysqli_query($con, $sql)){
                die('Error: ' . mysqli_connect_error($con));
            }
            else{
                header("main_cloud9/index.php");
            }
        }
	}
    
?>

<!DOCTYPE html>
<html>
<head>
  <title>Cloud9/homepage</title>
  <link rel="Stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative:700|Cinzel:700|Oswald" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Fira+Sans|PT+Sans+Narrow|Roboto+Condensed" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Pragati+Narrow" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <meta charset="utf-8">
  <script src='https://code.jquery.com/jquery-1.12.0.min.js'></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="crossorigin="anonymous"></script>
  <script src="js/jquery.fullpage.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
</head>
<body>
<!-- Slideshow container -->
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
			<div id="login" id="login1"><a href="login.php">Login</a></div>
			<div class="logoContainer"></div>
			<div class="heading">CLOUD 9</div>
			<div class="subHeading">BEST IN THE BUSINESS</div>
			<div class= navbarContainer2>
		    	<div class="hexagon_container" id="hex1">
			    	<span class="navbar2" id="home" onClick="window.location='#content1'" style="{transition:300ms;}">Home</span>
			    
			    	<svg class="poly" version="1.1" xmlns="http://www.w3.org/2000/svg" width="10vw" height="17vh" stroke="black" stroke-width="4" viewbox="0 0 320 277.12812921102034" style="filter: drop-shadow(rgba(255, 255, 255, 0.5) 0px 0px 10px);">
			    		<path id ='path1' fill="#fff" d="M0 138.56406460551017L80 0L240 0L320 138.56406460551017L240 277.12812921102034L80 277.12812921102034Z">
			    		</path>
			    	</svg>
			    </div>
			    <div class="hexagon_container" id="hex2">

			    	<svg class="poly" version="1.1" xmlns="http://www.w3.org/2000/svg" width="10vw" height="17vh" stroke="black" stroke-width="4" viewbox="0 0 320 277.12812921102034" style="filter: drop-shadow(rgba(255, 255, 255, 0.5) 0px 0px 10px);">
			    		<path fill="#fff" d="M0 138.56406460551017L80 0L240 0L320 138.56406460551017L240 277.12812921102034L80 277.12812921102034Z">
			    		</path>
			    	</svg>
			    </div>
			    <div class="hexagon_container" id="hex3" onClick="window.location='#products_id'">
		    		<span class="navbar2" id="products">Products</span>

			    	<svg class="poly" id ="hexa" version="1.1" xmlns="http://www.w3.org/2000/svg" width="10vw" height="17vh" stroke="black" stroke-width="4" viewbox="0 0 320 277.12812921102034" style="filter: drop-shadow(rgba(255, 255, 255, 0.5) 0px 0px 10px);"><path id='path2' fill="	#000000" d="M0 138.56406460551017L80 0L240 0L320 138.56406460551017L240 277.12812921102034L80 277.12812921102034Z"></path></svg>
			    </div>
			    <div class="hexagon_container" id="hex4">
		    		<span class="navbar2" id="about" onClick="window.location='#about_id'">Affiliations</span>

			    	<svg class="poly" version="1.1" xmlns="http://www.w3.org/2000/svg" width="10vw" height="17vh" stroke="black" stroke-width="4" viewbox="0 0 320 277.12812921102034" style="filter: drop-shadow(rgba(255, 255, 255, 0.5) 0px 0px 10px);"><path id='path3' fill="#fff" d="M0 138.56406460551017L80 0L240 0L320 138.56406460551017L240 277.12812921102034L80 277.12812921102034Z"></path></svg>
			    </div>
			    <div class="hexagon_container" id="hex5">
		    		<span class="navbar2" id="ceo" onClick="window.location='#content_ceo'">About CEO</span>

			    	<svg class="poly" version="1.1" xmlns="http://www.w3.org/2000/svg" width="10vw" height="17vh" stroke="black" stroke-width="4" viewbox="0 0 320 277.12812921102034" style="filter: drop-shadow(rgba(255, 255, 255, 0.5) 0px 0px 10px);">
			    		<path id='path4' fill="#fff" d="M0 138.56406460551017L80 0L240 0L320 138.56406460551017L240 277.12812921102034L80 277.12812921102034Z">
			    		</path>
			    	</svg>
			    </div>
			    <div class="hexagon_container" id="hex6">
		    		<span class="navbar2" id="contact" onClick="window.location='#query'">Queries</span>
		    		
			    	<svg class="poly" version="1.1" xmlns="http://www.w3.org/2000/svg" width="10vw" height="17vh" stroke="black" stroke-width="4" viewbox="0 0 320 277.12812921102034" style="filter: drop-shadow(rgba(255, 255, 255, 0.5) 0px 0px 10px);"><path id='path5' fill="#fff" d="M0 138.56406460551017L80 0L240 0L320 138.56406460551017L240 277.12812921102034L80 277.12812921102034Z"></path></svg>
			    </div>
			    <div class="hexagon_container" id="hex7">
			    	<svg class="poly" version="1.1" xmlns="http://www.w3.org/2000/svg" width="10vw" height="17vh" stroke="black" stroke-width="4" viewbox="0 0 320 277.12812921102034" style="filter: drop-shadow(rgba(255, 255, 255, 0.5) 0px 0px 10px);">
			    		<path fill="#fff" d="M0 138.56406460551017L80 0L240 0L320 138.56406460551017L240 277.12812921102034L80 277.12812921102034Z">
			    		</path>
			    	</svg>
			    </div>
			</div>

			<div class="content" id="content1"> 
		  		<div id="content_home">  

		    		<h3>Cloud 9</h3>
					  <p>Cloud 9 is a renowned leading company in the communication sector of Bangladesh. It deals with the supply of telecommunication, wireless communication, public address, security equipment, surveillance equipment, Special equipment, Test Equipment, Electrical and Electronics equipment. The company is having mostly dedicated three main principles around the globe. Our main office is in the heart of the capital city of Dhaka. The company has a number of hard-working men that run every facet of the business. We create our market by supplying quality products with competitive price. We do maintain a continuous and unbreakable supply chain within the country. Besides we have strong selective dealers around the countries who are dedicated and trust worthy. Our marketing strategy is to involve whole team and generate team efforts to create market viability in this sector. We always give more importance to the customer’s interest and trust by supplying qualitative products with affordable price.</p> 
					  <p>The country having Different Ministries, Army, Navy, Air Force, Police, other paramilitary force, different private organization are the major users of wireless equipment i.e. different categories of transceiver namely UHF,VHF,HF, Hand held walkie-talkie, related accessories and public address equipment. The company provides different categories of transceiver, telecom equipments , public address, surveillance equipment, Special equipment, security equipments, Electrical and Electronic equipments and related accessories to above mentioned organizations. Company also provide consultancy service to any organization in regards to Telephone and Radio Communication. In addition, we also provide trained personal to operate this Equipment to any organization. We provide training to individual to operate this Equipment. We provide operator as a third party employer to any organization on the basis of yearly contract. Our company wants to import a little different and special quality and looking forward to the exporters and manufacturer around the globe with the marketing viability.</p>              
		    	</div>
			</div>

			<div class="content" id="content_ceo">
				<div class="ceo_des" id="des1">
					<div class="ceo_text"><h4>ABOUT OUR CEO</h4>
						<p><ul>
							<li>Experience over 28 years in Army with different Capacity of various level of Administration, Human Resource Management, Operations and Business Development Management as Strategy Planner, Policy maker & Policy Implementation Monitor. </li>
							<br><li>Graduated from Bangladesh Military Academy, commissioned as lieutenant in the Core of Signals prior to 12 months' basic training from the Schools of Signals on Modern Communication, with the inclusion of Computer course in Bangladesh Army.</li>
							<br><li>Participated in the various National Crisis and Management with different capacities, receiving distinguished appreciation both from Civil and military authorities. </li>
							<br><li>Experienced the Risk Management, Financial Management, Security Management, Management of local Government issues and Trans Border Issues in Border Guard Bangladesh, later serving as Technical Maintenance Officer, where he was responsible for Repair, maintenance and procurement of all equipment related to communication and communication security.</li>
							<br><li>Was one of the pioneer member of National Frequency Spectrum Committee.</li>
							<br><li>Served in United Nation twice as a communication experts in Sector and Force Headquarter level</li>
							<br><li>Served in Military Institute of Science and Technology (MIST)as a Researcher</li>
						</ul></p>
					 </div>
				 </div>
			     <div class="ceo_des" id="des2">
					<div class="ceo_text">
						<h4>WORK EXPERIENCE</h4>
							<p><ul>
								<li><h5>ADMINISTRATIVE</h5>
								<p>Served as Adjutant, Staff Officer, Second in Command and Officer Commanding in Battalion in home and Officer Commanding in Company abroad. Experienced the Administrative Management, Human Resource Management, Recruiting, Training Assessment and Team Building in different capacity of Battalion and Company organogram. Deployed in the National Crisis in aid of civil power to help the distress and attained sufficient knowledge in Man Management, Crisis Management, Security Management and control.</p></li>
								
								<li><h5>LOGISTIC</h5>
								Served in the Home of Signals,Area Headquarter as Deputy Adjutent Quarter Master General in the frame work of a wide parameter where all Brigades and Units were involved. The frontier of works was to maintain the supply chain of logistic items, Transportations, Maintenance/ Distribution of government items and Planning of all movements of Brigades and Units.</p></li>
								
								<li><h5>ACCOUNTING</h5>
								Accountable for the Pay and Allowances of the subordinates while served as Second in Command in an Army and BDR Units. Dealt with small budget and distribution of correct amount in the required fields. Monitor and Audit the funds of the Units. Maintained the accountability of all the expenses.</p></li>
								
								<li><h5>SECURITY</h5>
								Liable for the external and internal Security of the Unit while serving as Second in Command. Also experienced the Trans Border Security, Security of Man and Materials and Border Security while serving in BDR.</p></li>
						</ul></p>
				 	 </div>
				</div>
				<div class="ceo_des" id="des3">
					<div class="ceo_text">
						<h4>PROESSIONAL EXPERIENCE</h4>
						<h5>ADMINISTRATIVE</h5>
						<p>Serving over the years in Army with different capacities, following professional experiences have been conceived:</p>
						<ul>
							<li>Recruiting and Staffing & Employee orientation.</li>
							<li>Performance Management and Improvement systems.</li>
							<li>Organization Development & Employee relations.</li>
							<li>Development and training.</li>
							<li>Policy development and documentation.</li>
							<li>Employee and community communication.</li>
							<li>Compensation and benefits administration.</li>
							<li>Employee safety, welfare and wellness. </li>
							<li>Employee services and counseling.</li>
							<li>Prepare plan and issue work schedules, deadlines, and duty assignments of office and administrative employees and staffs.</li>
							<li>Implement corporate and departmental policies, procedures, and service standards in conjunction with management.</li>
							<li>Consult with concerned and other personnel to resolve any kinds of problems.</li>							
						 </ul>
					 </div>
			     </div>
			 </div>
			 <div class="content" id="products_id"> 
				 <div id="content_products">
				 <?php
				 //Get image data from database
					// $result = $con->query("SELECT image FROM images WHERE id = {$_GET['id']}");
					
					// if($result->num_rows > 0){
					// 	$imgData = $result->fetch_assoc();
						
					// 	//Render image
					// 	header("Content-type: image/jpg"); 
					// 	echo $imgData['image']; 
					// }else{
					// 	echo 'Image not found...';
					// }
					?>
				 <table >

					<tr>
					<th><img src=""></th>
					<th></th>
					</tr> 
					<?php 
						$q = "SELECT * from images";
						$r = mysqli_query($con,$q);
						$i=1;
						while($row = mysqli_fetch_array($r))
						
						{
							echo "<tr>";
							echo "<td>."http://localhost/main_cloud9/view.php?id=". $row['id']."</td>";
							echo "<td>". $row['description']."</td>";
							echo "</tr>";
							$i++;
						}
					?>
				 </table>
				 </div>
				 
			 </div>

			 <div class="content" id="about_id"> 
				 <div id="content_about"> 
				 </div>
				 <div class="about_box" id="box1">
				 	 <h3>Our Sister Companies:</h3>
						<ul>
							<li>Ektoo Limited- IT based Company </li>
							<li>Mexim	- Trading Company</li>
							<li>Bay Power - Manufacture of heavy duty transformer</li>
						</ul>
				 </div>
				 <div class="about_box" id="box2">
					<h3>Our Principal Clients:</h3>
					<ul>
						<li>Bangladesh Army</li>
						<li>Border Guard Bangladesh (BGB)</li>
						<li>Rapid Action Battalion (RAB)</li>
						<li>Covert Government Organization in Bangladesh</li>
					</ul>
				 </div>
	 
			 </div>
			 <!-- </div> -->
				
			 <div class="content" id="query"> 
				 <!-- <div id="content_query">  -->
					<div class="panel" id="userPanel">
						<div class="panel_heading" id="user_heading">Please submit your query below, and we'll get back to you soon:</div>
						<br><br>
						<form name="myForm" id="formID" method="post">
						<div class="userInput"><label class="user_label">Name : </label> <input type="text" name="name" class="user_inputText" required/></div>
						<div class="userInput"><label class="user_label">Email id : </label> <input type="email" name="email" class="user_inputText" required/></div>
						<div class="userInput"><label class="user_label">Name of your Company : </label> <input type="text" name="comp_name" class="user_inputText"/></div>
						<div class="userInput"><label class="user_label">Product you want to know about : </label> <input type="text" name="product_name" class="user_inputText" required/></div>
						<div class="userInput"><label class="user_label">Please state your Query: </label><textarea name="query" class="user_inputText" id="query_id" required></textarea></div>
						<center><input type="submit" name="submit" class="button" id="query_button"/></center>
						</form>
					</div>
            	 		<!-- </div>  -->
				<!-- </div> -->
			 </div>
			 <div class="content" id="contact_id"> 
					<div id="content_contact">  
						<h3>Find Us:</h3>
						<p>
						&nbsp Cloud 9<br/>
						&nbsp House 1033, Road 9, DOHS Mirpur<br/>
						&nbsp Dhaka 1216, Bangladesh<br/>
						&nbsp Mob: +8801711182838, +8801552378499<br/> </p>
					</div>
					<div id="content_contact"> 
						<p>
							&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp Email: <br/>
							&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp info@cloud9.com.bd<br/>
							&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp sales@cloud9.com.bd<br/>
							&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp nine_cloud@live.com<br/>
							&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp nine.cloud@live.com<br/>
									
						</p>         

							
   
					</div>
				</div>
		 </div>
	 </div>
	       <!-- The dots/circles -->
	  	<!-- <div class= circleContainer>
	    	<span class="dot" onclick="updateSlide(1)"></span> 
	    	<span class="dot" onclick="updateSlide(2)"></span> 
	    	<span class="dot" onclick="updateSlide(3)"></span> 
	  	</div>  -->     

	  <!-- Full-width images with number and caption text -->
 <!-- Next and previous buttons -->
		  <!-- 	  	<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		  	<a class="next" onclick="plusSlides(1)">&#10095;</a> -->

	<!-- <script type="text/javascript"> 
		$('#fullpage').fullpage();
	</script> -->
	<script src="js/slideshow.js"></script>
</body>
</html>