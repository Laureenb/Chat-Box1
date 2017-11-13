<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  <link rel="stylesheet" href="styles_chat.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <title>ChatBox</title>
  </head>
  <?php
  require  "./controler/router.php";


   ?>
  <body>
    <div class='titre1'>
    <h1>Chatbox</h1>
    </div>
    <div ID='Formulaire'>
      <form action="" method="post">
      <div>
          <label for="nom">User :</label>
          <input type="text" id="nom" />
      </div>
      <div>
          <label for="message">Message :</label>
          <textarea id="message"></textarea>
      </div>
      <div class="button">
        <button type="submit">Send</button>
    </div>
  </form>
  <div class='affichage'>
  </div>

<div class='LogOut'>
<button type="submit">LogOut</button>
</div>
  </div>


  </body>
</html>
