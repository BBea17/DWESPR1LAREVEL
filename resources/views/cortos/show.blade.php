@extends('plantilla')
@section('titulo', 'Listado de cortos')
@section('contenido')
<h1 class="mt-5">Listado de cortos</h1>
<div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"> {{ $corto["titulo"] }} </h5>
                <p class="card-text">{{ $corto["director"] }}</p>
                <p class="card-text">{{ $corto["sinapsis"] }}</p>
            </div>
            <a href="{{  route('listado') }}">
                <button class="text-white bg-primary rounded">Volver</button>
            </a>
        </div>
    </div>
</div>
@endsection