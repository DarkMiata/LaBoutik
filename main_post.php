<?php

// session_start();

/* partie que va généré les pages d'affichages 
 * 
 * 
 * 
 * 
 */

// !!!!!!!! include temporaire pour test CSS - à retirer !!!
//include('inc/header.inc.php');

$Bdd = new PDO("mysql:host=localhost;dbname=boutik", "root", "");

//SELECT nom, descript, descript_rap, prix, stock
//FROM produit
//LIMIT 0,3

// Selection des 3 premiers produits
$sql =
    " SELECT id, nom, descript, descript_rap, prix, stock"
  . " FROM produit"
  . " LIMIT 0,3";

foreach ($Bdd->query($sql) as $row) {
  $id               = $row['id'];
  $nomProd          = $row['nom'];
  $descriptProd     = $row['descript'];
  $descriptRapProd  = $row['descript_rap'];
  $prixProd         = $row['prix'];
  $stockProd        = $row['stock'];
  
  echo
    "<div class='produit'>"
  . " <div class='nomProd'><p>".$nomProd."</p></div>"
  . " <div class='descriptRapProd'><p>".$descriptRapProd."</p></div>"
  . " <div class='descriptProd'><p>Descriptif détaillé: ".$descriptProd."</p></div>"
  . " <div class='prixProd'><p>Prix: ".$prixProd." € ttc</p></div>"
  . " <div class ='stockProd'>"
    ;
  
  if (intval($stockProd) > 0) {
    echo "<p class='stock_enStock'>En stock (reste ".$stockProd.")</p></div>";
    // bouton ajouter au panier
    echo '<a href="commande.php?ajouter&id='.$id.'"'
        .'class="btn btn-xs btn-success">'
        .'<span class="glyphicon glyphicon-shopping-cart">'
        .'</span> ajouter au panier</a>'
    ;
  } else {
    echo "<p class='stock_epuise'>Stock épuisé</p></div>";
  }

  echo "<hr/>"
      ."</div>";
}


/*
 * bouton 'ajouter au paner' récupéré sur materiel.net
 * 
 * <a href="#" id="ProdBtnBuy"
 * onclick="ChangeAmount('137252', +1); return false;"
 * title="Ajouter &quot;Asus STRIX Z270F GAMING&quot; au panier">
            <i class="fa fa-shopping-cart"></i> Ajouter au panier
        </a>
 */

