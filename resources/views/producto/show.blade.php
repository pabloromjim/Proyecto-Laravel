@extends('layouts.app')

@section('template_title')
    {{ $producto->name ?? 'Show Producto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Productos</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('productos.index') }}"> Atrás</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Titulo:</strong>
                            {{ $producto->titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $producto->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Desarrollador:</strong>
                            {{ $producto->desarrollador }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $producto->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Lanzamiento:</strong>
                            {{ $producto->fecha_lanzamiento }}
                        </div>
                        <div class="form-group">
                            <strong>Plataforma:</strong>
                            {{ $producto->plataforma }}
                        </div>
                        <div class="form-group">
                            <strong>Genero:</strong>
                            {{ $producto->genero }}
                        </div>
                        <div class="form-group">
                            <strong>Valoracion:</strong>
                            {{ $producto->valoracion }}
                        </div>
                        <div class="form-group">
                            <strong>Clave:</strong>
                            {{ $producto->clave }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $producto->imagen }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
