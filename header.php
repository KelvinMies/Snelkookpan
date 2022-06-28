
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<header>
		<div class="header">
			
			<div class="navbar">
				<a href="index.php">Home</a>
				<a href="OverOns.php">Over ons</a>
				<?php if(isset($_SESSION['user_id'])): ?>
				<a class="login" href="logout.php">Uitloggen</a>
				<?php else: ?>
				<a class="login" href="login.php">Inloggen</a>
				
				<?php endif; ?>
			</div>
		</div>
	</header>
</body>
</html>