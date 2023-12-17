<!DOCTYPE html>
<html lang="en">
<head>
<?php
		include ("header.inc");
	?></head>
<body>
	<header>
    <h1><span class="highlight">Quiz</span></h1>
	</header>
	<?php
		include ("menu.inc");
	?>	<article class="main_content">
	<section>
	<hr>
    <h2><span class="highlight">Bootstrap quiz</span></h2>
    <form method="post" action="markquiz.php" novalidate="novalidate">
		<section>        
        <p> Read our site and think you're a Bootstrap expert? Think again! Our quiz is designed to put your knowledge to the test. Only the wisest, most well researched Bootstrap afficionados can answer all five questions. Ready to face the challenge? Take the plunge below. Goodluck! </p>
        </section>
        <!-- Student Form - ID, First/Last Name -->
        <fieldset>
            <legend>Student Form</legend>
            <p><label for="studentid">Student ID </label>
                <input type="text" name="studentid" id="studentid" minlength="7" maxlength="10" size="10" pattern="[0-9]{7,10}"
                    placeholder="e.g. 1234567" required="required" />
            </p>
            <p><label for="fname">First Name </label>
                <input type="text" name="fname" id="fname" maxlength="30" size="30" pattern="[A-Za-z]{1,30}"
                    required="required" />
            </p>
            <p><label for="lname">Last Name </label>
                <input type="text" name="lname" id="lname" maxlength="30" size="30" pattern="[A-Za-z]{1,30}"
                    required="required" />
            </p>
        </fieldset>
        <!-- Radio Input Question -->
        <fieldset>
            <legend>Q1: Bootstrap requires the use of the HTML5 doctype.</legend>
            <p><label for="true"></label>
                <input type="radio" id="true" name="radio" value="true">
                <label for="primary">True </label><br />
                <input type="radio" id="false" name="radio" value="false" required="required">
                <label for="false">False </label><br />
            </p>
        </fieldset>
        <!-- Dropdown Input Question -->
        <fieldset>
            <legend>Q2: The developers were from which company?</legend>
            <p><label for="dropdown">Your Answer:</label>
                <select name="dropdown" id="dropdown" required="required">
                    <option value="">Please Select</option>
                    <option value="instagram">Instagram</option>
                    <option value="twitter">Twitter</option>
                    <option value="linkedin">LinkedIn</option>
                    <option value="youtube">Youtube</option>
                </select>
            </p>
        </fieldset>
        <!-- Checkbox Input Question -->
        <fieldset>
            <legend>Q3: Which button style is included in Bootstrap?</legend>
            <p><label for="primary">Primary</label>
                <input type="checkbox" id="primary" name="primary" value="primary" />
            </p>
            <p><label for="light">Light</label>
                <input type="checkbox" id="light" name="light" value="light" />
            </p>
            <p><label for="fail">Fail</label>
                <input type="checkbox" id="fail" name="fail" value="fail" />
            </p>
            <p><label for="success">Success</label>
                <input type="checkbox" id="success" name="success" value="success" />
            </p>
        </fieldset>
        <!-- Text Input Question -->
        <fieldset>
            <legend>Q4: What was Bootstrap called prior to its public release?</legend>
            <p><label>Your Answer:<br />
                    <textarea name="textinput" rows="4" cols="70" placeholder="Type your answer here" required="required"></textarea>
                </label>
            </p>
        </fieldset>
        <!-- 5th Input Type - Number Range Question -->
        <fieldset>
            <legend>Q5: The Bootstrap grid system is based on how many columns?</legend>
            <label for="range"></label>
            <input type="range" id="range" name="range" min="1" max="12" value="1" 
                oninput="amount.value=qrange.value">
            <output id="amount" name="amount" for="range">1</output>
        </fieldset>
        <input type="submit" value="Submit Quiz" />
    </form>
	</section>
	</article>
<?php
		include ("footer.inc");
	?></body>
</html>