<?php
  define('View', 'view/');
  define('Controller', 'controler/');
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Chat-Box</title>
    <link rel="stylesheet" href="./view/css/style.css">
    <link rel="stylesheet" href="./view/css/styles_chat.css">
</head>
  <body>
    <?php
      $page = isset($_GET['page']) ? htmlentities($_GET['page']) : 'default';
      switch ($page) {
        case 'connexion':
          include(Controller . 'connexionController.php');
          $controller = new connexionController();
          break;
        case 'chat':
          include(Controller . 'chatController.php');
          $controller = new chatController();
          break;
        // case 'contact':
        //   include(Controller . 'contactController.php');
        //   $controller = new contactController();
        //   break;
        case 'inscription':
          include(Controller . 'inscriptionController.php');
          $controller = new inscriptionController();
          break;
      }
      $controller->run();
    ?>
  </body>
</html>
