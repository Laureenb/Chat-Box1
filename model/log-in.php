<?php

include('../model/home.php');

$utilisateur = $_POST['utilisateur'];
$password = $_POST['motDePasse'];

if(isset($_POST['utilisateur']),isset($_POST['motDePasse'])){
	$query = $pdo->query("SELECT nom , motDePasse FROM utilisateurs WHERE nom='$utilisateur' AND motDePasse='$password'");
	 if($query->rowCount() = 1){
		 echo 'Vous etes mtn log!';
	 } else {
		 header('../view/inscription.php');
	 }
}


 ?>
