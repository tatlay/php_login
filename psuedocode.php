
if the user has submitted a form {

	if the user has submitted the login form {
		if the email and password match{
			show a success message
			remember that they are logged in
			show a log out button
		}else {
			show and error message
			show the login form again.
		}
	}	

	if the user submitted the log out form{
		forget that they are logged in
		show them the log in form
	}

}else if the user is already logged in {
	show the welcome back message
	show a log out button

}else {
	show log in form
}