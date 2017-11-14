<?php
		include('home.php');
		
		if(!empty($_POST['utilisateurs'])&& !empty($_POST['motDePasse']))
		{
			$utilisateurs=$_POST['utilisateurs'];
			$mdp=$_POST['motDePasse'];
			$mdp=md5($mdp);
			$query= $pdo->query("SELECT nom, motDePasse FROM chatons WHERE nom = :utilisateurs AND motDePasse = :mdp");		
			if('utilisateurs' => $utilisateurs, 'motDePasse' => $mdp){
				$ligne=$query->fetch(PDO::FETCH_ASSOC);
				$query=closeCursor();
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
}
?>