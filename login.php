 <?php
 
	/*var_dump($_GET);
	
	echo "<br>";
	
	var_dump($_POST);
	*/
	$signupEmailError = "*";
	
	// kas keegi vajutas nuppu ja see on olemas
	
	if (isset ($_POST["signupEmail"])) {
		
			//on olemas
			//kas epost on tühi
			if (empty ($_POST["signupEmail"])){
				
				//on tühi
				$signupEmailError = "Väli on kohustuslik!";
			}
	}
	
	// kas epost on tühi
	
 	$signupPasswordError = "*";
	
	if (isset ($_POST["signupPassword"])) {
		
			if (empty ($_POST["signupPassword"])){
				
				$signupUsernamePassword = "Väli on kohustuslik!";
			} else {
				
				// parool ei olnud tühi
				
				if (strlen($_POST[signupPassword"]) < 8 ) {
					
					$signupPasswordError = "* Parool peab olema vähemalt 8 tähemärki pikk"
				}
	}
 
 ?>
 <!DOCTYPE html>
<html>
	<head>
		<title>Login page</title>
	</head>
	<body>

		<h1>Login</h1>

	<form method = "POST">
		<form>
			<label>E-mail</label><br>
			<input name="Email" type = "email">
		
			<br><br>
		
			<input name="loginPassword" placeholder = "Password" type = "password">
			
			<br><br>
			
			<input type = "submit" value = "Harambe">
 
		</form>
		
				<h1>Register</h1>

	<form method = "POST">
		<form>
			<label>E-mail</label><br>
			<input name="signupEmail" type = "email"> <?php $signupEmailError; ?>
		
			<br><br>
		
			<input name="signupPassword" placeholder = "Password" type = "password"> <?php $signupPasswordError; ?>
			
			<br><br>
			
			<input type = "submit" value = "Create Harambe">
 
		</form>
		
		
	</body>
</html> 