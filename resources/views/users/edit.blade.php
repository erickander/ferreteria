@extends('layouts.app')
@section('content')
<div class="container">
  <script src="{{asset('js/users.js')}}" ></script>
         <div class="row">
            <div class="col-md-9">
                <div class="card mb-6 border-info">
                    <div class="card-body">
<h2 class="bg-dark text-white" align="center">Registro</h2>
    <form action="{{route('users.update',$users->usu_id)}}" method="POST" onsubmit="return validar()">
     	@csrf
     	
     <label> 
     <h3>Registro De Usuarios</h3>
 </label>
     <div class="form-floating mb-3">
  <input type="text" value="{{$users->usu_name}}" class="form-control" id="usu_name" name="usu_name" placeholder="">
  <label for="floatingInput">Usuario</label>
</div><div class="form-floating mb-3">
  <input type="text" value="{{$users->usu_email}}" class="form-control" id="usu_email" name="usu_email" placeholder="">
  <label for="floatingInput">Correo Electronico</label>
</div><div class="form-floating mb-3">
  <input type="text" value="{{$users->usu_cedula}}" class="form-control" id="usu_cedula" name="usu_cedula" placeholder="">
  <label for="floatingInput">Cedula</label>
</div><div class="form-floating mb-3">
  <input type="text" value="{{$users->usu_ruc}}" class="form-control" id="usu_ruc" name="usu_ruc" placeholder="">
  <label for="floatingInput">Ruc</label>
</div><div class="form-floating mb-3">
  <input type="text" value="{{$users->usu_direccion}}" class="form-control" id="usu_direccion" name="usu_direccion" placeholder="">
  <label for="floatingInput">Direccion</label>
</div><div class="form-floating mb-3">
  <input type="text" value="{{$users->usu_telefono}}" class="form-control" id="usu_telefono" name="usu_telefono" placeholder="">
  <label for="floatingInput">Telefono</label>
</div>
<div class="form-floating mb-3">
  <input type="password" class="form-control" id="password" name="password" placeholder="">
  <label for="floatingInput">Contraseña</label>
</div>
     <div class="d-grid gap-2 col-2 mx-auto">
     <button type="submit" style="background:#c4ffff " class="btn ">Guardar</button>
     </div>
    <!--  <p>
     <input type="text" value="{{$users->usu_name}}" name="usu_name" id="usu_name">
 </p>
 <p>
     <input type="text" value="{{$users->usu_email}}" name="usu_email" id="usu_email">
     </p>
     
        <p>
    <input type="text" value="{{$users->usu_cedula}}" id="usu_cedula" name="usu_cedula">
    </p>
    <p>
        <input type="text" value="{{$users->usu_ruc}}" id="usu_ruc" name="usu_ruc">
    </p>
    <p>
        <input type="text" value="{{$users->usu_direccion}}" id="usu_direccion" name="usu_direccion">
    </p>
    <p>
        <input type="text" value="{{$users->usu_telefono}}" id="usu_telefono" name="usu_telefono">
    </p>
    <p>
     <button class="btn btn-success">Guardar</button>
     </p> -->
     </form>
 </div>
</div>
@endsection