@extends('layouts.app')

@section('title','Comercial Laravel Acceso Aceptado')

@section('body-class','profile-page sidebar-collapse')

@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('img/profile_city.jpg') }}');"></div>
<div class="main main-raised">
    <div class="container">
        <div class="section">
            <h2 class="title text-center">Informacion</h2>
            @if (session('notification'))
                <div class="alert alert-success" role="alert">
                    {{ session('notification') }}
                </div>
            @endif
            <!-- {{ __('Estás conectado!') }} -->
            <ul class="nav nav-pills nav-pills-icons" role="tablist">
                <!--
                    color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
                -->
                <li class="nav-item">
                    <a class="nav-link active" href="#dashboard-1" role="tab" data-toggle="tab">
                        <i class="material-icons">dashboard</i>
                        Carro de compras
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tasks-1" role="tab" data-toggle="tab">
                        <i class="material-icons">list</i>
                        Pedidos
                    </a>
                </li>
            </ul>
            <div class="tab-content tab-space">
                <div class="tab-pane active" id="dashboard-1">
                    Permite la seleccion de productos de nuestra tienda virtual. Es comodo e intuitivo.
                    <br><br>
                    Seleccione una variedad de productos que se detallan con caracteristicas variadas.
                </div>
                <div class="tab-pane" id="tasks-1">
                    Se va a las selecciones anteriormente hechas en nuestra sucursal.
                </div>
            </div>

            <hr>
            <p>Tu carrito de compras presenta {{ auth()->user()-cart->details->count() }} productos</p>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Nombre</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Subtotal</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (auth()->user()-cart->details as $detail)
                    <!-- <ul><li>{{ $detail}}</li></ul> -->
                    <tr>
                        <td class="text-center">
                            <img src="{{ $detail->product->featured_image_url }}" height="50">
                        </td>
                        <td>
                            <a href="{{ url('/products/'.$detail->product->id) }}" target="_blank">{{ $detail->product->nombre }}</a>
                        </td>
                        <td>$ {{ $detail->product->precio }}</td>
                        <td>{{ $detail->cantidad }}</td>
                        <td>$ {{ $detail->cantidad * $detail->product->precio }}</td>
                        <td class="td-actions">

                            <form method="POST" action="{{ url('/cart' ) }}">
                                @csrf
                                {{ method_field('DELETE') }}
                                <input type="hidden" name="cart_detail_id" value="{{ $detail->id }}">
                                <a href="{{ url('/products/'.$detail->product->id) }}" target="_blank" rel="tooltip" title="Ver producto" class="btn btn-info btn-fab btn-fab-mini btn-round">
                                    <i class="fa fa-info"></i>
                                </a>
                                <button type="submit" rel="tooltip" title="Eliminar" class="btn btn-danger btn-fab btn-fab-mini btn-round">
                                    <i class="fa fa-times"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="text-center">
                <form method="POST" action="{{ url('/order') }}">
                    @csrf
                    <button class="btn btn-primary btn-round">
                        <i class="material-icons">done</i> Realizar pedido
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@include('includes.footer')
@endsection
