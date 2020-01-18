<?php
/* Smarty version 3.1.33, created on 2019-10-31 14:56:49
  from 'C:\xampp\htdocs\trabajoweb2\Templates\noticias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbae821580733_82441896',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e009a82abae4e5251b9d595c8f1fc6801557a13' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trabajoweb2\\Templates\\noticias.tpl',
      1 => 1572515014,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Templates/header.tpl' => 1,
    'file:Templates/footer.tpl' => 1,
  ),
),false)) {
function content_5dbae821580733_82441896 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\trabajoweb2\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender('file:Templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>Noticias Actuales</h1>

<p>Enterate las noticias de tus equipos favoritos en nuestra pagina web y mantenete al tanto de todo lo nuevo que
ocurre en el mundo del futbol registrandote en nuestra pagina.</p>
<p>Indaga y enterate de curiosidades sobre tu equipo favorito</p>


<ul class="list-group mt-4">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['noticias']->value, 'noticia');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['noticia']->value) {
?>
        <li class="noticia list-group-item">
        <h3><?php echo $_smarty_tpl->tpl_vars['noticia']->value->titulo;?>
</h3> | <?php echo $_smarty_tpl->tpl_vars['noticia']->value->fecha;?>

        <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['noticia']->value->contenido,15,"...");?>
 
        <small><a href="detallesNoticia/<?php echo $_smarty_tpl->tpl_vars['noticia']->value->contenido;?>
">VER</a></small>
        <small><a href="eliminar/<?php echo $_smarty_tpl->tpl_vars['noticia']->value->id_noticia;?>
">ELIMINAR</a></li></small>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<?php $_smarty_tpl->_subTemplateRender('file:Templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
