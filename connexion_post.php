<?php

session_start();

/**
 * [log_connexion écrit un text dans le fichier de log connexion.log]
 * @param  [type] $value [texte à écrire]
 * @return [type]        []
 */
function log_connexion($value) {
  file_put_contents("log\connexion.log",
                    print_r($value."\n",true),
                    FILE_APPEND);
}
// ==================================

/**
 * [alertJS ouvre une fenêtre d'alerte javascript]
 * @param  [type] $text [texte à écrire]
 * @return [type]       []
 */
function alertJS ($text) {
  echo('<script type="text/javascript">'
    . ' alert("'
    . $text
    . '");'
    . ' </script>');
}
// ==================================

$email    = $_POST['email'];
$password = $_POST['password'];

$email_is    = isset($_POST['email']);
$password_is = isset($_POST['password']);

//if ($email_is && $password_is)

log_connexion(
   "\n"
  ."=================\n"
  ."tentative de nouvelle connexion:\n"
  ."  ".date("d/m/Y - h:i:sa")."\n"
  ."  email: ".$email."\n"
  ."  mdp:   ".$password."\n"
  );

$Bdd = new PDO("mysql:host=localhost;dbname=boutik;charset=utf8", "root", "");

// controle du mot de passe

// ============================== 

$countEmail = $sql['COUNT(*)'];

log_connexion("  demande à la base si compte existant");

if ($countEmail != "0") {
  log_connexion("  compte existant OK");
}
else {
  log_connexion("compte non existant. exit connexion");
//  alertJS("Le compte n'existe pas, veuillez vous inscrire.");
  header('Location: connexion.php?mes=compteNonExistant');
  exit();
}

$sql = $Bdd->query(
    " SELECT mdp, id"
  . " FROM client"
  . " WHERE email='"
  . $email."';"
  )->fetch();

$mdpBdd   = $sql['mdp'];
$idClient = $sql['id'];

log_connexion(
   "  récupération du mdp dans la BDD: ".$mdpBdd
  ."  récupération id client: ".$idClient
  ."  comparaison mdp: ".$password." - ".$mdpBdd
  );

// mot de passe OK ?
if ($password != $mdpBdd) {
  log_connexion("mdp différents - exit connexion");
//  alertJS("mot de passe incorrect");
  header('Location: connexion.php?mes=mdpIncorrect');
  exit();
}

log_connexion("  mdp OK");

// La session est stocké côté serveur uniquement.
 $_SESSION['id_client'] = $idClient;

 header('Location: main.php');


