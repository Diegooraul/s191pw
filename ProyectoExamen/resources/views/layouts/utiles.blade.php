<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    @vite(['resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/fondo.css') }}">

    <title>Consultar Utiles</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Utiles escolares</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('rutacacas') }}">Registro Utiles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/consultar">Consulta Utiles</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-5 col-md-8">

<div class="card text-justify font-monospace">
    <div class="card-header fs-5 text-primary">
        Lapiz
    </div>

    <div class="card-body">
        <h5 class="fw-bold"> Bic </h5>
        <h5 class="fw-medium"> 2 </h5>
        <p class="card-text fw-lihgter"></p>
    </div>

    <div class="card-footer text-muted">
        <button type="submit" class="btn btn-warning btn-sm"> Actualizar </button>
        <button type="submit" class="btn btn-danger btn-sm"> Eliminar </button>
    </div>

</div>
</div>

</body>
</html>