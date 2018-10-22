<?php
class GzerDAO {
  private $db;

  // Constructeur chargé d'ouvrir la BD
  function __construct($path) {
    $database = 'sqlite:'.$path.'/gzer.db';
    try {
      $this->db = new PDO($database);
    }
    catch (PDOException $e){
      die("erreur de connexion:".$e->getMessage());
    }
  }

  public function getDb(){
    return $this->db;
  }

  public function getAnnonceM(int $numAM):AnnonceMat{
    $req = "SELECT * FROM annoncesMat WHERE numAM='$numAM'";
    $st = $this->getDb()->query($req);
    $result=$st->fetchAll(PDO::FETCH_CLASS, 'AnnonceMat');

    return $result[0];
  }

  public function getAnnonceP(int $numAP):AnnoncePrest{
    $req = "SELECT * FROM annoncesPrest WHERE numAP='$numAP'";
    $st = $this->getDb()->query($req);
    $result=$st->fetchAll(PDO::FETCH_CLASS, 'AnnoncePrest');

    return $result[0];
  }
}
?>
