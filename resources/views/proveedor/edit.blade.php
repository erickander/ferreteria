@extends('layouts.app')
@section('content')
<div class="container">
         <div class="row">
            <div class="col-md-9">
                <div class="card mb-6 border-info">
                    <div class="card-body">
<h4 class="bg-dark text-white" align="center">Editar proveedor</h4>
    <form action="{{route('proveedor.update',$proveedor->dor_id)}}" method="POST">
     	@csrf
     	
     <label>Detalle de la categoria</label>
     <p>
     <input type="text" value="{{$proveedor->dor_nombre}}" name="dor_nombre" id="dor_nombre">
 </p>
 <p>
     <input type="text" value="{{$proveedor->dor_apellido}}" name="dor_apellido" id="dor_apellido">
     </p>
     
        <p>
    <input type="text" value="{{$proveedor->dor_ruc}}" id="dor_ruc" name="dor_ruc">
    </p>
    <p>
        <input type="text" value="{{$proveedor->dor_cedula}}" id="dor_cedula" name="dor_cedula">
    </p>
    <p>
        <input type="text" value="{{$proveedor->dor_direccion}}" id="dor_direccion" name="dor_direccion">
    </p>
    <p>
        <input type="text" value="{{$proveedor->dor_telefono}}" id="dor_telefono" name="dor_telefono">
    </p>
    <p>
        <input type="date" value="{{$proveedor->dor_fecha}}" id="dor_fecha" name="dor_fecha">
    </p>
    <p>
     <button class="btn btn-success">Guardar</button>
     </p>
     </form>
 </div>
</div>
@endsection