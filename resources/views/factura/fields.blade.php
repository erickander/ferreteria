@extends('layouts.app')
@section('content')
<?php 
if (isset($factura)) {
  $fac_id=$factura->fac_id;
  $cli_id=$factura->cli_id;
  $fac_numero_de_factura=$factura->fac_numero_de_factura;
  $fac_fecha=$factura->fac_fecha;
  $fac_iva=$factura->fac_iva;
  $fac_descuento=$factura->fac_descuento;
  $fac_observaciones=$factura->fac_observaciones;
  $fac_total=$factura->fac_total;
}else{
  $fac_id="";
  $cli_id="";
  $fac_numero_de_factura="";
  $fac_fecha=date("Y-m-d");
  $fac_iva=12;
  $fac_descuento=0;
  $fac_observaciones="";
  $fac_total=0;
}

 ?>
<div class="container">
  <script src="{{asset('js/factura.js')}}" ></script>
         <div class="row">
            <div class="col-md-9">
                <div style="width:900px" class="card mb-6 border-dark">
                    <div class="card-body">
   <h4 class="bg-dark text-white" align="center">Facturación</h4>
      <form action="{{route('factura.store')}}" method="POST" onsubmit="return validar()">

        @csrf
         <h4 for="">Clientes</h4>
                     <select name="cli_id" id="cli_id" class="form-control">
                         <option value="">Elije un Cliente</option>
                         @foreach($clientes as $c)
                         @if($c->cli_id==$cli_id)
                         <option selected value=" {{$c->cli_id}}"> {{$c->cli_nombre}} </option>
                         @else
                         <option selected value="{{$c->cli_id}}"> {{$c->cli_nombre}} </option>
                         @endif
                         @endforeach


        </select>  
        <p>  
 <div class="form-floating mb-3">
  <input type="number" min="1" pattern="^[0-9]+"   value="{{$fac_numero_de_factura}}" class="campo-numerico form-control" id="fac_numero_de_factura" name="fac_numero_de_factura" placeholder="">
  <label for="floatingInput">Numero de Factura</label>
</div>
<div class="form-floating mb-3">
  <input type="date" readonly="" value="{{$fac_fecha}}" class="form-control" id="fac_fecha" name="fac_fecha" placeholder="">
  <label for="floatingInput"> Fecha</label>
</div>
<div class="form-floating mb-3">
  <input type="text" value="{{$fac_iva}}" readonly="" class="form-control" id="fac_iva" name="fac_iva" placeholder="">
  <label for="floatingInput">Iva</label>
</div>
<div class="form-floating mb-3">
  <input type="number" class="form-control" readonly="" value="{{$fac_descuento}}" id="fac_descuento" name="fac_descuento" placeholder="">
  <label for="floatingInput">Descuento</label>
</div>
<div class="form-floating mb-3">
  <input type="text" value="{{$fac_observaciones}}" class="form-control" id="fac_observaciones" name="fac_observaciones" placeholder="">
  <label for="floatingInput">Observaciones</label>
</div>
<div class="form-floating mb-3">
  <input type="" value="{{$fac_total}}" readonly="" class="form-control" id="fac_total" name="fac_total" placeholder="">
  <label for="floatingInput">Total</label>
</div>
<div class="d-grid gap-2 col-2 mx-auto">
     <button type="submit" style="background:#c0a0c3 " class="btn ">Guardar</button>
     </div>

     </form>

     <p>
      <form action="{{route('factura.detalle')}}" method="POST" onsubmit="return validar()">
 <script src="{{asset('js/detalle.js')}}" ></script>
        @csrf
     <div class="container">
<h4 class="bg-dark text-white" align="center">Detalle</h4>      
  <table class="table">
    
<tr>
  <th> # </th>
     <th> Cantidad </th>
     <th>Productos</th>
     <th>Vu</th>
     <th>vt</th>
     <th>...</th>
   </tr>
   <td></td>
      
     <td>
      <div id="contenedor-campos">
      <input id="fac_id" name="fac_id" value="{{$fac_id}}" type="hidden">
       <input type="number" name="dat_cantidad" id="dat_cantidad" value="1"  style="width:150px" class="campo-numerico form-control" min="1" pattern="^[0-9]+">
     </td>
     <td>
      <select name="pro_id" id="pro_id"   style="width: 200px" class="form-control">
        <option value="">Productos</option>
       @foreach($productos  as  $p)
        <option selected value="{{$p->pro_id}}">{{$p->pro_nombre}}</option>
        @endforeach
      </select>
     </td>
     <td>
       <input type="number" name="dat_VU" value="1" id="dat_VU" style="width:100px" class="campo-numerico form-control" min="1" pattern="^[0-9]+">
     </td>
     <td>
       <input type="text" name="dat_VT" id="dat_VT" value="2"  style="width:100px" readonly="" class="campo-numerico form-control" min="1" pattern="^[0-9]+">
     </td>
     <td>
     <button type="submit" class="btn btn-info" name="btn_detalle" value="btn_detalle">+</button>
     </div>
   </td>
    @isset($detalle)
     <?php 
        $subt=0;
     ?>
           @foreach($detalle as $dat)

           <?php 
           $subt+=$dat->dat_VT;
           ?>
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$dat->dat_cantidad}}</td>
                <td>{{$dat->pro_descripcion}}</td>
                <td class="text-right">{{number_format($dat->dat_VU,2)}}$</td>
                <td class="text-right">{{number_format($dat->dat_VT,2)}}$</td>
                <td>
</form> 
                  <button class="btn btn-danger btn-sm" name="btn_eliminar" value="{{$dat->det_id}}" >Del</button>
                </td>
              </tr>
           @endforeach
           <?php 
           $desc=$fac_descuento*$subt;
           $fva=$subt*0.12;
              $vt=($subt-$desc)+$fva;
           ?>
           <tr>
                <td colspan="4" class="text-right">Subt:</td>
                <td class="text-right">{{number_format($subt,2)}}$</td>
           </tr>
           <tr>
                <td colspan="4" class="text-right">Desc:</td>
                <td class="text-right">{{number_format($desc,2)}}$</td>
           </tr>
           <tr>
                <td colspan="4" class="text-right">IVA:</td>
                <td class="text-right">{{number_format($fva,2)}}$</td>
           </tr>
           <tr>
                <td colspan="4" class="text-right">VT:</td>
                <td class="text-right">{{number_format($vt,2)}}$</td>
           </tr>
        @else
        <tr><th colspan="5" class="alert alert-warning">No existen datos</th></tr>
        @endisset

  </table>
<script>
window.onload = function(){
      const obj_cant=document.querySelector("#dat_cantidad");
      const obj_vu=document.querySelector("#dat_VU");
      obj_cant.addEventListener("change",()=>{
        calculos();
      });
      obj_vu.addEventListener("change",()=>{
        calculos();
      });

}

const calculos=()=>{
        const vc=document.querySelector("#dat_cantidad");
        const vu=document.querySelector("#dat_VU");
        const vt=vc.value*vu.value;
        document.querySelector("#dat_VT").value=vt;

}

const contenedor = document.getElementById('contenedor-campos');

contenedor.addEventListener('keydown', function(evento) {
  const elemento = evento.target;
  if (elemento.className === 'campo-numerico') {
    const teclaPresionada = evento.key;
    const teclaPresionadaEsUnNumero =
      Number.isInteger(parseInt(teclaPresionada));

    const sePresionoUnaTeclaNoAdmitida = 
      teclaPresionada != 'ArrowDown' &&
      teclaPresionada != 'ArrowUp' &&
      teclaPresionada != 'ArrowLeft' &&
      teclaPresionada != 'ArrowRight' &&
      teclaPresionada != 'Backspace' &&
      teclaPresionada != 'Delete' &&
      teclaPresionada != 'Enter' &&
      !teclaPresionadaEsUnNumero;
    const comienzaPorCero = 
      elemento.value.length === 0 &&
      teclaPresionada == 0;

    if (sePresionoUnaTeclaNoAdmitida || comienzaPorCero) {
      evento.preventDefault(); 
    }
  }
});

</script>
</div>
</form>
</p>
</p>
</form>
@endsection






