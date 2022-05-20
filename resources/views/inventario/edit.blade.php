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
     	
     <label>Detallar los inventario</label>
            <div class="form-floating mb-3">
  <input type="text" value="{{$inventario->inv_fecha}}" class="form-control" id="inv_fecha" name="inv_fecha" placeholder="">
  <label for="floatingInput">inventario</label>
</div>
   <div class="d-grid gap-2 col-2 mx-auto">
     <button type="submit" style="background:#c4ffff " class="btn" >Guardar</button>
     </div>
   <!--   <input type="text" value="{{$inventario->per_tipo}}" name="per_tipo" id="per_tipo"> -->
  <!--    <button class="btn btn-success">Guardar</button> -->
     </form>
 </div>
</div>
</div>
</div>
@endsection