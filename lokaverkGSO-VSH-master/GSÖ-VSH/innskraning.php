<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link href="styles/style.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
</head>
<body>

<div class="">
<?php require './includes/menu.php'; ?>
</div>
<h3>Innskráningarform:</h3>
		<form action="database.php" method="post">
		    <p>
		        <label>Nafn:</label>
		        <input type="text" name="Nafn">
		    </p>
		    <p>
		        <label>Hópur:</label>
		        <input type="text" name="hopur">
		    </p>
		    
		    <input type="submit" value="Skrá">
		</form>
</body>
</html>