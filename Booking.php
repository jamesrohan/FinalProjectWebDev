<?php
session_start();

$host = "localhost";
$user = "root";
$pass = "";
$db = "finalproject";

$r = mysqli_connect($host, $user, $pass);

    //Connection Established and LogIn hit
    if($_SERVER["REQUEST_METHOD"] == "POST" && $r){ //$r
      //Select Database
      $r2 = mysqli_select_db($r, $db);
      //Construct Query
      $myusername = mysqli_real_escape_string($r,$_POST['uname_login']);
      $mypassword = mysqli_real_escape_string($r,$_POST['password_login']);
      $query = 'SELECT UserID_PK
                       FROM users
                        WHERE User_Email ="'.$myusername.'" AND '.
                        'User_Password ="'.$mypassword.'"';
      //Execute Query
      $rs = mysqli_query($r, $query);
      $row = mysqli_fetch_assoc($rs);
      $count = mysqli_num_rows($rs);

      if($count == 1) {
        $_SESSION['login_user'] = $row['UserID_PK'];
        header("location: Booking.php");
      }//End If Count

    }//End if


 ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Booking</title>

        <link rel="stylesheet" href="booking.css" type="text/css">

    </head>
    <body>



      <?php
      if(!isset($_SESSION['login_user'])){
        echo '<h6>User Not Logged In</h6>';
      }else {
        echo '<h6>Sucessfull Login User ID: '.$_SESSION['login_user'] .'</h6>';
      }
       ?>

        <div >
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn">Account</button>
                <div id="myDropdown" class="dropdown-content">

                  <?php
                  if(!isset($_SESSION['login_user'])){
                    echo '<a href="#login" onclick="document.getElementById(\'id01\').style.display=\'block\'" style="width:auto;">Login</a>
                    <a href="#Register" onclick="document.getElementById(\'id02\').style.display=\'block\'" style="width:auto;">Register</a>';
                  }else {
                    echo '<a href="MyProfile.php"  style="width:auto;">My Profile</a>
                          <a href="LogOut.php"  style="width:auto;">Log Out</a>
                          <a href="MyCart.php"  style="width:auto;">My Cart</a>';
                  }

                  ?>

                </div>
            </div>

            <div id="id01" class="modal">

                <form class="modal-content animate" action="" method="post">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                        <img src="img_avatar2.gif"  alt="Avatar" class="avatar">
                    </div>

                    <div class="container">
                        <label><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="uname_login" required>

                        <label><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="password_login" required>

                        <button type="submit">Login</button>
                        <input type="checkbox" checked="checked"> Remember me
                    </div>

                    <div class="container" style="background-color:#f1f1f1">
                        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                        <span class="psw">Forgot <a href="#">password?</a></span>
                    </div>
                </form>
            </div>

            <script>
                // Get the modal
                var modal1 = document.getElementById('id01');

                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal1) {
                        modal1.style.display = "none";
                    }
                }
            </script>

            <script>
                /* When the user clicks on the button,
                toggle between hiding and showing the dropdown content */
                function myFunction() {
                    document.getElementById("myDropdown").classList.toggle("show");
                }

                // Close the dropdown if the user clicks outside of it
                window.onclick = function(event) {
                    if (!event.target.matches('.dropbtn')) {

                        var dropdowns = document.getElementsByClassName("dropdown-content");
                        var i;
                        for (i = 0; i < dropdowns.length; i++) {
                            var openDropdown = dropdowns[i];
                            if (openDropdown.classList.contains('show')) {
                                openDropdown.classList.remove('show');
                            }
                        }
                    }
                }
            </script>

            <div id="id02" class="modal">

                <form class="modal-content animate" action="Register.php" method="post">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                        <img src="img_avatar2.gif" alt="Avatar" class="avatar">
                    </div>

                    <div class="container">
                        <label><b>First Name</b></label>
                        <input type="text" placeholder="Enter First name" name="fname" required>

                        <label><b>Last Name</b></label>
                        <input type="text" placeholder="Enter Last name" name="lname" required>

                        <label><b>Email</b></label>
                        <input type="text" placeholder="Enter Email address" name="email" required>

                        <label><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" required>

                        <button type="submit">Sign Up</button>
                    </div>

                    <script>
                        function hideAndShow(){
                            document.getElementById('id02').style.display='none';
                            document.getElementById('id01').style.display='block'
                        }
                    </script>

                    <div class="container" style="background-color:#f1f1f1">
                        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                        <span class="login">Already <a href="#" onclick="hideAndShow()" style="width:auto;">a member?</a></span>
                    </div>
                </form>
            </div>

            <script>
                // Get the modal
                var modal = document.getElementById('id02');

                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }
            </script>

        </div>

       <div>
           <h2>Flights</h2>

           <form action="SearchFlights.php" method="post">
              <table>
                  <tr>
                      <td><label for="Origin">Origin </label> </td>
                      <td><label for="Destination">Destination </label> </td>
                  </tr>
                  <tr>
                      <td><input type="text" id="origin" name="Departure"> </input> </td>
                      <td><input type="text" id="destination" name="Destination"> </input> </td>
                  </tr>
                  <tr>
                      <td> <label for="departing">Departing Date Time</label></td>
                      <td> <label for="returning">Returning Date Time</label></td>
                  </tr>
                  <tr>
                     <td><input type="text" id="departing" name="StartDate"> </input></td>
                      <td><input type="text" id="returning" name="EndDate"> </input> </td>
                  </tr>
              </table>


              <input type="checkbox"> Roundtrip</input>
              <br>
              <button type="submit" id="search_flight"> Search Flights</button>
            </form>

            <hr/>





          <h2> Cars </h2>

          <form action="SearchCars.php" method="post">
            <table>
                <tr>
                    <td> <label>PickUp Location </label> </td>
                </tr>
                <tr>
                    <td> <input type="text" name="Location"> </input> </td>
                </tr>

            </table>
            <label for="c_type">Car Type</label>
            <select id="c_type" name="CarType">
                <option value="SUV">SUV </option>
                <option  value="Compact">Compact </option>
                <option value="Mid-Sized">Mid-Sized </option>
                <option value="Luxury">Luxury </option>
            </select>
            <br>
            <button type="submit" id="search_cars"> Search Cars </button>
          </form>







            <hr>

            <h2> Parking</h2>


            <form  action="SearchParking.php" method="post">
              <Label>Location</Label><input name="Parking_Location"type="text">
             <button type="submit" id="search_parking">Search Parking</button>
            </form>



       </div>
    </body>
    </html>
