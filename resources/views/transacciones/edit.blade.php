@extends('layouts.app')
@section('content')
<div class="container">
         <div class="row">
            <div class="col-md-9">
                <div class="card mb-6 border-info">
                    <div class="card-body">
<h4 class="bg-dark text-white" align="center">Registro</h4>
    <form action="{{route('transacciones.update',$transacciones->tra_id)}}" method="POST">
     	@csrf
     	
     <label>Registro De Usuarios</label>
     <p>
     <input type="date" value="{{$transacciones->tra_fecha}}" name="tra_fecha" id="tra_fecha">
 </p>
 <p>
     <input type="text" value="{{$transacciones->tra_cantidad}}" name="tra_cantidad" id="tra_cantidad">
     </p>
     
        <p>
    <input type="text" value="{{$transacciones->tra_subtotal}}" id="tra_subtotal" name="tra_subtotal">
    </p>
    <p>
        <input type="text" value="{{$transacciones->tra_iva}}" id="tra_iva" name="tra_iva">
    </p>
    <p>
        <input type="text" value="{{$transacciones->tra_descuento}}" id="tra_descuento" name="tra_descuento">
    </p>
    <p>
        <input type="text" value="{{$transacciones->tra_total}}" id="tra_total" name="tra_total">
    </p>
    <p>
     <button class="btn btn-success">Guardar</button>
     </p>
     </form>
 </div>
</div>
@endsection