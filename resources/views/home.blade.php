@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
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
  <img src="https://i.pinimg.com/474x/ca/06/35/ca06351da873b80ba5956f769140d519.jpg" width="700" height="600" alt="...">
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
  
   
      </div>
    </div>
 


        </p>
      </div>
    </div>
  </div>
</div>
@endsection
