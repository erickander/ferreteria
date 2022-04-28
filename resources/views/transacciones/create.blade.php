@extends('layouts.app')



@section('content')
<div class="container">
         <div class="row">
            <div class="col-md-9">
                <div class="card mb-6 border-info">
                    <div class="card-body">
   <h2 class="bg-dark text-white" align="center">Registros de Transacciones</h2>
   <h4 class="card-title" align="center">Registro de las transacciones</h4>
   <form action="{{route('transacciones.store')}}" method="POST" onsubmit="return validar()">
        @csrf
                <h4 for="">Usuarios</h4>
                     <select name="usu_id" id="usu_id" class="form-control">
                         <option value="">Elige Una Opcion</option>
                         @foreach($users as $u)
                         <option value=" {{$u->usu_id}}"> {{$u->usu_name}} </option>

                         @endforeach


        </select>   
   
                <h4 for="">Productos</h4>
                     <select name="pro_id" id="pro_id" class="form-control">
                         <option value="">Elige Una Opcion</option>
                         @foreach($productos as $p)
                         <option value=" {{$p->pro_id}}"> {{$p->pro_nombre}} </option>

                         @endforeach


        </select>   
        <h4 for="">Clientes</h4>
                     <select name="cli_id" id="cli_id" class="form-control">
                         <option value="">Elige Una Opcion</option>
                         @foreach($clientes as $c)
                         <option value=" {{$c->cli_id}}"> {{$c->cli_nombre}} </option>

                         @endforeach


        </select> 
      <div class="form-floating mb-3">
  <input type="date" class="form-control" id="tra_fecha" name="tra_fecha" placeholder="">
  <label for="floatingInput">Fecha</label>
</div>
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="tra_cantidada" name="tra_cantidada" placeholder="">
  <label for="floatingInput">Cantidad</label>
</div>
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="tra_subtotal" name="tra_subtotal" placeholder="">
  <label for="floatingInput">Nombre</label>
</div>
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="tra_iva" name="tra_iva" placeholder="">
  <label for="floatingInput">Nombre</label>
</div>
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="tra_descuento" name="tra_descuento" placeholder="">
  <label for="floatingInput">Nombre</label>
</div>
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="tra_total" name="tra_total" placeholder="">
  <label for="floatingInput">Nombre</label>
</div>

<div class="d-grid gap-2 col-2 mx-auto">
     <button type="submit" style="background:#e3b1c8 " class="btn btn-outline-light">Guardar</button>
     </div>

 <!--     
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
     <button type="submit" class="btn btn-success">Guardar</button> -->
     </form>
   </div>
 </div>
</div>
</div>
  </div>  
@endsection