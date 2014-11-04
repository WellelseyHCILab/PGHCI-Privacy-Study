<?php
	session_start();
	$_SESSION["vis"] = "table";
	error_reporting(E_ERROR);

        $_SESSION['vis_start_time'] = time(); //start timer
?>


<!DOCTYPE>
<html>
	<head>
		<title>Personal Genomic Tutorial</title>
		<!--Google TreeMap API-->
		<script type="text/javascript" src="http://www.google.com/jsapi"></script>

		<!--jQuery & vis.js-->
		<script type="text/javascript" charset="utf8" src="scripts/jquery/jquery-1.10.2.js"></script>
		<script type="text/javascript" charset="utf8" src="scripts/vis.js"></script>

		<!-- jQuery UI -->
		<link rel="stylesheet" type="text/css" href="scripts/jquery/jquery-ui-1.10.4.custom.css" rel="stylesheet">
		<script type="text/javascript" charset="utf8" src="scripts/jquery/jquery-ui-1.10.4.custom.js"></script>

		<link href="styles/bootswatch.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="styles/style.css">

		<!-- Adding these to see if they fix the table -->
 		<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.0/css/jquery.dataTables.css">
 		<script type="text/javascript" src="//cdn.datatables.net/1.10.0/js/jquery.dataTables.js"></script>
 		<!-- Might be necessary for accordion -->
 		<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  		<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

 		<script>
		  $(function() {
		    $( "#accordion" ).accordion({
		      collapsible: true,
		      active: false
		    });
		  });
		</script>
		<style type="text/css">
			#jamieTable {
			    margin: auto;
			    width: 90%;
			  }
		</style>

	</head>
	<body>
		<div class="navbar navbar-fixed-top navbar-inverse">
			<div class="navbar-inner">
				<div class="container">
					<span class="brand"><img src="assets/img/dna.png"> Personal Genomic Tutorial</span><span class="brand" style="float:right;">Section 6/8</span>
				</div>
			</div>
		</div>
		
		<div class="container" id="study_wrapper">
		<h2>Personal Genomic Tutorial</h2>
			<h2>Instructions</h2>
			<p>Please read the following explanations carefully. Afterwards, you will be asked questions about this information. Please feel free to <strong>revisit this information</strong> while answering the questions.</p>
			<h2>What kind of information does genetic testing provide?</h2>
			<p>Below is a section of a report that is based on an individual's personal genomic information. For the purpose of this study we will call this individual Jamie.
			The report was created by comparing Jamie's genome to a database of gene variants that are known to be associated with medical conditions. Only gene variants that are found to be medically relevant are reported.</p>
			
			<p>This report may contain confusing or unfamiliar words. If you encounter a word you are unsure of, please consult the <strong>Glossary of Terms</strong>.</p>
			<div id="accordion" class="container">
				<h3>Glossary of Terms</h3>
				<div>
					 <p><strong>Potential Effect:</strong></p>
					 <p>The potential effect of a gene variant describes how it may influence a person's chances of developing a disease or what medication may work best for them.  A variant can be:
					 <ul>
					 <li><strong>pathogenic</strong> (causes disease)</li>
					 <li><strong>protective</strong> (prevents disease)</li>
					 <li><strong>pharmacogenetic</strong> (influences the effect of a medication)</li>
					 <li><strong>benign</strong> (not associated to a disease).</p></li>
					 </ul>
					  <p><strong>Clinical Importance</strong></p>
					<p>Clinical Importance is based on three different variables. <strong>Severity, treatability</strong> and <strong> penetrance</strong>
					 of the disease associated with the variant. The higher the clinical importance score, the more important it is to discuss with a medical professional.</p>
					 <ul>
					 	<li><strong>Severity:</strong> How severe the disease caused by a variant is, if left untreated. For protective variants this is the severity of the disease the variant <em>protects</em> against, and for pharmacogenetic variants it is the severity
					 	 of consequences if the variant was not considered when administering a drug.</li>
					 	 <li><strong>Treatability:</strong> How treatable the disease caused by the variant is. A higher score indicates a more treatable effect. Variants which could be treated are considered to have higher clinical importance.</li>
					 	 <li><strong>Penetrance:</strong> How often individuals carrying the variant develop the associated disease. A variant with a higher penetrance means that a person with this variant is more likely to develop the associated disease.  (Note: These scores are considered irrelevant for 
					 	 	"benign" variants. Benign variants includes those which affect traits not considered to be medical/health issues, e.g. eye color.)</li>
					 </ul>
					  <p><strong>Carrier Status</strong></p>
					  <p>Carrier Status is important in determining the gene variant’s effect.  Each person inherits two variants of each gene, one from their biological father and one from their biological mother.  A variant is classified as homozygous or heterozygous, and  dominant, recessive, or other.</p>
					  <ul>
					  	<li><strong>Homozygous:</strong> the two variants of the gene are the same</li>
					  	<li><strong>Heterozygous:</strong> the two variants of the gene are different (the person has two different variants)</li>
					  	<li><strong>Compound Heterozygous:</strong> the variants of two different genes work together to create the same effect as being homozygous for one of the genes.</li>
					  	<li><strong>Dominant:</strong> dominant variants are expected to have the reported impact when just one copy is inherited (heterozygous)</li>
					  	<li><strong>Recessive:</strong> recessive variants are not expected to have the reported impact unless homozygous or compound heterozygous.</li>
					  	<li><strong>Other:</strong> variants defined as "other" encompasses various possibilities. Some variants have a strong effect when homozygous and a weaker effect when 
					  		heterozygous, or others only seem to have an effect on traits when another variant is also present.</li>
					  </ul>
					  <p><strong>Frequency in Population</strong></p>
					  <p>Frequency in population, also known as Allele Frequency, describes the percentage of the population that has this genetic variant.  The smaller the frequency, the less common it is among the population and the more interesting it is to a healthcare professional.</p>
					  <p>Adapted From:</p>
					  <p>"GET- Evidence: Guide to Reading Variant Reports." <a href="http://evidence.pgp-hms.org/about">evidence.pgp-hms.org</a>, accessed June 23, 2014.<a href="http://evidence.pgp-hms.org/guide_reading_variant_reports">http://evidence.pgp-hms.org/guide_reading_variant_reports</a>.</p>
				</div>
			</div> <!-- end glossary accordion-->
			<hr />
			<h2>Jamie's Results</h2>

		 
		</div>
		<div id="jamieTable"><img src="JamieTable-callouts.png"></div>

		<hr />
		<div class="container" id="questions">
			<form action="vis_process.php" method="post" id="v1_q">
			<ol>	
				<li><label for="v1_q1"><strong>The number of variants with high clinical importance:</strong></label></li>
				<input type="text" name="v1_q1" id="v1_q1">
		
				<li><label for="v1_q2"><strong>A variant's "potential effect" describes:</strong></label></li>
				<label class="radio" for="v1_q2_A">
					<input type="radio" name="v1_q2" id="v1_q2_A" value="A">How treatable the disease caused by the variant is
				</label>
				<label class="radio" for="v1_q2_B">
					<input type="radio" name="v1_q2" id="v1_q2_B" value="B" >How a variant may influence a person’s chances of developing a disease
				</label>
				<label class="radio" for="v1_q2_C">
					<input type="radio" name="v1_q2" id="v1_q2_C" value="C" >How often individuals carrying the variant develop the associated disease
				</label>
				<label class="radio" for="v1_q2_D">
					<input type="radio" name="v1_q2" id="v1_q2_D" value="D" >The percentage of the population that has this genetic variant
				</label>

				<li><label for="v1_q3"><strong>True or False: If a pathogenic gene is found, Jamie will develop the disease with 100% certainty:</strong></label></li>
				<label class="radio" for="v1_q3_A">
					<input type="radio" name="v1_q3" id="v1_q3_A" value="true">True
				</label>
				<label class="radio" for="v1_q3_B">
					<input type="radio" name="v1_q3" id="v1_q3_B" value="false" >False
				</label>

			</ol>
				<p />
				<input class="btn btn-primary submit-survey" type="submit" name="Submit" value="Continue" id="Submit_v1">
			</form>
		</div>

	</body>

</html>
