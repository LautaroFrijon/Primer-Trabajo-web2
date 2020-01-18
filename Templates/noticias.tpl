{include 'Templates/header.tpl'}

<div id="background">
<h1>Noticias Actuales</h1>

<p>Enterate las noticias de tus equipos favoritos en nuestra pagina web y mantenete al tanto de todo lo nuevo que
ocurre en el mundo del futbol registrandote en nuestra pagina.</p>
<p>Indaga y enterate de curiosidades sobre tu equipo favorito</p>

<ul class="list-group mt-4">
    {foreach $noticias as $noticia}
        <li class="list-group-item">
        <h3>{$noticia->titulo}</h3> | {$noticia->fecha}
        {$noticia->contenido|truncate:1000:"..."}
        <h5>{$noticia->nombre_equipo}</h5>
        <img src="{$noticia->imagen}">
        {if isset($smarty.session.id_usuario) }
        <a class="btn btn-secondary" href="noticias/{$noticia->id_notica}">VER</a>
        <a class="btn btn-secondary" href="editar/{$noticia->id_notica}">EDITAR</a>
        <a type="submit" class="btn btn-danger" href="eliminar/{$noticia->id_notica}" >ELIMINAR</a>
        {/if}
    {/foreach}
    
</ul>

{include 'Templates/footer.tpl'}
