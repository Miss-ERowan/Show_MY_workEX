<?php
session_start();

?> 
<html> 
<head>  
<title>MEDICAL HISTORY</title>  
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
 
 <a class="Selected_Page" href="MEDICAL_HISTORY_Forms.php" >MEDICAL HISTORY</a><br />
 
 <a href="../PRIVACY_CONSENT/Privacy_Consent_Forms.php" >PRIVACY CONSENT</a><br />
 
 <a href="../../MainPage/MainPage.php" >HOME</a><br /></h2>
 </div>
 
<button ID="SUBMIT_BUTTON" onclick="Hide_Show('Filled');Hide_Show('Fill_in');Hide_Show('HideB');Submit_Medical_History()" >View Form</button>
<button ID="HideB" onClick="genPDF()" >Get PDF</button>

 <form action="Medical_History_Submit.php" method="POST">
<div ID="Fill_in" >

<h1>MEDICAL HISTORY QUESTIONNAIRE</h1>

<h3>MEDICAL ALERT:</h3><br />

<!-- Get user input with textboxes, radio buttons and checkboxs -->
<label for="Name_Title" >NAME: MR./MiSS/MRS./MS./DR.</label>
<input type="text" name="Name_Title" id="Name_Title" ></input><br>

<label for="P_birth" >DATE OF BIRTH (DAY/MONTH/YEAR):</label>
<input type="date" name="P_birth" id="P_birth" ></input><br>

<p>IN CASE OF EMERGENCY, WE SHOULD NOTIFY:</p><br>

<label for="Name_Emrg" >NAME:</label>
<input type="text" name="Name_Emrg" id="Name_Emrg" ></input><br>

<label for="Relationship_Emrg" >RELATIONSHIP:</label>
<input type="text" name="Relationship_Emrg" id="Relationship_Emrg" ></input><br>

<label for="Emrg_Phone" >DAY-TIME PHONE:</label>
<input type="text" name="Emrg_Phone" id="Emrg_Phone" ></input><br>
<br />

<label for="FD_Name" >NAME OF FAMILY DOCTOR:</label>
<input type="text" name="FD_Name" id="FD_Name" ></input><br>

<label for="phoneFD">PHONE:</label>
<input type="text" name="phoneFD" id="phoneFD" ></input><br>
<br />

<label for="Med_Spec_Name" >NAME OF MEDICAL SPECIALIST:</label>
<input type="text" name="Med_Spec_Name" id="Med_Spec_Name" ></input><br>

<label for="AREAOFS">AREA OF SPECIALITY:</label>
<input type="text" name="AREAOFS" id="AREAOFS"></input><br>

<label for="phoneMS">PHONE:</label>
<input type="text" name="phone" id="phone" ></input><br>
<br />

<p>The following information is required to enabie us to provide you with the best possible dental care.
All information is strictly private, and is protected by doctor-patient confidentiality. The dentist will review
the questions and explain any that you do not understand. Please fill in the entire form.</p><br /><br />

  <p>Are you being treated for any medical condition at the present or have you been treated within the past year? If so, why?</p>
  <input type="radio" id="Yes" name="Q1" value="Yes">
  <label for="Yes">YES</label><br>
  <input type="radio" id="No" name="Q1" value="No">
  <label for="No">NO</label><br>
  <input type="radio" id="NS_Mabey" name="Q1" value="Mabey">
  <label for="NS_Mabey">NOT SURE/MABEY</label><br />
  <input type="text" name="Q1_2" id="Q1_2" ></input>
  <br />
  
  <!--INFO error here!!
  
  
  
  
  
  
  -->
  <p>When was your last medical checkup?</p>
  <input type="date" name="Q2" id="Q2" ></input>
  <br>
  
  <p>Has there been any change in your general health in the past year? If yes, please explain.</p>
  <input type="radio" id="Yes" name="Q3" value="Yes">
  <label for="Yes">YES</label><br>
  <input type="radio" id="No" name="Q3" value="No">
  <label for="No">NO</label><br>
  <input type="radio" id="NS_Mabey" name="Q3" value="Mabey">
  <label for="NS_Mabey">NOT SURE/MABEY</label><br />
  <input type="text" name="Q3_2" id="Q3_2" ></input>
  <br />
  
  <p>Are you taking any medications, non-prescription drugs or herbal supplements of any kind? ff yes, please list.</p>
  <input type="radio" id="Yes" name="Q4" value="Yes">
  <label for="Yes">YES</label><br>
  <input type="radio" id="No" name="Q4" value="No">
  <label for="No">NO</label><br>
  <input type="radio" id="NS_Mabey" name="Q4" value="Mabey">
  <label for="NS_Mabey">NOT SURE/MABEY</label><br />
  <input type="text" name="Q4_2" id="Q4_2" ></input>
  <br />
  
  <p>Do you have any allergies? If you answered yes, please list using the categories below:</p>
  <input type="radio" id="Yes" name="Q5" value="Yes">
  <label for="Yes">YES</label><br>
  <input type="radio" id="No" name="Q5" value="No">
  <label for="No">NO</label><br>
  <input type="radio" id="NS_Mabey" name="Q5" value="Mabey">
  <label for="NS_Mabey">NOT SURE/MABEY</label><br /><br />
  
  <input type="radio" id="Meds" name="Q5_2" value="medications">
  <label for="Meds">medications</label><br>
  <input type="radio" id="Latex_RubberP" name="Q5_2" value="latex/rubber products">
  <label for="Latex_RubberP">latex/rubber products</label><br>
  <input type="radio" id="Other" name="Q5_2" value="other (e.g. hayfever, foods)">
  <label for="Other">other (e.g. hayfever, foods)</label><br />
  
  <input type="text" name="Q5_3" id="Q5_3" ></input>
  <br />
  
  <p>Have you ever had a peculiar or adverse reaction to any medicines or injections? If yes, please explain.</p>
  <input type="radio" id="Yes" name="Q6" value="Yes">
  <label for="Yes">YES</label><br>
  <input type="radio" id="No" name="Q6" value="No">
  <label for="No">NO</label><br>
  <input type="radio" id="NS_Mabey" name="Q6" value="Mabey">
  <label for="NS_Mabey">NOT SURE/MABEY</label><br />
  
  <input type="text" name="Q6_2" id="Q6_2" ></input>
  <br />
  
  <p>Do you have or have you ever had asthma?</p>
  <input type="radio" id="Yes" name="Q7" value="Yes">
  <label for="Yes">YES</label><br>
  <input type="radio" id="No" name="Q7" value="No">
  <label for="No">NO</label><br>
  <input type="radio" id="NS_Mabey" name="Q7" value="Mabey">
  <label for="NS_Mabey">NOT SURE/MABEY</label><br />
  
  <p>Do you have or have you ever had any heart or blood pressure problems?</p>
  <input type="radio" id="Yes" name="Q8" value="Yes">
  <label for="Yes">YES</label><br>
  <input type="radio" id="No" name="Q8" value="No">
  <label for="No">NO</label><br>
  <input type="radio" id="NS_Mabey" name="Q8" value="Mabey">
  <label for="NS_Mabey">NOT SURE/MABEY</label><br />
  
  <p>Do you have or have you ever had a replacement or repair of a heart valve, an infection of the heart (i.e. infective endocarditis), a heart condition from birth (i.e. congenital heart disease) or a heart transplant?</p>
  <input type="radio" id="Yes" name="Q9" value="Yes">
  <label for="Yes">YES</label><br>
  <input type="radio" id="No" name="Q9" value="No">
  <label for="No">NO</label><br>
  <input type="radio" id="NS_Mabey" name="Q9" value="Mabey">
  <label for="NS_Mabey">NOT SURE/MABEY</label><br />
  
  <p>Do you have a prosthetic or artificial joint?</p>
  <input type="radio" id="Yes" name="Q10" value="Yes">
  <label for="Yes">YES</label><br>
  <input type="radio" id="No" name="Q10" value="No">
  <label for="No">NO</label><br>
  <input type="radio" id="NS_Mabey" name="Q10" value="Mabey">
  <label for="NS_Mabey">NOT SURE/MABEY</label><br />
  
  <p>Do you have any conditions or therapies that could affect your immune system, e.g. leukemia, AIDS, HIV infection, radiotherapy, chemotherapy?</p>
  <input type="radio" id="Yes" name="Q11" value="Yes">
  <label for="Yes">YES</label><br>
  <input type="radio" id="No" name="Q11" value="No">
  <label for="No">NO</label><br>
  <input type="radio" id="NS_Mabey" name="Q11" value="Mabey">
  <label for="NS_Mabey">NOT SURE/MABEY</label><br />
  
  <p>Have you ever had hepatitis, jaundice or liver disease?</p>
  <input type="radio" id="Yes" name="Q12" value="Yes">
  <label for="Yes">YES</label><br>
  <input type="radio" id="No" name="Q12" value="No">
  <label for="No">NO</label><br>
  <input type="radio" id="NS_Mabey" name="Q12" value="Mabey">
  <label for="NS_Mabey">NOT SURE/MABEY</label><br />
  
  <p>Do you have a bleeding problem or bleeding disorder?</p>
  <input type="radio" id="Yes" name="Q13" value="Yes">
  <label for="Yes">YES</label><br>
  <input type="radio" id="No" name="Q13" value="No">
  <label for="No">NO</label><br>
  <input type="radio" id="NS_Mabey" name="Q13" value="Mabey">
  <label for="NS_Mabey">NOT SURE/MABEY</label><br />
  
  <p>Have you ever been hospitalized for any illnesses or operations? If yes, please explain.</p>
  <input type="radio" id="Yes" name="Q14" value="Yes">
  <label for="Yes">YES</label><br>
  <input type="radio" id="No" name="Q14" value="No">
  <label for="No">NO</label><br>
  <input type="radio" id="NS_Mabey" name="Q14" value="Mabey">
  <label for="NS_Mabey">NOT SURE/MABEY</label><br />
  
  <p>Do you have or have you ever had any of the following? Please check.</p>
  <input type="checkbox" id="Q15_1" name="Q15_1" value="chest pain, angina">
  <label for="Q15_1">chest pain, angina</label>
  <br />
  <input type="checkbox" id="Q15_2" name="Q15_2" value="rheumatic fever">
  <label for="Q15_2">rheumatic fever</label>
  <br />
  <input type="checkbox" id="Q15_3" name="Q15_3" value="pacemaker">
  <label for="Q15_3">pacemaker</label>
  <br />
  <input type="checkbox" id="Q15_4" name="Q15_4" value="steroid therapy">
  <label for="Q15_4">steroid therapy</label>
  <br />
  <input type="checkbox" id="Q15_5" name="Q15_5" value="seizures (epilepsy)">
  <label for="Q15_5">seizures (epilepsy)</label>
  <br />
  <input type="checkbox" id="Q15_6" name="Q15_6" value="osteoporosis medications (e.g. Fosamax, Actonel)">
  <label for="Q15_6">osteoporosis medications (e.g. Fosamax, Actonel)</label>
  <br />
  <input type="checkbox" id="Q15_7" name="Q15_7" value="heart attack">
  <label for="Q15_7">heart attack</label>
  <br />
  <input type="checkbox" id="Q15_8" name="Q15_8" value="mitral valve prolapse">
  <label for="Q15_8">mitral valve prolapse</label>
  <br />
  <input type="checkbox" id="Q15_9" name="Q15_9" value="lung disease">
  <label for="Q15_9">lung disease</label>
  <br />
  <input type="checkbox" id="Q15_10" name="Q15_10" value="diabetes">
  <label for="Q15_10">diabetes</label>
  <br />
  <input type="checkbox" id="Q15_11" name="Q15_11" value="kidney disease">
  <label for="Q15_11">kidney disease</label>
  <br />
  <input type="checkbox" id="Q15_12" name="Q15_12" value="stroke">
  <label for="Q15_12">stroke</label>
  <br />
  <input type="checkbox" id="Q15_13" name="Q15_13" value="tuberculosis">
  <label for="Q15_13">tuberculosis</label>
  <br />
  <input type="checkbox" id="Q15_14" name="Q15_14" value="stomach ulcers">
  <label for="Q15_14">stomach ulcers</label>
  <br />
  <input type="checkbox" id="Q15_15" name="Q15_15" value="thyroid disease">
  <label for="Q15_15">thyroid disease</label>
  <br />
  <input type="checkbox" id="Q15_16" name="Q15_16" value="shortness of breath">
  <label for="Q15_16">shortness of breath</label>
  <br />
  <input type="checkbox" id="Q15_17" name="Q15_17" value="heart murmur">
  <label for="Q15_17">heart murmur</label>
  <br />
  <input type="checkbox" id="Q15_18" name="Q15_18" value="cancer">
  <label for="Q15_18">cancer</label>
  <br />
  <input type="checkbox" id="Q15_19" name="Q15_19" value="arthritis">
  <label for="Q15_19">arthritis</label>
  <br />
  <input type="checkbox" id="Q15_20" name="Q15_20" value="drug/alcohol dependency">
  <label for="Q15_20">drug/alcohol dependency</label>
  <br />
  
  
  <p>Are there any conditions or diseases not listed above that you have or have had? If so, what?</p>
  <input type="radio" id="Yes" name="Q16" value="Yes">
  <label for="Yes">YES</label><br>
  <input type="radio" id="No" name="Q16" value="No">
  <label for="No">NO</label><br>
  <input type="radio" id="NS_Mabey" name="Q16" value="Mabey">
  <label for="NS_Mabey">NOT SURE/MABEY</label><br />
  
  <p>Are there any diseases or medical problems that run in your family?</p>
  <input type="radio" id="Yes" name="Q17" value="Yes">
  <label for="Yes">YES</label><br>
  <input type="radio" id="No" name="Q17" value="No">
  <label for="No">NO</label><br>
  <input type="radio" id="NS_Mabey" name="Q17" value="Mabey">
  <label for="NS_Mabey">NOT SURE/MABEY</label><br />
  
  <p>Do you smoke or chew tobacco products?</p>
  <input type="radio" id="Yes" name="Q18" value="Yes">
  <label for="Yes">YES</label><br>
  <input type="radio" id="No" name="Q18" value="No">
  <label for="No">NO</label><br>
  <input type="radio" id="NS_Mabey" name="Q18" value="Mabey">
  <label for="NS_Mabey">NOT SURE/MABEY</label><br />
  
  <p>Are you nervous during dental treatment?</p>
  <input type="radio" id="Yes" name="Q19" value="Yes">
  <label for="Yes">YES</label><br>
  <input type="radio" id="No" name="Q19" value="No">
  <label for="No">NO</label><br>
  <input type="radio" id="NS_Mabey" name="Q19" value="Mabey">
  <label for="NS_Mabey">NOT SURE/MABEY</label><br />
  
  <p>For women only: Are you breastfeeding or pregnant? If pregnant, what is the expected delivery date?</p>
  <input type="radio" id="Yes" name="Q20" value="Yes">
  <label for="Yes">YES</label><br>
  <input type="radio" id="No" name="Q20" value="No">
  <label for="No">NO</label><br>
  <input type="radio" id="NS_Mabey" name="Q20" value="Mabey">
  <label for="NS_Mabey">NOT SURE/MABEY</label><br />
  
  <p>To the best of my knowledge, the above information is correct:</p>
  <label for="Name_Title_bottom" >PATIENT/PARENT/GUARDIAN SIGNATURE:</label>
  <input type="text" name="Name_Title_bottom" id="Name_Title_bottom" ></input><br>
  <label for="Date_bottom" >DATE:</label>
  <input type="date" name="Date_bottom" id="Date_bottom" ></input><br>

  <label for="DENTIST_Bottom" >DENTIST SIGNATURE:</label>
  <input type="text" name="DENTIST_Bottom" id="DENTIST_Bottom" ></input><br>
  <label for="Date_bottom2" >DATE:</label>
  <input type="date" name="Date_bottom2" id="Date_bottom2" ></input><br>
</div>

<!-- Have a hidden filled out form that the dentist can print a pdf file of-->
<div ID="Filled">
    <div>
	<div>
	  <input type="submit" value="SUBMIT" name="submit" />
<h1>MEDICAL HISTORY QUESTIONNAIRE</h1>

<h3>MEDICAL ALERT:</h3><br />

<label for="Name_TitleAnswer" >NAME: MR./MiSS/MRS./MS./DR.</label>
<p name="Name_TitleAnswer" id="Name_TitleAnswer" ></p><br>

<label for="P_birthAnswer" >DATE OF BIRTH (DAY/MONTH/YEAR):</label>
<p name="P_birthAnswer" id="P_birthAnswer" ></p><br>

<p>IN CASE OF EMERGENCY, WE SHOULD NOTIFY:</p><br>

<label for="Name_EmrgAnswer" >NAME:</label>
<p name="Name_EmrgAnswer" id="Name_EmrgAnswer" ></p><br>

<label for="Relationship_EmrgAnswer" >RELATIONSHIP:</label>
<p name="Relationship_EmrgAnswer" id="Relationship_EmrgAnswer" ></p><br>

<label for="Emrg_PhoneAnswer" >DAY-TIME PHONE:</label>
<p name="Emrg_PhoneAnswer" id="Emrg_PhoneAnswer" ></p><br>
<br />

<label for="FD_NameAnswer" >NAME OF FAMILY DOCTOR:</label>
<p name="FD_NameAnswer" id="FD_NameAnswer" ></p><br>

<label for="phoneFDAnswer">PHONE:</label>
<p name="phoneFDAnswer" id="phoneFDAnswer" ></p><br>
<br />

<label for="Med_Spec_NameAnswer" >NAME OF MEDICAL SPECIALIST:</label>
<p name="Med_Spec_NameAnswer" id="Med_Spec_NameAnswer" ></p><br>

<label for="AREAOFSAnswer">AREAOFSPECIALITY:</label>
<p name="AREAOFSAnswer" id="AREAOFSAnswer"></p><br>

<label for="phoneMSAnswer">PHONE:</label>
<p name="phoneMSAnswer" id="phoneMSAnswer" ></p><br>
<br />

<p>The following information is required to enabie us to provide you with the best possible dental care.
All information is strictly private, and is protected by doctor-patient confidentiality. The dentist will review
the questions and explain any that you do not understand. Please fill in the entire form.</p><br /><br />

  <p>Are you being treated for any medical condition at the present or have you been treated within the past year? If so, why?</p>
  <p name="Answer_1" id="Answer_1"></p>
  <p name="Answer_1" id="Answer_1_2"></p>
  <br />
  
  <p>When was your last medical checkup?</p>
  <p name="Answer_2" id="Answer_2"></p>
  <br>
  
  <p>Has there been any change in your general health in the past year? If yes, please explain.</p>
  <p name="Answer_3" id="Answer_3"></p>
  <p name="Answer_3" id="Answer_3_2"></p>
  <br />
  
  <p>Are you taking any medications, non-prescription drugs or herbal supplements of any kind? ff yes, please list.</p>
  <p name="Answer_4" id="Answer_4"></p>
  <p name="Answer_4" id="Answer_4_2"></p>
  <br />
  
  <p>Do you have any allergies? If you answered yes, please list using the categories below:</p>
  <p name="Answer_5" id="Answer_5"></p>
  <p name="Answer_5" id="Answer_5_2"></p>
  <p name="Answer_5" id="Answer_5_3"></p>
  <br />
  
  <p>Have you ever had a peculiar or adverse reaction to any medicines or injections? !f yes, please explain.</p>
  <p name="Answer_6" id="Answer_6"></p>
  <p name="Answer_6" id="Answer_6_2"></p>
  <br />
  
  <p>Do you have or have you ever had asthma?</p>
  <p name="Answer_7" id="Answer_7"></p>
  <br />
  
  <p>Do you have or have you ever had any heart or blood pressure problems?</p>
  <p name="Answer_8" id="Answer_8"></p>
  <br />
  
  <p>Do you have or have you ever had a replacement or repair of a heart valve, an infection of the heart (i.e. infective endocarditis), a heart condition from birth (i.e. congenital heart disease) or a heart transplant?</p>
  <p name="Answer_9" id="Answer_9"></p>
  <br />
  
  <p>Do you have a prosthetic or artificial joint?</p>
  <p name="Answer_10" id="Answer_10"></p>
  <br />
  
  <p>Do you have any conditions or therapies that could affect your immune system, e.g. leukemia, AIDS, HIV infection, radiotherapy, chemotherapy?</p>
  <p name="Answer_11" id="Answer_11"></p>
  <br />
  
  <p>Have you ever had hepatitis, jaundice or liver disease?</p>
  <p name="Answer_12" id="Answer_12"></p>
  <br />
  
  <p>Do you have a bleeding problem or bleeding disorder?</p>
  <p name="Answer_13" id="Answer_13"></p>
  <br />
  
  <p>Have you ever been hospitalized for any illnesses or operations? If yes, please explain.</p>
  <p name="Answer_14" id="Answer_14"></p>
  <br />
  
  <p>Do you have or have you ever had any of the following? Please check.</p>
  <p name="Answer_15" id="Answer_15"></p>
  <br />
  
  
  <p>Are there any conditions or diseases not listed above that you have or have had? If so, what?</p>
  <p name="Answer_16" id="Answer_16"></p>
  <br />
  
  <p>Are there any diseases or medical problems that run in your family?</p>
  <p name="Answer_17" id="Answer_17"></p>
  <br />
  
  <p>Do you smoke or chew tobacco products?</p>
  <p name="Answer_18" id="Answer_18"></p>
  <br />
  
  <p>Are you nervous during dental treatment?</p>
  <p name="Answer_19" id="Answer_19"></p>
  <br />
  
  <p>For women only: Are you breastfeeding or pregnant? If pregnant, what is the expected delivery date?</p>
  <p name="Answer_20" id="Answer_20"></p>
  <br />
  
  <p>To the best of my knowledge, the above information is correct:</p>
  <label for="Name_Title_bottomAnswer" >PATIENT/PARENT/GUARDIAN SIGNATURE:</label>
  <p name="Name_Title_bottomAnswer" id="Name_Title_bottomAnswer" ></p><br>
  <label for="Date_bottomAnswer" >DATE:</label>
  <p name="Date_bottomAnswer" id="Date_bottomAnswer" ></p><br>

  <label for="DENTIST_BottomAnswer" >DENTIST SIGNATURE:</label>
  <p name="DENTIST_BottomAnswer" id="DENTIST_BottomAnswer" ></p><br>
  <label for="Date_bottom2Answer" >DATE:</label>
  <p name="Date_bottom2Answer" id="Date_bottom2Answer" ></p><br>
    </div>
	</div>
</div>
</form> 
</body>
</html>
<?php

?>