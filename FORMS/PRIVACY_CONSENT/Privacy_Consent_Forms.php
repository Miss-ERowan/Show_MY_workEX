<?php
session_start();

?>
<html> 
<head>  
<title>Test</title>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
<script type="text/javascript" src="../../JavaS_Functions.js"></script>
<link rel="stylesheet" type="text/css" href="../../PageStyle.css">
</head>  
<body onload="Hide_Show('Filled');Hide_Show('HideB');">
<div ID="LINKS" >
<h2>
 <a href="../COVID_SCREENING/Covid19_Screening_Forms.php" >COVID 19 SCREENING</a><br />
 
 <a href="../DENTAL_HISTORY/Dental_History_Forms.php" >DENTAL HISTORY</a><br />
 
 <a href="../MEDICAL_HISTORY/MEDICAL_HISTORY_Forms.php" >MEDICAL HISTORY</a><br />
 
 <a class="Selected_Page" href="Privacy_Consent_Forms.php" >PRIVACY CONSENT</a><br />
 
 <a href="../../MainPage/MainPage.php" >HOME</a><br /></h2>
 </div>
 
  <button onclick="Hide_Show('Filled');Hide_Show('Fill_in');Hide_Show('HideB');Submit_Privacy_Consent()" >View Form</button><br />
<button ID="HideB" onClick="genPDF()" >Get PDF</button>
 
  <form action="Privacy_Consent_Submit.php" method="POST">
<div ID="Fill_in" >
<h1>INFORMED CONSENT</h1>
<br />

<h3>For the collection, use and disclosure of Personal Information</h3>

<p>We are committed to maintaining the accuracy, confidentially, and security of your personally identifiable information (“Personal Information”). As part of this commitment, our privacy policy governs our actions as they relate to the collection, use and disclosure of Personal Information. Our privacy policy is based upon the values set by the Canadian Standards Association’s Model Code for the Protection of Personal Information and Canada’s Personal Information Protection and Electronic Documents Act. All Lakeside Dental Centre team members are trained in the appropriate uses and protection of your information.</p>
<br /><br />

<h5>Lakeside Dental Centre will collect, use and disclose your information for the following reasons:</h5>

<ul>
  <li>To offer and provide treatment, care and services in relationship to your dental care</li>
  <li>To identify and ensure continuous high quality service</li>
  <li>To enable to contact you by phone, email and/or text message for appointment reminders and to book appointments</li>
  <li>To communicate with other treating health-care providers, specialists and general dentists</li>
  <li>To allow us to efficiently follow-up for treatment, care and billing</li>
  <li>To comply with legal and regulatory requirements in a timely fashion, when required, according to the provisions of the Regulated Health Professions Act</li>
  <li>To deliver your charts and records to the dentist's benefits carrier to enable the benefits company to access liability and quantify damages</li>
  <li>To process credit card payments and to collect unpaid accounts</li>
  <li>To assist this office to comply with all regulatory requirements and the law</li>
</ul> 
<br /><br />
<h2>PATIENT CONSENT</h2>

<p>I have reviewed the above information that explains how Lakeside Dental Centre will use my personal information,
and the steps our office is taking to protect my information. I agree that Lakeside Dental Centre can collect, use and
disclose personal information about me as set out above.</p>
<br />

<label for="Gard_Name_Title" >Signature of Patient, Parent or Guardian</label>
<input type="text" name="Gard_Name_Title" id="Gard_Name_Title" ></input>

<label for="P_sign_Date" >Date</label>
<input type="date" name="P_sign_Date" id="P_sign_Date" ></input><br />

<label for="Name_Title" >Patient Name:</label>
<input type="text" name="Name_Title" id="Name_Title" ></input>
<br /><br />

<p><b>3 Mike Richards Way</b></p>
<p><b>Kenora ON P9N 1K9</b></p>
<p><b>(807)468-3374</b></p>
<p><b>www.lakeside-dental.ca</b></p>

</div> 


<div ID="Filled">
    <div>
	<div>
	<input type="submit" value="SUBMIT" name="submit" />
<h1>INFORMED CONSENT</h1>
<br />

<h3>For the collection, use and disclosure of Personal Information</h3>

<p>We are committed to maintaining the accuracy, confidentially, and security of your personally identifiable information (“Personal Information”). As part of this commitment, our privacy policy governs our actions as they relate to the collection, use and disclosure of Personal Information. Our privacy policy is based upon the values set by the Canadian Standards Association’s Model Code for the Protection of Personal Information and Canada’s Personal Information Protection and Electronic Documents Act. All Lakeside Dental Centre team members are trained in the appropriate uses and protection of your information.</p>
<br /><br />

<h5>Lakeside Dental Centre will collect, use and disclose your information for the following reasons:</h5>

<ul>
  <li>To offer and provide treatment, care and services in relationship to your dental care</li>
  <li>To identify and ensure continuous high quality service</li>
  <li>To enable to contact you by phone, email and/or text message for appointment reminders and to book appointments</li>
  <li>To communicate with other treating health-care providers, specialists and general dentists</li>
  <li>To allow us to efficiently follow-up for treatment, care and billing</li>
  <li>To comply with legal and regulatory requirements in a timely fashion, when required, according to the provisions of the Regulated Health Professions Act</li>
  <li>To deliver your charts and records to the dentist's benefits carrier to enable the benefits company to access liability and quantify damages</li>
  <li>To process credit card payments and to collect unpaid accounts</li>
  <li>To assist this office to comply with all regulatory requirements and the law</li>
</ul> 
<br /><br />
<h2>PATIENT CONSENT</h2>

<p>I have reviewed the above information that explains how Lakeside Dental Centre will use my personal information,
and the steps our office is taking to protect my information. I agree that Lakeside Dental Centre can collect, use and
disclose personal information about me as set out above.</p>
<br />

<label for="Gard_Name_TitleAnswer" >Signature of Patient, Parent or Guardian</label>
<p id="Gard_Name_TitleAnswer" ></p>

<label for="P_sign_DateAnswer" >Date</label>
<p id="P_sign_DateAnswer" ></p><br />

<label for="Name_TitleAnswer" >Patient Name:</label>
<p id="Name_TitleAnswer" ></p>
<br /><br />

<p><b>3 Mike Richards Way</b></p>
<p><b>Kenora ON P9N 1K9</b></p>
<p><b>(807)468-3374</b></p>
<p><b>www.lakeside-dental.ca</b></p>
</div>
</div>
</div>
</form>
</body>
</html>
<?php

?>