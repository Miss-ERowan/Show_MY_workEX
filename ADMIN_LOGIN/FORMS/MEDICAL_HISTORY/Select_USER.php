<?php
session_start();
if(!isset($_SESSION["sess_user"])){
    header("location:login.php");
} else {
		if (!empty($_REQUEST["P"])){
			$P = $_REQUEST["P"];
			$P_U = explode(";", $P);
			//$patient = $P;
			//$patient = $P_U[0];
			$ID = $P_U[1];
			$USER = $P_U[0];
		$val = "";
		$Name_Title = "";
		$P_birth = "";
		$Name_Emrg = "";
		$Relationship_Emrg = "";
		$Emrg_Phone = "";
		$FD_Name = "";
		$phoneFD = "";
		$Med_Spec_Name = "";
		$AREAOFS = "";
		$phone = "";
		$Q1 = "";
		$Q1_2 = "";
		$Q2 = "";
		$Q3 = "";
		$Q3_2 = "";
		$Q4 = "";
		$Q4_2 = "";
		$Q5 = "";
		$Q5_2 = "";
		$Q5_3 = "";
		$Q6 = "";
		$Q6_2 = "";
		$Q7 = "";
		$Q8 = "";
		$Q9 = "";
		$Q10 = "";
		$Q11 = "";
		$Q12 = "";
		$Q13 = "";
		$Q14 = "";
		$Q15 = "";
		$Q16 = "";
		$Q17 = "";
		$Q18 = "";
		$Q19 = "";
		$Q20 = "";
		$Name_Title_bottom = "";
		$Date_bottom = "";
		$DENTIST_Bottom = "";
		$Date_bottom2 = "";
	//Require the config.php page to load the sql
		require '../../../Data_BaseConnections/config.php';
		
    //Save the sql connection to a varible
    $con = new mysqli(db_host, db_user, db_pass, db_name);
	
	//Get the values for the username
    //Save query to a string
    $sql = "SELECT ID, Name_Title, P_birth, Name_Emrg, Relationship_Emrg, Emrg_Phone, FD_Name, phoneFD, Med_Spec_Name, AREAOFS, phone, Q1, Q1_2, Q2, Q3, Q3_2, Q4, Q4_2, Q5, Q5_2, Q5_3, Q6, Q6_2, Q7, Q8, Q9, Q10, Q11, Q12, Q13, Q14, Q15, Q16, Q17, Q18, Q19, Q20, Name_Title_bottom, Date_bottom, DENTIST_Bottom, Date_bottom2 FROM medical_history WHERE ID = '$ID'";
  //save results
    $result = $con->query($sql);
  //Test if database is empty or full
    if ($result->num_rows >= 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	if(!empty($row['Name_Title'])){
		$Name_Title = $row["Name_Title"];
	}
	if(!empty($row['Username'])){
		$USERNAME = $row["Username"];
	}
	if(!empty($row['P_birth'])){
		$P_birth = $row["P_birth"];
	}
	if(!empty($row['Name_Emrg'])){
		$Name_Emrg = $row["Name_Emrg"];
	}
	if(!empty($row['Relationship_Emrg'])){
		$Relationship_Emrg = $row["Relationship_Emrg"];
	}
	if(!empty($row['Emrg_Phone'])){
		$Emrg_Phone = $row["Emrg_Phone"];
	}
	if(!empty($row['FD_Name'])){
		$FD_Name = $row["FD_Name"];
	}
	if(!empty($row['phoneFD'])){
		$phoneFD = $row["phoneFD"];
	}
	if(!empty($row['Med_Spec_Name'])){
		$Med_Spec_Name = $row["Med_Spec_Name"];
	}
	if(!empty($row['AREAOFS'])){
		$AREAOFS = $row["AREAOFS"];
	}
	if(!empty($row['phone'])){
		$phone = $row["phone"];
	}
	if(!empty($row['Q1'])){
		$Q1 = $row["Q1"];
	}
	if(!empty($row['Q1_2'])){
		$Q1_2 = $row["Q1_2"];
	}
	if(!empty($row['Q2'])){
		$Q2 = $row["Q2"];
	}
	if(!empty($row['Q3'])){
		$Q3 = $row["Q3"];
	}
	if(!empty($row['Q3_2'])){
		$Q3_2 = $row["Q3_2"];
	}
	if(!empty($row['Q4'])){
		$Q4 = $row["Q4"];
	}
	if(!empty($row['Q4_2'])){
		$Q4_2 = $row["Q4_2"];
	}
	if(!empty($row['Q5'])){
		$Q5 = $row["Q5"];
	}
	if(!empty($row['Q5_2'])){
		$Q5_2 = $row["Q5_2"];
	}
	if(!empty($row['Q5_3'])){
		$Q5_3 = $row["Q5_3"];
	}
	if(!empty($row['Q6'])){
		$Q6 = $row["Q6"];
	}
	if(!empty($row['Q6_2'])){
		$Q6_2 = $row["Q6_2"];
	}
	if(!empty($row['Q7'])){
		$Q7 = $row["Q7"];
	}
	if(!empty($row['Q8'])){
		$Q8 = $row["Q8"];
	}
	if(!empty($row['Q9'])){
		$Q9 = $row["Q9"];
	}
	if(!empty($row['Q10'])){
		$Q10 = $row["Q10"];
	}	
	if(!empty($row['Q11'])){
		$Q11 = $row["Q11"];
	}
	if(!empty($row['Q12'])){
		$Q12 = $row["Q12"];
	}
	if(!empty($row['Q13'])){
		$Q13 = $row["Q13"];
	}
	if(!empty($row['Q14'])){
		$Q14 = $row["Q14"];
	}
	if(!empty($row['Q15'])){
		$Q15 = $row["Q15"];
	}
	if(!empty($row['Q16'])){
		$Q16 = $row["Q16"];
	}
	if(!empty($row['Q17'])){
		$Q17 = $row["Q17"];
	}
	if(!empty($row['Q18'])){
		$Q18 = $row["Q18"];
	}
	if(!empty($row['Q19'])){
		$Q19 = $row["Q19"];
	}
	if(!empty($row['Q20'])){
		$Q20 = $row["Q20"];
	}
	if(!empty($row['Name_Title_bottom'])){
		$Name_Title_bottom = $row["Name_Title_bottom"];
	}
	if(!empty($row['Date_bottom'])){
		$Date_bottom = $row["Date_bottom"];
	}
	if(!empty($row['DENTIST_Bottom'])){
		$DENTIST_Bottom = $row["DENTIST_Bottom"];
	}
	if(!empty($row['Date_bottom2'])){
		$Date_bottom2 = $row["Date_bottom2"];
	}
	
	}
    }else {
		//Show database is empty
		echo "0 results";
	}

	//Close the connection
	$con->close();
	if($Name_Title == ""){
		echo "Error patient not found!";
	}else{
	

	
?>
<html> 
<head>  
<title>MEDICAL HISTORY</title>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
<script type="text/javascript" src="../../../JavaS_Functions.js"></script>
<link rel="stylesheet" type="text/css" href="../../../PageStyles.css">
</head>  
<body>
<!-- Have a filled out form that the dentist can print a pdf file of-->
		<h1>ID:</h1>
		<h3 id="User"><?php echo$ID;?></h3>
		<h1>Selected patient:</h1>
		<h3><?php echo$Name_Title;?></h3>
		<button onClick="genPDF()" >Get PDF</button>
		<button onClick="Remove_FILE_INFO('Name_TitleAnswer', 'User')">Remove File</button>
<div ID="Filled">
    <div>
	<div>
	<form method="post">
		<h3>MEDICAL ALERT:</h3><br />
<label for="Name_TitleAnswer" >NAME: MR./MiSS/MRS./MS./DR.</label>
<p name="Name_TitleAnswer" id="Name_TitleAnswer" ><?php echo $Name_Title;?></p><br>

<label for="P_birthAnswer" >DATE OF BIRTH (DAY/MONTH/YEAR):</label>
<p name="P_birthAnswer" id="P_birthAnswer" ><?php echo $P_birth;?></p><br>

<p>IN CASE OF EMERGENCY, WE SHOULD NOTIFY:</p><br>

<label for="Name_EmrgAnswer" >NAME:</label>
<p name="Name_EmrgAnswer" id="Name_EmrgAnswer" ><?php echo $Name_Emrg;?></p><br>

<label for="Relationship_EmrgAnswer" >RELATIONSHIP:</label>
<p name="Relationship_EmrgAnswer" id="Relationship_EmrgAnswer" ><?php echo $Relationship_Emrg;?></p><br>

<label for="Emrg_PhoneAnswer" >DAY-TIME PHONE:</label>
<p name="Emrg_PhoneAnswer" id="Emrg_PhoneAnswer" ><?php echo $Emrg_Phone;?></p><br>
<br />

<label for="FD_NameAnswer" >NAME OF FAMILY DOCTOR:</label>
<p name="FD_NameAnswer" id="FD_NameAnswer" ><?php echo $FD_Name;?></p><br>

<label for="phoneFDAnswer">PHONE:</label>
<p name="phoneFDAnswer" id="phoneFDAnswer" ><?php echo $phoneFD;?></p><br>
<br />

<label for="Med_Spec_NameAnswer" >NAME OF MEDICAL SPECIALIST:</label>
<p name="Med_Spec_NameAnswer" id="Med_Spec_NameAnswer" ><?php echo $Med_Spec_Name;?></p><br>

<label for="AREAOFSAnswer">AREAOFSPECIALITY:</label>
<p name="AREAOFSAnswer" id="AREAOFSAnswer"><?php echo $AREAOFS;?></p><br>

<label for="phoneMSAnswer">PHONE:</label>
<p name="phoneMSAnswer" id="phoneMSAnswer" ><?php echo $phone;?></p><br>
<br />

<p>The following information is required to enabie us to provide you with the best possible dental care.
All information is strictly private, and is protected by doctor-patient confidentiality. The dentist will review
the questions and explain any that you do not understand. Please fill in the entire form.</p><br /><br />

  <p>Are you being treated for any medical condition at the present or have you been treated within the past year? If so, why?</p>
  <p name="Answer_1" id="Answer_1"><?php echo $Q1;?></p>
  <p name="Answer_1" id="Answer_1_2"><?php echo $Q1_2;?></p>
  <br />
  
  <p>When was your last medical checkup?</p>
  <p name="Answer_2" id="Answer_2"><?php echo $Q2;?></p>
  <br>
  
  <p>Has there been any change in your general health in the past year? If yes, please explain.</p>
  <p name="Answer_3" id="Answer_3"><?php echo $Q3;?></p>
  <p name="Answer_3" id="Answer_3_2"><?php echo $Q3_2;?></p>
  <br />
  
  <p>Are you taking any medications, non-prescription drugs or herbal supplements of any kind? ff yes, please list.</p>
  <p name="Answer_4" id="Answer_4"><?php echo $Q4;?></p>
  <p name="Answer_4" id="Answer_4_2"><?php echo $Q4_2;?></p>
  <br />
  
  <p>Do you have any allergies? If you answered yes, please list using the categories below:</p>
  <p name="Answer_5" id="Answer_5"><?php echo $Q5;?></p>
  <p name="Answer_5" id="Answer_5_2"><?php echo $Q5_2;?></p>
  <p name="Answer_5" id="Answer_5_3"><?php echo $Q5_3;?></p>
  <br />
  
  <p>Have you ever had a peculiar or adverse reaction to any medicines or injections? !f yes, please explain.</p>
  <p name="Answer_6" id="Answer_6"><?php echo $Q6;?></p>
  <p name="Answer_6" id="Answer_6_2"><?php echo $Q6_2;?></p>
  <br />
  
  <p>Do you have or have you ever had asthma?</p>
  <p name="Answer_7" id="Answer_7"><?php echo $Q7;?></p>
  <br />
  
  <p>Do you have or have you ever had any heart or blood pressure problems?</p>
  <p name="Answer_8" id="Answer_8"><?php echo $Q8;?></p>
  <br />
  
  <p>Do you have or have you ever had a replacement or repair of a heart valve, an infection of the heart (i.e. infective endocarditis), a heart condition from birth (i.e. congenital heart disease) or a heart transplant?</p>
  <p name="Answer_9" id="Answer_9"><?php echo $Q9;?></p>
  <br />
  
  <p>Do you have a prosthetic or artificial joint?</p>
  <p name="Answer_10" id="Answer_10"><?php echo $Q10;?></p>
  <br />
  
  <p>Do you have any conditions or therapies that could affect your immune system, e.g. leukemia, AIDS, HIV infection, radiotherapy, chemotherapy?</p>
  <p name="Answer_11" id="Answer_11"><?php echo $Q11;?></p>
  <br />
  
  <p>Have you ever had hepatitis, jaundice or liver disease?</p>
  <p name="Answer_12" id="Answer_12"><?php echo $Q12;?></p>
  <br />
  
  <p>Do you have a bleeding problem or bleeding disorder?</p>
  <p name="Answer_13" id="Answer_13"><?php echo $Q13;?></p>
  <br />
  
  <p>Have you ever been hospitalized for any illnesses or operations? If yes, please explain.</p>
  <p name="Answer_14" id="Answer_14"><?php echo $Q14;?></p>
  <br />
  
  <p>Do you have or have you ever had any of the following? Please check.</p>
  <p name="Answer_15" id="Answer_15"><?php echo $Q15;?></p>
  <br />
  
  
  <p>Are there any conditions or diseases not listed above that you have or have had? If so, what?</p>
  <p name="Answer_16" id="Answer_16"><?php echo $Q16;?></p>
  <br />
  
  <p>Are there any diseases or medical problems that run in your family?</p>
  <p name="Answer_17" id="Answer_17"><?php echo $Q17;?></p>
  <br />
  
  <p>Do you smoke or chew tobacco products?</p>
  <p name="Answer_18" id="Answer_18"><?php echo $Q18;?></p>
  <br />
  
  <p>Are you nervous during dental treatment?</p>
  <p name="Answer_19" id="Answer_19"><?php echo $Q19;?></p>
  <br />
  
  <p>For women only: Are you breastfeeding or pregnant? If pregnant, what is the expected delivery date?</p>
  <p name="Answer_20" id="Answer_20"><?php echo $Q20;?></p>
  <br />
  
  <p>To the best of my knowledge, the above information is correct:</p>
  <label for="Name_Title_bottomAnswer" >PATIENT/PARENT/GUARDIAN SIGNATURE:</label>
  <p name="Name_Title_bottomAnswer" id="Name_Title_bottomAnswer" ><?php echo $Name_Title_bottom;?></p><br>
  <label for="Date_bottomAnswer" >DATE:</label>
  <p name="Date_bottomAnswer" id="Date_bottomAnswer" ><?php echo $Date_bottom;?></p><br>

  <label for="DENTIST_BottomAnswer" >DENTIST SIGNATURE:</label>
  <p name="DENTIST_BottomAnswer" id="DENTIST_BottomAnswer" ><?php echo $DENTIST_Bottom;?></p><br>
  <label for="Date_bottom2Answer" >DATE:</label>
  <p name="Date_bottom2Answer" id="Date_bottom2Answer" ><?php echo $Date_bottom2;?></p><br>
	</form>
    </div>
	</div>
</div>
</body>
</html>
<?php

}

}else{
	$patient = "";
	echo "Please enter a patient name!";
}



}
?>