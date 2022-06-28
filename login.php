<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    
</head>
<body>
	<header>
		<?php require_once 'header.php'; ?>
	</header>
	<main id="mainLogin">
		<div class="wrapper">
		  <form action="backend/loginController.php" method="POST">
		  	<div class="form-group">
		  		<label for="username">Gebruikersnaam</label>
                <input type="text" name="username" id="username"?>
            </div>
		  	<div class="form-group">
		  		<label for="password">Wachtwoord</label>
                <input type="password" name="password" id="password"?>
            </div>
		  	<input type="submit" name="submit" value="Login">
			 
			</form>
			<form action="register.php">
				<input id="marginBottom" id="createAccount"type="submit" name="submit" value="Nog geen account maak er een aan!"> 
			</form>
		</div>
	</main>
	<footer>
		<?php require_once 'footer.php'; ?>	
	</footer>
</body>
</html>