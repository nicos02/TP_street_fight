<?php 
class liste extends Db
{
public $id;     // Attribut pour stocker l'identifiant
public $name;   // Attribut pour stocker le nom
public $atk;    // Attribut pour stocker la valeur d'attaque
public $life;   // Attribut pour stocker la valeur de vie
public $color;  // Attribut pour stocker la couleur

public function __construct()
{
   // Appeler le constructeur de la classe parente
   parent::__construct();
}

public function getAll() {
   // Requête SQL pour sélectionner tous les enregistrements de la table 'personnages'
   $sql = "SELECT * FROM `personnages`";
   
   // Préparer la requête SQL avec la connexion PDO
   $sth = $this->dbh->prepare($sql);
   
   // Exécuter la requête SQL
   $sth->execute();
   
   // Récupérer tous les résultats de la requête sous forme de tableau associatif
   return $sth->fetchAll(PDO::FETCH_ASSOC);
}
   
}
?>