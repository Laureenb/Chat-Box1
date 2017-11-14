<?php
include('../model/home.php');

$utilisateur = $_POST['utilisateur'];
$password = $_POST['motDePasse'];

if(isset($_POST['utilisateur']) && isset($_POST['motDePasse'])){
	$query = $pdo->query("SELECT nom , motDePasse FROM utilisateurs WHERE nom='$utilisateur' AND motDePasse='$password'");
	 if($query->rowCount() == 1){
		 	header('?page=master');
			echo'log';
	 } else {
		  echo '<a href="../../Chat-Box1/view/inscription.php"><button>inscris-toi</button></a>';
			// header('location: ./view/inscription.php');
	 }
} else {
	echo "test";;
}
?>

