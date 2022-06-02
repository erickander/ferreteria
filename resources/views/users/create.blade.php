@extends('layouts.app')



@section('content')
<div class="container">
<script src="{{asset('js/users.js')}}" ></script>
         <div class="row">
            <div class="col-md-9">
                <div class="card mb-6 ">
                    <div class="card-body">
   <h4 class="bg-dark text-white" align="center">Rgistros de Usuarios</h4>
     <form action="{{route('users.store')}}" method="POST" onsubmit="return validar()">
        @csrf
        <div class="form-floating mb-3">
  <input type="text" class="form-control" id="usu_name" step="auto" name="usu_name" placeholder="">
  <label for="floatingInput">Nombre</label>
</div>
<div class="form-floating mb-3">
  <input type="email" class="form-control" id="usu_email" name="usu_email" placeholder="">
  <label for="floatingInput">Correo Electronico</label>
</div>
<div class="form-floating mb-3">
  <input type="number" class="form-control" id="usu_cedula" name="usu_cedula" placeholder="">
  <label for="floatingInput">Cedula</label>
</div>
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="usu_ruc" name="usu_ruc" placeholder="">
  <label for="floatingInput">Ruc</label>
</div>
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="usu_direccion" name="usu_direccion" placeholder="">
  <label for="floatingInput">Direccion</label>
</div>
<div class="form-floating mb-3">
  <input type="number" class="form-control" id="usu_telefono" name="usu_telefono" placeholder="">
  <label for="floatingInput">Telefono</label>
</div>
<div class="form-floating mb-3">
  <input type="password" class="form-control" id="password" name="password" placeholder="">
  <label for="floatingInput">Contraseña</label>
</div>
<div class="d-grid gap-2 col-2 mx-auto">
     <button type="submit" style="background:#c0a0c3 " class="btn ">Guardar</button>
     </div>
<!--         <p>
     <label>Nombre</label>
     <input type="text" name="usu_name" id="usu_name">
 </p>
 <p>
     <label>Email</label>
     <input type="email" id="usu_email" name="usu_email">
 </p>
 <p>
     <label>Cedula</label>
     <input type="text" id="usu_cedula" name="usu_cedula">
 </p>
 <p>
     <label>Ruc</label>
     <input type="text" id="usu_ruc" name="usu_ruc">
 </p>
 <p>
     <label>Direccion</label>
     <input type="text" id="usu_direccion" name="usu_direccion">
 </p>
 <p>
     <label>Telefono</label>
     <input type="text" id="usu_telefono" name="usu_telefono">
 </p>
 <p>
     <label>Contraseña</label>
     <input type="password" id="password" name="password">
 </p>

     <button type="submit" class="btn btn-success">Guardar</button> -->
     </form>
   </div>
 </div>
</div>
</div>
@endsection