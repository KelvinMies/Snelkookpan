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
	<main id="wrapper">
		<div class="login">
		  <form action="backend/registerController.php" method="POST">
		  	<div class="form-group" >
		  		<label for="username">Gebruikersnaam</label>
                <input type="text" name="username" id="username"?>
            </div>
            <div class="form-group">
		  		<label for="email">E-mail</label>
                <input type="email" name="email" id="email"?>
            </div>
		  	<div class="form-group">
		  		<label for="password">Wachtwoord</label>
                <input type="password" name="password" id="password"?>
            </div>
            <div class="form-group">
		  		<input id="marginBottom" type="submit" name="submit" value="Account aanmaken">  
		  	</div>
			</form>
			
		</div>
	</main>
	<footer>
		<?php require_once 'footer.php'; ?>	
	</footer>
</body>
</html>