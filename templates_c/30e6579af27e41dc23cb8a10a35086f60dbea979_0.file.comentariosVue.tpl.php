<?php
/* Smarty version 3.1.33, created on 2019-12-09 18:00:15
  from 'C:\xampp\htdocs\TrabajoEspecial-master\Templates\vue\comentariosVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dee7d9fb86756_01819066',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30e6579af27e41dc23cb8a10a35086f60dbea979' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TrabajoEspecial-master\\Templates\\vue\\comentariosVue.tpl',
      1 => 1575910813,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dee7d9fb86756_01819066 (Smarty_Internal_Template $_smarty_tpl) {
?>

<section id="template-vue-comentarios">
    
    <h3> {{ subtitle }} </h3>
        <table class="table table-hover table-dark">
            <thead>
                <tr>
                    <th scope="col">Usuario</th>
                    <th scope="col">Comentario</th>
                    <th scope="col">Puntuacion</th>
                </tr>
            </thead>
            <tbody v-for="comentario in comentarios">
                <tr>
                    <th scope="row" name="usuario">{{comentario.usuario}}</th>
                    <td name="contenido">{{comentario.contenido}}</td>
                    <td name="puntuacion">{{comentario.puntuacion}}</td>
                    <td>
                        <a class="btn btn-danger" id="borrar" >
                        eliminar
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
        
</section>

<?php }
}
