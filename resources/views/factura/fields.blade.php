@extends('layouts.app')
@section('content')
<?php 
if (isset($factura)) {
  $fac_id=$factura->fac_id;
  $cli_id=$factura->cli_id;
  $fac_numero_de_factura=$factura->fac_numero_de_factura;
  $fac_fecha=$factura->fac_fecha;
  $fac_iva=$factura->fac_iva;
  $fac_descuento=$factura->fac_descuento;
  $fac_observaciones=$factura->fac_observaciones;
  $fac_estado=$factura->fac_estado;
  $fac_total=$factura->fac_total;
}else{
  $fac_id="";
  $cli_id="";
  $fac_numero_de_factura="";
  $fac_fecha="";
  $fac_iva="";
  $fac_descuento="";
  $fac_observaciones="";
  $fac_estado="";
  $fac_total="";
}

 ?>
<div class="container">
         <div class="row">
            <div class="col-md-9">
                <div style="width:900px" class="card mb-6 border-dark">
                    <div class="card-body">
   <h4 class="bg-dark text-white" align="center">Facturaciòn</h4>
      <form action="{{route('factura.store')}}" method="POST" onsubmit="return validar()">

        @csrf
         <h4 for="">Clientes</h4>
                     <select name="cli_id" id="cli_id" class="form-control">
                         <option value="">Elije un Cliente</option>
                         @foreach($clientes as $c)
                         <option value=" {{$c->cli_id}}"> {{$c->cli_nombre}} </option>

                         @endforeach


        </select>  
        <p>  
 <div class="form-floating mb-3">
  <input type="text" value="{{$fac_numero_de_factura}}" class="form-control" id="fac_numero_de_factura" name="fac_numero_de_factura" placeholder="">
  <label for="floatingInput">Numero de Factura</label>
</div>
<div class="form-floating mb-3">
  <input type="date" value="{{$fac_fecha}}" class="form-control" id="fac_fecha" name="fac_fecha" placeholder="">
  <label for="floatingInput"> Fecha</label>
</div>
<div class="form-floating mb-3">
  <input type="text" value="{{$fac_iva}}" class="form-control" id="fac_iva" name="fac_iva" placeholder="">
  <label for="floatingInput">Iva</label>
</div>
<div class="form-floating mb-3">
  <input type="text" class="form-control" value="{{$fac_descuento}}" id="fac_descuento" name="fac_descuento" placeholder="">
  <label for="floatingInput">Descuento</label>
</div>
<div class="form-floating mb-3">
  <input type="text" value="{{$fac_observaciones}}" class="form-control" id="fac_observaciones" name="fac_observaciones" placeholder="">
  <label for="floatingInput">Observaciones</label>
</div>
<div class="form-floating mb-3">
  <input type="text" value="{{$fac_estado}}" class="form-control" id="fac_estado" name="fac_estado" placeholder="">
  <label for="floatingInput">Estado</label>
</div>
<div class="form-floating mb-3">
  <input type="text" value="{{$fac_total}}" class="form-control" id="fac_total" name="fac_total" placeholder="">
  <label for="floatingInput">Total</label>
</div>
<div class="d-grid gap-2 col-2 mx-auto">
     <button type="submit" style="background:#c0a0c3 " class="btn ">Guardar</button>
     </div>

     </form>
     <p>
     <div class="container">
<h4 class="bg-dark text-white" align="center">Detalle</h4>      

  <table class="table">
    
<tr>
  <th> # </th>
     <th> Cantidad </th>
     <th>Productos</th>
     <th>Vu</th>
     <th>vt</th>
     <th>...</th>
   </tr>
   <td></td>
     <td>
       <input type="number" style="width:150px" class="form-control">
     </td>
     <td>
      <select name="pro_id" id="pro_id" style="width: 200px" class="form-control">
        <option value="">Productos</option>
       @foreach($productos  as  $p)
        <option value="{{$p->pro_id}}">{{$p->pro_nombre}}</option>
        @endforeach
      </select>
     </td>
     <td>
       <input type="number" style="width:100px" class="form-control">
     </td>
     <td>
       <input type="text" style="width:100px" readonly="" class="form-control">
     </td>
     <td>
     <button type="submit" class="btn btn-info">+</button>
   </td>

  </table>
</div>
</div>
 </div>
</div>
</div>

@endsection
<script>
  document.querySelector('$cli_id').value='{{$cli_id}}'
</script>