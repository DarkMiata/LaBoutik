<?php

function log_connexion($value) {
  file_put_contents("log\connexion.log",
                    print_r($value."\n",true),
                    FILE_APPEND);
}
// ==================================

$email		= $_POST['email'];
$password	= $_POST['password'];

log_connexion ("");
log_connexion ("tentative de nouvelle connexion:");
log_connexion ("  ".date("d/m/Y - h:i:sa"));
log_connexion ("  email: ".$email);
log_connexion ("  mdp:   ".$password);

$Bdd = new PDO("mysql:host=localhost;dbname=boutik", "root", "");

// controle du mot de passe

$reponseBdd = $Bdd->query(
    "SELECT COUNT(*) "
  . "FROM `client` "
  . "WHERE email='"
  . $email."';"
  )->fetch();

log_connexion("  demande à la base si compte existant");

if ($reponseBdd[0] <> "0") {
  log_connexion("  compte existant OK");
}

// SELECT mdp FROM client WHERE email=''

$reponseBdd = $Bdd->query(
    "SELECT mdp "
  . "FROM client "
  . "WHERE email='"
  . $email."';"
  )->fetch();

$mdpBdd = $reponseBdd[0];

log_connexion("  récupération du mdp dans la BDD: ".$mdpBdd);



