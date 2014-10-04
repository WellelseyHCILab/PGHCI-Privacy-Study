<!--
Joanna Bi
Wellesley HCI PGP
SUMMER 2014
-->

<?php
session_start();
require_once('pgp_functions.php');
$dbh;
localConn(); //establish connection

$uid = new_user(); // helper function from pgp_function.php
$_SESSION["user"] = $uid;

$_SESSION['pretask_start_time'] = time(); //start timer

/* THIS IS SHIT RIGHT NOW FIX THIS LATER
// Check if new user or if user clicked 'back'
if (!isset($SESSION['user'])) {
  $uid = new_user(); // helper function from pgp_function.php
} else {
  $uid = $_SESSION['user'];
}
$_SESSION["user"] = $uid;

// Check if pretask row for user already exist
$getUser = fetch_row(find_user($uid));
$pretaskID = $getUser['pretask_id'];
if ($pretaskID!= null) {
  $query = "SELECT * FROM NEW_PRETASK WHERE pretask_id = $pretaskID";
  $result = query($dbh, $query);
  $ LOLOL IDK WHAT I'M DOING*/

?>

<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *  
	 *  BEGIN HTML CODE
	 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * -->

<!doctype html>
<html lang='en'>
<head>
	<meta charset='utf-8'>
        <meta name=author content="Joanna Bi">
 	<title>PGHCI: Training</title>
	
        <!--jQuery & vis.js-->
	<script type="text/javascript" charset="utf8" src="scripts/jquery/jquery-1.10.2.js"></script>
	<script type="text/javascript" charset="utf8" src="scripts/vis.js"></script>
	
	<!-- jQuery UI -->
	<link rel="stylesheet" type="text/css" href="scripts/jquery/jquery-ui-1.10.4.custom/css/smoothness/jquery-ui-1.10.4.custom.css" rel="stylesheet">
        <script type="text/javascript" charset="utf8" src="scripts/jquery/jquery-ui-1.10.4.custom.js"></script>
  	
        <link rel="stylesheet" href="styles/bootswatch.css">
  	<link rel="stylesheet" type="text/css" href="styles/style.css">

	<script>
		$(function(){
			// Validate form
			var submit_id = $("#submit_pretask");
			var form_id = $("#pretask");
			var validateWarning = $("#validate_msg");				
			validateForm_vis(submit_id,form_id,validateWarning);
		});
	</script>

</head>

<body>

<div class="navbar navbar-fixed-top navbar-inverse">
    <div class="navbar-inner">
       	<div class="container">
       		<span class="brand"><img src="assets/img/dna.png"> PGHCI: Training</span>
        </div>
    </div>
</div>

<div class="container" id="study_wrapper">
	<!---<p>Please read over the following information carefully. Then complete the quiz below.</p>-->
	<h2>Instructions</h2>
	<p>Please read the following explanations carefully. Afterwards, you will be asked questions about this information. Please feel free to <strong>revisit this information</strong> while answering the questions.</p>
	<h2>What is a genome?</h2>
	<p>Your genome contains the set of instructions needed to make every cell, tissue, and organ in your body.
	The biological information contained in a genome is encoded in <strong>DNA</strong> (deoxyribonucleic acid) and
	divided into discrete units known as <strong>genes</strong>.</p>

	<p>All humans have the same set of genes and our genomes are over 99% identical.
	 We can trace the differences we observe between people to slight variations in 
	 these genes. A <strong>gene variant</strong> is a specific form of a gene that a person 
	 carries as determined by its DNA sequence. For example, the major blood types 
	 are AB, A, B, and O. A person's blood type is determined by a certain gene variant 
	 called ABO) that they carry. Particular gene variants may be associated with medical
	  conditions. These gene variants that are associated with diseases may affect you 
	  or one of your biological children.  If you carry a gene for a disease, but do not 
	  show the symptoms of it, you are considered a carrier.  Finding out your <strong>carrier status</strong>
	   may help you to determine whether or not you and your partner will pass on a trait
	    to your children.  <strong>Allele frequency</strong> (frequency in population) is a measure
	     of how common a particular variant is in the population. The more common a gene 
	     variant is, the less likely it is to be cause for serious concern.<p>

	<p>Our DNA alone, however, does not determine who we are. Personal behaviors, 
	access to quality health care, the general external environmental conditions 
	(such as the quality of air, water, and housing), as well as social and cultural 
	ctors all have an impact on our health.</p>


	<h2>What is personal genomics?</h2>
	<p>Personal genomics information is generated by reading and analyzing all or parts of the DNA in an individual's genome. Some genes code for traits that we can observe, such as height, and hair and eye color. Other
	genes may affect us in less obvious ways, such as the genes that predispose individuals to Type 2 Diabetes.</p>

	<p>Cutting edge scientific technologies are quickly making it faster and less 
	expensive to learn about our own DNA. Today, direct-to-consumer (DTC) test are 
	available to consumers. Such tests require only a small biological sample to 
	report information that might be predicted by the sequence of your DNA. Such 
	tests usually involve collecting a DNA sample at home, often by swabbing the 
	inside of the cheek, and mailing the sample back to the laboratory. In some 
	cases, the person must visit a health clinic to have blood drawn.</p>

	<p>Amongst other applications, <b>personal genomics may be used to</b>:
	<ul><li>Calculate your risk for developing particular health conditions</li>
		<li>Determine how particular drugs may work for you</li>
		<li>Explore your ancestry and family history</li>
	</ul></p>

	<!-- BEGIN QUIZ QUESTIONS -->

	<h2>Questions about personal genomics</h2>
	<form id="pretask" method="POST" action="v1.php">
	<!-- INCLUDE FORWARD / BACK BUTTONS LATER -->

	<ol><li><b>True or False: Your genes determine everything about you and your future.</b><br>
			<label><input type="radio" name="q1" value="true">True</label>
			<label><input type="radio" name="q1" value="false">False</label>

		<li><b>Pick any 2 people in the world. What percentage of their DNA sequence is the same?</b><br>
			<label><input type="radio" name="q2" value="10">About 10%</label>
			<label><input type="radio" name="q2" value="50">About 50%</label>
			<label><input type="radio" name="q2" value="99">Greater than 99%</label>

		<li><b>True or False: Someone who is a genetic “carrier” of a disease will not show the symptoms of the disease, however their child may inherit this disease.</b><br>
			<label><input type="radio" name="q3" value="true">True</label>
			<label><input type="radio" name="q3" value="false">False</label>

		<li><b>True or False: The higher the allele frequency is, the more common a variant is in the population.</b><br>
			<label><input type="radio" name="q4" value="true">True</label>
			<label><input type="radio" name="q4" value="false">False</label>

		<li><b>True or false: To get a report about your personal genome, you would need to provide a laboratory
			with a biological sample (e.g., a saliva or blood sample).</b><br>
			<label><input type="radio" name="q5" value="true">True</label>
			<label><input type="radio" name="q5" value="false">False</label>

		<li><b>True or False: Your genes could influence how certain drugs may work for you.</b><br>
			<label><input type="radio" name="q6" value="true">True</label>
			<label><input type="radio" name="q6" value="false">False</label>
	</ol>
	
	<p><input class="btn btn-primary submit-survey" type="submit" name="Submit" value="Continue" id="submit_pretask"></p> 
	</form>
</div>
<div class="alert alert-block" id='validate_msg'></div>

</body>
</html>
