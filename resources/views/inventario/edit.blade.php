@extends('layouts.app')
@section('content')
<div class="container">
      <script src="{{asset('js/inventario.js')}}" ></script>
         <div class="row">
            <div class="col-md-9">
                <div class="card mb-6 border-info">
                    <div class="card-body">
<h4 class="bg-dark text-white" align="center">Editar inventario</h4>
    <form action="{{route('inventario.update',$inventario->inv_id)}}" method="POST" onsubmit="return validar()">
     	@csrf
     	
     <h4 for="">Usuario</h4>
                     <select name="usu_id" id="usu_id" class="form-control">
                       <option value="">Elige Una Opcion</option>
                       @foreach($User as $usu)
                       <option value=" {{$usu->usu_id}}"> {{$usu->usu_name}} </option>

                       @endforeach

        </select>  
        <h4 for="">Proveedor</h4>
                     <select name="dor_id" id="dor_id" class="form-control">
                       <option value="">Elige Una Opcion</option>
                       @foreach($Proveedor as $dor)
                       <option value=" {{$dor->dor_id}}"> {{$dor->dor_nombre}} </option>

                       @endforeach
 
        </select> 
        <h4 for="">Producto</h4>
                     <select name="pro_id" id="pro_id" class="form-control">
                       <option value="">Elige Una Opcion</option>
                       @foreach($Productos as $pro)
                       <option value=" {{$pro->pro_id}}"> {{$pro->pro_nombre}} </option>

                       @endforeach

        </select> 
        <p>
 <div class="form-floating mb-3">
  <input type="number" value="{{$inventario->inv_cantidad}}" class="form-control" id="inv_cantidad" name="inv_cantidad" placeholder="">
  <label for="floatingInput">Cantidad</label>
</div>
         <div class="form-floating mb-3">
  <input type="date" value="{{$inventario->inv_fecha}}" class="form-control" id="inv_fecha" name="inv_fecha" placeholder="">
  <label for="floatingInput">Fecha</label>
</div>
<div class="d-grid gap-2 col-2 mx-auto">
     <button type="submit" style="background:#c0a0c3 " class="btn ">Guardar</button>
     </div>
     </form>
 
@endsection