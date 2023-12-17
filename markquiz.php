<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="description" content="Server Validation" />
	<meta name="keywords" content="HTML, PHP" />
	<meta name="authors" content="Sarah, Erik" />
	<title>Assign Part 2</title>
</head>
<body>
	<h1>Quiz Results</h1>
<?php
// DATABASE CONNECTION
require_once ("settings.php");
$conn = @mysqli_connect($host, 
	$user,
	$pwd,
	$sql_db
);
if (!$conn){
	echo "<p>Database connection failure</p>";
}
//for testing purposes, remove later
// else {
// 	echo "<p>Database connected successfully</p>";
// }

//CREATE TABLE QUERIES *successfully tested in console
$queryCreateStudent = "CREATE TABLE IF NOT EXISTS student ( 
student_id INT(10) PRIMARY KEY, 
first_name VARCHAR(30) NOT NULL, 
last_name VARCHAR(30) NOT NULL 
);";
$queryCreateAttempt = "CREATE TABLE IF NOT EXISTS attempt ( 
attempt_id INT AUTO_INCREMENT PRIMARY KEY, 
student_id INT(10) NOT NULL, 
date_time DATETIME NOT NULL, 
number_attempt INT(1) NOT NULL, 
score INT(4) NOT NULL, 
FOREIGN KEY (student_id) REFERENCES student (student_id) 
);";
//SENDING QUERIES TO DATABASE
mysqli_query($conn, $queryCreateStudent);
mysqli_query($conn, $queryCreateAttempt);

//SANITISE INPUT FUNCTION
function sanitise_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

//GETTING QUIZ INPUT
// Student Form - Student ID
if (isset($_POST["studentid"])){
	$studentid = $_POST["studentid"];
	$studentid = sanitise_input($studentid);
}

// First Name
if (isset($_POST["fname"])){
	$fname = $_POST["fname"];
	$fname = sanitise_input($fname);
}

// Last Name
if (isset($_POST["lname"])){
	$lname = $_POST["lname"];
	$lname = sanitise_input($lname);
}

// Radio Input 
if (isset ($_POST["radio"])) {
	$radio = $_POST["radio"]; 
}
else {
	$radio = "Unknown radio";    
} 

// Dropdown 
if (isset ($_POST["dropdown"])) {
	$dropdown = $_POST["dropdown"];
}

// Checkbox Input
$checkbox = "";

if (isset ($_POST["primary"])) 
	$checkbox = $checkbox. "Primary ";

if (isset ($_POST["light"]))
	$checkbox = $checkbox. "Light ";

if (isset ($_POST["fail"]))
	$checkbox = $checkbox. "Fail ";

if (isset ($_POST["success"]))
	$checkbox = $checkbox. "Success ";

// Text input
if (isset ($_POST["textinput"])) {
	$textinput = $_POST["textinput"];
	$textinput = sanitise_input($textinput);   
}

// Range
if (isset ($_POST["range"])){
	$range = $_POST["range"];
}


// ERROR MESSAGE AND VALIDATION
//Student ID
$errMsg = "";
if ($studentid == "") {
	$errMsg .= "<p>You must enter your student ID.</p>";
}
else if (strlen($studentid) != 7 && strlen($studentid) != 10) {
	$errMsg .= "<p>Only 7 or 10 characters in your student ID</p>";
}

//First Name
if ($fname == ""){
	$errMsg .= "<p>You must enter your first name.</p>";
}
else if (!preg_match("/^[a-zA-Z -]*$/", $fname)){
	$errMsg .= "<p>Only alpha characters, spaces and hyphens allowed in your first name.</p>";
}
else if (strlen($fname) > 30) {
	$errMsg .="<p>Max 30 characters in your first name.</p>";
}

//Last Name
if ($lname == ""){
	$errMsg .= "<p>You must enter your last name.</p>";
}
else if (!preg_match("/^[a-zA-Z -]*$/", $lname)){
	$errMsg .= "<p>Only alpha characters, spaces and hyphens allowed in your last name.</p>";
}
else if (strlen($lname) > 30) {
	$errMsg .="<p>Max 30 characters in your last name.</p>";
}

//Q1
if ($radio == "Unknown radio"){
	$errMsg .= "<p>You must select an answer for Q1.</p>";
}
	
//Q2
if ($dropdown == ""){
	$errMsg .= "<p>You must select an answer for Q2.</p>";
}

//Q3
if ($checkbox == ""){
	$errMsg .= "<p>You must select at least one answer for Q3.</p>";
}

//Q4
if ($textinput == ""){
	$errMsg .= "<p>You must type an answer for Q4.</p>";
}

//Q5
if ($range == 1){
	$errMsg .= "<p>You must select a value greater than 1 for Q5.</p>";
}

if ($radio == "Unknown radio" || $dropdown == "" || $checkbox == "" || $textinput == "" || $range == 1) {
	$errMsg .= "<p>You must answer all questions to receive a mark.</p>";
}


$score = 0;
// SCORE COUNTING
if ($errMsg == "") {
	//Q1 score
	if ($radio == "true")
	{
		$score++;
	}
	//Q2 score
	if ($dropdown == "twitter")
	{
		$score++;
	}
	//Q3 score
	if ($checkbox == "Primary Light Success ")
	{
		$score++;
	}
	//Q4 score
	if ($textinput == "Twitter Blueprint")
	{
		$score++;
	}
	//Q5 score 
	if ($range == 12)
	{
		$score++;
	}
}
//Other reasons for failure - if score == 0, etc..? as above
if ($score == 0 && $errMsg == "")
{
	$errMsg .= "<p>You scored $score out of 5, I'm not submitting this into my database, try again and this time take it seriously.</p>";
}
//INSERT QUERIES
$datetime = date ('Y-m-d H:i:s');
//SELECT QUERIES	
$attemptCountQuery = "select count(*) from attempt where student_id = $studentid group by student_id";
$studentidQuery = "select student_id from student where student_id = $studentid";

//STUDENT
// Check for student ID in attempts table
$query = "SELECT attempt_id FROM attempt WHERE student_id = $studentid";
$attempt = 0;
// Run query
if ($result = mysqli_query($conn, $query)) {
// return number of rows from SELECT $query 
		$rowcount = mysqli_num_rows($result);
		// printf("Result set has %d rows.\n",$rowcount);
// if rowcount EQUALS 0, 1st attempt and student is not in attempt & student table
	if (($rowcount == 0) && ($errMsg == "")) {
		$attempt = 1;
// define INSERT queries
		$queryStudent = "INSERT INTO student (student_id, first_name, last_name) VALUES ('$studentid', '$fname', '$lname')";
		$queryAttempt = "INSERT INTO attempt (attempt_id, date_time, student_id, number_attempt, score) VALUES (NULL, '$datetime', '$studentid', '$attempt', '$score')";
// INSERT queries into database	
		$insertQueryStudent = mysqli_query($conn, $queryStudent);
		$insertQueryAttempt = mysqli_query($conn, $queryAttempt);
// ECHO attempt number and $rowcount - can be deleted later
		// echo "<p>Attempt 1 entered to DB</p>";
		// printf("Result set has %d rows.\n",$rowcount);
		
// if rowcount EQUALS 1, 2nd attempt must be added to attempt table
	} else if (($rowcount == 1) && ($errMsg == "")) {
		$attempt = 2;
// define INSERT query 
		$queryAttempt = "INSERT INTO attempt (attempt_id, date_time, student_id, number_attempt, score) VALUES (NULL, '$datetime', '$studentid', '$attempt', '$score')";
// INSERT query into database	
		$insertQueryAttempt = mysqli_query($conn, $queryAttempt);
// ECHO attempt number and $rowcount - can be deleted later

// ATTEMPT 3 - SHOULD FAIL IF MORE THAN 2 ATTEMPTS OR NO INPUT
	} else {
		$attempt = 3;
	}
		mysqli_free_result($result);
}
// FINAL WEBPAGE DISPLAYED BAD
if ($attempt == 3 && $errMsg == "") {
	$errMsg .= "<p>You already made 2 attempts. You cannot do anything.</p>";
}

//If error print message	
if ($errMsg != "") {
	echo"<h2>Unsuccessful Attempt</h2>";
	echo"$errMsg";
}


// FINAL WEBPAGE DISPLAYED GOOD
//Display answers -- And input attempt data
//IMPORTANT *** this else needs to check against all the error page ifs
else {
	echo"<h2>Successfully Submitted Attempt</h2>";
	//insert data into attempts table
	
//ATTEMPT	
	//Change these to be read from student table rather than the php variable? maybe not bother
	echo "<p>Your student ID is $studentid</p>";
	echo "<p>Your first name is $fname</p>";
	echo "<p>Your last name is $lname</p>";
	//Echo $attemptCount from above select query (same query used to determine if attempt unsuccessful)
	echo "<p>You have made $attempt attempts</p>";
	//if $attemptCount == 1  echo link to quiz.php
	if ($attempt == 1){
		$link_address = "quiz.php";
		echo "<p>You want to try again? <a href='$link_address'>Click here!</a></p>";
	}
//Score
	echo "<p>Your score for this attempt is $score/5</p>";
}

?>
</body>
</html>