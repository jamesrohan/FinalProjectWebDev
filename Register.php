

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

    $queryRegisterUser = "INSERT INTO users
                          ( User_Email, User_Fname, User_Lname, User_Password)
                          VALUES ('$_POST[email]','$_POST[fname]',
                            '$_POST[lname]','$_POST[psw]' ) ";

    $rs = mysqli_query($r, $queryRegisterUser);

    if($rs){
      echo "User Sucessfully Inserted".$_POST['email'].$_POST['fname'].
              $_POST['lname'].$_POST['psw'];
              
    }else {
      echo "Registration Uncessfull";
    }

    mysqli_close($r);


  ?>

</body>


</html>