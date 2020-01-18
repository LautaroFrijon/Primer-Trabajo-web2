<?php
/* Smarty version 3.1.33, created on 2019-11-01 04:26:26
  from 'C:\xampp\htdocs\trabajoweb2\Templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbba5e24f6813_98868303',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca4781d7678b73181464128717167a0c09b09458' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trabajoweb2\\Templates\\header.tpl',
      1 => 1572578777,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dbba5e24f6813_98868303 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
">    

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>FutArg</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <a href="inicio.html"><img src="imagenes/logoFutArg.png" width="150" height="35" alt="" href="inicio.html"></a>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
        aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="noticias"><button type="button" class="btn btn-info">Noticias</button><span
                class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="equipos"><button type="button" class="btn btn-info">Equipos</button></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="mostrarFormNoticia"><button type="button" class="btn btn-info">Agregar noticia</button><span
                class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="mostrarFormEquipo"><button type="button" class="btn btn-info">Agregar equipo</button><span
                class="sr-only">(current)</span></a>
          </li>
          <?php if (!isset($_SESSION['id_usuario'])) {?>
          <li class="nav-item">
            <a class="nav-link" href="login"><button type="button"
                class="btn btn-primary">Inicia Sesion</button></a>
          </li>
          <?php }?>
          <li class="nav-item active">
            <a class="nav-link" href="logout"><button type="button" class="btn btn-info">Salir</button><span
            class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </nav>
  </header><?php }
}
