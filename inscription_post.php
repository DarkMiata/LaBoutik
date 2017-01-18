<?php

/*  inscription du nouveau membre dans la base de donnée
 * 
 * a ajouter:
 *  filter_input sur les _POST
*/

function phpAlert($msg) {
  echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
// =========================================

$nom      = $_POST['nom'];
$prenom   = $_POST['prenom'];
$adresse  = $_POST['adresse'];
$email    = $_POST['email'];
$mdp      = $_POST['password'];
$confirm  = $_POST['confirm'];

/* Vérification temporaire des deux mots de passe */
if ($mdp <> $confirm) {
  $_SESSION['erreur_login']="Les deux mots de passe ne sont pas identiques";
  header('Location: inscription.php');
  exit();
}

$Bdd = new PDO("mysql:host=localhost;dbname=boutik", "root", "");

// Email du nouveau inscript déjà présent dans la base de données ?
$reponseBdd = $Bdd->query(
  " SELECT COUNT(*)"
  . " FROM `client`"
  . " WHERE email='"
  . $email."';"
  )->fetch();

if ($reponseBdd[0] <> '0') {
  $_SESSION['erreur_login']="Le compte ".$email." existe déjà";
  header('Location: inscription.php');
  exit();
}

// Inscription prête à être inscrite à la BDD
$requete =
" INSERT INTO client"
. " (nom, prenom, adresse, email, mdp)"
. " VALUES"
. " ('".$nom.      "'"
. " ,'".$prenom.   "'"
. " ,'".$adresse.  "'"
. " ,'".$email.    "'"
. " ,'".$mdp.      "');";

$etat = $Bdd->query($requete);
$_SESSION['erreur_login'] = "";

}
