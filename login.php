<?php 
	//var_dump($_GET);
	
	//echo "<br>";
	
	//var_dump($_POST);
	
	$signupEmailError = "*";
	
	//kas keegi vajutas nuppu ja see on olemas
	
	if (isset ($_POST["signupEmail"])) {
		//on olemas
		// kas epost on tühi
		if (empty ($_POST["signupEmail"])) {
			// on tühi
			$signupEmailError = "* Väli on kohustuslik!";
		}
	}
	
	$signupPasswordError = "*";
	if (isset ($_POST["signupPassword"])) {
		if (empty ($_POST["signupPassword"])) {
			$signupPasswordError = "* Väli on kohustuslik!";
		} else {
			// parool ei olnud tühi
			if ( strlen($_POST["signupPassword"]) < 8 ) {
				$signupPasswordError = "* Parool peab olema vähemalt 8 tähemärkki pikk!";
			}
		}
	}
	
	$loginError = "*";
	if (isset ($_POST["loginEmail"])) {
		if (empty ($_POST["loginEmail"])) {
			$loginError = "* Väli on kohustuslik!";
		}
	}
	
	$loginPasswordError = "*";
	if (isset ($_POST["loginPassword"])) {
		if (empty ($_POST["loginPassword"])) {
			$loginPasswordError = "* Väli on kohustuslik!";
		}
	}
	
	$homeworkError = "*";
	if (isset ($_POST["homeworkEmail"])) {
		if (empty ($_POST["homeworkEmail"])) {
			$loginError = "* Looks like you forgot your homework email!";
		}
	}
	
	$homeworkPasswordError = "*";
	if (isset ($_POST["homeworkPassword"])) {
		if (empty ($_POST["homeworkPassword"])) {
			$loginPasswordError = "* You need to enter a password too, doofus.";
		}
	}
	
	
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Sisselogimise leht</title>
	</head>
	<body>

		<h1>Logi sisse</h1>
		
		<form method="POST" >
			
			<input name="loginEmail" placeholder="E-post" type="email"> <?php echo $loginError; ?>
			
			<br><br>

			<input name="loginPassword" placeholder="Parool" type="password"> <?php echo $loginPasswordError; ?>
			
			<br><br>
			
			<input type="submit" value="Logi sisse">
		
		</form>
		
		<h1>Loo kasutaja</h1>
		
		<form method="POST" >
			
			<input name="signupEmail" placeholder = "E-post" type="email"> <?php echo $signupEmailError; ?>
			
			<br><br>

			<input name="signupPassword" placeholder="Parool" type="password"> <?php echo $signupPasswordError; ?>
			
			<br><br>
			
			<input type="submit" value="Loo kasutaja">
		
		</form>

		
		<h1>Homework Field</h1>
		
		<form method="POST" >
			
			<input name="homeworkEmail" placeholder = "Homework Name" type="email"> <?php echo $homeworkError; ?>
			
			<br><br>

			<input name="homeworkPassword" placeholder="Homework Password" type="password"> <?php echo $homeworkPasswordError; ?>
			
			<br><br>
			
			<input type="submit" value="Loo kasutaja">
		
		</form>
	</body>
</html>