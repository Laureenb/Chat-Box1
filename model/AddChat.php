<?php
  include ('../model/home.php');

  // $nom = 'test';
  // $message = $_POST['message'];
  // echo $message;
  //
  // $reponse = $pdo->prepare('INSERT INTO `chat-message`(`nom`, `message`) VALUES (:nom, :message)');
  // $reponse->bindParam(':nom', $nom);
  // $reponse->bindParam(':message', $message);
  // $reponse->execute();

  $reponse = $pdo->query('SELECT userid, message FROM chat-message ORDER BY ID DESC LIMIT 0, 10');


  while ($donnees = $reponse->fetch())
  {
	echo '<p><strong>' . htmlspecialchars($donnees['userid']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
  }

  $reponse->closeCursor();
?>
