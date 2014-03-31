<?php
    include 'connection.php';
    include 'checkUser.php';
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    $row = "user";
    $values = "'".$_COOKIE['user']."'";
    foreach($_POST as $key => $value) {
        ${$key} = $value;       
    }
    //echo $day;
    //echo $time;
    //echo $day1;
   // echo $day2;
    $role = "'".$role."'";
    $time = "'".$time."'";
    if($location == "bcit") {
        $day = $day."ATime";
    }else {
        $day = $day."DTime";
    }
    //echo $role;
    //echo $values . "<br />";
    //echo $row;
    $request = "SELECT * FROM listing WHERE role = $role AND $day = $time";
        //echo $_COOKIE["user"];
    $result = mysqli_query($con, $request);
    $markerResult = "";
    $listenerResult ="";
    while($row = mysqli_fetch_array($result))
      {
        //echo $row['codedAddress'];
        $address = $row['codedAddress'];
        $user = $row['user'];
        $id = $row['id'];
        $markerResult = $markerResult. " " . 
            "var $id = new google.maps.Marker({
            position: new google.maps.LatLng$address,
            map: map,
            title:\"Hello World!\"
        });";
        
        $listenerResult = $listenerResult . " " . 
        "google.maps.event.addListener($id, 'click', function() {
        alert(\"you clicked someone called $user\");
  });" ;
      }
    mysqli_close($con);
    echo $markerResult;
    echo "<br />";
    echo $listenerResult;
?>