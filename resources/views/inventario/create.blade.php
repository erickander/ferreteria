@extends('layouts.app')



@section('content')
<div class="container">
  <script src="{{asset('js/inventario.js')}}" ></script>
         <div class="row">
            <div class="col-md-9">
                <div class="card mb-6 border-info">
                    <div class="card-body">
   <h4 class="bg-dark text-white" align="center">Agregar inventario</h4>
     <form action="{{route('inventario.store')}}" method="POST" onsubmit="return validar()">
      @csrf
         <div class="form-floating mb-3">
  <input type="date" class="form-control" id="inv_fecha" name="inv_fecha" placeholder="">
  <label for="floatingInput">Fecha</label>
</div>
 <div class="form-floating mb-3">
  <input type="text" class="form-control" id="inv_cantidad" name="inv_cantidad" placeholder="">
  <label for="floatingInput">Cantidad</label>
</div>
 <div class="form-floating mb-3">
  <input type="text" class="form-control" id="pro_tamaño" name="pro_tamaño" placeholder="">
  <label for="floatingInput">Tamaño</label>
</div>
 <div class="form-floating mb-3">
  <input type="text" class="form-control" id="pro_estado" name="pro_estado" placeholder="">
  <label for="floatingInput">Estado</label>
</div>
 <div class="form-floating mb-3">
  <input type="text" class="form-control" id="pro_descripcion" name="pro_descripcion" placeholder="">
  <label for="floatingInput">Descripccion</label>
</div>
 <div class="form-floating mb-3">
  <input type="number" class="form-control" id="pro_precio" name="pro_precio" placeholder="">
  <div style="background: #f89af5" class="alert" role="alert">
  registre numeros
</div>
  <label for="floatingInput">Precio</label>
</div>