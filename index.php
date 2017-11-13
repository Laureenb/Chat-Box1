<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ChatBox</title>
  </head>
  <body>
    <?php
    require  "./controler/router.php";
    require './controler/autoloader.php';
      App\Autoloader::register();

      if(isset($_GET['p'])){
        $p = $_GET['p'];
      }else{
        $p = 'home';
      }



    ob_start();




      if($p === 'home'){
        require './model/home.php';
      }elseif ($p === 'connexion') {
        require './view/connexion.php';
      }


    $content = ob_get_clean();
    require './view/master.php';




     ?>
    <div class='titre1'>
    <h1>Chatbox</h1>
    </div>
    <div class='titre2'>
      <h1>LogOut</h1>
    </div>
    <div class='Pseudo'>
      <h2>Pseudo</h2>
    </div>
    <div class='Msg'>
      <h2>Message</h2>
    </div>

  </body>
</html>
