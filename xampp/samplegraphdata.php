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

    $graphwest = array($reswest1,$reswest2,$reswest3,$reswest4,$reswest5);

    echo json_encode($graphwest);

    
   
?>
