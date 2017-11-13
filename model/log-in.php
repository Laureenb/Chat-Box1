<?php
	if(!empty($_POST['utilisateur'])&& !empty($_POST['mdp']))
	{
		$utilisateur=$_POST['utilisateur'];
		$mdp=$_POST['mdp'];
		$mdp=md5($mdp);

		$requete="SELECT nom, motDePasse FROM chatons WHERE nom = :utilisateur AND motDePasse = :mdp";
		$pdo->query("INSERT INTO utilisateur ('nom','motDePasse') VALUES ('$utilisateur','$motDePasse')");
		include('home.php');
		$connexion=connex();
		$connex=$connexion->prepare($requete);
		$connex->execute(array('utilisateur' => $utilisateur, 'mdp' => $mdp));
		if($connex)
			$ligne=$connex->fetch(PDO::FETCH_ASSOC);
			$connex=closeCursor();
			if($ligne){
				$page = $ligne['page'];
				header("location:".$page.".php");
			}
			else
				if(!isset($ligne['utilisateur']) || !isset($ligne["mdp"]) || empty($ligne['utilisateur']) || empty($ligne['mdp']))
				{
					echo" Erreur nom utilisateur ou mot de passe";
				}
	}
	else
		header("location:index.php");

?>




<<<<<<< HEAD
$utilisateur = $_POST['utilisateur'];
$motDePasse = $_POST['motDePasse'];
=======
>>>>>>> fabc27a3df383c05827168a2797184cae94a1306



