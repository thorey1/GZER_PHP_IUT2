<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../view/css/deposer_annonce.view.styles.css" />
  <title>Gzer - déposer une annonce</title>
</head>
<body>
  <div class="topnav">
    <a href="#home">GZER</a>
    <a class="active" href="#boutique">Déposer une annonce</a>
    <a href="#annonces">Annonces</a>
    <a href="#se_connecter">Se connecter</a>
  </div>

  <div class="navbar">
    <a href="#questions">Des questions ?</a>
    <a href="#infos">Informations légales</a>
    <a href="#a_propos">A propos</a>
  </div>

  <div id=container style="padding-left:16px">

    <h2>Déposer une annonce</h2>

    <h3>Votre annonce</h3>
    Catégorie
    <br><br>
    <form action="">
      <select id="categorie" name="categorie">
        <option value="prestation">Prestation</option>
        <option value="casques_enceintes">Casques et enceintes</option>
        <option value="home_audio">Home audio</option>
        <option value="accessoires">Accessoires audio</option>

      </select>
      <br><br>

      <select id="style" name="style">
        <option value="blues">Blues</option>
        <option value="disco">Disco</option>
        <option value="funk">Funk</option>
        <option value="jazz">Jazz</option>
        <option value="metal">Metal</option>
        <option value="pop">Pop</option>
        <option value="rap">Rap</option>
        <option value="rock">Rock</option>
        <option value="reggae">Reggae</option>
        <option value="gospel">Gospel</option>
        <option value="soul">Soul</option>

      </select>
      <br><br>

      Titre de l'annonce <br><br>
      <input type="text" name="titre" value=""><br><br>
      Prix <br><br>
      <input type="text" name="prix" value=""><br><br>
      Quartier à Grenoble <br><br>
      <select id="quartier" name="quartier">
        <option value="polygone_scientifique">Blues</option>
        <option value="esplanade">Esplanade</option>
        <option value="bastille">Bastille</option>
        <option value="Saint-Laurent">Saint - Laurent</option>
        <option value="ile_verte">L'Ile Verte</option>
        <option value="europole">Europole</option>
        <option value="chorrier_Berriat">Chorrier - Berriat</option>
        <option value="hyper_centre">Hyper - centre</option>
        <option value="grands_boulevards">Grands boulevards</option>
        <option value="eaux_claires">Eaux Claires</option>
        <option value="capuche">Capuche</option>
        <option value="tesseire">Tesseire</option>
        <option value="ile_verte">L'Ile Verte</option>
        <option value="europole">Europole</option>
        <option value="exposition_bajatiere">Exposition - Bajatiere</option>
        <option value="mistral">Mistral</option>
        <option value="allies_alpins">Alliés-Alpins</option>
        <option value="villeneuve_village_olympique">Villeneuve - Village Olympique</option>
        <option value="le_rondeau">Le Rondeau</option>
        <option value="alpexpo_grand'place">Alpexpo - Grand'place</option>

      </select>

      <br><br>

      <input type="submit" name="" value="Valider l'annonce">
    </form>
  </div>

</body>
</html>
