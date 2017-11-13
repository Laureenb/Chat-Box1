
<<<<<<< HEAD
<?php
=======
$pdo = new PDO('mysql:host=10.20.0.128;dbname=chatons;','Thomas' , 'root');


var_dump($pdo);
>>>>>>> 41efd549149215e501f8ed20b3ad99bfb43cbf32

function connex(){
try{
	$pdo = new PDO('mysql:host=localhost;dbname=chatons;','root' , 'root');
}	
catch(Exception $e){
	die("Connexion impossible, erreur : " .$e->getMessage());
}
}

?>
