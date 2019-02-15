<?php
$db_server = "localhost";
$db_username = "root";
$db_password = "root";
$db_database = "scotchbox";

// Create connection
$db_connection = new mysqli($db_server, $db_username, $db_password, $db_database);

// Check connection
if ($db_connection->connect_error) {
    die("Connection failed: " . $db_connection->connect_error);
} 

if ($_POST){
	$email = $_POST['email'];
	$password = $_POST['password'];
	$clean_email = mysqli_real_escape_string($db_connection, $email);
	$clean_password = mysqli_real_escape_string($db_connection, $password);
	$clean_activation_code = mysqli_real_escape_string($db_connection, $activation_code);
}

var_dump($_POST, $clean_email, $clean_password);


?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
	<h1>Register</h1>
	<form action="register.php" method="post" >
		<div class="email">		
			<label>What is your email?</label>
<br>
			<input type="email" name="email" placeholder="you@one.com" style=" padding: 5px;" />
		</div><br>

		<div class="password">
			<label>Choose a password</label><br>
			<input type="password" name="password" placeholder="Choose a password" style=" padding: 5px;"/>

<br>			<label>Confirm Password</label>
<br>			<input type="password" name="confirmPassword" placeholder="Confirm password" style=" padding: 5px;"/>
		</div>
		<div>		
		<button type="submit" value="submit">Register </button>
		<button type="submit" value="submit">Clear</button>

		</div>
	</form>

<br/>Got and account?&nbsp;<a href="login.php">Login</a>
</body>
</html>