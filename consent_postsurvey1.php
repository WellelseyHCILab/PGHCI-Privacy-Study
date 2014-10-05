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
		
            <h3>Comprehension Questions</h3> 
            <ol>
                <li> <label for="consent_comp_q1"><p><strong>True or False: In the future, you can withdraw your data from studies that have already used it.</strong></p></label></li>
                    <label class="radio" for="consent_comp_q1_A">
                    <input type="radio" name="consent_comp_q1" id="consent_comp_q1_A" value="true">True</label>
                    <label class="radio" for="consent_comp_q1_B">
                    <input type="radio" name="consent_comp_q1" id="consent_comp_q1_B" value="true">False</label>

                <li> <label for="consent_comp_q2"><p><strong>True or False:  Your data can be combined with the services of an ancestry website to discover unexpected or unknown genealogical features about you and/or your family.</strong></p></label></li>
                    <label class="radio" for="consent_comp_q2_A">
                    <input type="radio" name="consent_comp_q2" id="consent_comp_q2_A" value="true">True</label>
                    <label class="radio" for="consent_comp_q2_C">
                    <input type="radio" name="consent_comp_q2" id="consent_comp_q2_C" value="true">False</label>

                 <li> <label for="consent_comp_q3"><p><strong>If you provide your genetic and trait data to the HCIPGP study, which of the following people will have access to your data? Check all that apply.</storng></p></label></li>
                    <label class="checkbox" for="consent_comp_q3_A">
                    <input type="checkbox" name="consent_comp_q3" id="consent_comp_q3_A" value="true">You</label>
                    <label class="checkbox" for="consent_comp_q3_B">
                    <input type="checkbox" name="consent_comp_q3" id="consent_comp_q3_B" value="true">Anyone with access to the Internet</label>
                    <label class="checkbox" for="consent_comp_q3_C">
                    <input type="checkbox" name="consent_comp_q3" id="consent_comp_q3_C" value="true">Your Doctor</label>  
                    <label class="checkbox" for="consent_comp_q3_D">
                    <input type="checkbox" name="consent_comp_q3" id="consent_comp_q5_D" value="true">HCIPGP researchers</label>        
                
                <li> <label for="consent_comp_q4"><p><strong>Which of the following does <em>not</em> constitute a potential benefit of participation? Check all that apply:</strong></p></label></li>
                    <label class="checkbox" for="consent_comp_q4_A">
                    <input type="checkbox" name="consent_comp_q4" id="consent_comp_q4_A" value="true">Compensation for patents, copyrights, and trademarks that may arise from the results of this study</label>
                    <label class="checkbox" for="consent_comp_q4_B">
                    <input type="checkbox" name="consent_comp_q4" id="consent_comp_q4_B" value="true">Increases is scientific knowledge</label>
                    <label class="checkbox" for="consent_comp_q4_C">
                    <input type="checkbox" name="consent_comp_q4" id="consent_comp_q4_C" value="true">The development of new drugs</label>  
                    <label class="checkbox" for="consent_comp_q4_D">
                    <input type="checkbox" name="consent_comp_q4" id="consent_comp_q4_D" value="true">Direct acknowledgement in scientific journals</label>        
            
                <li> <label for="consent_comp_q5"><p><strong>True or false: A copy of your genetic data is sent to and stored at your doctor's office?</strong></p></label></li>
                    <label class="radio" for="consent_comp_q5_A">
                    <input type="radio" name="consent_comp_q5" id="consent_comp_q5_A" value="true">True</label>
                    <label class="radio" for="consent_comp_q5_B">
                    <input type="radio" name="consent_comp_q5" id="consent_comp_q5_B" value="true">False</label>

                 <li> <label for="consent_comp_q6"><p><strong>All data may be analyzed in research <em>except</em> which of the following? Check all that apply:</strong></p></label></li>
                    <label class="checkbox" for="consent_comp_q6_A">
                    <input type="checkbox" name="consent_comp_q6" id="consent_comp_q6_A" value="true">Gender</label>
                    <label class="checkbox" for="consent_comp_q6_B">
                    <input type="checkbox" name="consent_comp_q6" id="consent_comp_q6_B" value="true">Name</label>
                    <label class="checkbox" for="consent_comp_q6_C">
                    <input type="checkbox" name="consent_comp_q6" id="consent_comp_q6_C" value="true">Contact Information</label>  
                    <label class="checkbox" for="consent_comp_q6_D">
                    <input type="checkbox" name="consent_comp_q6" id="consent_comp_q6_D" value="true">Ethnicity</label>        
                    <label class="checkbox" for="consent_comp_q6_E">
                    <input type="checkbox" name="consent_comp_q6" id="consent_comp_q6_E" value="true">Education</label>

                <li> <label for="consent_comp_q7"><p><strong>Will your name be associated with your genetic material?</strong></p></label></li>
                    <label class="radio" for="consent_comp_q7_A">
                    <input type="radio" name="consent_comp_q7" id="consent_comp_q7_A" value="true">Only to researchers</label>
                    <label class="radio" for="consent_comp_q7_B">
                    <input type="radio" name="consent_comp_q7" id="consent_comp_q7_B" value="true">Only if discoveries are made using my genetic material</label>
                    <label class="radio" for="consent_comp_q7_C">
                    <input type="radio" name="consent_comp_q7" id="consent_comp_q7_C" value="true">Never</label>  
                    <label class="radio" for="consent_comp_q7_D">
                    <input type="radio" name="consent_comp_q7" id="consent_comp_q7_D" value="true">both a and b</label>            

                <li> <label for="consent_comp_q8"><p><strong>Researchers who interact with and interview participants have access to:</strong></p></label></li>
                    <label class="radio" for="consent_comp_q8_A">
                    <input type="radio" name="consent_comp_q8" id="consent_comp_q8_A" value="true">All genetic information of the participant</label>
                    <label class="radio" for="consent_comp_q8_B">
                    <input type="radio" name="consent_comp_q8" id="consent_comp_q8_B" value="true">Some genetic information of the participant</label>
                    <label class="radio" for="consent_comp_q8_C">
                    <input type="radio" name="consent_comp_q8" id="consent_comp_q8_C" value="true">Very limited genetic information of the participant</label>  
                    <label class="radio" for="consent_comp_q8_D">
                    <input type="radio" name="consent_comp_q8" id="consent_comp_q8_D" value="true">No genetic information of the participant</label>            

                <li> <label for="consent_comp_q9"><p><strong>True or false: In the event of a security breach, perpetrators may be able to identify your family members from your stolen data.</strong></p></label></li>
                    <label class="radio" for="consent_comp_q9_A">
                    <input type="radio" name="consent_comp_q9" id="consent_comp_q9_A" value="true">True</label>
                    <label class="radio" for="consent_comp_q9_B">
                    <input type="radio" name="consent_comp_q9" id="consent_comp_q9_B" value="true">False</label>

                <li> <label for="consent_comp_q10"><p><strong>In the event that your data is used for publication in a scientific journal, researchers will take the following precautions to keep your data private (check all that apply)</strong></p></label></li>
                    <label class="checkbox" for="consent_comp_q10_A">
                    <input type="checkbox" name="consent_comp_q10" id="consent_comp_q10_A" value="true">Provide a pseudonym</label>
                    <label class="checkbox" for="consent_comp_q10_B">
                    <input type="checkbox" name="consent_comp_q10" id="consent_comp_q10_B" value="true">Only use limited, non-identifying information about you</label>
                    <label class="checkbox" for="consent_comp_q10_C">
                    <input type="checkbox" name="consent_comp_q10" id="consent_comp_q10_C" value="true">Researchers are not permitted to publish papers using my data</label>  
                    <label class="checkbox" for="consent_comp_q10_D">
                    <input type="checkbox" name="consent_comp_q10" id="consent_comp_q10_D" value="true">Researchers will ask your permission first</label>       
    
                <li> <label for="consent_comp_q11"><p><strong>How will genetic data be collected for the HCIPGP study?</strong></p></label></li>
                    <label class="radio" for="consent_comp_q11_A">
                    <input type="radio" name="consent_comp_q11" id="consent_comp_q11_A" value="true">blood sample</label>
                    <label class="radio" for="consent_comp_q11_B">
                    <input type="radio" name="consent_comp_q11" id="consent_comp_q11_B" value="true">hair sample</label>
                    <label class="radio" for="consent_comp_q11_C">
                    <input type="radio" name="consent_comp_q11" id="consent_comp_q11_C" value="true">saliva sample</label>  
                    <label class="radio" for="consent_comp_q11_D">
                    <input type="radio" name="consent_comp_q11" id="consent_comp_q11_D" value="true">skin sample</label>            
    
                <li> <label for="consent_comp_q12"><p><strong>Which of the following may result in the unintended public disclosure of your genetic information? (check all that apply)</strong></p></label></li>
                    <label class="checkbox" for="consent_comp_q12_A">
                    <input type="checkbox" name="consent_comp_q12" id="consent_comp_q12_A" value="true">Publication of your data in scientific journals</label>
                    <label class="checkbox" for="consent_comp_q12_B">
                    <input type="checkbox" name="consent_comp_q12" id="consent_comp_q12_B" value="true">Illegal hacking into the database that stores your genetic data</label>
                    <label class="checkbox" for="consent_comp_q12_C">
                    <input type="checkbox" name="consent_comp_q12" id="consent_comp_q12_C" value="true">Submitting your data to an ancestry website</label>  
                    <label class="checkbox" for="consent_comp_q12_D">
                    <input type="checkbox" name="consent_comp_q12" id="consent_comp_q12_D" value="true">None of the above</label>       
                
                <li> <label for="consent_comp_q13"><p><strong>True or False: Your medical insurance company has access to your genetic or trait data that you provide to the HCIPGP study.</strong></p></label></li>
                    <label class="radio" for="consent_comp_q13_A">
                    <input type="radio" name="consent_comp_q13" id="consent_comp_q13_A" value="true">True</label>
                    <label class="radio" for="consent_comp_q13_B">
                    <input type="radio" name="consent_comp_q13" id="consent_comp_q13_B" value="true">False</label>
        
                <li> <label for="consent_comp_q14"><p><strong>Which of the following are potential risks of your participating in this study? Check all that apply</strong></p></label></li>
                    <label class="checkbox" for="consent_comp_q14_A">
                    <input type="checkbox" name="consent_comp_q14" id="consent_comp_q14_A" value="true">Discovering that you are related to a criminal</label>
                    <label class="checkbox" for="consent_comp_q14_B">
                    <input type="checkbox" name="consent_comp_q13" id="consent_comp_q14_B" value="true">Discovering that your child has an increased risk of developing a disease</label>
                    <label class="checkbox" for="consent_comp_q14_C">
                    <input type="checkbox" name="consent_comp_q13" id="consent_comp_q14_C" value="true">Misinterpretation of results</label>  
                    <label class="checkbox" for="consent_comp_q14_D">
                    <input type="checkbox" name="consent_comp_q13" id="consent_comp_q14_D" value="true">Employment, financial, or insurance discrimination</label>       
                   
                <li> <label for="consent_comp_q15"><p><strong>True or False: If you participate in the HCIPGP Phase 2 study and learn from your genetic data that you need increased medical care, the study will cover the cost of clinical follow-ups.</strong></p></label></li>
                    <label class="radio" for="consent_comp_q15_A">
                    <input type="radio" name="consent_comp_q15" id="consent_comp_q15_A" value="true">True</label>
                    <label class="radio" for="consent_comp_q15_B">
                    <input type="radio" name="consent_comp_q15" id="consent_comp_q15_B" value="true">False</label>
        

            </ol>		
		
	</form>
	</div>

	</body>
</html>
