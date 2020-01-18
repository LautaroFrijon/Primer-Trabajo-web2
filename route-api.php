<?php
require_once('router.php');
require_once('api/comentariosApiController.php');

define("basehref", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

// recurso solicitado
$resource = $_GET["resource"];

// método utilizado
$method = $_SERVER["REQUEST_METHOD"];

//creo el router
$r = new Router();

//tabla de ruteo
$r->addRoute("comentarios", "GET", "comentariosApiController", "obtenerComentarios");

$r->addRoute("comentarios/:ID", "GET", "comentariosApiController", "obtenerComentario");

$r->addRoute("comentarios/:ID", "DELETE", "comentariosApiController", "eliminar");

$r->addRoute("comentarios", "POST", "comentariosApiController", "agregarComentario");

// rutea
$r->route($resource, $method);
