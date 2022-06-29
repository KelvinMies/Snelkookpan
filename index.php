<?php session_start() ?>
<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">

  <meta name="theme-color" content="#fafafa">
</head>

<body>
  <!-- Header -->
  <header>
    <?php require_once 'header.php'; ?>
  </header>
  <!-- Eind van header -->
  <!-- Hier komt onze code voor de body -->


  <!-- Eind code body-->

  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>

  <main>
    <?php
      require_once 'backend/conn.php';
      $query = "SELECT * FROM accommodations";
      $statement = $conn->prepare($query);
      $statement->execute();
      $accommodations = $statement->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <div class="container">
      <div class="house">
        <?php foreach ($accommodations as $accommodation): ?>
          <img src="<?php echo $accommodation['image'];?>" alt="house" width="250">
          <p><?php echo $accommodation['name'];?></p>
          <p><?php echo $accommodation['price'];?></p>
          <p><?php echo $accommodation['location'];?></p>
          <p><?php echo $accommodation['story'];?></p>
          <p><?php echo $accommodation['max_per'];?></p>
          <p><?php echo $accommodation['recensies'];?></p>
          <p><?php echo $accommodation['available'];?></p>
        <?php endforeach; ?>
      </div>
    </div>
  </main>



  <!-- Footer -->
  <footer>
    <?php require_once 'footer.php'; ?> 
  </footer>
  <!-- Eind van footer -->
</body>
  
</html>
