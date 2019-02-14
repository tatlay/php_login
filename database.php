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

	function verifyLoginDetails($email, $password){
		global $db_connection; //makes it global

		$clean_email = mysqli_real_escape_string($db_connection, $email);
		$clean_password = mysqli_real_escape_string($db_connection, $password);
	//	$clean_activation_code = mysqli_real_escape_string($db_connection, $activation_code);


		$query = "SELECT `email`, `password` FROM `user` WHERE `email` = '$clean_email';";

		$result = mysqli_query($db_connection, $query);

		if (mysqli_num_rows($result) === 1){
			$row = mysqli_fetch_assoc($result);
			if ($row["password"] === $password){
				return true;
			};

		};
};