{include 'Templates/header.tpl'}

<form action="obtenerNoticia" method="GET">
    <div class="container">    
        <h3>{$noticia->titulo}</h3><p>{$noticia->fecha}</p>
        <p>{$noticia->contenido|truncate:1000:"..."}</p>
        <div>
        <img src="{$noticia->imagen}">
        </div>
    </div>
</form>

{include 'Templates/vue/comentariosVue.tpl'}

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

{include 'Templates/footer.tpl'}