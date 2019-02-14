<?php
session_start();
include ('database.php');
include('snippets/header.php');
// if the user has submitted a form {
if ($_POST) {
	// 	if the user has submitted the login form {
	if ($_POST['action'] === 'log in') {
		$email = isset($_POST['email']) ? $_POST['email'] : null;
		$password = isset($_POST['password']) ? $_POST['password'] : null;
		
		// if the email and password match{
		if (verifyLoginDetails($email, $password)) {
			// show a success message
			include('snippets/login-success.php');
			// show a log out button
			include('snippets/logout-form.php');
			// remember that they are logged in
			$_SESSION['are they logged in'] = true;
		} else {
			// show an error message
			include('snippets/login-error.php');
			// show the login form again.
			include('snippets/login-form.php');
		}
	}
	// if the user submitted the log out form{
	if ($_POST['action'] === 'log out') {
		include('snippets/logout-success.php');
		// forget that they are logged in
		$_SESSION['are they logged in'] = false;
		// show the login form again.
		include('snippets/login-form.php');
	}
} else if (isset($_SESSION['are they logged in']) && $_SESSION['are they logged in'] === true) {
	// else if the user is already logged in 
	// show the welcome back message
	include('snippets/welcome-back.php');
	// show a log out button
	include('snippets/logout-form.php');
} else {
	// show the login form again.
	include('snippets/login-form.php');
}
include('snippets/footer.php');
?>
