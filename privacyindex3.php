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
	<form id="demo_form" method="POST" action=/~hcilab/pghci_privacy/PGHCI-Privacy-Study/selfefficacy.php><ol> <!--CHECK THIS, J.-->
				
		<h2>Online Privacy Attitude &amp; Behavior Survey</h2>
		<p>For this part of the survey, we are interested in any privacy concerns you might have when online. Please answer every question using the full scale provided.
		
		<h3>Part 3</h3>
		<ol>
		<li><p><strong>In general, how concerned are you about your privacy while you are using the internet?</strong></p></li>
			<label for="q13_never">
				<input id="q13_nc" type="radio" name="q13" required value="not"> Not at all concerned
			</label>
			<label for="q13_rarely">
				<input id="q13_sc" type="radio" name="q13" value="slightly"> Slightly concerned
			</label>
			<label for="q13_sometimes">
				<input id="q13_swc" type="radio" name="q13" value="somewhat"> Somewhat concerned
			</label>
			<label for="q13_often">
				<input id="q13_mc" type="radio" name="q13" value="moderately"> Moderately concerned
			</label>
			<label for="q13_always">
				<input id="q13_ec" type="radio" name="q13" value="extremely"> Extremely concerned
			</label>
		<li><p><strong>Are you concerned about online organizations not being who they claim they are?</strong></p></li>
			<label for="q14_never">
				<input id="q14_nc" type="radio" name="q14" required value="not"> Not at all concerned
			</label>
			<label for="q14_rarely">
				<input id="q14_sc" type="radio" name="q14" value="slightly"> Slightly concerned
			</label>
			<label for="q14_sometimes">
				<input id="q14_swc" type="radio" name="q14" value="somewhat"> Somewhat concerned
			</label>
			<label for="q14_often">
				<input id="q14_mc" type="radio" name="q14" value="moderately"> Moderately concerned
			</label>
			<label for="q14_always">
				<input id="q14_ec" type="radio" name="q14" value="extremely"> Extremely concerned
			</label>
		<li><p><strong>Are you concerned that you are asked for too much personal information when you register or make online purchases?</strong></p></li>
			<label for="q15_never">
				<input id="q15_nc" type="radio" name="q15" required value="not"> Not at all concerned
			</label>
			<label for="q15_rarely">
				<input id="q15_sc" type="radio" name="q15" value="slightly"> Slightly concerned
			</label>
			<label for="q15_sometimes">
				<input id="q15_swc" type="radio" name="q15" value="somewhat"> Somewhat concerned
			</label>
			<label for="q15_often">
				<input id="q15_mc" type="radio" name="q15" value="moderately"> Moderately concerned
			</label>
			<label for="q15_always">
				<input id="q15_ec" type="radio" name="q15" value="extremely"> Extremely concerned
			</label>
		<li><p><strong>Are you concerned about online identity theft?</strong></p></li>
			<label for="q16_never">
				<input id="q16_nc" type="radio" name="q16" required value="not"> Not at all concerned
			</label>
			<label for="q16_rarely">
				<input id="q16_sc" type="radio" name="q16" value="slightly"> Slightly concerned
			</label>
			<label for="q16_sometimes">
				<input id="q16_swc" type="radio" name="q16" value="somewhat"> Somewhat concerned
			</label>
			<label for="q16_often">
				<input id="q16_mc" type="radio" name="q16" value="moderately"> Moderately concerned
			</label>
			<label for="q16_always">
				<input id="q16_ec" type="radio" name="q16" value="extremely"> Extremely concerned
			</label>
		<li><p><strong>Are you concerned about people online not being who they say they are?</strong></p></li>
			<label for="q17_never">
				<input id="q17_nc" type="radio" name="q17" required value="not"> Not at all concerned
			</label>
			<label for="q17_rarely">
				<input id="q17_sc" type="radio" name="q17" value="slightly"> Slightly concerned
			</label>
			<label for="q17_sometimes">
				<input id="q17_swc" type="radio" name="q17" value="somewhat"> Somewhat concerned
			</label>
			<label for="q17_often">
				<input id="q17_mc" type="radio" name="q17" value="moderately"> Moderately concerned
			</label>
			<label for="q17_always">
				<input id="q17_ec" type="radio" name="q17" value="extremely"> Extremely concerned
			</label>
		<li><p><strong>Are you concerned that information about you could be found on an old computer?</strong></p></li>
			<label for="q18_never">
				<input id="q18_nc" type="radio" name="q18" required value="not"> Not at all concerned
			</label>
			<label for="q18_rarely">
				<input id="q18_sc" type="radio" name="q18" value="slightly"> Slightly concerned
			</label>
			<label for="q18_sometimes">
				<input id="q18_swc" type="radio" name="q18" value="somewhat"> Somewhat concerned
			</label>
			<label for="q18_often">
				<input id="q18_mc" type="radio" name="q18" value="moderately"> Moderately concerned
			</label>
			<label for="q18_always">
				<input id="q18_ec" type="radio" name="q18" value="extremely"> Extremely concerned
			</label>
		<li><p><strong>Are you concerned who might access your medical records electronically?</strong></p></li>
			<label for="q19_never">
				<input id="q19_nc" type="radio" name="q19" required value="not"> Not at all concerned
			</label>
			<label for="q19_rarely">
				<input id="q19_sc" type="radio" name="q19" value="slightly"> Slightly concerned
			</label>
			<label for="q19_sometimes">
				<input id="q19_swc" type="radio" name="q19" value="somewhat"> Somewhat concerned
			</label>
			<label for="q19_often">
				<input id="q19_mc" type="radio" name="q19" value="moderately"> Moderately concerned
			</label>
			<label for="q19_always">
				<input id="q19_ec" type="radio" name="q19" value="extremely"> Extremely concerned
			</label>
		<li><p><strong>Are you concerned about people you don't know obtaining personal information about you from your online activities?</strong></p></li>
			<label for="q20_never">
				<input id="q20_nc" type="radio" name="q20" required value="not"> Not at all concerned
			</label>
			<label for="q20_rarely">
				<input id="q20_sc" type="radio" name="q20" value="slightly"> Slightly concerned
			</label>
			<label for="q20_sometimes">
				<input id="q20_swc" type="radio" name="q20" value="somewhat"> Somewhat concerned
			</label>
			<label for="q20_often">
				<input id="q20_mc" type="radio" name="q20" value="moderately"> Moderately concerned
			</label>
			<label for="q20_always">
				<input id="q20_ec" type="radio" name="q20" value="extremely"> Extremely concerned
			</label>
		<li><p><strong>Are you concerned that if you use your credit card to buy something on the internet your credit card number will obtained/intercepted by someone else?</strong></p></li>
			<label for="q21_never">
				<input id="q21_nc" type="radio" name="q21" required value="not"> Not at all concerned
			</label>
			<label for="q21_rarely">
				<input id="q21_sc" type="radio" name="q21" value="slightly"> Slightly concerned
			</label>
			<label for="q21_sometimes">
				<input id="q21_swc" type="radio" name="q21" value="somewhat"> Somewhat concerned
			</label>
			<label for="q21_often">
				<input id="q21_mc" type="radio" name="q21" value="moderately"> Moderately concerned
			</label>
			<label for="q21_always">
				<input id="q21_ec" type="radio" name="q21" value="extremely"> Extremely concerned
			</label>
		<li><p><strong>Are you concerned that if you use your credit card to buy something on the internet your card will be mischarged?</strong></p></li>
			<label for="q22_never">
				<input id="q22_nc" type="radio" name="q22" required value="not"> Not at all concerned
			</label>
			<label for="q22_rarely">
				<input id="q22_sc" type="radio" name="q22" value="slightly"> Slightly concerned
			</label>
			<label for="q22_sometimes">
				<input id="q22_swc" type="radio" name="q22" value="somewhat"> Somewhat concerned
			</label>
			<label for="q22_often">
				<input id="q22_mc" type="radio" name="q22" value="moderately"> Moderately concerned
			</label>
			<label for="q22_always">
				<input id="q22_ec" type="radio" name="q22" value="extremely"> Extremely concerned
			</label>
		<li><p><strong>Are you concerned that an email you send may be read by someone else besides the person you sent it to?</strong></p></li>
			<label for="q23_never">
				<input id="q23_nc" type="radio" name="q23" required value="not"> Not at all concerned
			</label>
			<label for="q23_rarely">
				<input id="q23_sc" type="radio" name="q23" value="slightly"> Slightly concerned
			</label>
			<label for="q23_sometimes">
				<input id="q23_swc" type="radio" name="q23" value="somewhat"> Somewhat concerned
			</label>
			<label for="q23_often">
				<input id="q23_mc" type="radio" name="q23" value="moderately"> Moderately concerned
			</label>
			<label for="q23_always">
				<input id="q23_ec" type="radio" name="q23" value="extremely"> Extremely concerned
			</label>
		<li><p><strong>Are you concerned that an email you send someone may be inappropriately forwarded to others?</strong></p></li>
			<label for="q24_never">
				<input id="q24_nc" type="radio" name="q24" required value="not"> Not at all concerned
			</label>
			<label for="q24_rarely">
				<input id="q24_sc" type="radio" name="q24" value="slightly"> Slightly concerned
			</label>
			<label for="q24_sometimes">
				<input id="q24_swc" type="radio" name="q24" value="somewhat"> Somewhat concerned
			</label>
			<label for="q24_often">
				<input id="q24_mc" type="radio" name="q24" value="moderately"> Moderately concerned
			</label>
			<label for="q24_always">
				<input id="q24_ec" type="radio" name="q24" value="extremely"> Extremely concerned
			</label>	
		<li><p><strong>Are you concerned that an email you send someone may be printed out in a place where others could see it?</strong></p></li>
			<label for="q25_never">
				<input id="q25_nc" type="radio" name="q25" required value="not"> Not at all concerned
			</label>
			<label for="q25_rarely">
				<input id="q25_sc" type="radio" name="q25" value="slightly"> Slightly concerned
			</label>
			<label for="q25_sometimes">
				<input id="q25_swc" type="radio" name="q25" value="somewhat"> Somewhat concerned
			</label>
			<label for="q25_often">
				<input id="q25_mc" type="radio" name="q25" value="moderately"> Moderately concerned
			</label>
			<label for="q25_always">
				<input id="q25_ec" type="radio" name="q25" value="extremely"> Extremely concerned
			</label>	
		<li><p><strong>Are you concerned that a computer virus could send out emails in your name?</strong></p></li>
			<label for="q26_never">
				<input id="q26_nc" type="radio" name="q26" required value="not"> Not at all concerned
			</label>
			<label for="q26_rarely">
				<input id="q26_sc" type="radio" name="q26" value="slightly"> Slightly concerned
			</label>
			<label for="q26_sometimes">
				<input id="q26_swc" type="radio" name="q26" value="somewhat"> Somewhat concerned
			</label>
			<label for="q26_often">
				<input id="q26_mc" type="radio" name="q26" value="moderately"> Moderately concerned
			</label>
			<label for="q26_always">
				<input id="q26_ec" type="radio" name="q26" value="extremely"> Extremely concerned
			</label>
		<li><p><strong>Are you concerned about emails you receive not being from whom they say they are?</strong></p></li>
			<label for="q27_never">
				<input id="q27_nc" type="radio" name="q27" required value="not"> Not at all concerned
			</label>
			<label for="q27_rarely">
				<input id="q27_sc" type="radio" name="q27" value="slightly"> Slightly concerned
			</label>
			<label for="q27_sometimes">
				<input id="q27_swc" type="radio" name="q27" value="somewhat"> Somewhat concerned
			</label>
			<label for="q27_often">
				<input id="q27_mc" type="radio" name="q27" value="moderately"> Moderately concerned
			</label>
			<label for="q27_always">
				<input id="q27_ec" type="radio" name="q27" value="extremely"> Extremely concerned
			</label>	
		<li><p><strong>Are you concerned that an email containing a seemingly legitimate internet address may be fraudulent?</strong></p></li>
			<label for="q28_never">
				<input id="q28_nc" type="radio" name="q28" required value="not"> Not at all concerned
			</label>
			<label for="q28_rarely">
				<input id="q28_sc" type="radio" name="q28" value="slightly"> Slightly concerned
			</label>
			<label for="q28_sometimes">
				<input id="q28_swc" type="radio" name="q28" value="somewhat"> Somewhat concerned
			</label>
			<label for="q28_often">
				<input id="q28_mc" type="radio" name="q28" value="moderately"> Moderately concerned
			</label>
			<label for="q28_always">
				<input id="q28_ec" type="radio" name="q28" value="extremely"> Extremely concerned
			</label>													
		
			<input class="btn btn-primary submit-study" type="submit" value="Continue">

		</ol></form>
	</div>

	</body>
</html>