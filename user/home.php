<?php
    include 'checkUser.php';
    include 'connection.php';
    session_start();                    
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
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBwRtXAgSKxxKwyhnMoMNIS-8FsVpfQ1EU&amp;sensor=false"></script>    
    <script>     
var map;
function initialize() {
  var mapOptions = {
    zoom: 13,
    center: new google.maps.LatLng(49.251825, -123.003978)
  };
  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);
    var myLatlng = new google.maps.LatLng(49.251825, -123.003978);
    var mapOptions = {
      zoom: 4,
      center: myLatlng
    }

    // To add the marker to the map, use the 'map' property
    var a165633804 = new google.maps.Marker({
        position: myLatlng,
        map: map,
        title:"Hello World!"
    });
<?php
    if(isset($_SESSION['markerResult'])) {
    echo $_SESSION['markerResult'];
    echo $_SESSION['listenerResult'];
    }
?>  
}


google.maps.event.addDomListener(window, 'load', initialize);

    </script>
<script>
    function validateTime(id) {
        var time = document.getElementById(id).value;
        var warning = id.concat("Warning");
        if(time.match(/^([01]\d|2[0-3]):?([0-5]\d)$/) == null) {
            document.getElementById(warning).innerHTML="Please enter a valid time in 24 Hour format Ex: (13:00)";
            return false;
        } else {
            document.getElementById(warning).innerHTML="";
            return true;
        }
    }
    function validateDay(){
        if (!$('input[name=day]:checked').length > 0) {
            document.getElementById("dayWarning").innerHTML="You must select a date";
            return false;
        }
        return true;
    }
    function validateLocation() {
        if (!$('input[name=location]:checked').length > 0) {
            document.getElementById("locationWarning").innerHTML="You must select a location";
            return false;
        }
        return true;
    }
    function validateRole() {
        if (!$('input[name=role]:checked').length > 0) {
            document.getElementById("roleWarning").innerHTML="You must select a role";
            return false;
        }
        return true;
    }
    function validateAll(){
        var error = 0;
        if(!validateTime('time')){
            error = 1;
        }
        if(!validateDay()) {
            error = 1;
        }
        if(!validateLocation()) {
            error = 1;
        }
        if(!validateRole()) {
            error = 1;
        }
        if(error == 1) {
            return false;
        }
        return true;
        
    }
</script>
            <div id="bodyContent">
			     <div class = "imageContainer">
                <h1>Search for Postings</h1>    
                    <form name = "search" action = "search.php" method = "post" onsubmit = "return validateAll()">
                        What are you looking for?<span class = "asterix" id = "roleWarning"></span><br /><br />
                        <input type = "radio" name = "role" value = "driver">Drivers <br />
                        <input type = "radio" name = "role" value = "passenger">Passengers <br /><br />
                        Where are you going?<span class = "asterix" id = "locationWarning"></span><br /><br />
                        <input type = "radio" name = "location" value = "bcit">BCIT<br />
                        <input type = "radio" name = "location" value = "home">Home<br /><br />
                        Days of the week: <span class = "asterix" id = "dayWarning"></span><br /><br />
                        <input type = "radio" name = "day" value = "mon">Monday <br />
                        <input type = "radio" name = "day" value = "tue">Tuesday <br />
                        <input type = "radio" name = "day" value = "wed">Wednesday<br />
                        <input type = "radio" name = "day" value = "thur">Thursday<br />
                        <input type = "radio" name = "day" value = "fri">Friday<br />
                        <input type = "radio" name = "day" value = "sat">Saturday<br />
                        <input type = "radio" name = "day" value = "sun">Sunday<br /><br />
                        Time:
                        <input id = "time" class = "textbox" type = "time" name = "time" onblur = "validateTime('time')"><span class = "asterix" id = "timeWarning"></span><br /><br />
                        <input type = "submit" value = "search">
                    </form> 
                </div>
				<div class="imageContainer">
					<h1>Map View</h1>
					<div id="map-canvas"></div>
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
    <a href="bottomOFThePage"></a>
</body>

</html>