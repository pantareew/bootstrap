<!DOCTYPE html>
<html lang="en">
<head>
<?php
		include ("header.inc");
	?></head>
<body>
	<header>
    <h1><span class="highlight">Supervisor</span></h1>
	</header>
	<?php
		include ("menu.inc");
	?>	<article class="main_content">
	<section>
	<hr>
    <h2><span class="highlight">Quiz Results Queries</span></h2>
    <form method="post" action="manage.php" novalidate="novalidate">
		<section>        
        <p> So you're the one in charge of analysing the quiz results... goodluck with that! To give you a headstart we have set up this form where you can access several queries to see and manipulate the data we have collected. </p>
        </section>
        <!-- Student Form - ID, First/Last Name -->
        <fieldset>
            <legend>Variables</legend>
			<p>Have a specific student in mind that you want to suffer? Type in their student id, attempt number, and the score you want to give them and we can manipulate their quiz result.. It will be our little secret.</p>
            <p><label for="studentid">Student ID: </label>
                <input type="text" name="studentid" id="studentid" minlength="7" maxlength="10" size="10" pattern="[0-9]{7,10}"
                    placeholder="e.g. 1234567" required="required" />
			</p>
			<p><label for="name">First Name: </label>
                <input type="text" name="name" id="name" maxlength="30" size="10" pattern="[A-Za-z]{1,30}"
                    required="required" />
			</p>
            <p><label for="attempt">Attempt (1 or 2): </label>
				<input type="text" name="attempt" id="attempt" minlength="1" maxlength="1" size="1" pattern="[1-2]{1}"
					placeholder="1" required="required" />
			</p>
			<p><label for="score">Score (1-5): </label>
				<input type="text" name="score" id="score" minlength="1" maxlength="1" size="1" pattern="[1-5]{1}"
					placeholder="5" required="required"/>
			</p>
        </fieldset>
        <!-- Radio Input Question -->
        <fieldset>
            <legend>Queries - Select a query to apply</legend>
			<p>Query 1. List all attempts: </p>
            <p>
                <input type="radio" id="query1" name="query" value="query1">
                <label for="query1">Apply</label><br />
            </p>
			<p>Query 2. List all attempts for a particular student (given a student id OR name) </p>
			<p>
                <input type="radio" id="query2" name="query" value="query2">
                <label for="query2">Apply</label><br />
            </p>
			<p>Query 3. List all students (id, first and last name) who got 100% on their first attempt. </p>
			<p>
                <input type="radio" id="query3" name="query" value="query3">
                <label for="query3">Apply</label><br />
            </p>
			<p>Query 4. List all students (id, first and last name) got less than 50% on their second attempt. </p>
			<p>
                <input type="radio" id="query4" name="query" value="query4">
                <label for="query4">Apply</label><br />
            </p>
			<p>Query 5. Delete all attempts for a particular student (given a student id). </p>
			<p>
                <input type="radio" id="query5" name="query" value="query5">
                <label for="query5">Apply</label><br />
            </p>
			<p>Query 6. Change the score for a quiz attempt (given a student id and attempt number). </p>
			<p>
                <input type="radio" id="query6" name="query" value="query6">
                <label for="query6">Apply</label><br />
            </p>
        </fieldset>
        <input type="submit" value="Submit Query Request" />
    </form>
	</section>
	</article>
<?php
		include ("footer.inc");
	?></body>
</html>