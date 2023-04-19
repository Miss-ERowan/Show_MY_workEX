<!doctype html>  
<html> 
<!-- Sources: 1. https://www.c-sharpcorner.com/article/create-a-login-form-validation-using-php-and-wamp-xampp/  -->
<!-- Project created equally by Elizabeth Rowan, Garrett Hamilton, and Mark Mazzocca -->
<head>  
<title>Login</title>  
<link rel="stylesheet" href="Styles.css">  
</head>  
<body>

<!-- title the page -->
<div>
<h1>Login</h1>
</div>
<div>

<!-- Create a div to hold the login controls --> 
	 <div>

<!-- Link the register and login pages -->
	<p><a href="register.php">Register</a> | <a href="login.php">Login</a></p> 
	<br />
	<p><a href="Password.php">Forgot password?</a></p>
   
<!-- Title the form so they know if they are logging in or registering -->
	<h3>Login</h3>  
	
<!-- Login form to hold the user input -->
<form action="" method="POST">  
Username: <input type="text" name="user"><br />  
Password: <input type="password" name="pass"><br />   
<input type="submit" value="Login" name="submit" />  
<br /><br /><br />
</form>  
</div>
</div>

<?php  
//Check if submit button has been clicked
if(isset($_POST["submit"])){ 

//Test if a proper username and password are entered
if(!empty($_POST['user']) && !empty($_POST['pass'])) {

//Set the entered password and username to variables (encrypt the password)
    $user=$_POST['user'];  
    $pass=$_POST['pass'];  
	$Admin = "Admin";
	
//Require the config.php page to load the sql
	require '../Data_BaseConnections/config.php';
	
//Save the sql connection to a varible
$con = new mysqli(db_host, db_user, db_pass, db_name); 


//Save the sql query to search for the entered username and password to a variable
    $query= $con->query("SELECT * FROM login WHERE username='".$user."'"); 

//Save the numbers of rows in the sql database with the entered username and password in a variable		
    $numrows=mysqli_num_rows($query);  
	
//Test if the entered values match a row
    if($numrows!=0)  
    { 
//Find the entered username and password in the database and save the values to variables
    while($row=mysqli_fetch_assoc($query))  
    {  
    $dbusername=$row['username'];  
    $dbpassword=$row['password'];  
    }  
//Test if the values in the database match the values entered by the user
    if($user == $dbusername && password_verify($pass, $dbpassword))  
    {  

//Start the session and save the value of the username into a session so it can be displayed on other pages
		session_start();  
		$_SESSION['sess_user']= $user;  
		$_SESSION['ADMIN_Rights']= $Admin;  
		if($user == $Admin){
			header("Location: ../ADMIN_LOGIN/MainPage/MainPage.php"); 
		}else{
			//Redirect user to member page
			header("Location: ../MainPage/MainPage.php");  	
		}
	}else{
			echo "Incorrect password!";
		}

//if entered password does not match one in the database tell the user to try again	
    } else {  
    print("Invalid username or password!");  
    }  

//If a text box is left empty tell the user that all textboxes must be filled out
} else {  
    print("All fields are required!");  
}  
}  
?>  
</body>  
</html> 
