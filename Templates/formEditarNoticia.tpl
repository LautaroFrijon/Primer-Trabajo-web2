{include 'Templates/header.tpl'}

<form action="editarNoticia/{$noticia->id_notica}" method="POST" enctype="multipart/form-data">

    <h3>Editar noticia</h3>
    <ul class="list-group mt-4">
            <li class="noticia list-group-item"  name="id_notica">
                <h5>Titulo</h5>
                <input type="text" name="titulo" class="form-control" value="{$noticia->titulo}">
                <h5>Fecha</h5>
                <input type="date" name="fecha" class="form-control" value="{$noticia->fecha}">
                <h5>Contenido</h5>
                <input type="text" name="contenido" class="form-control" value="{$noticia->contenido|truncate:1000:"..."}">
                <h5>Equipos</h5>
                <div class="btn-group">
                    <select name="equipo" >
                    {foreach from=$noticias  item=n}
                        <option value="{$n->id_equipo}" >{$n->nombre}</option>
                    {/foreach}
                    </select>
                </div>
                <div class="form-group">
                <h5>Imagen</h5>
                    <img src="{$noticia->imagen}">
                    <input class="form-control" type="text" name='imagen' placeholder="imagen" value={$noticia->imagen}>
                </div>
            </li>
    </ul>

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>

{include 'Templates/footer.tpl'}