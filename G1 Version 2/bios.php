

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
                    <input name = "location" value = "bios.php" type = "hidden">
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
					<h2>Lukasz Pacyk</h2>
					<p>My name is Lukasz Pacyk( pronounced Lucas). My Heritage is Polish but my home town is Coquitlam. I had previously attended Simon Fraser University for a year before finding my passion for programming. I decided to come to the esteemed CST program at BCIT to continue my education. Outside of school I try to stay off the computer. I go to the gym multiple times a week and obsess over eating healthy. I also enjoy going on long full day hikes into the beautiful hills and mountains of British Columbia.</p><br/>
					<p>I am excited to begin this Web Development project for many reasons. Firstly, our group is just as ambitious and determined to do the best they can. Secondly, I am looking forward towards creating a website from the bottom up. Finally, I have always wanted to work with others on a project such as a Website. I believe that this will be a valuable experience that I will draw from when I begin my career.</p><br/>
					<p>I have taken a variety of courses that will help design this website. I learned visual basics, python, and self taught myself both Photoshop and Dream weaver; I designed two basic html websites for businesses. I am a strong leader and have great organizational skills that can help the team work in a cohesive manner.</p>
				</div>
				<hr>
				<div class="textContainer">
					<h2>Byunghak Kim</h2>
					<p>My name is Byunghak Kim and I am from Korea. The reasons why I came to Canada are to have a variety of experiences and to complete the CST program at BCIT. In this course (Intro to Web Development), I will learn how to communicate with teammates and how to organize website using html5. I am excited because all my teammates are extremely passionate; thus, we can achieve our goal to succeed in this course.</p><br/>
					<p>I have experience with websites and I worked at a car navigation corporation. Last week, I talked to Leon Ho about how to match drivers and potential passengers through our website. And I also suggested my opinion and some content. I know navigation systems but had to use other program languages to develop the system. However, we can make lists of both drivers and passengers. Afterwards we just make a script to match each carpool team(maximum 4 except driver) and display hot spots such as land marks. I can handle html, visual basic, map objects, Arcview, ArcGis, Erdas, CAD, and Power Point.</p>
				</div>
				<hr>
				<div class="textContainer">
					<h2>Leon Ho</h2>
						<p>Hello everybody. My name is Leon Ho, and I graduated from Killarney Secondary School in 2013 and am currently attending BCIT. I started self teaching myself basic web development in 7th grade which is what got me hooked on computers. I also took IT 10, Programming 11,12,13 and Networking 11 in high school. During my free time I like to go biking around Vancouver and Richmond. I also like playing video games such as League of Legends, and Battlefield.</p>
				</div>
				<hr>
				<div class="textContainer">
					<h2>Stuart Budd</h2>
					<p>Hello, my name is Stuart Budd and I am the whitest African you will ever meet. My family is originally from South Africa but due to disagreeing with apartheid left to live a better life some where else. From there my family settled down for a few years in Germany then moved to Canada. First out east in Ontario then finally the Budd family made their home in western Canada on the beautiful landscape of Vancouver.</p>
				</div>
				<hr>
				<div class="textContainer">
					<h2>John Janzen</h2>
					<p>Hi my name is John and I graduated at Maple Ridge Secondary School. In high school, I took some computer programs such as Photoshop, 3D animation and basic computer programming. I took Photoshop for grade 11 and 12 and have become experienced in using it. I hope to bring those Photoshop skills into the project and provide an artistic touch. Over time I will learn from the web development program and use that towards the project.</p>
					<p> am an attentive and hard working person.I hope these personality traits can be used to help my group achieve their dream goal in mind for this project.</p>
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