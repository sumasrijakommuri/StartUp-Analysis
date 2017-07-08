<?php
    $mysqli = @mysqli_connect("127.0.0.1", "root", "", "usdata");
    if (!$mysqli) {
    echo "Error: " . mysqli_connect_error($mysqli);
    exit();
    }    
      
    $queryw1 = "SELECT count(*) from chartdata where state = 'West' AND category= 'software'";
    $queryw2 = "SELECT count(*) from chartdata where state = 'West' AND category= 'Engineering'";
    $queryw3 = "SELECT count(*) from chartdata where state = 'West' AND category= 'Entertainment'";
    $queryw4 = "SELECT count(*) from chartdata where state = 'West' AND category= 'Services'";
    $queryw5 = "SELECT count(*) from chartdata where state = 'West' AND category= 'healthcare'";

    $querys1 = "SELECT count(*) from chartdata where state = 'South' AND category= 'software'";
    $querys2 = "SELECT count(*) from chartdata where state = 'South' AND category= 'Engineering'";
    $querys3 = "SELECT count(*) from chartdata where state = 'South' AND category= 'Entertainment'";
    $querys4 = "SELECT count(*) from chartdata where state = 'South' AND category= 'Services'";
    $querys5 = "SELECT count(*) from chartdata where state = 'South' AND category= 'healthcare'";

    $queryne1 = "SELECT count(*) from chartdata where state = 'NorthEast' AND category= 'software'";
    $queryne2 = "SELECT count(*) from chartdata where state = 'NorthEast' AND category= 'Engineering'";
    $queryne3 = "SELECT count(*) from chartdata where state = 'NorthEast' AND category= 'Entertainment'";
    $queryne4 = "SELECT count(*) from chartdata where state = 'NorthEast' AND category= 'Services'";
    $queryne5 = "SELECT count(*) from chartdata where state = 'NorthEast' AND category= 'healthcare'";

    $querymw1 = "SELECT count(*) from chartdata where state = 'MidWest' AND category= 'software'";
    $querymw2 = "SELECT count(*) from chartdata where state = 'MidWest' AND category= 'Engineering'";
    $querymw3 = "SELECT count(*) from chartdata where state = 'MidWest' AND category= 'Entertainment'";
    $querymw4 = "SELECT count(*) from chartdata where state = 'MidWest' AND category= 'Services'";
    $querymw5 = "SELECT count(*) from chartdata where state = 'MidWest' AND category= 'healthcare'";

    $reswest1 =  mysqli_query($mysqli, $queryw1);
    $reswest2 =  mysqli_query($mysqli, $queryw2);
    $reswest3 =  mysqli_query($mysqli, $queryw3);
    $reswest4 =  mysqli_query($mysqli, $queryw4);
    $reswest5 =  mysqli_query($mysqli, $queryw5);

    $ress1 = mysqli_query($mysqli, $querys1);
    $ress2 = mysqli_query($mysqli, $querys2);
    $ress3 = mysqli_query($mysqli, $querys3);
    $ress4 = mysqli_query($mysqli, $querys4);
    $ress5 = mysqli_query($mysqli, $querys5);

    $resne1 = mysqli_query($mysqli, $queryne1);
    $resne2 = mysqli_query($mysqli, $queryne2);
    $resne3 = mysqli_query($mysqli, $queryne3);
    $resne4 = mysqli_query($mysqli, $queryne4);
    $resne5 = mysqli_query($mysqli, $queryne5);

    $resmw1 = mysqli_query($mysqli, $querymw1);
    $resmw2 = mysqli_query($mysqli, $querymw2);
    $resmw3 = mysqli_query($mysqli, $querymw3);
    $resmw4 = mysqli_query($mysqli, $querymw4);
    $resmw5 = mysqli_query($mysqli, $querymw5);

    $arrwest1 = mysqli_fetch_array($reswest1);
    $arrwest2 = mysqli_fetch_array($reswest2);
    $arrwest3 = mysqli_fetch_array($reswest3);
    $arrwest4 = mysqli_fetch_array($reswest4);
    $arrwest5 = mysqli_fetch_array($reswest5);

    $arrs1 = mysqli_fetch_array($ress1);
    $arrs2 = mysqli_fetch_array($ress2);
    $arrs3 = mysqli_fetch_array($ress3);
    $arrs4 = mysqli_fetch_array($ress4);
    $arrs5 = mysqli_fetch_array($ress5);

    $arrne1 = mysqli_fetch_array($resne1);
    $arrne2 = mysqli_fetch_array($resne2);
    $arrne3 = mysqli_fetch_array($resne3);
    $arrne4 = mysqli_fetch_array($resne4);
    $arrne5 = mysqli_fetch_array($resne5);

    $arrmw1 = mysqli_fetch_array($resmw1);
    $arrmw2 = mysqli_fetch_array($resmw2);
    $arrmw3 = mysqli_fetch_array($resmw3);
    $arrmw4 = mysqli_fetch_array($resmw4);
    $arrmw5 = mysqli_fetch_array($resmw5);



    $result_s1 = mysqli_fetch_array($ress1);
    $total_s1 = $result_s1['count(*)'];
    $result_s2 = mysqli_fetch_array($ress2);
    $total_s2 = $result_s2['count(*)'];
    $result_s3 = mysqli_fetch_array($ress3);
    $total_s3 = $result_s3['count(*)'];
    $result_s4 = mysqli_fetch_array($ress4);
    $total_s4 = $result_s4['count(*)'];
    $result_s5 = mysqli_fetch_array($ress5);
    $total_s5 = $result_s5['count(*)'];


    $software = array (intval($arrwest1['count(*)']), intval($arrs1['count(*)']), intval($arrne1['count(*)']), intval($arrmw1['count(*)']));
    $healthcare = array (intval($arrwest5['count(*)']), intval($arrs5['count(*)']), intval($arrne5['count(*)']), intval($arrmw5['count(*)']));
    $entertainment = array (intval($arrwest3['count(*)']), intval($arrs3['count(*)']), intval($arrne3['count(*)']), intval($arrmw3['count(*)']));
    $services = array (intval($arrwest4['count(*)']), intval($arrs4['count(*)']), intval($arrne4['count(*)']), intval($arrmw4['count(*)']));
    $engineering = array (intval($arrwest2['count(*)']), intval($arrs2['count(*)']), intval($arrne2['count(*)']), intval($arrmw2['count(*)']));

    $total_s = array($total_s1, $total_s2, $total_s3, $total_s4, $total_s5);
?>


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
        <link href="css/font-awesome.css" rel="stylesheet">
        <!-- font-awesome icons -->
        <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all" />
        <!-- Owl-Carousel-CSS -->
        <!-- //Custom Theme files -->
        <!-- js -->
        <script src="js/jquery-2.2.3.min.js"></script>
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <!-- //js -->
        <!-- web-fonts -->

        <!-- //web-fonts -->

        <script type="text/javascript">
            $(document).ready(function() {


                // results_s = 
                var results_mw = <?=json_encode($total_s)?>;
                var software = <?=json_encode($software)?>;
                var healthcare = <?=json_encode($healthcare)?>;
                var entertainment = <?=json_encode($entertainment)?>;
                var engineering = <?=json_encode($engineering)?>;
                var services = <?=json_encode($services)?>;

                Highcharts.chart('container', {
                    chart: {
                        type: 'column'
                    },
                    exporting: {
                        enabled: false
                    },
                    title: {
                        text: ''
                    },
                    xAxis: {
                        categories: ['West', 'South', 'NorthEast', 'MidWest']
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: 'Total startups'
                        },
                        stackLabels: {
                            enabled: true,
                            style: {
                                fontWeight: 'bold',
                                color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
                            }
                        }
                    },
                    legend: {
                        align: 'right',
                        x: -30,
                        verticalAlign: 'top',
                        y: 25,
                        floating: true,
                        backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
                        borderColor: '#CCC',
                        borderWidth: 1,
                        shadow: false
                    },
                    tooltip: {
                        headerFormat: '<b>{point.x}</b><br/>',
                        pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
                    },
                    plotOptions: {
                        column: {
                            stacking: 'normal',
                            keys: ['x', 'y', 'name'],
                            dataLabels: {
                                enabled: true,
                                color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
                            },
                            point: {
                                events: {
                                    click: function() {
                                        alert(this.name)
                                    }
                                }
                            }
                        }
                    },
                    series: [{
                        name: 'Software',
                        data: software
                    }, {
                        name: 'Healthcare',
                        data: healthcare
                    }, {
                        name: 'Entertainment',
                        data: entertainment
                    }, {
                        name: 'Services',
                        data: services
                    }, {
                        name: 'Engineering',
                        data: engineering
                    }, ]
                });
            });

        </script>

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


            <!-- order -->
            <div class="wthree-order">
                <div class="container">
                    <h3 class="w3ls-title">Graphs</h3>
                    <br>
                    <!-- <p class="w3lsorder-text">
				<select class="form-control"  style="width: 250px;margin: 0 auto;">
					<option value="1"> Category 1 </option>
					<option value="2"> Category 2 </option>
				</select>
			</p> -->

                    <br>

                    <div class="row order-agileinfo">
                        <div class="col-sm-12">

                            <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- //order -->

            <!-- footer -->
            <div class="footer agileits-w3layouts">
                <div class="container">
                    <div class="w3_footer_grids">
                        <div class="col-xs-6 col-sm-6 footer-grids w3-agileits">
                            <h3>About</h3>
                            <p align="justify">The general system description: The main idea of the project is to provide users an interface to check the rank of their startup based on certain attributes. The users could be investors or founders of the startup. The users can interact with the interface by searching for a start up. Filters for search like kind, location, Big Business school founders etc would be available. The constraints in this idea is that there are limited number of attributes and a limited number of values t be chosen for each attribute for prediction of the rank of the startup. The project would deliver an interface that facilitates search for various startups. It also has an interface that takes in the inputs from a user, features of a startup, to generate a rank for the described startup. </p>
                        </div>
                        <div class="col-xs-6 col-sm-6 footer-grids w3-agileits">
                            <h3>References</h3>
                            <div align="justify">
                                <ul>
                                    <li>The Use of Machine Learning Algorithms for the Study of Business Profitability: A New Approach Based on Preferences</li>
                                    <li>Predicting Short Term Company Performance by Applying Sentiment Analysis and Machine Learning Algorithms on Social Media</li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
            <div class="copyw3-agile">
                <div class="container">
                    <p>&copy; 2017 Srija Kommuri. All rights reserved </p>
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

                    $().UItoTop({
                        easingType: 'easeOutQuart'
                    });

                });

            </script>
            <!-- //smooth-scrolling-of-move-up -->
            <!-- Bootstrap core JavaScript
    ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
            <script src="js/bootstrap.js"></script>
    </body>

    </html>
