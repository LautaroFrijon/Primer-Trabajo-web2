<?php
/* Smarty version 3.1.33, created on 2019-12-04 20:49:07
  from 'C:\xampp\htdocs\TrabajoEspecial-master\Templates\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de80db37bee14_84757133',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b32cf7a7f9c4574ce57ca3f3ea25e71a01612773' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TrabajoEspecial-master\\Templates\\admin.tpl',
      1 => 1575488943,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Templates/header.tpl' => 1,
    'file:Templates/footer.tpl' => 1,
  ),
),false)) {
function content_5de80db37bee14_84757133 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:Templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>

<li href=""><?php echo $_smarty_tpl->tpl_vars['p']->value->email;?>
 </li><a class="btn btn-primary" href="AsignarAdmin/<?php echo $_smarty_tpl->tpl_vars['p']->value->id_usuario;?>
">Hacer admin</a>
                            <a class="btn btn-primary" href="sacarAdmin/<?php echo $_smarty_tpl->tpl_vars['p']->value->id_usuario;?>
">Sacar admin</a>
                            <a class="btn btn-danger" type="submit" href="eliminarUsuario/<?php echo $_smarty_tpl->tpl_vars['p']->value->id_usuario;?>
">Eliminar</a>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php $_smarty_tpl->_subTemplateRender('file:Templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
