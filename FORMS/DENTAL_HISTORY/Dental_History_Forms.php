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
 
 <a class="Selected_Page" href="Dental_History_Forms.php" >DENTAL HISTORY</a><br />
 
 <a href="../MEDICAL_HISTORY/MEDICAL_HISTORY_Forms.php" >MEDICAL HISTORY</a><br />
 
 <a href="../PRIVACY_CONSENT/Privacy_Consent_Forms.php" >PRIVACY CONSENT</a><br />
 
 <a href="../../MainPage/MainPage.php" >HOME</a><br /></h2>
 </div>
<button ID="SUBMIT_BUTTON" onclick="Hide_Show('Filled');Hide_Show('Fill_in');Hide_Show('HideB');Submit_Dental_History()" >View Form</button>
 <button ID="HideB" onClick="genPDF()" >Get PDF</button>

 <form action="Dental_History_Submit.php" method="POST">
<div ID="Fill_in" >
<h1>DENTAL HISTORY</h1>
<br />
<div ID="Clean" >
<label for="Name_Title" >Patient Name:</label>
<input type="text" name="Name_Title" id="Name_Title" ></input>
</div>

<div ID="Clean" >
<label for="P_birth" >Date of Birth:</label>
<input type="date" name="P_birth" id="P_birth" ></input><br />
</div>

<div ID="Clean" >
<label for="P_Address" >Patient Address:</label>
<input type="text" name="P_Address" id="P_Address" ></input><br />
</div>

<div ID="Clean" >
<label for="P_HomePhone" >Patient Home Phone #:</label>
<input type="text" name="P_HomePhone" id="P_HomePhone" ></input>
</div>

<div ID="Clean" >
<label for="P_Cell" >Cell#:</label>
<input type="text" name="P_Cell" id="P_Cell" ></input>
</div>

<div ID="Clean" >
<label for="P_workPhone" >Work #:</label>
<input type="text" name="P_workPhone" id="P_workPhone" ></input><br />
</div>

<div ID="Clean" >
<label for="P_Employment" >Place of Employment:</label>
<input type="text" name="P_Employment" id="P_Employment" ></input><br />
</div>

<div ID="Clean" >
<label for="P_Insurance_Company" >Insurance Company:</label>
<input type="text" name="P_Insurance_Company" id="P_Insurance_Company" ></input>
</div>

<div ID="Clean" >
<label for="P_Ins_Policy" >Policy #:</label>
<input type="text" name="P_Ins_Policy" id="P_Ins_Policy" ></input>
</div>

<div ID="Clean" >
<label for="P_ID" >ID #:</label>
<input type="text" name="P_ID" id="P_ID" ></input><br /><br />
</div>

<div ID="Clean" >
<label for="Q1" >1.) Purpose of your visit today?</label><br />
<input type="text" name="Q1" id="Q1" ></input><br /><br />
</div>

<div ID="Clean" >
<label for="Q2_1" >2.) How long has it been since you were last seen by a dentist?</label><br />
<input type="text" name="Q2_1" id="Q2_1" ></input><br />
</div>

<div ID="Clean" >
<label for="Q2_2" >How long has it been since your last professional dental cleaning?</label><br />
<input type="text" name="Q2_2" id="Q2_2" ></input><br />
</div>

<div ID="Clean" >
<label for="Q3" >3.) How often do you brush your teeth? Floss your teeth?</label>
<input type="text" name="Q3" id="Q3" ></input><br />
</div>

<p for="Q4" >4.) Indicate which of the following you previously or currently have been treated with (check all that apply)</p>
  <input type="checkbox" id="Q4_1" name="Q4_1" value="Fixed bridge">
  <label for="Q4_1">Fixed bridge</label>
  <br />
  <input type="checkbox" id="Q4_2" name="Q4_2" value="Crown">
  <label for="Q4_2">Crown</label>
  <br />
  <input type="checkbox" id="Q4_3" name="Q4_3" value="Removable partial denture">
  <label for="Q4_3">Removable partial denture</label>
  <br />
  <input type="checkbox" id="Q4_4" name="Q4_4" value="Complete denture">
  <label for="Q4_4">Complete denture</label>
  <br />
  <input type="checkbox" id="Q4_5" name="Q4_5" value="Implant">
  <label for="Q4_5">Implant</label>
  <br />
  <input type="checkbox" id="Q4_6" name="Q4_6" value="Gum disease treatment">
  <label for="Q4_6">Gum disease treatment</label>
  <br />
  <input type="checkbox" id="Q4_7" name="Q4_7" value="Orthodontic treatment">
  <label for="Q4_7">Orthodontic treatment</label>
<br />

<p for="Q5" >5.) Indicate which of the following symptoms you experience (check all that apply)</p>
  <input type="checkbox" id="Q5_1" name="Q5_1" value="Hot/cold/sweet sensitivity">
  <label for="Q5_1">Hot/cold/sweet sensitivity</label>
  <br />
  <input type="checkbox" id="Q5_2" name="Q5_2" value="Pressure/biting sensitivity">
  <label for="Q5_2">Pressure/biting sensitivity</label>
  <br />
  <input type="checkbox" id="Q5_3" name="Q5_3" value="Bleeding gums when flossing or brushing">
  <label for="Q5_3">Bleeding gums when flossing or brushing</label>
  <br />
  <input type="checkbox" id="Q5_4" name="Q5_4" value="Tender gums when flossing or brushing">
  <label for="Q5_4">Tender gums when flossing or brushing</label>
  <br />
  <input type="checkbox" id="Q5_5" name="Q5_5" value="Area(s) where food often traps">
  <label for="Q5_5">Area(s) where food often traps</label>
  <br />
  <input type="checkbox" id="Q5_6" name="Q5_6" value="Clenching or grinding of teeth">
  <label for="Q5_6">Clenching or grinding of teeth</label>
  <br />
  <input type="checkbox" id="Q5_7" name="Q5_7" value="Jaw clicking or popping">
  <label for="Q5_7">Jaw clicking or popping</label>
  <br />
  <input type="checkbox" id="Q5_8" name="Q5_8" value="Pain or soreness in facial muscles or around ear">
  <label for="Q5_8">Pain or soreness in facial muscles or around ear</label>
  <br />
  <input type="checkbox" id="Q5_9" name="Q5_9" value="Frequent headaches or shoulder aches">
  <label for="Q5_9">Frequent headaches or shoulder aches</label>
  <br />
  <input type="checkbox" id="Q5_10" name="Q5_10" value="Chipped or broken teeth">
  <label for="Q5_10">Chipped or broken teeth</label>
  <br />
  <input type="checkbox" id="Q5_11" name="Q5_11" value="Feel your breath is offensive at times">
  <label for="Q5_11">Feel your breath is offensive at times</label>
<br /><br />

<p>6.) Have you ever had any problems or complications with previous dental treatment?</p>
  <input type="radio" id="Yes" name="Q6" value="Yes">
  <label for="Yes">YES</label><br>
  <input type="radio" id="No" name="Q6" value="No">
  <label for="No">NO</label><br>
  
<p>7.) Are you unhappy with the appearance of your teeth?</p>
  <input type="radio" id="Yes" name="Q7" value="Yes">
  <label for="Yes">YES</label><br>
  <input type="radio" id="No" name="Q7" value="No">
  <label for="No">NO</label><br>

<p>8.) Have you had any unpleasant dental experiences?</p>
  <input type="radio" id="Yes" name="Q8" value="Yes">
  <label for="Yes">YES</label><br>
  <input type="radio" id="No" name="Q8" value="No">
  <label for="No">NO</label><br>

<div ID="Clean">
<label for="Q9" >9.) Who referred you to our office?</label><br />
<input type="text" name="Q9" id="Q9" ></input><br /><br />
</div>

<p>I certify that the above information is complete and accurate.<p />

<label for="P_Sign" >(Patient/Guardian Signature)</label><br />
<input type="text" name="P_Sign" id="P_Sign" ></input><br />

<label for="P_Sign_Date" >(Date)</label><br />
<input type="date" name="P_Sign_Date" id="P_Sign_Date" ></input><br /><br />

<label for="Dentist_Sign" >(Dentist's Signature)</label><br />
<input type="text" name="Dentist_Sign" id="Dentist_Sign" ></input><br />

<label for="Dentist_Date" >(Date)</label><br />
<input type="date" name="Dentist_Date" id="Dentist_Date" ></input><br /><br />

</div>

<div ID="Filled">
    <div>
	<input type="submit" value="SUBMIT" name="submit" />
	<div>
<h1>DENTAL HISTORY</h1>
<br />

<label for="Name_TitleAnswerDH" >Patient Name:</label>
<p id="Name_TitleAnswerDH" ><p />

<label for="P_birthAnswerDH" >Date of Birth:</label>
<p id="P_birthAnswerDH" ><p /><br />

<label for="P_AddressAnswerDH" >Patient Address:</label>
<p id="P_AddressAnswerDH" ><p /><br />

<label for="P_HomePhoneAnswerDH" >Patient Home Phone #:</label>
<p id="P_HomePhoneAnswerDH" ><p />

<label for="P_CellAnswerDH" >Cell#:</label>
<p id="P_CellAnswerDH" ><p />

<label for="P_workPhoneAnswerDH" >Work #:</label>
<p id="P_workPhoneAnswerDH" ><p /><br />

<label for="P_EmploymentAnswerDH" >Place of Employment:</label>
<p id="P_EmploymentAnswerDH" ><p /><br />

<label for="P_Insurance_CompanyAnswerDH" >Insurance Company:</label>
<p id="P_Insurance_CompanyAnswerDH" ><p />

<label for="P_Ins_PolicyAnswerDH" >Policy #:</label>
<p id="P_Ins_PolicyAnswerDH" ><p />

<label for="P_IDAnswerDH" >ID #:</label>
<p id="P_IDAnswerDH" ><p /><br /><br />



<label for="Answer_1" >1.) Purpose of your visit today?</label>
<p id="Answer_1" ><p /><br /><br />

<label for="Answer_2_1" >2.) How long has it been since you were last seen by a dentist?</label>
<p id="Answer_2_1" ><p /><br />
<label for="Answer_2_2" >How long has it been since your last professional dental cleaning?</label>
<p id="Answer_2_2" ><p /><br />

<label for="Answer_3" >3.) How often do you brush your teeth? Floss your teeth?</label>
<p id="Answer_3" ><p /><br />

<p for="Answer_4" >4.) Indicate which of the following you previously or currently have been treated with (check all that apply)</p>
<p id="Answer_4" ><p />
<br />

<p for="Answer_5" >5.) Indicate which of the following symptoms you experience (check all that apply)</p>
<p id="Answer_5" ><p />
<br /><br />

<label for="Answer_6" >6.) Have you ever had any problems or complications with previous dental treatment?</label>
<p id="Answer_6" ><p /><br /><br />
  
<label for="Answer_7" >7.) Are you unhappy with the appearance of your teeth?</label>
<p id="Answer_7" ><p /><br /><br />

<label for="Answer_8" >8.) Have you had any unpleasant dental experiences?</label>
<p id="Answer_8" ><p /><br /><br />

<label for="Answer_9" >9.) Who referred you to our office?</label>
<p id="Answer_9" ><p /><br /><br />

<p>I certify that the above information is complete and accurate.<p />

<label for="P_SignAnswerDH" >(Patient/Guardian Signature)</label>
<p id="P_SignAnswerDH" ><p /><br />

<label for="P_Sign_DateAnswerDH" >(Date)</label>
<p id="P_Sign_DateAnswerDH" ><p /><br /><br />

<label for="Dentist_SignAnswerDH" >(Dentist's Signature)</label>
<p id="Dentist_SignAnswerDH" ><p /><br />

<label for="Dentist_DateAnswerDH" >(Date)</label>
<p id="Dentist_DateAnswerDH" ><p /><br /><br />
  </div>
	</div>
</div>
</form>
</body>
</html>
<?php
?>