<?php
session_start();
if(!isset($_SESSION["sess_user"])){
    header("location:login.php");
} else {
		$P = $_REQUEST["P"];
		$N = array("");
		$ID = array("");
		$Num = 0;
		//Require the config.php page to load the sql
		require '../../../Data_BaseConnections/config.php';
		
				//Save the sql connection to a varible
			$con = new mysqli(db_host, db_user, db_pass, db_name);
			
				//Save query to a string
			$sql = "SELECT ID, P_Name FROM covidtest";

		  //save results
			$result = $con->query($sql);
		  //Test if database is empty or full
			if ($result->num_rows >= 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				if(!empty($row['P_Name'])){
				$ID[$Num] = "ID: " . $row['ID'];
				$N[$Num] = "Name: " . $row['P_Name'];
				$Num = $Num + 1;
				}
			}
			}else {
				//Show database is empty
				echo "0 results";
			}
			//Close the connection
			$con->close();
			$Num = 0;
while(count($N) > $Num){
	if ($ID[$Num] != ""){
?>
<html> 
<head>  
<title>MEDICAL HISTORY</title>  
</head>  
<body>
<hr />
<h4 ID="Testing123" value="<?php echo$ID[$Num]; ?>" ><?php echo$ID[$Num]; ?></h4>
<h4 ID="Testing123" value="<?php echo$N[$Num]; ?>" ><?php echo$N[$Num]; ?></h4>
<hr />
</body>
</html>
<?php
	}else{
		echo "No users found!!";
	}
$Num = $Num + 1;
}
}
?> 