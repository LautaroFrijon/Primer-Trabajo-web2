<?php
/* Smarty version 3.1.33, created on 2019-12-09 17:57:35
  from 'C:\xampp\htdocs\TrabajoEspecial-master\Templates\detallesNoticia.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dee7cff35ed28_27791755',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82a6933691f4a46e3622c99dcb57ece8873bef88' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TrabajoEspecial-master\\Templates\\detallesNoticia.tpl',
      1 => 1575910646,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Templates/header.tpl' => 1,
    'file:Templates/vue/comentariosVue.tpl' => 1,
    'file:Templates/footer.tpl' => 1,
  ),
),false)) {
function content_5dee7cff35ed28_27791755 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\TrabajoEspecial-master\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender('file:Templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form action="obtenerNoticia" method="GET">
    <div class="container">    
        <h3><?php echo $_smarty_tpl->tpl_vars['noticia']->value->titulo;?>
</h3><p><?php echo $_smarty_tpl->tpl_vars['noticia']->value->fecha;?>
</p>
        <p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['noticia']->value->contenido,1000,"...");?>
</p>
        <div>
        <img src="<?php echo $_smarty_tpl->tpl_vars['noticia']->value->imagen;?>
">
        </div>
    </div>
</form>

<?php $_smarty_tpl->_subTemplateRender('file:Templates/vue/comentariosVue.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section>

    <h3>Nuevo comentario</h3>
    <form id="form-comentarios" action="comentarios" method="POST">
        <input type="text" name="usuario"  id="columna" placeholder="usuario">
        <input type="text" name="contenido" id="columna1" placeholder="contenido">
        <select name="puntaje">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <button class="btn btn-primary" type="submit" >Agregar</button>
    </form>

</section>

<?php $_smarty_tpl->_subTemplateRender('file:Templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
