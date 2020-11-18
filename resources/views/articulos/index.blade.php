@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Lista de articulos') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{ URL::route('articulo.create') }}" class="btn btn-primary">Nuevo</a>

                    <table id="tbl-articulos">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Propiertario</th>
                                <th>Articulo</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($articulos as $articulo)
                            <tr>
                                <td> {{ $articulo->id }}</td>
                                <td> {{ $articulo->propietario }}</td>
                                <td> {{ $articulo->articulo }}</td>
                                <td></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection