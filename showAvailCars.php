<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "finalproject";

/*
$_POST["CarType"] = "SUV";
$_POST["Location"] = "Atlanta";
*/

$r = mysqli_connect($host, $user, $pass);


//$sd = mysqli_real_escape_string($r , $_POST["StartDate"]);
//$StartDate = date('Y-m-d H:i:s', strtotime(str_replace('-', '/', $sd)));
//$ed = mysqli_real_escape_string($r, $_POST["EndDate"]);
//$EndDate = date('Y-m-d H:i:s', strtotime(str_replace('-', '/', $ed)));





if (!$r) {
    //echo "Could not connect to server\n";
    trigger_error(mysqli_error($r), E_USER_ERROR);
} else {
    //echo "Connection established\n";
}

$r2 = mysqli_select_db($r, $db);

if (!$r2) {
    //echo "Cannot select database\n";
    trigger_error(mysqli_error($r), E_USER_ERROR);
} else {
    //echo "Database selected\n";
}





$query = 'SELECT Car_ID, 	Car_Brand_Make,	Car_Model_Name,
                  Car_Location,Car_Year, Car_Type, Rental_Price
          FROM cars
          WHERE Available_Car_Capacity > 0 AND '.'Car_Type ="'. $_POST["CarType"] .'" AND '.
          'Car_Location ="' .$_POST["Location"]. '"';

$rs = mysqli_query($r, $query);

if (!$rs) {
    //echo "Could not execute query: $query";
    trigger_error(mysqli_error($r), E_USER_ERROR);
} else {
    //echo "Query: $query executed\n";
}


echo '<table>';
while ($row = mysqli_fetch_assoc($rs)) {




    echo '<tr><hr>'.'<input type="radio" name = "car_id" id="radioButton" value ="'. $row['Car_ID'] .'">'.
                'Car Model: '. $row['Car_Model_Name']. '<br>'.

                'Brand: '  .$row['Car_Brand_Make'] . '   Year: '.$row['Car_Year'].'<br>'.

                'Pickup Location: '.$row['Car_Location'].'<br>'.

                'Price: $'.$row['Rental_Price'].'  Per Day'.'<br>'.

                '<hr>'.
        '</tr>';

}
echo "</table>";

mysqli_close($r);

?>
