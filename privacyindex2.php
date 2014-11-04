<?php
session_start();
error_reporting(E_ERROR);

$_SESSION['pi2_start_time'] = time(); //start timer

?>

<!DOCTYPE>
	<!--Wellesley HCI PGP summer 2014
	updated by Claire A. Cerda
	Privacy index 
	-->
<html>

	<head>

		<title>PGHCI</title>

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
   <span class="brand"><img src="assets/img/dna.png"> PGHCI</span><span class="brand" style="float:right;">Section 2/8</span>
		</div>
	</div>
	</div>
	
	<div class="container" id="study_wrapper">
	<form id="demo_form" method="POST" action="pi2_process.php"><ol> <!--CHECK THIS, J.-->
				
		<h2>PGHCI Survey Part 2</h2>
		<p>Please answer every question using the full scale provided.
		
		<h3>Part 2</h3>
		<ol>
		<li><p><strong>Do you watch for ways to control what people send you online (such as check boxes that allow you to opt-in or opt-out of certain offers)?</strong></p></li>
			<label for="q7_never">
				<input id="q7_n" type="radio" name="q7" required value="never"> Never
			</label>
			<label for="q7_rarely">
				<input id="q7_r" type="radio" name="q7" value="rarely"> Rarely
			</label>
			<label for="q7_sometimes">
				<input id="q7_s" type="radio" name="q7" value="sometimes"> Sometimes
			</label>
			<label for="q7_often">
				<input id="q7_o" type="radio" name="q7" value="often"> Often
			</label>
			<label for="q7_always">
				<input id="q7_a" type="radio" name="q7" value="always"> Always
			</label>
			<label for="q7_idk">
				<input id="q7_idk" type="radio" name="q7" value="idk"> Not sure
			</label>
		<li><p><strong>Do you remove cookies?</strong></p></li>
			<label for="q8_never">
				<input id="q8_n" type="radio" name="q8" required value="never"> Never
			</label>
			<label for="q8_rarely">
				<input id="q8_r" type="radio" name="q8" value="rarely"> Rarely
			</label>
			<label for="q8_sometimes">
				<input id="q8_s" type="radio" name="q8" value="sometimes"> Sometimes
			</label>
			<label for="q8_often">
				<input id="q8_o" type="radio" name="q8" value="often"> Often
			</label>
			<label for="q8_always">
				<input id="q8_a" type="radio" name="q8" value="always"> Always
			</label>
			<label for="q8_idk">
				<input id="q8_idk" type="radio" name="q8" value="idk"> Not sure
			</label>
		<li><p><strong>Do you use a pop up window blocker?</strong></p></li>
			<label for="q9_never">
				<input id="q9_n" type="radio" name="q9" required value="never"> Never
			</label>
			<label for="q9_rarely">
				<input id="q9_r" type="radio" name="q9" value="rarely"> Rarely
			</label>
			<label for="q9_sometimes">
				<input id="q9_s" type="radio" name="q9" value="sometimes"> Sometimes
			</label>
			<label for="q9_often">
				<input id="q9_o" type="radio" name="q9" value="often"> Often
			</label>
			<label for="q9_always">
				<input id="q9_a" type="radio" name="q9" value="always"> Always
			</label>
			<label for="q9_idk">
				<input id="q9_idk" type="radio" name="q9" value="idk"> Not sure
			</label>
		<li><p><strong>Do you check your computer for spyware?</strong></p></li>
			<label for="q10_never">
				<input id="q10_n" type="radio" name="q10" required value="never"> Never
			</label>
			<label for="q10_rarely">
				<input id="q10_r" type="radio" name="q10" value="rarely"> Rarely
			</label>
			<label for="q10_sometimes">
				<input id="q10_s" type="radio" name="q10" value="sometimes"> Sometimes
			</label>
			<label for="q10_often">
				<input id="q10_o" type="radio" name="q10" value="often"> Often
			</label>
			<label for="q10_always">
				<input id="q10_a" type="radio" name="q10" value="always"> Always
			</label>
			<label for="q10_idk">
				<input id="q10_idk" type="radio" name="q10" value="idk"> Not sure
			</label>
		<li><p><strong>Do you clear your browser history regularly?</strong></p></li>
			<label for="q11_never">
				<input id="q11_n" type="radio" name="q11" required value="never"> Never
			</label>
			<label for="q11_rarely">
				<input id="q11_r" type="radio" name="q11" value="rarely"> Rarely
			</label>
			<label for="q11_sometimes">
				<input id="q11_s" type="radio" name="q11" value="sometimes"> Sometimes
			</label>
			<label for="q11_often">
				<input id="q11_o" type="radio" name="q11" value="often"> Often
			</label>
			<label for="q11_always">
				<input id="q11_a" type="radio" name="q11" value="always"> Always
			</label>
			<label for="q11_idk">
				<input id="q11_idk" type="radio" name="q11" value="idk"> Not sure
			</label>
		<li><p><strong>Do you block messages/emails from someone you do not want to hear from?</strong></p></li>
			<label for="q12_never">
				<input id="q12_n" type="radio" name="q12" required value="never"> Never
			</label>
			<label for="q12_rarely">
				<input id="q12_r" type="radio" name="q12" value="rarely"> Rarely
			</label>
			<label for="q12_sometimes">
				<input id="q12_s" type="radio" name="q12" value="sometimes"> Sometimes
			</label>
			<label for="q12_often">
				<input id="q12_o" type="radio" name="q12" value="often"> Often
			</label>
			<label for="q12_always">
				<input id="q12_a" type="radio" name="q12" value="always"> Always
			</label>
			<label for="q12_idk">
				<input id="q12_idk" type="radio" name="q12" value="idk"> Not sure
			</label>				
		
			<input class="btn btn-primary submit-study" type="submit" value="Continue">

		</ol></form>
	</div>

	</body>
</html>