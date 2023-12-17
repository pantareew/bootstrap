<!DOCTYPE html>
<html lang = "en">
<!-- Includes a head with title ad meta tags as specified in template -->
<head>
    <meta charset = "utf-8" />
    <meta name = "description" content = "Creating Supervisor Queries" />
    <meta name = "keywords" content = "PHP, MySQL" />
    <meta name = "author" content = "Vani Chopra" />
    <title> Supervisor View </title>
</head>
<body>          
    <h1> <span class = "highlight"> Supervisor Page </span> </h1>
    <?php
        require_once ("settings.php");

        $conn = @mysqli_connect ($host,
        $user,
        $pwd,
        $sql_db );

        //To check if connection is successful
        if (!$conn) {
            // Displays an error message
            echo "<p> Database connection failure </p>";
        } else {
            // Upon successful connection
            $sql_table = "Attempts";

            // List all students
            $query = "SELECT Attempts.attempt_id, Attempts.student_id, Student.first_name, Student.last_name, Attempts.date_time, Attempts.number_attempt, Attempts.score
            FROM Attempts, Student
            ORDER BY date_time";

            // Lists all students (id, first and last name) who got 100% on their first attempt
            $query = "SELECT Attempts.attempt_id, Attempts.student_id, Student.first_name, Student.last_name, Attempts.date_time, Attempts.number_attempt, Attempts.score
            FROM Attempts, Student 
            WHERE Attempts.score = 100% AND Attempts.number_attempt = 1
            ORDER BY date_time";
            
            // List all students (id, first and last name) who got less than 50% on their second attempt
            $query = "SELECT Attempts.attempt_id, Attempts.student_id, Student.first_name, Student.last_name, Attempts.date_time, Attempts.number_attempt, Attempts.score
            FROM Attempts, Student 
            WHERE Attempts.score < 50% AND Attempts.number_attempt = 2
            ORDER BY date_time";

            // Delete all attempts for a particular student (given a student id)
            $query = "SELECT Attempts.attempt_id, Student.first_name, Student.last_name, Attempts.date_time, Attempts.student_id, Attempts.number_attempt, Attempts.score
            FROM Attempts, Student
            ORDER BY date_time";
            "DELETE FROM Attempts
            WHERE student_id = ' '"; 
            
            // Change the score for a quiz attempt (given a student id and attempt number)
            $query = "SELECT Attempts.attempt_id, Student.first_name, Student.last_name, Attempts.date_time, Attempts.student_id, Attempts.number_attempt, Attempts.score
            FROM Attempts, Student
            ORDER BY date_time";
            "UPDATE Attempts
            SET Attempts.score = ' '
            WHERE Student.student_id = ' ' AND Attempts.attempt_id = ' '";


            // Execute the query and store result into the result pointer
            $result = mysqli_query ($conn, $query);
            // Checks if the execution was successful 
            if (!$result) {
                echo "<p> Something is wrong with ", $query, "</p>";
            } else {
                echo "<table border = \"1\"> \n";
                echo "<tr>\n "
                    ."<th scope = \"col\"> Attempt ID </th>\n"
                    ."<th scope = \"col\"> Student ID </th>\n"
                    ."<th scope = \"col\"> First Name </th>\n"
                    ."<th scope = \"col\"> Last Name </th>\n"
                    ."<th scope = \"col\"> Date and Time </th>\n"
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
                    echo "<td>", $row["score"], "</td>\n ";
                    echo "</tr> \n";
                }
            echo "</table>\n ";
            // Frees up the memory, after using the result pointer
            mysqli_free_result($result);
            }  // if successful query operation

            //close the database connection
            mysqli_close($conn);
        } // if successful database connection
    ?>
</body>
</html>