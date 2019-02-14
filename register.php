<?php
include ('registerHTML.php');
include ('database.php');

if ($_POST){
	$email = $_POST['email'];
	$password = $_POST['password'];
	$clean_email = '';
	$activation_code = '';
	$clean_password = '';
	$clean_activation_code = '';

}

//sanitise the email so that the user don't use SQL or PHP characters
$clean_email = mysqli_real_escape_string($db_connection, $email);
$clean_password = mysqli_real_escape_string($db_connection, $password);
$clean_activation_code = mysqli_real_escape_string($db_connection, $activation_code);

//$query = "INSERT INTO users (email, password) VALUES ('$clean_email', '$clean_password');";

var_dump($clean_email, $clean_email, $clean_activation_code);

?>