@extends('layouts.app')
@section('content')
  
    
           <a class="btn btn-info text-white" href="{{route('factura.create')}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
  <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg> Nuevo</a>
<form action="{{route('factura.search')}}" method="POST">
  @csrf
  Desde:<input type="date" name="desde" value="{{$desde}}">
  Hasta:<input type="date" name="hasta" value="{{$hasta}}">
  <button class="btn btn-success" value="btn_buscar" name="btn_buscar" >Buscar</button>
    <button class="btn btn-danger" value="btn_pdf" name="btn_pdf">PDF</button>
</form>
    <table class="table table- table-striped" style="background:#FFE5B4 ">
     <th> # </th>
     <th> Cliente </th>
     <th>Numero De Factura</th>
     <th>Fecha</th>
     <th>Iva</th>
     <th>Descuento</th>
     <th>Observaciones</th>
     <th>Estado</th>
     <th> Acciones </th>

        

   @foreach($factura  as  $fac)
 
   <tr> 
     <td>{{$loop->iteration }}</td>
     <td>{{$fac->cli_nombre }}</td>
     <td>{{$fac->fac_numero_de_factura}}</td>
     <td>{{$fac->fac_fecha }}</td>
     <td>{{$fac->fac_iva}}%</td>
     <td>{{$fac->fac_descuento}}%</td>
     <td>{{$fac->fac_observaciones }}</td>
     @if($fac->fac_estado==1)
     <td>Registrado</td>
     <td>
       <a href="{{route('factura.edit',$fac->fac_id)}}" class="btn btn-info btf-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
  <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
</svg>Editar</a>

    <a href="{{route('factura.pdf',$fac->fac_id)}}" class="btn btn-danger btn-sm">PDF</a>
    <a href="{{route('factura.anular',$fac->fac_id)}}" class="btn btn-danger btn-sm">Anular</a>
    @else
    <td>Anulado</td>
    <td>
     <form action="{{route('factura.destroy',$fac->fac_id)}}" method="POST" onsubmit="return confirm('Desea Eliminar')">
    @csrf 

      <a href="{{route('factura.pdf',$fac->fac_id)}}" class="btn btn-danger btn-sm">PDF</a>
   </td>
   @endif

</form>
</div>

     </td>
     </tr>
     @endforeach
     </table>

@endsection   
