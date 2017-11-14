<?php

include('../model/home.php');

$name = $_POST['nom'];
$mot_passe = $_POST['motDePasse'];

$query = $pdo->query("SELECT * FROM utilisateurs WHERE nom='$name'");

if($query->rowCount() > 0){
  echo "ce nom existe déja!";
} else {
  $pdo->query("INSERT INTO utilisateurs (nom, motDePasse) VALUES ('$name','$mot_passe')");
  // header('location:./view/master.php');
}

 ?>
