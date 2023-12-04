<?php 
include 'config.php';   // Inclure le fichier 'config.php' pour la configuration
include 'database.php'; // Inclure le fichier 'database.php' pour la classe Db

class insert extends Db
{
   public function __construct()
   {
      // Appeler le constructeur de la classe parente
      parent::__construct();
   }

   public function insert($name, $atk, $life, $color) {
      // Requête SQL pour insérer un nouvel enregistrement dans la table 'personnages'
      $sql = "INSERT INTO `personnages` (`name`, `atk`, `life`, `color`) VALUES (:name, :atk, :life, :color)";
      
      // Préparer la requête SQL avec la connexion PDO
      $sth = $this->dbh->prepare($sql);
      
      // Lier les valeurs des paramètres de la requête avec les variables passées en argument
      $sth->bindValue(':name', $name, PDO::PARAM_STR); // PDO::PARAM_STR pour une chaîne de caractères
      $sth->bindValue(':atk', $atk, PDO::PARAM_INT);
      $sth->bindValue(':life', $life, PDO::PARAM_INT);
      $sth->bindValue(':color', $color, PDO::PARAM_STR);
      
      // Exécuter la requête SQL
      $sth->execute();
   }
}
?>