<?php
$mysqli = @mysqli_connect("127.0.0.1", "root", "", "diva");


    if (!$mysqli) {
    echo "Error: " . mysqli_connect_error($mysqli);
    exit();
        
        
    }    

echo '<!DOCTYPE html>
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

                                <li><a href="prediction.php">Prediction</a></li>
 
                                <li><a href="visualsbackup.php">Visualization</a></li>
                                <li><a href="history.php" class="active">History</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div> 
            <!-- //navigation -->
        </div>
        <!-- //header-end -->


        <br><br>
        <div id="history" class="table" align = "center">
            <table>
                <tr>
                    <th>Date</th>
                    <th>Website</th>
                    <th>No. of Employees</th>
                    <th>Competition</th>
                    <th>Subsidiary</th>
                    <th>Investors</th>
                    <th>Category</th>
                    <th>State</th>
                    <th>Investment</th>
                    <th>Cluster</th>
                </tr>
';

    $getquery = "SELECT * FROM history";
    $result = mysqli_query($mysqli,$getquery);
    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
    {
        $day = $row['date'];
        $homepage = $row['homepage'];
        $employees = $row['employees'];
        $competition = $row['competition'];
        $acquisition = $row['acquisition'];
        $investors = $row['investors'];
        $category = $row['category'];
        $state = $row['state'];
        $investment = $row['investment'];
        $cluster = $row['cluster'];
        
        
        echo "<tr>";
        echo "<td>$day</td>";
        echo "<td>$homepage</td>";
        echo "<td>$employees</td>";
        echo "<td>$competition</td>";
        echo "<td>$acquisition</td>";
        echo "<td>$investors</td>";
        echo "<td>$category</td>";
        echo "<td>$state</td>";
        echo "<td>$investment</td>";
        echo "<td>$cluster</td>";
        echo "</tr>";
            
    }
    





echo '



            </table>
        </div>

        <br><br>

        <!-- footer -->
        <div class="footer agileits-w3layouts">
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

                    $(\'html,body\').animate({
                        scrollTop: $(this.hash).offset().top
                    }, 1000);
                });
            });

        </script>
        <!-- //end-smooth-scrolling -->
        <!-- smooth-scrolling-of-move-up -->';
?>
