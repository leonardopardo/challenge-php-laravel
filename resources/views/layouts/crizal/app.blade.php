<!DOCTYPE html>
<html lang="es">

<head>

    <!-- metas -->
    <meta charset="utf-8">
    <meta name="author" content="DGSI" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="Sistema para que el enano deje de vender humo" />

    <!-- title  -->
    <title>@yield('title') - {{ env('APP_NAME') }} </title>

    <!-- favicon -->
    {{-- <link rel="shortcut icon" href="img/logos/favicon.png">
    <link rel="apple-touch-icon" href="img/logos/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/logos/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/logos/apple-touch-icon-114x114.png"> --}}

    <!-- common plugins -->
    <link rel="stylesheet" href="{{ asset('templates/crizal/plugins/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('templates/crizal/plugins/font-awesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('templates/crizal/plugins/icomoon/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('templates/crizal/plugins/uniform/css/default.css') }}" />
    <link rel="stylesheet" href="{{ asset('templates/crizal/plugins/switchery/switchery.min.css') }}" />

    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('templates/crizal/css/styles.css') }}" />

    <!-- custom css -->
    <link href="{{ asset('templates/crizal/css/custom.css') }}" rel="stylesheet">

    @livewireStyles
    @stack('styles')

</head>

<body>

    <!-- PAGE LOADING
    ================================================== -->
    <div id="preloader"></div>

    <!-- PAGE CONTAINER
    ================================================== -->
    <div class="page-container">

        <!-- PAGE SIDEBAR
        ================================================== -->
        <div class="page-sidebar">
            <a class="logo-box" href="{{ route('admin.home') }}">
                <span>👨🏻‍💻 FINANCHECK</span>
                {{-- <img class="logoLegis" src="{{ asset('img/logosNew/LogoLegislaturahorizontal.png') }}" alt="Logo Legis"> --}}
                <i class="icon-radio_button_unchecked" id="fixed-sidebar-toggle-button"></i>
                <i class="icon-close" id="sidebar-toggle-button-close"></i>
            </a>
            @include('layouts.crizal._sidebar')
        </div>

        <!-- PAGE CONTENT
        ================================================== -->
        <div class="page-content">

            <!-- start page header -->
            <div class="page-header">
                {{-- <div class="search-form">
                    <form action="#" method="GET">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control search-input" placeholder="Type something...">
                            <span class="input-group-btn">
                                    <button class="btn btn-default" id="close-search" type="button"><i class="icon-close"></i></button>
                                </span>
                        </div>
                    </form>
                </div> --}}
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <div class="logo-sm">
                                <a href="#!" id="sidebar-toggle-button"><i class="fa fa-bars"></i></a>
                                <a class="logo-box" href="{{ route('admin.home') }}"><span>GAMBLING</span></a>
                            </div>
                            <button type="button" class="navbar-toggle collapsed" data-bs-toggle="collapse" data-bs-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <i class="fa fa-angle-down"></i>
                            </button>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li><a href="#!" id="collapsed-sidebar-toggle-button"><i class="fa fa-bars"></i></a></li>
                                <li><a href="#!" id="toggle-fullscreen"><i class="fa fa-expand"></i></a></li>
                                {{-- <li><a href="#!" id="search-button"><i class="fa fa-search"></i></a></li> --}}
                            </ul>
                            @include('layouts.crizal._notifications')
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                    <!-- /.container-fluid -->
                </nav>
            </div>
            <!-- end page header -->
            
            <!-- start page inner -->
            <div class="page-inner">
                <!-- start page main wrapper -->
                <div id="main-wrapper">
                    {{-- Panel Header --}}
					@yield('panel-header')

					{{-- Breadcrumb --}}
					{{-- @yield('breadcrumb') --}}

					{{-- Content --}}
					@yield('content')

                    <!-- Row -->
                </div>
                <!-- end page main wrapper -->
                <div class="page-footer">
                    <p>Copyright &copy; <span class="current-year"></span> DGSI.</p>
                </div>
            </div>
            <!-- end page inner -->
            
            <!-- start page right sidebar -->

            <!-- start main right sidebar -->
            {{-- <div class="page-right-sidebar" id="main-right-sidebar">
                <div class="page-right-sidebar-inner">
                    <div class="right-sidebar-top">
                        <div class="right-sidebar-tabs">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active" id="chat-tab"><a href="#chat" aria-controls="chat" type="tab" data-bs-toggle="tab">chat</a></li>
                                <li role="presentation" id="settings-tab"><a href="#settings" aria-controls="settings" type="tab" data-bs-toggle="tab">settings</a></li>
                            </ul>
                        </div>
                        <a href="#!" class="right-sidebar-toggle right-sidebar-close" data-sidebar-id="main-right-sidebar"><i class="icon-close"></i></a>
                    </div>
                    <div class="right-sidebar-content">
                        <!-- start tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="chat">
                                <div class="chat-list">
                                    <span class="chat-title">Recent</span>
                                    <a href="#!" class="right-sidebar-toggle chat-item unread" data-sidebar-id="chat-right-sidebar">
                                        <div class="user-avatar">
                                            <img src="img/avatars/chat01.jpg" alt="...">
                                        </div>
                                        <div class="chat-info">
                                            <span class="chat-author">David</span>
                                            <span class="chat-text">where u at?</span>
                                            <span class="chat-time">08:50</span>
                                        </div>
                                    </a>
                                    <a href="#!" class="right-sidebar-toggle chat-item unread active-user" data-sidebar-id="chat-right-sidebar">
                                        <div class="user-avatar">
                                            <img src="img/avatars/chat02.jpg" alt="...">
                                        </div>
                                        <div class="chat-info">
                                            <span class="chat-author">Daisy</span>
                                            <span class="chat-text">Daisy sent a photo.</span>
                                            <span class="chat-time">11:34</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="chat-list">
                                    <span class="chat-title">Older</span>
                                    <a href="#!" class="right-sidebar-toggle chat-item" data-sidebar-id="chat-right-sidebar">
                                        <div class="user-avatar">
                                            <img src="img/avatars/chat03.jpg" alt="...">
                                        </div>
                                        <div class="chat-info">
                                            <span class="chat-author">Tom</span>
                                            <span class="chat-text">You: ok</span>
                                            <span class="chat-time">2d</span>
                                        </div>
                                    </a>
                                    <a href="#!" class="right-sidebar-toggle chat-item active-user" data-sidebar-id="chat-right-sidebar">
                                        <div class="user-avatar">
                                            <img src="img/avatars/chat04.jpg" alt="...">
                                        </div>
                                        <div class="chat-info">
                                            <span class="chat-author">Anna</span>
                                            <span class="chat-text">asdasdasd</span>
                                            <span class="chat-time">4d</span>
                                        </div>
                                    </a>
                                    <a href="#!" class="right-sidebar-toggle chat-item active-user" data-sidebar-id="chat-right-sidebar">
                                        <div class="user-avatar">
                                            <img src="img/avatars/chat05.jpg" alt="...">
                                        </div>
                                        <div class="chat-info">
                                            <span class="chat-author">Liza</span>
                                            <span class="chat-text">asdasdasd</span>
                                            <span class="chat-time">&nbsp;</span>
                                        </div>
                                    </a>
                                    <a href="#!" class="load-more-messages" data-bs-toggle="tooltip" data-placement="bottom" title="Load More">&bull;&bull;&bull;</a>
                                </div>
                            </div>
                            <div class="tab-pane" id="settings">
                                <div class="right-sidebar-settings">
                                    <span class="settings-title">General Settings</span>
                                    <ul class="sidebar-setting-list list-unstyled">
                                        <li>
                                            <span class="settings-option">Notifications</span>
                                            <input type="checkbox" class="js-switch" checked />
                                        </li>
                                        <li>
                                            <span class="settings-option">Activity log</span>
                                            <input type="checkbox" class="js-switch" checked />
                                        </li>
                                        <li>
                                            <span class="settings-option">Automatic updates</span>
                                            <input type="checkbox" class="js-switch" />
                                        </li>
                                        <li>
                                            <span class="settings-option">Allow backups</span>
                                            <input type="checkbox" class="js-switch" />
                                        </li>
                                    </ul>
                                    <span class="settings-title">Account Settings</span>
                                    <ul class="sidebar-setting-list list-unstyled">
                                        <li>
                                            <span class="settings-option">Chat</span>
                                            <input type="checkbox" class="js-switch" checked />
                                        </li>
                                        <li>
                                            <span class="settings-option">Incognito mode</span>
                                            <input type="checkbox" class="js-switch" />
                                        </li>
                                        <li>
                                            <span class="settings-option">Public profile</span>
                                            <input type="checkbox" class="js-switch" />
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- end main right sidebar -->

            <!-- start chat right sidebar -->
            {{-- <div class="page-right-sidebar" id="chat-right-sidebar">
                <div class="page-right-sidebar-inner">
                    <div class="right-sidebar-top">
                        <div class="chat-top-info">
                            <span class="chat-name">Noah</span>
                            <span class="chat-state">2h ago</span>
                        </div>
                        <a href="#!" class="right-sidebar-toggle chat-sidebar-close float-end" data-sidebar-id="chat-right-sidebar"><i class="icon-keyboard_arrow_right"></i></a>
                    </div>
                    <div class="right-sidebar-content">
                        <div class="right-sidebar-chat slimscroll">
                            <div class="chat-bubbles">
                                <div class="chat-start-date">02/03/2019 5:58PM</div>
                                <div class="chat-bubble them">
                                    <div class="chat-bubble-img-container">
                                        <img src="img/avatars/chat06.jpg" alt="...">
                                    </div>
                                    <div class="chat-bubble-text-container">
                                        <span class="chat-bubble-text">Hello</span>
                                    </div>
                                </div>
                                <div class="chat-bubble me">
                                    <div class="chat-bubble-text-container">
                                        <span class="chat-bubble-text">Hello!</span>
                                    </div>
                                </div>
                                <div class="chat-start-date">03/02/2019 5:18AM</div>
                                <div class="chat-bubble me">
                                    <div class="chat-bubble-text-container">
                                        <span class="chat-bubble-text">lorem</span>
                                    </div>
                                </div>
                                <div class="chat-bubble them">
                                    <div class="chat-bubble-img-container">
                                        <img src="img/avatars/chat07.jpg" alt="...">
                                    </div>
                                    <div class="chat-bubble-text-container">
                                        <span class="chat-bubble-text">ipsum dolor sit amet</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="chat-write">
                            <form class="form-horizontal" action="javascript:void(0);">
                                <input type="text" class="form-control" placeholder="Say something">
                            </form>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- end chat right sidebar -->

            <!-- end page right sidebar -->
            
        </div>

    </div>

    
    
    <!-- Optional: Place to the bottom of scripts -->
    <script>
        const myModal = new bootstrap.Modal(document.getElementById('modalLesion'), options)
    
    </script>

    <div class="modal fade" id="modalSoporte" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">Soporte</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-3 bg-primary p-3 text-white" style="border-radius: 20px;">
                            <h4 class="card-title">Versión 1.0</h4>
                            <div style="font-size: 12px">
                                <p class="card-text">
                                    Esta es la primera versión del sistema, el mismo permite:
                                    <ul class="list-group list-group-numbered" style="font-size: 12px">
                                        <li class="list-group-item">Alta, baja y modificación de Turnos</li>
                                        <li class="list-group-item">Reservar Visitas</li>
                                        <li class="list-group-item">Modificar asistentes</li>
                                        <li class="list-group-item">Gestionar Instituciones</li>
                                        <li class="list-group-item">Gestionar Usuarios</li>
                                    </ul>
                                    
                                </p>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <p>Enviar comentarios y reportar errores sobre la aplicación</p>
                            <form action="{{ route('admin.soporte') }}" method="POST">
                                @csrf
                                <input type="hidden" name="path" value="{{ request()->path() }}">
                                <div class="form-group">
                                    <label for="asunto">Asunto</label>
                                    <input required type="text" class="form-control" name="asunto" id="asunto" aria-describedby="helpId" placeholder="Asunto">
                                </div>
                                <div class="form-group">
                                    <label for="telefono">Teléfono</label>
                                    <input required type="text" class="form-control" name="telefono" id="telefono" placeholder="Preferentemente un whatsapp">
                                </div>
                                <div class="form-group">
                                    <label for="telefono">correo</label>
                                    <input required value="{{ auth::user()->email }}" type="text" class="form-control" name="email" id="correo" placeholder="">
                                </div>
        
                                <div class="form-group">
                                    <label for="mensaje">Mensaje</label>
                                    <textarea required class="form-control" name="mensaje" id="mensaje" rows="3"></textarea>
                                </div>
        
                                <div class="float-end">
                                    @include('layouts.shared.btnModal', ['save' => 'Enviar'])
                                </div>
                            </form>
                                </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    

    <!-- SCROLL TO TOP
    ================================================== -->
    <a href="#!" class="scroll-to-top"><i class="fas fa-angle-up" aria-hidden="true"></i></a>

    <!-- all js include start -->


    <!-- jQuery -->
    <script src="{{ asset('templates/crizal/plugins/jquery/jquery-3.1.0.min.js') }}"></script>

    <!-- bootstrap -->
    <script src="{{ asset('templates/crizal/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- slimscroll -->
    <script src="{{ asset('templates/crizal/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>

    <!-- uniform -->
    <script src="{{ asset('templates/crizal/plugins/uniform/js/jquery.uniform.standalone.js') }}"></script>

    <!-- switchery -->
    <script src="{{ asset('templates/crizal/plugins/switchery/switchery.min.js') }}"></script>

    <!-- theme core scripts -->
    <script src="{{ asset('templates/crizal/js/main.js') }}"></script>

    <!-- custom js -->
    <script src="{{ asset('templates/crizal/js/custom.js') }}"></script>

    <!-- all js include end -->
    @stack('scripts')
    @livewireScripts
</body>

</html>