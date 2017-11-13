
<?php
try{
	$pdo = new PDO('mysql:host=localhost;dbname=chatons;','root' , 'root');
}
catch(Exception $e){
	die("Connexion impossible, erreur : " .$e->getMessage());
}

?>
