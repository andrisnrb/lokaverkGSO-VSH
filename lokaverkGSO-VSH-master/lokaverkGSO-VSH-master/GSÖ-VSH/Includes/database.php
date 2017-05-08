<?php
$db = mysqli_connect('10.200.10.24','2511992219','mypassword','2511992219_lokaverkvskoggso";')
or die('Error connecting to MySQL server.');
?>

<html>
 <head>
 </head>
 <body>
 <h1>PHP connect to MySQL</h1>
 
<?php
$query = "SELECT * FROM innskraning";
mysqli_query($db, $query) or die('Error querying database.');
$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);

while ($row = mysqli_fetch_array($result)) {
 echo $row['Nafn'] . ' ' . $row['Hopur'] . ' ' . $row['Leikur'] . '<br />';
}
mysqli_close($db);
?>

</body>
</html>