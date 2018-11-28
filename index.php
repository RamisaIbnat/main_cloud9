<?php
    include_once "db_login.php"; 

    if (!$con)   /*  check if the connection was actually successful  */
    {
        exit("Could not connect to the database: <br/>" . 
            htmlspecialchars(mysql_error()) );
    }
    else{
		echo "connected";
	}

 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Cloud9/homepage</title>
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
			<!-- <div class="header"></div> -->
			<div id="login"><a href="login.php" id="login1">Login</a></div>
			<div class="logoContainer"></div>
			<div class="heading">CLOUD 9</div>
			<div class="subHeading">BEST IN THE BUSINESS</div>
			<div class= navbarContainer2>
		    	<div class="hexagon_container" id="hex1">
			    	<span class="navbar2" id="home">Home</span>
			    
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
			    <div class="hexagon_container" id="hex3">
		    		<span class="navbar2" id="products">Products</span>

			    	<svg class="poly" id ="hexa" version="1.1" xmlns="http://www.w3.org/2000/svg" width="10vw" height="17vh" stroke="black" stroke-width="4" viewbox="0 0 320 277.12812921102034" style="filter: drop-shadow(rgba(255, 255, 255, 0.5) 0px 0px 10px);"><path id='path2' fill="	#000000" d="M0 138.56406460551017L80 0L240 0L320 138.56406460551017L240 277.12812921102034L80 277.12812921102034Z"></path></svg>
			    </div>
			    <div class="hexagon_container" id="hex4">
		    		<span class="navbar2" id="about">About Us</span>

			    	<svg class="poly" version="1.1" xmlns="http://www.w3.org/2000/svg" width="10vw" height="17vh" stroke="black" stroke-width="4" viewbox="0 0 320 277.12812921102034" style="filter: drop-shadow(rgba(255, 255, 255, 0.5) 0px 0px 10px);"><path id='path3' fill="#fff" d="M0 138.56406460551017L80 0L240 0L320 138.56406460551017L240 277.12812921102034L80 277.12812921102034Z"></path></svg>
			    </div>
			    <div class="hexagon_container" id="hex5">
		    		<span class="navbar2" id="ceo">Ceo's Profile</span>

			    	<svg class="poly" version="1.1" xmlns="http://www.w3.org/2000/svg" width="10vw" height="17vh" stroke="black" stroke-width="4" viewbox="0 0 320 277.12812921102034" style="filter: drop-shadow(rgba(255, 255, 255, 0.5) 0px 0px 10px);">
			    		<path id='path4' fill="#fff" d="M0 138.56406460551017L80 0L240 0L320 138.56406460551017L240 277.12812921102034L80 277.12812921102034Z">
			    		</path>
			    	</svg>
			    </div>
			    <div class="hexagon_container" id="hex6">
		    		<span class="navbar2" id="contact">Contact</span>
		    		
			    	<svg class="poly" version="1.1" xmlns="http://www.w3.org/2000/svg" width="10vw" height="17vh" stroke="black" stroke-width="4" viewbox="0 0 320 277.12812921102034" style="filter: drop-shadow(rgba(255, 255, 255, 0.5) 0px 0px 10px);"><path id='path5' fill="#fff" d="M0 138.56406460551017L80 0L240 0L320 138.56406460551017L240 277.12812921102034L80 277.12812921102034Z"></path></svg>
			    </div>
			    <div class="hexagon_container" id="hex7">
			    	<svg class="poly" version="1.1" xmlns="http://www.w3.org/2000/svg" width="10vw" height="17vh" stroke="black" stroke-width="4" viewbox="0 0 320 277.12812921102034" style="filter: drop-shadow(rgba(255, 255, 255, 0.5) 0px 0px 10px);">
			    		<path fill="#fff" d="M0 138.56406460551017L80 0L240 0L320 138.56406460551017L240 277.12812921102034L80 277.12812921102034Z">
			    		</path>
			    	</svg>
			    </div>
			</div>

			<div class="content" id="content"> 
		  		<div id="content_home">  

		    		<h3>Cloud 9</h3>
		  			<p>Cloud 9 is a renowned leading company in the communication sector of Bangladesh. It deals with the supply of telecommunication, wireless communication, public address, security equipment, surveillance equipment, Special equipment, Test Equipment, Electrical and Electronics equipment. The company is having mostly dedicated three main principles around the globe. Our main office is in the heart of the capital city of Dhaka. The company has a number of hard-working men that run every facet of the business. We create our market by supplying quality products with competitive price. We do maintain a continuous and unbreakable supply chain within the country. Besides we have strong selective dealers around the countries who are dedicated and trust worthy. Our marketing strategy is to involve whole team and generate team efforts to create market viability in this sector. We always give more importance to the customer’s interest and trust by supplying qualitative products with affordable price.</p>               
		    	</div>
			</div>

			<div class="content" id="content_ceo">
				<div id="ceo_pic"></div>
				<div id="ceo_description">
					<h5>CEO/PRESIDENT'S PROFILE</h5>
					<p>Diversified Experience over 28 years in Army with different Capacity of various level of Administration and Human Resource Management, Operations and Business Development Management as Strategy Planner, Policy maker & Policy Implementation Monitor. Graduated from Bangladesh Military Academy in 1985 and was commissioned in Bangladesh Army as lieutenant in the Core of Signals. Later on conceived 12 month basic training from the Schools of Signals on Modern Communication. Attained various courses and training pertaining to the administration, operation and logistic with practical exercises. With the inclusion of Computer in Bangladesh Army upgraded himself with the computer course in Bangladesh Army. Participated in the various National Crisis and Management with different capacities and received distinguished appreciations both from Civil and military authorities. Served in Bangladesh Rifles from 1991 to 1994 Experienced the Risk Management, Financial Management, Security Management, Management of local Government issues and Trans Border Issues. Attained the meetings with the local counter parts with various cross border issues which demanded Rapid Decision and Quick Management. Later served in Bangladesh Rifles from 2005 to 2007 as Technical Maintenance Officer, where he was responsible for Repair, maintenance and procurement of all equipment related to communication and communication security. He attended no of seminars in home and abroad in National level. He was one of the pioneer member of National Frequency Spectrum Committee. Also participated in the mission abroad with prestigious appointment in multinational environment. Received commendations from various levels of commanders. Served in United Nation twice as a communication experts in Sector and Force Headquarter level and earned a commendable name for himself and the country. Highly capable of adjusting himself with the situation. Also served in Military Institute of Science and Technology (MIST) (A prestigious Military Educational Organization in Mirpur Educational village of Military) as a Researcher.</p>
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