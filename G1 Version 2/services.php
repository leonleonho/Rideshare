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
function load(page) {
    $("#bodyWrapper").load(page);

}
<script src="js/java.js"></script>

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
				<a href="./index.php"> <img src=./images/Logo.gif alt = logo height= 100></a>
				</div>

				<div id="login">
					<form  id = "login1" name="login1" action="login.php" method="post" onsubmit = "return validateUser()">
					<label for="user">Username</label>
					<input class="textbox" id="user" name="user" type="text">
					<label for="password">Password</label>
					<input class="textbox" id="password" name="password" type="password">
					<input name = "location" value = "services.php" type = "hidden">
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
				<h2>Carpooling</h2>
				<p>Carpooling was a hot topic before it fizzled out. People feel unsafe riding with strangers thus carpooling never became popular. However, with out service you do not have to deal with those issues. Transit is often awkward and inconvenient in the lower mainland. Sometimes that car ride may take as little as a quarter of the time transit may take! </p>
				</div>
				<hr>
				<div class="textContainer">
				<h2>Why Us?</h2>
				<p>We are determined to make it easy for people to match up with each other. By creating this service we hope to connect people at British Columbia's Institute of Technology. We provide an easy to use accessible service. By ensuring that you are only matched with the BCIT community, we make it safe to carpool.</p>
				</div>
				<hr>
				<div class="textContainer">
				<h2>How does it work?</h2>
				<p>Your BCIT e-mail is used to verify that you are from BCIT. After registering you can view listings of drivers who are looking for passengers. Also, you may view passengers who are looking for a driver. You can then contact whomever you need to arrange commute plans. By sharing a ride you save the environment. The driver saves a large amount of money and the passanger saves precious time. This service is a benefit to everyone. Sign up now to see for yourself!</p>
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