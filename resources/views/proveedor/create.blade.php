@extends('layouts.app')



@section('content')
<div class="container">
         <div class="row">
            <div class="col-md-9">
                <div class="card mb-6 border-info">
                    <div class="card-body">
   <h4 class="bg-dark text-white" align="center">Rgistros de proveedores</h4>
   <h3 for="">Concepto</h3>
                     <select name="usu_id" id="usu_id" class="form-control">
                         <option value="">Elige Una Opcion</option>
                         @foreach($users as $u)
                         <option value=" {{$u->usu_id}}"> {{$u->usu_name}} </option>
     <form action="{{route('proveedor.store')}}" method="POST" onsubmit="return validar()">
     	@csrf
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
     <button type="submit" class="btn btn-success">Guardar</button>
     </form>
   </div>
 </div>
</div>
</div>
@endsection