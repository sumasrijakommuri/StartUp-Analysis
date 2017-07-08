<!DOCTYPE html>
<html lang="en">
<head>
<title>Srija Kommuri Project </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">  
<link href="css/font-awesome.css" rel="stylesheet"> <!-- font-awesome icons -->
<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all"/> <!-- Owl-Carousel-CSS -->
<!-- //Custom Theme files --> 
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>  
<!-- //js -->
<!-- web-fonts -->   

<!-- //web-fonts -->

</head>
<body> 
	<!-- banner -->
	<div class="banner">
		<!-- header -->
		<div class="header">
			   
			<!-- navigation -->
			<div class="navigation agiletop-nav">
				<div class="container">
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header w3l_logo">
							<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>  
							<h1><a href="index.html">DIVA<span>Startup Analysis</span></a></h1>
						</div> 
						<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="index.html" class="active">Home</a></li>	
								
								<li><a href="prediction.php">Prediction</a></li> 
								
								<li><a href="visuals.php">Visualization</a></li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
			<!-- //navigation --> 
		</div>
		<!-- //header-end --> 
		<!-- banner-text -->
		<!--div class="banner-text">	
			<div class="container">
				
				<div class="agileits_search">
					<form action='search.php' method='POST' name='form_filter'> 						
						<select id="agileinfo_search" name="selectVal" required="">
							<option value="" disabled>Select option</option>
							<option value="state">State</option>
							<option value="category">Category</option>
						</select>
						<input name="search" type="text" placeholder="Enter Your Query" required="">
						<input type="submit" value="Search">
					</form>
				</div> 
			</div>
		</div>
	</div-->

	<div class= "container" align= "center">
	<?php if(!empty($_POST)):?>
			Homepage: <input type='radio' name = 'homepage' value="Yes">Yes
			<input type="radio" name='homepage' value="No">No<br>
			Number of Employees: <select id= "employees" name="employees">
				<option value = "Upto 10">Upto 10</option>
				<option value=">10">>10</option>
			</select><br>
			Competition: <select name= "Competition" id= "Competition">
				<option value="Yes">Yes</option>
				<option value="No">No</option>
			</select><br>
			Number of Investors: <input type="text" name="investors"><br>
			Category: <select name="category" id="category">
				<option value = 'advertising'>Advertising</option>
				<option value = 'analytics'>Analytics</option>
				<option value = 'automotive'>Automotive</option>
				<option value = 'biotech'>Biotech</option>
				<option value = 'cleantech'>Cleantech</option>
				<option value = 'consulting'>Consulting</option>
				<option value = 'design'>Design</option>
				<option value = 'ecommerce'>E-commerce</option>
				<option value = 'education'>Education</option>
				<option value = 'enterprise'>Enterprise</option>
				<option value = 'fashion'>Fashion</option>
				<option value = 'finance'>Finance</option>
				<option value = 'games_video'>Video Games</option>
				<option value = 'hardware'>Hardware</option>
				<option value = 'health'>Health</option>
				<option value = 'hospitality'>Hospitality</option>
				<option value = 'legal'>Legal</option>
				<option value = 'manufacturing'>Manufacturing</option>
				<option value = 'medical'>Medical</option>
				<option value = 'messaging'>Messaging</option>
				<option value = 'misc'>Miscellaneous</option>
				<option value = 'mobile'>Mobile</option>
				<option value = 'music'>Music</option>
				<option value = 'nanotech'>Nano Technology</option>
				<option value = 'network_hosting'>Network Hosting</option>
				<option value = 'news'>News</option>
				<option value = 'nonprofit'>Non Profit</option>
				<option value = 'other'>Other</option>
				<option value = 'photo_video'>Photography</option>
				<option value = 'public_relations'>Public Relations</option>
				<option value = 'real_estate'>Real Estate</option>
				<option value = 'search'>Search</option>
				<option value = 'Security'>Security</option>
				<option value = 'semiconductor'>Semiconductor</option>
				<option value = 'social'>Social</option>
				<option value = 'software'>Software</option>
				<option value = 'sports'>Sports</option>
				<option value = 'transportation'>Transportation</option>
				<option value = 'travel'>Travel</option>
				<option value = 'web'>Web</option>
			</select><br>
			State: <select name="state" id="state">
				<option value='AL'>Alabama</option>
				<option value='AK'>Alaska</option>
				<option value='AZ'>Arizona</option>
				<option value='AR'>Arkansas</option>
				<option value='CA'>California</option>
				<option value='CO'>Colorado</option>
				<option value='CT'>Connecticut</option>
				<option value='DE'>Delaware</option>
				<option value='FL'>Florida</option>
				<option value='GA'>Georgia</option>
				<option value='HI'>Hawaii</option>
				<option value='ID'>Idaho</option>
				<option value='IL'>Illinois</option>
				<option value='IN'>Indiana</option>
				<option value='IA'>Iowa</option>
				<option value='KS'>Kansas</option>
				<option value='KY'>Kentucky</option>
				<option value='LA'>Louisiana</option>
				<option value='ME'>MAine</option>
				<option value='MD'>Maryland</option>
				<option value='MA'>Massachusetts</option>
				<option value='MI'>Michigan</option>
				<option value='MN'>Minnesota</option>
				<option value='MS'>Mississippi</option>
				<option value='MO'>Missouri</option>
				<option value='MT'>Montana</option>
				<option value='NE'>Nebraska</option>
				<option value='NV'>Nevada</option>
				<option value='NH'>New Hampshire</option>
				<option value='NJ'>New Jersey</option>
				<option value='NM'>New Mexico</option>
				<option value='NY'>New York</option>
				<option value='NC'>North Carolina</option>
				<option value='ND'>North Dakota</option>
				<option value='OH'>Ohio</option>
				<option value='OK'>Oklahoma</option>
				<option value='OR'>Oregon</option>
				<option value='PA'>Pennsylvania</option>
				<option value='RI'>Rhode Island</option>
				<option value='SC'>South Carolina</option>
				<option value='SD'>South Dakota</option>
				<option value='TN'>Tennessee</option>
				<option value='TX'>Texas</option>
				<option value='UT'>Utah</option>
				<option value='VT'>Vermont</option>
				<option value='VA'>Virginia</option>
				<option value='WA'>Washington</option>
				<option value='WV'>West Virginia</option>
				<option value='WI'>Wisconsin</option>
				<option value='WY'>Wyoming</option>"
			</select><br>
			Investment: <input type="radio" name="investment">Yes
			<input type="radio" name="investment">No<br>
			<input type="submit" class ="predict" name= "predict" value="Predict" onclick="predictfunction()"><br>
			
			<p name="output" class="output" id ="output"> <p>

			<?php echo htmlspecialchars($_POST["output"]); ?><br>
		<?php else: ?>
		<form id="predictform" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method ='post'>
			Homepage: <input type='radio' name = 'homepage' value="Yes">Yes
			<input type="radio" name='homepage' value="No">No<br>
			Number of Employees: <select id= "employees" name="employees">
				<option value = "Upto 10">Upto 10</option>
				<option value=">10">>10</option>
			</select><br>
			Competition: <select name= "Competition" id= "Competition">
				<option value="Yes">Yes</option>
				<option value="No">No</option>
			</select><br>
			Number of Investors: <input type="text" name="investors"><br>
			Category: <select name="category" id="category">
				<option value = 'advertising'>Advertising</option>
				<option value = 'analytics'>Analytics</option>
				<option value = 'automotive'>Automotive</option>
				<option value = 'biotech'>Biotech</option>
				<option value = 'cleantech'>Cleantech</option>
				<option value = 'consulting'>Consulting</option>
				<option value = 'design'>Design</option>
				<option value = 'ecommerce'>E-commerce</option>
				<option value = 'education'>Education</option>
				<option value = 'enterprise'>Enterprise</option>
				<option value = 'fashion'>Fashion</option>
				<option value = 'finance'>Finance</option>
				<option value = 'games_video'>Video Games</option>
				<option value = 'hardware'>Hardware</option>
				<option value = 'health'>Health</option>
				<option value = 'hospitality'>Hospitality</option>
				<option value = 'legal'>Legal</option>
				<option value = 'manufacturing'>Manufacturing</option>
				<option value = 'medical'>Medical</option>
				<option value = 'messaging'>Messaging</option>
				<option value = 'misc'>Miscellaneous</option>
				<option value = 'mobile'>Mobile</option>
				<option value = 'music'>Music</option>
				<option value = 'nanotech'>Nano Technology</option>
				<option value = 'network_hosting'>Network Hosting</option>
				<option value = 'news'>News</option>
				<option value = 'nonprofit'>Non Profit</option>
				<option value = 'other'>Other</option>
				<option value = 'photo_video'>Photography</option>
				<option value = 'public_relations'>Public Relations</option>
				<option value = 'real_estate'>Real Estate</option>
				<option value = 'search'>Search</option>
				<option value = 'Security'>Security</option>
				<option value = 'semiconductor'>Semiconductor</option>
				<option value = 'social'>Social</option>
				<option value = 'software'>Software</option>
				<option value = 'sports'>Sports</option>
				<option value = 'transportation'>Transportation</option>
				<option value = 'travel'>Travel</option>
				<option value = 'web'>Web</option>
			</select><br>
			State: <select name="state" id="state">
				<option value='AL'>Alabama</option>
				<option value='AK'>Alaska</option>
				<option value='AZ'>Arizona</option>
				<option value='AR'>Arkansas</option>
				<option value='CA'>California</option>
				<option value='CO'>Colorado</option>
				<option value='CT'>Connecticut</option>
				<option value='DE'>Delaware</option>
				<option value='FL'>Florida</option>
				<option value='GA'>Georgia</option>
				<option value='HI'>Hawaii</option>
				<option value='ID'>Idaho</option>
				<option value='IL'>Illinois</option>
				<option value='IN'>Indiana</option>
				<option value='IA'>Iowa</option>
				<option value='KS'>Kansas</option>
				<option value='KY'>Kentucky</option>
				<option value='LA'>Louisiana</option>
				<option value='ME'>MAine</option>
				<option value='MD'>Maryland</option>
				<option value='MA'>Massachusetts</option>
				<option value='MI'>Michigan</option>
				<option value='MN'>Minnesota</option>
				<option value='MS'>Mississippi</option>
				<option value='MO'>Missouri</option>
				<option value='MT'>Montana</option>
				<option value='NE'>Nebraska</option>
				<option value='NV'>Nevada</option>
				<option value='NH'>New Hampshire</option>
				<option value='NJ'>New Jersey</option>
				<option value='NM'>New Mexico</option>
				<option value='NY'>New York</option>
				<option value='NC'>North Carolina</option>
				<option value='ND'>North Dakota</option>
				<option value='OH'>Ohio</option>
				<option value='OK'>Oklahoma</option>
				<option value='OR'>Oregon</option>
				<option value='PA'>Pennsylvania</option>
				<option value='RI'>Rhode Island</option>
				<option value='SC'>South Carolina</option>
				<option value='SD'>South Dakota</option>
				<option value='TN'>Tennessee</option>
				<option value='TX'>Texas</option>
				<option value='UT'>Utah</option>
				<option value='VT'>Vermont</option>
				<option value='VA'>Virginia</option>
				<option value='WA'>Washington</option>
				<option value='WV'>West Virginia</option>
				<option value='WI'>Wisconsin</option>
				<option value='WY'>Wyoming</option>"
			</select><br>
			Investment: <input type="radio" name="investment">Yes
			<input type="radio" name="investment">No<br>
			<input type="submit" class ="predict" name= "predict" value="Predict" onclick="predictfunction()"><br>

			<p name="output" class="output" id ="output"> <p>
		</form>
	<?php endif;?>
	</div>



	<!-- //banner -->   
	
	<!-- order -->   	
	<!--div class="wthree-order"> 		
		<div class="containex`r">
			<h3 class="w3ls-title">Title for graph</h3>
			<p class="w3lsorder-text">
				<select class="form-control"  style="width: 250px;margin: 0 auto;">
					<option value="1"> Category 1 </option>
					<option value="2"> Category 2 </option>
				</select>
			</p>
			<div class="row order-agileinfo">  
				<div class="col-sm-12">
				 		
				</div>
			</div>
		</div>
	</div-->
	<!-- //order -->    
	
	<!-- footer -->
	<div class="footer agileits-w3layouts">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-xs-6 col-sm-6 footer-grids w3-agileits">
					<h3>About</h3>
					<p align = "justify">The main idea of the project is to provide users an interface to check the rank of their startup based on certain attributes. The users could be investors or founders of the startup. The users can interact with the interface by searching for a start up. Filters for search like kind, location, Big Business school founders etc would be available. The constraints in this idea is that there are limited number of attributes and a limited number of values t be chosen for each attribute for prediction of the rank of the startup. The project would deliver an interface that
					facilitates search for various startups. It also has an interface that takes in the inputs from a user, features of a startup, to generate a rank for the described startup. </p>
				</div> 
				<div class="col-xs-6 col-sm-6 footer-grids w3-agileits">
					<h3>References</h3>
					<div align = "justify"> <ul>
                    <li>The Use of Machine Learning Algorithms for the Study of Business Profitability: A New Approach Based on Preferences</li>
                    <li>Predicting Short Term Company Performance by Applying Sentiment Analysis and Machine Learning Algorithms on Social Media</li>
                    </ul></div> 
				</div>				
				<div class="clearfix"> </div>
			</div>
		</div> 
	</div>
	<div class="copyw3-agile"> 
		<div class="container">
			<p>&copy; 2017 Suma Srija Kommuri. All rights reserved </p>
		</div>
	</div>
	<!-- //footer --> 
	
	
	<!-- start-smooth-scrolling -->
	<script src="js/SmoothScroll.min.js"></script>  
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});



	</script>
	<!-- //end-smooth-scrolling -->	  
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/

		
		
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});

	</script>
	<script type="text/javascript">

		function predictfunction(){
			console.log("Hello");
			var homepage = document.getElementsByName('homepage');
			var val;
			var len = homepage.length;
for(var i =0 ; i<len; i++)
{
if(homepage[i].checked)
{
val = homepage[i].value;
break;
}
}
			console.log(val);
			document.getElementById('output').value = val;

		}
			

	
		
	</script>
	<!-- //smooth-scrolling-of-move-up --> 
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>