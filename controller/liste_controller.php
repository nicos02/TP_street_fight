<?php 
// Inclure le fichier 'liste.php' du modèle
include 'models/liste.php';

// Créer une instance de la classe 'liste' avec les paramètres 'Name', 'Atk', 'life', 'color'
$liste = new liste('Name', 'Atk', 'life', 'color');

// Appeler la méthode 'getAll()' de l'objet '$liste' pour récupérer tous les personnages
$personnages = $liste->getAll();
?>