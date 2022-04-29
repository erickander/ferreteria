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
  <h4 class="bg-dark text-white" align="center">Los Productos Que Ofresemos</h4>  
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="https://m.media-amazon.com/images/I/81qzR8t-lXL._AC_SS450_.jpg" class="card-img-top"  alt="...">
      <div class="card-body">
        <h3 class="card-title">Taladro</h3>
        <p class="card-text">
        <h4>Marca   TECCPO
          <p>
            Voltaje:20 Voltios
            <p>
            Composición de las celdas de la batería:Litio Ion
            <p>
            Torque del artículo :310 Libras-pulgada
            <p>
             Amperaje :2 Amperios
             <p>
           </h4>
    </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://disensa.com.ec/wp-content/uploads/2020/10/cemento-fuerte-tipo-gu-300x300.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h3 class="card-title">Cemento</h3>
        <p class="card-text">
            <h4>El cemento Holcim Fuerte Tipo GU por su gran durabilidad, resistencia y calidad es ideal para todo tipo de construcción: albañilería en general, cimentaciones, columnas, vigas, pilares, losas, morteros, estabilización de suelos, vías, pisos industriales, tanques.</h4>

        </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://http2.mlstatic.com/D_NQ_NP_645918-MEC47289509016_082021-O.webp" class="card-img-top" alt="...">
      <div class="card-body">
        <h3 class="card-title">Caja De Herramientas</h3>
        <p class="card-text">
            <h4>Juego de herramientas combinadas de 142 piezas
Incluir:
1/2 «DR. Parte:
19Pcs 1/2 «Hexagonal Socket: 8 al 32MM
5 piezas 1/2 «Star Socket: E 10 al 20
1 Unids 1/2 «Dr.Flex mango, 375MM
1 Unids 1/2 «llave de trinquete, 45T
Barra de extensión de 2 piezas 1/2 
        </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://http2.mlstatic.com/D_NQ_NP_892325-MEC49553080004_042022-O.webp" class="card-img-top" alt="...">
      <div class="card-body">
        <h3 class="card-title">Brochas</h3>
        <p class="card-text">
            <h4>Brochas Mango De Madera Y Plastico Precio Desde $0,60</h4>

        </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://www.catalogodelempaque.com/documenta/imagenes/131288/1-600.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h3 class="card-title">Tarros de Pintura</h3>
        <p class="card-text">
            <h4>Brochas Mango De Madera Y Plastico Precio Desde $0,60</h4>

        </p>
      </div>
    </div>
  </div>
</div>
@endsection
