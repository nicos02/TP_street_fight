<?php
$update = new update(); // Instanciation de la classe update
$id = $update->getIdFromUrl(); // Recuperer l'id depuis l'URL
$message = '';
// Vérifier si l'identifiant existe dans la base de données
if ($update->exists($id)) {
   // Récupérer les valeurs existantes de la base de données
   $existingData = $update->get($id);
   $name = $existingData['name'];
   $atk = $existingData['atk'];
   $life = $existingData['life'];
   $color = $existingData['color'];
} else {
   // Initialiser les valeurs aux chaînes vides si l'identifiant n'existe pas
   $name = '';
   $atk = '';
   $life = '';
   $color = '';
}

// Récupérer les valeurs du formulaire soumis (le cas échéant)
if ($_POST) {
   $name = isset($_POST['name']) ? $_POST['name'] : $name;
   $atk = isset($_POST['atk']) ? $_POST['atk'] : $atk;
   $life = isset($_POST['life']) ? $_POST['life'] : $life;
   $color = isset($_POST['color']) ? $_POST['color'] : $color;

   // Appeler la méthode de mise à jour
   $update->update($id, $name, $atk, $life, $color);

   $message = 'Le formulaire a été modifié avec succès. Redirection en cours...';
}
