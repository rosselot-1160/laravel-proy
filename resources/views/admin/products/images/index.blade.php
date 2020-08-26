@extends('layouts.app')

@section('title','Imágenes de productos')

@section('body-class','profile-page sidebar-collapse')

@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('img/city-profile.jpg') }}');"></div>
<div class="main main-raised">
    <div class="container">
        <div class="section text-center">
            <h2 class="title">Imagenes del producto "{{ $product->nombre}}"</h2>
            <div class="panel panel-default">
                <div class="panel-body">
                    <form method="POST" action="" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="photo" required><br>
                        <button type="submit" class="btn btn-primary btn-round">Subir nueva imagen</button>
                        <a href="{{ url('/admin/products') }}" class="btn btn-default btn-round">Volver al listado de productos</a>
                    </form>
                </div>
            </div>
            <br>
            <hr>
            <div class="row">
                @foreach ($images as $image)
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <img src="{{ $image->url }}" width="250" height="250">
                                <form method="POST" action="">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <input type="hidden" name="image_id" value="{{ $image->id }}">
                                    <button type="submit" class="btn btn-danger btn-round">Eliminar imagen</button>
                                    @if($image->destacado)
                                        <button type="button" class="btn btn-info btn-fab btn-fab-mini btn-round" rel="tooltip" title="Imagen destacada de este producto">
                                            <i class="material-icons">favorite</i>
                                        </button>
                                    @else
                                        <a href="{{ url('/admin/products/'.$product->id.'/images/select/'.$image->id) }}" class="btn btn-primary btn-fab btn-fab-mini btn-round">
                                            <i class="material-icons">favorite</i>
                                        </a>
                                    @endif
                                </form>
                            </div>
                            <br>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@include('includes.footer')
@endsection
