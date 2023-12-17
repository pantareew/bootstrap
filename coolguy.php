<?php	
//SANITISE INPUT FUNCTION
function sanitise_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

// username and password as empty string
$username = '';
$password = '';
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

$insertTable = "
INSERT INTO `supervisor` VALUES ('103964756', '12345678');
INSERT INTO `supervisor` VALUES ('103837447', '12345678');
INSERT INTO `supervisor` VALUES ('104034485', '12345678');
INSERT INTO `supervisor` VALUES ('103146350', '12345678');
INSERT INTO `supervisor` VALUES ('103712191', '12345678');";
$create = mysqli_query($conn, $createTable);
$insert = mysqli_query($conn, $insertTable);


// Check if SUPERVISOR LOGIN exists in table

//GETTING LOGIN INPUT
if (isset($_POST["username"])){
	$username = $_POST["username"];
	$username = sanitise_input($username);
}

if (isset($_POST["password"])){
	$password = $_POST["password"];
	$password = sanitise_input($password);
}

$query = "SELECT * FROM supervisor WHERE username = '$username' AND password = '$password';";
if ($result = mysqli_query($conn, $query)) {
	$rowcount = mysqli_num_rows($result);
	// printf("Result set has %d rows.\n",$rowcount);
if ($rowcount > 0) { // IF EXISTS IN TABLE, ACCESS SUPERVISOR PAGE
	$url = "supervisor.php";
	header("location:$url");
	//  "<p><a href='$url'>Click here to ACCESS supervisor page!</a></p>";
} else {
	$redirect = "login.php";
	echo "<p>You can't do anything until you <a href='$redirect'>login :)</a></p>";
}
	mysqli_free_result($result);
}
?>