<?php
/* Smarty version 3.1.33, created on 2019-11-27 19:39:16
  from 'C:\xampp\htdocs\TrabajoEspecial-master\vue\comentariosVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddec2d4b8e6e1_15654203',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d4d55aaabbc82446b43abdf1bbbbd2be3a36f50' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TrabajoEspecial-master\\vue\\comentariosVue.tpl',
      1 => 1574879954,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddec2d4b8e6e1_15654203 (Smarty_Internal_Template $_smarty_tpl) {
?>


<section id="template-view-comentarios">
    
    <h5>Comentarios</h5>
        <table class="table table-hover table-dark">
            <thead>
                <tr>
                    <th scope="col">Usuario</th>
                    <th scope="col">Comentario</th>
                    <th scope="col">Puntuacion</th>
                </tr>
            </thead>
            <tbody v-for="comentario in Comentarios">
                <tr v-if="comentario">
                    <th scope="row" name="usuario">{{comentario.usuario}}</th>
                    <td name="contenido">{{comentario.contenido}}</td>
                    <td name="puntuacion">{{comentario.puntuacion}}</td>
                </tr>
            </tbody>
        </table>
        <button><a data-id="{{comentarios.id}}" class="btn-eliminar" href="#">eliminar</a></button>
        <button><a data-id="{{comentarios.id}}" class="btn-completar" href="#">completar</a></button>

</section>

<section>
    <form id="form-tarea" action="insertar" method="POST">
        <input type="emails" name="usuario" placeholder="usuario">
        <input type="text" name="contenido" placeholder="contenido">
        <input type="number" name="puntuacion" placeholder="puntuacion" max="10">
        <input type="submit" value="Insertar">
    </form>
</section>


    
<?php }
}
