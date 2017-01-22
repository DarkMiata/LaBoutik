<?php
include 'log/ChromePhp.php';

CONST DBNAME        = "boutik";
CONST DBHOST        = "localhost";
CONST DBUSER        = "root";
CONST DBPASSWORD    = "";

// ============================== 
// ============================== 

/**
 * [connexionBdd connexion à la base de donnée]
 * @return [objet] [connexion base]
 */
function connexionBdd() {
    $Bdd = new PDO (
        'mysql:host='.DBHOST.';dbname='.DBNAME
        ,DBUSER, DBPASSWORD );
    return $Bdd;
}
// ============================== 

/**
 * [msg_erreur renvoi le text d'erreur]
 * @return [] []
 */
function msg_erreur() {
    if (isset($_GET['mes']) == FALSE) { return; }

    $msg = $_GET['mes'];

    switch ($msg) {
        case 'mdpNonConfirme':
            echo "Les deux mots de passe ne sont pas identique";
            break;

        case 'compteDejaExistant':
            echo "Le compte est déjà existant";
            break;

        case 'compteNonExistant':
            echo "Le compte n'existe pas, veuillez vous inscrire";
            break;

        case 'mdpIncorrect':
            echo "Le mot de passe n'est pas correct";
            break;

        default:
            echo "erreur interne: msg erreur non défini";
            break;
    }
}
// ============================== 

/**
 * [deconnexion_session description]
 * @return [type] [description]
 */
function deconnexion_session() {
    $_SESSION = array();
    session_destroy();
}
// ============================== 

/**
 * [msg_bienvenu_navbar affichage d'un message de salut dans la navbar
 * Ex: 'Bonjour Samuel']
 * @return [type] [description]
 */
function msg_bienvenu_navbar() {
    ChromePhp::log('_SESSION:');
    ChromePhp::log($_SESSION);

    // Session du client ouvert:
    if (isset($_SESSION['id_client'])) {
        $idClient = $_SESSION['id_client'];

        $Bdd = connexionBdd();

        $sql = $Bdd->query(
            " SELECT prenom"
          . " FROM client"
          . " WHERE id='".$idClient."';"
          )->fetch();

        echo "Bonjour ".$sql['prenom'];

    ?>
        <li class="upper-links" id="info-navbar">
            <a href="deconnexion.php" class="btn btn-xs btn-default">
            <span class="glyphicon glyphicon-log-out"></span> deconnexion</a>
        </li>
    <?php
    } 
    // session client non ouverte, alors affichage bouton 'inscription',
    // 'connexion'
    else {
        ?>
            <li class="upper-links" id="info-navbar">
                <a href="inscription.php" class="btn btn-xs btn-default">
                <span class="glyphicon glyphicon-log-out">
                </span> inscription</a>
            </li>
            <li class="upper-links" id="info-navbar">
                <a href="connexion.php" class="btn btn-xs btn-default">
                <span class="glyphicon glyphicon-log-out">
                </span> connexion</a>
            </li>
        <?php
    }
}
// ============================== 

/**
 * [panier_navbar description]
 * @return [type] [description]
 */
function panier_navbar() {

}