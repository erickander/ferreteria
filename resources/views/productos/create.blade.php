@extends('layouts.app')

 

@section('content')
<div class="container">
  <script src="{{asset('js/productos.js')}}" ></script>
         <div class="row">
            <div class="col-md-9">
                <div class="card mb-6 border-info">
                    <div class="card-body">
   <h4 class="bg-dark text-white" align="center">Agregar productos</h4>
     <form action="{{route('productos.store')}}" method="POST" onsubmit="return validar()">
     	@csrf
         <div class="form-floating mb-3">
  <input type="text" class="form-control" id="pro_nombre" name="pro_nombre" placeholder="">
  <label for="floatingInput">Nombre</label>
</div>
 <div class="form-floating mb-3">
  
                     <select name="pro_calidad" id="pro_calidad" class="form-control">

                       <option selected></option>
                         <option >Alta</option>
                         <option >Media</option>        
                         <option>Baja</option>
                     
        </select>   
          <label for="floatingInput">Calidad</label>
</div>
 <div class="form-floating mb-3">
  
                     <select name="pro_tamaño" id="pro_tamaño" class="form-control">

                       <option selected></option>
                         <option >Grande</option>
                         <option >Mediano</option>        
                         <option>pequeño</option>
                     
        </select>   
          <label for="floatingInput">Tamaño</label>
        </div>
 <div class="form-floating mb-3">
  
                     <select name="pro_estado" id="pro_estado" class="form-control">

                       <option selected>stock</option>         
                     
        </select>  
          <label for="floatingInput">Estado</label>
</div>
 <div class="form-floating mb-3">
  <input type="text" class="form-control" id="pro_descripcion" name="pro_descripcion" placeholder="">
  <label for="floatingInput">Descripccion</label>
</div>
 <div class="form-floating mb-3">
  <input type="number" class="form-control" id="pro_precio" step="auto" name="pro_precio" placeholder="">
 <!--  <div style="background: #f89af5" class="alert" role="alert">
  registre numeros
</div> -->
  <label for="floatingInput">Precio</label>
</div>
     	<!-- <p>
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
 </p> -->
    <div class="d-grid gap-2 col-2 mx-auto">
     <button type="submit" style="background:#c4ffff " class="btn ">Guardar</button>
     </div>
     </form>
   </div>
 </div>
</div>
</div>
@endsection