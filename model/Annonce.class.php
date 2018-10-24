<?php
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

class AnnonceMat {
  private $numAM;
  private $categorieAM;
  private $titreAM;
  private $prixAM;
  private $localisationAM;
  private $auteurAM;
  private $dateAM;

  public function getTitreAM() {
    return $this->titreAM;
  }

  public function getAuteurAM() {
    return $this->auteurAM;
  }
}

class AnnoncePrest {
  private $numAP;
  private $titreAP;
  private $styleAP;
  private $prixAP;
  private $localisationAP;
  private $auteurAP;
  private $dateAP;

  public function getTitreAP() {
    return $this->titreAP;
  }

  public function getAuteurAP() {
    return $this->auteurAP;
  }

}

?>
