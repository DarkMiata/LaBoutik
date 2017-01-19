<?php

/*
 * inputs:
 *		nomProduit
 *		descriptRapide
 *		description
 *		stock
 *		prix
 *		ref
 *		categorie
 * 
 * 
 * probleme rencontré:
 * entrés des textes avec caractères ne s enregistre pas correctement.
 */


// fonction qui permet d'écrire dans un fichier log (ajoutProduit_post.log)
// utilisé pour logger les requêtes
function log_ajoutProduit($value) {
  file_put_contents("log\ajoutProduit_post.log",
                    print_r($value."\n",true),
                    FILE_APPEND);
}

// =================================

var_dump($_POST);

$nomProduit     = $_POST['nomProduit'];
$descriptRapide	= $_POST['descriptRapide'];
$description    = $_POST['description'];
$stock          = $_POST['stock'];
$prix           = $_POST['prix'];
$ref            = $_POST['ref'];
$categorie      = $_POST['cat'];

$Bdd = new PDO("mysql:host=localhost;dbname=boutik", "root", "");

$requete =
" INSERT INTO produit"
. " (nom, descript_rap, descript, stock, prix, ref, cat_id)"
. " VALUES"
. " ('".$nomProduit.      "'"
. " ,'".$descriptRapide.  "'"
. " ,'".$description.  		"'"
. " , ".$stock.           ""
. " , ".$prix.            ""
. " ,'".$ref.             "'"
. " , ".$categorie.    		" );";


log_ajoutProduit("requete: ".$requete);
$etat = $Bdd->query($requete);
log_ajoutProduit("etat: ".get_object_vars($etat));

header('Location: ajoutProduit.php');
exit();