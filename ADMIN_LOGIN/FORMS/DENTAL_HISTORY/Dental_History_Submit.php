<?php
session_start();
if(!isset($_SESSION["sess_user"])){
    header("location:login.php");
} else {
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
	

	$P_Address = '';
	if(!empty($_POST['P_Address'])){
		$P_Address = $_POST['P_Address'];
	}else{
		$P_Address = '';
	}
	

	$P_HomePhone = '';
	if(!empty($_POST['P_HomePhone'])){
		$P_HomePhone = $_POST['P_HomePhone'];
	}else{
		$P_HomePhone = '';
	}
	

	$P_Cell = '';
	if(!empty($_POST['P_Cell'])){
		$P_Cell = $_POST['P_Cell'];
	}else{
		$P_Cell = '';
	}
	
	
	$P_workPhone = '';
	if(!empty($_POST['P_workPhone'])){
		$P_workPhone = $_POST['P_workPhone'];
	}else{
		$P_workPhone = '';
	}
	
	
	$P_Employment = '';
	if(!empty($_POST['P_Employment'])){
		$P_Employment = $_POST['P_Employment'];
	}else{
		$P_Employment = '';
	}
	
	
	$P_Insurance_Company = '';
	if(!empty($_POST['P_Insurance_Company'])){
		$P_Insurance_Company = $_POST['P_Insurance_Company'];
	}else{
		$P_Insurance_Company = '';
	}
	
	
	$P_Ins_Policy = '';
	if(!empty($_POST['P_Ins_Policy'])){
		$P_Ins_Policy = $_POST['P_Ins_Policy'];
	}else{
		$P_Ins_Policy = '';
	}
	
	
	$P_ID = '';
	if(!empty($_POST['P_ID'])){
		$P_ID = $_POST['P_ID'];
	}else{
		$P_ID = '';
	}
	
	//Get the question answers
	$Question_1 = '';
	if(!empty($_POST['Q1'])) {
        $Question_1 = $_POST['Q1'];
    } else {
        $Question_1 = '';
    }
	
	
	$Question_2_1 = '';
	if(!empty($_POST['Q2_1'])) {
        $Question_2_1 = $_POST['Q2_1'];
    } else {
        $Question_2_1 = '';
    }
	
		$Question_2_2 = '';
	if(!empty($_POST['Q2_2'])) {
        $Question_2_2 = $_POST['Q2_2'];
    } else {
        $Question_2_2 = '';
    }
	
	$Question_3 = "";
	if(!empty($_POST['Q3'])) {
        $Question_3 = $_POST['Q3'];
    } else {
        $Question_3 = '';
    }
	
	
	
	//Get the selected values from question 4
	$Question_4 = array("");
	$num = 0;
	if(!empty($_POST['Q4_1'])){
		$Question_4[0] = $_POST['Q4_1'];
	}else{
		$Question_4[0] = "";
	}
	
	if(!empty($_POST['Q4_2'])){
		$Question_4[1] = $_POST['Q4_2'];
	}else{
		$Question_4[1] = "";
	}
	
	if(!empty($_POST['Q4_3'])){
		$Question_4[2] = $_POST['Q4_3'];
	}else{
		$Question_4[2] = "";
	}
	
	if(!empty($_POST['Q4_4'])){
		$Question_4[3] = $_POST['Q4_4'];
	}else{
		$Question_4[3] = "";
	}
	
	if(!empty($_POST['Q4_5'])){
		$Question_4[4] = $_POST['Q4_5'];
	}else{
		$Question_4[4] = "";
	}
	
	if(!empty($_POST['Q4_6'])){
		$Question_4[5] = $_POST['Q4_6'];
	}else{
		$Question_4[5] = "";
	}
	
	if(!empty($_POST['Q4_7'])){
		$Question_4[6] = $_POST['Q4_7'];
	}else{
		$Question_4[6] = "";
	}
	$num = 0;
	$Question4 = "";
	while($num <= 5){
		if(!is_null($Question4)){
			$Question4 = $Question_4[$num] . $Question4;	
		}
		$num = $num + 1;
	}
	if(is_null($Question4)){
		$Question5 = "No info added!";
	}
	
	//Get the selected values from question 5
	$Question_5 = array("");
	$num = 0;
	if(!empty($_POST['Q5_1'])){
		$Question_5[0] = $_POST['Q5_1'];
	}else{
		$Question_5[0] = "";
	}
	
	if(!empty($_POST['Q5_2'])){
		$Question_5[1] = $_POST['Q5_2'];
	}else{
		$Question_5[1] = "";
	}
	
	if(!empty($_POST['Q5_3'])){
		$Question_5[2] = $_POST['Q5_3'];
	}else{
		$Question_5[2] = "";
	}
	
	if(!empty($_POST['Q5_4'])){
		$Question_5[3] = $_POST['Q5_4'];
	}else{
		$Question_5[3] = "";
	}
	
	if(!empty($_POST['Q5_5'])){
		$Question_5[4] = $_POST['Q5_5'];
	}else{
		$Question_5[4] = "";
	}
	
	if(!empty($_POST['Q5_6'])){
		$Question_5[5] = $_POST['Q5_6'];
	}else{
		$Question_5[5] = "";
	}
	
	if(!empty($_POST['Q5_7'])){
		$Question_5[6] = $_POST['Q5_7'];
	}else{
		$Question_5[6] = "";
	}
	
	if(!empty($_POST['Q5_8'])){
		$Question_5[7] = $_POST['Q5_8'];
	}else{
		$Question_5[7] = "";
	}
	
	if(!empty($_POST['Q5_9'])){
		$Question_5[8] = $_POST['Q5_9'];
	}else{
		$Question_5[8] = "";
	}
	
	if(!empty($_POST['Q5_10'])){
		$Question_5[9] = $_POST['Q5_10'];
	}else{
		$Question_5[9] = "";
	}
	
	if(!empty($_POST['Q5_11'])){
		$Question_5[10] = $_POST['Q5_11'];
	}else{
		$Question_5[10] = "";
	}
	$num = 0;
	$Question5 = "";
	while($num <= 9){
		if(!is_null($Question5)){
			$Question5 = $Question_5[$num] . $Question5;	
		}
		$num = $num + 1;
	}
	if(is_null($Question5)){
		$Question5 = "No info added!";
	}
	
	$Question_6 = "";
	if(!empty($_POST['Q6'])) {
        $Question_6 = $_POST['Q6'];
    } else {
        $Question_6 = '';
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
	
	
	
	
	
	//Get the user to sign the bottom
	//DENTIST_Bottom Date_bottom2
	$P_Sign = '';
	if(!empty($_POST['P_Sign'])){
		$P_Sign = $_POST['P_Sign'];
	}else{
		$P_Sign = '';
	}
		
	$P_Sign_Date = strtotime($_POST['P_Sign_Date']);
	if ($P_Sign_Date) {
		$P_Sign_Date_Set = date('Y-m-d', $P_Sign_Date);
    } else {
		$P_Sign_Date_Set = '';
    }
	
	
	$Dentist_Sign = '';
	if(!empty($_POST['Dentist_Sign'])){
		$Dentist_Sign = $_POST['Dentist_Sign'];
	}else{
		$Dentist_Sign = '';
	}
		
	$Dentist_Date = strtotime($_POST['Dentist_Date']);
	if ($Dentist_Date) {
		$Dentist_Date_Set = date('Y-m-d', $Dentist_Date);
    } else {
		$Dentist_Date_Set = '';
    }

$ID = "";

$Username = $_SESSION["sess_user"];

//Put the entered values into the database
//Require the config.php page to load the sql
	require '../../Data_BaseConnections/config.php';
	
//Save the sql connection to a varible
	$con = new mysqli(db_host, db_user, db_pass, db_name); 
	
//Save the query to a string
$sql = "INSERT INTO dental_history (ID, Username, Name_Title, P_birth, P_Address, P_HomePhone, P_Cell, P_workPhone, P_Employment, P_Insurance_Company, P_Ins_Policy, P_ID, P_Sign, P_Sign_Date, Dentist_Sign, Dentist_Date, Q1, Q2_1, Q2_2, Q3, Q4, Q5, Q6, Q7, Q8, Q9)VALUES ('$ID', '$Username', '$Name_Title', '$B_Day_Set', '$P_Address', '$P_HomePhone', '$P_Cell', '$P_workPhone', '$P_Employment', '$P_Insurance_Company', '$P_Ins_Policy', '$P_ID', '$P_Sign', '$P_Sign_Date_Set', '$Dentist_Sign', '$Dentist_Date_Set', '$Question_1', '$Question_2_1', '$Question_2_2', '$Question_3', '$Question4', '$Question5', '$Question_6', '$Question_7', '$Question_8', '$Question_9')";

//Test if query worked when removing participant
if ($con->query($sql) === TRUE) {
    echo "Submission Successful!";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
	
//Close the connection to the DB
$con->close();
	
}
}
?> 