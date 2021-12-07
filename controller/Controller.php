<?php 

require "model/Model.php";
require "view/View.php";

class Controller
{

public function Index(){
$model = new Model();
$view = new View();

$view->Exibir($model->ListarDados());
}
}