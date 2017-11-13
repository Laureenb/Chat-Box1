<?php

include('home.php');

$utilisateur = $_POST['utilisateur'];
$motDePasse = $_POST['mdp'];

$login = $pdo->query("INSERT INTO utilisateur ('nom','motDePasse') VALUES ('$utilisateur','$motDePasse')");

 ?>
