@extends('layouts.app')



@section('content')
<div class="container">
         <div class="row">
            <div class="col-md-9">
                <div class="card mb-6 border-dark">
                    <div class="card-body">
   <h4 class="bg-dark text-white" align="center">Rgistros de clientes</h4>
     <form action="{{route('factura.store')}}" method="POST" onsubmit="return validar()">
        @csrf
 <div class="form-floating mb-3">
  <input type="text" class="form-control" id="fac_nombre" name="fac_nombre" placeholder="">
  <label for="floatingInput">Nombre</label>
</div>
<div class="form-floating mb-3">
  <input type="date" class="form-control" id="fac_fecha" name="fac_fecha" placeholder="">
  <label for="floatingInput"> Fecha</label>
</div>
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="fac_iva" name="fac_iva" placeholder="">
  <label for="floatingInput">Iva</label>
</div>
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="fac_descuento" name="fac_descuento" placeholder="">
  <label for="floatingInput">Descuento</label>
</div>
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="fac_observaciones" name="fac_observaciones" placeholder="">
  <label for="floatingInput">Observaciones</label>
</div>
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="fac_estado" name="fac_estado" placeholder="">
  <label for="floatingInput">Estado</label>
</div>
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="fac_total" name="fac_total" placeholder="">
  <label for="floatingInput">Total</label>
</div>
<div class="d-grid gap-2 col-2 mx-auto">
     <button type="submit" style="background:#c0a0c3 " class="btn ">Guardar</button>
     </div>
     </form>
   </div>
 </div>
</div>
</div>
@endsection