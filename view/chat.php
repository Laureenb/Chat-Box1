<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  <link rel="stylesheet" href="./view/css/styles_chat.css">

    <title>ChatBox</title>
  </head>

  <body>
    <div class='titre1'>
  <h1>Chatbox</h1>
    </div>
  <div class='affichage'>
    <?php
      require_once './model/home.php';
      $msg = $pdo->query("SELECT * FROM chatMessage ORDER BY id DESC");
      while($donnees = $msg->fetch())
      {
        echo "<strong>";
        echo '<div class="userid">'.$donnees['userid'].'</div>';
        echo ":</strong>";
        echo '<div class="message">'.$donnees['message'].'</div>';
      }
     ?>
  </div>
  <div ID='Formulaire'>
      <form action="./model/AddChat.php" method="post">
        <div>
            <label for="message">Message :</label>
            <textarea id="message" name="message"></textarea>
        </div>
        <div class="button">
          <button type="submit">Send</button>
      </div>

  </form>

  <div class='LogOut'>
    <button type="submit">LogOut</button>
  </div>
  </div>
  </body>
</html>
