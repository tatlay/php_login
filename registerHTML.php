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
<br>			<input type="password" name="confirmPassword" placeholder="Enter choosen password" style=" padding: 5px;"/>
		</div>
		<div>		
		<button type="submit" value="submit">Register </button>
		<button type="submit" value="submit">Clear</button>

		</div>
	</form>

<br/>Got and account?&nbsp;<a href="login.php">Login</a>
</body>
</html>