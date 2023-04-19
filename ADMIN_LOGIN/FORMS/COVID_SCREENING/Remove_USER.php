<?php
session_start();
if(!isset($_SESSION["sess_user"])){
    header("location:login.php");
} else {
		$P = $_REQUEST["P"];
			$P = $_REQUEST["P"];
			$P_U = explode(";", $P);
			//$patient = $P;
			$patient = $P_U[0];
			$ID = $P_U[1];
		//Require the config.php page to load the sql
		require '../../../Data_BaseConnections/config.php';
		
				//Save the sql connection to a varible
			$con = new mysqli(db_host, db_user, db_pass, db_name);
			
				//Save query to a string
			$sql = "DELETE FROM covidtest WHERE ID='$ID'";

		  //save results
			$result = $con->query($sql);
		  //Test if database is empty or full
		  echo $patient . " #" . $ID . " removed";
			//Close the connection
			$con->close();
}
?> 