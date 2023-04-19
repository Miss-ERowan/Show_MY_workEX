<?php
session_start();
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
	

//Put the entered values into the database
//Require the config.php page to load the sql
	require '../../Data_BaseConnections/config.php';
	
//Save the sql connection to a varible
	$con = new mysqli(db_host, db_user, db_pass, db_name); 
	
//Save the query to a string
$sql = "INSERT INTO privacy_consent (Gard_Name_Title, P_sign_Date, Name_Title)VALUES ('$Gard_Name_Title', '$P_sign_Date_Set', '$Name_Title')";

//Test if query worked when removing participant
if ($con->query($sql) === TRUE) {
	$sql2 = "SELECT ID FROM privacy_consent WHERE Name_Title = '$Name_Title' AND P_sign_Date = '$P_sign_Date_Set' AND Gard_Name_Title = '$Gard_Name_Title'";
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