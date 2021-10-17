      <?php  
	if($_SERVER['REQUEST_METHOD'] === "POST") {
		$firstName = $_POST['firstname'];
		$lastName = $_POST['lastname'];
		$Email=$_POST[Email];
		$Gender=$_POST[Gender];
		$password = $_POST['password'];
		$Address =$_POST[Address];
		$DateOfBirth =$_POST[DateOfBirth];

		setcookie("fname", $firstName, time() + 60*60*24);
		setcookie("uname", $lastName, time() + 60*60*24);
		setcookie("passw", $password, time() + 60*60*24);
		setcookie("email", $email, time() + 60*60*24);
		setcookie("gender", $gender, time() + 60*60*24);
		setcookie("DateOfBirth", $DateOfBirth, time() + 60*60*24);
		setcookie("Address", $Address, time() + 60*60*24);}

		
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration Form</title>
</head>
<body>

	<h1>Registration Form</h1>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<fieldset>
			<legend>Registration Form</legend>

			<label for="id">id:</label>
			<input type="text" name="id" id="id">
			<br><br>

            <label for="password">Password:</label>
			<input type="password" name="password" id="password">
			<br><br>

            <label for="Confirm password">Confirm Password:</label>
			<input type="Confirm password" name="Confirm password" id="Confirm password">
			<br><br>

			<label for="Name">Name:</label>
			<input type="text" name="Name" id="Name">
			<br><br>

			<label>User Type</label>
			<br>
                <input type="radio" name="user" value="">User
				<input type="radio" name="user" value="">Admin
			<br>
			
			

			
			<a href="__.html"><input type="button" name="" value="Sign_up"></a>
		</fieldset>
	</form>

	<br>
	<a href="http://localhost/registration/login.php">loginform</a>
	

</body>
</html>