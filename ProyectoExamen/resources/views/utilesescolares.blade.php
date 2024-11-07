+<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    @vite(['resources/js/app.js'])


    <title>Utiles Escolares</title>

</head>
<body>
<div class="container mt-5 col-md-6">

<div class="card font-monospace">
  <div class="card-header fs-5 text-center text-primary">
    Utiles Escolares
 </div>
 <div class="card-body text-justify">
  <form>
    <div class="mb-3">
      <label for="Nombre" class="form-label">Nombre: </label>
      <input type="text" class="form-control" id="nombre">
  </div>
  <div class="mb-3">
      <label for="Marca" class="form-label">Marca: </label>
      <input type="text" class="form-control" id="marca">
  </div>
  <div class="mb-3">
      <label for="Cantidad" class="form-label">Cantidad: </label>
      <input type="numeric" class="form-control" id="cantidad">
  </div>
  <div class="card-footer text-muted">
    <div class="d-grid gap-2 mt-2 mb-1">
      <button type="submit" class="btn btn-success btn-sm"> Guardar</button>
    </div>
  </form>
  </div>
</div>
</div>
</body>
</html>