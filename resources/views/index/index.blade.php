<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Emilio Ochoa</title>
    <!--
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('slider/css/style.css') }}">
    -->
    <link async rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cantata+One|Oswald|Roboto+Condensed">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

@if(Session::has('alert-message') && Session::has('alert-type'))
    <!-- if have alert -->
    <div id="space-alert">
        <div class="alert {{ Session::get('alert-type') }} alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Atención!</strong> {{ Session::get('alert-message') }}
        </div>
    </div>
@endif

@if($errors->any())
    <!-- if have errors -->
    <div id="space-alert">
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Atención!</strong>
            <ul>
                @foreach($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif


<nav id="navbar">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-4 navitems nav-main">
                <ul>
                    <li onclick="goTo('#top'); if (collapsed) handleCollapse();"><span class="glyphicon glyphicon-star"></span> Emilio Ochoa</li>
                </ul>

                <button 
                    type="button" 
                    onclick="handleCollapse()" 
                    >
                    <span class="glyphicon glyphicon-menu-hamburger"></span>
                </button>
            </div>

            <div id="items-collapse" class="col-xs-8 text-right navitems collapse">
                <ul>
                    <li onclick="goTo('#information');handleCollapse()"><span class="glyphicon glyphicon-info-sign"></span> Información</li>
                    <li onclick="goTo('#skills');handleCollapse()"><span class="glyphicon glyphicon-education"></span> Habilidades</li>
                    <li onclick="goTo('#portfolio');handleCollapse()"><span class="glyphicon glyphicon-briefcase"></span> Portafolio</li>
                    <li onclick="goTo('#contact');handleCollapse()"><span class="glyphicon glyphicon-envelope"></span> Contacto</li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<section id="top">

    <div class="slider">
        <div id="fade"></div>
        <ul>
            <li id="slider-text">
                <div class="container">
                    <h1 class="main-title text-center">Soy Emilio Ochoa bienvenido a mi portafolio!</h1>
                    <hr class="hr">
                    <p class="text-center">Sea bienvenido a mi portafolio virtual, aquí encontraras una pequeña muestra de mi y de mis trabajos y como siempre estaré disponible para atender cualquier solicitud.</p>

                    <div class="text-center">
                        <button type="button" onclick="goTo('#information')" class="btn-primary-giant">Ver mas</button>
                    </div>
                </div>
            </li>
            <li id="slider-item1"></li>
            <li id="slider-item2"></li>
            <li id="slider-item3"></li>
            <li id="slider-item4"></li>
        </ul>

    </div>

</section>

<section id="information">
    <div class="container">
        <h2 class="secondary-title text-center">Información personal</h2>
        <hr class="hr">

        <div class="row">

            <div class="col-sm-offset-2 col-sm-4">
                <img src="{{ asset('img/Yo.jpg') }}" id="yo" alt="Emilio Ochoa" title="Emilio Ochoa">
            </div>

            <div class="col-sm-5 col-sm-offset-0">
                <h3>Datos personales</h3>
                <ul>
                    <li><strong>Nombres: </strong>Emilio Arturo</li>
                    <li><strong>Apellidos: </strong>Ochoa Ramirez</li>
                    <li><strong>Cédula de identidad: </strong>21.029.522</li>
                    <li><strong>Fecha de nacimiento: </strong>02/10/1992</li>
                    <li><strong>Lugar de nacimiento: </strong>Valencia</li>
                    <li><strong>Nacionalidad: </strong>Venezolano</li>
                    <li><strong>Estado civil: </strong>Soltero</li>
                    <li><strong>Edad: </strong>{{ \DateTime::createFromFormat('d-m-Y', '02-10-1992')->diff(new \DateTime())->y }} años</li>
                </ul>
            </div>

        </div>

        <div class="row">
            <div id="social" class="col-xs-12">
                <br>
                <h2 class="secondary-title text-center">Redes sociales</h2>
                <hr class="hr">
                <div class="text-center">
                    <ul>
                        <li><a href="https://www.facebook.com/emilioaor" target="_blank"><span class="social-icon facebook"></span></a></li>
                        <li><a href="https://github.com/emilioaor" target="_blank"><span class="social-icon github"></span></a></li>
                        <li><a href="https://www.linkedin.com/in/emilio-ochoa-458161117/" target="_blank"><span class="social-icon linkedin"></span></a></li>
                        <li><a href="https://www.youtube.com/channel/UCIsv-YGxFzg8jZvMzalgSqg" target="_blank"><span class="social-icon youtube"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

</section>

<section id="skills">

    <div class="container">

        <h2 class="secondary-title text-center">Habilidades</h2>
        <hr class="hr">
        <br>

        <div class="row">
            <div class="col-sm-6">
                <article class="card">

                    <div class="row">
                        <div class="col-xs-4">SQL Server</div>
                        <div class="col-xs-8">
                            <div class="progress">
                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-4">MySQL</div>
                        <div class="col-xs-8">
                            <div class="progress">
                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 90%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-4">HTML5</div>
                        <div class="col-xs-8">
                            <div class="progress">
                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-4">CSS3</div>
                        <div class="col-xs-8">
                            <div class="progress">
                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-4">PHP</div>
                        <div class="col-xs-8">
                            <div class="progress">
                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 90%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-4">JavaScript</div>
                        <div class="col-xs-8">
                            <div class="progress">
                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 85%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-4">JQuery</div>
                        <div class="col-xs-8">
                            <div class="progress">
                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
                            </div>
                        </div>
                    </div>

                </article>
            </div>

            <div class="col-sm-6">
                <article class="card">

                    <div class="row">
                        <div class="col-xs-4">Bootstrap</div>
                        <div class="col-xs-8">
                            <div class="progress">
                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 90%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-4">Wordpress</div>
                        <div class="col-xs-8">
                            <div class="progress">
                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-4">Laravel</div>
                        <div class="col-xs-8">
                            <div class="progress">
                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 87%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-4">Symfony</div>
                        <div class="col-xs-8">
                            <div class="progress">
                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-4">AngularJS 1</div>
                        <div class="col-xs-8">
                            <div class="progress">
                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-4">VueJS</div>
                        <div class="col-xs-8">
                            <div class="progress">
                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-4">Git</div>
                        <div class="col-xs-8">
                            <div class="progress">
                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
                            </div>
                        </div>
                    </div>

                </article>
            </div>
        </div>

        <br>
        <div class="text-center">
            <button type="button" onclick="goTo('#portfolio')" class="btn-primary-giant">¿Empleadas en que?</button>
        </div>

    </div>

</section>

<section id="portfolio">

    <div class="container">

        <h2 class="secondary-title text-center">Portafolio</h2>
        <hr class="hr">

        <div class="row port-row">

            <!-- Porfolio item -->
            <div class="col-xs-6 col-md-3">
                <div class="portfolio-item">
                    <h4>Control de solicitudes</h4>
                    <img src="{{ asset('img/portfolio/control-de-solicitudes2.jpg') }}" class="img-responsive" alt="Control de solicitudes" title="Control de solicitudes">

                    <a href="https://github.com/emilioaor/control-de-solicitudes" class="btn btn-warning" target="_blank">
                        Ver github
                    </a>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#requestControlModal">Ver demo</button>
                </div>
            </div>

            <!-- Porfolio item -->
            <div class="col-xs-6 col-md-3">
                <div class="portfolio-item">
                    <h4>Control de inventario</h4>
                    <img src="{{ asset('img/portfolio/inventory.jpg') }}" class="img-responsive" alt="Control de inventario" title="Control de inventario">

                    <a href="https://github.com/emilioaor/control-de-inventario-symfony3" class="btn btn-warning" target="_blank">
                        Ver github
                    </a>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inventoryModal">Ver demo</button>
                </div>
            </div>

            <!-- Porfolio item -->
            <div class="col-xs-6 col-md-3">
                <div class="portfolio-item">
                    <h4>Maquinaria pesada</h4>
                    <img src="{{ asset('img/portfolio/alquiler-de-maquinaria.jpg') }}" class="img-responsive" alt="Maquinaria pesada" title="Maquinaria pesada">

                    <a href="https://github.com/emilioaor/control-de-maquinaria-pesada" class="btn btn-warning" target="_blank">
                        Ver github
                    </a>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#machineModal">Ver demo</button>
                </div>
            </div>

            <!-- Porfolio item -->
            <div class="col-xs-6 col-md-3">
                <div class="portfolio-item">
                    <h4>Procuraduría PEC</h4>
                    <img src="{{ asset('img/portfolio/pec.jpg') }}" class="img-responsive" alt="Procuraduría PEC" title="Procuraduría PEC">

                    <a href="https://github.com/emilioaor/pagina-de-noticias-pec" class="btn btn-warning" target="_blank">
                        Ver github
                    </a>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#pecModal">Ver demo</button>
                </div>
            </div>

        </div>

        <div class="row">

            <!-- Porfolio item -->
            <div class="col-xs-6 col-md-3">
                <div class="portfolio-item">
                    <h4>Tu hipico online</h4>
                    <img src="{{ asset('img/portfolio/hipico.jpg') }}" class="img-responsive" alt="Acortador de enlaces" title="Acortador de enlaces">

                    <a href="https://github.com/emilioaor/tu-hipico-online" class="btn btn-warning" target="_blank">
                        Ver github
                    </a>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#hipicoModal">Ver demo</button>
                </div>
            </div>

            <!-- Porfolio item -->
            <div class="col-xs-6 col-md-3">
                <div class="portfolio-item">
                    <h4>Lotería de animalitos</h4>
                    <img src="{{ asset('img/portfolio/animalito.jpg') }}" class="img-responsive" alt="Acortador de enlaces" title="Acortador de enlaces">

                    <a href="https://github.com/emilioaor/loteria-de-animalitos" class="btn btn-warning" target="_blank">
                        Ver github
                    </a>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#animalitoModal">Ver demo</button>
                </div>
            </div>

            <!-- Porfolio item -->
            <div class="col-xs-6 col-md-3">
                <div class="portfolio-item">
                    <h4>LottoAnimalito</h4>
                    <img src="{{ asset('img/portfolio/lottoAnimalito.jpg') }}" class="img-responsive" alt="LottoAnimalito" title="LottoAnimalito">

                    <a href="https://github.com/emilioaor/lotto-animalito" class="btn btn-warning" target="_blank">
                        Ver github
                    </a>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#lottoAnimalitoModal">Ver demo</button>
                </div>
            </div>

            <!-- Porfolio item -->
            <div class="col-xs-6 col-md-3">
                <div class="portfolio-item">
                    <h4>Clasificados</h4>
                    <img src="{{ asset('img/portfolio/clasificados.jpg') }}" class="img-responsive" alt="Clasificados" title="Clasificados">

                    <a href="https://github.com/emilioaor/clasificados" class="btn btn-warning" target="_blank">
                        Ver github
                    </a>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#clasificadosModal">Ver demo</button>
                </div>
            </div>

        </div>

        <div class="row">

            <!-- Porfolio item -->
            <div class="col-xs-6 col-md-3">
                <div class="portfolio-item">
                    <h4>Acorta enlaces</h4>
                    <img src="{{ asset('img/portfolio/shorterLink.jpg') }}" class="img-responsive" alt="Acortador de enlaces" title="Acortador de enlaces">

                    <a href="https://github.com/emilioaor/acortador-de-enlaces" class="btn btn-warning" target="_blank">
                        Ver github
                    </a>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#shorterLinkModal">Ver demo</button>
                </div>
            </div>

            <!-- Porfolio item -->
            <div class="col-xs-6 col-md-3">
                <div class="portfolio-item">
                    <h4>Crea tu cine online</h4>
                    <img src="{{ asset('img/portfolio/creatucine.jpg') }}" class="img-responsive" alt="Crea tu cine online" title="Crea tu cine online">

                    <a href="https://github.com/emilioaor/crea-tu-cine" class="btn btn-warning" target="_blank">
                        Ver github
                    </a>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#creatucineModal">Ver demo</button>
                </div>
            </div>

            <!-- Porfolio item -->
            <div class="col-xs-6 col-md-3">
                <div class="portfolio-item">
                    <h4>Cine en Casa</h4>
                    <img src="{{ asset('img/portfolio/cineencasa2.jpg') }}" class="img-responsive" alt="Cine en Casa" title="Cine en Casa">

                    <a href="https://github.com/emilioaor/pagina-de-peliculas" class="btn btn-warning" target="_blank">
                        Ver github
                    </a>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cineencasaModal">Ver demo</button>
                </div>
            </div>

        </div>

    </div>

</section>

<section id="contact">

    <div class="container">

        <h2 class="secondary-title text-center">Contacto</h2>
        <hr class="hr">

        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <p class="text-center">
                    ¿Listo para iniciar tu proyecto?. Respondiendo esta serie de preguntas podremos alcanzar los resultados que esperas.
                </p>
            </div>
        </div>

        <form-contact
            url="{{ route('index.contact') }}"
            token="{{ csrf_token() }}"
        ></form-contact>

    </div>

</section>

<footer>
    <div class="container">
        <p class="text-center">&copy; Derechos reservado a Emilio Ochoa</p>
    </div>
</footer>

<!-- Modal control de solicitudes -->
<div id="requestControlModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Control de solicitudes</h4>
            </div>
            <div class="modal-body">
                <img src="{{ asset('img/portfolio/control-de-solicitudes2.jpg') }}" alt="Control de solicitudes" class="img-responsive">
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <p>
                            <strong>Usuario:</strong> administrador	<br>
                            <strong>Contraseña:</strong> 12345678
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <p>
                            <strong>Usuario:</strong> usuario1	<br>
                            <strong>Contraseña:</strong> 12345678
                        </p>
                    </div>
                </div>

                <hr>
                <p>Esta es una aplicación para el control de solicitudes de servicios y posee dos diferentes tipos de usuario</p>

                <h5><strong>Usuario cliente:</strong></h5>
                <ul>
                    <li>Crea solicitudes de servicios</li>
                    <li>Registra pagos a una solicitud</li>
                </ul>

                <h5><strong>Usuario administrador:</strong></h5>
                <ul>
                    <li>Administra los servicios que se ofrecen</li>
                    <li>Controla las solicitudes</li>
                    <li>Aprueba los pagos</li>
                </ul>
            </div>
            <div class="modal-footer">
                <a href="https://control-solicitudes.emilioochoa.com.ve" target="_blank" class="btn btn-primary">
                    <i class="glyphicon glyphicon-eye-open"></i>	Ir al demo
                </a>
                <button type="button" class="btn btn-danger" data-dismiss="modal">
                    <i class="glyphicon glyphicon-remove"></i>	Cerrar
                </button>
            </div>
        </div>

    </div>
</div>

<!-- Modal control de inventario -->
<div id="inventoryModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Control de inventario</h4>
            </div>
            <div class="modal-body">
                <img src="{{ asset('img/portfolio/inventory.jpg') }}" alt="Control de inventario" class="img-responsive">
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <p>
                            <strong>Usuario:</strong> admin	<br>
                            <strong>Contraseña:</strong> test1
                        </p>
                    </div>
                </div>

                <hr>
                <p>Aplicación para el control de inventario y manejo de clientes y proveedores</p>

                <h5><strong>Unico nivel de usuario:</strong></h5>
                <ul>
                    <li>Registrar clientes</li>
                    <li>Registrar proveedores</li>
                    <li>Registrar productos</li>
                    <li>Registrar entradas y salidas de inventario</li>
                </ul>
            </div>
            <div class="modal-footer">
                <a href="https://control-inventario.emilioochoa.com.ve" target="_blank" class="btn btn-primary">
                    <i class="glyphicon glyphicon-eye-open"></i>	Ir al demo
                </a>
                <button type="button" class="btn btn-danger" data-dismiss="modal">
                    <i class="glyphicon glyphicon-remove"></i>	Cerrar
                </button>
            </div>
        </div>

    </div>
</div>

<!-- Modal PEC -->
<div id="pecModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Procuraduría del Estado Carabobo</h4>
            </div>
            <div class="modal-body">
                <img src="{{ asset('img/portfolio/pec.jpg') }}" alt="Procuraduria del Estado Carabobo" class="img-responsive">
                <hr>

                <div class="row">
                    <div class="col-sm-6">
                        <p>
                            <strong>Usuario:</strong> admin	<br>
                            <strong>Contraseña:</strong> 123456
                        </p>
                    </div>

                    <div class="col-sm-6">
                        <p>
                            <strong>Usuario:</strong> editor	<br>
                            <strong>Contraseña:</strong> 123456
                        </p>
                    </div>
                </div>

                <hr>
                <p>Aplicación para el control de noticias de la instutución publica</p>

                <h5><strong>Editor:</strong></h5>
                <ul>
                    <li>Publica y administra noticias propias</li>
                    <li>Administra mensajes del formulario de contacto</li>
                </ul>

                <h5><strong>Administrador:</strong></h5>
                <ul>
                    <li>Publica y administra noticias del resto de los usuarios</li>
                    <li>Administra mensajes del formulario de contacto</li>
                </ul>
            </div>
            <div class="modal-footer">
                <a href="https://pec.emilioochoa.com.ve" target="_blank" class="btn btn-primary">
                    <i class="glyphicon glyphicon-eye-open"></i>	Ir al demo
                </a>
                <button type="button" class="btn btn-danger" data-dismiss="modal">
                    <i class="glyphicon glyphicon-remove"></i>	Cerrar
                </button>
            </div>
        </div>

    </div>
</div>

<!-- Modal Alquiler de maquinaria -->
<div id="machineModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Alquiler de maquinaria pesada</h4>
            </div>
            <div class="modal-body">
                <img src="{{ asset('img/portfolio/alquiler-de-maquinaria.jpg') }}" alt="Alquiler de maquinaria pesada" class="img-responsive">
                <hr>

                <div class="row">
                    <div class="col-sm-6">
                        <p>
                            <strong>Usuario:</strong> administrador	<br>
                            <strong>Contraseña:</strong> 123456
                        </p>
                    </div>

                    <div class="col-sm-6">
                        <p>
                            <strong>Usuario:</strong> cliente	<br>
                            <strong>Contraseña:</strong> 123456
                        </p>
                    </div>

                    <div class="col-sm-6">
                        <p>
                            <strong>Usuario:</strong> encargado	<br>
                            <strong>Contraseña:</strong> 123456
                        </p>
                    </div>
                </div>

                <hr>
                <p>Aplicación para el control de solicitudes de alquiler de maquinaria pesada</p>

                <h5><strong>Cliente:</strong></h5>
                <ul>
                    <li>Registra solicitudes de alquiler de maquinaria</li>
                    <li>Registra pagos a las solicitudes</li>
                </ul>

                <h5><strong>Encargado:</strong></h5>
                <ul>
                    <li>Confirma los pagos</li>
                    <li>Administra las solicitudes</li>
                </ul>

                <h5><strong>Administrador:</strong></h5>
                <ul>
                    <li>Agrega nuevos modelos de maquinaria</li>
                    <li>Agrega disponibilidad para un modelo en especifico</li>
                    <li>Genera reportes de solicitudes</li>
                </ul>
            </div>
            <div class="modal-footer">
                <a href="https://maquinaria-pesada.emilioochoa.com.ve" target="_blank" class="btn btn-primary">
                    <i class="glyphicon glyphicon-eye-open"></i>	Ir al demo
                </a>
                <button type="button" class="btn btn-danger" data-dismiss="modal">
                    <i class="glyphicon glyphicon-remove"></i>	Cerrar
                </button>
            </div>
        </div>

    </div>
</div>

<!-- Modal Acortador de enlaces -->
<div id="shorterLinkModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Acortador de enlaces</h4>
            </div>
            <div class="modal-body">
                <img src="{{ asset('img/portfolio/shorterLink.jpg') }}" alt="Acortador de enlaces" class="img-responsive">
                <hr>

                <div class="row">
                    <div class="col-sm-6">
                        <p>
                            <strong>Usuario:</strong> test@mail.com	<br>
                            <strong>Contraseña:</strong> 123456
                        </p>
                    </div>

                </div>

                <hr>
                <p>Aplicación para acortar y monitorear enlaces con graficas para representar las visitas</p>

                <h5><strong>Unico nivel de usuario:</strong></h5>
                <ul>
                    <li>Acorta enlaces</li>
                    <li>Monitorea las visitas globales y de cada enlace individualmente</li>
                </ul>

            </div>
            <div class="modal-footer">
                <a href="https://acorta-enlaces.emilioochoa.com.ve" target="_blank" class="btn btn-primary">
                    <i class="glyphicon glyphicon-eye-open"></i>	Ir al demo
                </a>
                <button type="button" class="btn btn-danger" data-dismiss="modal">
                    <i class="glyphicon glyphicon-remove"></i>	Cerrar
                </button>
            </div>
        </div>

    </div>
</div>

<!-- Modal Hipico -->
<div id="hipicoModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tu hipico online</h4>
            </div>
            <div class="modal-body">
                <img src="{{ asset('img/portfolio/hipico.jpg') }}" alt="Tu hipico online" class="img-responsive">
                <hr>

                <div class="row">
                    <div class="col-sm-6">
                        <p>
                            <strong>Usuario:</strong> admin	<br>
                            <strong>Contraseña:</strong> 123456
                        </p>
                    </div>

                    <div class="col-sm-6">
                        <p>
                            <strong>Usuario:</strong> taq1	<br>
                            <strong>Contraseña:</strong> 123456
                        </p>
                    </div>

                </div>

                <hr>
                <p>Aplicación para el control de ventas de carreras de caballos, con ganadores, tablas fijas e impresión de ticket en una tickera</p>

                <h5><strong>Taquilla:</strong></h5>
                <ul>
                    <li>Registra tickets</li>
                    <li>Genera reportes diarios</li>
                    <li>Anula tickets</li>
                </ul>

                <h5><strong>Administrador:</strong></h5>
                <ul>
                    <li>Registra hipodromos</li>
                    <li>Registra caballos</li>
                    <li>Registra carreras</li>
                    <li>Registra las tablas fijas</li>
                    <li>Abre y cierra las carreras</li>
                    <li>Retira caballos de la carrera</li>
                    <li>Marca al caballo ganador</li>
                    <li>Administra las taquillas</li>
                </ul>

            </div>
            <div class="modal-footer">
                <a href="https://hipico.emilioochoa.com.ve" target="_blank" class="btn btn-primary">
                    <i class="glyphicon glyphicon-eye-open"></i>	Ir al demo
                </a>
                <button type="button" class="btn btn-danger" data-dismiss="modal">
                    <i class="glyphicon glyphicon-remove"></i>	Cerrar
                </button>
            </div>
        </div>

    </div>
</div>

<!-- Modal Animalitos -->
<div id="animalitoModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Loteria de animalitos</h4>
            </div>
            <div class="modal-body">
                <img src="{{ asset('img/portfolio/animalito.jpg') }}" alt="Loteria de animalitos" class="img-responsive">
                <hr>

                <div class="row">
                    <div class="col-sm-6">
                        <p>
                            <strong>Usuario:</strong> admin	<br>
                            <strong>Contraseña:</strong> 123456
                        </p>
                    </div>

                    <div class="col-sm-6">
                        <p>
                            <strong>Usuario:</strong> taq1	<br>
                            <strong>Contraseña:</strong> 123456
                        </p>
                    </div>

                </div>

                <hr>
                <p>Aplicación para la venta de la popular loteria de animalitos</p>

                <h5><strong>Taquilla:</strong></h5>
                <ul>
                    <li>Vende tickets</li>
                    <li>Paga los tickets</li>
                    <li>Genera reportes diarios</li>
                </ul>

                <h5><strong>Administrador:</strong></h5>
                <ul>
                    <li>Registra sorteos</li>
                    <li>Registra resultados</li>
                    <li>Administra las taquillas</li>
                </ul>

            </div>
            <div class="modal-footer">
                <a href="https://animalitos.emilioochoa.com.ve" target="_blank" class="btn btn-primary">
                    <i class="glyphicon glyphicon-eye-open"></i>	Ir al demo
                </a>
                <button type="button" class="btn btn-danger" data-dismiss="modal">
                    <i class="glyphicon glyphicon-remove"></i>	Cerrar
                </button>
            </div>
        </div>

    </div>
</div>

<!-- Modal LottoAnimalito -->
<div id="lottoAnimalitoModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">LottoAnimalito</h4>
            </div>
            <div class="modal-body">
                <img src="{{ asset('img/portfolio/lottoAnimalito.jpg') }}" alt="LottoAnimalito" class="img-responsive">
                <hr>

                <div class="row">
                    <div class="col-sm-6">
                        <p>
                            <strong>Usuario:</strong> admin@mail.com	<br>
                            <strong>Contraseña:</strong> 123456
                        </p>
                    </div>

                    <div class="col-sm-6">
                        <p>
                            <strong>Usuario:</strong> user@mail.com	<br>
                            <strong>Contraseña:</strong> 123456
                        </p>
                    </div>

                </div>

                <hr>
                <p>Página web donde los usuarios pueden jugar a la lotería de animalitos. Se manejan saldos y pagos por transferencia</p>

                <h5><strong>Admin:</strong></h5>
                <ul>
                    <li>Registra resultados</li>
                    <li>Valida y aprueba transferencias</li>
                    <li>Valida y aprueba retiros</li>
                    <li>Reportes diarios</li>
                </ul>

                <h5><strong>Usuario:</strong></h5>
                <ul>
                    <li>Registra tickets</li>
                    <li>Genera notificaciones de transferencia</li>
                    <li>Genera notificaciones de retiros</li>
                    <li>Configura datos bancarios</li>
                    <li>Consulta resultados</li>
                </ul>

            </div>
            <div class="modal-footer">
                <a href="https://animalitos.emilioochoa.com.ve" target="_blank" class="btn btn-primary">
                    <i class="glyphicon glyphicon-eye-open"></i>	Ir al demo
                </a>
                <button type="button" class="btn btn-danger" data-dismiss="modal">
                    <i class="glyphicon glyphicon-remove"></i>	Cerrar
                </button>
            </div>
        </div>

    </div>
</div>

<!-- Modal clasificados -->
<div id="clasificadosModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Clasificados</h4>
            </div>
            <div class="modal-body">
                <img src="{{ asset('img/portfolio/clasificados.jpg') }}" alt="Crea tu cine online" class="img-responsive">
                <hr>

                <div class="row">
                    <div class="col-sm-6">
                        <p>
                            <strong>Usuario:</strong> admin@mail.com	<br>
                            <strong>Contraseña:</strong> 123456
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <p>
                            <strong>Usuario:</strong> user@mail.com	<br>
                            <strong>Contraseña:</strong> 123456
                        </p>
                    </div>
                </div>

                <hr>
                <p>Página web de clasificados, con pagos por paypal para publicaciones premium</p>

                <h5><strong>Administrador:</strong></h5>
                <ul>
                    <li>Agrega categorias, sub-categorias y opciones</li>
                </ul>

                <h5><strong>Usuario:</strong></h5>
                <ul>
                    <li>Crea publicaciones</li>
                    <li>Maneja lista de deseos</li>
                    <li>Pagos por Paypal</li>
                </ul>

            </div>
            <div class="modal-footer">
                <a href="https://clasificados.emilioochoa.com.ve" target="_blank" class="btn btn-primary">
                    <i class="glyphicon glyphicon-eye-open"></i>	Ir al demo
                </a>
                <button type="button" class="btn btn-danger" data-dismiss="modal">
                    <i class="glyphicon glyphicon-remove"></i>	Cerrar
                </button>
            </div>
        </div>

    </div>
</div>

<!-- Modal creatucine -->
<div id="creatucineModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Crea tu cine online</h4>
            </div>
            <div class="modal-body">
                <img src="{{ asset('img/portfolio/creatucine.jpg') }}" alt="Crea tu cine online" class="img-responsive">
                <hr>

                <div class="row">
                    <div class="col-sm-6">
                        <p>
                            <strong>Usuario:</strong> cinema	<br>
                            <strong>Contraseña:</strong> 123456
                        </p>
                    </div>
                </div>

                <hr>
                <p>Aplicación en la cual los usuarios pueden crear su propio cine online, cargar peliculas (Alojadas en otro servidor) y personalizar los colores</p>

                <h5><strong>Unico nivel de usuario:</strong></h5>
                <ul>
                    <li>Carga películas</li>
                    <li>Personaliza colores del cine</li>
                    <li>Me gusta</li>
                    <li>Comentarios</li>
                </ul>
            </div>
            <div class="modal-footer">
                <a href="https://crea-tu-cine.emilioochoa.com.ve" target="_blank" class="btn btn-primary">
                    <i class="glyphicon glyphicon-eye-open"></i>	Ir al demo
                </a>
                <button type="button" class="btn btn-danger" data-dismiss="modal">
                    <i class="glyphicon glyphicon-remove"></i>	Cerrar
                </button>
            </div>
        </div>

    </div>
</div>

<!-- Modal cine en casa -->
<div id="cineencasaModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Cine en Casa</h4>
            </div>
            <div class="modal-body">
                <img src="{{ asset('img/portfolio/cineencasa2.jpg') }}" alt="Cine en Casa" class="img-responsive">
                <hr>

                <div class="row">
                    <div class="col-sm-6">
                        <p>
                            <strong>Usuario:</strong> admin	<br>
                            <strong>Contraseña:</strong> 123456
                        </p>
                    </div>
                </div>

                <hr>
                <p>Página web de películas autoadministrable, para login debe ir a la ruta <strong>auth/login</strong> manualmente</p>

                <h5><strong>Unico nivel de usuario:</strong></h5>
                <ul>
                    <li>Administra películas</li>
                    <li>Administra enlaces</li>
                    <li>Administra suscriptores</li>
                </ul>
            </div>
            <div class="modal-footer">
                <a href="https://cineencasa.emilioochoa.com.ve" target="_blank" class="btn btn-primary">
                    <i class="glyphicon glyphicon-eye-open"></i>	Ir al demo
                </a>
                <button type="button" class="btn btn-danger" data-dismiss="modal">
                    <i class="glyphicon glyphicon-remove"></i>	Cerrar
                </button>
            </div>
        </div>

    </div>
</div>

<!--
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('slider/js/main.js') }}"></script>
-->
<script src="{{ asset('js/app.js') }}"></script>

@if(Request::has('sec'))
    <script>
        $(window).ready(function() {
            goTo('#{{ Request::get('sec') }}');
        });
    </script>
@endif

</body>
</html>