@extends('layouts.app')
@section('content')
<div class="container">
         <div class="row">
            <div class="col-md-9">
                <div class="card mb-6 border-info">
                    <div class="card-body">
<h4 class="bg-dark text-white" align="center">Registro</h4>
    <form action="{{route('clientes.update',$clientes->cli_id)}}" method="POST">
     	@csrf
     	
     <label>Registro De Clientes</label>
     <p>
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
     </p>
     </form>
 </div>
</div>
@endsection