@extends('layouts.app')

@section('body-class','profile-page sidebar-collapse')

@section('content')
<div class="header header-filter" data-parallax="true" style="background-image: url('{{ asset('img/profile_city.jpg') }}');"></div>
<!-- <div class="header header-filter" data-parallax="true" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&&q=50&w=1450');> -->

<div class="main main-raised">
    <div class="container">
        <div class="section">
            <h2 class="title text-center">Registrar nuevo producto</h2>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form class="form" method="POST" action="{{ url('/admin/products') }}">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Nombre de Producto</label>
                            <input type="text" class="form-control" name="nombre">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Precio Producto</label>
                            <input type="number" step="0.01" class="form-control" name="precio">
                        </div>
                    </div>
                </div>
                <div class="form-group label-floating">
                    <label class="control-label">Descripcion corta Producto</label>
                    <input type="text" class="form-control" name="descripcion">
                </div>

                <textarea class="form-control" placeholder="Descripcion extensa del producto" name="descripcion_completo" rows="5"></textarea>
                <button class="btn btn-primary">Registrar producto</button>
            </form>
        </div>
    </div>
</div>
@include('includes.footer')
@endsection