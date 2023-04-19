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
$Q2_4 = "";
$Q2_3 = "";
$Q2_2 = "";
$Q2_1 = "";
$Q1_4 = "";
$Q1_3 = "";
$Q1_2 = "";
$Q1_1 = "";
$Contact_M_2 = "";
$Contact_M = "";
$Specify = "";
$who_Answered = "";
$Staff_S = "";
$Name_Title = "";
	//Require the config.php page to load the sql
		require '../../../Data_BaseConnections/config.php';
		
    //Save the sql connection to a varible
    $con = new mysqli(db_host, db_user, db_pass, db_name);
	
	//Get the values for the username
    //Save query to a string
    $sql = "SELECT ID, Staff_S, P_Name, who_Answered, Specify, Contact_M, Contact_M_2, Q1_1, Q1_2, Q1_3, Q1_4, Q2_1, Q2_2, Q2_3, Q2_4 FROM covidtest WHERE ID = '$ID'";
  //save results
    $result = $con->query($sql);
  //Test if database is empty or full
    if ($result->num_rows >= 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	if(!empty($row['P_Name'])){
		$Name_Title = $row["P_Name"];
	}
	if(!empty($row['Staff_S'])){
		$Staff_S = $row["Staff_S"];
	}
	if(!empty($row['who_Answered'])){
		$who_Answered = $row["who_Answered"];
	}
	if(!empty($row['Specify'])){
		$Specify = $row["Specify"];
	}
	if(!empty($row['Contact_M'])){
		$Contact_M = $row["Contact_M"];
	}
	if(!empty($row['Contact_M_2'])){
		$Contact_M_2 = $row["Contact_M_2"];
	}
	if(!empty($row['Q1_1'])){
		$Q1_1 = $row["Q1_1"];
	}
	if(!empty($row['Q1_2'])){
		$Q1_2 = $row["Q1_2"];
	}
	if(!empty($row['Q1_3'])){
		$Q1_3 = $row["Q1_3"];
	}
	if(!empty($row['Q1_4'])){
		$Q1_4 = $row["Q1_4"];
	}
	if(!empty($row['Q2_1'])){
		$Q2_1 = $row["Q2_1"];
	}
	if(!empty($row['Q2_2'])){
		$Q2_2 = $row["Q2_2"];
	}
	if(!empty($row['Q2_3'])){
		$Q2_3 = $row["Q2_3"];
	}
	if(!empty($row['Q2_4'])){
		$Q2_4 = $row["Q2_4"];
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
	<button onClick="Remove_FILE_INFO('P_NameAnswer', 'User')">Remove File</button><br />
<div ID="Filled">
    <div>
	<div>
	<form method="post">
	<h1>COVID-19 TEST</h1>
<label for="Staff_SAnswer" >Staff screener:</label>
<p id="Staff_SAnswer" ><?php echo$Staff_S;?></p>

<label for="P_NameAnswer" >Patient Name:</label>
<p id="P_NameAnswer" ><?php echo$Name_Title;?></p>

<label for="who_AnsweredAnswer" >Who answered:</label>
<p id="who_AnsweredAnswer" ><?php echo$who_Answered;?></p>
<p id="SpecifyAnswer" ><?php echo$Specify;?></p>


<label for="Contact_MAnswer" >Contact Method:</label>
<p id="Contact_MAnswer" ><?php echo$Contact_M;?></p>
<p id="Contact_M_2Answer" ><?php echo$Contact_M_2;?></p>

<h3>SCREENING QUESTIONS</h3>

<p>Pre-Screen:</p>
  <label for="Answer1_1">Have you had close contact with anyone with acute respiratory llness or travelled outside of Canada in the past 14 days?</label>
  <p id="Answer1_1" ><?php echo$Q1_1;?></p>
  <br />
  <label for="Answer1_2">Do you have a confirmed case of COVID-19 or had close contact with a confirmed case of COVID-19?</label>
  <p id="Answer1_2" ><?php echo$Q1_2;?></p>
  <br />
  <label for="Answer1_3">Do you have any of the following symptoms:
  <ul>
  <li>Fever</li>
  <li>New onset of cough</li>
  <li>Worsening chronic cough</li>
  <li>Shortness of breath</li>
  <li>Difficulty breathing</li>
  <li>Sore throat</li>
  <li>Difficulty swallowing</li>
  <li>Decrease or loss of sense of taste or smell</li>
  <li>Chills</li>
  <li>Headaches</li>
  <li>Unexplained fatigue/malaise/muscle aches (myalgias)</li>
  <li>Nausea/vomiting, diarrhea, abdominal pain</li>
  <li>Pink eye (conjunctivitis)</li>
  <li>Runny nose/nasal congestion without other known cause</li>
</ul>
  </label>
  <p id="Answer1_3" ><?php echo$Q1_3;?></p>
  <br />
  <label for="Answer1_4">Are you 70 years of age or older, experiencing any of the following symptoms: delirium, unexplained or increased number of falls, acute functional decline, or worsening of chronic conditions?</label>
  <p id="Answer1_4" ><?php echo$Q1_4;?></p>
  <br />
  
  <p>In-Office:</p>
  <label for="Answer2_1">Have you had close contact with anyone with acute respiratory llness or travelled outside of Canada in the past 14 days?</label>
  <p id="Answer2_1" ><?php echo$Q2_1;?></p>
  <br />
  <label for="Answer2_2">Do you have a confirmed case of COVID-19 or had close contact with a confirmed case of COVID-19?</label>
  <p id="Answer2_2" ><?php echo$Q2_2;?></p>
  <br />
  <label for="Answer2_3">
  Do you have any of the following symptoms:
  <ul>
  <li>Fever</li>
  <li>New onset of cough</li>
  <li>Worsening chronic cough</li>
  <li>Shortness of breath</li>
  <li>Difficulty breathing</li>
  <li>Sore throat</li>
  <li>Difficulty swallowing</li>
  <li>Decrease or loss of sense of taste or smell</li>
  <li>Chills</li>
  <li>Headaches</li>
  <li>Unexplained fatigue/malaise/muscle aches (myalgias)</li>
  <li>Nausea/vomiting, diarrhea, abdominal pain</li>
  <li>Pink eye (conjunctivitis)</li>
  <li>Runny nose/nasal congestion without other known cause</li>
</ul>
  </label>
  <p id="Answer2_3" ><?php echo$Q2_3;?></p>
  <br />
  <label for="Answer2_4">Are you 70 years of age or older, experiencing any of the following symptoms: delirium, unexplained or increased number of falls, acute functional decline, or worsening of chronic conditions?</label>
  <p id="Answer2_4" ><?php echo$Q2_4;?></p>
  <br />
  
  <ul style="list-style-type:disc;">
	  <li>Any <q>yes</q>  response must be discussed with the dentist immediately.</li>
	  <li>Tell the patient when they arrive at the office, they will be asked to:</li>
	  <ul style="list-style-type:circle;">
		  <li>Sanitize their hands.</li>
		  <li>Answer the questions again.</li>
		  <li>Have their temperature taken.</li>
	  </ul> 
	  <li>Advise the patient:</li>
	  	  <ul style="list-style-type:circle;">
			  <li>Only patients are allowed to come to the office.</li>
			  <li>If possible, to wait in their car until their appointment, call the office when they arrive.</li>
			  <li>To wear a mask to their appointment.</li>
		  </ul> 
  </ul>
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