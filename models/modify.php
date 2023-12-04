<?php
// include 'config.php';
// include 'database.php';

class update extends Db
{
   public function __construct()
   {
      // Appeler le constructeur de la classe parente
      parent::__construct();
   }

   public function getIdFromUrl()
   {
       // Récupération de l'URL courante
       $url = $_SERVER['REQUEST_URI']; // $_SERVER['REQUEST_URI'] retourne l'URL courante
       
       // Récupération des paramètres de l'URL
       $params = parse_url($url, PHP_URL_QUERY); // parse_url() retourne un tableau associatif et php_url_query() retourne une chaine
       
       // Analyse des paramètres de l'URL et stockage dans un tableau associatif
       parse_str($params, $query);
       
       // Vérification si la clé 'update' existe dans le tableau $query
       if (isset($query['update'])) {
           // Retourne la valeur associée à la clé 'update'
           return $query['update'];
       } else {
           // Retourne null si la clé 'update' n'existe pas
           return null;
       }
   }

   public function exists($id)
   {
      // Définition de la requête SQL pour compter le nombre d'enregistrements avec l'id spécifié
      $sql = "SELECT COUNT(*) AS count FROM `personnages` WHERE `id` = :id";

      // Préparation de la requête SQL
      $stmt = $this->dbh->prepare($sql);

      // Liaison du paramètre :id à la valeur de $id
      $stmt->bindParam(':id', $id);

      // Exécution de la requête SQL
      $stmt->execute();

      // Récupere le nombre de lignes retournées par la requête
      $count = $stmt->fetchColumn(); // fetchColumn() retourne la colonne 0

      // Retourne true si le nombre de lignes est supérieur à 0, sinon retourne false
      return $count > 0;
   }

   
   public function get($id)
   {
      // Définition de la requête SQL pour récupérer les colonnes `name`, `atk`, `life`, `color` où l'id correspond à la valeur de :id
      $sql = "SELECT `name`, `atk`, `life`, `color` FROM `personnages` WHERE `id` = :id";

      // Préparation de la requête SQL
      $stmt = $this->dbh->prepare($sql);

      // Liaison du paramètre :id à la valeur de $id
      $stmt->bindParam(':id', $id);

      // Exécution de la requête SQL
      $stmt->execute();

      // Récupération du premier enregistrement retourné par la requête
      $data = $stmt->fetch();

      // Retourne les données récupérées
      return $data;
   }


   public function update($id, $name, $atk, $life, $color)
   {
      // Requête SQL pour modifier un enregistrement dans la table 'personnages'
      $sql = "UPDATE `personnages` SET `name` = :name, `atk` = :atk, `life` = :life, `color` = :color WHERE `id` = :id";

      // Préparer la requête SQL avec la connexion PDO
      $sth = $this->dbh->prepare($sql);

      // Lier les valeurs des paramètres de la requête avec les variables passées en argument
      $sth->bindValue(':id', $id, PDO::PARAM_INT);
      $sth->bindValue(':name', $name, PDO::PARAM_STR); // PDO::PARAM_STR pour une chaîne de caractères
      $sth->bindValue(':atk', $atk, PDO::PARAM_INT);
      $sth->bindValue(':life', $life, PDO::PARAM_INT);
      $sth->bindValue(':color', $color, PDO::PARAM_STR);

      // Exécuter la requête SQL
      $sth->execute();
   }
}
