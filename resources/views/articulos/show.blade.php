@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Mostrar') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        @csrf
                        <div class="form-group">
                            <label for="articulo">Articulo:</label>
                            {{ $articulo->articulo }}
                        </div>
                        <a href="{{ URL::route('articulo.index') }}" class="btn btn-info">Regresar</a>
                </div>
        </div>
    </div>
</div>
@endsection