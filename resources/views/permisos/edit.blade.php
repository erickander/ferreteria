@extends('layouts.app')
@section('content')
<div class="container">
         <div class="row">
            <div class="col-md-9">
                <div class="card mb-6 border-info">
                    <div class="card-body">
<h4 class="bg-dark text-white" align="center">Editar permisos</h4>
    <form action="{{route('permisos.update',$permisos->per_id)}}" method="POST">
     	@csrf
     	
     <label>Detallar los permisos</label>

     <input type="text" value="{{$permisos->per_tipo}}" name="per_tipo" id="per_tipo">
     <button class="btn btn-success">Guardar</button>
     </form>
 </div>
</div>
</div>
</div>
@endsection