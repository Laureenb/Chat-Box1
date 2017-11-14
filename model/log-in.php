<?php

include('../model/home.php');

$utilisateur = $_POST['utilisateur'];
$password = $_POST['motDePasse'];

if(isset($_POST['utilisateur']) && isset($_POST['motDePasse'])){

	$query = $pdo->query("SELECT * FROM utilisateurs WHERE nom='$utilisateur' AND motDePasse='$password'");
	$user = $query->fetch();
	 if($query->rowCount() == 1){
		 	print_r($user);
			session_start();
			$_SESSION['user'] = $user;

		 	header('location:../?page=chat');
			echo'log';
	 } else {
			header('location:../?page=inscription');
	 }
} else {
	echo "test";;
}



 ?>
