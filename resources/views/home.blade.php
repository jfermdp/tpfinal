@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">  <a name="" id="" class="btn btn-primary" href="peliculas/create" role="button">+ Agregar a Mi Lista</a>  </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Bienvenido!!!') }}
                    {{Auth::user()}}  {{Auth::id()}} {{ Auth::user()->name }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
