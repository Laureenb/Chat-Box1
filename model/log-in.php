<?php

		// include('home.php');
		// $req = $pdo->prepare("INSERT INTO utilisateurs (nom,motDePasse) VALUES (?,?)");
		// $req->execute(['nom','mdp']);



		if(!empty($_POST['utilisateurs'])&& !empty($_POST['motDePasse']))
		{
			$utilisateurs=$_POST['utilisateurs'];
			$mdp=$_POST['motDePasse'];
			$mdp=md5($mdp);
			$requete="SELECT nom, motDePasse FROM chatons WHERE nom = :utilisateurs AND motDePasse = :mdp";
			$pdo->query("INSERT INTO utilisateurs ('nom','motDePasse') VALUES ('$utilisateurs','$motDePasse')");
			include('home.php');
			$connexion=connex();
			$connex=$connexion->prepare($requete);
			$connex->execute(array('utilisateurs' => $utilisateurs, 'motDePasse' => $mdp));
			if($connex)
				$ligne=$connex->fetch(PDO::FETCH_ASSOC);
				$connex=closeCursor();
				if($ligne){
					$page = $ligne['page'];
					header("location:".$page.".php");
				}
				else
					if(!isset($ligne['utilisateurs']) || !isset($ligne["motDePasse"]) || empty($ligne['utilisateurs']) || empty($ligne['motDePasse']))
					{
						echo" Erreur nom utilisateur ou mot de passe";
					}
		}
		else{
			

		var_dump($_POST);
}
?>
