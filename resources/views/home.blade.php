@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Ferreteria') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="container">
                            <div class="card-header">
                                <div class="card-body">
                                    
                             <img src="https://ferrelec.es/modules/revsliderprestashop/uploads/piscinas_png_1.png">

                                </div>




                     </div>

                    </div>
                        
                    </div>

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
