<?php 
include 'models/fight.php';

$fight = new fight('Name', 'Atk', 'life', 'color');
$combats = $fight->getAll();
?>