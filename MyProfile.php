<html>
<head>
    <link rel="stylesheet" href="booking.css" type="text/css">
</head>



<body>

    <?php

    session_start();
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "finalproject";



    $r = mysqli_connect($host, $user, $pass);




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


    if(isset($_SESSION['login_user'])){

        $queryUserInfo = "SELECT * FROM  users WHERE UserID_PK = '$_SESSION[login_user]' ";
        $rs = mysqli_query($r, $queryUserInfo);

              if($rs){
                echo "<br> Query $queryUserInfo Executed <br>";
              }else {
                echo "<br> Query $queryUserInfo Not Executed <br>";
              }
        echo "<h1>User Information: </h1> ";
        echo "<table>";
        while ($row = mysqli_fetch_assoc($rs)) {
          echo "<tr><hr> First Name: '$row[User_Fname]' <br>
                         Last Name: '$row[User_Lname]'  <br>
                         Email: '$row[User_Email]'  <br>
                <hr></tr>";
        }
        echo "</table>";



        $queryCarPurchaseInfo = "SELECT * FROM  bookings_cars, cars
                                    WHERE Car_FK_ID = Car_ID AND
                                    User_FK_ID = '$_SESSION[login_user]'
                                     ";
        $rs = mysqli_query($r, $queryCarPurchaseInfo);

              if($rs){
                echo "<br> Query $queryCarPurchaseInfo Executed <br>";
              }else {
                echo "<br> Query $queryCarPurchaseInfo Not Executed <br>";
              }
        echo "<h1>Car Rental Information Information: </h1> ";
        echo "<table>";
        while ($row = mysqli_fetch_assoc($rs)) {
          echo "<tr><hr> Car Name: '$row[Car_Brand_Make]'  '   '  '$row[Car_Model_Name]'
                         '   ' '$row[Car_Year]'  <br>
                         Car Type: '$row[Car_Type]' <br>
                         Rental Price: $'$row[Rental_Price]' '  ' Pickup Location: '$row[Car_Location]'

                <hr></tr>";
        }
        echo "</table>";






        $queryFlightPurchaseInfo = "SELECT * FROM  bookings_flights, flights, flight_schedule
                                    WHERE Schedule_FK_Flight = FSchedule_ID AND FlightID_FK = Flight_ID AND
                                    User_FK_ID = '$_SESSION[login_user]'
                                     ";
        $rs = mysqli_query($r, $queryFlightPurchaseInfo);

              if($rs){
                echo "<br> Query $queryFlightPurchaseInfo Executed <br>";
              }else {
                echo "<br> Query $queryFlightPurchaseInfo Not Executed <br>";
              }
        echo "<h1>Flight Purchase Information Information: </h1> ";
        echo "<table>";
        while ($row = mysqli_fetch_assoc($rs)) {
          echo "<tr><hr> Flight Name: '$row[Flight_Name]'  <br>
                        Airline Name:  '$row[Airline_Name]' <br>
                        Departure: '$row[Depart_Location]'  Arrival: '$row[Destination]'<br>
                        Start Date Time: '$row[Start]' <br>
                        End Date Time: '$row[End_d]' <br>
                        Flight Price: '$row[Flight_Price]'  <br>

                <hr></tr>";
        }
        echo "</table>";



        $queryParkingPurchaseInfo = "SELECT * FROM  bookings_parking, parking_locations
                                    WHERE Park_FK_ID = Park_ID AND
                                    User_FK_ID = '$_SESSION[login_user]'
                                     ";
        $rs = mysqli_query($r, $queryParkingPurchaseInfo);

              if($rs){
                echo "<br> Query $queryParkingPurchaseInfo Executed <br>";
              }else {
                echo "<br> Query $queryParkingPurchaseInfo Not Executed <br>";
              }
        echo "<h1>Parking Rental Information Information: </h1> ";
        echo "<table>";
        while ($row = mysqli_fetch_assoc($rs)) {
          echo "<tr><hr> Flight Name: '$row[Parking_Lot_Name]'  <br>
                        Airline Name:  '$row[Location]' <br>
                        Departure: '$row[Price]'  <br>

                <hr></tr>";
        }
        echo "</table>";

        mysqli_close($r);


    }else{
      echo "<h1>Log In!!!!! User is not Logged In!!!!</h1>";
    }



     ?>



</body>


</html>
