<?php

	$server = "localhost";
	$user = "root";
	$pw = "";
	$db = "socialapp";
	
	$connection = mysql_connect($server, $user, $pw) or die("Connection failed");
	mysql_select_db($db) or die("database not found");
	
?>