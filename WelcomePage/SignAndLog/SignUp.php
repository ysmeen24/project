<?php require_once('../config.php');
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="https://ysmeen24.github.io/project/CSS/SignUp.CSS">
	<script type="text/javascript" src="https://ysmeen24.github.io/project/JS/Java.js"></script>
</head>



<body>
	<img src="https://ysmeen24.github.io/project/Images/background2.png" alt="Nachos" width="400" height="350">
	<h1>Nachos</h1>
	<h3 class="position1">/ˈnatʃəʊz/ noun</h3>
	<h3 class="position2">a dish of tortilla chips topped with melted cheese and often also with other savoury toppings.
	</h3>
	<?php
	$message = "";
	if (isset($_POST['submit'])) {
		$Fullname = $_POST['Fullname'];
		$Emailadress = $_POST['Emailadress'];
		$Phonenumber = $_POST['Phonenumber'];
		$psw = $_POST['psw'];
		$confirm_Password = $_POST['confirm_Password'];
		$news = $_POST['news'];
		//$hashPass = crypt($psw, '$1$rasmusle$');

		$sql = "INSERT INTO users (full_name, email,password,phone_number,is_accpet_news) VALUES ('" . $Fullname . "', '" . $Emailadress . "', '" . $psw . "','" . $Phonenumber . "','" . $news . "')";

		if ($conn->query($sql) === TRUE) {
			//$message = "Account Created Successfully";
			
			header('Location: http://localhost/authentication/WelcomePage/WelcomePage.php');
		} else if (mysqli_errno($conn) == 1062) {
			$message =  "User with this email already exists";
		} else {
			$message =  "Error: " . $sql . "<br>" . $conn->error;
		}
	}

	?>
	<div>
		<form method="post" action="SignUp.php" autocomplete="on">
			<h4>Sign Up</h4>
			<h5 class=""><?php echo $message ?></h5>

			<hr>
			<p><label>Full name:*<br>
					<input name="Fullname" type="text" size="70" maxlength="30" class="font" placeholder="Please enter your name here." id="name" required>
				</label>
			</p>
			<p><label>Email address:*<br>
					<input name="Emailadress" type="email" size="70" maxlength="30" placeholder="name@domain" id="email" required>
				</label></p>
			<p><label>Phone number:*<br>
					<input name="Phonenumber" type="tel" size="70" placeholder="(###) ###-####" id="number" required>
				</label></p>
			<p><label>Password:*<br>
					<input type="password" size="70" placeholder="Please enter your password here." pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" id="psw" name="psw" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
				</label></p>
			<p><label>Repeat password:*<br>
					<input name="confirm_Password" type="password" size="70" placeholder="Please re-enter your password here." id="confirm_password" required>
				</label></p>
			<label><input name="Iaccept" type="checkbox" value="Conditions" required>
				I accept terms&conditions
			</label><br>
			<label><input name="news" type="checkbox" value="1">
				I want to receive news from World Cuisine
			</label><br>
			<hr>
			<p id="helpText"></p>
			<input type="submit" name="submit" value="Create Account" class="FormButton" id="onSuccess">
		</form>
		<article id="message">
			<h4>Password must contain the following:</h4>
			<p id="letter" class="invalid">A <b>lowercase</b> letter</p>
			<p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
			<p id="numberpass" class="invalid">A <b>number</b></p>
			<p id="length" class="invalid">Minimum <b>8 characters</b></p>
		</article>
	</div>
	<script>
		var myInput = document.getElementById("psw");
		var letter = document.getElementById("letter");
		var capital = document.getElementById("capital");
		var number = document.getElementById("numberpass");
		var length = document.getElementById("length");
		var onSuccess = document.getElementById("onSuccess");

		onSuccess.addEventListener("click", function(event) {
			alert("Account created successfully!")
		});

		myInput.onfocus = function() {
			document.getElementById("message").style.display = "block";
		}


		myInput.onblur = function() {
			document.getElementById("message").style.display = "none";
		}


		myInput.onkeyup = function() {
			var lowerCaseLetters = /[a-z]/g;
			if (myInput.value.match(lowerCaseLetters)) {
				letter.classList.remove("invalid");
				letter.classList.add("valid");
			} else {
				letter.classList.remove("valid");
				letter.classList.add("invalid");
			}


			var upperCaseLetters = /[A-Z]/g;
			if (myInput.value.match(upperCaseLetters)) {
				capital.classList.remove("invalid");
				capital.classList.add("valid");
			} else {
				capital.classList.remove("valid");
				capital.classList.add("invalid");
			}

			var numbers = /[0-9]/g;
			if (myInput.value.match(numbers)) {
				numberpass.classList.remove("invalid");
				numberpass.classList.add("valid");
			} else {
				numberpass.classList.remove("valid");
				numberpass.classList.add("invalid");
			}

			if (myInput.value.length >= 8) {
				length.classList.remove("invalid");
				length.classList.add("valid");
			} else {
				length.classList.remove("valid");
				length.classList.add("invalid");
			}
		}
		var password = document.getElementById("psw"),
			confirm_password = document.getElementById("confirm_password");

		function validatePassword() {
			if (password.value != confirm_password.value) {
				confirm_password.setCustomValidity("Passwords Don't Match");
			} else {
				confirm_password.setCustomValidity('');
			}
		}

		password.onchange = validatePassword;
		confirm_password.onkeyup = validatePassword;
	</script>

</body>

</html>