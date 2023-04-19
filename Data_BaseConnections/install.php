<?php
//Start the session
//project base equally developed by Elizabeth Rowan, Garrett Hamilton, and Mark Mazzocca
session_start();
?>
<!doctype html>
<html>
<head>
<title>Install</title>
</head>
<body>
</body>
</html>
<?php
//connect to the local server
define("db_host", "localhost");
  define("db_user", "root");
  define("db_pass", "");

//create conection string
$conn = new mysqli(db_host, db_user, db_pass);

//test connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//create my needed database
$sql = "CREATE DATABASE IF NOT EXISTS `patient_INFO`";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}
$conn->close();

//connect to config file
require 'config.php';

//create new connection string to new database
$con = new mysqli(db_host, db_user, db_pass, db_name);

//test connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

//Check if login table is already made
$querycheck="SELECT 1 FROM login";

$query_result=$con->query($querycheck);

if ($query_result !== FALSE)
{
echo "Table login already exists! <br />";
} else
{
  //Create login table for user
  $sql = "CREATE TABLE login (
	  ID INT(10) NOT NULL AUTO_INCREMENT,
      username varchar(255) NOT NULL,
      password varchar(255) NOT NULL,
	  PRIMARY KEY (`ID`)
	  )";

  if ($con->query($sql) === TRUE) {
    echo "Table login created successfully <br />";
  } else {
    echo "Error creating login table: " . $con->error;
  }
}

//Check if CovidTest table exists
$querycheck="SELECT 1 FROM CovidTest";

$query_result=$con->query($querycheck);

if ($query_result !== FALSE)
{
echo "Table CovidTest already exists!";
} else
{
  //Create CovidTest table
  $sql = "CREATE TABLE CovidTest (
    ID INT(10) NOT NULL AUTO_INCREMENT,
    Staff_S varchar(255) NOT NULL,
	P_Name varchar(255) NOT NULL,
	who_Answered varchar(255) NOT NULL,
	Specify varchar(255) NOT NULL,
	Contact_M varchar(255) NOT NULL,
	Contact_M_2 varchar(255) NOT NULL,
	Q1_1 varchar(255) NOT NULL,
	Q1_2 varchar(255) NOT NULL,
	Q1_3 varchar(255) NOT NULL,
	Q1_4 varchar(255) NOT NULL,
	Q2_1 varchar(255) NOT NULL,
	Q2_2 varchar(255) NOT NULL,
	Q2_3 varchar(255) NOT NULL,
	Q2_4 varchar(255) NOT NULL,
	PRIMARY KEY (`ID`)
	)";

  if ($con->query($sql) === TRUE) {
    echo "Table CovidTest created successfully <br />";
  } else {
    echo "Error CovidTest table: " . $con->error;
  }
}

//Check if Dental_History exists
$querycheck="SELECT 1 FROM Dental_History";

$query_result=$con->query($querycheck);

if ($query_result !== FALSE)
{
echo "Table Dental_History already exists!";
} else
{
  //Create Dental_History table
  $sql = "CREATE TABLE Dental_History (
    ID INT(10) NOT NULL AUTO_INCREMENT,
    Name_Title varchar(255) NOT NULL,
	P_birth varchar(255) NOT NULL,
	P_Address varchar(255) NOT NULL,
	P_HomePhone varchar(255) NOT NULL,
	P_Cell varchar(255) NOT NULL,
	P_workPhone varchar(255) NOT NULL,
	P_Employment varchar(255) NOT NULL,
	P_Insurance_Company varchar(255) NOT NULL,
	P_Ins_Policy varchar(255) NOT NULL,
	P_ID varchar(255) NOT NULL,
	P_Sign varchar(255) NOT NULL,
	P_Sign_Date varchar(255) NOT NULL,
	Dentist_Sign varchar(255) NOT NULL,
	Dentist_Date varchar(255) NOT NULL,
	Q1 varchar(255) NOT NULL,
	Q2_1 varchar(255) NOT NULL,
	Q2_2 varchar(255) NOT NULL,
	Q3 varchar(255) NOT NULL,
	Q4 varchar(255) NOT NULL,
	Q5 varchar(255) NOT NULL,
	Q6 varchar(255) NOT NULL,
	Q7 varchar(255) NOT NULL,
	Q8 varchar(255) NOT NULL,
	Q9 varchar(255) NOT NULL,
	PRIMARY KEY (`ID`)
	)";

  if ($con->query($sql) === TRUE) {
    echo "Table Dental_History created successfully <br />";
  } else {
    echo "Error Dental_History table: " . $con->error;
  }
}


//Check if Medical_History table exists
$querycheck="SELECT 1 FROM Medical_History";

$query_result=$con->query($querycheck);

if ($query_result !== FALSE)
{
echo "Table Medical_History already exists!";
} else
{
  //Create Medical_History table
  $sql = "CREATE TABLE Medical_History (
    ID INT(10) NOT NULL AUTO_INCREMENT,
    Name_Title varchar(255) NOT NULL,
	P_birth varchar(255) NOT NULL,
	Name_Emrg varchar(255) NOT NULL,
	Relationship_Emrg varchar(255) NOT NULL,
	Emrg_Phone varchar(255) NOT NULL,
	FD_Name varchar(255) NOT NULL,
	phoneFD varchar(255) NOT NULL,
	Med_Spec_Name varchar(255) NOT NULL,
	AREAOFS varchar(255) NOT NULL,
	phone varchar(255) NOT NULL,
	Q1 varchar(255) NOT NULL,
	Q1_2 varchar(255) NOT NULL,
	Q2 varchar(255) NOT NULL,
	Q3 varchar(255) NOT NULL,
	Q3_2 varchar(255) NOT NULL,
	Q4 varchar(255) NOT NULL,
	Q4_2 varchar(255) NOT NULL,
	Q5 varchar(255) NOT NULL,
	Q5_2 varchar(255) NOT NULL,
	Q5_3 varchar(255) NOT NULL,
	Q6 varchar(255) NOT NULL,
	Q6_2 varchar(255) NOT NULL,
	Q7 varchar(255) NOT NULL,
	Q8 varchar(255) NOT NULL,
	Q9 varchar(255) NOT NULL,
	Q10 varchar(255) NOT NULL,
	Q11 varchar(255) NOT NULL,
	Q12 varchar(255) NOT NULL,
	Q13 varchar(255) NOT NULL,
	Q14 varchar(255) NOT NULL,
	Q15 varchar(255) NOT NULL,
	Q16 varchar(255) NOT NULL,
	Q17 varchar(255) NOT NULL,
	Q18 varchar(255) NOT NULL,
	Q19 varchar(255) NOT NULL,
	Q20 varchar(255) NOT NULL,
	Name_Title_bottom varchar(255) NOT NULL,
	Date_bottom varchar(255) NOT NULL,
	DENTIST_Bottom varchar(255) NOT NULL,
	Date_bottom2 varchar(255) NOT NULL,
	PRIMARY KEY (`ID`)
	)";

  if ($con->query($sql) === TRUE) {
    echo "Table Medical_History created successfully <br />";
  } else {
    echo "Error Medical_History table: " . $con->error;
  }
}



//Check if Privacy_Consent exists
$querycheck="SELECT 1 FROM Privacy_Consent";

$query_result=$con->query($querycheck);

if ($query_result !== FALSE)
{
echo "Table Privacy_Consent already exists!";
} else
{
  //Create Privacy_Consent table
  $sql = "CREATE TABLE Privacy_Consent (
	ID INT(10) NOT NULL AUTO_INCREMENT,
    Gard_Name_Title varchar(255) NOT NULL,
    P_sign_Date varchar(255) NOT NULL,
	Name_Title varchar(255) NOT NULL,
	PRIMARY KEY (`ID`)
	)";

  if ($con->query($sql) === TRUE) {
    echo "Table Privacy_Consent created successfully <br />";
  } else {
    echo "Error Privacy_Consent table: " . $con->error;
  }
}



//save password to variable
$pass=("Bananas");
$hashed_password = password_hash($pass, PASSWORD_DEFAULT);
//add user to login table
$sql = "INSERT INTO login(username,password) VALUES('Bob','$hashed_password')";

if ($con->query($sql) === TRUE) {
  echo "Table login info added successfully";
} else {
  echo "Error adding user to login table: " . $con->error;
}

//close the connection
$con->close();



//Clear any saved user data
unset($_SESSION['sess_user']);
//Stop the session
session_destroy();
//Return the user to the login page
header("location:login.php");
?>
