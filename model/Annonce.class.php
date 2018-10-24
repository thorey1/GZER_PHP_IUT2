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
class Annonce {
  private $numA;
  private $titreA;
  private $prixA;
  private $localisationA;
  private $auteurA;
  private $dateA;
  private $categorieA;
  private $styleA;

  public function getTitreA() {
    return $this->titreA;
  }

  public function getAuteurA() {
    return $this->auteurA;
  }
}


?>
