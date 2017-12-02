<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "finalproject";


//$_POST["CarType"] = "SUV";
$_POST["Parking_Location"] = "Atlanta";


$r = mysqli_connect($host, $user, $pass);


//$sd = mysqli_real_escape_string($r , $_POST["StartDate"]);
//$StartDate = date('Y-m-d H:i:s', strtotime(str_replace('-', '/', $sd)));
//$ed = mysqli_real_escape_string($r, $_POST["EndDate"]);
//$EndDate = date('Y-m-d H:i:s', strtotime(str_replace('-', '/', $ed)));





if (!$r) {
    echo "Could not connect to server\n";
    trigger_error(mysqli_error($r), E_USER_ERROR);
} else {
    echo "Connection established\n";
}

$r2 = mysqli_select_db($r, $db);

if (!$r2) {
    echo "Cannot select database\n";
    trigger_error(mysqli_error($r), E_USER_ERROR);
} else {
    echo "Database selected\n";
}





$query = 'SELECT Park_ID,	Parking_Lot_Name	,Location	,Max_Capacity,	Available_Capacity,	Price

          FROM parking_locations
          WHERE Available_Capacity > 0 AND '.
          'Location ="' .$_POST["Parking_Location"]. '"';

$rs = mysqli_query($r, $query);

if (!$rs) {
    echo "Could not execute query: $query";
    trigger_error(mysqli_error($r), E_USER_ERROR);
} else {
    echo "Query: $query executed\n";
}


echo '<form action="" method= "post"><table>';
while ($row = mysqli_fetch_assoc($rs)) {




    echo '<tr><hr>'.'<input type="radio" name = "park_id" id="radioButton" value ="'. $row['Park_ID'] .'">'.
                'Parking Lot: '. $row['Parking_Lot_Name']. '<br>'.
                'Price:  $'.$row['Price'].'  Per Day<br>'.
                'Location: '.$row['Location'].'<br>'.

                '<hr>'.
        '</tr>';

}
echo "</table></form>";

mysqli_close($r);

?>
