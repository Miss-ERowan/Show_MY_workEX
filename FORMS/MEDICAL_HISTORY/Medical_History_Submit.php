<?php
session_start();
	if(isset($_POST["submit"])){
		

	//Get the user info
	$Name_Title = '';
	if(!empty($_POST['Name_Title'])){
		$Name_Title = $_POST['Name_Title'];
	}else{
		$Name_Title = '';
	}
	
	
	$B_Day = strtotime($_POST['P_birth']);
	if ($B_Day) {
		$B_Day_Set = date('Y-m-d', $B_Day);
    } else {
		$B_Day_Set = '';
    }
	

	$Name_Emrg = '';
	if(!empty($_POST['Name_Emrg'])){
		$Name_Emrg = $_POST['Name_Emrg'];
	}else{
		$Name_Emrg = '';
	}
	

	$Relationship_Emrg = '';
	if(!empty($_POST['Relationship_Emrg'])){
		$Relationship_Emrg = $_POST['Relationship_Emrg'];
	}else{
		$Relationship_Emrg = '';
	}
	

	$Emrg_Phone = '';
	if(!empty($_POST['Emrg_Phone'])){
		$Emrg_Phone = $_POST['Emrg_Phone'];
	}else{
		$Emrg_Phone = '';
	}
	
	
	$FD_Name = '';
	if(!empty($_POST['FD_Name'])){
		$FD_Name = $_POST['FD_Name'];
	}else{
		$FD_Name = '';
	}
	
	
	$phoneFD = '';
	if(!empty($_POST['phoneFD'])){
		$phoneFD = $_POST['phoneFD'];
	}else{
		$phoneFD = '';
	}
	
	
	$Med_Spec_Name = '';
	if(!empty($_POST['Med_Spec_Name'])){
		$Med_Spec_Name = $_POST['Med_Spec_Name'];
	}else{
		$Med_Spec_Name = '';
	}
	
	
	$AREAOFS = '';
	if(!empty($_POST['AREAOFS'])){
		$AREAOFS = $_POST['AREAOFS'];
	}else{
		$AREAOFS = '';
	}
	
	
	$phone = '';
	if(!empty($_POST['phone'])){
		$phone = $_POST['phone'];
	}else{
		$phone = '';
	}
	
	//Get the question answers
	$Question_1 = '';
	if(!empty($_POST['Q1'])) {
        $Question_1 = $_POST['Q1'];
    } else {
        $Question_1 = '';
    }
	
		$Question_1_2 = '';
	if(!empty($_POST['Q1_2'])) {
        $Question_1_2 = $_POST['Q1_2'];
    } else {
        $Question_1_2 = '';
    }
	
	
	$Question_2 = strtotime($_POST['Q2']);
	if ($Question_2) {
		$Q2_Day_Set = date('Y-m-d', $Question_2);
    } else {
		$Q2_Day_Set = '';
    }
	
	$Question_3 = "";
	if(!empty($_POST['Q3'])) {
        $Question_3 = $_POST['Q3'];
    } else {
        $Question_3 = '';
    }
	
	$Question_3_2 = "";
	if(!empty($_POST['Q3_2'])) {
        $Question_3_2 = $_POST['Q3_2'];
    } else {
        $Question_3_2 = '';
    }
	
	
	$Question_4 = "";
	if(!empty($_POST['Q4'])) {
        $Question_4 = $_POST['Q4'];
    } else {
        $Question_4 = '';
    }
	
	$Question_4_2 = "";
	if(!empty($_POST['Q4_2'])) {
        $Question_4_2 = $_POST['Q4_2'];
    } else {
        $Question_4_2 = '';
    }
	
	
	$Question_5 = "";
	if(!empty($_POST['Q5'])) {
        $Question_5 = $_POST['Q5'];
    } else {
        $Question_5 = '';
    }
	
	$Question_5_2 = "";
	if(!empty($_POST['Q5_2'])) {
        $Question_5_2 = $_POST['Q5_2'];
    } else {
        $Question_5_2 = '';
    }
	
	$Question_5_3 = "";
	if(!empty($_POST['Q5_3'])) {
        $Question_5_3 = $_POST['Q5_3'];
    } else {
        $Question_5_3 = '';
    }
	
	
	$Question_6 = "";
	if(!empty($_POST['Q6'])) {
        $Question_6 = $_POST['Q6'];
    } else {
        $Question_6 = '';
    }
	
	$Question_6_2 = "";
	if(!empty($_POST['Q6_2'])) {
        $Question_6_2 = $_POST['Q6_2'];
    } else {
        $Question_6_2 = '';
    }
	
	
	$Question_7 = "";
	if(!empty($_POST['Q7'])) {
        $Question_7 = $_POST['Q7'];
    } else {
        $Question_7 = '';
    }
	
	$Question_8 = "";
	if(!empty($_POST['Q8'])) {
        $Question_8 = $_POST['Q8'];
    } else {
        $Question_8 = '';
    }
	
	$Question_9 = "";
	if(!empty($_POST['Q9'])) {
        $Question_9 = $_POST['Q9'];
    } else {
        $Question_9 = '';
    }
	
	$Question_10 = "";
	if(!empty($_POST['Q10'])) {
        $Question_10 = $_POST['Q10'];
    } else {
        $Question_10 = '';
    }
	
	$Question_11 = "";
	if(!empty($_POST['Q11'])) {
        $Question_11 = $_POST['Q11'];
    } else {
        $Question_11 = '';
    }
	
	$Question_12 = "";
	if(!empty($_POST['Q12'])) {
        $Question_12 = $_POST['Q12'];
    } else {
        $Question_12 = '';
    }
	
	$Question_13 = "";
	if(!empty($_POST['Q13'])) {
        $Question_13 = $_POST['Q13'];
    } else {
        $Question_13 = '';
    }
	
	$Question_14 = "";
	if(!empty($_POST['Q14'])) {
        $Question_14 = $_POST['Q14'];
    } else {
        $Question_14 = '';
    }
	
	//Get the selected values from question 15
	$Question_15 = array("");
	$num = 0;
	if(!empty($_POST['Q15_1'])){
		$Question_15[0] = $_POST['Q15_1'] . ";";
	}else{
		$Question_15[0] = "";
	}
	
	if(!empty($_POST['Q15_2'])){
		$Question_15[1] = $_POST['Q15_2'] . ";";
	}else{
		$Question_15[1] = "";
	}
	
	if(!empty($_POST['Q15_3'])){
		$Question_15[2] = $_POST['Q15_3'] . ";";
	}else{
		$Question_15[2] = "";
	}
	
	if(!empty($_POST['Q15_4'])){
		$Question_15[3] = $_POST['Q15_4'] . ";";
	}else{
		$Question_15[3] = "";
	}
	
	if(!empty($_POST['Q15_5'])){
		$Question_15[4] = $_POST['Q15_5'] . ";";
	}else{
		$Question_15[4] = "";
	}
	
	if(!empty($_POST['Q15_6'])){
		$Question_15[5] = $_POST['Q15_6'] . ";";
	}else{
		$Question_15[5] = "";
	}
	
	if(!empty($_POST['Q15_7'])){
		$Question_15[6] = $_POST['Q15_7'] . ";";
	}else{
		$Question_15[6] = "";
	}
	
	if(!empty($_POST['Q15_8'])){
		$Question_15[7] = $_POST['Q15_8'] . ";";
	}else{
		$Question_15[7] = "";
	}
	
	if(!empty($_POST['Q15_9'])){
		$Question_15[8] = $_POST['Q15_9'] . ";";
	}else{
		$Question_15[8] = "";
	}
	
	if(!empty($_POST['Q15_10'])){
		$Question_15[9] = $_POST['Q15_10'] . ";";
	}else{
		$Question_15[9] = "";
	}
	
	if(!empty($_POST['Q15_11'])){
		$Question_15[10] = $_POST['Q15_11'] . ";";
	}else{
		$Question_15[10] = "";
	}
	
	if(!empty($_POST['Q15_12'])){
		$Question_15[11] = $_POST['Q15_12'] . ";";
	}else{
		$Question_15[11] = "";
	}
	
	if(!empty($_POST['Q15_13'])){
		$Question_15[12] = $_POST['Q15_13'] . ";";
	}else{
		$Question_15[12] = "";
	}
	
	if(!empty($_POST['Q15_14'])){
		$Question_15[13] = $_POST['Q15_14'] . ";";
	}else{
		$Question_15[13] = "";
	}
	
	if(!empty($_POST['Q15_15'])){
		$Question_15[14] = $_POST['Q15_15'] . ";";
	}else{
		$Question_15[14] = "";
	}
	
	if(!empty($_POST['Q15_16'])){
		$Question_15[15] = $_POST['Q15_16'] . ";";
	}else{
		$Question_15[15] = "";
	}
	
	if(!empty($_POST['Q15_17'])){
		$Question_15[16] = $_POST['Q15_17'] . ";";
	}else{
		$Question_15[16] = "";
	}
	
	if(!empty($_POST['Q15_18'])){
		$Question_15[17] = $_POST['Q15_18'] . ";";
	}else{
		$Question_15[17] = "";
	}
	
	if(!empty($_POST['Q15_19'])){
		$Question_15[18] = $_POST['Q15_19'] . ";";
	}else{
		$Question_15[18] = "";
	}
	
	if(!empty($_POST['Q15_20'])){
		$Question_15[19] = $_POST['Q15_20'] . ";";
	}else{
		$Question_15[19] = "";
	}
	$num = 0;
	$Question15 = "";
	while($num <= 18){
		if(!is_null($Question15)){
			$Question15 = $Question_15[$num] . $Question15;	
		}
		$num = $num + 1;
	}
	if(is_null($Question15)){
		$Question15 = "No info added!";
	}
	
	$Question_16 = '';
	if(!empty($_POST['Q16'])){
		$Question_16 = $_POST['Q16'];
	}else{
		$Question_16 = '';
	}
	
		$Question_17 = '';
	if(!empty($_POST['Q17'])){
		$Question_17 = $_POST['Q17'];
	}else{
		$Question_17 = '';
	}
	
		$Question_18 = '';
	if(!empty($_POST['Q18'])){
		$Question_18 = $_POST['Q18'];
	}else{
		$Question_18 = '';
	}
	
		$Question_19 = '';
	if(!empty($_POST['Q19'])){
		$Question_19 = $_POST['Q19'];
	}else{
		$Question_19 = '';
	}
	
		$Question_20 = '';
	if(!empty($_POST['Q20'])){
		$Question_20 = $_POST['Q20'];
	}else{
		$Question_20 = '';
	}
	
	//Get the user to sign the bottom
	//DENTIST_Bottom Date_bottom2
	$Name_Title_bottom = '';
	if(!empty($_POST['Name_Title_bottom'])){
		$Name_Title_bottom = $_POST['Name_Title_bottom'];
	}else{
		$Name_Title_bottom = '';
	}
		
	$Date_bottom = strtotime($_POST['Date_bottom']);
	if ($Date_bottom) {
		$DayBottom_Set = date('Y-m-d', $Date_bottom);
    } else {
		$DayBottom_Set = '';
    }
	
	
	$DENTIST_Bottom = '';
	if(!empty($_POST['DENTIST_Bottom'])){
		$DENTIST_Bottom = $_POST['DENTIST_Bottom'];
	}else{
		$DENTIST_Bottom = '';
	}
		
	$Date_bottom2 = strtotime($_POST['Date_bottom2']);
	if ($Date_bottom2) {
		$DayBottom2_Set = date('Y-m-d', $Date_bottom2);
    } else {
		$DayBottom2_Set = '';
    }


//Put the entered values into the database
//Require the config.php page to load the sql
	require '../../Data_BaseConnections/config.php';
	
//Save the sql connection to a varible
	$con = new mysqli(db_host, db_user, db_pass, db_name); 
	
//Save the query to a string
$sql = "INSERT INTO medical_history (Name_Title, P_birth, Name_Emrg, Relationship_Emrg, Emrg_Phone, FD_Name, phoneFD, Med_Spec_Name, AREAOFS, phone, Q1, Q1_2, Q2, Q3, Q3_2, Q4, Q4_2, Q5, Q5_2, Q5_3, Q6, Q6_2, Q7, Q8, Q9, Q10, Q11, Q12, Q13, Q14, Q15, Q16, Q17, Q18, Q19, Q20, Name_Title_bottom, Date_bottom, DENTIST_Bottom, Date_bottom2)VALUES ('$Name_Title', '$B_Day_Set', '$Name_Emrg', '$Relationship_Emrg', '$Emrg_Phone', '$FD_Name', '$phoneFD', '$Med_Spec_Name', '$AREAOFS', '$phone', '$Question_1', '$Question_1_2', '$Q2_Day_Set', '$Question_3', '$Question_3_2', '$Question_4', '$Question_4_2', '$Question_5', '$Question_5_2', '$Question_5_3', '$Question_6', '$Question_6_2', '$Question_7', '$Question_8', '$Question_9', '$Question_10', '$Question_11', '$Question_12', '$Question_13', '$Question_14', '$Question15', '$Question_16', '$Question_17', '$Question_18', '$Question_19', '$Question_20', '$Name_Title_bottom', '$DayBottom_Set', '$DENTIST_Bottom', '$DayBottom2_Set')";


//Test if query worked when removing participant
if ($con->query($sql) === TRUE) {
	$sql2 = "SELECT ID FROM medical_history";
	$result = $con->query($sql2);
	if ($result->num_rows >= 0) {
	while($row = $result->fetch_assoc()) {
	if(!empty($row['ID'])){
		$ID = $row["ID"];
	}else{
		$ID = "";
	}
	}
	}
    echo "<h1>Submission Successful! Your ID number is: " . $ID . " keep this number to submit this form to your dentist!!</h1>";
	
} else {
    echo "<h1>Error: Invalid info!!</h1>";
	echo "<br /><br /> Please try again!";
}
	
//Close the connection to the DB
$con->close();

	?>
<html> 
<head>  
<title>MEDICAL HISTORY</title>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
<script type="text/javascript" src="../../JavaS_Functions.js"></script>
<link rel="stylesheet" type="text/css" href="../../PageStyle.css">
</head>  
<body>
<br /><button onClick="Main_P();";>Return to main page</button>
</body>
</html>
	<?php

}

?> 