@extends('layouts.app')

@section('body-class','product-page')

@section('content')
<div class="header header-filter" data-parallax="true" style="background-image: url('{{ asset('img/profile_city.jpg') }}')">

</div>
<div class="main main-raised">
    <div class="container">
        <div class="section">
            <h2 class="title text-center">Editar producto seleccionado</h2>
            <form class="form" method="POST" action="{{ url('/admin/products/'.$product->id.'/edit') }}">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Nombre de Producto</label>
                            <input type="text" class="form-control" name="nombre" value="{{ $product->nombre }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Precio Producto</label>
                            <input type="number" step="0.01" class="form-control" name="precio" value="{{ $product->precio }}">
                        </div>
                    </div>
                </div>
                <div class="form-group label-floating">
                    <label class="control-label">Descripcion corta Producto</label>
                    <input type="text" class="form-control" name="descripcion" value="{{ $product->descripcion }}>
                </div>

                <textarea class="form-control" placeholder="Descripcion extensa del producto" name="descripcion_completo" rows="5">{{ $product->descripcion_completo }}</textarea>
                <button class="btn btn-primary">Guardar cambios</button>
                <a href="{{ url('/admin/products') }}" class="btn btn-default">Cancelar</a>
            </form>
        </div>
    </div>
</div>
@include('includes.footer')
@endsection
