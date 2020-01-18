<?php
/* Smarty version 3.1.33, created on 2019-12-08 00:05:24
  from 'C:\xampp\htdocs\TrabajoEspecial-master\Templates\formNoticias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dec3034ae39e0_92044037',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df44d3535b3b9e5bce2e393be6f3aa8ebe104594' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TrabajoEspecial-master\\Templates\\formNoticias.tpl',
      1 => 1575759918,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Templates/header.tpl' => 1,
    'file:Templates/footer.tpl' => 1,
  ),
),false)) {
function content_5dec3034ae39e0_92044037 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:Templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form action="nuevaNoticia" method="POST"  enctype="multipart/form-data">

        <div class="row">
            <div class="col-9">
                <div class="form-group">
                    <h5>Título</h5>
                    <input name="titulo" type="text" class="form-control">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <h5>Fecha</h5>
                    <input name="fecha" type="date" class="form-group">
                </div>
            </div>
        </div>
        <div class="form-group">
            <h5>Descripcion</h5>
            <textarea name="contenido" class="form-control" rows="3"></textarea>
        </div>
        <h5>Equipos</h5>
        <div class="btn-group">
            <select name="equipo" >
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['noticias']->value, 'noticia');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['noticia']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['noticia']->value->id_equipo;?>
" ><?php echo $_smarty_tpl->tpl_vars['noticia']->value->nombre;?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
        <div class="form-group">
            <h5>Imagen</h5>
            <input name="imagen" type="file" class="form-control" >
        </div>
    
        <button type="submit" class="btn btn-primary">Guardar</button>
</form>

<?php $_smarty_tpl->_subTemplateRender('file:Templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
