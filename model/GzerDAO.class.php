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

  public function getAnnonceParNum(int $numA):Annonce{
    $req = "SELECT * FROM annonces WHERE numA = '$numA'";
    $st = $this->getDb()->query($req);
    $result=$st->fetchAll(PDO::FETCH_CLASS, 'Annonce');

    return $result[0];
  }

  public function getMembre(int $numM):Membre{
    $req = "SELECT * FROM membres WHERE numM = '$numM'";
    $st = $this->getDb()->query($req);
    $result=$st->fetchAll(PDO::FETCH_CLASS, 'Membre');

    return $result[0];
  }

  public function getAnnoncesParCategorie(string $cat):array{
    $req = "SELECT * FROM annonces WHERE categorieA = '$cat'";
    $st = $this->getDb()->query($req);
    $result=$st->fetchAll(PDO::FETCH_CLASS, 'Annonce');

    return $result;
  }

  public function getAnnonces():array{
    $req = "SELECT * FROM annonces";
    $st = $this->getDb()->query($req);
    $result=$st->fetchAll(PDO::FETCH_CLASS, 'Annonce');

    return $result;
  }

  public function getMembres():array{
    $req = "SELECT * FROM membres";
    $st = $this->getDb()->query($req);
    $result=$st->fetchAll(PDO::FETCH_CLASS, 'Membre');

    return $result;
  }
}
?>
