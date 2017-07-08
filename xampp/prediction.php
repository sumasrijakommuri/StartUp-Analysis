<!DOCTYPE html>
<html lang="en">

<head>
    <title>Srija Kommuri Project </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/tables.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all" />
    <!-- Owl-Carousel-CSS -->
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
                                <li><a href="index.html">Search</a></li>

                                <li><a href="prediction.php" class="active">Prediction</a></li>

                                <li><a href="visualsbackup.php">Visualization</a></li>
                                <li><a href="history.php">History</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>

        </div>
        <br><br>

        <div class="container spacer">
            <form class="container col-md-8 col-md-offset-2">
                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Homepage</label>
                    <div class="col-10">
                        <input type='radio' class="form-check-input" name='homepage' value="Yes">Yes
                        <input type="radio" name="homepage" value="No">No<br>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-search-input" class="col-2 col-form-label">Number of Employees</label>
                    <div class="col-10">
                        <input type="text" name="employees" id="employees">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-email-input" class="col-2 col-form-label">Competition</label>
                    <div class="col-10">
                        <select name="Competition" id="Competition">
				            <option value="Yes">Yes</option>
				            <option value="No">No</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-url-input" class="col-2 col-form-label">Is the company a subsidiary</label>
                    <div class="col-10">
                        <input type="radio" name="acquired" value="Yes"> Yes
                        <input type="radio" name="acquired" value="No">No
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-tel-input" class="col-2 col-form-label">Number of Investors</label>
                    <div class="col-10">
                        <input type="text" name="investors" id="investors">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-url-input" class="col-2 col-form-label">Category</label>
                    <div class="col-10">
                        <select name="category" id="category">
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
			     </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-tel-input" class="col-2 col-form-label">State</label>
                    <div class="col-10">
                        <select name="state" id="state">
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
			</select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-url-input" class="col-2 col-form-label">Investment (in millions of dollars)</label>
                    <div class="col-10">
                        <input type="text" name="investment" id="investment">
                    </div>
                </div>
                <input type="button" id="searchbtn" class="btn btn-default btn-lg" value="Predict" style="background-color:#23527c; color:white">



                <div style="max-height: 500px; overflow:scroll; margin-top: 40px;" id="results">

                </div>
            </form>
        </div>

        <!-- footer -->
        <div class="footer spacer agileits-w3layouts">
            <div class="container">
                <div class="w3_footer_grids">
                    <div class="col-xs-6 col-sm-6 footer-grids w3-agileits">
                        <h3>About</h3>
                        <p align="justify">The main idea of the project is to provide users an interface to check the rank of their startup based on certain attributes. The users could be investors or founders of the startup. The users can interact with the interface by searching for a start up. Filters for search like kind, location, Big Business school founders etc would be available. The constraints in this idea is that there are limited number of attributes and a limited number of values t be chosen for each attribute for prediction of the rank of the startup. The project would deliver an interface that facilitates search for various startups. It also has an interface that takes in the inputs from a user, features of a startup, to generate a rank for the described startup. </p>
                    </div>
                    <div class="col-xs-6 col-sm-6 footer-grids w3-agileits">
                        <h3>References</h3>
                        <p align="justify"> The Use of Machine Learning Algorithms for the Study of Business Profitability: A New Approach Based on Preferences</p>
                        <p>Predicting Short Term Company Performance by Applying Sentiment Analysis and Machine Learning Algorithms on Social Media</p>
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
                $(".scroll").click(function(event) {
                    event.preventDefault();

                    $('html,body').animate({
                        scrollTop: $(this.hash).offset().top
                    }, 1000);
                });

                $().UItoTop({
                    easingType: 'easeOutQuart'
                });

                $("#searchbtn").click(function() {
                    $.post({
                        url: "predict.php",
                        data: {
                            "homepage": $('input[name="homepage"]:checked').val(),
                            "employees": $("#employees").val(),
                            "Competition": $("#Competition").find('option:selected').text(),
                            "investors": $("#investors").val(),
                            "category": $("#category").find('option:selected').val(),
                            "state": $("#state").find('option:selected').val(),
                            "investment": $("#investment").val(),
                            "acquired": $('input[name="acquired"]:checked').val()
                        },
                        error: function() {
                            console.log("Error occured while posting");
                        },
                        success: function(response) {
                            console.log(response);
                            $("#results").html(response);
                        }
                    });
                });
            });

        </script>
        <script src="js/bootstrap.js"></script>
    </div>
</body>

</html>
