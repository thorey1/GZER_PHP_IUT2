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

//////////////////////////////////////////////////////////////////////////////
// PARTIE SELECTION DE LA VUE
//////////////////////////////////////////////////////////////////////////////

//Si on connait le style de musique, on charge la vue avec les artistes correspondants
if ($style != '') {
  //On charge la vue
  include('../view/artistes.view.php');
} else {
  //On charge la vue principale
  include('../view/main.view.php');
}
?>
