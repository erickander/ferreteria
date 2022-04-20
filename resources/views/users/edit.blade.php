@extends('layouts.app')
@section('content')
<div class="container">
         <div class="row">
            <div class="col-md-9">
                <div class="card mb-6 border-info">
                    <div class="card-body">
<h4 class="bg-dark text-white" align="center">Registro</h4>
    <form action="{{route('users.update',$users->usu_id)}}" method="POST">
     	@csrf
     	
     <label>Registro De Usuarios</label>
     <p>
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
     </p>
     </form>
 </div>
</div>
@endsection