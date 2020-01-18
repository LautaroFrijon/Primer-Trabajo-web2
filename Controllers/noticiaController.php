<?php

require_once('Models/noticiaModel.php');
require_once('Views/noticiaView.php');
require_once('AyudaLogin/autenticacion.php');
require_once('Models/equiposModel.php');

class NoticiasController{

    private $view;
    private $model;
    private $modelE;
    private $autenticador;

    public function __construct(){
        $this->view = new NoticiaView();
        $this->model = new NoticiaModel();
        $this->modelE = new EquiposModel();
        $this->autenticador = new Autenticacion();
    }

    public function obtenerNoticias(){
        session_start();
        $noticias = $this->model->obtenerNombreEquipo();

        $this->view->mostrarNoticias($noticias);
    }

    public function obtenerNoticia($params = null) {
        
        $idNoticia = $params[':ID'];
        $noticia = $this->model->getNoticia($idNoticia);

        if ($noticia){ // si existe la noticia
            session_start();
            $this->view->mostrarNoticia($noticia);
        }else
            $this->view->mostrarError('La noticia no existe');
    }

    public function agregarNoticia(){
        
        $autenticador = new Autenticacion();
        $autenticador->checkLoggedIn();
        session_start();
        // agarra el file
        if ($_FILES['imagen']['name']) {
            if ($_FILES['imagen']['type'] == "image/jpeg" || $_FILES['imagen']['type'] == "image/jpg" || $_FILES['imagen']['type'] == "image/png") { 
                $this->model->guardar($_POST['titulo'], $_POST['fecha'], $_POST['contenido'], $_POST['equipo'], $_FILES['imagen']);
            }else {
                $this->view->mostrarError("Formato no aceptado");
            }
        }else {
            $this->model->guardarSinImagen($_POST['titulo'], $_POST['fecha'], $_POST['contenido'], $_POST['equipo']);  
        }
        header("Location: " . basehref);
    }

    public function eliminarNoticia($params = null) {
        
        $autenticador = new Autenticacion();
        $autenticador->checkLoggedIn();
        $admin = $this->autenticador->isAdmin();
        
        if($admin==1){
            $idNoticia = $params[':ID'];
            $this->model->borrar($idNoticia);
            header("Location: " . basehref);
        }else{
            $this->view->mostrarError('No eres administrador');
        }
    }

    public function eliminarImagen($param = null){
        $$idNoticia = $params[':ID'];
        $this->model->borrarImagen($idNoticia);
        header("Location: " . basehref);
    }

    public function showForm(){
        session_start();
        $noticias = $this->modelE->getEquipos();
        $admin = $this->autenticador->isAdmin();
        if($admin==1){
            $this->view->showFormAgregar($noticias);;
        } else{
            $this->view->mostrarError('No eres administrador');
        }
    }

    public function editarNoticia($params = null){
        $this->autenticador->checkLoggedIn();

        $idNoticia = $params[':ID'];
        $titulo = $_POST['titulo'];
        $fecha = $_POST['fecha'];
        $contenido = $_POST['contenido'];
        $idEquipo = $_POST['equipo'];
        $imagen = $_POST['imagen'];

        if (!empty($titulo)&& !empty($contenido)) {
        $this->model->editarNoticia($idNoticia, $titulo, $fecha, $contenido, $idEquipo, $imagen);
            header("Location: " . basehref . "noticia");
        } else {
            $this->view->mostrarError("Los campos titulo y contenido tienen que estar llenos");
        }
    }

    public function showFormEditar($params = null){
        $admin = $this->autenticador->isAdmin();

        if($admin==1){
            $idNoticia = $params[':ID'];
            $noticia = $this->model->getNoticia($idNoticia);
            $noticias = $this->modelE->getEquipos();
            $this->view->showFormEditar($noticia, $noticias); 
        } else {
            $this->view->mostrarError('No eres administrador');
        }
    }
      
}  
