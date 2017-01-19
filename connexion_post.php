<?php

function log_connexion($value) {
  file_put_contents("log\connexion.log",
                    print_r($value."\n",true),
                    FILE_APPEND);
}
// ==================================

$email		= $_POST['email'];
$password	= $_POST['password'];

log_connexion("");
log_connexion("nouvelle connexion:");
log_connexion("  email: ".$email);
log_connexion("  mdp:   ".$password);

$Bdd = new PDO("mysql:host=localhost;dbname=boutik", "root", "");

// controle du mot de passe

$reponseBdd = $Bdd->query(
    "SELECT COUNT(*)"
  . "FROM `client`"
  . "WHERE email='"
  . $email."';"
  )->fetch();


