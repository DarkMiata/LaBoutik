<?php

function log_connexion($value) {
  file_put_contents("log\connexion.log",
                    print_r($value."\n",true),
                    FILE_APPEND);
}
// ==================================

function alertJS ($text) {
  echo('<script type="text/javascript">'
    . ' alert("'
    . $text
    . '");'
    . ' </script>');
}
// ==================================

$email		= $_POST['email'];
$password	= $_POST['password'];

log_connexion("");
log_connexion ("=================");
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

if ($reponseBdd[0] != "0") {
  log_connexion("  compte existant OK");
}
else {
  log_connexion("compte non existant. exit connexion");
  alertJS("Le compte n'existe pas, veuillez vous inscrire.");
  header('Location: connexion.php');
  exit();
}

// SELECT mdp FROM client WHERE email=''

$reponseBdd = $Bdd->query(
    " SELECT mdp, id"
  . " FROM client"
  . " WHERE email='"
  . $email."';"
  )->fetch();

$mdpBdd = $reponseBdd[0];
$idClient = $reponseBdd[1];

log_connexion("  récupération du mdp dans la BDD: ".$mdpBdd);
log_connexion("  récupération id client: ".$idClient);
log_connexion("  comparaison mdp: ".$password." - ".$mdpBdd);

// mot de passe OK ?
if ($password != $mdpBdd) {
  log_connexion("mdp différents - exit connexion");
  alertJS("mot de passe incorrect");
  header('Location: connexion.php');
  exit();
}

log_connexion("  mdp OK");

// La session est stocké côté serveur uniquement.
 $_SESSION['id_client'] = $idClient;

