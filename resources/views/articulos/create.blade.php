@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Nuevo') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('articulo.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="articulo">Articulo</label>
                            <input type="text" class="form-control" name="articulo" id="articulo" aria-describedby="emailHelp" placeholder="Articulo" required>
                        </div>

                        <a href="{{ URL::route('articulo.index') }}" class="btn btn-info">Regresar</a>
                        <button type="submit" class="btn btn-primary">Aceptar</button>
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection