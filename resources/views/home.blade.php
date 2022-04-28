@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center">
            <h2 class="text-danger"> <strong>Bievenidos</strong></h2>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <div class="card mb-3">
  <img src="https://i.pinimg.com/474x/ca/06/35/ca06351da873b80ba5956f769140d519.jpg" alt="...">
  <div class="card-body">
    <h3 class="card-title" align="center">FERRETERIA VIDA NUEVA</h3>
    <p class="card-text">
   <h4><div class="text-info">  Bienvenidos a la web de La FERRETERIA VIDA NUEVA. Somos una empresa especializada en dar servicios y suministros a diferentes gremios, tanto profesionales como particulares, relacionados con la construcción. Nuestra empresa está especializada en suministrar materiales de construcción, artículos de ferretería, en realizar trabajos en piedra natural, en el alquiler de maquinaria para la construcción y en otros servicios complementarios. En definitiva, hacemos más fácil el trabajo de nuestros clientes.</h4>
    </div>
</p>
  </div>


       

                </div>
            </div>
        </div>
    </div>
</div>
  <h2 class="bg-dark text-white" align="center">En el Cual Podremos Obserbar </h2>  
<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="https://www.cavsi.com/preguntasrespuestas/images/informatica/diferencia-entre-usuario-grupo-usuarios.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h3 class="card-title">Usuarios</h3>
        <p class="card-text">
        <h4> En esta recuadro se podran registrar como tambien visualizar la lista de usuarios y sus distintos permisos como pueden ser los administradores entre otros</h4>
        <a class="btn btn-info text-white" href="">Usuarios</a>
    </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://www.gob.mx/cms/uploads/action_program/main_image/22749/post_permiso_turistico.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h3 class="card-title">Permisos</h3>
        <p class="card-text">
            <h4>En este cuadro se puede agregar/crear diferentes permisos para los distintos usuarios </h4>
             <a class="btn btn-info text-white" href="">Permisos</a>
        </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://technocio.com/wp-content/uploads/2019/12/buying-bitcoin.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h3 class="card-title">Movimientos</h3>
        <p class="card-text">
            <h4>En este cuadro se puede visualizar las distintas transacciones como son ingresos o egresos que sean registradas en el programa.</h4>
            <a class="btn btn-info text-white" href="">Movimientos</a>
        </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://d1eipm3vz40hy0.cloudfront.net/images/SSAC-Blog/gastos-de-ventas.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h3 class="card-title">Tipos</h3>
        <p class="card-text">
            <h4>En este cuadro se podran visualizar/crear varios tipos de ejemplos de las transacciones como lo son viveres salarios etc.</h4>
            <a class="btn btn-info text-white" href="">Tipos</a>
        </p>
      </div>
    </div>
  </div>
</div>
@endsection
