<?php
session_start(); // start session. Must be at the top. This is an inbuilt function that sets a cookie. Before any PHP pages runs. Dear browser... please remember that you are user ...... This will break if you set it any where else. 
$_SESSION['logged_in'] = true; // use session. This is a magic variable like $_POST
$validEmail = 'tatlay@me.com';
$validPassword = '1234';
$password = '';
$email = '';

if ($_POST){
	$email = isset($_POST['email']) ? $_POST : null;
	$password = isset($_POST['password']) ? $_POST : null;
}

if ($password === $validPassword){
	$_SESSION['logged_in'] = true;
	echo "Logged in";
}elseif($password !== $validPassword){
	$_SESSION['logged_in'] = false;
	echo "You are not logged in";
}


if (isset($_SESSION['logged_in'])){
	if (true == $_SESSION['logged_in']){
		echo "<h1>Welcome to the Bronx</h1>";
	}
}

// setcookie ( $name, $value, $expire);

// setcookie ( 'logged_in', 'YES', time()+3600);

// if ('YES' == $_COOKIE['logged_in']){
// 	echo 'Welcome to your account!';
// }


?>
<!DOCTYPE html>
<html>
<head>
	<title>Session Example.php</title>
</head>
<body>
	<form action="sessionexample.php" method="post" >
		<div class="email">		
			<input type="email" name="email" placeholder="email" style=" padding: 5px;" />
		</div>

		<div class="password">
			<input type="password" name="password" placeholder="password" style=" padding: 5px;"/>
		</div>
		<div>		
		<button type="submit" value="submit">Log in</button>
		</div>
	</form>
<a href="register.php">Register</a><br>
<pre>
<?php var_dump($_SESSION, $_POST)?>
<pre/>
</body>
</html>




