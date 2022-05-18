@extends('layouts.app')
@section('content')
<div class="container">
         <div class="row">
            <div class="col-md-9">
                <div class="card mb-6 border-info">
                    <div class="card-body">
<h2 class="bg-dark text-white" align="center">Editar productos</h2>
    <form action="{{route('productos.update',$productos->pro_id)}}" method="POST"  onsubmit="return validar()">
     	@csrf
     	
     <label>
    <h3> Detalle de los Productos</h3>
 </label>
     <div class="form-floating mb-3">
  <input type="text" value="{{$productos->pro_nombre}}" class="form-control" id="pro_nombre" name="pro_nombre" placeholder="">
  <label for="floatingInput">Nombre</label>
</div><div class="form-floating mb-3">
  <input type="text" value="{{$productos->pro_calidad}}" class="form-control" id="pro_calidad" name="pro_calidad" placeholder="">
  <label for="floatingInput">Calidad</label>
</div><div class="form-floating mb-3">
  <input type="text" value="{{$productos->pro_tamaño}}" class="form-control" id="pro_tamaño" name="pro_tamaño" placeholder="">
  <label for="floatingInput">Tamaño</label>
</div><div class="form-floating mb-3">
  <input type="text" value="{{$productos->pro_estado}}" class="form-control" id="pro_estado" name="pro_estado" placeholder="">
  <label for="floatingInput">Estado</label>
</div><div class="form-floating mb-3">
  <input type="text" value="{{$productos->pro_descripcion}}" class="form-control" id="pro_descripcion" name="pro_descripcion" placeholder="">
  <label for="floatingInput">Descripcion</label>
</div><div class="form-floating mb-3">
  <input type="number" value="{{$productos->pro_precio}}" class="form-control" id="pro_precio" name="pro_precio" placeholder="">
  <label for="floatingInput">Precio</label>
</div>
 <div class="d-grid gap-2 col-2 mx-auto">
     <button type="submit" style="background:#c4ffff " class="btn ">Guardar</button>
     </div>
     <!-- <p>
     <input type="text" value="{{$productos->pro_nombre}}" name="pro_nombre" id="pro_nombre">
 </p>
 <p>
     <input type="text" value="{{$productos->pro_calidad}}" name="pro_calidad" id="pro_calidad">
     </p>
     
        <p>
    <input type="text" value="{{$productos->pro_tamaño}}" id="pro_tamaño" name="pro_tamaño">
    </p>
    <p>
        <input type="text" value="{{$productos->pro_estado}}" id="pro_estado" name="pro_estado">
    </p>
    <p>
        <input type="text" value="{{$productos->pro_descripcion}}" id="pro_descripcion" name="pro_descripcion">
    </p>
    <p>
        <input type="number" value="{{$productos->pro_precio}}" id="pro_precio" name="pro_precio">
    </p>
    <p>
     <button class="btn btn-success">Guardar</button>
     </p> -->
     </form>
 </div>
</div>
@endsection  <script src="{{asset('js/productos.js')}}" ></script>