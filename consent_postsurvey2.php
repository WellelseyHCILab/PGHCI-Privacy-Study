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
	<!--Wellesley HCI PGP Privacy Study Fall 2014
	Consent post survey
	-->
<html>

	<head>

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
	<div class="container" id="compQuestions">
	<form id="demo_form" method="POST" action=/~hcilab/pghci_privacy/PGHCI-Privacy-Study/privacyindex2.php><ol> <!--CHECK THIS, J.-->
		
            <h3>Consent Form Opinion</h3> 
            <ol>
                <li> <label for="consent_opin_q1">How confident are you in your responses to the questions you just answered, questions 1-15?</label></li>
                    <label class="radio" for="consent_opin_q1_A">
                    <input type="radio" name="consent_opin_q1_A" id="consent_opin_q1_A" value="true">not at all confident</label>
                    <label class="radio" for="consent_opin_q1_B">
                    <input type="radio" name="consent_opin_q1_B" id="consent_opin_q1_B" value="true">slightly not confident</label>
                    <label class="radio" for="consent_opin_q1_C">
                    <input type="radio" name="consent_opin_q1_C" id="consent_opin_q1_C" value="true">moderately confident</label>
                    <label class="radio" for="consent_opin_q1_D">
                    <input type="radio" name="consent_opin_q1_D" id="consent_opin_q1_D" value="true">very confident</label>

                <li> <label for="consent_opin_q2">This consent form was easy to understand</label></li>
                    <label class="radio" for="consent_opin_q2_A">
                    <input type="radio" name="consent_opin_q2_A" id="consent_opin_q2_A" value="true">Strongly Disagree</label>
                    <label class="radio" for="consent_opin_q2_B">
                    <input type="radio" name="consent_opin_q2_B" id="consent_opin_q2_B" value="true">Disagree</label>
                    <label class="radio" for="consent_opin_q2_C">
                    <input type="radio" name="consent_opin_q2_C" id="consent_opin_q2_C" value="true">Undecided</label>
                    <label class="radio" for="consent_opin_q2_D">
                    <input type="radio" name="consent_opin_q2_D" id="consent_opin_q2_D" value="true">Agree</label> 
                    <label class="radio" for="consent_opin_q2_E">
                    <input type="radio" name="consent_opin_q2_E" id="consent_opin_q2_E" value="true">Strongly Agree</label>     

                <li> <label for="consent_opin_q3">It was hard to find information in this consent form</label></li>
                    <label class="radio" for="consent_opin_q3_A">
                    <input type="radio" name="consent_opin_q3_A" id="consent_opin_q3_A" value="true">Strongly Disagree</label>
                    <label class="radio" for="consent_opin_q3_B">
                    <input type="radio" name="consent_opin_q3_B" id="consent_opin_q3_B" value="true">Disagree</label>
                    <label class="radio" for="consent_opin_q3_C">
                    <input type="radio" name="consent_opin_q3_C" id="consent_opin_q3_C" value="true">Undecided</label>
                    <label class="radio" for="consent_opin_q3_D">
                    <input type="radio" name="consent_opin_q3_D" id="consent_opin_q3_D" value="true">Agree</label> 
                    <label class="radio" for="consent_opin_q3_E">
                    <input type="radio" name="consent_opin_q3_E" id="consent_opin_q3_E" value="true">Strongly Agree</label>     
     
                <li> <label for="consent_opin_q4">Finding information in the HCIPGP consent form was a pleasurable experience.</label></li>
                    <label class="radio" for="consent_opin_q4_A">
                    <input type="radio" name="consent_opin_q4_A" id="consent_opin_q4_A" value="true">Strongly Disagree</label>
                    <label class="radio" for="consent_opin_q4_B">
                    <input type="radio" name="consent_opin_q4_B" id="consent_opin_q4_B" value="true">Disagree</label>
                    <label class="radio" for="consent_opin_q4_C">
                    <input type="radio" name="consent_opin_q4_C" id="consent_opin_q4_C" value="true">Undecided</label>
                    <label class="radio" for="consent_opin_q4_D">
                    <input type="radio" name="consent_opin_q4_D" id="consent_opin_q4_D" value="true">Agree</label> 
                    <label class="radio" for="consent_opin_q4_E">
                    <input type="radio" name="consent_opin_q4_E" id="consent_opin_q4_E" value="true">Strongly Agree</label>     
         
                <li> <label for="consent_opin_q5">If all privacy policies looked just like this I would be more likely to read them</label></li>
                    <label class="radio" for="consent_opin_q5_A">
                    <input type="radio" name="consent_opin_q5_A" id="consent_opin_q5_A" value="true">Strongly Disagree</label>
                    <label class="radio" for="consent_opin_q5_B">
                    <input type="radio" name="consent_opin_q5_B" id="consent_opin_q5_B" value="true">Disagree</label>
                    <label class="radio" for="consent_opin_q5_C">
                    <input type="radio" name="consent_opin_q5_C" id="consent_opin_q5_C" value="true">Undecided</label>
                    <label class="radio" for="consent_opin_q5_D">
                    <input type="radio" name="consent_opin_q5_D" id="consent_opin_q5_D" value="true">Agree</label> 
                    <label class="radio" for="consent_opin_q5_E">
                    <input type="radio" name="consent_opin_q5_E" id="consent_opin_q5_E" value="true">Strongly Agree</label>     
         		
         		<li> <label for="consent_opin_q6">If you were given this consent form with the ability to decide who to share your genomic data with, which of the following options would you choose? (select one)</label></li>
                    <label class="radio" for="consent_opin_q6_A">
                    <input type="radio" name="consent_opin_q6_A" id="consent_opin_q6_A" value="true">I would be willing to share my information with HCIPGP researchers and the public in an online, open, anonymized genomic database.</label>
                    <label class="radio" for="consent_opin_q6_B">
                    <input type="radio" name="consent_opin_q6_B" id="consent_opin_q6_B" value="true">I would be willing to share my genomic information only with HCIPGP researchers in a secure, private database (a/b test without this option?)</label>
                    <label class="radio" for="consent_opin_q6_C">
                    <input type="radio" name="consent_opin_q6_C" id="consent_opin_q6_C" value="true">I would want to receive my results but I wouldn’t want to share my information with either researchers or the public.</label>
                    <label class="radio" for="consent_opin_q6_D">
                    <input type="radio" name="consent_opin_q6_D" id="consent_opin_q6_D" value="true">I would not want to participate in this study</label> 
 
 				<li><label for="consent_opin_q7">Please describe what you liked about the consent form presented here.</label></li>
                	<textarea name="consent_opin_q7" id="consent_opin_q7" cols="100" rows="5"></textarea>

                <li><label for="consent_opin_q8">Please describe what you liked least about the consent form presented here.</label></li>
                	<textarea name="consent_opin_q8" id="consent_opin_q8" cols="100" rows="5"></textarea>

         		
            </ol>		
		
	</form>
	</div>

	</body>
</html>
