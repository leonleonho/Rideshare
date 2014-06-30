<?php
   include 'connection.php';
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
    $user = $_POST['user'];
    $pass = $_POST['password'];
    $request = "SELECT * FROM users WHERE id = '$user' AND password = '$pass'";
    $result = mysqli_query($con, $request);
    if(mysqli_num_rows($result)!=0){    
        while($row = mysqli_fetch_array($result))
              {
                if(strcasecmp($row['id'], $user) == 0 && $row['password'] == $pass) {
                    setcookie("user",$user, time()+3600*24);
                    header( 'Location: user/home.php' ) ;
                } else {
                    echo "failed";
                }
              }
    } else {
        $location = $_POST['location'] . "?fail=1";
        header( "Location: $location" );
    }

    

    mysqli_close($con);

?>
