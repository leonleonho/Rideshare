<?php
    include 'connection.php';
    include 'checkUser.php';
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    $settings = "";
    foreach($_POST as $key => $value) {
        if($value != ""){
            if($settings == "") {
                $settings = "$key='$value'";
            } else {
            $settings = $settings . ", $key='$value'";

            }
        }
    }

    //echo $values . "<br />";
    //echo $row;
    $user = "'".$_COOKIE['user']."'";
    $request = "UPDATE users SET $settings WHERE id = $user";
// echo $request;
        //echo $_COOKIE["user"];
    mysqli_query($con, $request);
    mysqli_close($con);
    header('Location: profilesettings.php?message=Updated!');
?>