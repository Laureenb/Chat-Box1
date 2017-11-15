<?php
  include ('../model/home.php');

  // $nom = 'test';
  $message = $_POST['message'];
  session_start();
  $reponse = $pdo->prepare('INSERT INTO chatMessage (userid,message) VALUES (:userid,:message)');
  $reponse->bindParam(':message', $message);
  $reponse->bindParam(':userid', $_SESSION['user']['ID']);
  $reponse->execute();

  $msg = $pdo->query("SELECT * FROM chatMessage ORDER BY id DESC");
  $sessionMsg = $msg->fetch();
  while($donnees = $msg->fetch())
  {
    echo $donnees['userid'];
    echo '<br/>';
    echo $donnees['message'];
    echo '<br/>';
  }
  $_SESSION['message'] = $message;




?>
