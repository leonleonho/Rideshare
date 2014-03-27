<?php
    include 'connection.php';
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }


    $user = $_POST['user'];
    $pass = $_POST['password'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $request = "SELECT * FROM users WHERE id = '$user'";
    $result = mysqli_query($con, $request);
    if(mysqli_num_rows($result)!=0){    
        while($row = mysqli_fetch_array($result))
              {
                if(strcasecmp($row['id'], $user) == 0) {
                    header( 'Location: index.php?error=Found another account with same ID' ) ;
                } else {
                    echo "failed";
                }
              }
    } else {
       
        $request = "INSERT INTO users (id, name, password,email) VALUES ('$user', '$name', '$pass', '$email')";
       // echo $request;
        mysqli_query($con, $request);
        echo "success";
    }

    mysqli_close($con);
?>