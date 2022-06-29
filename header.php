
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/main.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@600&family=DM+Sans&family=Fredoka+One&family=Source+Code+Pro&display=swap" rel="stylesheet">
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