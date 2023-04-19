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
$Gard_Name_Title = "";
$P_sign_Date = "";
$Name_Title = "";
	//Require the config.php page to load the sql
		require '../../../Data_BaseConnections/config.php';
		
    //Save the sql connection to a varible
    $con = new mysqli(db_host, db_user, db_pass, db_name);
	
	//Get the values for the username
    //Save query to a string
    $sql = "SELECT ID, Gard_Name_Title, P_sign_Date, Name_Title FROM privacy_consent WHERE ID = '$ID'";
  //save results
    $result = $con->query($sql);
  //Test if database is empty or full
    if ($result->num_rows >= 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	if(!empty($row['Name_Title'])){
		$Name_Title = $row["Name_Title"];
	}
	if(!empty($row['Gard_Name_Title'])){
		$Gard_Name_Title = $row["Gard_Name_Title"];
	}
	if(!empty($row['P_sign_Date'])){
		$P_sign_Date = $row["P_sign_Date"];
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
<body style="text-align: left;">
<!-- Have a filled out form that the dentist can print a pdf file of-->
		<div ID="hidediv">
			<h1>ID:</h1>
			<h3 id="User"><?php echo$ID;?></h3>
			<h1>Selected patient:</h1>
			<h3><?php echo$Name_Title;?></h3>
			<button onClick="genPDF()" >Get PDF</button>
			<button onClick="Remove_FILE_INFO('Name_TitleAnswer', 'User')">Remove File</button>
		</div>
<div ID="Filled">
    <div>
	<div>
	<form method="post">
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
<p id="Gard_Name_TitleAnswer" ><?php echo$Gard_Name_Title;?></p>

<label for="P_sign_DateAnswer" >Date</label>
<p id="P_sign_DateAnswer" ><?php echo$P_sign_Date;?></p><br />

<label for="Name_TitleAnswer" >Patient Name:</label>
<p id="Name_TitleAnswer" ><?php echo$Name_Title;?></p>
<br /><br />

<p><b>3 Mike Richards Way</b></p>
<p><b>Kenora ON P9N 1K9</b></p>
<p><b>(807)468-3374</b></p>
<p><b>www.lakeside-dental.ca</b></p>
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