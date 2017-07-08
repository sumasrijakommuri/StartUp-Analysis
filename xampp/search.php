<?php


 $mysqli = @mysqli_connect("127.0.0.1", "root", "", "diva");


    if (!$mysqli) {
    echo "Error: " . mysqli_connect_error($mysqli);
    exit();
        
        
    }    
    $search         = isset($_POST['extra'])       ? htmlspecialchars(trim($_POST['extra']))      : null;
    $searchstring   = isset($_POST['search'])       ? htmlspecialchars(trim($_POST['search']))      :null;
    $catLocation    = isset($_POST['selectVal'])    ? htmlspecialchars(trim($_POST['selectVal']))   : null;
   // $cluster    = isset($_POST['cluster'])    ? htmlspecialchars(trim($_POST['cluster']))   : null;
    //echo $search;
    //echo $catLocation;

    $query          = "SELECT DISTINCT * FROM clusters WHERE (";
    echo '<div class="banner">
        
        <br><br>
        <div align="center" class="table">
        <h3>Search Results</h3>
        <table>

        <tr>
            <th>Name</th>
            <th>State</th> 
            <th>Category</th>
            <th>No of Employees</th>
            <th>No of Investors</th>
            <th>Investment</th>
            <th>Cluster</th>
            <th>Homepage URL</th>
            
        </tr>';

    if($catLocation){
        if($search){
            if($catLocation == "category"){
                $query .= " category LIKE '%". $search ."%'";
                $query.= ") AND money != '$0' AND employeeCount != 0 AND employeeCount<101 GROUP BY name ORDER BY employeeCount DESC";
            }else if($catLocation == "state"){
                $query .= " state LIKE '%" . $search . "%'";
                $query.= ") AND money != '$0' AND employeeCount != 0 AND employeeCount<101 GROUP BY name ORDER BY employeeCount DESC";
            }
            else if($catLocation == "cluster"){
                $query .=" cluster = '".$search."'";
               $query.=") AND employeeCount != 0";
            }
        }else if($searchstring){
            $query .= " category LIKE '%".$searchstring."%' OR state LIKE '%" .$searchstring ."%' OR info LIKE '%" .$searchstring."%' OR homeURL LIKE '%".$searchstring."%' OR blogURL LIKE '%".$searchstring."%' OR email LIKE '%".$searchstring."%'";
            $query.= ") AND money != '$0' AND employeeCount != 0 AND employeeCount<101 GROUP BY name ORDER BY employeeCount DESC";
           
        }
        
        
        $result = mysqli_query($mysqli, $query);
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $cluster      = $row["cluster"];
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
            echo "<td>$cluster</td>";
            echo "<td><a href=\"$homepage\">$homepage</td>";
            echo "</tr>";
        }
    }
    echo "</table>
    </div>";
?>
