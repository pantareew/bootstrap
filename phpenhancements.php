<!DOCTYPE html> 
<html lang="en">
<head> 
	<?php
      include("header.inc");
    ?>
</head>
<body>
    <header>
        <h1><span class="highlight">PHP Enhancements</span></h1>
    <?php
        include("menu.inc");
    ?>
    </header>
    <!-- Content -->
    <article class="main_content">
    <section>
        <h2><span class="highlight">Normalise the structure of tables</span></h2>
        <!--how it goes beyond the basic requirements of the assignment -->
			  <p>&nbsp;&nbsp;&nbsp;For the requirement of this assignment, it required us to create only one table, which is an attempt table. However, the data for 
        students will be similar across the record. So, our group decided to reduce this redundancy by creating a separate table named 'student' to store student id, 
        first name, and last name. Another benefit of organizing related-data items stored in the same location is we can execute updates or delete the data quickly 
        because there are no duplicated data in several places. Each table has one primary key that serves as a key element because data on the table are sorted 
        based on the primary key. It also creates and maintains referential integrity(foreign key). In other words, the primary key is the element that links 
        between tables. For instance, the primary key of the student table, which is the student id, will become a foreign key when it is part of the attempt table.</p>
        <!--Command for this feature-->
        <div class="column">
            <p>Here is the student table:</p>
            <p>
                <code>
                <br>CREATE TABLE IF NOT EXISTS student ( 
                <br>student_id INT(10) PRIMARY KEY, 
                <br>first_name VARCHAR(30) NOT NULL, 
                <br>last_name VARCHAR(30) NOT NULL 
                <br>); 
                </code>
            </p>
        </div>
		<div class="column">
            <p>Here is the attempt table:</p>
            <p>
				<code>
                CREATE TABLE IF NOT EXISTS attempt ( 
                <br>attempt_id INT AUTO_INCREMENT PRIMARY KEY, 
                <br>student_id INT(10) NOT NULL, 
                <br>date_time DATETIME NOT NULL, 
                <br>number_attempt INT(1) NOT NULL, 
                <br>score INT(1) NOT NULL, 
                <br>FOREIGN KEY (student_id) REFERENCES student (student_id) 
                <br>); 
                </code>
            </p>
        </div>
    
        <h2><span class="highlight">Granting access to the supervisor web page </span></h2>
        <!--how it goes beyond the basic requirements of the assignment -->
			  <p>&nbsp;&nbsp;&nbsp;Our group provided more secure access to the supervisor page by allowing only the people in charge can access the page. We created a table that stores our members' ids and passwords. When users enter the supervisor page, it will display the login page, in which users have to provide their username and password before they can access the actual quiz supervisor page. Not all usernames and passwords are allowed, only the ones that match the data we stored in the table. The quiz supervisor page is considered one of the most crucial web pages for the website as it takes part in analyzing the quiz result, by limiting the access of this page will increase security for the data as well.</p>
        <!--What programmers do to implement this feature-->
        
        <p>Below are the significant code for this feature:</p>
		<p>
        <code>
        <br>$query = "SELECT * FROM supervisor WHERE username = '$username' AND password = '$password';";
        <br>if ($result = mysqli_query($conn, $query)) {
        <br>    $rowcount = mysqli_num_rows($result);

        <br>if ($rowcount > 0) { // IF EXISTS IN TABLE, ACCESS SUPERVISOR PAGE
        <br>    $url = "supervisor.php";
        <br>    header("location:$url");
        <br>} else {
        <br>    $redirect = "login.php";
        <br>    echo "You can't do anything until you href='$redirect'>login :)";
        <br>}
        <br>    mysqli_free_result($result);
        <br>}
        </code>
		</p>
       
    </section>
    </article>
    <?php
		include ("footer.inc");
	  ?>
</body>
</html>