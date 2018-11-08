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

  public function getAnnoncesParStyle(string $style):array{
    $req = "SELECT * FROM annonces WHERE styleA = '$style'";
    $st = $this->getDb()->query($req);
    $result=$st->fetchAll(PDO::FETCH_CLASS, 'Annonce');

    return $result;
  }

  public function getAnnoncesParQuartier(string $quartier):array{
    $req = "SELECT * FROM annonces WHERE localisationA = '$quartier'";
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

  public function getMembreParPseudo(string $pseudoM):Membre{
    $req = "SELECT * FROM membres WHERE pseudoM = '$pseudoM'";
    $st = $this->getDb()->query($req);
    $result=$st->fetchAll(PDO::FETCH_CLASS, 'Membre');

    return $result[0];
  }

  public function insertAnnonce($numA, $titreA, $prixA, $localisationA, $auteurA, $dateA, $categorieA, $styleA) {
    $req = "INSERT INTO annonces(numA, titreA, prixA, localisationA, auteurA, dateA, categorieA, styleA)
    VALUES(:numA, :titreA, :prixA, :localisationA, :auteurA, :dateA, :categorieA, :styleA)";
    $st = $this->getDb()->prepare($req);
    $st->execute([
      ':numA' => $numA,
      ':titreA' => $titreA,
      ':prixA' => $prixA,
      ':localisationA' => $localisationA,
      ':auteurA' => $auteurA,
      ':dateA' => $dateA,
      ':categorieA' => $categorieA,
      ':styleA' => $styleA,
    ]);
    var_dump($st);
    return $this->getDb()->lastInsertId();
  }


  public function insertMembre($numM,$pseudoM,$mailM,$mdpM){
    $req = "INSERT INTO membres(numM, pseudoM, mailM, mdpM) VALUES(:numM, :pseudoM, :mailM, :mdpM)";
    $st = $this->getDb()->prepare($req);
    $st->execute([
      'numM' => $numM,
      'pseudoM' => $pseudoM,
      'mdpM' => $mdpM,
      'mailM' => $mailM,
    ]);
    var_dump($st);
    return $this->getDb()->lastInsertId();
  }
}
?>
