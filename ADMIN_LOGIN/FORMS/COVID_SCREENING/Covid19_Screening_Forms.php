<?php
session_start();
if(!isset($_SESSION["sess_user"])){
    header("location:login.php");
} else {

?>  
<html> 
<head>  
<title>COVID 19 SCREENING</title>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
<script type="text/javascript" src="../../../JavaS_Functions.js"></script>
<link rel="stylesheet" type="text/css" href="../../../PageStyle.css">
</head>  
<body>
<div ID="LINKS" >
<h2>
 <a class="Selected_Page" href="Covid19_Screening_Forms.php" >COVID 19 SCREENING</a><br />
 
 <a href="../DENTAL_HISTORY/Dental_History_Forms.php" >DENTAL HISTORY</a><br />
 
 <a href="../MEDICAL_HISTORY/MEDICAL_HISTORY_Forms.php" >MEDICAL HISTORY</a><br />
 
 <a href="../PRIVACY_CONSENT/Privacy_Consent_Forms.php" >PRIVACY CONSENT</a><br />
 
 <a href="../../MainPage/MainPage.php" >HOME</a><br /></h2>
  </div>
  <h1>COVID 19 SCREENING</h1>
 	<Button onClick="Fill_MEDICAL_H_FORMShow_ALL();" >Show all</Button><br />
 <h4>Enter the ID of the patient info you want to view below:</h4>
<!-- Have a filled out form that the dentist can print a pdf file of-->
	ID: <input type="text" name="Username" ID="Username" ><br>
	<Button onClick="Show_info();" >View COVID 19 SCREENING</Button><br />

<p name="patient_INFO" id="patient_INFO" ></p><br />


 <br /> <br /> <br /> <br />
 <h2><a href="../../../LoginFunctions/logout.php">Logout</a></h2>
</body>
</html>
<?php
}
?>