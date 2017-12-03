<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "finalproject";

/*
$_POST["StartDate"] = "2000-11-29 01:01:30"; //new DateTime("2000-11-29 01:01:30");
$_POST["EndDate"] = "2000-11-30 01:01:30"; //new DateTime("2000-11-30 01:01:30");
$_POST["Departure"]= "Atlanta";
$_POST["Destination"]= "Mexico";
*/


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
    echo "Database selected \n";
}





$query = 'SELECT FSchedule_ID, Flight_Name, Airline_Name, Start, End_d,
                 Depart_Location, Destination
                 FROM flights, flight_schedule
                  WHERE FSchedule_ID = "'.$_SESSION['flight_number'].'" AND '.
                  'FlightID_FK = Flight_ID';

$rs = mysqli_query($r, $query);

if (!$rs) {
    echo "Could not execute query: $query";
    trigger_error(mysqli_error($r), E_USER_ERROR);
} else {
    echo "Query: $query executed \n";
}


echo '<br><table>';
while ($row = mysqli_fetch_assoc($rs)) {


    echo '<tr>'.'<input type="radio" name = "flight_number" id="radioButton" value ="'. $row['FSchedule_ID'] .'">'.
                'Flight: ' .$row['Flight_Name'].'<br>'.
                'Departure: '  .$row['Depart_Location'] . '   Departure Time: '. $row['Start'].'<br>'.
                'Arrival: '.$row['Destination'].'   Arrival Time: '.$row['End_d'].'<br>'.
                'Airlines: '.$row['Airline_Name'].'<hr>'.
        '</tr>';

}
echo "</form>";

mysqli_close($r);

?>
