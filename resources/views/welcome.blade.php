@extends('layouts.app')

@section('body-class','landing-page')

@section('title','Pagina inicial de Comercial')

@section('styles')
    <style>
        /* otros styles */
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
        /*  realiza una mejor separacion entre lineas */
        .team .row .col-md-4 {
            margin-bottom: 5em;
        }
        /*  las siguientes son utiles para ajustar todas las filas
            a un tamaño identico independiente a la cantidad de lineas
            de la descripcion, cosa que altere la vista de la paginacion */
        .row {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display:         flex;
            flex-wrap: wrap;
        }
        .row > [class*='col-'] {
            display: flex;
            flex-direction: column;
        }
    </style>
@endsection

@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('img/profile_city.jpg') }}')">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="title">Comercial de pruebas</h1>
                <h4>Prueba de laravel que sigue por buen rumbo.</h4>
                <br />
                <a href="https://www.youtube.com/" target="_blank" class="btn btn-danger btn-raised btn-lg">
                    <i class="fa fa-play"></i> Ver video
                </a>
            </div>
        </div>
    </div>
</div>
<div class="main main-raised">
    <div class="container">
        <div class="section text-center">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <h2 class="title">Productos</h2>
                    <h5 class="description">Esta seccion define productos y servicios.</h5>
                </div>
            </div>
            <div class="features">
                <div class="row">
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-info">
                                <i class="material-icons">chat</i>
                            </div>
                            <h4 class="info-title">Atendemos tus dudas</h4>
                            <p>Atendemos rapidamente cualquier consulta via chat. No estas solo sino que siempre estaremos atentos a tus necesidades</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-success">
                                <i class="material-icons">verified_user</i>
                            </div>
                            <h4 class="info-title">Pago seguro</h4>
                            <p>Todo pedido que realices sera confirmado por medio de llamada segura. Tambien contamos con pago contra recepción</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-danger">
                                <i class="material-icons">fingerprint</i>
                            </div>
                            <h4 class="info-title">Información Privada</h4>
                            <p>Todas las transacciones son privadas y confiables. Nadie mas contara con esta información.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section text-center">
            <!--<h2 class="title">Opiniones</h2>
            <div class="team">
                <div class="row">
                    <div class="col-md-4">
                        <div class="team-player">
                            <div class="card card-plain">
                                <div class="col-md-6 ml-auto mr-auto">
                                    <img src="{{ asset('img/faces/avatar.jpg') }}" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                                </div>
                                <h4 class="card-title">Cliente 1
                                    <br>
                                    <small class="card-description text-muted">Modelo</small>
                                </h4>
                                <div class="card-body">
                                    <p class="card-description">...
                                    <a href="#">links</a> a su sitio.</p>
                                </div>
                                <div class="card-footer justify-content-center">
                                    <a href="#" class="btn btn-link btn-just-icon"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="btn btn-link btn-just-icon"><i class="fa fa-instagram"></i></a>
                                    <a href="#" class="btn btn-link btn-just-icon"><i class="fa fa-facebook-square"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="team-player">
                            <div class="card card-plain">
                                <div class="col-md-6 ml-auto mr-auto">
                                    <img src="{{ asset('img/faces/christian.jpg') }}" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                                </div>
                                <h4 class="card-title">Cliente 2
                                    <br>
                                    <small class="card-description text-muted">Diseñador</small>
                                </h4>
                                <div class="card-body">
                                    <p class="card-description">Es el cliente mas preferencial. Visita su
                                    <a href="#">links</a> para conocer mas de él.</p>
                                </div>
                                <div class="card-footer justify-content-center">
                                    <a href="#" class="btn btn-link btn-just-icon"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="btn btn-link btn-just-icon"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="team-player">
                            <div class="card card-plain">
                                <div class="col-md-6 ml-auto mr-auto">
                                    <img src="{{ asset('img/faces/kendall.jpg') }}" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                                </div>
                                <h4 class="card-title">Cliente 3
                                    <br>
                                    <small class="card-description text-muted">Modelador de Datos</small>
                                </h4>
                                <div class="card-body">
                                    <p class="card-description">Visita su
                                    <a href="#">links</a> para contactarse con él.</p>
                                </div>
                                <div class="card-footer justify-content-center">
                                    <a href="#" class="btn btn-link btn-just-icon"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="btn btn-link btn-just-icon"><i class="fa fa-instagram"></i></a>
                                    <a href="#" class="btn btn-link btn-just-icon"><i class="fa fa-facebook-square"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <h2 class="title">Productos disponibles</h2>
            <div class="team">
                <div class="row">
                    @foreach ($products as $product)
                    <div class="col-md-4">
                        <div class="team-player">
                            <img src="{{ $product->featured_image_url }}" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                            <h4 class="card-title">
                                <a href="{{ url('/products/'.$product->id) }}" >{{ $product->nombre }}</a>
                                <br>
                                <small class="card-description text-muted">{{ $product->category->nombre }}</small>
                            </h4>
                            <p class="card-description">{{ $product->descripcion }}</p>

                            <!-- <div class="card card-plain">
                                <div class="col-md-6 ml-auto mr-auto">
                                    <img src="{{ $product->featured_image_url }}" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                                </div>
                                <h4 class="card-title">
                                    <a href="{{ url('/products/'.$product->id) }}" >{{ $product->nombre }}</a>
                                    <br>
                                    <small class="card-description text-muted">{{ $product->category->nombre }}</small>
                                </h4>
                                <div class="card-body">
                                    <p class="card-description">{{ $product->descripcion }}</p>
                                </div>
                                <div class="card-footer justify-content-center">
                                    <a href="#" class="btn btn-link btn-just-icon"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="btn btn-link btn-just-icon"><i class="fa fa-instagram"></i></a>
                                    <a href="#" class="btn btn-link btn-just-icon"><i class="fa fa-facebook-square"></i></a>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="text-center">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
        <div class="section section-contacts">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <h2 class="text-center title">Necesitas algo?</h2>
                    <h4 class="text-center description">Divida los detalles sobre su producto de interes. Escribe unas líneas sobre cada uno y contáctanos sobre cualquier colaboración adicional. Le responderemos en un par de horas.</h4>
                    <form class="contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Tu nombre</label>
                                    <input type="email" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Tu correo electronico</label>
                                    <input type="email" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleMessage" class="bmd-label-floating">Mensaje</label>
                            <textarea type="email" class="form-control" rows="4" id="exampleMessage"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-4 ml-auto mr-auto text-center">
                                <button class="btn btn-primary btn-raised">
                                    Enviar mensaje
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('includes.footer')>
@endsection
