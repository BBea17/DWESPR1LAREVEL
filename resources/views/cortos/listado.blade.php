@extends('plantilla')
@section('titulo', 'Listado de cortos')
@section('contenido')
<h1 class="mt-5">Listado de cortos</h1>
<ul>
    <div class="row row-cols-1 row-cols-md-2 g-4">
        @forelse ($cortos as $corto)
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> {{ $corto['id'] }} . {{ $corto["titulo"] }} </h5>
                        <p class="card-text">{{ $corto["director"] }}</p>
                        <p class="card-text">{{ $corto["sinapsis"] }}</p>
                    </div>
                    <a href="{{ route('listadoShow', ["id" => $corto['id']]) }} ">
                        <button class=" bg-primary text-white rounded">Detalles</button>
                    </a>
                </div>
            </div>
        @empty
            <li>No se encontraron cortos</li>
        @endforelse
    </div>
</ul>
@endsection