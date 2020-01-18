<?php
/* Smarty version 3.1.33, created on 2019-12-08 21:56:46
  from 'C:\xampp\htdocs\TrabajoEspecial-master\Templates\formEditarNoticia.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ded638e295676_08202252',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4411eaa01014a2df72dcf97210738b70477d7fe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TrabajoEspecial-master\\Templates\\formEditarNoticia.tpl',
      1 => 1575838581,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Templates/header.tpl' => 1,
    'file:Templates/footer.tpl' => 1,
  ),
),false)) {
function content_5ded638e295676_08202252 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\TrabajoEspecial-master\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender('file:Templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form action="editarNoticia/<?php echo $_smarty_tpl->tpl_vars['noticia']->value->id_notica;?>
" method="POST" enctype="multipart/form-data">

    <h3>Editar noticia</h3>
    <ul class="list-group mt-4">
            <li class="noticia list-group-item"  name="id_notica">
                <h5>Titulo</h5>
                <input type="text" name="titulo" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['noticia']->value->titulo;?>
">
                <h5>Fecha</h5>
                <input type="date" name="fecha" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['noticia']->value->fecha;?>
">
                <h5>Contenido</h5>
                <input type="text" name="contenido" class="form-control" value="<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['noticia']->value->contenido,1000,"...");?>
">
                <h5>Equipos</h5>
                <div class="btn-group">
                    <select name="equipo" >
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['noticias']->value, 'n');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['n']->value) {
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['n']->value->id_equipo;?>
" ><?php echo $_smarty_tpl->tpl_vars['n']->value->nombre;?>
</option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
                <div class="form-group">
                <h5>Imagen</h5>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['noticia']->value->imagen;?>
">
                    <input class="form-control" type="text" name='imagen' placeholder="imagen" value=<?php echo $_smarty_tpl->tpl_vars['noticia']->value->imagen;?>
>
                </div>
            </li>
    </ul>

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>

<?php $_smarty_tpl->_subTemplateRender('file:Templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
