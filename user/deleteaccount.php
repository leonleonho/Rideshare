<?php
    include 'connection.php';
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
    $user = $_COOKIE['user'];
    $request = "DELETE FROM users WHERE id = '$user'";
    echo $request;
        //echo $_COOKIE["user"];
    mysqli_query($con, $request);
    mysqli_close($con);
    header('Location: ../logout.php');
?>