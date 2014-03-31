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
    <script src="/js/java.js"></script>
	<script language="JavaScript" type="text/JavaScript">
	
	function validatePassword() {
		var Password = document.getElementById("su-password").value;
		
		if (Password == "") {
			document.getElementById('warning2').innerHTML="*Please fill this in.";
        } else if(Password.length <= 6){
            document.getElementById('warning2').innerHTML="*Your password must be longer than 6 characters.";
        } else if ((Password.match(/^.*(?=.*[a-z])(?=.*[A-Z]).*$/)) == null) {
			document.getElementById('warning2').innerHTML="*It must contain an uppercase letter.";
		} else if ((Password.match(/^.*(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/)) == null) {
			document.getElementById('warning2').innerHTML="*It must contain a number";
        } else {
            document.getElementById('warning2').innerHTML="*";
            return true;
        }
	}		
	   function confirmPass() {
        var Password1 = document.getElementById('su-password').value;
        var Password2 = document.getElementById('confirmPass').value;
        if(Password1 != Password2) {
            document.getElementById('warning3').innerHTML="*Your two passwords don't match";
        } else {
            return true;
        }
   }
        function validateSignUp() { 
         
		var Email = document.getElementById("email").value;
		var Name = document.getElementById("name").value;
		var Username = document.getElementById("su-username").value;
		var Password = document.getElementById("su-password").value;
		
		if (Email == "" | Name == "" | Username == "" | Password == "") {
            alert("Please enter required fields");
            return false;
		} else { if ((Email.match(/^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/)) == null) {
				 document.getElementById('warning4').innerHTML="*Your email format is incorrect";
			     return false;
            } else  if ((Name.match(/^[a-zA-Z]{0,}\s{1}[a-zA-Z]{0,}$/)) == null) {
				document.getElementById('warning0').innerHTML="*Please fill in your name";
			     return false;
            } else if ((Username.match(/^[a][0]{2}\d{6}$/i)) == null) {
				document.getElementById('warning1').innerHTML="*Please fill in your BCIT id.";
			     return false;
            } else if(!confirmPass()){
                return false;
            } else if(!validatePassword()){
                return false;                    
            }
                                                                                                                                                      
                                                                                                                                                      
		}
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
					<input name = "location" value = "signup.php" type = "hidden">
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
				<li><a href="bios.php">About Us</a></li>
				<li><a href="services.php">Services</a></li>
				<li><a id="navRightBorder" href="signup.php">Sign up</a></li>
				</ul>
			</div>
		</div>
		
		<div id="bodyWrapper">
			<div id="bodyContent">
				<div class="textContainer">
					<h2>Sign Up</h2><br/>

                    <p>It is easy to begin carpooling! Simply enter in you information to begin being matched with fellow people of BCIT</p><br/>
                    <span class="asterix" id = "warning0">
                    <?php
                        if(isset($_GET['error'])){                        
                        echo $_GET['error'];
                        }
                    ?>
                    </span>
					<form action="signupValidate.php" method="post" id ="signupForm" onsubmit = "return validateSignUp();">
                    <label for="name">Name<span class="asterix" id = "warning0">*</span></label><br/> 
					
                    <input id="name" class =signup type="text" name="name"  placeholder="First and Last(John Doe)"><br/>
					
                    <label for="su-username">Username<span class="asterix" id = "warning1">*</span></label><br/>
					
                    <input id="su-username" class =signup type="text" name="user" placeholder="BCIT ID"><br/>
					
                    <label for="su-password">Password<span class="asterix" id = "warning2">*</span></label><br/>
					
                    <input id="su-password" class =signup type="password" name="password" onblur="validatePassword()"><br/>
					<label for="confirmPass">Confirm Password <span class = "asterix" id = "warning3"></span></label><br />
                    <input class =signup id = "confirmPass" name = "confirmPass" type = "password" onblur = "confirmPass()"><br />
                    <label for="email">E-mail<span class="asterix" id = "warning4">*</span></label><br/>
					
                    <input id="email" class =signup type="text" name="email" placeholder="sample@example.ca"><br/>
                    <p>(<span class="asterix">*</span>)  Required Field</p></br>
					<input class="button" type="submit" value="Sign up"><br/>
                    </form>
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