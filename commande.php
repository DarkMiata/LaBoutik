<?php

/* 
 * Page de paiement et commandes
 */

include 'log/ChromePhp.php';
include 'include_php.php'
// ============================== 

function ajouter($id) {
	$Bdd = connectionBdd();
	$requete =
" INSERT INTO produit"
. " (nom, descript_rap, descript, stock, prix, ref, cat_id)"
. " VALUES"
. " ('".$nomProduit.      "'"
. " ,'".$descriptRapide.  "'"
. " ,'".$description.   "'"
. " , ".$stock.           ""
. " , ".$prix.            ""
. " ,'".$ref.             "'"
. " , ".$categorie.         " );";


log_ajoutProduit("requete: ".$requete);
$etat = $Bdd->query($requete);
}

// ============================== 
// ============================== 

ChromePhp::log('Console');

$ajouter_is = isset($_GET['ajouter']);
$id_is		= isset($_GET['id']);

if ($ajouter_is && $id_is) {
	$id 	= $_GET['id'];
	ChromePhp::log('id: '.$id);
//	ajouter($id);
}

ChromePhp::warn('something went wrong!');
