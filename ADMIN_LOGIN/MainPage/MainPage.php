<?php
session_start();
if(!isset($_SESSION["sess_user"])){
    header("location: ../LoginFunctions/login.php");
} else {

?>
<html> 
<head>  
<title>Test</title>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
<script type="text/javascript" src="../JavaS_Functions.js"></script>

<link rel="stylesheet" type="text/css" href="../../PageStyle.css">

</head>  
<body>

</head>  
<body>
<div ID="LINKS" >
 <h1 class="Selected_Page"><a href="MainPage.php" >HOME</a><br /><h1>
 	<hr />
 <h1><a href="../FORMS/COVID_SCREENING/Covid19_Screening_Forms.php" >COVID 19 SCREENING</a><br /></h1>
	<hr />
 <h1><a href="../FORMS/DENTAL_HISTORY/Dental_History_Forms.php" >DENTAL HISTORY</a><br /></h1>
  <hr />
 <h1><a href="../FORMS/MEDICAL_HISTORY/MEDICAL_HISTORY_Forms.php" >MEDICAL HISTORY</a><br /></h1>
  <hr />
 <h1><a href="../FORMS/PRIVACY_CONSENT/Privacy_Consent_Forms.php" >PRIVACY CONSENT</a><br /></h1>
  <hr />
  </div>
 <br />
 <h2><a href="../../LoginFunctions/logout.php">Logout</a></h2>
</body>
</html>
<?php
}
?>