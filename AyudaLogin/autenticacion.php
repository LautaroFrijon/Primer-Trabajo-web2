<?php

class Autenticacion{

    public function __construct(){}

    public function login($user){
        //Inicio sesion y loggeo al usuario.
        session_start();
        $_SESSION["id_usuario"] = $user->id_usuario;
        $_SESSION["email"] = $user->email;
        $_SESSION['admin'] = $user->admin;

    }

    //redireccion cuando no es admin a home
    public function checkadmin(){
        header('Location: '. basehref .'noticias');
     die();
    }

    public function isAdmin(){
    //pregunta si la sesion esta habilitada y si existe
    if (session_status() != PHP_SESSION_ACTIVE)
    session_start();
    if (isset($_SESSION['admin'])) {
        return $_SESSION['admin']==1;
        return true;
    }else{
        return false;
    }
    }

    //obtiene el usern
    public function logout(){
        session_start();
        session_destroy();
    }

    public function checkLoggedIn(){
        session_start();
        if(!isset($_SESSION["id_usuario"])){
            header('Location: ' . login);
            die();
        }
    }

    public function getLoggedUserName() {
        if (session_status() != PHP_SESSION_ACTIVE)
            session_start();
            if (isset($_SESSION['ID_USER'])) {
            return    $_SESSION["USERNAME"];
    }else{
        return null;
    }
    }
}
