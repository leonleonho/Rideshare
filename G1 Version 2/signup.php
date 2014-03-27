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
			<div id="bodyContent">
				<div class="textContainer">
					<h2>Sign Up</h2><br/>
					<span class="asterix" id = "warning0">
                    <?php
                        
                    ?>
                    </span>
                    <p>It is easy to begin carpooling! Simply enter in you information to begin being matched with fellow people of BCIT</p><br/><br/><br/>
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
	