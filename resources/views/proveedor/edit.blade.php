@extends('layouts.app')
@section('content')
<div class="container">
  <script src="{{asset('js/proveedor.js')}}" ></script>
         <div class="row">
            <div class="col-md-9">
                <div class="card mb-6 border-info">
                    <div class="card-body">
<h4 class="bg-dark text-white" align="center">Editar proveedor</h4>
    <form action="{{route('proveedor.update',$proveedor->dor_id)}}" method="POST"onsubmit="return validar()">
     	@csrf
     	
      <div class="form-floating mb-3">
  <input type="text" value="{{$proveedor->dor_nombre}}" class="form-control" id="dor_nombre" name="dor_nombre" placeholder="">
  <label for="floatingInput">Nombre</label>
</div>
<div class="form-floating mb-3">
  <input type="text" value="{{$proveedor->dor_apellido}}" class="form-control" id="dor_apellido" name="dor_apellido" placeholder="">
  <label for="floatingInput">Apellido</label>
</div><div class="form-floating mb-3">
  <input type="text" value="{{$proveedor->dor_ruc}}" class="form-control" id="dor_ruc" name="dor_ruc" placeholder="">
  <label for="floatingInput">Ruc</label>
</div><div class="form-floating mb-3">
  <input type="text" value="{{$proveedor->dor_cedula}}" class="form-control" id="dor_cedula" name="dor_cedula" placeholder="">
  <label for="floatingInput">Cedula</label>
</div><div class="form-floating mb-3">
  <input type="text" value="{{$proveedor->dor_direccion}}" class="form-control" id="dor_direccion" name="dor_direccion" placeholder="">
  <label for="floatingInput">Direccion</label>
</div><div class="form-floating mb-3">
  <input type="text" value="{{$proveedor->dor_telefono}}" class="form-control" id="dor_telefono" name="dor_telefono" placeholder="">
  <label for="floatingInput">Telefono</label>
</div><div class="form-floating mb-3">
  <input type="date" readonly="" value="{{$proveedor->dor_fecha}}" class="form-control" id="dor_fecha" name="dor_fecha" placeholder="">
  <label for="floatingInput">Fecha</label>
</div>
 <div class="d-grid gap-2 col-2 mx-auto">
     <button type="submit" style="background:#9e3b42 " class="btn "> Guardar</button>
     </div>
    <!--  <p>
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
     </p> -->
     </form>
 </div>
</div>
@endsection