<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Booking</title>

        <link rel="stylesheet" href="booking.css" type="text/css">

    </head>
    <body>

        <div>
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn">Account</button>
                <div id="myDropdown" class="dropdown-content">
                    <a href="#login" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</a>
                    <a href="#Register" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Register</a>
                </div>
            </div>

            <div id="id01" class="modal">

                <form class="modal-content animate" action="Login.php" method="post">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                        <img src="img_avatar2.png" alt="Avatar" class="avatar">
                    </div>

                    <div class="container">
                        <label><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="uname" required>

                        <label><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" required>

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
                var modal = document.getElementById('id01');

                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
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
                        <img src="img_avatar2.png" alt="Avatar" class="avatar">
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

            <table>
                <tr>
                    <td><label for="Origin">Origin </label> </td>
                    <td><label for="Destination">Destination </label> </td>
                </tr>
                <tr>
                    <td><input type="text" id="origin"> </input> </td>
                    <td><input type="text" id="destination"> </input> </td>
                </tr>
                <tr>
                    <td> <label for="departing">Departing</label></td>
                    <td> <label for="returning">Returning </label></td>
                </tr>
                <tr>
                   <td><input type="text" id="departing"> </input></td>
                    <td><input type="text" id="returning"> </input> </td>
                </tr>
            </table>

            <input type="checkbox"> Roundtrip</input>
            <br>
            <button type="submit" id="search_flight"> Search Flights</button>
            <hr/>

            <h2> Cars </h2>

            <table>
                <tr>
                    <td> <label>PickUp Location </label> </td>
                    <td> <label>DropOff Location</label> </td>
                </tr>
                <tr>
                    <td> <input type="text"> </input> </td>
                    <td> <input type="text"> </input> </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td><label> PickUp Date</label> </td>
                    <td> </td>
                    <td><label> DropOff Date</label> </td>
                    <td> </td>
                </tr>
                    <td><input type="text"> </td>
                    <td>
                        <select>
                            <option>1 am</option>
                            <option>2 am</option>
                            <option>3 am</option>
                            <option>4 am</option>
                            <option>5 am</option>
                            <option>6 am</option>
                            <option>7 am</option>
                            <option>8 am</option>
                            <option>9 am</option>
                            <option>10 am</option>
                            <option>11 am</option>
                            <option>12 pm</option>
                            <option>1 pm</option>
                            <option>2 pm</option>
                            <option>3 pm</option>
                            <option>4 pm</option>
                            <option>5 pm</option>
                            <option>6 pm</option>
                            <option>7 pm</option>
                            <option>8 pm</option>
                            <option>9 pm</option>
                            <option>10 pm</option>
                            <option>11 pm</option>
                            <option>12 am</option>
                        </select>
                    </td>
                    <td><input type="text"> </td>
                    <td>
                        <select>
                            <option>1 am</option>
                            <option>2 am</option>
                            <option>3 am</option>
                            <option>4 am</option>
                            <option>5 am</option>
                            <option>6 am</option>
                            <option>7 am</option>
                            <option>8 am</option>
                            <option>9 am</option>
                            <option>10 am</option>
                            <option>11 am</option>
                            <option>12 pm</option>
                            <option>1 pm</option>
                            <option>2 pm</option>
                            <option>3 pm</option>
                            <option>4 pm</option>
                            <option>5 pm</option>
                            <option>6 pm</option>
                            <option>7 pm</option>
                            <option>8 pm</option>
                            <option>9 pm</option>
                            <option>10 pm</option>
                            <option>11 pm</option>
                            <option>12 am</option>
                        </select>
                    </td>
                </tr>
            </table>
            <label for="c_type">Car Type</label>
            <select id="c_type">
                <option>Suv </option>
                <option>Compact </option>
                <option>Mid-Sized </option>
                <option>Luxury </option>
            </select>
            <br>
            <button type="submit" id="search_cars"> Search Cars </button>

            <hr>

            <h2> Parking</h2>

            <Label>Location</Label><input type="text">
            <label>Duration</label><input type="text">
           <button type="submit" id="search_parking">Search Parking</button>
       </div>
    </body>
    </html>

