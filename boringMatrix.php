<!--Laura M. Ascher
    Summer 14 
    Wellesley HCI Lab-->
<!DOCTYPE>
<html>
	<head>
		<title>Consent Form</title>
		<script type="text/javascript" src="http://www.google.com/jsapi"></script>
		<link rel="stylesheet" type="text/css" href="scripts/jquery/jquery-ui-1.10.4.custom.css" rel="stylesheet">
		<script type="text/javascript" charset="utf8" src="scripts/jquery/jquery-ui-1.10.4.custom.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
		<link href="styles/bootswatch.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="styles/style.css">
		<link rel="stylesheet" type="text/css" href="styles/style_cf.css">

<script type="text/javascript">
function openFunction1(){

        var overlay = document.getElementById("overlay1");
        var popup = document.getElementById("popup1");
        overlay.style.display = "block";
        popup.style.display = "block";
};

function closeFunction1(){  
        var overlay = document.getElementById("overlay1");
        var popup = document.getElementById("popup1");
        overlay.style.display = "none";
        popup.style.display = "none";      
};
function openFunction2(){

        var overlay = document.getElementById("overlay2");
        var popup = document.getElementById("popup2");
        overlay.style.display = "block";
        popup.style.display = "block";
};

function closeFunction2(){  
        var overlay = document.getElementById("overlay2");
        var popup = document.getElementById("popup2");
        overlay.style.display = "none";
        popup.style.display = "none";      
};
function openFunction3(){

        var overlay = document.getElementById("overlay3");
        var popup = document.getElementById("popup3");
        overlay.style.display = "block";
        popup.style.display = "block";
};

function closeFunction3(){  
        var overlay = document.getElementById("overlay3");
        var popup = document.getElementById("popup3");
        overlay.style.display = "none";
        popup.style.display = "none";      
};


</script>

  		</head>
	<body>
		<div class="navbar navbar-inverse">
			<div class="navbar-inner">
				<div class="container">
					<span class="brand"><img src="assets/img/dna.png">Consent Form</span>
				</div>
			</div>
		</div>
            <div id="body">
		
            <div id="text">         
                   <p>Please read the following consent form, and answer the questions which follow. You will be asked about your willingness to participate in the study that is described in the consent form. Your answer will NOT enter you into the study, we merely wish to know if you would be willing to enter the study described after learning more about it.</p> 
                <h2>Purpose</h2>
                   <p>The main scientific goals of this study are to find ways to connect human genetic information with human trait information (e.g., medical information and physical traits), and allow participants to understand and learn from their personal genomic data, so that such data may be used for research and other scientific, patient care and commercial purposes worldwide.</p>
                <h2>Data Collection</h2> 
                   <p> For this study, both trait data and genetic data will be collected from you.
                    <ul>
                        <li><b>Trait Data</b>: Trait data will be collected either by survey, interview, or both. Trait data includes date of birth, medications, allergies, vaccines, personal medical history, race/ethnicity/ancestry, and vital signs (e.g. height, weight, blood pressure). You may also be asked to provide a facial photograph, your family medical history, or your lifestyle traits.
                        <li><b>Genetic Data</b>: You will be sent materials for an at-home saliva collection. This kit may be self-administered and typically requires you to provide 2-4 mililiters of your saliva. Your genome will then be analyzed in the lab.
                    </ul>       
                <h2>Unintended Consequences of Public Disclosure</h2>
                    <p>There is always the possibility of unintended public disclosure of your data that you had wished to keep private (e.g. your name, trait data, genomic data) due to data breaches, including hacking.
                    <p>You can decide to share different aspects of your data, including:
                    <ul>
                        <li><b>Meta Data</b>: the fact that you got tested, about the study, how much it costs, and general sentiments about the process</li>
                        <li><b>Core Findings</b>: your propensity for diseases, your blood type, and a general summary of the findings</li>
                        <li><b>Full Data</b>: your trait data and your genetic data</li>
                    </ul>
                    <p>The chart below describes the unintended consequences of disclosing different aspects of your data with different social groups. </p>


<table id='highlight-table'> 

       <colgroup class="slim"></colgroup>
       <colgroup class="slim"></colgroup>
       <colgroup class="slim"></colgroup>
       <colgroup class="slim"></colgroup>
<thead> 
<tr> 
        <th id='empty'></th> 
        <th class='title'>Meta Data<button id="LearnMoreBtn" onclick='openFunction1()'><img src="assets/img/_.png"></button>
            <div id="overlay1"></div>
            <div id="popup1">
                <button id="CloseBtn" onclick='closeFunction1()'><img src="assets/img/x.png"></button><br>
               <span style='text-align:center;'> What is Meta Data?</span><br><br>
                <ul style='text-align:left;'>
                    <li>The fact that you got tested</li>
                    <li>Information about the study</li>
                    <li>How much the study costs</li>
                    <li>General sentiments about the process</li>
                </ul>
                
            </div>
        </th> 
        <th id='head' class='title'>Core Findings<button id="LearnMoreBtn" onclick='openFunction2()'><img src="assets/img/_.png"></button>
            <div id="overlay2"></div>
            <div id="popup2">
                <button id="CloseBtn" onclick='closeFunction2()'><img src="assets/img/x.png"></button><br>
              <span style='text-align:center;'>What are Core Findings?</span><br><br>
              <ul style='text-align:left;'>
              <li>Your propensity for diseases</li>
              <li>Your blood type</li>
              <li>A general summary of the findings</li>
          </ul>
              
            </div>
        </th> 
        <th id='head' class='title'>Full Data<button id="LearnMoreBtn" onclick='openFunction3()'><img src="assets/img/_.png"></button>
            <div id="overlay3"></div>
            <div id="popup3">
                <button id="CloseBtn" onclick='closeFunction3()'><img src="assets/img/x.png"></button><br>
               <span style='text-align:center;'> What is Full Data?<span><br><br>
                <ul style='text-align:left;'>
                <li>Your trait data</li>
                <li>Your genetic data</li>
            </ul>
             
            </div>
        </th> 
</tr> 
</thead> 
<tbody> 
<tr> 
    <td class='title'>Family</td>
    <td id='1'>
        <div class='box'>
    	<ul class='r'><span class='red'>Risks:</span>
            <li>Unintended Public Disclosure</li>
        </ul>
    </div>
    	<ul class='b'><span class='blue'>Benefits:</span>
    		<li>Education and Awareness about Genomic Testing</li>
    	</ul>


    </td> 

    <td id='1'>
    	<ul class='r'><span class='red'>Risks:</span>
    		<li>Ambiguous or Erroneous Data</li>
    		<li>Anxiety or Stress due to discovery of disease risk</li>
    		<li>Carrier Status</li>
            <li>Misinterpretation of information</li>
            <li>Unintended Public Disclisure</li>
    	</ul>
    	<ul class='b'><span class='blue'>Benefits:</span>
    		<li>Ancestry Discovery</li>
			<li>Carrier Status</li>
			<li>Education and Awareness about Genomic Testing</li>
			<li>(Family) Health</li>
			<li>Plans for the Future</li>	
    	</ul>
    	</td>
    <td id='1'>
    	<ul class='r'><span class='red'>Risks:</span>
			<li>Ambiguous or Erroneous Data</li>
			<li>Anxiety or Stress due to Discovery of Disease Risk</li>
            <li>Carrier Status</li>
            <li>Misinterpretation of Information</li>
			<li>Unwanted Ancestry Discovery</li>
			<li>Unintended Public Disclisure</li>
    	</ul>
    	<ul class='b'><span class='blue'>Benefits:</span>
    		<li>Ancestry Discovery</li>
            <li>Carrier Status</li>
            <li>Education and Awareness about Genomic Testing</li>
            <li>(Family) Health</li>
            <li>Plans for the Future</li>
    	</ul>
    	</td> 

</tr> 

<tr> 
    <td class='title'>Friends</td> 
    <td id='2'>
    	<ul class='r'><span class='red'>Risks:</span>
            <li>Unintended Public Disclosure</li>
        </ul>
    	<ul class='b'><span class='blue'>Benefits:</span>
    		<li>Education and Awareness about Genomic Testing</li>
    	</ul>
    </td> 
    <td id='2'>
    	<ul class='r'><span class='red'>Risks:</span>
    		<li>Ambiguous or Erroneous data</li>
    		<li>Anxiety or Stress due to discovery of disease risk</li>
            <li>Misinterpretation of information</li>
            <li>Unintended Public Disclosure</li>
    	</ul>
    	<ul class='b'><span class='blue'>Benefits:</span>
    		<li>Education and Awareness about Genomic Testing</li>
			<li>Plans for Future</li>
		</ul>
    </td> 
    <td id='2'>
		<ul class='r'><span class='red'>Risks:</span>
    		<li>Ambiguous or Erroneous data</li>
            <li>Anxiety or Stress due to discovery of disease risk</li>
            <li>Misinterpretation of information</li>
            <li>Unintended Public Disclosure</li>
    	</ul>
    	<ul class='b'><span class='blue'>Benefits:</span>
    		<li>Education and Awareness about Genomic Testing</li>
            <li>Plans for Future</li>
		</ul>
    </td> 

</tr> 
<tr> 
    <td class='title'>Doctor</td> 
    <td id='2'>
    	<ul class='r'><span class='red'>Risks:</span>
            <li>Unintended Public Disclosure</li>
        </ul>
    	<ul class='b'><span class='blue'>Benefits:</span>
    		<li>Education and Awareness about Genomic Testing</li>
    	</ul>
    </td> 
    <td id='2'>
    	<ul class='r'><span class='red'>Risks:</span>
    		<li>Anxiety or Stress due to discovery of disease risk</li>
            <li>Carrier Status</li>
            <li>Cost and Risks of Clinical Follow-Ups and Care</li>
            <li>Unintended Public Disclosure</li>
    	</ul>
    	<ul class='b'><span class='blue'>Benefits:</span>
    		<li>Carrier Status</li>
            <li>Education and Awareness of Genomic Testing</li>
			<li>(Family) Health</li>
            <li>Smaller Chance of Misinterpreting the Data</li>
			<li>Plans for Future</li>
		</ul>
    </td> 
    <td id='2'>
		<ul class='r'><span class='red'>Risks:</span>
    		<li>Anxiety or Stress due to discovery of disease risk</li>
            <li>Carrier Status</li>
            <li>Cost and Risks of Clinical Follow-Ups and Care</li>
            <li>Unintended Public Disclosure</li>
    	</ul>
    	<ul class='b'><span class='blue'>Benefits:</span>
    		<li>Carrier Status</li>
            <li>Education and Awareness of Genomic Testing</li>
            <li>(Family) Health</li>
            <li>Smaller Chance of Misinterpreting the Data</li>
            <li>Plans for Future</li>
		</ul>
    </td> 

</tr>
<tr> 
    <td class='title'>Researchers</td> 
    <td id='2'>
    	<ul class='r'><span class='red'>Risks:</span>
            <li>Unintended Public Disclosure</li>
        </ul>
    	<ul class='b'><span class='blue'>Benefits:</span>
    		<li>Education and Awareness about Genomic Testing</li>
    	</ul>
    </td> 
    <td id='2'>
    	<ul class='r'><span class='red'>Risks:</span>
    		<li>Malicious, Unethical, or Inaccurate Research</li>
            <li>Misinterpretation of information</li>
    		<li>Unintended Public Disclosure</li>
    	</ul>
    	<ul class='b'><span class='blue'>Benefits:</span>
    		<li>Advance Genetics, Science and Health Research</li>
			<li>Education and Awareness about Genomic Testing</li>
			<li>Plans for the Future</li>
		</ul>
    </td> 
    <td id='2'>
		<ul class='r'><span class='red'>Risks:</span>
    		<li>Misinterpretation of information</li>
    		<li>Ambiguous or erroneous data</li>
    		<li>Anxiety due to doscovery of disease disposition</li>
    	</ul>
    	<ul class='b'><span class='blue'>Benefits:</span>
    		<li>Education and Awareness</li>
			<li>Family Health</li>
			<li>Plans for the Future</li>
		</ul>
    </td> 

</tr>
<tr> 
    <td class='title'>Social Media</td> 
    <td id='2'>
    	<ul class='r'><span class='red'>Risks:</span>
            <li>Unintended Public Disclosure</li>
        </ul>
    	<ul class='b'><span class='blue'>Benefits:</span>
    		<li>Education and Awareness about Genomic Testing</li>
    	</ul>
    </td> 
    <td id='2'>
    	<ul class='r'><span class='red'>Risks:</span>
    		<li>Ambiguous or Erroneous data</li>
    		<li>Genetic Discrimination</li>
            <li>Loss of Privacy</li>
            <li>Misinterpretation of information</li>
            <li>Unintended Public Disclosure</li>
    	</ul>
    	<ul class='b'><span class='blue'>Benefits:</span>
    		<li>Education and Awareness about Genomic Testing</li>
			<li>Reduce Genetic Discrimination</li>
			<li>Reduce Stigma or Concern around Sharing Genetic Information</li>
		</ul>
    </td> 
    <td id='2'>
		<ul class='r'><span class='red'>Risks:</span>
    		<li>Ambiguous or Erroneous data</li>
            <li>Genetic Discrimination</li>
            <li>Identifiability</li>
            <li>Links to ongoing or unsolved criminal investigations</li>
            <li>Loss of Privacy</li>
            <li>Mininterpretation of Information</li>
            <li>Unintended Public Disclosure</li>
    	</ul>
    	<ul class='b'><span class='blue'>Benefits:</span>
    		<li>Education and Awareness about Genetic Testing</li>
			<li>Reduce Genetic Discrimination</li>
			<li>Reduce Stigma or Concern around Sharing Genetic Information</li>
		</ul>
    </td> 

</tr>
<tr> 
    <td class='title'>Public</td> 
    <td id='2'>
    	<ul class='r'><span class='red'>Risks:</span>
            <li>Unintended Public Disclosure</li>
        </ul>
    	<ul class='b'><span class='blue'>Benefits:</span>
    		<li>Education and Awareness about Genomic Testing</li>
    	</ul>
    </td> 
    <td id='2'>
    	<ul class='r'><span class='red'>Risks:</span>
    		<li>Genetic Discrimination</li>
            <li>Loss of Privacy</li>
            <li>Malicious, Unethical, or Inaccurate Research</li>
            <li>Unintended Public Disclosure</li>
    	</ul>
    	<ul class='b'><span class='blue'>Benefits:</span>
    		<li>Advance Genetics, Science and Health Research</li>
            <li>Education and Awareness about Genomic Testing</li>
            <li>Promote Open-Source Data</li>
            <li>Reduce Genetic Discrimination</li>
            <li>Reduce Stigma or Concern around Sharing Genetic Information</li>
		</ul>
    </td> 
    <td id='2'>
		<ul class='r'><span class='red'>Risks:</span>
    		<li>Genetic Discrimination</li>
            <li>Identifiability</li>
            <li>Links to Ongoing or Unsolved Criminal Investigations</li>
            <li>Loss of Privacy</li>
            <li>Malicious, Unethical, or Inaccurate Research</li>
            <li>Unintended Public Disclosure</li>
    	</ul>
    	<ul class='b'><span class='blue'>Benefits:</span>
    		<li>Advance Genetics, Science and Health Research</li>
            <li>Education and Awareness about Genomic Testing</li>
            <li>Promote Open-Source Data</li>
            <li>Reduce Genetic Discrimination</li>
            <li>Reduce Stigma or Concern around Sharing Genetic Information</li>
		</ul>
    </td> 
</tr>
</tbody> 
</table> 
				</div>
		</div>	
	</body>






<script src="jquery.stickyheader.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js"></script>



<style type="text/css">
td{
	width: 400px;
}
ul.r{
	margin-bottom: 30px;
    margin-top: 15px;
    font-size: 14px;
}
ul.b{
    font-size: 14px;
}
li{
    font-size: 13px;
}
thead{
    background: white; 
    height:40px;
}

.title{
	text-align: center;
	font-weight: bold;
    font-size: 16px;
    color: #555;
}
td.title{
	width: 100px;
}

/*STICKY HEADER*/
.sticky-wrap {
    overflow-x: auto;
    position: relative;
    margin-bottom: 1.5em;
    width: 100%;
}
.sticky-wrap .sticky-thead,
.sticky-wrap .sticky-col,
.sticky-wrap .sticky-intersect {
    opacity: 0;
    position: absolute;
    top: 0;
    left: 0;
    transition: all .125s ease-in-out;
    z-index: 50;
    width: auto; /* Prevent table from stretching to full size */
}
.sticky-wrap .sticky-thead {
        box-shadow: 0 0.25em 0.1em -0.1em rgba(0,0,0,.125);
        z-index: 100;
        width: 100%; /* Force stretch */
}
.sticky-wrap .sticky-intersect {
        opacity: 1;
        z-index: 150;
}
.sticky-wrap .sticky-intersect th {
        background-color: #666;
        color: #eee;
}
.sticky-wrap td,
.sticky-wrap th {
    box-sizing: content-box;
}

/*HIGHLIGHTING*/
.column-hover{ background:#E0E0E0; }
.row-hover{ background:#E0E0E0; }
.cell-hover{ background:#B0B0B0; }

/*POPUP*/
#overlay1, #overlay2, #overlay3 {
    display:none;    
    position:fixed;  
    left:0px;        
    top:0px;         
    width:100%;      
    height:100%;     
    background:#000; 
    opacity:0.5;     
    z-index:99999;   
}

#popup1, #popup2, #popup3 {
    display:none;
    position:fixed;
    left:50%;        
    top:50%;         
    width:300px;     
    height:200px;
    margin-top:-75px;
    margin-left:-150px;
    background:#ddd;
    border:1px solid #000;
    z-index:100000;   
    padding-top: 5px; 
    font-weight: light;
  
}
#CloseBtn{
    padding-left:280px;
}

button{
    background: none;
    border:none;
}
.red{
    color: red;
    font-size: 18px;
}
.blue{
    color: dodgerBlue;
    font-size: 18px;
}
</style>


</html>