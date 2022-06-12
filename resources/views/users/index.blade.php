@extends('layouts.app')
@section('content')





 <body style="background: url(https://us.123rf.com/450wm/stashom/stashom2004/stashom200400003/145256600-marco-de-vista-superior-de-herramientas-de-mano-colecci%C3%B3n-de-gr%C3%A1ficos-grabados-dibujados-a-mano-ilus.jpg?ver=6); no-repeat; background-size: cover;">
    
     <table class="table table- table-striped" style="background:#f6e9d1 ">
       @if(!empty(Session::get('sms')))
     <h3 class="alert alert-success">{{Session::get('sms')}}</h3>
      @endif
           <a class="btn btn-info text-white" href="{{route('users.create')}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
  <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg> Nuevo</a>
<tr class="table-dark">
     <th> # </th>
     <th>Nombre </th>
     <th>Email</th>
     <th>Cedula</th>
     <th>Ruc</th>
     <th>Direccion</th>
     <th>Telefono</th>
     <th>permisos</th>
     <th>Acciones</th>

        

   @foreach($users  as  $u)

   <tr> 
     <td>{{$loop->iteration }}</td>
     <td>{{$u->usu_name }}</td>
     <td>{{$u->usu_email}}</td>
     <td>{{$u->usu_cedula }}</td>
     <td>{{$u->usu_ruc}}</td>
     <td>{{$u->usu_direccion}}</td>
     <td>{{$u->usu_telefono }}</td>
     <td>{{$u->per_tipo }}</td>
     <td>

       <a href="{{route('users.edit',$u->usu_id)}}" class="btn btn-info btf-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
  <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
</svg>Editar</a>

    <form action="{{route('users.destroy',$u->usu_id)}}" method="POST" onsubmit="return confirm('Desea Eliminar')">
    @csrf
<button class="btn-danger btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg> Eliminar</button>
</form>
</div>

     </td>
     </tr>
     @endforeach
     </table>
   </body>

@endsection   
