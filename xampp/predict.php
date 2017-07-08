<?php


    $mysqli = @mysqli_connect("127.0.0.1", "root", "", "diva");
    if (!$mysqli) {
    echo "Error: " . mysqli_connect_error($mysqli);
    exit();
    }    

   $categoryRatesQuery = "SELECT code,rate FROM category";
   $categoryRates = mysqli_query($mysqli,$categoryRatesQuery) or die(mysqli_error($mysqli)) ;

   $categoryRateData = array();
   while($row = mysqli_fetch_array($categoryRates))
   	{
   		$categoryRateData[$row['code']] = floatval($row['rate']);
   	}


   	$stateRatesQuery = "SELECT statecode,rate FROM state";
   	$stateRates = mysqli_query($mysqli,$stateRatesQuery) or die(mysqli_error($mysqli));

   	$stateRateData = array();
   	while($row = mysqli_fetch_array($stateRates))
   	{
   		$stateRateData[$row['statecode']] = $row['rate'];
   	}



$homepage = $_POST['homepage'];
$employees = $_POST['employees'];
$competition = $_POST['Competition'];
$investors = $_POST['investors'];
$category = $_POST['category'];
$state = $_POST['state'];
$money = $_POST['investment'];
$acquired = $_POST['acquired'];


if($homepage == "Yes")
{
	$hp = 1;
}
else
{
	$hp = 0;
}


	$em = 0;

  if($acquired == "Yes")
  {
    $aq = 1;
  }
  else
  {
    $aq = 0;
  }

if($competition == "Yes")
{
	$cp = 0;
}
else
{
	$cp = 1;
}

$cr = $categoryRateData[$category];
$sr = $stateRateData[$state];





$args = $cr." ".$em." ".$aq." ".$cp." ".$investors." ".$sr." 0 ".$hp." ".$money;
//$args = " 0 ".$hp." ".$em." 0 ".$cp." ".$investors." ".$cr." ".$sr." ".$mo;
$cmd = "python -W ignore clustering.py ".$args;




exec("$cmd", $output);

//$result = explode(" ", exec("$cmd"));

//echo $output;
$result = implode(" ", $output);

$day = date("m-d-y");

$historyquery = "INSERT INTO history Values('".$day."','".$homepage."','".$employees."','".$competition."','".$acquired."','".$investors."','".$category."','".$state."','".$money."','".$result."')";

mysqli_query($mysqli,$historyquery) or die(mysqli_error($mysqli));

$clusterquery = "SELECT * FROM clusters WHERE cluster = $result ";

$clusterquery.=" AND money != '$0' AND employeeCount != 0 AND employeeCount<101 GROUP BY name";
//echo $clusterquery;
$companies = mysqli_query($mysqli, $clusterquery);

$percentquery = "SELECT percent FROM percent WHERE cluster ='".$result."'";

$percent = mysqli_query($mysqli,$percentquery);
$rowpercent = mysqli_fetch_array($percent, MYSQLI_ASSOC);
$answer = $rowpercent['percent'];


echo "<div align=\"center\">
            <h3> The possible success rate for the startup is $answer %.</h3>
            <h3>Similar Companies</h3>
            <br><br>
            <div class=\"table\">
            <table align=\"center\">
                <tr>
                    <th>Name</th>
                    <th>State</th>
                    <th>Category</th>
                    <th>No of Employees</th>
                    <th>No of Investors</th>
                    <th>Investment</th>
                    <th>Homepage URL</th>
                </tr>";

while($row = mysqli_fetch_array($companies, MYSQLI_ASSOC)){

            $category   = $row["category"];
            $name       = $row['name'];
            $state      = $row['state'];
            $homepage   = $row['homeURL'];
            $employee   = $row['employeeCount'];
            $investment = $row['money'];
            $investors  = $row['investor'];

            echo "<tr>";
            echo "<td>$name</td>";
            echo "<td>$state</td>";
            echo "<td>$category</td>";
            echo "<td>$employee</td>";
            echo "<td>$investors</td>";
            echo "<td>$investment</td>";
            echo "<td><a href=\"$homepage\">$homepage</td>";
            echo "</tr>";
        }

    echo "</table>
    </div>
    </div>";
?>
