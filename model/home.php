
<?php
try{
	$pdo = new PDO('mysql:host=localhost;dbname=chatons;','root' , 'root');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e){
	die("Connexion impossible, erreur : " .$e->getMessage());
}

?>
