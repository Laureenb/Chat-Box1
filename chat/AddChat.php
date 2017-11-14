<?php
  include 'dbconnect.php';

  $nom = 'test';
  $message = $_POST['message'];
  echo $message;

  $reponse = $pdo->prepare('INSERT INTO `chat-message`(`nom`, `message`) VALUES (:nom, :message)');
  $reponse->bindParam(':nom', $nom);
  $reponse->bindParam(':message', $message);
  $reponse->execute();
?>
