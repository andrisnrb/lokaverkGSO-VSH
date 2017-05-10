<!DOCTYPE HTML>
<html>
	<head>	
		<link rel="stylesheet" href="snidmatII.css">
		<title>Bætt við</title> 
	</head>
  	<body>
  		<h3>Bætt við</h3>

			<?php

			$mysqli = new mysqli("tsuts.tskoli.is", "dsg", "danni73", "prufa");
			 
			// C
			if($mysqli === false){
			    die("Villa, getum ekki tengst. " . $mysqli->connect_error);
			}
			 
			// Escape user inputs for security
			$kt = $mysqli->real_escape_string($_REQUEST['Kt']);
			$nafn = $mysqli->real_escape_string($_REQUEST['Nafn']);
			$simi = $mysqli->real_escape_string($_REQUEST['Simi']);
			 
	
			$sql = "INSERT INTO simaskra (kt, nafn, simi) VALUES ('$kt', '$nafn', '$simi')";
			if($mysqli->query($sql) === true){
			    print($nafn. " hefur verið bætt við...");
			} else{
			    print("Villa, ekki hægt að keyra... " . $mysqli->error);
			}
			
			//Loka...
			$mysqli->close();

			sleep(1);//Tefjum um eina sek...
			header("Location: index.php"); // Förum á aðalsíðu...
			exit();
			?>

  	</body> 
</html>







