<?php
    require_once('Controllers/equipoController.php');
    require_once('Controllers/noticiaController.php');
    require_once('Controllers/loginController.php');
    require_once('router.php');
 
    
    // CONSTANTES PARA RUTEO
    define("basehref", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("LOGIN", basehref . 'login');
    
   //define("VER", basehref . 'ver');

    $r = new Router();

    // rutas
    $r->addRoute("equipos", "GET", "EquiposController", "obtenerEquipos");
    $r->addRoute("noticias", "GET", "NoticiasController", "obtenerNoticias");

    $r->addRoute("equipo/:ID", "GET", "EquiposController", "obtenerEquipo");
    $r->addRoute("noticias/:ID", "GET", "NoticiasController", "obtenerNoticia");
    $r->addRoute("eliminarImagen", "GET", "NoticiasController", "eliminarImagen");

    $r->addRoute("eliminar/:ID", "GET", "NoticiasController", "eliminarNoticia");
    $r->addRoute("eliminarEquipo/:ID", "GET", "EquiposController", "eliminarEquipo");
    
    //$r->addRoute("equipos", "GET", "EquiposController", "ShowEquipos");

    $r->addRoute("editarEquipo/:ID", "GET", "EquiposController", "showFormEditar");
    $r->addRoute("editarEquipo/:ID", "POST", "EquiposController", "editarEquipo");

    $r->addRoute("editar/:ID", "GET", "NoticiasController", "showFormEditar");
    $r->addRoute("editarNoticia/:ID", "POST", "NoticiasController", "editarNoticia");

        
    $r->addRoute("mostrarFormNoticia", "GET", "NoticiasController", "showForm");
    $r->addRoute("nuevaNoticia", "POST", "NoticiasController", "agregarNoticia");

    $r->addRoute("mostrarFormEquipo", "GET", "EquiposController", "showForm");
    $r->addRoute("nuevoEquipo", "POST", "EquiposController", "agregarEquipo");

    //PARTE DE USUARIOS Y LOGIN.
    $r->addRoute("login", "GET", "LoginController", "showLogin");

    $r->addRoute("verificar", "POST", "LoginController", "verificarUsuario");

    $r->addRoute("logout", "GET", "LoginController", "logout");

    $r->addRoute("mostrarFormRegistro", "GET", "LoginController", "showRegistro");

    $r->addRoute("nuevoUsuario", "POST", "LoginController", "NuevoUsuario");

    $r->addRoute("mostrarAdministradores", "GET", "LoginController", "getUsuarios");
    $r->addRoute("AsignarAdmin/:ID", "GET", "LoginController", "AsignarAdmin");
    $r->addRoute("sacarAdmin/:ID", "GET", "LoginController", "sacarAdmin");
    $r->addRoute("eliminarUsuario/:ID", "GET", "LoginController", "eliminarUsuario");

    //Ruta por defecto.
    $r->setDefaultRoute("NoticiasController", "obtenerNoticias");

    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
?>