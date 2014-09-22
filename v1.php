<?php
	session_start();
	$_SESSION["vis"] = "table";
	error_reporting(E_ERROR);

        $_SESSION['vis_start_time'] = time(); //start timer
?>
<!--
	v1.php
	2/21/14
	Second visualization test for personal genomic project user test
	Nicole Francisco, Kara Lu
	for Wellesley College HCI Lab


	5 June 2014
-->
<!DOCTYPE>
<html>
	<head>
		<title>PGP Visualization: Table</title>
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

		<script>
			$(function(){
				//DataTable
				$('#gnm_table').dataTable( {
					"bProcessing": true,
					"sAjaxSource": "hu43860C_GenomeReport.json",
					"aoColumns": [
						{ "mData": "Variant" },
						{ "mData": "Clinical Importance Category" },
						{ "mData": "Impact" },
						{ "mData": "Status" },
						{ "mData": "Allele Frequency" },
						{ "mData": "Summary" }
					],
					"aoColumnDefs": [{
						'bSortable':false, 'aTargets':[5]
						}],
					"bJQueryUI": true,
					"bFilter": false,
					"aLengthMenu": [
						[25, 50, 100, -1],
						[25, 50, 100, "All"]
						],
					"iDisplayLength": -1,
					"bLengthChange": false,
					"bPaginate": false
				});
				//Form validation
				var submit_id = $("#Submit_v1");
				var form_id = $("#v1_q");
				var validateWarning = $("#validate_msg");

				validateForm_vis(submit_id,form_id,validateWarning);
				
			});
		</script>
	</head>
	<body>
		<div class="navbar navbar-fixed-top navbar-inverse">
			<div class="navbar-inner">
				<div class="container">
					<span class="brand"><img src="assets/img/dna.png"> Jamie's Personal Genomics Report</span>
				</div>
			</div>
		</div>
		
		<div class="container" id="study_wrapper">
			<h2>Instructions for the Study</h2>
			<p>Following is a report that is based on an individual's personal genomic information. For the purpose of this study we will name this individual Jamie. Read the explanation below carefully and then study Jamie's report. You will be asked questions about this report.</p>
			<p>The report was created by comparing Jamie's genome and a database of gene variants that are known to be associated with medical conditions. Only gene variants that are found to be medically relevant are reported.</p>
			<p>The report displays a table of gene variants. For each gene variant the table presents its name, clinical importance, potential effect, allele frequency, and a summary about the medical conditions it is associated with. You can sort the table by clicking on the arrows in each of the table columns.</p>
			<p>First, please study Jamie’s report carefully. Next, answer the following questions about the report.</p>
			<p>This report may contain confusing or unfamiliar words. If you encounter a word you are unsure of, please consult the <strong>Glossary of Terms</strong>.</p>
			<div id="accordion">
				<h3>Glossary of Terms</h3>
				<div>
					 <p><strong>Potential Effect:</strong></p>
					 <p>The potential effect of a gene variant describes how it may influence a person’s chances of developing a disease or what medication may work best for them.  A variant can be <strong>pathogenic</strong> (causes disease), <strong>protective</strong> (prevents disease), <strong>pharmacogenetic</strong>
					  (influences the effect of a medication), or <strong>benign</strong> (not associated to a disease).</p>
					  <p><strong>Clinical Importance</strong></p>
					<p>Clinical Importance is based on three different variables. <strong>Severity, treatability</strong> and <strong> penetrance</strong>
					 of the disease associated with the variant. The higher the clinical importance score, the more important it is to discuss with a medical professional.</p>
					 <ul>
					 	<li><strong>Severity:</strong> How severe the disease caused by a variant is, if left untreated. For protective variants this is the severity of the disease the variant <em>protects</em> against, and for pharmacogenetic variants it is the severity
					 	 of consequences if the variant was not considered when administering a drug.</li>
					 	 <li><strong>Treatability:</strong> How treatable the disease caused by the variant is. A higher score indicates a more treatable effect. Variants which could be treated are considered to have higher clinical importance.</li>
					 	 <li><strong>Penetrance:</strong> How often individuals carrying the variant develop the associated disease. A variant with a higher penetrance means that a person with this variant is more likely to develop the associated disease.  (Note: These scores are considered irrelevant for 
					 	 	“benign” variants. Benign variants includes those which affect traits not considered to be medical/health issues, e.g. eye color.)</li>
					 </ul>
					  <p><strong>Carrier Status</strong></p>
					  <p>Carrier Status is important in determining the gene variant’s effect.  Each person inherent two variants of each gene, one from their biological father and one from their biological mother.  A variant is classified as homozygous or heterozygous, and  dominant, recessive, or other.</p>
					  <ul>
					  	<li><strong>Homozygous:</strong> the two variants of the gene are the same</li>
					  	<li><strong>Heterozygous:</strong> the two variants of the gene are different (the person has two different variants)</li>
					  	<li><strong>Compound Heterozygous:</strong> the variants of two different genes work together to create the same effect as being homozygous for one of the genes.</li>
					  	<li><strong>Dominant:</strong> dominant variants are expected to have the reported impact when just one copy is inherited (heterozygous)</li>
					  	<li><strong>Recessive:</strong> recessive variants are not expected to have the reported impact unless homozygous or compound heterozygous.</li>
					  	<li><strong>Other:</strong> variants defined as “other” encompasses various possibilities. Some variants have a strong effect when homozygous and a weaker effect when 
					  		heterozygous, or others only seem to have an effect on traits when another variant is also present.</li>
					  </ul>
					  <p><strong>Frequency in Population</strong></p>
					  <p>Frequency in population, also known as Allele Frequency, describes the percentage of the population that has this genetic variant.  The smaller the frequency, the less common it is among the population and the more interesting it is to a healthcare professional.</p>
					  <p>Adapted From:</p>
					  <p>"GET- Evidence: Guide to Reading Variant Reports." <a href="http://evidence.pgp-hms.org/about">evidence.pgp-hms.org</a>, accessed June 23, 2014.<a href="http://evidence.pgp-hms.org/guide_reading_variant_reports">http://evidence.pgp-hms.org/guide_reading_variant_reports</a>.</p>
				</div>
			</div> <!-- end glossary accordion-->
			<h2>Jamie's Results</h2>
			<div class="report_table_wrapper">
				<!-- GENOME REPORT TABLE -->
				<table id="gnm_table">
					<thead>
						<tr>
							<th class="sorting">Variant</th>
							<th class="sorting" style="width:110px;">Clinical <br> Importance</th>
							<th class="sorting">Potential Effect</th>
							<th class="sorting">Status</th>
							<th class="sorting" style="width:90px;">Frequency in<br> Population</th>
							<th>Summary</th>
						</tr>
					</thead>
				</table>
			</div>
			<h2>Questions About the Report</h2>
				<p>Please answer the following questions based on Jamie's report. Feel free to <strong>revisit the report</strong> as needed in order to answer the questions correctly.</p>
				<form action="vis_process.php" method="post" id="v1_q">
	
					<label for="v1_q1"><strong>The number of variants with high clinical importance:</strong></label>
					<input type="text" name="v1_q1" id="v1_q1">
					
					<label for="v1_q2"><strong>The number of variants that are well-established pathogenic:</strong></label>
					<input type="text" name="v1_q2" id="v1_q2">

					<label for="v1_q3"><strong>Based on the information above, the number of variants in Jamie's report with low clinical importance is <span id="v1_q3text">________</span> the number of variants with high clinical importance.</strong></label>
					<label class="radio" for="v1_q3_A">
						<input type="radio" name="v1_q3" id="v1_q3_A" value="greater" onchange="changetext(this.name, this.value);">Greater than
					</label>
					<label class="radio" for="v1_q3_B">
						<input type="radio" name="v1_q3" id="v1_q3_B" value="equal" onchange="changetext(this.name, this.value);">Equal
					</label>
					<label class="radio" for="v1_q3_C">
						<input type="radio" name="v1_q3" id="v1_q3_C" value="less" onchange="changetext(this.name, this.value);">Less than
					</label>
					<label class="radio" for="v1_q3_D">
						<input type="radio" name="v1_q3" id="v1_q3_D" value="dunno" onchange="changetext(this.name, this.value);">I don't know
					</label>

			
					<label for="v1_q4"><strong>Based on the information above, the number of uncertain pathogenic variants in Jamie's report is <span id="v1_q4text">________</span> the number of well established pathogenic variants.</strong></label>
					<label class="radio" for="v1_q4_A">
						<input type="radio" name="v1_q4" id="v1_q4_A" value="greater" onchange="changetext(this.name, this.value);">Greater than
					</label>
					<label class="radio" for="v1_q4_B">
						<input type="radio" name="v1_q4" id="v1_q4_B" value="equal" onchange="changetext(this.name, this.value);">Equal
					</label>
					<label class="radio" for="v1_q4_C">
						<input type="radio" name="v1_q4" id="v1_q4_C" value="less" onchange="changetext(this.name, this.value);">Less than
					</label>
					<label class="radio" for="v1_q4_D">
						<input type="radio" name="v1_q4" id="v1_q4_D" value="dunno" onchange="changetext(this.name, this.value);">I don't know
					</label>

					<p><strong>Based on the information above, the number of potentially pathogenic variants in Jamie's report is <span id="v1_q5text">________</span> the number of potentially benign or protective variants.</strong></p>
					
					<label class="radio" for="v1_q5_A">
						<input type="radio" name="v1_q5" id="v1_q5_A" value="greater" onchange="changetext(this.name, this.value);">Greater than
					</label>
					<label class="radio" for="v1_q5_B">
						<input type="radio" name="v1_q5" id="v1_q5_B" value="equal" onchange="changetext(this.name, this.value);">Equal
					</label>
					<label class="radio" for="v1_q5_C">
						<input type="radio" name="v1_q5" id="v1_q5_C" value="less" onchange="changetext(this.name, this.value);">Less than
					</label>
					<label class="radio" for="v1_q5_D">
						<input type="radio" name="v1_q5" id="v1_q5_D" value="dunno" onchange="changetext(this.name, this.value);">I don't know
					</label>


					<p><strong>Which variants would Jamie be most likely to discuss with a healthcare provider?</strong>
					<textarea name="v1_q6" id="v1_q6" cols="30" rows="5"></textarea>
					
					

					<p><strong>Based on the information above, Jamie's risk of developing stomach flu is <span id="v1_q7text">________</span> the average person.</strong>
					<label class="radio" for="v1_q7_A">
						<input type="radio" name="v1_q7" id="v1_q7_A" value="greater" onchange="changetext(this.name, this.value);">Greater than
					</label>
					<label class="radio" for="v1_q7_B">
						<input type="radio" name="v1_q7" id="v1_q7_B" value="equal" onchange="changetext(this.name, this.value);">Equal
					</label>
					<label class="radio" for="v1_q7_C">
						<input type="radio" name="v1_q7" id="v1_q7_C" value="less" onchange="changetext(this.name, this.value);">Less than
					</label>
					<label class="radio" for="v1_q7_D">
						<input type="radio" name="v1_q7" id="v1_q7_D" value="dunno" onchange="changetext(this.name, this.value);">I don't know
					</label>

					<p><strong>Based on the information above, Jamie's risk of developing age-related macular degeneration is <span id="v1_q8text">________</span> the average person?</strong>
					<label class="radio" for="v1_q8_A">
						<input type="radio" name="v1_q8" id="v1_q8_A" value="greater" onchange="changetext(this.name, this.value);">Greater than
					</label>
					<label class="radio" for="v1_q8_B">
						<input type="radio" name="v1_q8" id="v1_q8_B" value="equal" onchange="changetext(this.name, this.value);">Equal
					</label>
					<label class="radio" for="v1_q8_C">
						<input type="radio" name="v1_q8" id="v1_q8_C" value="less" onchange="changetext(this.name, this.value);">Less than
					</label>
					<label class="radio" for="v1_q8_D">
						<input type="radio" name="v1_q8" id="v1_q8_D" value="dunno" onchange="changetext(this.name, this.value);">I don't know
					</label>

					<p><strong>If you were Jamie, knowing this information, which of the following conditions would you be interested in learning more about? Select all that apply.</strong>
<input type="hidden" name="q9a">
	  <label><input type="checkbox" name="q9a"  value="alzheimers">Alzheimer's</label>
			<input type="hidden" name="q9b">
			<label><input type="checkbox" name="q9b"  value="parkinsons">Parkinson's</label>
	  <input type="hidden" name="q9c">
	  <label><input type="checkbox" name="q9c"  value="liver">Liver Disease</label>
	  <input type="hidden" name="q9d">
	  <label><input type="checkbox" name="q9d"  value="colon">Colon Cancer</label>
	  <input type="hidden" name="q9e">
	  <label><input type="checkbox" name="q9e"  value="diabetes">Diabetes</label>
	  <input type="hidden" name="q9f">
	  <label><input type="checkbox" name="q9f"  value="emphysema">Emphysema</label>
	  <input type="hidden" name="q9g">
	  <label><input type="checkbox" name="q9g"  value="tuberculosis">Tubercolosis</label>
	  <input type="hidden" name="q9h">
	  <label><input type="checkbox" name="q9h"  value="eye">Eye Disease</label>


					<table class="table table-bordered table-striped table-hover" style="font-size:14px;">
						<thead>
							<tr>
								<th style="width:80px;"><strong>Statement</strong></th>
								<th style="width:80px;"><strong>Strongly disagree</strong></th>
								<th style="width:80px;"><strong>Disagree</strong></th>
								<th style="width:80px;"><strong>Somewhat disagree</strong></th>
								<th style="width:80px;"><strong>Neither agree or disagree</strong></th>
								<th style="width:80px;"><strong>Somewhat agree</strong></th>
								<th style="width:80px;"><strong>Agree</strong></th>
								<th style="width:80px;"><strong>Strongly agree</strong></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>The information in the report was presented in an accessible manner.</td>
								<td><input type="radio" name="v1_q10_a" value="1"></td>
								<td><input type="radio" name="v1_q10_a" value="2"></td>
								<td><input type="radio" name="v1_q10_a" value="3"></td>
								<td><input type="radio" name="v1_q10_a" value="4"></td>
								<td><input type="radio" name="v1_q10_a" value="5"></td>
								<td><input type="radio" name="v1_q10_a" value="6"></td>
								<td><input type="radio" name="v1_q10_a" value="7"></td>
							</tr>
							<tr>
								<td>The report is easy to understand.</td>
								<td><input type="radio" name="v1_q10_b" value="1"></td>
								<td><input type="radio" name="v1_q10_b" value="2"></td>
								<td><input type="radio" name="v1_q10_b" value="3"></td>
								<td><input type="radio" name="v1_q10_b" value="4"></td>
								<td><input type="radio" name="v1_q10_b" value="5"></td>
								<td><input type="radio" name="v1_q10_b" value="6"></td>
								<td><input type="radio" name="v1_q10_b" value="7"></td>
							</tr>
							<tr>
								<td>Jamie's genes determine everything about them and their future.</td>
								<td><input type="radio" name="v1_q10_c" value="1"></td>
								<td><input type="radio" name="v1_q10_c" value="2"></td>
								<td><input type="radio" name="v1_q10_c" value="3"></td>
								<td><input type="radio" name="v1_q10_c" value="4"></td>
								<td><input type="radio" name="v1_q10_c" value="5"></td>
								<td><input type="radio" name="v1_q10_c" value="6"></td>
								<td><input type="radio" name="v1_q10_c" value="7"></td>
							</tr>
							<tr>
								<td>I would need the help of a healthcare professional to better understand Jamie's results.</td>
								<td><input type="radio" name="v1_q10_d" value="1"></td>
								<td><input type="radio" name="v1_q10_d" value="2"></td>
								<td><input type="radio" name="v1_q10_d" value="3"></td>
								<td><input type="radio" name="v1_q10_d" value="4"></td>
								<td><input type="radio" name="v1_q10_d" value="5"></td>
								<td><input type="radio" name="v1_q10_d" value="6"></td>
								<td><input type="radio" name="v1_q10_d" value="7"></td>
							</tr>
							<tr>
								<td>The scientific knowledge used to generate this report is well established.</td>
								<td><input type="radio" name="v1_q10_e" value="1"></td>
								<td><input type="radio" name="v1_q10_e" value="2"></td>
								<td><input type="radio" name="v1_q10_e" value="3"></td>
								<td><input type="radio" name="v1_q10_e" value="4"></td>
								<td><input type="radio" name="v1_q10_e" value="5"></td>
								<td><input type="radio" name="v1_q10_e" value="6"></td>
								<td><input type="radio" name="v1_q10_e" value="7"></td>
							</tr>
							<tr>
								<td>If I were Jamie, I would discuss the results in the report with my doctor.</td>
								<td><input type="radio" name="v1_q10_f" value="1"></td>
								<td><input type="radio" name="v1_q10_f" value="2"></td>
								<td><input type="radio" name="v1_q10_f" value="3"></td>
								<td><input type="radio" name="v1_q10_f" value="4"></td>
								<td><input type="radio" name="v1_q10_f" value="5"></td>
								<td><input type="radio" name="v1_q10_f" value="6"></td>
								<td><input type="radio" name="v1_q10_f" value="7"></td>
							</tr>
						
	
							<tr>
								<td>The report gives me a firm grasp of Jamie's health and biology.</td>
								<td><input type="radio" name="v1_q10_g" value="1"></td>
								<td><input type="radio" name="v1_q10_g" value="2"></td>
								<td><input type="radio" name="v1_q10_g" value="3"></td>
								<td><input type="radio" name="v1_q10_g" value="4"></td>
								<td><input type="radio" name="v1_q10_g" value="5"></td>
								<td><input type="radio" name="v1_q10_g" value="6"></td>
								<td><input type="radio" name="v1_q10_g" value="7"></td>
							</tr>
							
						</tbody>
					</table>
					
					<label for="v1_q11">Please use the space below to tell us which features were most helpful for understanding the report.</label>
					<textarea name="v1_q11" id="v1_q11" cols="30" rows="5"></textarea>
					

					<label for="v1_q12">Please use the space below to tell us how we can improve the report to make it easier to understand.</label>
					<textarea name="v1_q12" id="v1_q12" cols="30" rows="5"></textarea>
					
					
					
				<input class="btn btn-primary submit-survey" type="submit" name="Submit" value="Continue" id="Submit_v1">
			</form>
		</div>
		<div class="alert alert-block" id='validate_msg'></div>

	</body>
	<script>
		function changetext(name, value) {
			var spanid = name + "text"; 
			console.log(spanid);
			var el = document.getElementById(spanid);
			if (value === "greater") {
				el.innerHTML = "<strong>GREATER THAN</strong>";
				el.style.color = "blue";
			} else if (value === "equal") {
				el.innerHTML = "<strong>EQUAL TO</strong>";
				el.style.color = "blue";
			} else if (value === "less") {
				el.innerHTML = "<strong>LESS THAN</strong>";
				el.style.color = "blue";
			} else if (value === "dunno") {
				el.innerHTML = "<strong>???</strong>";
				el.style.color = "blue";
			}
		}
		</script> 
</html>
