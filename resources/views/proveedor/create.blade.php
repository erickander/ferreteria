@extends('layouts.app')



@section('content')
<div class="container">
         <div class="row">
            <div class="col-md-9">
                <div class="card mb-6 border-info">
                    <div class="card-body">
                             <form action="{{route('proveedor.store')}}" method="POST" onsubmit="return validar()">
   <h4 class="bg-dark text-white" align="center">Rgistros de proveedores</h4>

   @csrf
   
   <div class="form-floating mb-3">
  <input type="text" class="form-control" id="dor_nombre" name="dor_nombre" placeholder="">
  <label for="floatingInput">Nombre</label>
</div>
 <div class="form-floating mb-3">
  <input type="text" class="form-control" id="dor_apellido" name="dor_apellido" placeholder="">
  <label for="floatingInput">Apellido</label>
</div>
 <div class="form-floating mb-3">
  <input type="text" class="form-control" id="dor_ruc" name="dor_ruc" placeholder="">
  <label for="floatingInput">Ruc</label>
</div>
 <div class="form-floating mb-3">
  <input type="text" class="form-control" id="dor_cedula" name="dor_cedula" placeholder="">
  <label for="floatingInput">Cedula</label>
</div>
 <div class="form-floating mb-3">
  <input type="text" class="form-control" id="dor_direccion" name="dor_direccion" placeholder="">
  <label for="floatingInput">Direccion</label>
</div>
 <div class="form-floating mb-3">
  <input type="text" class="form-control" id="dor_telefono" name="dor_telefono" placeholder="">
  <label for="floatingInput">Telefono</label>
</div>
<div class="form-floating mb-3">
  <input type="date" class="form-control" id="dor_fecha" name="dor_fecha" placeholder="">
  <label for="floatingInput">Fecha</label>
</div>
<div class="d-grid gap-2 col-2 mx-auto">
     <button type="submit" style="background:#eaccad " class="btn btn-outline-light">Guardar</button>
     </div>

     	<!-- 
     	<p>
     <label>Nombre</label>
     <input type="text" name="dor_nombre" id="dor_nombre">
 </p>
 <p>
     <label>Apellido</label>
     <input type="text" id="dor_apellido" name="dor_apellido">
 </p>
 <p>
     <label>Ruc</label>
     <input type="text" id="dor_ruc" name="dor_ruc">
 </p>
 <p>
     <label>Cedula</label>
     <input type="text" id="dor_cedula" name="dor_cedula">
 </p>
 <p>
     <label>Direccion</label>
     <input type="text" id="dor_direccion" name="dor_direccion">
 </p>
 <p>
     <label>Telefono</label>
     <input type="text" id="dor_telefono" name="dor_telefono">
 </p>
 <p>
     <label>Fecha</label>
     <input type="date" id="dor_fecha" name="dor_fecha">
 </p>
     <button type="submit" class="btn btn-success">Guardar</button> -->
     </form>
   </div>
 </div>
</div>
</div>
@endsection