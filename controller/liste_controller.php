<?php 
include 'models/liste.php';
$liste = new liste('Name', 'Atk', 'life', 'color');
$personnages = $liste->getAll();
?>