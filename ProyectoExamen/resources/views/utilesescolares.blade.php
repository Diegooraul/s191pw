@extends ('layouts.plantilla1')
@section('titulo','formulario clientes')

{{--para encerrar los contenidos y me de una buena estructura--}}
  @section('contenido')

{{--inicia la tarjeta de formulario--}}
<div class="container mt-5 col-md-6">
{{--@dump id--}}

@if(session('exito'))
<x-Alert tipo="success">{{ session('exito') }} </x-Alert>
@endif

@session('exito')
<x-Alert tipo="warning">{{ $value }} </x-Alert>
<div class="card font-monospace">
@endsession  

@session('exito')
<script>
Swal.fire({
  title: "Respuesta del Servidor",
  text: '{{ $value }}',
  icon: "success"});
</script>
@endsession  

  <div class="card-header fs-5 text-center text-primary">
    Registro de Utiles
 </div>
  <form method="POST" action="/enviarCliente">
  @csrf

    

<div class="mb-3">
  <label for="Nombre" class="form-label">Nombre: </label>
  <input type="text" class="form-control" name="txtnombre">
</div>
<div class="mb-3">
  <label for="Marca" class="form-label">Marca: </label>
  <input type="text" class="form-control" name="txtapellido">
</div>
<div class="mb-3">
  <label for="Cantidad" class="form-label">Cantidad: </label>
  <input type="numeric" class="form-control" name="txtcorreo">
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
@endsection