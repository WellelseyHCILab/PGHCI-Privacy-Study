<?php
    session_start();
    error_reporting(E_ERROR);

        $_SESSION['privacy_start_time'] = time(); //start timer
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
    <!--Wellesley HCI PGP Privacy Study
    Consent Form Task
    -->

<html>
	<head>
	 	<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1"> 
		<title>PGHCI: Consent Form Task</title>

		<link href="styles/bootswatch.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="styles/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
	    <script type="text/javascript" charset="utf8" src="../scripts/consentTask.js"></script>
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
        <script src="http://code.jquery.com/ui/1.11.1/jquery-ui.js"></script>

        <script src="scripts/accordionConsent.js"></script>

        <script src="http://assets.annotateit.org/annotator/v1.1.0/annotator-full.min.js"></script>
        <link rel="stylesheet" href="http://assets.annotateit.org/annotator/v1.1.0/annotator.min.css">
        <script type="text/javascript">
            $(function ($) {
                $('#study_wrapper').annotator();
            });
         </script>
    </head>

	<body>
	
	<div class="navbar navbar-fixed-top navbar-inverse">
	<div class="navbar-inner">
		<div class="container">
			<span class="brand"><img src="../assets/img/dna.png"> PGHCI: Consent Form Task</span><span class="brand" style="float:right;">Section 7/8</span>
		</div>
	</div>
	</div>
	
	<div class="container" id="study_wrapper">
	<h2>Consent Form Task</h2>
       
    <p>Below, you will find a consent form for having your genome mapped and sharing the information. The mapping of the genome results in a report in a similar format to Jamie's, which you studied on the previous page. Please read the consent form and answer the questions about the content. </p>

    <span style="color:#d40000"><p><strong>NOTE: This is not a real consent form. By clicking continue and answering the questions, you are NOT actually consenting to any testing or sharing of information; we are just interested in what people might do. </strong></p></span>

    <hr />

    <h1> HCIPGP Consent Form </h1>


    
        <h3>Overview</h3>
        <h4></h4>
        
            <p>The main scientific goal of the HCIPGP is to link participants' genomic data with trait data.  A trait is a physical or medical characteristic such as eye color or a diagnosis of high blood pressure.  Your genes control some of these traits.  The collection of all of your genes is called your genome.  As part of this project, we will obtain information about your genome and trait data, and store them in a private, anonymized, online database. Researchers at the HCIPGP project and our research partners and collaborators will use your data to link genes with diseases and traits.  Your information may also help scientists learn more about the history of humankind through our genetics.</p>
            <p>Participation in the HCIPGP study may help you to better understand your personal genomic data and may allow you to make more informed decisions about your health as well as your family's.  There are a number of risks and benefits involved in participating in this study that are explained in the remainder of this consent form. </p>
            <p>We hope that you consider participating in HCIPGP research.</p>
    
<div id="consent_accordion" class="container">
        
            <h3>1. How can I participate?</h3>
            <div>
                <p>Participation in this study involves (1) providing your trait data and genetic data to the HCIPGP private online database, and (2) consenting to the use of this data for research purposes.  Your data will be used indefinitely, unless you choose to withdraw from the study.</p>
                <p><i>Trait Data: </i>Trait data will be collected either by online survey, an interview, or both.  The survey will take approximately 1-3 hours.  The interview will take approximately an hour and may be conducted either in-person or remotely.  Upon completion of the survey, your data will be saved to the HCIPGP private online database.  The trait data that is collected may include, but is not limited to: date of birth, medications, vaccines, diseases, personal and familial medical history, race, ethnicity, vital signs, and lifestyle traits.</p>
                <p><i>Genetic Data: </i>You will be sent materials for an at-home saliva collection.  This kit is self-administered, and typically requires you to provide 2-4 milliliters of your saliva.  You will then send the saliva sample back to the laboratory in the prepaid package that is provided for you.  Your genome will then be sequenced and analyzed in the lab.  Your genomic data will be saved to the HCIPGP private online database and a copy of the results will be sent to you.</p>
                <input class="btn btn-primary submit-survey next" name="next" type="button" value="next" onclick="openNextAccordionPanel()">
            </div>

            <h3>2. Will I be compensated?</h3>
            <div>
                <p>You will not be compensated for your participation in the HCIPGP study.  In the event that your genetic data contributes to a discovery, neither you nor your family will receive any financial benefits.  You will also not be compensated for any lost time as a result of the HCIPGP study.</p>
                <input class="btn btn-primary submit-survey next" name="next" type="button" value="next" onclick="openNextAccordionPanel()">
            </div>

            <h3>3. How will my data be kept private?</h3>
            <div>
                <p>We have taken many measures to make sure that your data is kept confidential and private within the HCIPGP private online database.  Furthermore, researchers who conduct statistical analyses with your full genetic data will not have access to your name, address, or user ID.  On the other hand, researchers who may interview you will have access to your name and contact information; however, they will only have limited access to a small amount of your genetic information.  Only non-identifying information will be published in scientific journals.</p>
                <input class="btn btn-primary submit-survey next" name="next" type="button" value="next" onclick="openNextAccordionPanel()">
            </div>

            <h3>4. Who will have access to my data?</h3>
            <div>    
                <p>You will have access to your raw genomic data on an online, password-protected account.  Researchers at the HCIPGP project and our research partners and collaborators will have access to your anonymized genomic and trait data in a private, online database.  Your name, contact information, and other personal identifiers will not be associated with your genomic data in this database.  In the future, U.S. law enforcement agencies may also be able to audit or subpoena your genomic data, including data that identifies you, such as your name or contact information.</p>
                <input class="btn btn-primary submit-survey next" name="next" type="button" value="next" onclick="openNextAccordionPanel()">
            </div>

             <h3>5. How will my data be used in HCIPGP research?</h3>  
             <div>
                <p>Your anonymized genetic data may be accessed by HCIPGP researchers as well as other research partners and collaborators to study links between human genes, diseases, traits and other characteristics.  This research could be used to better understand the causes of human diseases.  It could also be used to develop better prevention, diagnosis, and treatment options for these diseases.  Such research may further lead to the possibility of treatments or cures that are specific to a patient’s genes.</p>
                <p>If you choose to participate in this study, you will not be able to decide what type of research your data will be used for.  However, you can withdraw your data completely from this study (see section 9 for more details on withdrawing your data).</p>
                <input class="btn btn-primary submit-survey next" name="next" type="button" value="next" onclick="openNextAccordionPanel()">
            </div>

            <h3>6. Can the data I receive from participating in the HCIPGP be used for medical purposes?</h3>   
            <div>
                <p>The data you receive from participating in the HCIPGP should not be used in place of professional medical advice, diagnosis, or treatment. This includes the raw genetic data and any interpretation of this data that you receive from the HCIPGP.  Sharing your genomic information with your doctor can help you make informed decisions about your health. </p>
                <input class="btn btn-primary submit-survey next" name="next" type="button" value="next" onclick="openNextAccordionPanel()">
            </div>

            <h3>7. What are the benefits of participation?</h3>   
            <div>
                <p>There are potential benefits to participating in the HCIPGP research study.  Please read each of the benefits carefully before deciding whether or not to participate.</p>
                <ul>
                    <li><p><strong><i>Advance Genomics, Science and Health Research</i></strong></p></li>
                        <p>The more genomic data researchers have, the better they are able to make discoveries about genes and their connections to diseases.  These discoveries may lead to better prevention and screening options for various diseases. These discoveries may also lead to the possibility of treatments or cures that are specific to a patient's genes.  Such advances would allow medical professionals to better determine the most effective treatment or cure for each individual patient.</p>
                    <li><p><strong><i>Ancestry Discovery</i></strong></p></li>
                        <p>If you combine your genomic information with other resources (for example an ancestry website), you or those with whom you share the data may discover relatives you were previously unaware of. The discovery of new family members or learning more about your lineage and ancestry could be an exciting process for you and your family.</p>
                    <li><p><strong><i>Carrier Status</i></strong></p></li>
                        <p>Gene variants can be linked to diseases such as breast cancer, sickle cell anemia, or Tay-Sachs disease. You may learn that you carry a gene variant that may be either advantageous or disadvantageous to you and/or your biological children. These gene variants may be transmitted to your biological children, and you or your children may therefore choose to seek preventative action or additional genomic counseling.</p>
                     <li><p><strong><i>Individual &amp Family Health</i></strong></p></li>
                        <p>You and your family members share many of the same genes.  Because of this, what you learn about your own health from your personal genome may be applicable to your biological family members.  This may include information about your risk of developing a disease or the effectiveness of certain medications for you.  This information, along with information about preventative measures for particular diseases (for example: cancer screenings, diet, etc.), may also be beneficial for your family members.</p>
                    <li><p><strong><i>Education and Awareness about Genomic Testing</i></strong></p></li>    
                        <p>By sharing your experiences with genomic testing, you may spark conversations on the topic of personal genomics (for example: the process, the cost, etc.).  By having these conversations, those around you may become more aware of the benefits and risks of genomic testing.  Furthermore, increasing awareness about genomic testing will make the practice more mainstream.</p> 
                     <li><p><strong><i>Plan for the Future</i></strong></p></li>
                        <p>By learning more about your risk of developing certain diseases (for example Alzheimer's disease, cancer) you and those with whom you share this information will be able to better plan for the future.  You or a family member may need to take preventative measures or plan for an increased need for care in the future.  The ability to predict this ahead of time may be beneficial to you and your family.</p>  
                    <li><p><strong><i>Reduce genetic discrimination</i></strong></p></li> 
                        <p>Current state and federal regulations protect individuals from employment and insurance discrimination based on their genomic information. One existing law is the Genetic Information Nondiscrimination Act (GINA). As more people get genomic testing and share their genomic data, the need and pressure to strengthen such laws grows. </p> 
                        <p>For genetic rights currently addressed by the GINA act, see <a href="http://www.eeoc.gov/laws/types/genetic.cfm" target="_blank">http://www.eeoc.gov/laws/types/genetic.cfm</a></p>   
                </ul>
                <input class="btn btn-primary submit-survey next" name="next" type="button" value="next" onclick="openNextAccordionPanel()">
            </div>

            <h3>8. What are the risks of participating?</h3>
            <div>
                <p>There are some potential risks to participating in the HCIPGP research study.  Please read each of the risks carefully before deciding whether or not to participate.</p> 
                <ul>
                    <li><p><strong><i>Ambiguous or Erroneous Data</i></strong></p></li> 
                        <p>The quality of your genomic analysis and the interpretation of your results are subject to human error.  An example of such an error in interpretation is the false association of a disease with a specific gene variant. Furthermore, the ability to sequence the human genome is relatively new.  The connection between human genes and human traits is not fully understood.  Therefore, much of the data currently available regarding the human genome and how it affects us is ambiguous and inconclusive. This may result in misplaced concern or stress about erroneous or incomplete data.</p>
                    <li><p><strong><i>Anxiety or Stress due to Discovery of Disease Risk</i></strong></p></li>
                        <p>You may learn that you or a family member is at increased risk of developing a disease or other trait.  This may cause anxiety or stress to you or those with whom you share this information.</p>
                    <li><p><strong><i>Carrier Status</i></strong></p></li>   
                        <p>You may learn that you carry a gene variant that may be disadvantageous to your biological children.  These gene variants may be transmitted to your biological children, and may cause you and/or your children to experience stress and anxiety.  You, your partner, and/or your children may want to seek further genetic counseling.</p>
                    <li><p><strong><i>Cost and Risks of Clinical Follow-Up and Care</i></strong></p></li> 
                        <p>If you choose to discuss your genomic information with your doctor or a qualified healthcare provider, you may decide that a change in your health care is necessary or advisable.  You may also decide that a pre-emptive or preventive change in lifestyle (for example changes in diet or exercise) is necessary.  These clinical follow-ups and lifestyle changes have their own associated risks and expenses.  You should carefully consider these risks, as well as whether you have the financial and other resources necessary to pursue such health care and interventions.</p> 
                    <li><p><strong><i>Misinterpretation of Genomic Information</i></strong></p></li>
                        <p>Personal Genomics is a very complicated topic, and the field of personal genomics is still very new.  It is easy to misinterpret genomic data.  You and those with whom you share this data may interpret it in a way that is misleading or inaccurate.</p>  
                    <li><p><strong><i>Unwanted Ancestry Discovery</i></strong></p></li>    
                        <p>You or those with whom you share your data may combine your genomic data with the services of an ancestry website. This may show that your relationships with family members or other individuals are different than you had previously believed.  These include non-paternity, paternity, relatedness to criminals or other notorious figures or groups.  Combining your genomic data with an ancestry service could also show that your ancestral or cultural origins are different than you had previously believed.</p>
                    <li><p><strong><i>Unintended Public Disclosure</i></strong></p></li>   
                        <p>Although steps are taken to safeguard the confidentiality of your information within the HCIPGP database, there is always the possibility of unintended public disclosure.  This includes your name, trait data, and genomic data.  Unintended public disclosure could be a result of unintentional mistakes in handling data, or deliberate attempts to access your data illegally (for example through hacking).  There may also be the unanticipated risk of public disclosure if you share your data with others.</p>
                    <li><p><strong><i>Unanticipated research topics</i></strong></p></li>
                        <p>After contributing your genomic data, the HCIPGP and research partners and collaborators will be able to use your genomic data for any research purposes in line with the stated goals of the HCIPGP project.   This research will be regulated by an institutional review board (IRB) to ensure ethical practices.   You may, however, have a personal issue with the objectives of individual research projects.</p>    
                    <li><p><strong><i>Identifiability</i></strong></p></li> 
                        <p>Your name will not be associated with your genomic data if shared with researchers or in the private database. However, your genomic information is unique to you and is therefore identifiable as your own.  Some of your trait information may also be identifiable as your own.  Though it is unlikely, it may be possible that one or more third parties to identify you based on this data.  Identification may result in the loss of privacy.</p>
                    <li><p><strong><i>Links to Ongoing or Unsolved Criminal Investigations</i></strong></p></li> 
                        <p>In the future, U.S. law enforcement agencies may be able to audit or subpoena genomic data, including data that identifies you, such as your name or contact information.  Your genomic data could be used to correctly or incorrectly link you and/or your relatives with ongoing or unsolved criminal investigations on the basis of your publicly available genetic data.</p>
                    <li><p><strong><i>Genetic discrimination</i></strong></p></li> 
                        <p>Though unlikely, your data may be accessed and linked to you through legal or illegal means.  This may result in genetic discrimination that could affect you or your family's ability to get or maintain life insurance, disability insurance, and/or long term care insurance.  The Genetic Information Nondiscrimination Act (GINA) prevents genetic discrimination in the context of health insurance and employment, however life insurance, disability insurance, and long term care insurance are not currently protected by GINA</p>       
                </ul>
                <input class="btn btn-primary submit-survey next" name="next" type="button" value="next" onclick="openNextAccordionPanel()">
            </div>

            <h3>9. Can I withdraw my data from HCIPGP research?</h3>
            <div>
                <p>You may withdraw your data from the HCIPGP research at any time.  However, if your data has already been used in a study, it cannot be withdrawn from the study.</p>
                <input class="btn btn-primary submit-survey next" name="next" type="button" value="next" onclick="openNextAccordionPanel()">
            </div>

            <h3>10. Who can I contact if I have questions?</h3> 
            <div>
                <p>If you have any questions or concerns about the HCIPGP study, please contact us at hcilab@wellesley.edu</p>
                <input class="btn btn-primary submit-survey next" name="next" type="button" value="next" onclick="openNextAccordionPanel()">
            </div>

            <h3>11. CONSENT</h3>
            <div> 
                <p>I have read this consent form.  All my questions about the study and my part in it have been answered.  I freely consent to be in this research study.</p>
                <p>I have not given up any of my legal rights.</p>
                <p>I authorize the use and disclosure of my health information to the parties listed in the authorization</p>
            


        <form action="consent_process.php" onsubmit="return validateForm_consent()" method="post" id="consent_q">
                
            <label for="consent_q1"></label>
            <label class="radio" for="consent_q1_A">
                <input type="radio" name="consent_q1" id="consent_q1_A" value="consent"><strong>I authorize the use and disclosure of my health information to the parties listed in the
                authorization.</strong> </label>
            <label class="radio" for="consent_q1_B">
                <input type="radio" name="consent_q1" id="consent_q1_B" value="do not consent"><strong>I decline to participate in this study</strong>
            </label>

            <hr />

            <label for="consent_q2">Please describe why you would or would not choose to participate in this study.</label>
                <textarea name="consent_q2" id="consent_q2" cols="80" rows="5"></textarea>
            </div>
            </div>
            <div class="container" id="compQuestions"></div>
            <hr />
             <div class="container" id="opinQuestions"></div>

            <input class="btn btn-primary submit-survey" type="submit" name="Submit" value="Continue" id="Submit_ConsentTask">
        </form>

        <div class="alert alert-block" id='validate_msg'></div>
	</div>
		
	</body>
</html>
