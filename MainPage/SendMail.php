<?php
session_start();
if(!isset($_SESSION["sess_user"])){
    header("location:login.php");
} else {
	if(isset($_POST["submit"])){
		
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);
$headers = "From: lakesideformrecovery@gmail.com";
// send email
if(mail("elizabeth.rowan@hotmail.com","My subject",$msg, $headers)){
	echo "Mail Sent!";
}else{
	echo "Mail NOT Sent!";
}
}
?>