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
            include 'views/create.php';
         } elseif (isset($_GET['fight'])) {
            include 'views/fighTest.php';
         } elseif (isset($_GET['list'])) {
            include 'views/list.php';
         } else {
            include 'views/home/homepage.php';
         }
      ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
<script src="assets/lib/js/insert.js"></script>
</body>
</html>