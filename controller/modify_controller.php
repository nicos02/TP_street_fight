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
    // Vérifie l'existence de la clé 'name' dans le tableau $_POST, sinon utilise la valeur existante de $name
    $name = isset($_POST['name']) ? $_POST['name'] : $name;
    
    // Vérifie l'existence de la clé 'atk' dans le tableau $_POST, sinon utilise la valeur existante de $atk
    $atk = isset($_POST['atk']) ? $_POST['atk'] : $atk;
    
    // Vérifie l'existence de la clé 'life' dans le tableau $_POST, sinon utilise la valeur existante de $life
    $life = isset($_POST['life']) ? $_POST['life'] : $life;
    
    // Vérifie l'existence de la clé 'color' dans le tableau $_POST, sinon utilise la valeur existante de $color
    $color = isset($_POST['color']) ? $_POST['color'] : $color;

    // Appelle la méthode update de l'objet $update avec les valeurs récupérées
    $update->update($id, $name, $atk, $life, $color);

    // Définition du message de succès
    $message = 'Le formulaire a été modifié avec succès. Redirection en cours...';
}
