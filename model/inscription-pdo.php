<?php

include('home.php');

$name = $_POST['name'];
$mot_passe = $_POST['mot_passe'];

$query = $pdo->query("SELECT * FROM utilisateurs WHERE nom='$name'");

if(mysql_num_rows($query) > 0){
  echo "ce nom est existe déja!";
} else {
  $pdo->query("INSERT INTO utilisateurs (nom, motDePasse) VALUES ('$name','$mot_passe')");
  header('?page=connexion.php');
}

 ?>
