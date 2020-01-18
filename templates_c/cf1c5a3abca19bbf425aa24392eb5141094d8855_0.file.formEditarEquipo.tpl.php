<?php
/* Smarty version 3.1.33, created on 2019-12-05 03:20:22
  from 'C:\xampp\htdocs\TrabajoEspecial-master\Templates\formEditarEquipo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de869661e99e3_81064002',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf1c5a3abca19bbf425aa24392eb5141094d8855' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TrabajoEspecial-master\\Templates\\formEditarEquipo.tpl',
      1 => 1575468601,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Templates/header.tpl' => 1,
    'file:Templates/footer.tpl' => 1,
  ),
),false)) {
function content_5de869661e99e3_81064002 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\TrabajoEspecial-master\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender('file:Templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h3><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h3>

<form action="editarEquipo/<?php echo $_smarty_tpl->tpl_vars['equipo']->value->id_equipo;?>
" method="POST">
    <ul class="list-group mt-4">
            <li class="list-group-item">
                <label>Nombre</label>
                <input name="nombre" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['equipo']->value->nombre;?>
"
                <label>Titulos</label>
                <input name="titulos" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['equipo']->value->titulos;?>
"
                <label>Descripcion</label>
                <input name="descripcion" type="text" class="form-control" value="<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['equipo']->value->descripcion,1000,"...");?>
"
                <select name="equipo">
                <input class="form-control" hidden type="text" name="id_equipo" value="<?php echo $_smarty_tpl->tpl_vars['equipo']->value->id_equipo;?>
"
            </li>
    </ul>
    <button type="submit" class="btn  btn-secondary text-black btnEditar">Guardar</button>
</form>

<?php $_smarty_tpl->_subTemplateRender('file:Templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
