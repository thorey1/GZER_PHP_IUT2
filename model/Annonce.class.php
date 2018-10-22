<?php
abstract class Annonce {
  private $numA;
  private $titreA;
  private $prixA;
  private $localisation;
  private $auteurA;
  private $dateA;

/*
  public function __construct($numA, $titreA, $prixA, $localisation, $auteurA, $dateA){
    $this->numA = $numA;
    $this->titreA = $titreA;
    $this->prixA = $prixA;
    $this->localisation = $localisation;
    $this->auteurA = $auteurA;
    $this->dateA = $dateA;
  }
*/

  public function getTitre() {
    return $this->titreA;
  }
}

class AnnonceMat extends Annonce {
  private $categorieAM;

/*
  public function __construct($numA, $titreA, $prixA, $localisation, $auteurA, $dateA, $categorieAM){
    parent::construct($numA, $titreA, $prixA, $localisation, $auteurA, $dateA);
    $this->categorieAM = $categorieAM;
  }
*/

}

class AnnoncePrest extends Annonce {
  private $styleAP;

/*
  public function __construct($numA, $titreA, $prixA, $localisation, $auteurA, $dateA, $styleAP){
    parent::construct($numA, $titreA, $prixA, $localisation, $auteurA, $dateA);
    $this->styleAP = $styleAP;
  }
*/

  public function getStyle() {
    return $this->styleAP;
  }

}

?>
