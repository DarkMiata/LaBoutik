<?php

$email		= $_POST['email'];
$password	= $_POST['password'];

$Bdd = new PDO("mysql:host=localhost;dbname=boutik", "root", "");

// controle du mot de passe

$reponseBdd = $Bdd->query(
    "SELECT COUNT(*)"
  . "FROM `client`"
  . "WHERE email='"
  . $email."';"
  )->fetch();

