<!DOCTYPE html>
<html lang="en">

<head>
	
<?php
	include("header.inc");
?>
</head>
<body>
<?php
	include("menu.inc");
?>
<article>
<h1><span class="highlight">Supervisor Login Page</span></h1>

<form method="post" action="coolguy.php" novalidate="novalidate">
	<fieldset>
		<legend>Supervisor Login</legend>
		<p><label for="username">Username:</label>
		<input type="text" name="username" id="username" required="required" />
		</p>

		<p><label for="password">Password:</label>
		<input type="password" name="password" id="password" required="required" />
		</p>

		<div id="bottom"> </div>
		<p><input type="submit" value="Login" />
		</p>
	</fieldset> 
</form>

<p>You want to access the supervisor queries? We are gonna need to verify who you are. Security starts with us. Type your login details above. Thanks for your cooperation in this endeavour as we try to stamp out cyber criminals and restore justice to the attempt table.</p>
</article>
<?php
	require_once ("settings.php");
	$conn = @mysqli_connect($host, 
		$user,
		$pwd,
		$sql_db
	);
	if (!$conn){
		echo "<p>Database connection failure</p>";
	} else 

	// CREATE SUPERVISOR TABLE IF NOT EXISTS
	$createTable = "CREATE TABLE IF NOT EXISTS `supervisor` (
	`username` int(10) NOT NULL,
	`password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
	) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";

	$insertTable1 = "INSERT INTO `supervisor` VALUES ('103964756', '12345678');";
	$insertTable2  = "INSERT INTO `supervisor` VALUES ('103837447', '12345678');";
	$insertTable3 = "INSERT INTO `supervisor` VALUES ('104034485', '12345678');";
	$insertTable4 = "INSERT INTO `supervisor` VALUES ('103146350', '12345678');";
	$insertTable5 = "INSERT INTO `supervisor` VALUES ('103712191', '12345678');";
	$create = mysqli_query($conn, $createTable);
	$insert = mysqli_query($conn, $insertTable1);
	$insert = mysqli_query($conn, $insertTable2);
	$insert = mysqli_query($conn, $insertTable3);
	$insert = mysqli_query($conn, $insertTable4);
	$insert = mysqli_query($conn, $insertTable5);

	/* INSERT INTO customer (first_name, last_name) VALUES
	('Kristen', 'Rowley'),
	('Jed', 'Tomlinson'),
	('Margie', 'Escobar'),
	('Harriette', 'Mejia'),
	('Francis', 'Little'); */

		include("footer.inc");
?>
</body>
</html>