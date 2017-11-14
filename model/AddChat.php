<?php
  include ('../model/home.php');

  $nom = 'bertrand';
  $message = 'bonjour';

  $reponse = $pdo->prepare('INSERT INTO `chat-message`(`nom`, `message`) VALUES (:nom, :message)');
  $reponse->bindParam(':nom', $nom);
  $reponse->bindParam(':message', $message);
  $reponse->execute();
?>
