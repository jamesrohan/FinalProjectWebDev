
<html>

  <head>
    <link rel="stylesheet" href="booking.css" type="text/css">
  </head>

  <body >
    <?php
      session_start();

      echo '<div class = "myClass"><form action="MyCart.php" method= "post">';
      include 'showAvailFlights.php';
      // If the user is logged in We show the Check Out and Add to Cart Buttons
      if( isset($_SESSION['login_user']) ){
        echo '<button type="submit" > Add To Cart</button>';
      }
      echo '</form></div>';


      echo '<form action="Booking.php" >
              <button type="submit" > Home Page </button>
            </form>';

    ?>

  </body>



</html>
