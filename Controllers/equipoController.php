<?php
require_once('Models/equiposModel.php');
require_once('Views/equiposView.php');
include_once('AyudaLogin/autenticacion.php');

class EquiposController {

    private $model;
    private $view;
    private $autenticador;

    public function __construct() {
        $this->model = new EquiposModel();
        $this->view = new EquipoView();
        $this->autenticador = new Autenticacion();
    }

    /**
     * Muestra la lista de tareas.
     */
    public function obtenerEquipos() {
        session_start();
        // obtengo Equipos del model
        $equipos = $this->model->getEquipos();

        // se las paso a la vista
        $this->view->showEquipos($equipos);
    }

public function obtenerEquipo($params = null){
    $idEquipo = $params[':ID'];
    $equipo = $this->model->get($idEquipo);

    if ($equipo) // si existe la tarea
        $this->view->mostrarEquipo($equipo);
    else
        $this->view->mostrarError('El equipo no existe');
}

    public function showEquipos(){
        $this->view->showEquipos();
    }

    public function agregarEquipo() {
        $autenticador->checkLoggedIn();
        

        $nombre = $_POST['nombre'];
        $titulos = $_POST['titulos'];
        $descripcion = $_POST['descripcion'];
   
        if (!empty($nombre)  && !empty($titulos) && !empty($descripcion)) {
            $this->model->guardar($nombre, $titulos, $descripcion);
            header("Location: " . equipos);
            die();
        }
        else {
            $this->view->mostrarError("Faltan datos obligatorios");
        }
    }
    
    public function showForm(){
        session_start();
        $admin = $this->autenticador->isAdmin();
        if($admin==1){
        $this->view->showFormEquipo();
        } else{
            $this->view->mostrarError('No eres administrador');
        }
    }
    
    public function eliminarEquipo($params = null) {
        $autenticador = new Autenticacion();
        $autenticador->checkLoggedIn();
        $admin = $this->autenticador->isAdmin();

        if($admin==1){
        $idEquipo = $params[':ID'];
        $this->model->eliminar($idEquipo); 
        header("Location: " . basehref . equipos);
        die();       
        }else{
            $this->view->mostrarError('No eres administrador');
        }
    }

    public function editarEquipo(){
        $autenticador = new Autenticacion();
        $autenticador->checkLoggedIn();

        if(isset($_POST['nombre']) && (isset($_POST['titulos'])) && (isset($_POST['descripcion'])) && (isset($_POST['id_equipo']))){
            $nombre = $_POST['nombre'];
            $titulos = $_POST['titulos'];
            $descripcion = $_POST['descripcion'];
            $id_equipo = $_POST['id_equipo'];
            $this->model->editarEquipo($nombre, $titulos, $descripcion, $id_equipo);
            header("Location: " . basehref . equipos);
        }
        else {
            $this->view->mostrarError("Faltan datos obligatorios");
        }
    }

    public function showFormEditar($params = null){
        $admin = $this->autenticador->isAdmin();

        if($admin==1){
        $idEquipo = $params[':ID'];
        $equipo = $this->model->get($idEquipo);
        $this->view->showFormEditarEquipo($equipo);
        }else {
        $this->view->mostrarError("No eres administrador");
    }
    }
}
    
