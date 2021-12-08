<?php

require "controller/HomeController.php";

$pagina = isset($_GET["pagina"]) ? $_GET["pagina"] : "index";

$ctrl = new HomeController();

switch($pagina) {
    
    case "index" : 
    $ctrl->Login();
    break;
    case "login" : 
    $ctrl->Login();
    break;
    case "painel" : 
    $ctrl->Painel();    
    break;
    case "listar" : 
    $ctrl->Listar();
    break;
    case "confirmar" : 
        $ctrl->Confirmar();
        break;
}
