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
                    header( 'Location: user/home.html' ) ;
                } else {
                    echo "failed";
                }
              }
    } else {
        header( 'Location: index.php?fail=1' ) ;
    }

    

    mysqli_close($con);

?>
