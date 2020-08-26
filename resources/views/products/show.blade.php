@extends('layouts.app')

@section('title','Producto')

@section('body-class','profile-page')

@section('content')
<div class="header header-filter" data-parallax="true" style="background-image: url('{{ asset('img/city.jpg') }}');"></div>

<div class="main main-raised">
    <div class="profile-content">
        <div class="container">
            <div class="row">
                <div class="profile">
                    <div class="avatar">
                        <!-- <img src="{{ $product->featured_image_url }}" alt="Circle Image" class="img-raised rounded-circle img-fluid"> -->
                        <img src="{{ $product->featured_image_url }}" alt="Circle Image" class="img-circle img-responsive img-raised">
                    </div>
                    <div class="name">
                        <h3 class="title">{{ $product->nombre }}</h3>
                        <h6>{{ $product->category->nombre}}</h6>
                    </div>
                    @if (session('notification'))
                        <div class="alet alert-success">
                            {{ session('notification') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="description text-center">
                <p>{{ $product->descripcion_completo }}</p>
            </div>
            <div class="text-center">
                <button class="btn btn-primary btn-round" data-toggle="modal" data-target="#modalAddToCart">
                    <i class="mateial-icons">add</i> Añadir al carro de compras
                </button>
            </div>



            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="profile-tabs">
                        <div class="nav-align-center">

                            <div class="tab-content gallery">
                                <div class="tab-pane active" id="studio">
                                    <div class="row">
                                        <div class="col-md-6">
                                            @foreach($imageLeft as $image)
                                            <img src="{{ $image->url }}" class="img-rounded"/>
                                            @endforeach
                                        </div>
                                        <div class="col-md-6">
                                            @foreach($imageRight as $image)
                                            <img src="{{ $image->url }}" class="img-rounded"/>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
<div>

<!-- Modal -->
<div class="modal fade" id="modalAddToCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar cantidad al carro de compras</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{ url('/cart') }}">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <div class="modal-body">
                    <input type="number" name="cantidad" value="1" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Añadir a carro</button>
                </div>
            </form>
        </div>
    </div>
</div>

@include('includes.footer')
@endsection
