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
	<!--Wellesley HCI PGP fall 2014
	updated by MaryBeth Kerry and Joanna Bi
	Self Efficacy 
	-->
<html>

	<head>

		<title>PGHCI: Self Efficacy Scale</title>

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
   <span class="brand"><img src="assets/img/dna.png"> PGHCI: Self Efficacy Scale</span>
		</div>
	</div>
	</div>
	
	<div class="container" id="study_wrapper">
	<form id="demo_form" method="POST" action=/~hcilab/pghci_privacy/PGHCI-Privacy-Study/pretask.php><ol> <!--CHECK THIS, J.-->
				
		<h2>General Self Efficacy Survey</h2>
		<p>For this part of the survey we are interested in how you perceive your own effectiveness. Please answer every question using the full scale provided.</p>
		<ol>

		<li><p><strong>I can always manage to solve difficult problems if I try hard enough.</strong></p></li>
			<label for="q1_not">
				<input id="q1_n" type="radio" name="q1" required value="not"> Not at all
			</label>
			<label for="q1_hardlyTrue">
				<input id="q1_ht" type="radio" name="q1" value="hardly"> Hardly true
			</label>
			<label for="q1_moderateTrue">
				<input id="q1_mt" type="radio" name="q1" value="moderately"> Moderately true
			</label>
			<label for="q1_true">
				<input id="q1_et" type="radio" name="q1" value="exactly"> Exactly true
			</label>
		<li><p><strong>If someone opposes me, I can find the means and ways to get what I want.</strong></p></li>
			<label for="q2_not">
				<input id="q2_n" type="radio" name="q2" required value="not"> Not at all
			</label>
			<label for="q2_hardlyTrue">
				<input id="q2_ht" type="radio" name="q2" value="hardly"> Hardly true
			</label>
			<label for="q2_moderateTrue">
				<input id="q2_mt" type="radio" name="q2" value="moderately"> Moderately true
			</label>
			<label for="q2_true">
				<input id="q2_et" type="radio" name="q2" value="exactly"> Exactly true
			</label>
		<li><p><strong>It is easy for me to stick to my aims and accomplish my goals.</strong></p></li>
			<label for="q3_not">
				<input id="q3_n" type="radio" name="q3" required value="not"> Not at all
			</label>
			<label for="q3_hardlyTrue">
				<input id="q3_ht" type="radio" name="q3" value="hardly"> Hardly true
			</label>
			<label for="q3_moderateTrue">
				<input id="q3_mt" type="radio" name="q3" value="moderately"> Moderately true
			</label>
			<label for="q3_true">
				<input id="q3_et" type="radio" name="q3" value="exactly"> Exactly true
			</label>
		<li><p><strong>I am confident that I could deal efficiently with unexpected events.</strong></p></li>
			<label for="q4_not">
				<input id="q4_n" type="radio" name="q4" required value="not"> Not at all
			</label>
			<label for="q4_hardlyTrue">
				<input id="q4_ht" type="radio" name="q4" value="hardly"> Hardly true
			</label>
			<label for="q4_moderateTrue">
				<input id="q4_mt" type="radio" name="q4" value="moderately"> Moderately true
			</label>
			<label for="q4_true">
				<input id="q4_et" type="radio" name="q4" value="exactly"> Exactly true
			</label>
		<li><p><strong>Thanks to my resourcefulness, I know how to handle unforeseen situations.</strong></p></li>
			<label for="q5_not">
				<input id="q5_n" type="radio" name="q5" required value="not"> Not at all
			</label>
			<label for="q5_hardlyTrue">
				<input id="q5_ht" type="radio" name="q5" value="hardly"> Hardly true
			</label>
			<label for="q5_moderateTrue">
				<input id="q5_mt" type="radio" name="q5" value="moderately"> Moderately true
			</label>
			<label for="q5_true">
				<input id="q5_et" type="radio" name="q5" value="exactly"> Exactly true
			</label>
		<li><p><strong>I can solve most problems if I invest the necessary effort.</strong></p></li>
			<label for="q6_not">
				<input id="q6_n" type="radio" name="q6" required value="not"> Not at all
			</label>
			<label for="q6_hardlyTrue">
				<input id="q6_ht" type="radio" name="q6" value="hardly"> Hardly true
			</label>
			<label for="q6_moderateTrue">
				<input id="q6_mt" type="radio" name="q6" value="moderately"> Moderately true
			</label>
			<label for="q6_true">
				<input id="q6_et" type="radio" name="q6" value="exactly"> Exactly true
			</label>	
		<li><p><strong>I can remain calm when facing difficulties because I can rely on my coping abilities.</strong></p></li>
			<label for="q7_not">
				<input id="q7_n" type="radio" name="q7" required value="not"> Not at all
			</label>
			<label for="q7_hardlyTrue">
				<input id="q7_ht" type="radio" name="q7" value="hardly"> Hardly true
			</label>
			<label for="q7_moderateTrue">
				<input id="q7_mt" type="radio" name="q7" value="moderately"> Moderately true
			</label>
			<label for="q7_true">
				<input id="q7_et" type="radio" name="q7" value="exactly"> Exactly true
			</label>					
		<li><p><strong>When I am confronted with a problem, I can usually find several solutions.</strong></p></li>
			<label for="q8_not">
				<input id="q8_n" type="radio" name="q8" required value="not"> Not at all
			</label>
			<label for="q8_hardlyTrue">
				<input id="q8_ht" type="radio" name="q8" value="hardly"> Hardly true
			</label>
			<label for="q8_moderateTrue">
				<input id="q8_mt" type="radio" name="q8" value="moderately"> Moderately true
			</label>
			<label for="q8_true">
				<input id="q8_et" type="radio" name="q8" value="exactly"> Exactly true
			</label>
		<li><p><strong>If I am in trouble, I can usually think of a solution.</strong></p></li>
			<label for="q9_not">
				<input id="q9_n" type="radio" name="q9" required value="not"> Not at all
			</label>
			<label for="q9_hardlyTrue">
				<input id="q9_ht" type="radio" name="q9" value="hardly"> Hardly true
			</label>
			<label for="q9_moderateTrue">
				<input id="q9_mt" type="radio" name="q9" value="moderately"> Moderately true
			</label>
			<label for="q9_true">
				<input id="q9_et" type="radio" name="q9" value="exactly"> Exactly true
			</label>
		<li><p><strong>I can usually handle whatever comes my way.</strong></p></li>
			<label for="q10_not">
				<input id="q10_n" type="radio" name="q10" required value="not"> Not at all
			</label>
			<label for="q10_hardlyTrue">
				<input id="q10_ht" type="radio" name="q10" value="hardly"> Hardly true
			</label>
			<label for="q10_moderateTrue">
				<input id="q10_mt" type="radio" name="q10" value="moderately"> Moderately true
			</label>
			<label for="q10_true">
				<input id="q10_et" type="radio" name="q10" value="exactly"> Exactly true
			</label>	

			<input class="btn btn-primary submit-study" type="submit" value="Continue">

		</ol></form>
	</div>

	</body>
</html>