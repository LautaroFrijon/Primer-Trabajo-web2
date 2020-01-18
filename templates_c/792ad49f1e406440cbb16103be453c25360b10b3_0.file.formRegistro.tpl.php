<?php
/* Smarty version 3.1.33, created on 2019-11-28 21:30:29
  from 'C:\xampp\htdocs\TrabajoEspecial-master\Templates\formRegistro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de02e6537d008_46071771',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '792ad49f1e406440cbb16103be453c25360b10b3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TrabajoEspecial-master\\Templates\\formRegistro.tpl',
      1 => 1574972941,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Templates/header.tpl' => 1,
    'file:Templates/footer.tpl' => 1,
  ),
),false)) {
function content_5de02e6537d008_46071771 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:Templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <form action="nuevoUsuario" method="POST" enctype="multipart/form-data class="col-md-4 offset-md-4 mt-4">
    <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Introduzca su Email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Contraseña</label>
        <input type="password" name="contraseña" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:Templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
