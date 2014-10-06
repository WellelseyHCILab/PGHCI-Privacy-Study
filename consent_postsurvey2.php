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
        <link rel="stylesheet" type="text/css" href="styles/style_consentquestions.css">
		
    <script>
      $(function() {
        $( "#unranked_q9, #unranked_q10, #ranked_q9, #ranked_q10" ).sortable({
          connectWith: ".connectedSortable"
        }).disableSelection();      
      });
    </script>

	</head>
	<body>
	<div class="container" id="compQuestions">
	<form id="demo_form" method="POST" action=/~hcilab/pghci_privacy/PGHCI-Privacy-Study/privacyindex2.php><ol> <!--CHECK THIS, J.-->
		
            <h3>Consent Form Opinion</h3> 
            <ol>
                <li> <label for="consent_opin_q1"><p><strong>I am confident in my response to the questions I just answered, questions 1-15</strong></p></label></li>
                    <label class="radio" for="consent_opin_q1_A">
                    <input type="radio" name="consent_opin_q1" id="consent_opin_q1_A" value="true">Strongly Disagree</label>
                    <label class="radio" for="consent_opin_q1_B">
                    <input type="radio" name="consent_opin_q1" id="consent_opin_q1_B" value="true">Disagree</label>
                    <label class="radio" for="consent_opin_q1_C">
                    <input type="radio" name="consent_opin_q1" id="consent_opin_q1_C" value="true">Undecided</label>
                    <label class="radio" for="consent_opin_q1_D">
                    <input type="radio" name="consent_opin_q1" id="consent_opin_q1_D" value="true">Agree</label> 
                    <label class="radio" for="consent_opin_q1_E">
                    <input type="radio" name="consent_opin_q1" id="consent_opin_q1_E" value="true">Strongly Agree</label>  

                <li> <label for="consent_opin_q2"><p><strong>This consent form was easy to understand</strong></p></label></li>
                    <label class="radio" for="consent_opin_q2_A">
                    <input type="radio" name="consent_opin_q2" id="consent_opin_q2_A" value="true">Strongly Disagree</label>
                    <label class="radio" for="consent_opin_q2_B">
                    <input type="radio" name="consent_opin_q2" id="consent_opin_q2_B" value="true">Disagree</label>
                    <label class="radio" for="consent_opin_q2_C">
                    <input type="radio" name="consent_opin_q2" id="consent_opin_q2_C" value="true">Undecided</label>
                    <label class="radio" for="consent_opin_q2_D">
                    <input type="radio" name="consent_opin_q2" id="consent_opin_q2_D" value="true">Agree</label> 
                    <label class="radio" for="consent_opin_q2_E">
                    <input type="radio" name="consent_opin_q2" id="consent_opin_q2_E" value="true">Strongly Agree</label>     

                <li> <label for="consent_opin_q3"><p><strong>It was hard to find information in this consent form</strong></p></label></li>
                    <label class="radio" for="consent_opin_q3_A">
                    <input type="radio" name="consent_opin_q3" id="consent_opin_q3_A" value="true">Strongly Disagree</label>
                    <label class="radio" for="consent_opin_q3_B">
                    <input type="radio" name="consent_opin_q3" id="consent_opin_q3_B" value="true">Disagree</label>
                    <label class="radio" for="consent_opin_q3_C">
                    <input type="radio" name="consent_opin_q3" id="consent_opin_q3_C" value="true">Undecided</label>
                    <label class="radio" for="consent_opin_q3_D">
                    <input type="radio" name="consent_opin_q3" id="consent_opin_q3_D" value="true">Agree</label> 
                    <label class="radio" for="consent_opin_q3_E">
                    <input type="radio" name="consent_opin_q3" id="consent_opin_q3_E" value="true">Strongly Agree</label>     
     
                <li> <label for="consent_opin_q4"><p><strong>Finding information in the HCIPGP consent form was a pleasurable experience.</strong></p></label></li>
                    <label class="radio" for="consent_opin_q4_A">
                    <input type="radio" name="consent_opin_q4" id="consent_opin_q4_A" value="true">Strongly Disagree</label>
                    <label class="radio" for="consent_opin_q4_B">
                    <input type="radio" name="consent_opin_q4" id="consent_opin_q4_B" value="true">Disagree</label>
                    <label class="radio" for="consent_opin_q4_C">
                    <input type="radio" name="consent_opin_q4" id="consent_opin_q4_C" value="true">Undecided</label>
                    <label class="radio" for="consent_opin_q4_D">
                    <input type="radio" name="consent_opin_q4" id="consent_opin_q4_D" value="true">Agree</label> 
                    <label class="radio" for="consent_opin_q4_E">
                    <input type="radio" name="consent_opin_q4" id="consent_opin_q4_E" value="true">Strongly Agree</label>     
         
                <li> <label for="consent_opin_q5"><p><strong>If all privacy policies looked just like this I would be more likely to read them</strong></p></label></li>
                    <label class="radio" for="consent_opin_q5_A">
                    <input type="radio" name="consent_opin_q5" id="consent_opin_q5_A" value="true">Strongly Disagree</label>
                    <label class="radio" for="consent_opin_q5_B">
                    <input type="radio" name="consent_opin_q5" id="consent_opin_q5_B" value="true">Disagree</label>
                    <label class="radio" for="consent_opin_q5_C">
                    <input type="radio" name="consent_opin_q5" id="consent_opin_q5_C" value="true">Undecided</label>
                    <label class="radio" for="consent_opin_q5_D">
                    <input type="radio" name="consent_opin_q5" id="consent_opin_q5_D" value="true">Agree</label> 
                    <label class="radio" for="consent_opin_q5_E">
                    <input type="radio" name="consent_opin_q5" id="consent_opin_q5_E" value="true">Strongly Agree</label>     
         		
         		<li> <label for="consent_opin_q6"><p><strong>If you were given this consent form with the ability to decide who to share your genomic data with, which of the following options would you choose?</strong></p></label></li>
                    <label class="radio" for="consent_opin_q6_A">
                    <input type="radio" name="consent_opin_q6" id="consent_opin_q6_A" value="true">I would be willing to share my information with HCIPGP researchers and the public in an online, open, anonymized genomic database.</label>
                    <label class="radio" for="consent_opin_q6_B">
                    <input type="radio" name="consent_opin_q6" id="consent_opin_q6_B" value="true">I would be willing to share my genomic information only with HCIPGP researchers in a secure, private database.</label>
                    <label class="radio" for="consent_opin_q6_C">
                    <input type="radio" name="consent_opin_q6" id="consent_opin_q6_C" value="true">I would want to receive my results but I wouldn't want to share my information with either researchers or the public.</label>
                    <label class="radio" for="consent_opin_q6_D">
                    <input type="radio" name="consent_opin_q6" id="consent_opin_q6_D" value="true">I would not want to participate in this study.</label> 
 
 				<li><label for="consent_opin_q7"><p><strong>Please describe what you liked about the consent form presented here:</strong></p></label></li>
                	<textarea name="consent_opin_q7" id="consent_opin_q7" cols="100" rows="5"></textarea>

                <li><label for="consent_opin_q8"><p><strong>Please describe what you liked <em>least</em> about the consent form presented here:</strong></p></label></li>
                	<textarea name="consent_opin_q8" id="consent_opin_q8" cols="100" rows="5"></textarea>


                 <li><label for="consent_opin_q9"><p><strong>Please rank the following risks between 1-12 where 1 is the risk you are <strong>most</strong> concerned about and 12 is the risk you are <strong>least</strong> concerned about.</strong></p></label></li>    
                     <table>
                        <tr><td id="unrankedColumnLabel"><i>Drag each item to the right column to rank</i></td><td id="rankColumnLabel">Ranking</td></tr>
                        <td>
                            <ol id="unranked_q9" class="connectedSortable">
                              <li class="ui-state-highlight">Ambiguous or erroneous data</li>
                              <li class="ui-state-highlight">Anxiety or stress due to discovery of disease risk</li>
                              <li class="ui-state-highlight">Carrier status</li>
                              <li class="ui-state-highlight">Cost and risks of clinical follow-up and care</li>
                              <li class="ui-state-highlight">Misinterpretation of genomic information</li>
                              <li class="ui-state-highlight">Unwanted ancestry discover</li>
                              <li class="ui-state-highlight">Unintended public disclosure</li>
                              <li class="ui-state-highlight">Unanticipated research topics</li>
                              <li class="ui-state-highlight">Identifiability</li>
                              <li class="ui-state-highlight">Genetic discrimination</li>
                              <li class="ui-state-highlight">Links to ongoing or unsolved criminal investigations</li>
                              <li class="ui-state-highlight">Loss of privacy</li>
                            </ol>
                        </td>
                        <td><ol id="ranked_q9" class="connectedSortable"></ol></td>
                    </table>

                    <p></p>
                  <li><label for="consent_opin_q10"><p><strong>Please rank the following benefits between 1-7 where 1 provides the <strong>greatest benefit</strong> and 7 provides the <strong>least</strong> benefit.</strong></p></label></li>   
                     <table>
                        <tr><td id="unrankedColumnLabel"><i>Drag each item to the right column to rank</i></td><td id="rankColumnLabel">Ranking</td></tr>
                        <td>
                            <ol id="unranked_q10" class="connectedSortable">
                              <li class="ui-state-highlight">Ancestry discovery</li>
                              <li class="ui-state-highlight">Carrier status</li>
                              <li class="ui-state-highlight">Education and awareness about genomic testing</li>
                              <li class="ui-state-highlight">Individual and family health</li>
                              <li class="ui-state-highlight">Plan for the future</li>
                              <li class="ui-state-highlight">Advance genetics, science, and health research</li>
                              <li class="ui-state-highlight">Reduce genetic discrimination</li>
                            </ol>
                        </td>
                        <td><ol id="ranked_q10" class="connectedSortable"></ol></td>
                    </table>
            </ol>

         		
            </ol>		
		
	</form>
	</div>

	</body>
</html>
