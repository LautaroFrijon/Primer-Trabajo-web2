{include 'Templates/header.tpl'}

<div class="container">
    <form action="nuevoUsuario" method="POST" enctype="multipart/form-data class="col-md-4 offset-md-4 mt-4">
    <h1>{$titulo}</h1>
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

{include 'Templates/footer.tpl'}