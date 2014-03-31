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
$.ajax({
    type: 'get',
    url: 'test.php',
    data: datastring,
    success: function(data) {
        alert(data);
    }
});    
</script>
</head>

<body>
    
</body>

</html>