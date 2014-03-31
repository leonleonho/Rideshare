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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBwRtXAgSKxxKwyhnMoMNIS-8FsVpfQ1EU&amp;sensor=false"></script>
<script src="js/java.js"></script>
    <script>
var geocoder;
var map;
function initialize() {
  geocoder = new google.maps.Geocoder();
  var latlng = new google.maps.LatLng(49.251825, -123.003978);
  var mapOptions = {
    zoom: 15,
    center: latlng
  }
  map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
 var marker = new google.maps.Marker({
      position: new google.maps.LatLng(49.251825, -123.003978),
      map: map,
      title: 'BCIT'
  });
}

function codeAddress() {

var address = document.getElementById('startlocation').value;
  geocoder.geocode( { 'address': address}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      map.setCenter(results[0].geometry.location);
        document.getElementById('codedAddress').value = results[0].geometry.location;
        var marker = new google.maps.Marker({
          map: map,
          position: results[0].geometry.location
      });
    } else {
      alert('It seems like we couldn\'t find your position. Please put in your full address');
    }
  });
    document.getElementById('checkAddress').innerHTML = " Is this address correct?";

}
google.maps.event.addDomListener(window, 'load', initialize);    
</script>
<script>
    function validateRole() {
        if(document.getElementById('driver').checked || document.getElementById('passenger').checked) {
            document.getElementById('warning0').innerHTML="";
            return true;
        } else {
            document.getElementById('warning0').innerHTML="You must select an option";
        }
    }
    function validateTime(id) {
        var time = document.getElementById(id).value;
        var warning = id.concat("Warning");
        if(time != "" && time.match(/^([01]\d|2[0-3]):?([0-5]\d)$/) == null) {
            document.getElementById(warning).innerHTML="Please enter a valid time in 24 Hour format Ex: (13:00)";
        } else {
            document.getElementById(warning).innerHTML="";
            return true;
        }
    }
    function validateAll() {
        var error = 0;
        if(!validateRole()) {
            error = 1;
        }
        if(!validateTime('monATime')){
            error = 1;
        }
        if(!validateTime('monDTime')) {
            error = 1;
        }
        if(!validateTime('tueATime')) {
            error = 1;
        }
        if(!validateTime('tueDTime')) {
            error = 1;
        }
        if(!validateTime('wedATime')) {
            error = 1;
        }
        if(!validateTime('wedDTime')) {
            error = 1;
        }
        if(!validateTime('thurATime')) {
            error = 1;
        }
        if(!validateTime('thurDTime')) {
            error = 1;
        }
        if(!validateTime('friATime')) {
            error = 1;
        }
        if(!validateTime('friDTime')) {
            error = 1;
        }
        if(!validateTime('satATime')) {
            error = 1;
        }
        if(!validateTime('satDTime')) {
            error = 1;
        }
        if(!validateTime('sunATime')) {
            error = 1;
        }
        if(!validateTime('sunDTime')) {
            error = 1;
        }
        if(document.getElementById('startlocation').value =="") {
            document.getElementById('checkAddress').innerHTML="You have to fill in your address";
            error = 1;
        }
        window.scrollTo(0, 0);
        if(error == 1) {
            return false;
        } 
        return true;
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
			<div id="bodyContent">
				<div class="textContainer">
					<h1>Post listing</h1>
					<form id = "postForm" name = postForm action="postValidate.php" method = POST  onsubmit ="return validateAll();">
						<h2>Role</h2>
                        <span class = "asterix" id = "warning0"></span><br />
						<input id="driver" type="radio" name="role" value="driver"><label for="driver">Driver</label><br/><br/>
						<input id="passenger" type="radio" name="role" value="passenger"><label for="passenger">Passenger</label>
                        <h2>Days of the week</h2>
                        
                        <h2>Monday</h2>
                        Arrival time:<br /><br />
                        <input class = "textbox" type = "time" name = "monATime" id = "monATime" onblur = "validateTime('monATime')">
                        <span class = "asterix" id = "monATimeWarning" ></span><br /><br />
                        Departure time:
                        <br /><br />
                        <input class = "textbox" type = "time" name = "monDTime" id = "monDTime" onblur = "validateTime('monDTime')">
                        <span class = "asterix" id = "monDTimeWarning" ></span>
                        
                        <h2>Tuesday</h2>
                        Arrival Time:
                        <br /><br />
                        <input class = "textbox" type = "time" name = "tueATime" id = "tueATime" onblur = "validateTime('tueATime')">
                        <span class = "asterix" id = "tueATimeWarning" ></span><br /><br />
                        Departure Time:
                        <br /><br />
                        <input class = "textbox" type = "time" name = "tueDTime" id = "tueDTime" onblur = "validateTime('tueDTime')">
                        <span class = "asterix" id = "tueDTimeWarning" ></span><br />
                        
                        <h2>Wednesday</h2>
                        Arrival Time:
                        <br /><br />
                        <input class = "textbox" type = "time" name = "wedATime" id = "wedATime" onblur = "validateTime('wedATime')">
                        <span class = "asterix" id = "wedATimeWarning" ></span><br /><br />
                        Departure Time:<br /><br />
                        <input class = "textbox" type = "time" name = "wedDTime" id = "wedDTime" onblur = "validateTime('wedDTime')">
                        <span class = "asterix" id = "wedDTimeWarning" ></span><br />
                        
                        <h2>Thursday</h2>
                        Arrival Time:
                        <br /><br />
                        <input class = "textbox" type = "time" name = "thurATime" id = "thurATime" onblur = "validateTime('thurATime')">
                        <span class = "asterix" id = "thurATimeWarning" ></span><br /><br />
                        Departure Time:
                        <br /><br />
                        <input class = "textbox" type = "time" name = "thurDTime" id = "thurDTime" onblur = "validateTime('thurDTime')">
                        <span class = "asterix" id = "thurDTimeWarning" ></span><br />
                        
                        <h2>Friday</h2>
                        Arrival Time:
                        <br /><br />
                        <input class = "textbox" type = "time" name = "friATime" id = "friATime" onblur = "validateTime('friATime')">
                        <span class = "asterix" id = "friATimeWarning" ></span><br /><br />
                        Departure Time:
                        <br /><br />
                        <input class = "textbox" type = "time" name = "friDTime" id = "friDTime" onblur = "validateTime('friDTime')">
                        <span class = "asterix" id = "friDTimeWarning" ></span><br />
                        
                        <h2>Saturday</h2>
                        Arrival Time:<br /><br />
                        <input class = "textbox" type = "time" name = "satATime" id = "satATime" onblur = "validateTime('satATime')">
                        <span class = "asterix" id = "satATimeWarning" ></span><br /><br />
                        Departure Time:<br /><br />
                        <input class = "textbox" type = "time" name = "satDTime" id = "satDTime" onblur = "validateTime('satDTime')">
                        <span class = "asterix" id = "satDTimeWarning" ></span><br />
                        
                        <h2>Sunday</h2>
						Arrival Time:<br /><br />
                        <input class = "textbox" type = "time" name = "sunATime" id = "sunATime" onblur = "validateTime('sunATime')">
                        <span class = "asterix" id = "sunATimeWarning" ></span><br /><br />
                        Departure Time:<br /><br />
                        <input class = "textbox" type = "time" name = "sunDTime" id = "sunDTime" onblur = "validateTime('sunDTime')">
                        <span class = "asterix" id = "sunDTimeWarning" ></span><br />
                        
						<h2>Start Location</h2>
						<input class="textbox" id="startlocation" type =text name = startLocation onblur = "codeAddress()"><span id = "checkAddress" class = "asterix"></span>
						<br /><br />
                        <div id="map-canvas"></div>
                        <h2>Preferences</h2>
						<input id = "codedAddress" name = "codedAddress" type = "hidden">
                        <textarea class="textform" rows = 15 cols = 80 name = "preferences">"Your Preferences"</textarea><br/>
						<input type = "submit" value ="Post" class ="button">
					</form>
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