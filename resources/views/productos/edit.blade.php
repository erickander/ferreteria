@extends('layouts.app')
@section('content')
<div class="container">
         <div class="row">
            <div class="col-md-9">
                <div class="card mb-6 border-info">
                    <div class="card-body">
<h4 class="bg-dark text-white" align="center">Editar productos</h4>
    <form action="{{route('productos.update',$productos->pro_id)}}" method="POST">
     	@csrf
     	
     <label>Detalle de la categoria</label>
     <p>
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
     </p>
     </form>
 </div>
</div>
@endsection