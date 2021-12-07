<?php

require "controller/HomeController.php";

$pagina = isset($_GET["pagina"]) ? $_GET["pagina"] : "index";

$ctrl = new HomeController();

switch($pagina) {
    case "index" : 
    $ctrl->Index();
    break;
    case "login" : 
    $ctrl->Login();
    break;
    case "painel" : 
    $ctrl->Painel();
    break;
}
