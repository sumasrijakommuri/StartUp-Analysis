<?php

//Connection to database
$open_conn = mysqli_connect('127.0.0.1', 'root' , '', 'diva');
if(!$open_conn)
{
	echo("Connection Failed!");
}
else
{
echo "Connection Successful!</br>";
$file_name = "time.csv";

//
$entries = file($file_name);
	 for($i = 0; $i< sizeof($entries); $i++)
	 {
		 $line = trim($entries[$i]);
		 $elements = explode(",", $line);
		 $attributes = implode("','",$elements);
		 $attributes = "'".$attributes."'";
		 $insert_query = "insert into timeseries(found_date,success) values($attributes)";
		 //echo $insert_query."</br>";

		 echo $attributes;
		 mysqli_query($open_conn, $insert_query) or die(mysqli_error($open_conn));
		
	 }
	  echo "Done!";
}

?>