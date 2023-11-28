<?php 
include 'config.php';
include 'database.php';
class insert extends Db
{

   public function __construct()
   {
      parent::__construct();
   }

   public function insert($name, $atk, $life, $color) {

      $sql = "INSERT INTO `personnages` (`name`, `atk`, `life`, `color`) VALUES (:name, :atk, :life, :color)";
      $sth = $this->dbh->prepare($sql);
      $sth->bindValue(':name', $name, PDO::PARAM_STR);
      $sth->bindValue(':atk', $atk, PDO::PARAM_INT);
      $sth->bindValue(':life', $life, PDO::PARAM_INT);
      $sth->bindValue(':color', $color, PDO::PARAM_STR);
      $sth->execute();
   }
}
?>