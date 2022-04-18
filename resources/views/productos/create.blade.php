@extends('layouts.app')



@section('content')
<div class="container">
         <div class="row">
            <div class="col-md-9">
                <div class="card mb-6 border-info">
                    <div class="card-body">
   <h4 class="bg-dark text-white" align="center">Agregar productos</h4>
     <form action="{{route('productos.store')}}" method="POST" onsubmit="return validar()">
     	@csrf
     	<p>
     <label>Nombre</label>
     <input type="text" name="pro_nombre" id="pro_nombre">
 </p>
 <p>
     <label>Calidad</label>
     <input type="text" id="pro_calidad" name="pro_calidad">
 </p>
 <p>
     <label>Tamaño</label>
     <input type="text" id="pro_tamaño" name="pro_tamaño">
 </p>
 <p>
     <label>Estado</label>
     <input type="text" id="pro_estado" name="pro_estado">
 </p>
 <p>
     <label>Descripcion</label>
     <input type="text" id="pro_descripcion" name="pro_descripcion">
 </p>
 <p>
     <label>Precio</label>
     <input type="text" id="pro_precio" name="pro_precio">
 </p>
     <button type="submit" class="btn btn-success">Guardar</button>
     </form>
   </div>
 </div>
</div>
</div>
@endsection