<?php session_start();

/* partie que va généré les pages d'affichages 
 */

$conn = new PDO("mysql:host=localhost;dbname=boutik", "root", "");

//SELECT nom, descript, descript_rap, prix, stock
//FROM produit
//LIMIT 0,3

// Selection des 3 premiers produits
$sql =
    " SELECT nom, descript, descript_rap, prix, stock"
  . " FROM produit"
  . " LIMIT 0,3";

foreach ($conn->query($sql) as $row) {
  $nomProd          = $row['nom'];
  $descriptProd     = $row['descript'];
  $descript_rapProd = $row['descript_rap'];
  $prixProd         = $row['prix'];
  $stockProd        = $row['stock'];
  
//  echo
//    $nomProd." ".
//    $descriptProd." ".
//    $descript_rapProd." ".
//    $prixProd." ".
//    $stockProd." ";
  
  
}

