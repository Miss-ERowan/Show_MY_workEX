<?php 
//Start a session 
//Project created equally by Elizabeth Rowan, Garrett Hamilton, and Mark Mazzocca
session_start();  

//Clear the saved user data
unset($_SESSION['sess_user']);

//Stop the session
session_destroy();

//Return the user to the login page
header("location: login.php");  
?> 