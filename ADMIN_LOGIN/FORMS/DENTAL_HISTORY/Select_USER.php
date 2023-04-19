<?php
session_start();
if(!isset($_SESSION["sess_user"])){
    header("location:login.php");
} else {
		if (!empty($_REQUEST["P"])){
			$P = $_REQUEST["P"];
			$P_U = explode(";", $P);
			//$patient = $P;
			$patient = $P_U[0];
			$ID = $P_U[1];
$Username = "";
$Name_Title = "";
$P_birth = "";
$P_Address = "";
$P_HomePhone = "";
$P_Cell = "";
$P_workPhone = "";
$P_Employment = "";
$P_Insurance_Company = "";
$P_Ins_Policy = "";
$P_ID = "";
$P_Sign = "";
$P_Sign_Date = "";
$Dentist_Sign = "";
$Dentist_Date = "";
$Q1 = "";
$Q2_1 = "";
$Q2_2 = "";
$Q3 = "";
$Q4 = "";
$Q5 = "";
$Q6 = "";
$Q7 = "";
$Q8 = "";
$Q9 = "";
	//Require the config.php page to load the sql
		require '../../../Data_BaseConnections/config.php';
		
    //Save the sql connection to a varible
    $con = new mysqli(db_host, db_user, db_pass, db_name);
	
	//Get the values for the username
    //Save query to a string
    $sql = "SELECT ID, Name_Title, P_birth, P_Address, P_HomePhone, P_Cell, P_workPhone, P_Employment, P_Insurance_Company, P_Ins_Policy, P_ID, P_Sign, P_Sign_Date, Dentist_Sign, Dentist_Date, Q1, Q2_1, Q2_2, Q3, Q4, Q5, Q6, Q7, Q8, Q9 FROM dental_history WHERE ID = '$ID'";
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
	if(!empty($row['P_Address'])){
		$P_Address = $row["P_Address"];
	}
	if(!empty($row['P_HomePhone'])){
		$P_HomePhone = $row["P_HomePhone"];
	}
	if(!empty($row['P_Cell'])){
		$P_Cell = $row["P_Cell"];
	}
	if(!empty($row['P_workPhone'])){
		$P_workPhone = $row["P_workPhone"];
	}
	if(!empty($row['P_Employment'])){
		$P_Employment = $row["P_Employment"];
	}
	if(!empty($row['P_Insurance_Company'])){
		$P_Insurance_Company = $row["P_Insurance_Company"];
	}
	if(!empty($row['P_Ins_Policy'])){
		$P_Ins_Policy = $row["P_Ins_Policy"];
	}
	if(!empty($row['P_ID'])){
		$P_ID = $row["P_ID"];
	}
	if(!empty($row['P_Sign'])){
		$P_Sign = $row["P_Sign"];
	}
	if(!empty($row['P_Sign_Date'])){
		$P_Sign_Date = $row["P_Sign_Date"];
	}
	if(!empty($row['Dentist_Sign'])){
		$Dentist_Sign = $row["Dentist_Sign"];
	}
	if(!empty($row['Dentist_Date'])){
		$Dentist_Date = $row["Dentist_Date"];
	}
	if(!empty($row['Q1'])){
		$Q1 = $row["Q1"];
	}
	if(!empty($row['Q2_1'])){
		$Q2_1 = $row["Q2_1"];
	}
	if(!empty($row['Q2_2'])){
		$Q2_2 = $row["Q2_2"];
	}
	if(!empty($row['Q3'])){
		$Q3 = $row["Q3"];
	}
	if(!empty($row['Q4'])){
		$Q4 = $row["Q4"];
	}
	if(!empty($row['Q5'])){
		$Q5 = $row["Q5"];
	}
	if(!empty($row['Q6'])){
		$Q6 = $row["Q6"];
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
<title>DENTAL HISTORY</title>  
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
	<button onClick="Remove_FILE_INFO('Name_TitleAnswerDH', 'User')">Remove File</button>
<div ID="Filled">
    <div>
	<div>
	<form method="post">
<h1>DENTAL HISTORY</h1>
<br />

<label for="Name_TitleAnswerDH" >Patient Name:</label>
<p id="Name_TitleAnswerDH" ><?php echo$Name_Title;?></p>

<label for="P_birthAnswerDH" >Date of Birth:</label>
<p id="P_birthAnswerDH" ><?php echo$P_birth;?></p><br />

<label for="P_AddressAnswerDH" >Patient Address:</label>
<p id="P_AddressAnswerDH" ><?php echo$P_Address;?></p><br />

<label for="P_HomePhoneAnswerDH" >Patient Home Phone #:</label>
<p id="P_HomePhoneAnswerDH" ><?php echo$P_HomePhone;?><p />

<label for="P_CellAnswerDH" >Cell#:</label>
<p id="P_CellAnswerDH" ><?php echo$P_Cell;?><p />

<label for="P_workPhoneAnswerDH" >Work #:</label>
<p id="P_workPhoneAnswerDH" ><?php echo$P_workPhone;?><p /><br />

<label for="P_EmploymentAnswerDH" >Place of Employment:</label>
<p id="P_EmploymentAnswerDH" ><?php echo$P_Employment;?><p /><br />

<label for="P_Insurance_CompanyAnswerDH" >Insurance Company:</label>
<p id="P_Insurance_CompanyAnswerDH" ><?php echo$P_Insurance_Company;?><p />

<label for="P_Ins_PolicyAnswerDH" >Policy #:</label>
<p id="P_Ins_PolicyAnswerDH" ><?php echo$P_Ins_Policy;?><p />

<label for="P_IDAnswerDH" >ID #:</label>
<p id="P_IDAnswerDH" ><?php echo$P_ID;?><p /><br /><br />



<label for="Answer_1" >1.) Purpose of your visit today?</label>
<p id="Answer_1" ><?php echo$Q1;?><p /><br /><br />

<label for="Answer_2_1" >2.) How long has it been since you were last seen by a dentist?</label>
<p id="Answer_2_1" ><?php echo$Q2_1;?><p /><br />
<label for="Answer_2_2" >How long has it been since your last professional dental cleaning?</label>
<p id="Answer_2_2" ><?php echo$Q2_2;?><p /><br />

<label for="Answer_3" >3.) How often do you brush your teeth? Floss your teeth?</label>
<p id="Answer_3" ><?php echo$Q3;?><p /><br />

<p for="Answer_4" >4.) Indicate which of the following you previously or currently have been treated with (check all that apply)</p>
<p id="Answer_4" ><?php echo$Q4;?><p />
<br />

<p for="Answer_5" >5.) Indicate which of the following symptoms you experience (check all that apply)</p>
<p id="Answer_5" ><?php echo$Q5;?><p />
<br /><br />

<label for="Answer_6" >6.) Have you ever had any problems or complications with previous dental treatment?</label>
<p id="Answer_6" ><?php echo$Q6;?><p /><br /><br />
  
<label for="Answer_7" >7.) Are you unhappy with the appearance of your teeth?</label>
<p id="Answer_7" ><?php echo$Q7;?><p /><br /><br />

<label for="Answer_8" >8.) Have you had any unpleasant dental experiences?</label>
<p id="Answer_8" ><?php echo$Q8;?><p /><br /><br />

<label for="Answer_9" >9.) Who referred you to our office?</label>
<p id="Answer_9" ><?php echo$Q9;?><p /><br /><br />

<p>I certify that the above information is complete and accurate.<p />

<label for="P_SignAnswerDH" >(Patient/Guardian Signature)</label>
<p id="P_SignAnswerDH" ><?php echo$P_Sign;?><p /><br />

<label for="P_Sign_DateAnswerDH" >(Date)</label>
<p id="P_Sign_DateAnswerDH" ><?php echo$P_Sign_Date;?><p /><br /><br />

<label for="Dentist_SignAnswerDH" >(Dentist's Signature)</label>
<p id="Dentist_SignAnswerDH" ><?php echo$Dentist_Sign;?><p /><br />

<label for="Dentist_DateAnswerDH" >(Date)</label>
<p id="Dentist_DateAnswerDH" ><?php echo$Dentist_Date;?><p /><br /><br />
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