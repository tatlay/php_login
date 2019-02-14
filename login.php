<?php
include ('database.php');
$validEmail = 'tatlay@me.com';
$validPassword = '1234';
$logInStatus = false;
if ($_POST){
	$EMAIL = $_POST['email'];
	$PASSWORD = $_POST['password'];
}
if ($_POST){
	if ($validEmail === $EMAIL && $validPassword === $PASSWORD)
	{
		$logInStatus = true;
	}
}
if ($logInStatus !== true){
	echo "You are not logged in";
	include('inputbox.php');
	}else{
	echo "<h1>Welcome to the Jungle</h1>";
	include ('success.php');
}
?>
