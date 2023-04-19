<?php
session_start();

?>  
<html> 
<head>  
<title>Test</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
<script type="text/javascript" src="../../JavaS_Functions.js"></script>
<link rel="stylesheet" type="text/css" href="../../PageStyle.css">
</head>  
<body onload="Hide_Show('Filled');Hide_Show('HideB');">
<div ID="LINKS" >
<h2>
 <a class="Selected_Page" href="Covid19_Screening_Forms.php" >COVID 19 SCREENING</a><br />
 
 <a href="../DENTAL_HISTORY/Dental_History_Forms.php" >DENTAL HISTORY</a><br />
 
 <a href="../MEDICAL_HISTORY/MEDICAL_HISTORY_Forms.php" >MEDICAL HISTORY</a><br />
 
 <a href="../PRIVACY_CONSENT/Privacy_Consent_Forms.php" >PRIVACY CONSENT</a><br />
 
 <a href="../../MainPage/MainPage.php" >HOME</a><br /></h2>
 </div>
 
 <button onclick="Hide_Show('Filled');Hide_Show('Fill_in');Hide_Show('HideB');Submit_COVID_Questions()" >View Form</button><br />
<button ID="HideB" onClick="genPDF()" >Get PDF</button>

<!-- Fill in form -->
 <form action="Covid19_Screening_Submit.php" method="POST">
<div ID="Fill_in" >
<h1>Patient Screening Form</h1>
<label for="Staff_S" >Staff screener:</label>
<input type="text" name="Staff_S" id="Staff_S" ></input><br />

<label for="P_Name" >Patient Name:</label>
<input type="text" name="P_Name" id="P_Name" ></input><br />

<label for="who_AnsweredP" >Who answered:</label>
<input type="radio" id="who_AnsweredP" name="who_Answered" value="Patient">
<label for="who_AnsweredP">Patient</label>
<input type="radio" id="who_AnsweredO" name="who_Answered" value="Other">
<label for="who_AnsweredO">Other</label>

<label for="Specify" >(specify)</label>
<input type="text" name="Specify" id="Specify" ></input><br />


<label for="Contact_M" >Contact Method:</label>
<input type="radio" id="Contact_M" name="Contact_M" value="Phone">
<label for="Contact_M">Phone</label>
<input type="radio" id="Contact_M" name="Contact_M" value="email">
<label for="Contact_M">email</label>
<input type="radio" id="Contact_M" name="Contact_M" value="Other">
<label for="Contact_M">Other</label>

<input type="text" name="Contact_M_2" id="Contact_M_2" ></input><br />

<h3>SCREENING QUESTIONS</h3>

<p>Pre-Screen:</p>
  <input type="checkbox" id="Q1_1" name="Q1_1" value="Yes">
  <label for="Q1_1">Have you had close contact with anyone with acute respiratory llness or travelled outside of Canada in the past 14 days?</label>
  <br />
  <input type="checkbox" id="Q1_2" name="Q1_2" value="Yes">
  <label for="Q1_2">Do you have a confirmed case of COVID-19 or had close contact with a confirmed case of COVID-19?</label>
  <br />
  <input type="checkbox" id="Q1_3" name="Q1_3" value="Yes">
  <label for="Q1_3">
  Do you have any of the following symptoms:
  <ul>
  <li>Fever</li>
  <li>New onset of cough</li>
  <li>Worsening chronic cough</li>
  <li>Shortness of breath</li>
  <li>Difficulty breathing</li>
  <li>Sore throat</li>
  <li>Difficulty swallowing</li>
  <li>Decrease or loss of sense of taste or smell</li>
  <li>Chills</li>
  <li>Headaches</li>
  <li>Unexplained fatigue/malaise/muscle aches (myalgias)</li>
  <li>Nausea/vomiting, diarrhea, abdominal pain</li>
  <li>Pink eye (conjunctivitis)</li>
  <li>Runny nose/nasal congestion without other known cause</li>
</ul>
  </label>
  <br />
  <input type="checkbox" id="Q1_4" name="Q1_4" value="Yes">
  <label for="Q1_4">Are you 70 years of age or older, experiencing any of the following symptoms: delirium, unexplained or increased number of falls, acute functional decline, or worsening of chronic conditions?</label>
  <br />
  
  <p>In-Office:</p>
  <input type="checkbox" id="Q2_1" name="Q2_1" value="Yes">
  <label for="Q2_1">Have you had close contact with anyone with acute respiratory llness or travelled outside of Canada in the past 14 days?</label>
  <br />
  <input type="checkbox" id="Q2_2" name="Q2_2" value="Yes">
  <label for="Q2_2">Do you have a confirmed case of COVID-19 or had close contact with a confirmed case of COVID-19?</label>
  <br />
  <input type="checkbox" id="Q2_3" name="Q2_3" value="Yes">
  <label for="Q2_3">
  Do you have any of the following symptoms:
  <ul>
  <li>Fever</li>
  <li>New onset of cough</li>
  <li>Worsening chronic cough</li>
  <li>Shortness of breath</li>
  <li>Difficulty breathing</li>
  <li>Sore throat</li>
  <li>Difficulty swallowing</li>
  <li>Decrease or loss of sense of taste or smell</li>
  <li>Chills</li>
  <li>Headaches</li>
  <li>Unexplained fatigue/malaise/muscle aches (myalgias)</li>
  <li>Nausea/vomiting, diarrhea, abdominal pain</li>
  <li>Pink eye (conjunctivitis)</li>
  <li>Runny nose/nasal congestion without other known cause</li>
</ul>
  </label>
  <br />
  <input type="checkbox" id="Q2_4" name="Q2_4" value="Yes">
  <label for="Q2_4">Are you 70 years of age or older, experiencing any of the following symptoms: delirium, unexplained or increased number of falls, acute functional decline, or worsening of chronic conditions?</label>
  <br />
  
  <ul style="list-style-type:disc;">
	  <li>Any “yes” response must be discussed with the dentist immediately.</li>
	  <li>Tell the patient when they arrive at the office, they will be asked to:</li>
	  <ul style="list-style-type:circle;">
		  <li>Sanitize their hands.</li>
		  <li>Answer the questions again.</li>
		  <li>Have their temperature taken.</li>
	  </ul> 
	  <li>Advise the patient:</li>
	  	  <ul style="list-style-type:circle;">
			  <li>Only patients are allowed to come to the office.</li>
			  <li>If possible, to wait in their car until their appointment, call the office when they arrive.</li>
			  <li>To wear a mask to their appointment.</li>
		  </ul> 
  </ul>
</div> 

  <!-- Filled out form -->
<div id="Filled">
    <input type="submit" value="SUBMIT" name="submit" />
    <div>
	<div>
<h1>Patient Screening Form</h1>

<label for="Staff_SAnswer" >Staff screener:</label>
<p id="Staff_SAnswer" ></p>

<label for="P_NameAnswer" >Patient Name:</label>
<p id="P_NameAnswer" ></p>

<label for="who_AnsweredAnswer" >Who answered:</label>
<p id="who_AnsweredAnswer" ></p>
<p id="SpecifyAnswer" ></p>


<label for="Contact_MAnswer" >Contact Method:</label>
<p id="Contact_MAnswer" ></p>
<p id="Contact_M_2Answer" ></p>

<h3>SCREENING QUESTIONS</h3>

<p>Pre-Screen:</p>
  <label for="Answer1_1">Have you had close contact with anyone with acute respiratory llness or travelled outside of Canada in the past 14 days?</label>
  <p id="Answer1_1" ></p>
  <br />
  <label for="Answer1_2">Do you have a confirmed case of COVID-19 or had close contact with a confirmed case of COVID-19?</label>
  <p id="Answer1_2" ></p>
  <br />
  <label for="Answer1_3">Do you have any of the following symptoms:
  <ul>
  <li>Fever</li>
  <li>New onset of cough</li>
  <li>Worsening chronic cough</li>
  <li>Shortness of breath</li>
  <li>Difficulty breathing</li>
  <li>Sore throat</li>
  <li>Difficulty swallowing</li>
  <li>Decrease or loss of sense of taste or smell</li>
  <li>Chills</li>
  <li>Headaches</li>
  <li>Unexplained fatigue/malaise/muscle aches (myalgias)</li>
  <li>Nausea/vomiting, diarrhea, abdominal pain</li>
  <li>Pink eye (conjunctivitis)</li>
  <li>Runny nose/nasal congestion without other known cause</li>
</ul>
  </label>
  <p id="Answer1_3" ></p>
  <br />
  <label for="Answer1_4">Are you 70 years of age or older, experiencing any of the following symptoms: delirium, unexplained or increased number of falls, acute functional decline, or worsening of chronic conditions?</label>
  <p id="Answer1_4" ></p>
  <br />
  
  <p>In-Office:</p>
  <label for="Answer2_1">Have you had close contact with anyone with acute respiratory llness or travelled outside of Canada in the past 14 days?</label>
  <p id="Answer2_1" ></p>
  <br />
  <label for="Answer2_2">Do you have a confirmed case of COVID-19 or had close contact with a confirmed case of COVID-19?</label>
  <p id="Answer2_2" ></p>
  <br />
  <label for="Answer2_3">
  Do you have any of the following symptoms:
  <ul>
  <li>Fever</li>
  <li>New onset of cough</li>
  <li>Worsening chronic cough</li>
  <li>Shortness of breath</li>
  <li>Difficulty breathing</li>
  <li>Sore throat</li>
  <li>Difficulty swallowing</li>
  <li>Decrease or loss of sense of taste or smell</li>
  <li>Chills</li>
  <li>Headaches</li>
  <li>Unexplained fatigue/malaise/muscle aches (myalgias)</li>
  <li>Nausea/vomiting, diarrhea, abdominal pain</li>
  <li>Pink eye (conjunctivitis)</li>
  <li>Runny nose/nasal congestion without other known cause</li>
</ul>
  </label>
  <p id="Answer2_3" ></p>
  <br />
  <label for="Answer2_4">Are you 70 years of age or older, experiencing any of the following symptoms: delirium, unexplained or increased number of falls, acute functional decline, or worsening of chronic conditions?</label>
  <p id="Answer2_4" ></p>
  <br />
  
  <ul style="list-style-type:disc;">
	  <li>Any <q>yes</q> response must be discussed with the dentist immediately.</li>
	  <li>Tell the patient when they arrive at the office, they will be asked to:</li>
	  <ul style="list-style-type:circle;">
		  <li>Sanitize their hands.</li>
		  <li>Answer the questions again.</li>
		  <li>Have their temperature taken.</li>
	  </ul> 
	  <li>Advise the patient:</li>
	  	  <ul style="list-style-type:circle;">
			  <li>Only patients are allowed to come to the office.</li>
			  <li>If possible, to wait in their car until their appointment, call the office when they arrive.</li>
			  <li>To wear a mask to their appointment.</li>
		  </ul> 
  </ul>
  </div>
	</div>
</div>
</form>
</body>
</html>
<?php

?>