<?php require_once('../config.php')
?>

<!DOCTYPE html>

<html>

<head>
	<meta charset="utf-8">
	<title>Log in</title>
	<link rel="stylesheet" type="text/css" href="https://ysmeen24.github.io/project/CSS/LogIn.CSS">
</head>
<?php

$message = "";
if (isset($_POST['EmailAdress']) && isset($_POST['Password'])) {
	$email = $_POST['EmailAdress'];
	$password = $_POST['Password'];
	//$hashPass = crypt($password, '$1$rasmusle$');

	$sql = "SELECT * FROM users WHERE email = '" . $email . "'";
	$result = $conn->query($sql);
	if (mysqli_num_rows($result) == '1') {
		$verify = $result->fetch_assoc()['password'];

		if ($password == $verify) {
			header('Location: http://localhost/authentication/WelcomePage/SignAndLog/Homepage/HomePage.php');
		} else {
			$message = "Invalid email or password";
		}
	} else {
		$message = "Invalid email or password";
	}
}
?>

<body>
	<img src="https://ysmeen24.github.io/project/Images/background2.png" alt="Nachos" width="400" height="350">
	<h1>Nachos</h1>
	<h3 class="position1">/ˈnatʃəʊz/ noun</h3>
	<h3 class="position2">a dish of tortilla chips topped with melted cheese and often also with other savoury toppings.
	</h3>
	<div>
		<form method="post" action="LogIn.php" autocomplete="on">
			<h4>Log in</h4>
			<h5><?php echo $message ?></h5>
			<hr>
			<p><label>Email address:*<br>
					<input name="EmailAdress" type="email" size="50" maxlength="30" placeholder="name@domain" required>
				</label></p>
			<p><label>Password:*<br>
					<input name="Password" type="password" size="50" placeholder="please enter your password here." required>
				</label></p>
			<input type="submit" value="Log in" class="FormButton">
			<br>
			<hr>
			<a href="./SignUp.php">
				<button type="button" class="FormButton">Sign up</button>
			</a>
		</form>
	</div>
</body>

</html>