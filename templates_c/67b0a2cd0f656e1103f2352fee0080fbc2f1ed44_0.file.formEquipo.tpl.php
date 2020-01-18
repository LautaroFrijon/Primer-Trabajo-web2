<?php
/* Smarty version 3.1.33, created on 2019-11-01 00:58:55
  from 'C:\xampp\htdocs\trabajoweb2\Templates\formEquipo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbb753f1fff18_21055951',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67b0a2cd0f656e1103f2352fee0080fbc2f1ed44' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trabajoweb2\\Templates\\formEquipo.tpl',
      1 => 1572566331,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Templates/header.tpl' => 1,
    'file:Templates/footer.tpl' => 1,
  ),
),false)) {
function content_5dbb753f1fff18_21055951 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:Templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form action="nuevoEquipo" method="POST">
    
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Nombre Equipo</label>
      <input name="nombre" type="text" class="form-control" placeholder="Nombre Equipo">
    </div>
    <div class="form-group col-md-6">
      <label>Titulos </label>
      <input name="titulos" type="Integer" class="form-control" placeholder="Titulos totales">
    </div>
  </div>
  <div class="form-group col-md-6"">
        <label>Descripcion</label>
        <textarea name="descripcion" class="form-control" rows="3"></textarea>
    </div>
 

  <button type="submit" class="btn btn-primary">Guardar</button>

</form>

<?php $_smarty_tpl->_subTemplateRender('file:Templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
