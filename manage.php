<!DOCTYPE html>
<html lang = "en">
<!-- Includes a head with title ad meta tags as specified in template -->
<head>
    <meta charset = "utf-8" />
    <meta name = "description" content = "Creating Supervisor Queries" />
    <meta name = "keywords" content = "PHP, MySQL" />
    <meta name = "author" content = "Sarah Rhee, Erik Fanning" />
    <title> Supervisor View </title>
</head>
<body>          
    <h1> <span class = "highlight"> Supervisor Query Results </span> </h1>
    <?php
        require_once ("settings.php");
        $conn = @mysqli_connect ($host,
        $user,
        $pwd,
        $sql_db );
		
	//FORM
		//Get variable data from form
		if (isset($_POST["studentid"])){
		$studentid = $_POST["studentid"];
		}
		if (isset($_POST["score"])){
		$score = $_POST["score"];
		}
		if (isset($_POST["attempt"])){
		$attempt = $_POST["attempt"];
		}
		if (isset($_POST["name"])){
		$name = $_POST["name"];
		}
		
	//Get query selection from form and display for test
	if (isset ($_POST["query"])) {
		$radio = $_POST["query"]; 
		//testing echo
		echo"<p>$radio</p>";
	}
	//if no selection made
	else {
		$radio = "Unknown radio";    
	} 
	//CONNECTION --------------------->
        //To check if connection is successful
        if (!$conn) {
            // Displays an error message
            echo "<p> Database connection failure </p>";
        } 
		//If connection successful
		else 
	{
            // Upon successful connection
	
	//QUERIES ------------------------>
	// NEW - TESTED IN CONSOLE
		//Q1. List all attempts:
			$query1 = "SELECT * FROM attempt;";
		//Q2. List all attempts for a particular student (given a student id OR name).
			$query2 = "SELECT attempt.attempt_id, attempt.student_id, student.first_name, student.last_name, attempt.date_time, attempt.number_attempt, attempt.score FROM attempt, student WHERE student.student_id='$studentid' AND attempt.student_id='$studentid' OR student.first_name='$name';";
        //Q3. List all students (id, first and last name) who got 100% on their first attempt. 
			$query3 = "SELECT attempt.attempt_id, attempt.student_id, student.first_name, student.last_name, attempt.date_time, attempt.number_attempt, attempt.score FROM attempt, student WHERE attempt.score = 5 AND attempt.number_attempt = 1 AND attempt.student_id = student.student_id ORDER BY date_time;";
        //Q4.List all students (id, first and last name) got less than 50% on their second attempt.
			$query4 = "SELECT attempt.attempt_id, attempt.student_id, student.first_name, student.last_name, attempt.date_time, attempt.number_attempt, attempt.score  FROM attempt, student WHERE attempt.score < 3 AND attempt.number_attempt = 2 AND attempt.student_id = student.student_id ORDER BY date_time;";
		//Q5.Delete all attempts for a particular student (given a student id). 
			$query5 = "DELETE FROM attempt WHERE student_id = '$studentid';"; 
        //Q6.Change the score for a quiz attempt (given a student id and attempt number). 
			$query6 = "UPDATE attempt SET score = $score WHERE student_id = '$studentid' AND number_attempt = '$attempt';";

			if ($radio == "query1")
			{
			$query = $query1;
			$result = mysqli_query ($conn, $query);
			echo "<table border = \"1\"> \n";
			echo "<tr>\n "
				."<th scope = \"col\"> Attempt ID </th>\n"
				."<th scope = \"col\"> Student ID </th>\n"
				."<th scope = \"col\"> Date Time </th>\n"
				."<th scope = \"col\"> Number Attempt </th>\n"
				."<th scope = \"col\"> Score </th>\n"
				."</tr>\n";
		// Retrieves current record pointed by the result pointer
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<tr> \n";
				echo "<td>", $row["attempt_id"], "</td>\n ";
				echo "<td>", $row["student_id"], "</td>\n ";
				echo "<td>", $row["date_time"], "</td>\n ";
				echo "<td>", $row["number_attempt"], "</td>\n ";
				echo "<td>", $row["score"], "</td>\n ";
				echo "</tr> \n";
			}
			echo "<table>\n ";
			mysqli_free_result($result);
			}
			

			if ($radio == "query2")
			{
			$query = $query2;
			$result = mysqli_query ($conn, $query);
			echo "<table border = \"1\"> \n";
			echo "<tr>\n "
				."<th scope = \"col\"> Attempt ID </th>\n"
				."<th scope = \"col\"> Student ID </th>\n"
				."<th scope = \"col\"> First Name </th>\n"
				."<th scope = \"col\"> Last Name </th>\n"
				."<th scope = \"col\"> Date Time </th>\n"
				."<th scope = \"col\"> Number Attempt </th>\n"
				."<th scope = \"col\"> Score </th>\n"
				."</tr>\n";
		// Retrieves current record pointed by the result pointer
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<tr> \n";
				echo "<td>", $row["attempt_id"], "</td>\n ";
				echo "<td>", $row["student_id"], "</td>\n ";
				echo "<td>", $row["first_name"], "</td>\n ";
				echo "<td>", $row["last_name"], "</td>\n ";
				echo "<td>", $row["date_time"], "</td>\n ";
				echo "<td>", $row["number_attempt"], "</td>\n ";
				echo "<td>", $row["score"], "</td>\n ";
				echo "</tr> \n";
			}
			echo "<table>\n ";
			mysqli_free_result($result);
			}
			if ($radio == "query3")
			{
				$query = $query3;
				$result = mysqli_query ($conn, $query);
				echo "<table border = \"1\"> \n";
				echo "<tr>\n "
					."<th scope = \"col\"> Attempt ID </th>\n"
					."<th scope = \"col\"> Student ID </th>\n"
					."<th scope = \"col\"> First Name </th>\n"
					."<th scope = \"col\"> Last Name </th>\n"
					."<th scope = \"col\"> Date Time </th>\n"
					."<th scope = \"col\"> Number Attempt </th>\n"
					."<th scope = \"col\"> Score </th>\n"
					."</tr>\n";
			// Retrieves current record pointed by the result pointer
				while ($row = mysqli_fetch_assoc($result)) {
					echo "<tr> \n";
					echo "<td>", $row["attempt_id"], "</td>\n ";
					echo "<td>", $row["student_id"], "</td>\n ";
					echo "<td>", $row["first_name"], "</td>\n ";
					echo "<td>", $row["last_name"], "</td>\n ";
					echo "<td>", $row["date_time"], "</td>\n ";
					echo "<td>", $row["number_attempt"], "</td>\n ";
					echo "<td>", $row["score"], "</td>\n ";
					echo "</tr> \n";
				}
				echo "<table>\n ";
				mysqli_free_result($result);
			}
			if ($radio == "query4")
			{
				$query = $query4;
				$result = mysqli_query ($conn, $query);
				echo "<table border = \"1\"> \n";
				echo "<tr>\n "
					."<th scope = \"col\"> Attempt ID </th>\n"
					."<th scope = \"col\"> Student ID </th>\n"
					."<th scope = \"col\"> First Name </th>\n"
					."<th scope = \"col\"> Last Name </th>\n"
					."<th scope = \"col\"> Date Time </th>\n"
					."<th scope = \"col\"> Number Attempt </th>\n"
					."<th scope = \"col\"> Score </th>\n"
					."</tr>\n";
			// Retrieves current record pointed by the result pointer
				while ($row = mysqli_fetch_assoc($result)) {
					echo "<tr> \n";
					echo "<td>", $row["attempt_id"], "</td>\n ";
					echo "<td>", $row["student_id"], "</td>\n ";
					echo "<td>", $row["first_name"], "</td>\n ";
					echo "<td>", $row["last_name"], "</td>\n ";
					echo "<td>", $row["date_time"], "</td>\n ";
					echo "<td>", $row["number_attempt"], "</td>\n ";
					echo "<td>", $row["score"], "</td>\n ";
					echo "</tr> \n";
				}
				echo "<table>\n ";
				mysqli_free_result($result);
			}
			if ($radio == "query5")
			{
				$query = $query5;
				$result = mysqli_query ($conn, $query);
				echo "<p>You have deleted attempts for Student ID: $studentid</p>";
			}
			if ($radio == "query6")
			{
				$query = $query6;
				$result = mysqli_query ($conn, $query);
				echo "<p>You have updated Student ID: $studentid, Attempt: $attempt, Score: $score</p>";
// Trying to select the row that is being changed... 
				$showTable = "SELECT * FROM attempt WHERE student_id = '$studentid' AND number_attempt = '$attempt';";
				$result2 = mysqli_query ($conn, $showTable);
				echo "<table border = \"1\"> \n";
				echo "<tr>\n "
					."<th scope = \"col\"> Attempt ID </th>\n"
					."<th scope = \"col\"> Student ID </th>\n"
					."<th scope = \"col\"> Date Time </th>\n"
					."<th scope = \"col\"> Number Attempt </th>\n"
					."<th scope = \"col\"> Score </th>\n"
					."</tr>\n";

				while ($row = mysqli_fetch_assoc($result2)) {
					echo "<tr> \n";
					echo "<td>", $row["attempt_id"], "</td>\n ";
					echo "<td>", $row["student_id"], "</td>\n ";
					echo "<td>", $row["date_time"], "</td>\n ";
					echo "<td>", $row["number_attempt"], "</td>\n ";
					echo "<td>", $row["score"], "</td>\n ";
					echo "</tr> \n";
				}
				echo "<table>\n ";
			}
			if ($radio == "Unknown radio")
			{
				$query = $query1;
			}
            //close the database connection
            mysqli_close($conn);
    //} // if successful database connection
			}
    ?>
</body>
</html>