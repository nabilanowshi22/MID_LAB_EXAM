    <?php 
	$username = $password = "";
	

	if(isset($_COOKIE['loginusername']) and isset($_COOKIE['loginpassw'])) {
		$username = $_COOKIE['loginuname'];
		$password = $_COOKIE['loginpassw'];
	}  

	if($_SERVER['REQUEST_METHOD'] === "POST") {
		$uname1 = $_POST['username'];
		$passw1 = $_POST['password'];

		$c_uname = $c_passw = "";

		if(isset($_COOKIE['uname'])) {
			$c_uname = $_COOKIE['uname'];
		}
		if(isset($_COOKIE['passw'])) {
			$c_passw = $_COOKIE['passw'];
		}

		if($uname1 === $c_uname and $passw1 === $c_passw) {
			if(isset($_POST['rememberme'])) {
				setcookie("loginuname",$uname1, time() + 60*60*24);
				setcookie("loginpassw", $passw1, time() + 60*60*24);

				session_start();
				$_SESSION['username'] = $uname1;
			}

			header("http://localhost/registration/registration.php");
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
</head>
<body>

	<h1>Login</h1>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<fieldset>
			<legend>Login</legend>

			<label for="userId">User Id:</label>
			<input type="text" name="userId" id="userId" value="<?php echo $username; ?>">
			<br><br>

			<label for="password">Password:</label>
			<input type="password" name="password" id="password" value="<?php echo $password; ?>">
			<br><br>


			<input type="submit" name="submit" value="Login">
			<td>

            <a href="http://localhost/registration/registration.php">Register</a>
            </td>
		</fieldset>
	</form>

	<br>
	

</body>
</html>
    
