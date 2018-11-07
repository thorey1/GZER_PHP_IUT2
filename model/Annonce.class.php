<?php

class Annonce {
  private $numA;
  private $titreA;
  private $prixA;
  private $localisationA;
  private $auteurA;
  private $dateA;
  private $categorieA;
  private $styleA;

  public function getNumA() {
    return $this->numA;
  }

  public function getTitreA() {
    return $this->titreA;
  }

  public function getAuteurA() {
    return $this->auteurA;
  }

  public function getStyleA() {
    return $this->styleA;
  }

  public function getPrixA() {
    return $this->prixA;
  }

  public function getLocalisationA() {
    return $this->localisationA;
  }

  public function getDateA() {
    return $this->dateA;
  }
}

?>
