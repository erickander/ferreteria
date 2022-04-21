@extends('layouts.app')



@section('content')
<div class="container">
         <div class="row">
            <div class="col-md-9">
                <div class="card mb-6 border-info">
                    <div class="card-body">
   <h4 class="bg-dark text-white" align="center">Rgistros de proveedores</h4>
   <h1 class="card-title" align="center">Registro de Movimientos</h1>
                <h3 for="">Concepto</h3>
                     <select name="usu_id" id="usu_id" class="form-control">
                         <option value="">Elige Una Opcion</option>
                         @foreach($users as $u)
                         <option value=" {{$u->usu_id}}"> {{$u->usu_name}} </option>

                         @endforeach


        </select>   
       </div>
     <form action="{{route('transacciones.store')}}" method="POST" onsubmit="return validar()">
     	@csrf
     	<p>
     <label>Vendedor</label>
     <input type="text" name="usu_name" id="usu_name">
 </p>
 <p>
     <label>Cliente</label>
     <input type="text" id="cli_nombre" name="cli_nombre">
 </p>
 <p>
     <label>Producto</label>
     <input type="text" id="pro_nombre" name="pro_nombre">
 </p>
 <p>
     <label>Fecha</label>
     <input type="date" id="tra_fecha" name="tra_fecha">
 </p>
 <p>
     <label>Cantidad</label>
     <input type="text" id="tra_cantidad" name="tra_cantidad">
 </p>
 <p>
     <label>Sub-total</label>
     <input type="text" id="tra_subtotal" name="tra_subtotal">
 </p>
 <p>
     <label>Iva</label>
     <input type="text" id="tra_iva" name="tra_iva">
 </p>
 <p>
     <label>Descuento</label>
     <input type="text" id="tra_descuento" name="tra_descuento">
 </p>
 <p>
     <label>Total</label>
     <input type="text" id="tra_total" name="tra_total">
 </p>
     <button type="submit" class="btn btn-success">Guardar</button>
     </form>
   </div>
 </div>
</div>
</div>
@endsection