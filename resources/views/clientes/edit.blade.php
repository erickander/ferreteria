@extends('layouts.app')
@section('content')
<div class="container">
    <script src="{{asset('js/clientes.js')}}" ></script>
         <div class="row">
            <div class="col-md-9">
                <div class="card mb-6 border-info">
                    <div class="card-body">
<h4 class="bg-dark text-white" align="center">Registro</h4>
    <form action="{{route('clientes.update',$clientes->cli_id)}}" method="POST" onsubmit="return validar()">
     	@csrf
     	
     <label>
        <h3>Registro De Clientes</h3>
        </label>
        <div class="form-floating mb-3">
  <input type="text" value="{{$clientes->cli_nombre}}" class="form-control" id="cli_nombre" name="cli_nombre" placeholder="">
  <label for="floatingInput">Nombre</label>
</div>
   <div class="form-floating mb-3">
  <input type="text" value="{{$clientes->cli_apellido}}" class="form-control" id="cli_apellido" name="cli_apellido" placeholder="">
  <label for="floatingInput">Apellido</label>
</div>
   <div class="form-floating mb-3">
  <input type="text" value="{{$clientes->cli_cedula}}" class="form-control" id="cli_cedula" name="cli_cedula" placeholder="">
  <label for="floatingInput">Cedula</label>
</div>
   <div class="form-floating mb-3">
  <input type="text" value="{{$clientes->cli_email}}" class="form-control" id="cli_email" name="cli_email" placeholder="">
  <label for="floatingInput">Correo Electronico</label>
</div>
   <div class="form-floating mb-3">
  <input type="text" value="{{$clientes->cli_direccion}}" class="form-control" id="cli_direccion" name="cli_direccion" placeholder="">
  <label for="floatingInput">Direccion</label>
</div>
   <div class="form-floating mb-3">
  <input type="text" value="{{$clientes->cli_telefono}}" class="form-control" id="cli_telefono" name="cli_telefono" placeholder="">
  <label for="floatingInput">Telefono</label>
</div>
<div class="d-grid gap-2 col-2 mx-auto">
     <button type="submit" style="background:#c4ffff " class="btn ">Guardar</button>
     </div>
    <!--  <p>
     <input type="text" value="{{$clientes->cli_nombre}}" name="cli_nombre" id="cli_nombre">
 </p>
 <p>
     <input type="text" value="{{$clientes->cli_apellido}}" name="cli_apellido" id="cli_apellido">
     </p>
     
        <p>
    <input type="text" value="{{$clientes->cli_cedula}}" id="cli_cedula" name="cli_cedula">
    </p>
    <p>
        <input type="email" value="{{$clientes->cli_email}}" id="cli_email" name="cli_email">
    </p>
    <p>
        <input type="text" value="{{$clientes->cli_direccion}}" id="cli_direccion" name="cli_direccion">
    </p>
    <p>
        <input type="text" value="{{$clientes->cli_telefono}}" id="cli_telefono" name="cli_telefono">
    </p>
    <p>
     <button class="btn btn-success">Guardar</button>
     </p> -->
     </form>
 </div>
</div>
@endsection