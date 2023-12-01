<?php 
include 'models/config.php';
include 'models/database.php';
?>


<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="assets/lib/css/style.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
   <title>Tp StreetFight</title>
</head>
<body>
   <header>
      <?php include 'views/navbar/navbar.php'; ?>
   </header>
   <main>
      <?php
if (isset($_GET['create'])) {
   // Si le paramètre GET 'create' est défini, inclure la vue 'create.php'
   include 'views/create.php';
} elseif (isset($_GET['fight'])) {
   // Sinon, si le paramètre GET 'fight' est défini, inclure la vue 'fighTest.php'
   include 'views/fighTest.php';
} elseif (isset($_GET['list'])) {
   // Sinon, si le paramètre GET 'list' est défini, inclure la vue 'list.php'
   include 'views/list.php';
} elseif (isset($_GET['id'])) {
   include 'views/personnage.php';
}
 else {
   // Sinon, inclure la vue par défaut 'homepage.php'
   include 'views/home/homepage.php';
}
      ?>
   </main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
<script src="assets/lib/js/insert.js"></script>
</body>
</html>