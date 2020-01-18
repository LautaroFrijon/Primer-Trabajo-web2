<?php

require_once("Models/loginModel.php");
require_once("Views/loginView.php");
require_once("AyudaLogin/autenticacion.php");

class LoginController{

    private $view;
    private $model;
    private $autenticador;

    public function __construct() {
        $this->view = new LoginView();
        $this->model = new UsuarioModel();
        $this->autenticador = new Autenticacion();
    }

    public function showLogin() {
        $this->view->showLogin();
    }

    public function verificarUsuario(){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $usuario = $this->model->getByUsername($email);

        // encontró un usuario con el email que mandó, y tiene la misma contraseña
        if (!empty($usuario) && password_verify($password, $usuario->password)) {
            $this->autenticador->login($usuario);
            header('Location: '. basehref);
        } 
        else {
            $this->view->showLogin("Login incorrecto");
        }
    }

    public function logout() {
        $this->autenticador->logout();
        header('Location: ' . LOGIN);
    }

public function getUsuarios(){
    if($this->autenticador->isAdmin()){
         $usuarios = $this->model->getusuarios();
         $this->view->showUsuarios($usuarios);
     }else{
        //$this->autenticador->checkadmin();
        $this->view->mostrarError('No eres administrador');
     }
    }

        public function AsignarAdmin($params = null){
        $id = $params[':ID'];
        $this->model->AsignarAdmin($id);
        header("Location: " . basehref . mostrarAdministradores);
        }
 
        public function sacarAdmin($params = null){
            $id = $params[':ID'];
            $this->model->sacarAdmin($id);
            header("Location: " . basehref . mostrarAdministradores);
        }

    public function NuevoUsuario(){
        
        $email = $_POST['email'];
        $contraseña = $_POST['contraseña'];
        
        if (!empty($email)  && !empty($contraseña)) {
            $hash = password_hash($contraseña, PASSWORD_DEFAULT);
            $this->model->guardarUsuario($email, $hash);
            $usuario = $this->model->getByUsername($email);
            $this->autenticador->login($usuario);
            header("Location: " . basehref . noticias);
            die();
        }
        else {
            $this->view->mostrarError("Faltan datos obligatorios");
        }
    }
	
    public function showRegistro() {
        $this->view->showRegistro();
    }

    public function eliminarUsuario($params = null){
        $idUsuario = $params[':ID'];
        $this->model->borrar($idUsuario);
        header("Location: " . basehref . mostrarAdministradores);
    }

}