@extends('layouts.app')



@section('content')
<div class="container">
         <div class="row">
            <div class="col-md-9">
                <div class="card mb-6 border-info">
                    <div class="card-body">
<script src="{{asset('js/permisos.js')}}"></script>

     <table class="table table- table-striped" style="background:#eaccad">
   <h4 class="bg-dark text-white" align="center">Registrar Permisos</h4>
     <form action="{{route('permisos.store')}}" method="POST" onsubmit="return validar()">
     	@csrf
     	<div class="form-floating mb-3">
  <input type="text" class="form-control" id="per_tipo" name="per_tipo" placeholder="">
  <label for="floatingInput">Permisos</label>
</div>
     <!-- <label>Permiso</label>
     <input type="text" name="per_tipo" id="per_tipo"> -->
    <div class="d-grid gap-2 col-2 mx-auto">
     <button type="submit" style="background:#c4ffff " class="btn ">Guardar</button>
     </div>
     </form>
   </div>
 </div>
</div>
</div>
@endsection