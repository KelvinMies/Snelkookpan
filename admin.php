<?php
    session_start();
    if ($_SESSION['user_admin'] != 1){
        header("location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <!-- Header -->
  <header>
    <?php require_once 'header.php'; ?>
  </header>
  <!-- Eind van header -->


  <!-- Footer -->
  <footer>
    <?php require_once 'footer.php'; ?> 
  </footer>
  <!-- Eind van footer -->
</body>
</html>
