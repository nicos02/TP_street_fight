<?php 
class Db {
    public $dbh;

    public function __construct()
    {
        try {
            $host = DB_HOST; // Utilisez la constante définie dans config.php
            $dbname = DB_NAME; // Utilisez la constante définie dans config.php
            $user = DB_USER; // Utilisez la constante définie dans config.php
            $password = DB_PASSWORD; // Utilisez la constante définie dans config.php

            $this->dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $password); // Connexion à la base de données
        } catch (PDOException $e) {
            echo 'Erreur lors de la connexion à la base de données : ' . $e->getMessage();
            exit();
        }
    }
}
?>