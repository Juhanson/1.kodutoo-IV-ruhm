 <?php
 
	/*var_dump($_GET);
	
	echo "<br>";
	
	var_dump($_POST);
	*/
	$signupEmailError = "*";
	
	// kas keegi vajutas nuppu ja see on olemas
	
	if (isset ($_POST["signupEmail"])) {
		
			//on olemas
			//kas epost on t�hi
			if (empty ($_POST["signupEmail"])){
				
				//on t�hi
				$signupEmailError = "V�li on kohustuslik!";
			}
	}
	
	// kas epost on t�hi
	
 	$signupPasswordError = "*";
	
	if (isset ($_POST["signupPassword"])) {
		
			if (empty ($_POST["signupPassword"])){
				
				$signupUsernamePassword = "V�li on kohustuslik!";
			} else {
				
				// parool ei olnud t�hi
				
				if (strlen($_POST[signupPassword"]) < 8 ) {
					
					$signupPasswordError = "* Parool peab olema v�hemalt 8 t�hem�rki pikk"
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