<?php
	include('bd.php');
	$message = $_POST['message'];
	$result = mysql_query("INSERT INTO todo (mes) VALUES ('$message')", $db);
	echo $message;
?>