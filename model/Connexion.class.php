<?php
try {
  $bdd = new PDO('sqlite:data/base.db');

  $req = $bdd->prepare('INSERT INTO membres(num, pseudo, mail, mdp) VALUES(:num, :pseudo, :mail, :mdp)');

  $req->execute(array(
    'num' => $num,
    'pseudo' => $pseudo,
    'mail' => $mail,
    'mdp' => $mdp,
    ));



    class MembreDAO {
      private $db;

      public function __construct($path){
        try {
          $this->db = new PDO('sqlite:'.$path.'/membre.db');
        } catch (PDOException $e) {
          die("erreur de connexion:".$e->getMessage());
        }

      }



      public function get(int $num): Music {
        $req = "SELECT * FROM membres WHERE num='$num'";
        $sth=$this->db->query($req);

        $result = $sth->fetchAll(PDO::FETCH_CLASS,'Membre');
        if($result[0] == null){
          throw 'tableau vide';
        }
        return $result[0];
      }


    }





 ?>
