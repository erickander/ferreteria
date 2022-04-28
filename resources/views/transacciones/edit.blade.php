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
        <div class="form-floating mb-3">
  <input type="date" value="{{$transacciones->tra_fecha}}" class="form-control" id="tra_fecha" name="tra_fecha" placeholder="">
  <label for="floatingInput">Fecha</label>
</div>
<div class="form-floating mb-3">
  <input type="text" value="{{$transacciones->tra_cantidad}}" class="form-control" id="tra_cantidad" name="tra_cantidad" placeholder="">
  <label for="floatingInput">Cantidad</label>
</div>
<div class="form-floating mb-3">
  <input type="text" value="{{$transacciones->tra_subtotal}}" class="form-control" id="tra_subtotal" name="tra_subtotal" placeholder="">
  <label for="floatingInput">Subtotal</label>
</div>
<div class="form-floating mb-3">
  <input type="text" value="{{$transacciones->tra_iva}}" class="form-control" id="tra_iva" name="tra_iva" placeholder="">
  <label for="floatingInput">Iva</label>
</div>
<div class="form-floating mb-3">
  <input type="text" value="{{$transacciones->tra_descuento}}" class="form-control" id="tra_descuento" name="tra_descuento" placeholder="">
  <label for="floatingInput">Descuento</label>
</div>
<div class="form-floating mb-3">
  <input type="text" value="{{$transacciones->tra_total}}" class="form-control" id="tra_total" name="tra_total" placeholder="">
  <label for="floatingInput">Total</label>
</div>
<div class="d-grid gap-2 col-2 mx-auto">
     <button type="submit" style="background:#9e3b42 " class="btn ">Guardar</button>
     </div>
     <!-- <input type="date" value="{{$transacciones->tra_fecha}}" name="tra_fecha" id="tra_fecha">
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
     <button class="btn btn-success">Guardar</button> -->
     </p>
     </form>
 </div>
</div>
@endsection