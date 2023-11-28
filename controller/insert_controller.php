<?php
include '../models/insert.php';
// Récupérer les valeurs du formulaire
$name = $_POST['name'];
$atk = $_POST['atk'];
$life = $_POST['life'];
$color = $_POST['color'];

// Créer une instance de la classe insert
$insert = new insert();

// Appeler la méthode insert avec les valeurs récupérées du formulaire
$insert->insert($name, $atk, $life, $color);
?>