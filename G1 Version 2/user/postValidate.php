<?php
    include 'connection.php';
    include 'checkUser.php';
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    $row = "user, id";
    $values = "'".$_COOKIE['user']."'".", 'a" . rand(0,99999999999999) . "'";
    foreach($_POST as $key => $value) {
        ${$key} = $value;
            $row = $row . ", " . $key;
            $values = $values . ", " . "'$value'";
    }

    //echo $values . "<br />";
    //echo $row;
    $request = "INSERT INTO listing ($row) VALUES ($values)";
       // echo $request;
        //echo $_COOKIE["user"];
       mysqli_query($con, $request);
    mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
    <!-- 
		BCIT RIDE SHARE
		Leon Ho 
        A00879122
		
		Lukasz Pacyk
		A00814851
    -->
    <title>BCIT Ride share</title>
        <link rel="stylesheet" type="text/css" href="../style/base.css">
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>
<script src="js/java.js"></script>
<script>
    window.setTimeout(function(){
        window.location.href = "home.php";
    }, 5000);
</script>
</head>

<body>
	
	<div id="leftBackground">
	</div>
	<div id="rightBackground">
	</div>

	<div id="wrapper">
		<div id="header"> 
			<div id="headerContent">
				<div id="logo">
				<a href="home.php"> <img src=../images/Logo.gif alt = logo height= 100></a>
				</div>
				
				<div id="login">
					<form name="logout" action="http://webdevfoundations.net/scripts/formdemo.asp" method="get">	<!--TO DO-->
					<input class="button" type="submit" value="Logout">
					</form>
				</div>
			</div>
				
			<div id="navBar">
				<ul id="navLinks">
				<li><a href="home.php">Home</a></li>
				<li><a href="posting.php">Post listing</a></li>
				<li><a id="navRightBorder" href="profilesettings.php">Profile settings</a></li>
				</ul>
			</div>
		</div>
		
		<div id="bodyWrapper">
</script>
            <div id="bodyContent">
			
				<div class="imageContainer">
				<h2>Post Successfull!</h2>
                Redirecting home in 5 seconds.
                </div>
			
				</div>
			</div>
		</div>
	
	
		<div id="footer">
			<div id="footerContent">
				<div id="footerLogo">
					<img src=../images/Logo.gif alt = logo height= 75>
				</div>
				<div id="footerText">
					<p>&copy; 2014 BCIT Ride Share</p>
				</div>
			</div> 
		</div>
</body>

</html>