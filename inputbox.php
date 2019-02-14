<!DOCTYPE html>
<html>
<head>
	<title>Login.php</title>
</head>
<body>
	<form action="login.php" method="post" >
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
<a href="register.php">Register</a>
<!-- <?php var_dump($logInStatus)?>
 -->
</body>
</html>