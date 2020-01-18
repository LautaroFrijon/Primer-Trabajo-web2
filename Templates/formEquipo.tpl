{include 'Templates/header.tpl'}

<form action="nuevoEquipo" method="POST" enctype="multipart/form-data>
    
  <div class="form-row" >
    <div class="form-group col-md-6">
      <label>Nombre Equipo</label>
      <input name="nombre" type="text" class="form-control" placeholder="Nombre Equipo">
    </div>
    <div class="form-group col-md-6">
      <label>Titulos </label>
      <input name="titulos" type="Integer" class="form-control" placeholder="Titulos totales">
    </div>
  </div>
  <div class="form-group col-md-6"">
    <label>Descripcion</label>
    <textarea name="descripcion" class="form-control" rows="3"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Guardar</button>

</form>

{include 'Templates/footer.tpl'}