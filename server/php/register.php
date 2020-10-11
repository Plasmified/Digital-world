<html>
<head>
	<link rel="stylesheet" href="../css/style.css">
</head>
</html>

<?php include("connect.php");

	//Page requests
	$Name = $_GET["Name"];
	$PW = $_GET["Password"];
	$PasswordHash = md5($PW);

	$row = mysql_fetch_array(mysql_query("SELECT lastid FROM data ORDER BY lastid DESC LIMIT 1"));

	//Others
	$ID = $row['lastid']+1;

	//Queries
	$sql = "SELECT * FROM `users` WHERE `Name` = '$Name'";
	$query = mysql_query($sql);
	
	if (mysql_num_rows($query) >= 1) {
		echo 'User already exists';
	} else {
		$register_user = mysql_query("INSERT INTO `users` (`ID`, `Name`, `PasswordHash`) VALUES ('$ID', '$Name', '$PasswordHash');") or die("Something went wrong.");
		$register_lastid = mysql_query("INSERT INTO `data` (`lastid`) VALUES ('$ID');") or die('Something went wrong.');
		echo "User NO: ";
		echo $ID;
		echo " thanks for registering !";
	}
?>