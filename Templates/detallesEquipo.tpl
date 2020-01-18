{include 'templates/header.tpl'}
<div class="container">

    <h1>{$equipo->nombre} ({$equipo->titulos})</h1>
    <p>{$equipo->descripcion|wordwrap:50:}</p>
    <button>Editar</button><button>Eliminar</button>

</div>
{include 'templates/footer.tpl'}