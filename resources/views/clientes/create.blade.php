@extends('layouts.app')



@section('content')
<div class="container">
         <div class="row">
            <div class="col-md-9">
                <div class="card mb-6 border-dark">
                    <div class="card-body">
   <h4 class="bg-dark text-white" align="center">Rgistros de clientes</h4>
     <form action="{{route('clientes.store')}}" method="POST" onsubmit="return validar()">
        @csrf
 <div class="form-floating mb-3">
  <input type="text" class="form-control" id="cli_nombre" name="cli_nombre" placeholder="">
  <label for="floatingInput">Nombre</label>
</div>
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="cli_apellido" name="cli_apellido" placeholder="">
  <label for="floatingInput">Apellido</label>
</div>
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="cli_email" name="cli_email" placeholder="">
  <label for="floatingInput">Correo Electronico</label>
</div>
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="cli_cedula" name="cli_cedula" placeholder="">
  <label for="floatingInput">Cedula</label>
</div>
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="cli_direccion" name="cli_direccion" placeholder="">
  <label for="floatingInput">Direccion</label>
</div>
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="cli_telefono" name="cli_tele" placeholder="">
  <label for="floatingInput">Telefono</label>
</div>
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="password" name="password" placeholder="">
  <label for="floatingInput">Contraseña</label>
</div>
<div class="d-grid gap-2 col-2 mx-auto">
     <button type="submit" style="background:#c0a0c3 " class="btn ">Guardar</button>
     </div>
       <!--  <p>
     <label>Nombre</label>
     <input type="text" name="cli_nombre" id="cli_nombre">
 </p>
 <p>
     <label>Apellido</label>
     <input type="text" id="cli_apellido" name="cli_apellido">
 </p>
 <p>
     <label>Ruc</label>
     <input type="text" id="cli_cedula" name="cli_cedula">
 </p>
 <p>
     <label>Cedula</label>
     <input type="text" id="cli_email" name="cli_email">
 </p>
 <p>
     <label>Direccion</label>
     <input type="text" id="cli_direccion" name="cli_direccion">
 </p>
 <p>
     <label>Contraseña</label>
     <input type="password" id="password" name="password">
 </p>
 <p>
     <label>Telefono</label>
     <input type="text" id="cli_telefono" name="cli_telefono">
 </p>

     <button type="submit" class="btn btn-success">Guardar</button> -->
     </form>
   </div>
 </div>
</div>
</div>
@endsection