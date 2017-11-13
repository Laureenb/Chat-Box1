<?php

include('home.php');

$utilisateur = $_POST['utilisateur'];
$motDePasse = $_POST['motDePasse'];

$pdo->query("INSERT INTO utilisateur ('nom','motDePasse') VALUES ('$utilisateur','$motDePasse')");


 ?>
