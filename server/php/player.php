<html>
	<link rel="stylesheet" href="../css/style.css">	
</html>

<?php include("connect.php");
	
	//Page requests
	$name = $_GET["Name"];

	//Queries
	$sql = "SELECT * FROM `users` WHERE `Name` = '$name'";
	$query = mysql_query($sql) or die('404 User not found T_T');

	$row = mysql_fetch_array($query);
?>
<html>
	<div id="name-header">
		<h2><?php echo $name ?>'s profile</h2>
	<img-frame>
		<img src="../avatars/<?php echo $name; ?>.png">
	</img-frame>
	</div>
	<stats-frame>
		<h2>User ID: <?php echo $row['ID']; ?> </h2>
		<h2>User Rank: #<?php echo $row['Rank']?> </h2>
		<h2>User Score: <?php echo $row['Score']?></h2>
		<h2>Last Active: </h2>
	</stats-frame>
</html>
