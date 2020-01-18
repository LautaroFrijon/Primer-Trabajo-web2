<?php
require_once('Models/comentariosModel.php');
require_once('api/JSONView.php');
require_once('api/apiController.php');

class comentariosApiController extends apiController {

    protected $model;
    protected $view;
    
    public function __construct(){
        $this->model = new comentariosModel();
        $this->view = new JSONView();
    }

    public function obtenerComentarios(){
        $comentarios = $this->model->obtenerComentarios();
        
        $this->view->response($comentarios, 200);
    }

    public function obtenerComentario($params = null){
        $id = $params[':ID'];
        var_dump($id);
        $comentario = $this->model->obtenerComentario($id);

        if($comentario){
            $this->view->response($comentario, 200);
        }
        else{
            $this->view->response("No existe la tarea con el id={$id}", 404);
        }
    }

    public function eliminar($params = []) {
        $idComentario = $params[':ID'];
        $comentario = $this->model->obtenerComentario($idComentario);

        if ($comentario) {
            $this->model->Borrar($idComentario);
            $this->view->response("Comentario id=$idComentario eliminado con éxito", 200);
        }
        else {
            $this->view->response("Comentario id=$idComentario not found", 404);
        }
    }

    public function agregarComentario($params = []) {     
        $comentario = $this->getData(); // la obtengo del body

        // inserta el comentario
        $idComentario = $this->model->guardar($comentario->contenido, $comentario->puntuacion, $comentario->usuario, 0);

        // obtengo el comentario recien creado
        $nuevoComentario = $this->model->obtenerComentario($idComentario);
        
        if ($nuevoComentario)
            $this->view->response($nuevoComentario, 200);
        else
            $this->view->response("Error al insertar comentario", 500);
    }

    public function editarComentario(){
        $body = $this->getData();
        $comentario = $this->getData(); // lo obtengo del body

        // inserta el comentario
        $usuario = $body->usuario;
        $contenido = $body->contenido;
        $puntuacion = $body->puntuacion;
        $comentario = $this->model->guardar($usuario,$contenido,$puntuacion,0);
        $idComentario = $this->model->guardar($comentario->usuario, $comentario->contenido,$comentario->puntuacion);

        // obtengo el comentario recien creado
        $comentarioNuevo = $this->model->obtenerComentario($idComentario);
        
        if ($comentarioNuevo)
            $this->view->response($comentarioNuevo, 200);
        else
            $this->view->response("Error al insertar tarea", 500);
    }    

}
