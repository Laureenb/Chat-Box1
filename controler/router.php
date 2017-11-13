<?php
$post ="";
if (isset($_POST["page"])) {
    $post = addslashes($_POST["page"]);
}
// $get = explode("/", $_SERVER["REQUEST_URI"]);
$page = $post != "" ? $post : "presentation";
$view = "./views/" . $page . ".php";
$content = "";

switch ($page) {
    case 'log-in': $content="./model/log-in.php"; break;
    case 'inscription': $content="./model/inscription.php"; break;
    default: $content="./views/error404.php"; break;
}

/*if (file_exists($view)) {
    $content = $view;
} else {
    $content = "./views/error404.php";
}*/

include "./view/master.php";
?>
