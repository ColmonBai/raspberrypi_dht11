<?php
	include 'database.php';
	header ("Content-Type:text/html; charset = utf-8");
	$temp = $_POST['temp'];
	echo $temp;
	$sql = "INSERT INTO tempData (value) VALUES ('$temp');";
	mysqli_query($DATABASE_CONNECT, $sql);
?>