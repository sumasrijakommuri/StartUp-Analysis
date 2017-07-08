<?php
    $mysqli = @mysqli_connect("127.0.0.1", "root", "", "diva");
    if (!$mysqli) {
    echo "Error: " . mysqli_connect_error($mysqli);
    exit();
    }    

      
    $queryw1 = "SELECT count(*) from drilldata where zone = 'West' AND cat_group= 'software'";
    $queryw2 = "SELECT count(*) from drilldata where zone = 'West' AND cat_group= 'Engineering'";
    $queryw3 = "SELECT count(*) from drilldata where zone = 'West' AND cat_group= 'Entertainment'";
    $queryw4 = "SELECT count(*) from drilldata where zone = 'West' AND cat_group= 'Services'";
    $queryw5 = "SELECT count(*) from drilldata where zone = 'West' AND cat_group= 'healthcare'";

    $querys1 = "SELECT count(*) from drilldata where zone = 'South' AND cat_group= 'software'";
    $querys2 = "SELECT count(*) from drilldata where zone = 'South' AND cat_group= 'Engineering'";
    $querys3 = "SELECT count(*) from drilldata where zone = 'South' AND cat_group= 'Entertainment'";
    $querys4 = "SELECT count(*) from drilldata where zone = 'South' AND cat_group= 'Services'";
    $querys5 = "SELECT count(*) from drilldata where zone = 'South' AND cat_group= 'healthcare'";

    $queryne1 = "SELECT count(*) from drilldata where zone = 'North East' AND cat_group= 'software'";
    $queryne2 = "SELECT count(*) from drilldata where zone = 'North East' AND cat_group= 'Engineering'";
    $queryne3 = "SELECT count(*) from drilldata where zone = 'North East' AND cat_group= 'Entertainment'";
    $queryne4 = "SELECT count(*) from drilldata where zone = 'North East' AND cat_group= 'Services'";
    $queryne5 = "SELECT count(*) from drilldata where zone = 'North East' AND cat_group= 'healthcare'";

    $querymw1 = "SELECT count(*) from drilldata where zone = 'MidWest' AND cat_group= 'software'";
    $querymw2 = "SELECT count(*) from drilldata where zone = 'MidWest' AND cat_group= 'Engineering'";
    $querymw3 = "SELECT count(*) from drilldata where zone = 'MidWest' AND cat_group= 'Entertainment'";
    $querymw4 = "SELECT count(*) from drilldata where zone = 'MidWest' AND cat_group= 'Services'";
    $querymw5 = "SELECT count(*) from drilldata where zone = 'MidWest' AND cat_group= 'healthcare'";

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

   
    $softwarewestNames = "SELECT state, COUNT(state) AS 'num' FROM drilldata WHERE (zone='West' AND cat_group='Software') GROUP BY state";

    $softwaresouthNames = "SELECT state, COUNT(state) AS 'num' FROM drilldata WHERE (zone='South' AND cat_group='Software') GROUP BY state";
    $softwarenorthEastNames = "SELECT state, COUNT(state) AS 'num' FROM drilldata WHERE (zone='North East' AND cat_group='Software') GROUP BY state";
    $softwaremidWestNames = "SELECT state, COUNT(state) AS 'num' FROM drilldata WHERE (zone='MidWest' AND cat_group='Software') GROUP BY state";

     $engineeringwestNames = "SELECT state, COUNT(state) AS 'num' FROM drilldata WHERE (zone='West' AND cat_group='Engineering') GROUP BY state";
    $engineeringsouthNames = "SELECT state, COUNT(state) AS 'num' FROM drilldata WHERE (zone='South' AND cat_group='Engineering') GROUP BY state";
    $engineeringnorthEastNames = "SELECT state, COUNT(state) AS 'num' FROM drilldata WHERE (zone='North East' AND cat_group='Engineering') GROUP BY state";
    $engineeringmidWestNames = "SELECT state, COUNT(state) AS 'num' FROM drilldata WHERE (zone='MidWest' AND cat_group='Engineering') GROUP BY state";

     $entertainmentwestNames = "SELECT state, COUNT(state) AS 'num' FROM drilldata WHERE (zone='West' AND cat_group='Entertainment') GROUP BY state";
    $entertainmentsouthNames = "SELECT state, COUNT(state) AS 'num' FROM drilldata WHERE (zone='South' AND cat_group='Entertainment') GROUP BY state";
    $entertainmentnorthEastNames = "SELECT state, COUNT(state) AS 'num' FROM drilldata WHERE (zone='North East' AND cat_group='Entertainment') GROUP BY state";
    $entertainmentmidWestNames = "SELECT state, COUNT(state) AS 'num' FROM drilldata WHERE (zone='MidWest' AND cat_group='Entertainment') GROUP BY state";

     $serviceswestNames = "SELECT state, COUNT(state) AS 'num' FROM drilldata WHERE (zone='West' AND cat_group='Services') GROUP BY state";
    $servicessouthNames = "SELECT state, COUNT(state) AS 'num' FROM drilldata WHERE (zone='South' AND cat_group='Services') GROUP BY state";
    $servicesnorthEastNames = "SELECT state, COUNT(state) AS 'num' FROM drilldata WHERE (zone='North East' AND cat_group='Services') GROUP BY state";
    $servicesmidWestNames = "SELECT state, COUNT(state) AS 'num' FROM drilldata WHERE (zone='MidWest' AND cat_group='Services') GROUP BY state";

    $healthwestNames = "SELECT state, COUNT(state) AS 'num' FROM drilldata WHERE (zone='West' AND cat_group='healthcare') GROUP BY state";
    $healthsouthNames = "SELECT state, COUNT(state) AS 'num' FROM drilldata WHERE (zone='South' AND cat_group='healthcare') GROUP BY state";
    $healthnorthEastNames = "SELECT state, COUNT(state) AS 'num' FROM drilldata WHERE (zone='North East' AND cat_group='healthcare') GROUP BY state";
    $healthmidWestNames = "SELECT state, COUNT(state) AS 'num' FROM drilldata WHERE (zone='MidWest' AND cat_group='healthcare') GROUP BY state";


     $softwarewestNames1 =  mysqli_query($mysqli, $softwarewestNames);
     $softwaresouthNames1 =  mysqli_query($mysqli, $softwaresouthNames);
     $softwarenorthEastNames1 =  mysqli_query($mysqli, $softwarenorthEastNames);
     $softwaremidWestNames1 =  mysqli_query($mysqli, $softwaremidWestNames);

     $engineeringwestNames1 =  mysqli_query($mysqli, $engineeringwestNames);
     $engineeringsouthNames1 =  mysqli_query($mysqli, $engineeringsouthNames);
     $engineeringnorthEastNames1 =  mysqli_query($mysqli, $engineeringnorthEastNames);
     $engineeringmidWestNames1 =  mysqli_query($mysqli, $engineeringmidWestNames);

     $entertainmentwestNames1 =  mysqli_query($mysqli, $entertainmentwestNames);
     $entertainmentsouthNames1 =  mysqli_query($mysqli, $entertainmentsouthNames);
     $entertainmentnorthEastNames1 =  mysqli_query($mysqli, $entertainmentnorthEastNames);
     $entertainmentmidWestNames1 =  mysqli_query($mysqli, $entertainmentmidWestNames);

     $serviceswestNames1 =  mysqli_query($mysqli, $serviceswestNames);
     $servicessouthNames1 =  mysqli_query($mysqli, $servicessouthNames);
     $servicesnorthEastNames1 =  mysqli_query($mysqli, $servicesnorthEastNames);
     $servicesmidWestNames1 =  mysqli_query($mysqli, $servicesmidWestNames);

     $healthwestNames1 =  mysqli_query($mysqli, $healthwestNames);
     $healthsouthNames1 =  mysqli_query($mysqli, $healthsouthNames);
     $healthnorthEastNames1 =  mysqli_query($mysqli, $healthnorthEastNames);
     $healthmidWestNames1 =  mysqli_query($mysqli, $healthmidWestNames);

      $softwarewestStateArr = array();
      while($row = mysqli_fetch_array($softwarewestNames1)){     
         $softwarewestStateArr[] = array(
            'name' => $row['state'],
            'y' => intval($row['num'])
         );       
      }    
              
      $softwaresouthStateArr = array();
      while($row = mysqli_fetch_array($softwaresouthNames1)){        
        $softwaresouthStateArr[] = array(
            'name' => $row['state'],
            'y' => intval($row['num'])
         );       
      }      

      $softwarenorthEastStateArr = array();
      while($row = mysqli_fetch_array($softwarenorthEastNames1)){        
        $softwarenorthEastStateArr[] = array(
            'name' => $row['state'],
            'y' => intval($row['num'])
         );            
      }      

      $softwaremidWestStateArr = array();
      while($row = mysqli_fetch_array($softwaremidWestNames1)){        
        $softwaremidWestStateArr[] = array(
            'name' => $row['state'],
            'y' => intval($row['num'])
         );            
      }      

   //

      $engineeringwestStateArr = array();
      while($row = mysqli_fetch_array($engineeringwestNames1)){     
         $engineeringwestStateArr[] = array(
            'name' => $row['state'],
            'y' => intval($row['num'])
         );       
      }    
              
      $engineeringsouthStateArr = array();
      while($row = mysqli_fetch_array($engineeringsouthNames1)){        
        $engineeringsouthStateArr[] = array(
            'name' => $row['state'],
            'y' => intval($row['num'])
         );       
      }      

      $engineeringnorthEastStateArr = array();
      while($row = mysqli_fetch_array($engineeringnorthEastNames1)){        
        $engineeringnorthEastStateArr[] = array(
            'name' => $row['state'],
            'y' => intval($row['num'])
         );            
      }      

      $engineeringmidWestStateArr = array();
      while($row = mysqli_fetch_array($engineeringmidWestNames1)){        
        $engineeringmidWestStateArr[] = array(
            'name' => $row['state'],
            'y' => intval($row['num'])
         );            
      }  
    //

    $entertainmentwestStateArr = array();
      while($row = mysqli_fetch_array($entertainmentwestNames1)){     
         $entertainmentwestStateArr[] = array(
            'name' => $row['state'],
            'y' => intval($row['num'])
         );       
      }    
              
      $entertainmentsouthStateArr = array();
      while($row = mysqli_fetch_array($entertainmentsouthNames1)){        
        $entertainmentsouthStateArr[] = array(
            'name' => $row['state'],
            'y' => intval($row['num'])
         );       
      }      

      $entertainmentnorthEastStateArr = array();
      while($row = mysqli_fetch_array($entertainmentnorthEastNames1)){        
        $entertainmentnorthEastStateArr[] = array(
            'name' => $row['state'],
            'y' => intval($row['num'])
         );            
      }      

      $entertainmentmidWestStateArr = array();
      while($row = mysqli_fetch_array($entertainmentmidWestNames1)){        
        $entertainmentmidWestStateArr[] = array(
            'name' => $row['state'],
            'y' => intval($row['num'])
         );            
      }  

      //

      $serviceswestStateArr = array();
      while($row = mysqli_fetch_array($serviceswestNames1)){     
         $serviceswestStateArr[] = array(
            'name' => $row['state'],
            'y' => intval($row['num'])
         );       
      }    
              
      $servicessouthStateArr = array();
      while($row = mysqli_fetch_array($servicessouthNames1)){        
        $servicessouthStateArr[] = array(
            'name' => $row['state'],
            'y' => intval($row['num'])
         );       
      }      

      $servicesnorthEastStateArr = array();
      while($row = mysqli_fetch_array($servicesnorthEastNames1)){        
        $servicesnorthEastStateArr[] = array(
            'name' => $row['state'],
            'y' => intval($row['num'])
         );            
      }      

      $servicesmidWestStateArr = array();
      while($row = mysqli_fetch_array($servicesmidWestNames1)){        
        $servicesmidWestStateArr[] = array(
            'name' => $row['state'],
            'y' => intval($row['num'])
         );            
      }    
    //
      $healthwestStateArr = array();
      while($row = mysqli_fetch_array($healthwestNames1)){     
         $healthwestStateArr[] = array(
            'name' => $row['state'],
            'y' => intval($row['num'])
         );       
      }    
              
      $healthsouthStateArr = array();
      while($row = mysqli_fetch_array($healthsouthNames1)){        
        $healthsouthStateArr[] = array(
            'name' => $row['state'],
            'y' => intval($row['num'])
         );       
      }      

      $healthnorthEastStateArr = array();
      while($row = mysqli_fetch_array($healthnorthEastNames1)){        
        $healthnorthEastStateArr[] = array(
            'name' => $row['state'],
            'y' => intval($row['num'])
         );            
      }      

      $healthmidWestStateArr = array();
      while($row = mysqli_fetch_array($healthmidWestNames1)){        
        $healthmidWestStateArr[] = array(
            'name' => $row['state'],
            'y' => intval($row['num'])
         );            
      }   


      // timeseries graph


     $timeseriesQuery = "SELECT year, month, total FROM timeseries";
      $timeseries1 =  mysqli_query($mysqli, $timeseriesQuery);

      $timeseriesdata = array();
      $i =0;
      while($row = mysqli_fetch_array($timeseries1)){    
            $timeseriesdata[$i][] =  intval($row['year']);
            $timeseriesdata[$i][] =  intval($row['month']);
            $timeseriesdata[$i][] =  intval($row['total']);
            $i = $i +1;
      } 

    $successtimeseriesQuery = "SELECT year,month,total FROM successtimeseries";
    $successtimeseries = mysqli_query($mysqli, $successtimeseriesQuery);

    $successtimeseriesdata = array();
    $j =0;
    while($row1 = mysqli_fetch_array($successtimeseries)){
        $successtimeseriesdata[$j][] = intval($row1['year']);
        $successtimeseriesdata[$j][] = intval($row1['month']);
        $successtimeseriesdata[$j][] = intval($row1['total']);
        $j = $j +1;
    }
        
    //cumulative data
     $cumulativetimeseriesQuery = "SELECT year, month, total FROM cumulativetimeseries";
      $cumulativetimeseries1 =  mysqli_query($mysqli, $cumulativetimeseriesQuery);

      $cumulativetimeseriesdata = array();
      $k =0;
      while($row2 = mysqli_fetch_array($cumulativetimeseries1)){    
            $cumulativetimeseriesdata[$k][] =  intval($row2['year']);
            $cumulativetimeseriesdata[$k][] =  intval($row2['month']);
            $cumulativetimeseriesdata[$k][] =  intval($row2['total']);
            $k = $k +1;
      } 

     $cumulativesuccess = "SELECT year, month, total FROM cumulativesuccess";
      $cumulativeseries =  mysqli_query($mysqli, $cumulativesuccess);

      $cumulativedata = array();
      $l =0;
      while($row3 = mysqli_fetch_array($cumulativeseries)){    
            $cumulativedata[$l][] =  intval($row3['year']);
            $cumulativedata[$l][] =  intval($row3['month']);
            $cumulativedata[$l][] =  intval($row3['total']);
            $l = $l +1;
      } 
        
        

      //money graph

      $totalMoneyQuery = "SELECT cat_group,total_sum FROM totalmoney";
      $totalmoney = mysqli_query($mysqli, $totalMoneyQuery) or die(mysqli_error($mysqli));

      $totalmoneydata = array();
      while($row = mysqli_fetch_array($totalmoney)){
        $totalmoneydata[$row['cat_group']] = floatval($row['total_sum']);
      }

      $categoryMoneyQuery = "SELECT category,sum FROM categorymoney";
      $categorymoney = mysqli_query($mysqli, $categoryMoneyQuery) or die(mysqli_error($mysqli));

      $categorymoneydata = array();
      while($row = mysqli_fetch_array($categorymoney)){
        $categorymoneydata[$row['category']] = floatval($row['sum']);
        }

?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Diva Project </title>
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
        <script src="https://code.highcharts.com/stock/highstock.js"></script>
        <script src="https://code.highcharts.com/stock/modules/exporting.js"></script>
        <!-- <script src="https://code.highcharts.com/highcharts.js"></script> -->
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/drilldown.js"></script>

        <!-- //js -->
        <!-- web-fonts -->

        <!-- //web-fonts -->

        <script type="text/javascript">
            $(document).ready(function() {

                var softwarewestStates = <?=json_encode($softwarewestStateArr)?>;
                var softwaresouthStates = <?=json_encode($softwaresouthStateArr)?>;
                var softwarenorthEastStates = <?=json_encode($softwarenorthEastStateArr)?>;
                var softwaremidWestStates = <?=json_encode($softwaremidWestStateArr)?>;

                var entertainmentwestStates = <?=json_encode($entertainmentwestStateArr)?>;
                var entertainmentsouthStates = <?=json_encode($entertainmentsouthStateArr)?>;
                var entertainmentnorthEastStates = <?=json_encode($entertainmentnorthEastStateArr)?>;
                var entertainmentmidWestStates = <?=json_encode($entertainmentmidWestStateArr)?>;

                var engineeringwestStates = <?=json_encode($engineeringwestStateArr)?>;
                var engineeringsouthStates = <?=json_encode($engineeringsouthStateArr)?>;
                var engineeringnorthEastStates = <?=json_encode($engineeringnorthEastStateArr)?>;
                var engineeringmidWestStates = <?=json_encode($engineeringmidWestStateArr)?>;

                var serviceswestStates = <?=json_encode($serviceswestStateArr)?>;
                var servicessouthStates = <?=json_encode($servicessouthStateArr)?>;
                var servicesnorthEastStates = <?=json_encode($servicesnorthEastStateArr)?>;
                var servicesmidWestStates = <?=json_encode($servicesmidWestStateArr)?>;

                var healthwestStates = <?=json_encode($healthwestStateArr)?>;
                var healthsouthStates = <?=json_encode($healthsouthStateArr)?>;
                var healthnorthEastStates = <?=json_encode($healthnorthEastStateArr)?>;
                var healthmidWestStates = <?=json_encode($healthmidWestStateArr)?>;


                var total_west_software = <?=json_encode(intval($arrwest1['count(*)']))?>;
                var total_south_software = <?=json_encode(intval($arrs1['count(*)']))?>;
                var total_ne_software = <?=json_encode(intval($arrne1['count(*)']))?>;
                var total_mw_software = <?=json_encode(intval($arrmw1['count(*)']))?>;


                var total_west_engineering = <?=json_encode(intval($arrwest2['count(*)']))?>;
                var total_south_engineering = <?=json_encode(intval($arrs2['count(*)']))?>;
                var total_ne_engineering = <?=json_encode(intval($arrne2['count(*)']))?>;
                var total_mw_engineering = <?=json_encode(intval($arrmw2['count(*)']))?>;

                var total_west_entertainment = <?=json_encode(intval($arrwest3['count(*)']))?>;
                var total_south_entertainment = <?=json_encode(intval($arrs3['count(*)']))?>;
                var total_ne_entertainment = <?=json_encode(intval($arrne3['count(*)']))?>;
                var total_mw_entertainment = <?=json_encode(intval($arrmw3['count(*)']))?>;


                var total_west_services = <?=json_encode(intval($arrwest4['count(*)']))?>;
                var total_south_services = <?=json_encode(intval($arrs4['count(*)']))?>;
                var total_ne_services = <?=json_encode(intval($arrne4['count(*)']))?>;
                var total_mw_services = <?=json_encode(intval($arrmw4['count(*)']))?>;

                var total_west_healthcare = <?=json_encode(intval($arrwest5['count(*)']))?>;
                var total_south_healthcare = <?=json_encode(intval($arrs5['count(*)']))?>;
                var total_ne_healthcare = <?=json_encode(intval($arrne5['count(*)']))?>;
                var total_mw_healthcare = <?=json_encode(intval($arrmw5['count(*)']))?>;

                //timeseries data
                var timeseriesdata = <?=json_encode($timeseriesdata)?>;
                var actualdata = new Array();
                var i = 0;


                for (i = 0; i < timeseriesdata.length; i++) {
                    var year = timeseriesdata[i][0];
                    var month = timeseriesdata[i][1];
                    var success = timeseriesdata[i][2];
                    actualdata[i] = new Array(Date.UTC(year, month, 0), success);
                }

                var successtimeseriesdata = <?=json_encode($successtimeseriesdata)?>;
                var successactualdata = new Array();
                var j = 0;


                for (j = 0; j < successtimeseriesdata.length; j++) {
                    var year = successtimeseriesdata[j][0];
                    var month = successtimeseriesdata[j][1];
                    var success = successtimeseriesdata[j][2];
                    successactualdata[j] = new Array(Date.UTC(year, month, 0), success);
                }
                
                




                //investment data

                var totalmoneydata = <?=json_encode($totalmoneydata)?>;
                var categorymoneydata = <?=json_encode($categorymoneydata)?>;
                // console.log(categorymoneydata);

                //category and location charts

                Highcharts.chart('graph1', {
                    chart: {
                        type: 'column'
                    },
                    exporting: {
                        enabled: false
                    },
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: 'Distribution of Categories across States'
                    },
                    subtitle: {
                        text: ''
                    },
                    xAxis: {
                        type: 'category'
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
                        headerFormat: '',
                        pointFormat: '<b>{point.y: f}</b> {series.name} companies in total {point.stackTotal} of {point.name} '
                    },
                    plotOptions: {
                        column: {
                            stacking: 'normal',
                            dataLabels: {
                                enabled: true,
                                color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
                            }
                        }
                    },
                    series: [{
                        name: 'Software',
                        color: '#7cb5ec',
                        data: [{
                            name: 'West',
                            y: total_west_software,
                            drilldown: 'Westsoftware'
                        }, {
                            name: 'South',
                            y: total_south_software,
                            drilldown: 'Southsoftware'
                        }, {
                            name: 'NorthEast',
                            y: total_ne_software,
                            drilldown: 'NorthEastsoftware'
                        }, {
                            name: 'MidWest',
                            y: total_mw_software,
                            drilldown: 'MidWestsoftware'
                        }]
                    }, {
                        name: 'Healthcare',
                        color: '#434348',
                        data: [{
                            name: 'West',
                            y: total_west_healthcare,
                            drilldown: 'Westhealthcare'
                        }, {
                            name: 'South',
                            y: total_south_healthcare,
                            drilldown: 'Southhealthcare'
                        }, {
                            name: 'NorthEast',
                            y: total_ne_healthcare,
                            drilldown: 'NorthEasthealthcare'
                        }, {
                            name: 'MidWest',
                            y: total_mw_healthcare,
                            drilldown: 'MidWesthealthcare'
                        }]
                    }, {
                        name: 'Services',
                        color: '#f7a35c',
                        data: [{
                            name: 'West',
                            y: total_west_services,
                            drilldown: 'Westservices'
                        }, {
                            name: 'South',
                            y: total_south_services,
                            drilldown: 'Southservices'
                        }, {
                            name: 'NorthEast',
                            y: total_ne_services,
                            drilldown: 'NorthEastservices'
                        }, {
                            name: 'MidWest',
                            y: total_mw_services,
                            drilldown: 'MidWestservices'
                        }]
                    }, {
                        name: 'Entertainment',
                        color: '#90ed7d',
                        data: [{
                            name: 'West',
                            y: total_west_entertainment,
                            drilldown: 'Westentertainment'
                        }, {
                            name: 'South',
                            y: total_south_entertainment,
                            drilldown: 'Southentertainment'
                        }, {
                            name: 'NorthEast',
                            y: total_ne_entertainment,
                            drilldown: 'NorthEastentertainment'
                        }, {
                            name: 'MidWest',
                            y: total_mw_entertainment,
                            drilldown: 'MidWestentertainment'
                        }]
                    }, {
                        name: 'Engineering',
                        color: '#8085e9',
                        data: [{
                            name: 'West',
                            y: total_west_engineering,
                            drilldown: 'Westengineering'
                        }, {
                            name: 'South',
                            y: total_south_engineering,
                            drilldown: 'Southengineering'
                        }, {
                            name: 'NorthEast',
                            y: total_ne_engineering,
                            drilldown: 'NorthEastengineering'
                        }, {
                            name: 'MidWest',
                            y: total_mw_engineering,
                            drilldown: 'MidWestengineering'
                        }]
                    }],
                    drilldown: {
                        series: [{
                            name: 'Software',
                            id: 'Westsoftware',
                            data: softwarewestStates
                        }, {
                            name: 'Software',
                            id: 'Southsoftware',
                            data: softwaresouthStates
                        }, {
                            name: 'Software',
                            id: 'NorthEastsoftware',
                            data: softwarenorthEastStates
                        }, {
                            name: 'Software',
                            id: 'MidWestsoftware',
                            data: softwaremidWestStates
                        }, {
                            name: 'Healthcare',
                            id: 'Westhealthcare',
                            data: healthwestStates
                        }, {
                            name: 'Healthcare',
                            id: 'Southhealthcare',
                            data: healthsouthStates
                        }, {
                            name: 'Healthcare',
                            id: 'NorthEasthealthcare',
                            data: healthnorthEastStates
                        }, {
                            name: 'Healthcare',
                            id: 'MidWesthealthcare',
                            data: healthmidWestStates
                        }, {
                            name: 'Services',
                            id: 'Westservices',
                            data: serviceswestStates
                        }, {
                            name: 'Services',
                            id: 'Southservices',
                            data: servicessouthStates
                        }, {
                            name: 'Services',
                            id: 'NorthEastservices',
                            data: servicesnorthEastStates
                        }, {
                            name: 'Services',
                            id: 'MidWestservices',
                            data: servicesmidWestStates
                        }, {
                            name: 'Entertainment',
                            id: 'Westentertainment',
                            data: entertainmentwestStates
                        }, {
                            name: 'Entertainment',
                            id: 'Southentertainment',
                            data: entertainmentsouthStates
                        }, {
                            name: 'Entertainment',
                            id: 'NorthEastentertainment',
                            data: entertainmentnorthEastStates
                        }, {
                            name: 'Entertainment',
                            id: 'MidWestentertainment',
                            data: entertainmentmidWestStates
                        }, {
                            name: 'Engineering',
                            id: 'Westengineering',
                            data: engineeringwestStates
                        }, {
                            name: 'Engineering',
                            id: 'Southengineering',
                            data: engineeringsouthStates
                        }, {
                            name: 'Engineering',
                            id: 'NorthEastengineering',
                            data: engineeringnorthEastStates
                        }, {
                            name: 'Engineering',
                            id: 'MidWestengineering',
                            data: engineeringmidWestStates
                        }]
                    }
                });
                //timeseries charts

                Highcharts.stockChart('graph2', {

                    exporting: {
                        enabled: false
                    },

                    rangeSelector: {
                        inputEnabled: false,
                        selected: 1
                    },

                    title: {
                        text: 'Absolute'
                    },

                    series: [{
                            name: 'Total Startups',
                            data: actualdata
                        },
                        {
                            name: 'Success',
                            data: successactualdata
                        }
                    ]
                });
                Highcharts.stockChart('graph4', {

                    exporting: {
                        enabled: false
                    },

                    rangeSelector: {
                        inputEnabled: false,
                        selected: 1
                    },

                    title: {
                        text: 'Cumulative'
                    },

                    series: [{
                            name: 'Total Startups',
                            data: actualdata
                        },
                        {
                            name: 'Success',
                            data: successactualdata
                        }
                    ]
                });


                //investment chart
                Highcharts.chart('graph3', {
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: 'Money raised by each category of Startups'
                    },
                    subtitle: {
                        text: 'Click the columns to view sub categories.'
                    },
                    xAxis: {
                        type: 'category'
                    },
                    yAxis: {
                        title: {
                            text: 'Amount in Millions of Dollars'
                        }

                    },
                    legend: {
                        enabled: false
                    },
                    plotOptions: {
                        series: {
                            borderWidth: 0,
                            dataLabels: {
                                enabled: true,
                                format: '{point.y:.1f}'
                            }
                        }
                    },

                    tooltip: {
                        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}</b> of total<br/>'
                    },

                    series: [{
                        name: 'Categories',
                        colorByPoint: true,
                        data: [{
                            name: 'Software',
                            y: totalmoneydata['Software'],
                            drilldown: 'Software'
                        }, {
                            name: 'HealthCare',
                            y: totalmoneydata['HealthCare'],
                            drilldown: 'HealthCare'
                        }, {
                            name: 'Entertainment',
                            y: totalmoneydata['Entertainment'],
                            drilldown: 'Entertainment'
                        }, {
                            name: 'Engineering',
                            y: totalmoneydata['Engineering'],
                            drilldown: 'Engineering'
                        }, {
                            name: 'Services',
                            y: totalmoneydata['Services'],
                            drilldown: 'Services'
                        }]
                    }],
                    drilldown: {
                        series: [{
                            name: 'Software',
                            id: 'Software',
                            data: [
                                [
                                    'Web',
                                    categorymoneydata['web']
                                ],
                                [
                                    'Software',
                                    categorymoneydata['software']
                                ],
                                [
                                    'Social',
                                    categorymoneydata['social']
                                ],
                                [
                                    'Mobile',
                                    categorymoneydata['mobile']
                                ],
                                [
                                    'Network Hosting',
                                    categorymoneydata['network_hosting']
                                ],
                                [
                                    'E-commerce',
                                    categorymoneydata['ecommerce']
                                ],
                                [
                                    'Analytics',
                                    categorymoneydata['analytics']
                                ]
                            ]
                        }, {
                            name: 'HealthCare',
                            id: 'HealthCare',
                            data: [
                                [
                                    'Medical',
                                    categorymoneydata['medical']
                                ],
                                [
                                    'Health',
                                    categorymoneydata['health']
                                ]
                            ]
                        }, {
                            name: 'Entertainment',
                            id: 'Entertainment',
                            data: [
                                [
                                    'News',
                                    categorymoneydata['news']
                                ],
                                [
                                    'Video Games',
                                    categorymoneydata['games_video']
                                ],
                                [
                                    'Music',
                                    categorymoneydata['music']
                                ],
                                [
                                    'Photography',
                                    categorymoneydata['photo_video']
                                ],
                                [
                                    'Travel',
                                    categorymoneydata['travel']
                                ],
                                [
                                    'Sports',
                                    categorymoneydata['sports']
                                ],
                                [
                                    'Education',
                                    categorymoneydata['education']
                                ],
                                [
                                    'Fashion',
                                    categorymoneydata['fashion']
                                ],
                                [
                                    'Other',
                                    categorymoneydata['other']
                                ]
                            ]
                        }, {
                            name: 'Engineering',
                            id: 'Engineering',
                            data: [
                                [
                                    'Manufacturing',
                                    categorymoneydata['manufacturing']
                                ],
                                [
                                    'Design',
                                    categorymoneydata['design']
                                ],
                                [
                                    'Automotive',
                                    categorymoneydata['automotive']
                                ],
                                [
                                    'BioTech',
                                    categorymoneydata['biotech']
                                ],
                                [
                                    'CleanTech',
                                    categorymoneydata['cleantech']
                                ],
                                [
                                    'NanoTech',
                                    categorymoneydata['nanotech']
                                ],
                                [
                                    'SemiConductor',
                                    categorymoneydata['semiconductor']
                                ],
                                [
                                    'Enterprise',
                                    categorymoneydata['enterprise']
                                ],
                                [
                                    'Hardware',
                                    categorymoneydata['hardware']
                                ]
                            ]
                        }, {
                            name: 'Services',
                            id: 'Services',
                            data: [
                                [
                                    'Search',
                                    categorymoneydata['search']
                                ],
                                [
                                    'Advertising',
                                    categorymoneydata['advertising']
                                ],
                                [
                                    'Security',
                                    categorymoneydata['security']
                                ],
                                [
                                    'Finance',
                                    categorymoneydata['finance']
                                ],
                                [
                                    'Messaging',
                                    categorymoneydata['messaging']
                                ],
                                [
                                    'Public Relations',
                                    categorymoneydata['Public_relations']
                                ],
                                [
                                    'Real Estate',
                                    categorymoneydata['real_estate']
                                ],
                                [
                                    'Legal',
                                    categorymoneydata['legal']
                                ],
                                [
                                    'Consulting',
                                    categorymoneydata['consulting']
                                ],
                                [
                                    'Hospitality',
                                    categorymoneydata['hospitality']
                                ],
                                [
                                    'Non Profit',
                                    categorymoneydata['nonprofit']
                                ],
                                [
                                    'Transportation',
                                    categorymoneydata['transportation']
                                ]
                            ]
                        }]
                    }
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
                                    <li><a href="index.html">Search</a></li>

                                    <li><a href="prediction.php">Prediction</a></li>

                                    <li><a href="visualsTest.php" class="active">Visualization</a></li>
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


                    <div id="tabpane" class="container">
                        <ul class="nav nav-pills">
                            <li class="active">
                                <a href="#1st" data-toggle="tab">Categories vs States</a>
                            </li>
                            <li><a href="#2nd" data-toggle="tab">Startups over time</a>
                            </li>
                            <li><a href="#3rd" data-toggle="tab">Investments vs Categories</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active" id="1st">
                                <div class="row order-agileinfo">
                                    <br>
                                    <div id="graph1" style="min-width: 80%; height: 400px; margin: 0 auto"></div>
                                </div>
                            </div>
                            <div class="tab-pane" id="2nd">
                                <div class="row order-agileinfo">
                                    <br>
                                    <div id="graph2" style="min-width: 40%; height: 400px;float:left; margin: 0 auto "></div>

                                    <div id="graph4" style="min-width: 40%; height: 400px; float:left; margin: 0 auto "></div>
                                </div>
                            </div>
                            <div class="tab-pane" id="3rd">
                                <div class="row order-agileinfo">
                                    <br>
                                    <div id="graph3" style="min-width: 80%; height: 400px; margin: 0 auto"></div>
                                </div>
                            </div>
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
                            <p align="justify"> The Use of Machine Learning Algorithms for the Study of Business Profitability: A New Approach Based on Preferences</p>
                            <p>Predicting Short Term Company Performance by Applying Sentiment Analysis and Machine Learning Algorithms on Social Media</p>

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
        </div>
    </body>

    </html>
