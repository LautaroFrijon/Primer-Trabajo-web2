<?php
/* Smarty version 3.1.33, created on 2020-01-12 03:44:23
  from 'C:\xampp\htdocs\TrabajoEspecial-master\Templates\noticias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e1a8807b14895_70065144',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '301d64e6c4888b365d5fc541293a416dcc5c55b7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TrabajoEspecial-master\\Templates\\noticias.tpl',
      1 => 1576357831,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Templates/header.tpl' => 1,
    'file:Templates/footer.tpl' => 1,
  ),
),false)) {
function content_5e1a8807b14895_70065144 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\TrabajoEspecial-master\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender('file:Templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="background">
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
        <li class="list-group-item">
        <h3><?php echo $_smarty_tpl->tpl_vars['noticia']->value->titulo;?>
</h3> | <?php echo $_smarty_tpl->tpl_vars['noticia']->value->fecha;?>

        <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['noticia']->value->contenido,1000,"...");?>

        <h5><?php echo $_smarty_tpl->tpl_vars['noticia']->value->nombre_equipo;?>
</h5>
        <img src="<?php echo $_smarty_tpl->tpl_vars['noticia']->value->imagen;?>
">
        <?php if (isset($_SESSION['id_usuario'])) {?>
        <a class="btn btn-secondary" href="noticias/<?php echo $_smarty_tpl->tpl_vars['noticia']->value->id_notica;?>
">VER</a>
        <a class="btn btn-secondary" href="editar/<?php echo $_smarty_tpl->tpl_vars['noticia']->value->id_notica;?>
">EDITAR</a>
        <a type="submit" class="btn btn-danger" href="eliminar/<?php echo $_smarty_tpl->tpl_vars['noticia']->value->id_notica;?>
" >ELIMINAR</a>
        <?php }?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    
</ul>

<?php $_smarty_tpl->_subTemplateRender('file:Templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
