@extends('layouts.app')



@section('content')
<div class="container">
         <div class="row">
            <div class="col-md-9">
                <div class="card mb-6 border-info">
                    <div class="card-body">
   <h4 class="bg-dark text-white" align="center">Rgistros de Usuarios</h4>
     <form action="{{route('users.store')}}" method="POST" onsubmit="return validar()">
        @csrf
        <p>
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

     <button type="submit" class="btn btn-success">Guardar</button>
     </form>
   </div>
 </div>
</div>
</div>
@endsection