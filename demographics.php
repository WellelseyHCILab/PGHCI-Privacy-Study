<?php
	session_start();
	error_reporting(E_ERROR);

        $_SESSION['demograph_start_time'] = time(); //start timer
        
?>

<!DOCTYPE>
	<!--Wellesley HCI PGP summer 2014
	updated by Laura M. Ascher
	Demographics questions for user questionnaire 
	-->
<html>

	<head>

		<title>PGHCI: Questions</title>

		<!--jQuery & vis.js-->
		<script type="text/javascript" charset="utf8" src="scripts/jquery/jquery-1.10.2.js"></script>
		<script type="text/javascript" charset="utf8" src="scripts/vis.js"></script>
	
		<!-- jQuery UI -->
	        <link rel="stylesheet" type="text/css" href="scripts/jquery/jquery-ui-1.10.4.custom/css/smoothness/jquery-ui-1.10.4.custom.css" rel="stylesheet">
                <script type="text/javascript" charset="utf8" src="scripts/jquery/jquery-ui-1.10.4.custom.js"></script>
				
		<link href="styles/bootswatch.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="styles/style.css">
		
	</head>
	<body>
	<div class="navbar navbar-fixed-top navbar-inverse">
	<div class="navbar-inner">
		<div class="container">
			<span class="brand"><img src="assets/img/dna.png"> PGHCI: Demographic Questions</span>
		</div>
	</div>
	</div>
	
	<div class="container" id="study_wrapper">
	<form id="demo_form" method="POST" action="dem_process.php"><ol>
				
		<h2>Demographic Questions</h2>
		
		<p><strong>What is your gender?</strong></p>
			<label for="q1_F">
				<input id="q1_F" type="radio" name="q1" required value="female"> Female
			</label>
			<label for="q1_M">
				<input id="q1_M" type="radio" name="q1" value="male"> Male
			</label>
			<label for="q1_O">
				<input id="q1_O" type="radio" name="q1" value="other"> Other
			</label>
			<label for="q1_No">
				<input id="q1_No" type="radio" name="q1" value="no_answer">I prefer not to answer
			</label>

		<label for="age"> <strong>How old are you?</strong> </label>
		<input type="number" name="q2" id="age" style="height:30px;" required>

		<p><strong>Highest level of education:</strong></p>
			<select name="q3">
				<option value="some high-school">Some high-school</option>
				<option value="high-school diploma">High-school diploma</option>
				<option value="some college">Some college</option>
				<option value="bachelor degree">Bachelor degree</option>
				<option value="masters degree">Masters degree</option>
				<option value="doctoral degree">Doctoral degree</option>
			</select>
		<p><strong>Do you work in the life sciences?</strong></p>
			<label for="q4_Y">
				<input id="q4_Y" type="radio" name="q4" required value="yes"> Yes
			</label>
			<label for="q4_N">
				<input id="q4_N" type="radio" name="q4" value="no"> No
			</label>
		<p><strong>Did you study life sciences at a college level?</strong></p>
			<label for="q5_Y">
				<input id="q5_Y" type="radio" name="q5" required value="yes"> Yes
			</label>
			<label for="q5_N">
				<input id="q5_N" type="radio" name="q5" value="no"> No
			</label>
		
		<label for="language"> <strong>What is your native language?</strong> </label>
		<input type="textfield" name="q6" id="language" style="height:30px;" required>
		<p></p>
		<input type="submit" name="submit" value="Submit" id="submit_demog" class="btn btn-primary submit-survey">
		</ol></form>
	</div>

	</body>
</html>
