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
        <link rel="stylesheet" type="text/css" href="style/base.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
</script>
<script>
function validateUser() {
var Username = document.getElementById("user").value;
var Password = document.getElementById("password").value;

		if (Username == "" && Password == "") {
            document.getElementById('warning').innerHTML="*Username can not be empty.";
            return false;
		} else if (Username == "") {
            document.getElementById('warning').innerHTML="*Username can not be empty.";
            return false;
		} else if (Password == "") {
            document.getElementById('warning').innerHTML="*Password can not be empty.";
            return false;
		} else if ((Username.match(/^[a][0]{2}\d{6}$/i)) == null ) {
            document.getElementById('warning').innerHTML="*BCIT ID is incorrect.";
            return false;
		} 
		return true;
}
</script>
<script src="js/java.js"></script>
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
			     <img src=./images/Logo.gif alt = logo height= 100>
				</div>

				<div id="login">
					<form  id = "login1" name="login1" action="login.php" method="post" onsubmit = "return validateUser()">
					<label for="user">Username</label>
					<input class="textbox" id="user" name="user" type="text">
					<label for="password">Password</label>
					<input class="textbox" id="password" name="password" type="password">
                    <input name = "location" value = "index.php" type = "hidden">
					<input class="button" type="submit" value="Login">
					</form>
				<br />
                <span id = "warning">
                    <?php
                        if(isset($_GET['fail'])) {
                            echo "*Username or Password was inccorect";   
                            }
                    ?>    
                </span>
                </div>
			</div>
				
			<div id="navBar">
				<ul id="navLinks">
				<li><a href = "bios.php">About Us</a></li>
				<li><a href = "services.php">Services</a></li>
				<li><a id="navRightBorder" href = "signup.php">Sign up</a></li>
				</ul>
			</div>
		</div>
		
		<div id="bodyWrapper">
			<div id="bodyContent">
				<div class="textContainer">
					<h1>Tired of paying for gas and taking the bus?</h1>
					<p>Sign up to our ride share program to for an opportunity to change your life.</p>
					<ul>
						<li>Meet new people</li>
						<li>Cut transit time</li>
						<li>Save money</li>
						<li>Help the environment</li>
					</ul>
				</div>
				<div class="imageContainer">
					<img src =  ./images/Map.jpg width =700 alt = map>  
				</div>
				
			</div>
		</div>
	
	
		<div id="footer">
			<div id="footerContent">
				<div id="footerLogo">
					<img src=./images/Logo.gif alt = logo height= 75>
				</div>
				<div id="footerText">
					<p>&copy; 2014 BCIT Ride Share</p>
				</div>
			</div> 
		</div>
	</div>
    </body>

</html>