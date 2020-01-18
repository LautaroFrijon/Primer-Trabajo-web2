<?php
require_once('Models/comentariosModel.php');
require_once('api/JSONView.php');
require_once('api/comentariosApiController.php');

abstract class apiController{
    protected $model;
    protected $view;
    private $data;

    public function __construct(){
        $this->model = new comentariosModel();
        $this->view = new JSONView();
        //Lee todo el archivo en una cadena
        $this->data = file_get_contents("php://input");
    }

     //decodifica una cadena json(json_decode)
    function getData(){
        return json_decode($this->data); 
    }
}