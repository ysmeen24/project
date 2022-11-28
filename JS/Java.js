var helpText = document.getElementById("helpText");
	function init()
  		{
  			helpText = document.getElementById("helpText");

			document.getElementById("name").addEventListener("focus",
			function() {helpText.innerHTML = "Enter your full name in this textbox.";},
			false);

			document.getElementById("email").addEventListener("focus",
			function() {helpText.innerHTML = "Enter your email address in this textbox.";},
			false);

			document.getElementById("number").addEventListener("focus",
			function() {helpText.innerHTML = "Enter your Phone Number in this textbox.";},
			false);
			
			document.getElementById("message").addEventListener("focus",
			function() {helpText.innerHTML = "Create a password in this textbox.";},
			false);

			document.getElementById("confirm_password").addEventListener("focus",
			function() {helpText.innerHTML = "Re-Enter your password in this textbox.";},
			false);
  		}

	window.addEventListener("load", init, false);

  
