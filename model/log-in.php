<?php

include('home.php');

$utilisateur = $_POST['utilisateur'];
$motDePasse = $_POST['mdp'];

$pdo->query("INSERT INTO utilisateur ('nom','motDePasse') VALUES ('$utilisateur','$motDePasse')");


 ?>
