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
 */

$nomProduit		= $_POST['nomProduit'];
$descriptRapide	= $_POST['descriptRapide'];
$description	= $_POST['description'];
$stock			= $_POST['stock'];
$prix			= $_POST['prix'];
$ref			= $_POST['ref'];
$categorie		= $_POST['cat'];

$Bdd = new PDO("mysql:host=localhost;dbname=boutik", "root", "");

$requete =
" INSERT INTO produit"
. " (nom, descript_rap, descript, stock, prix, ref, cat_id)"
. " VALUES"
. " ('".$nomProduit.      	"'"
. " ,'".$descriptRapide. 	"'"
. " ,'".$description.  		"'"
. " ,'".$stock.    			"'"
. " ,'".$prix.      		"'"
. " ,'".$ref.      			"'"
. " ,'".$categorie.    		"');";

var_dump($requete);

$etat = $Bdd->query($requete);