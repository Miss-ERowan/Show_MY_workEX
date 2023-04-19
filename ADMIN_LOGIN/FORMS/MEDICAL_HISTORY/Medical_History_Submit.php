<?php
session_start();
if(!isset($_SESSION["sess_user"])){
    header("location:login.php");
} else {
		$P = $_REQUEST["P"];
		$N = "";
		$UN = "";
		//Require the config.php page to load the sql
		require '../../../Data_BaseConnections/config.php';
		
				//Save the sql connection to a varible
			$con = new mysqli(db_host, db_user, db_pass, db_name);
			
				//Save query to a string
			$sql = "SELECT Name_Title, Username FROM medical_history WHERE Name_Title = '$P'";

		  //save results
			$result = $con->query($sql);
		  //Test if database is empty or full
			if ($result->num_rows >= 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				if(!empty($row['Name_Title'])){
				$N = $row['Name_Title'];
				$UN = $row["Username"];
				}
			}
			}else {
				//Show database is empty
				echo "0 results";
			}
			//Close the connection
			$con->close();
?>
<html> 
<head>  
<title>MEDICAL HISTORY</title>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
<script type="text/javascript" src="../../../JavaS_Functions.js"></script>
<link rel="stylesheet" type="text/css" href="../../../PageStyle.css">
</head>  
<body>
<p><?php echo$UN; ?></p>
<hr />
<button ID="Testing123" onClick="PHP_BUTTON_ValC();" value="<?php echo$N; ?>" ><?php echo$N; ?></button>

</body>
</html>
<?php
}
?> 