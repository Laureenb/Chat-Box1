
<?php

try{
	$pdo = new PDO('mysql:host=10.20.0.134;dbname=chatons;','Delphine' , 'root');
}
catch(Exception $e){
	die("Connexion impossible, erreur : " .$e->getMessage());
}
