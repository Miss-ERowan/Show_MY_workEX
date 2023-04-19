<?php
session_start();
if(!isset($_SESSION["sess_user"])){
    header("location:login.php");
} else {
	if(isset($_POST["submit"])){
	
	//Get the user info
	$Staff_S = '';
	if(!empty($_POST['Staff_S'])){
		$Staff_S = $_POST['Staff_S'];
	}else{
		$Staff_S = '';
	}
	
	$P_Name = '';
	if(!empty($_POST['P_Name'])){
		$P_Name = $_POST['P_Name'];
	}else{
		$P_Name = '';
	}
	
	$who_Answered = '';
	if(!empty($_POST['who_Answered'])){
		$who_Answered = $_POST['who_Answered'];
	}else{
		$who_Answered = '';
	}
	
	$Specify = '';
	if(!empty($_POST['Specify'])){
		$Specify = $_POST['Specify'];
	}else{
		$Specify = '';
	}
	
	$Contact_M = '';
	if(!empty($_POST['Contact_M'])){
		$Contact_M = $_POST['Contact_M'];
	}else{
		$Contact_M = '';
	}
	
	$Contact_M_2 = '';
	if(!empty($_POST['Contact_M_2'])){
		$Contact_M_2 = $_POST['Contact_M_2'];
	}else{
		$Contact_M_2 = '';
	}
	
	
	//Get the question answers
	$Question_1_1 = 'No';
	if(!empty($_POST['Q1_1'])) {
        $Question_1_1 = $_POST['Q1_1'];
    } else {
        $Question_1_1 = 'No';
    }
	
		$Question_1_2 = 'No';
	if(!empty($_POST['Q1_2'])) {
        $Question_1_2 = $_POST['Q1_2'];
    } else {
        $Question_1_2 = 'No';
    }
	
	
		$Question_1_3 = 'No';
	if(!empty($_POST['Q1_3'])) {
        $Question_1_3 = $_POST['Q1_3'];
    } else {
        $Question_1_3 = 'No';
    }
	
	
		$Question_1_4 = 'No';
	if(!empty($_POST['Q1_4'])) {
        $Question_1_4 = $_POST['Q1_4'];
    } else {
        $Question_1_4 = 'No';
    }
	
	
		$Question_2_1 = 'No';
	if(!empty($_POST['Q2_1'])) {
        $Question_2_1 = $_POST['Q2_1'];
    } else {
        $Question_2_1 = 'No';
    }
	
		$Question_2_2 = 'No';
	if(!empty($_POST['Q2_2'])) {
        $Question_2_2 = $_POST['Q2_2'];
    } else {
        $Question_2_2 = 'No';
    }
	
	
		$Question_2_3 = 'No';
	if(!empty($_POST['Q2_3'])) {
        $Question_2_3 = $_POST['Q2_3'];
    } else {
        $Question_2_3 = 'No';
    }
	
	
		$Question_2_4 = 'No';
	if(!empty($_POST['Q2_4'])) {
        $Question_2_4 = $_POST['Q2_4'];
    } else {
        $Question_2_4 = 'No';
    }
	
$ID = "";

$Username = $_SESSION["sess_user"];

//Put the entered values into the database
//Require the config.php page to load the sql
	require '../../Data_BaseConnections/config.php';
	
//Save the sql connection to a varible
	$con = new mysqli(db_host, db_user, db_pass, db_name); 
	
//Save the query to a string
$sql = "INSERT INTO covidtest (ID, Username, Staff_S, P_Name, who_Answered, Specify, Contact_M, Contact_M_2, Q1_1, Q1_2, Q1_3, Q1_4, Q2_1, Q2_2, Q2_3, Q2_4)VALUES ('$ID', '$Username', '$Staff_S', '$P_Name', '$who_Answered', '$Specify', '$Contact_M', '$Contact_M_2', '$Question_1_1', '$Question_1_2', '$Question_1_3', '$Question_1_4', '$Question_2_1', '$Question_2_2', '$Question_2_3', '$Question_2_4')";

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