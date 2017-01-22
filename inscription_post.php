<?php
include 'log/ChromePhp.php';
include 'include_php.php';

/*  inscription du nouveau membre dans la base de donnée
 * 
 * a ajouter:
 *  filter_input sur les _POST
*/

/**
 * [phpAlert description]
 * @param  [type] $msg [description]
 * @return [type]      [description]
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

/* Vérification des deux mots de passe */
if ($mdp <> $confirm) {
  header('Location: inscription.php?mes=mdpNonConfirme');
  exit();
}

$Bdd = connexionBdd();

// Email du nouveau inscript déjà présent dans la base de données ?
$req = 
   " SELECT COUNT(*)"
  ." FROM client"
  ." WHERE email='"
  .$email."';";

$sql = $Bdd->query($req)->fetch();

var_dump($sql);

if ($sql[0] <> '0') {
  header('Location: inscription.php?mes=compteDejaExistant');
  exit();
}

// Inscription prête à être inscrite à la BDD
$req =
 " INSERT INTO client"
." (nom, prenom, adresse, email, mdp)"
." VALUES"
." ('".$nom.      "'"
." ,'".$prenom.   "'"
." ,'".$adresse.  "'"
." ,'".$email.    "'"
." ,'".$mdp.      "');";

$sql = $Bdd->query($req);

