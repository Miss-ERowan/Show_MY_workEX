<!doctype html>
<html>
<head>
<!-- Project created equally by Elizabeth Rowan, Garrett Hamilton, and Mark Mazzocca -->
<title>Register</title>
<link rel="stylesheet" href="Styles.css"> 
</head>  
<body>

<!-- title the page -->
<div>
<h1>Account Registration Area</h1>
</div>
<div>

<!-- Create a div to hold the register controls -->
<div>

<!-- Link the register and login pages -->
	<p><a href="register.php">Register</a> | <a href="login.php">Login</a></p>

<!-- Title the form so they know if they are logging in or registering -->
    <h3>Register</h3>

<!-- Register form to hold the user input -->
<form action="" method="POST">

Username: <input type="text" name="user"><br />
Password: <input type="password" name="pass"><br />
<input type="submit" value="Register" name="submit" />
<br /><br /><br />
</form>
<?php
//Check if submit has been clicked
if(isset($_POST["submit"])){

//Test if a username and password are entered
if(!empty($_POST['user']) && !empty($_POST['pass'])) {

  //Require the config.php page to load the sql
  	require '../Data_BaseConnections/config.php';

  //Save the sql connection to a varible
    $con = mysqli_connect(db_host, db_user, db_pass, db_name);

//Set the entered password and username to variables
    $user = mysqli_real_escape_string($con, $_POST['user']);
    $pass = mysqli_real_escape_string($con, $_POST['pass']);
	$hashed_password = password_hash($pass, PASSWORD_DEFAULT);


//Save the sql query to search for the entered username to a variable
    $query= $con->query("SELECT * FROM login WHERE username='".$user."'");

//Save the numbers of rows in the sql database with the entered username in a variable
    $numrows=mysqli_num_rows($query);

//	test the number of added rows
    if($numrows==0)
    {

//Save sql query to add a new user to the database into a variable
    $sql="INSERT INTO login(username,password) VALUES('$user','$hashed_password')";

//Run the query and save it to a variable
    $result= $con->query($sql);

//If successful create the account and tell the user
if (!$result) {
print("Failure!");
}

//If not successful tell the user that it was not created correctly
	else{
    print("Account Successfully Created");
    }
    }
//If $numrows was 0 then tell the user the username must be changed
	else{
    print("That username already exists! Please try again with another.");
    }

}
//If user left a textbox empty tell them it must be filled out
else {
    print("All fields are required!");
}
}
?>
</body>
</html>
