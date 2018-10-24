/*
CREATE TABLE annoncesMat (
  numAM INTEGER,
  categorieAM STRING,
  titreAM STRING,
  prixAM INTEGER,
  localisationAM STRING,
  auteurAM STRING,
  dateAM date
);


CREATE TABLE annoncesPrest (
  numAP INTEGER,
  titreAP STRING,
  styleAP STRING,
  prixAP INTEGER,
  localisationAP STRING,
  auteurAP STRING,
  dateAP date
);
*/
CREATE TABLE annonces (
  numA INTEGER,
  titreA STRING,
  prixA INTEGER,
  localisationA STRING,
  auteurA STRING,
  dateA date,
  categorieA STRING,
  styleA STRING
);


CREATE TABLE membres (
  numM INTEGER,
  pseudo STRING,
  mail STRING,
  mdp STRING
);
