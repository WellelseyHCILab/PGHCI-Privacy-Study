<?php
	session_start();
	error_reporting(E_ERROR);

        $_SESSION['demograph_start_time'] = time(); //start timer
/*   
        //generate random code for the thankyou page
		function randomCode($length = 5) {
   			    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
   			    $code = '';
   			    for ($i = 0; $i < $length; $i++) {
    			   $code .= $chars[rand(0, strlen($chars) - 1)];
    		    }
   			    return $code;
		}

		//array to hold random codes without duplicates (up to 1000 elements)
		$total = 0;
		$allCodes = array();
		while($total < 1000) {
  			 for ($i=0; $i < 1000 - $total; $i++ ) {
    			 $allCodes[] = "code-" . randomCode();
    		 }
    		 $allCodes = array_unique($allCodes);
    		 $total = count($allCodes);
        }

//Make sure no duplicate mturk ids
require_once('pgp_functions.php');
$dbh;
localConn(); //establish connection

$mturk_id = randomCode();
while (mturk_id_exists($mturk_id)) {
  $mturk_id = randomCode();
}
$_SESSION['mturk_id'] = $mturk_id;*/
        
?>

<!DOCTYPE>
	<!--Wellesley HCI PGP summer 2014
	updated by Claire A. Cerda
	Privacy index 
	-->
<html>

	<head>

		<title>Privacy Index</title>

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
			<span class="brand"><img src="assets/img/dna.png"> Privacy Index</span>
		</div>
	</div>
	</div>
	
	<div class="container" id="study_wrapper">
	<form id="demo_form" method="POST" action=/~hcilab/pghci_privacy/PGHCI-Privacy-Study/privacyindex2.php><ol> <!--CHECK THIS, J.-->
				
		<h2>Online Privacy Attitude &amp; Behavior Survey</h2>
		<p>For the first part of the survey, we are interested in your privacy related behavior in general and when online. Please answer every question using the full scale provided.
		
		<h3>Part 1</h3>
		<ol>
		<li><p><strong>Do you shred/burn your personal documents when you are disposing of them?</strong></p></li>
			<label for="q1_never">
				<input id="q1_n" type="radio" name="q1" required value="never"> Never
			</label>
			<label for="q1_rarely">
				<input id="q1_r" type="radio" name="q1" value="rarely"> Rarely
			</label>
			<label for="q1_sometimes">
				<input id="q1_s" type="radio" name="q1" value="sometimes"> Sometimes
			</label>
			<label for="q1_often">
				<input id="q1_o" type="radio" name="q1" value="often"> Often
			</label>
			<label for="q1_always">
				<input id="q1_a" type="radio" name="q1" value="always"> Always
			</label>
			<label for="q1_idk">
				<input id="q1_idk" type="radio" name="q1" value="idk"> Not sure
			</label>
		<li><p><strong>Do you hide your bank card PIN number when using cash machines/making purchases?</strong></p></li>
			<label for="q2_never">
				<input id="q2_n" type="radio" name="q2" required value="never"> Never
			</label>
			<label for="q2_rarely">
				<input id="q2_r" type="radio" name="q2" value="rarely"> Rarely
			</label>
			<label for="q2_sometimes">
				<input id="q2_s" type="radio" name="q2" value="sometimes"> Sometimes
			</label>
			<label for="q2_often">
				<input id="q2_o" type="radio" name="q2" value="often"> Often
			</label>
			<label for="q2_always">
				<input id="q2_a" type="radio" name="q2" value="always"> Always
			</label>
			<label for="q2_idk">
				<input id="q2_idk" type="radio" name="q2" value="idk"> Not sure
			</label>
		<li><p><strong>Do you only register for websites that have a privacy policy?</strong></p></li>
			<label for="q3_never">
				<input id="q3_n" type="radio" name="q3" required value="never"> Never
			</label>
			<label for="q3_rarely">
				<input id="q3_r" type="radio" name="q3" value="rarely"> Rarely
			</label>
			<label for="q3_sometimes">
				<input id="q3_s" type="radio" name="q3" value="sometimes"> Sometimes
			</label>
			<label for="q3_often">
				<input id="q3_o" type="radio" name="q3" value="often"> Often
			</label>
			<label for="q3_always">
				<input id="q3_a" type="radio" name="q3" value="always"> Always
			</label>
			<label for="q3_idk">
				<input id="q3_idk" type="radio" name="q3" value="idk"> Not sure
			</label>
		<li><p><strong>Do you read a website's privacy policy before you register your information?</strong></p></li>
			<label for="q4_never">
				<input id="q4_n" type="radio" name="q4" required value="never"> Never
			</label>
			<label for="q4_rarely">
				<input id="q4_r" type="radio" name="q4" value="rarely"> Rarely
			</label>
			<label for="q4_sometimes">
				<input id="q4_s" type="radio" name="q4" value="sometimes"> Sometimes
			</label>
			<label for="q4_often">
				<input id="q4_o" type="radio" name="q4" value="often"> Often
			</label>
			<label for="q4_always">
				<input id="q4_a" type="radio" name="q4" value="always"> Always
			</label>
			<label for="q4_idk">
				<input id="q4_idk" type="radio" name="q4" value="idk"> Not sure
			</label>
		<li><p><strong>Do you look for a privacy certification on a website before you register your information?</strong></p></li>
			<label for="q5_never">
				<input id="q5_n" type="radio" name="q5" required value="never"> Never
			</label>
			<label for="q5_rarely">
				<input id="q5_r" type="radio" name="q5" value="rarely"> Rarely
			</label>
			<label for="q5_sometimes">
				<input id="q5_s" type="radio" name="q5" value="sometimes"> Sometimes
			</label>
			<label for="q5_often">
				<input id="q5_o" type="radio" name="q5" value="often"> Often
			</label>
			<label for="q5_always">
				<input id="q5_a" type="radio" name="q5" value="always"> Always
			</label>
			<label for="q5_idk">
				<input id="q5_idk" type="radio" name="q5" value="idk"> Not sure
			</label>
		<li><p><strong>Do you read license agreements fully before you agree to them?</strong></p></li>
			<label for="q6_never">
				<input id="q6_n" type="radio" name="q6" required value="never"> Never
			</label>
			<label for="q6_rarely">
				<input id="q6_r" type="radio" name="q6" value="rarely"> Rarely
			</label>
			<label for="q6_sometimes">
				<input id="q6_s" type="radio" name="q6" value="sometimes"> Sometimes
			</label>
			<label for="q6_often">
				<input id="q6_o" type="radio" name="q6" value="often"> Often
			</label>
			<label for="q6_always">
				<input id="q6_a" type="radio" name="q6" value="always"> Always
			</label>
			<label for="q6_idk">
				<input id="q6_idk" type="radio" name="q6" value="idk"> Not sure
			</label>				
		
			<input class="btn btn-primary submit-study" type="submit" value="Continue">

		</ol></form>
	</div>

	</body>
</html>
