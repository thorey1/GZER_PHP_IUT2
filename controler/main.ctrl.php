<?php
// Controleur principal : celui qui est utilisé au démarrage

//////////////////////////////////////////////////////////////////////////////
// PARTIE RECUPERATION DES DONNEES
//////////////////////////////////////////////////////////////////////////////

// Récupération des informations de la query string
if (isset($_GET['style'])) {
  $style = $_GET['style'];
} else {
  $style = '';
}

if (isset($_GET['materiel'])) {
  $materiel = $_GET['materiel'];
} else {
  $materiel = '';
}

//////////////////////////////////////////////////////////////////////////////
// PARTIE SELECTION DE LA VUE
//////////////////////////////////////////////////////////////////////////////

//Si on connait le style de musique ou le matériel, on charge la vue avec les artistes correspondants
if ($style != '' || $materiel != '') {
  //On charge la vue
  include('../controler/annonces.ctrl.php');
} else {
  //On charge la vue principale
  include('../view/main.view.php');
}
?>
