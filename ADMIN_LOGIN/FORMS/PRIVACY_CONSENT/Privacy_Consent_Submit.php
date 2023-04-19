<?php
session_start();
if(!isset($_SESSION["sess_user"])){
    header("location:login.php");
} else {
	if(isset($_POST["submit"])){
	
	//Get the user info
	$Gard_Name_Title = '';
	if(!empty($_POST['Gard_Name_Title'])){
		$Gard_Name_Title = $_POST['Gard_Name_Title'];
	}else{
		$Gard_Name_Title = '';
	}
	
	
	$P_sign_Date = strtotime($_POST['P_sign_Date']);
	if ($P_sign_Date) {
		$P_sign_Date_Set = date('Y-m-d', $P_sign_Date);
    } else {
		$P_sign_Date_Set = '';
    }
	
	
	$Name_Title = '';
	if(!empty($_POST['Name_Title'])){
		$Name_Title = $_POST['Name_Title'];
	}else{
		$Name_Title = '';
	}
	
$ID = "";

$Username = $_SESSION["sess_user"];

//Put the entered values into the database
//Require the config.php page to load the sql
	require '../../Data_BaseConnections/config.php';
	
//Save the sql connection to a varible
	$con = new mysqli(db_host, db_user, db_pass, db_name); 
	
//Save the query to a string
$sql = "INSERT INTO privacy_consent (ID, Username, Gard_Name_Title, P_sign_Date, Name_Title)VALUES ('$ID', '$Username', '$Gard_Name_Title', '$P_sign_Date_Set', '$Name_Title')";

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