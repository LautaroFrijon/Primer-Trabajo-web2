{include 'Templates/header.tpl'}

<h3>{$titulo}</h3>

<form action="editarEquipo/{$equipo->id_equipo}" method="POST">
    <ul class="list-group mt-4">
            <li class="list-group-item">
                <label>Nombre</label>
                <input name="nombre" type="text" class="form-control" value="{$equipo->nombre}"
                <label>Titulos</label>
                <input name="titulos" type="text" class="form-control" value="{$equipo->titulos}"
                <label>Descripcion</label>
                <input name="descripcion" type="text" class="form-control" value="{$equipo->descripcion|truncate:1000:"..."}"
                <select name="equipo">
                <input class="form-control" hidden type="text" name="id_equipo" value="{$equipo->id_equipo}"
            </li>
    </ul>
    <button type="submit" class="btn  btn-secondary text-black btnEditar">Guardar</button>
</form>

{include 'Templates/footer.tpl'}