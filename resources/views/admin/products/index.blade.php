@extends('layouts.app')

@section('title','Listado de productos')

@section('body-class','profile-page sidebar-collapse')

@section('content')
<div class="header header-filter" data-parallax="true" style="background-image: url('{{ asset('img/city-profile.jpg') }}');"></div>
<div class="main main-raised">
    <div class="container">
        <div class="section text-center">
            <h2 class="title">Listado de productos disponibles</h2>
            <div class="team">
                <div class="row">
                    <a href="{{ url('/admin/products/create') }}" class="btn btn-primary btn-round">Nuevo producto</a>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="col-md-2 text-center">Nombre</th>
                                <th class="col-md-5 text-center">Descripción</th>
                                <th class="text-center">Categoria</th>
                                <th class="text-right">Precio</th>
                                <th class="text-right">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td class="text-center">{{ $product->id }}</td>
                                <td>{{ $product->nombre }}</td>
                                <td>{{ $product->descripcion }}</td>
                                <td>{{ $product->category ? $product->category->nombre : 'General' }}</td>
                                <td class="text-right">&#36;{{ $product->precio }}</td>
                                <td class="td-actions text-right">

                                    <form method="POST" action="{{ url('/admin/products/'.$product->id.'/delete' ) }}">
                                    <!-- <form method="POST" action="{{ url('/admin/products/'.$product->id ) }}"> -->
                                        @csrf
                                        <!-- tambien puede ser <input type="hidden" name="_token" velue="{{ csrf_token() }}">
                                        o {{ csrf_field() }} -->

                                        <!-- {{ method_field('DELETE') }}
                                        tambien puede ser <input type="hidden" name="method" velue="DELETE">  -->
                                        <a href="#" rel="tooltip" title="Ver producto" class="btn btn-info btn-fab btn-fab-mini btn-round">
                                            <i class="fa fa-info"></i>
                                        </a>
                                        <a href="{{ url('/admin/products/'.$product->id.'/edit' ) }}" rel="tooltip" title="Editar producto" class="btn btn-success btn-fab btn-fab-mini btn-round">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="{{ url('/admin/products/'.$product->id.'/images' ) }}" rel="tooltip" title="Imagenes de producto" class="btn btn-warning btn-fab btn-fab-mini btn-round">
                                            <i class="fa fa-image"></i>
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
                    <!-- agrega botones de paginacion -->
                    <div class="text-center">
                        {{ $products->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('includes.footer')
@endsection
