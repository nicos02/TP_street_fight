<?php 
class liste extends Db
{
   public function __construct()
   {
      parent::__construct();
   }

   public function getAll() {
      $sql = "SELECT * FROM `personnages`";
      $sth = $this->dbh->prepare($sql);
      $sth->execute();
      return $sth->fetchAll(PDO::FETCH_ASSOC);
   }
   
}
?>