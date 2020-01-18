{include 'Templates/header.tpl'}

{foreach from=$usuarios  item=p}

<li href="">{$p->email} </li><a class="btn btn-primary" href="AsignarAdmin/{$p->id_usuario}">Hacer admin</a>
                            <a class="btn btn-primary" href="sacarAdmin/{$p->id_usuario}">Sacar admin</a>
                            <a class="btn btn-danger" type="submit" href="eliminarUsuario/{$p->id_usuario}">Eliminar</a>

{/foreach}

{include 'Templates/footer.tpl'}
