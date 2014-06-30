<?php
    include 'checkUser.php';
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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/java.js"></script>
    <script>
    function checkPassword() {
        if(document.getElementById("newpass").value != document.getElementById("confirmpass").value) {
            document.getElementById('warning1').innerHTML = "*Your two passwords do not match";
            return false;
        } else {
            document.getElementById('warning1').innerHTML = "";
            return true;
        }
    }
    function validatePassword() {
		var Password = document.getElementById("newpass").value;
		
		if (Password != "") {
         if(Password.length <= 6){
            document.getElementById('warning0').innerHTML="*Your password must be longer than 6 characters.";
             return  false;
        } else if ((Password.match(/^.*(?=.*[a-z])(?=.*[A-Z]).*$/)) == null) {
			 document.getElementById('warning0').innerHTML="*It must contain an uppercase letter.";
		     return false; 
        } else if ((Password.match(/^.*(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/)) == null) {
			 document.getElementById('warning0').innerHTML="*It must contain a number";
            return false;
        } else {
            document.getElementById('warning0').innerHTML="";
            return true;
        } 
        }else {
            document.getElementById('warning0').innerHTML="";
            return true;    
        }
        

    }
    function validateEmail() {
        var Email = document.getElementById("email").value;
        if(Email != "" && (Email.match(/^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/)) == null) {
            document.getElementById('warning2').innerHTML="*Invalid email format";
            return false;
        } else {
            document.getElementById('warning2').innerHTML="";
            return true;
        }
    }
    function validatePhone() {
        var phone = document.getElementById("tele").value;
        var phone2 = phone;
        if(phone != "" && phone.match(/^(604|778)(|\s)[0-9]{3}(|\s)[0-9]{4}$/) == null) {
            document.getElementById('warning3').innerHTML="*Invalid phone number. Please follow format: 604 111 1111";
            return false;
        } else {
            document.getElementById('warning3').innerHTML = "";
            return true;
        }
        
    }
    function validateAll() {
        var error = 0;
        if(!validatePhone()) {
            error = 1;
        }
        if(!validateEmail()) {
            error = 1;
        }
        if(!validatePassword()) {
            error = 1;
        }
        if(!checkPassword()) {
            error = 1;
        }
        if(error == 1) {
            return false;
        }
        return true;
    }                                                                                                                                                                                                                                   function deleteAcc() {
        var check = confirm("Are you sure you want to delete your account?");
        if (check==true) {
            window.location.replace("deleteaccount.php");
        }
}
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
					Hello <?php echo $_COOKIE['user']?>
                    <form name="logout" action="../logout.php" method="post">
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
			<div id="bodyContent">
				<div class="textContainer">
					<h1>Profile Settings</h1>
					<form name = update action="profileSettingValidate.php" method = POST id = "profileSettings" onsubmit = "return validateAll()">
						<span class ="asterix">
                        <?php 
                            if(isset($_GET['message'])){
                                echo $_GET['message']."<br />";
                            }
                        ?></span>
                        <label for="newpass">New Password</label><br/>
						<input id="newpass" name = password type = password class = textbox onblur = "validatePassword()"><span id = "warning0" class="asterix"></span><br/><br/>
						<label for="confirmpass">Confirm Password</label><br/>
						<input id="confirmpass" type = password class = textbox onblur = "checkPassword()"><span id = "warning1" class = "asterix"></span><br/><br/>
						<label for="email">E-mail</label><br/>
						<input id="email" name = email type = email class = textbox onblur = "validateEmail()"><span class = "asterix" id = "warning2"></span><br/><br/>
						<label for="tele">Phone number</label><br/>
						<input id="tele" name = "phone" type = tel class =textbox placeholder = "604 111 1111" onblur = "validatePhone()"><span class = "asterix" id ="warning3"></span><br/><br/>
						<span class = "asterix" id = "warning4"></span><br />
                        <input id="male" type="radio" name="sex" value="1"><label for="male">Male</label><br/><br/>
						<input id="female" type="radio" name="sex" value="0"><label for="female">Female</label><br/><br/>
						<label for="tellus">About you</label> <br />
						<textarea id="tellus" class="textform" name = "about" rows = 15 cols = 80 placeholder="Describe yourself with 4 words..."></textarea><br/><br/>
						<input type = submit value ="Confirm" class ="button">
					</form>
                    <button class = "button" onclick = deleteAcc()>Delete my account</button>
                </div>
			</div>
		</div>
	
	
		<div id="footer">
			<div id="footerContent">
				<div id="footerLogo">
					<img src="../images/Logo.gif" alt = logo height= 75>
				</div>
				<div id="footerText">
					<p>&copy; 2014 BCIT Ride Share</p>
				</div>
			</div> 
		</div>
	</div>
</body>

</html>