



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
