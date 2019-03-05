<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/icon/favicon.png" />

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <!--link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all"-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="LuisSotoLogo" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="{{ route('home') }}">
                                <i class="fas fa-file-upload"></i>Archivos
                            </a>
                        </li>
                        <li class="active">
                            <a href="{{ route('users') }}">
                                <i class="fas fa-users"></i>Usuarios</a>
                        </li>
                        <!--li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li-->
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <div class="form-header"></div>
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.png" alt="avatar" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">{{ Auth::user()->name }}</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image"><a href="#"><img src="images/icon/avatar-01.png" alt="avatar" /></a></div>
                                                <div class="content">
                                                    <!--h5 class="name"><a href="#">{{ Auth::user()->name }}</a></h5-->
                                                    <span class="email">{{ Auth::user()->email }}</span>
                                                    <h5 class="email">{{ Auth::user()->roles()->first()->description }}</h5>
                                                </div>
                                            </div>
                                            <!--div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Perfil</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div-->
                                            <div class="account-dropdown__footer">
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    <i class="zmdi zmdi-power"></i><span class="text"> Cerrar sesión</span>
                                                </a>
                                                <!--a href="#"><i class="zmdi zmdi-power"></i>Logout</a-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div id="div_form_user" class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="table-data__tool">
                                            <div class="table-data__tool-left">
                                                <i class="fas fa-user"></i> <strong> Registrar</strong> Usuario
                                            </div>
                                            <div class="table-data__tool-right">
                                                <button class="btn btn-danger btn-sm" onclick="HideFormRegisterUser();">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Tipo de Usuario</label>
                                                </div>
                                                <div class="col col-md-9">
                                                    <div class="form-check-inline form-check">
                                                        <label for="inline-radio1" class="form-check-label ">
                                                            <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
                                                            <input type="hidden" id="id" name="id">
                                                            <input type="radio" name="typeuser" checked value="inquilino" class="form-check-input">Inquilino&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        </label>
                                                        <label for="inline-radio2" class="form-check-label ">
                                                            <input type="radio" name="typeuser" value="propietario" class="form-check-input">Propietario
                                                        </label>
                                                        <!--label for="inline-radio3" class="form-check-label ">
                                                            <input type="radio" id="inline-radio3" name="inline-radios" value="option3" class="form-check-input">Three
                                                        </label-->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="name" class=" form-control-label">Nombre Completo</label>
                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <input type="text" id="name" name="name" class="form-control"  placeholder="Aa" autofocus>
                                                    <!--span class="help-block">Nombre completo.</span-->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="tipodocumento" class=" form-control-label">Tipo Documento</label>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <select name="tipodocumento" id="tipodocumento" class="form-control">
                                                        <option value="1">Cedula de Ciudadanía</option>
                                                        <option value="2">Cedula de Extranjería</option>
                                                        <option value="3">Pasaporte</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="code" class=" form-control-label">Documento</label>
                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <input type="text" id="code" name="code" class="form-control" placeholder="Solo números">
                                                    <!--span class="help-block">Número de documento.</span-->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email" class=" form-control-label">Correo Electrónico</label>
                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <input type="email" id="email" name="email"  placeholder="@" class="form-control">
                                                    <!--span class="help-block">Contacto y notificaciones.</span-->
                                                </div>
                                            </div>
                                            <div id="div_change_password" class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Cambiar Contraseña</label>
                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <label class="switch switch-3d switch-primary mr-3">
                                                        <input id="change_password" type="checkbox" name="change_password" class="switch-input">
                                                        <span class="switch-label"></span>
                                                        <span class="switch-handle"></span>
                                                    </label>
                                                    <input id="status_change_password" type="hidden" name="status_change_password" value="No" readonly="true">
                                                </div>
                                            </div>
                                            <div id="div_password" class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password" class=" form-control-label">Contraseña</label>
                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <input type="password" id="password" name="password" class="form-control" placeholder="Mínimo 6 caracteres">
                                                    <!--span class="help-block">Mínimo 6 digitos, sin espacios.</span-->
                                                </div>
                                            </div>
                                            <div id="div_confirmation" class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="confirmation" class=" form-control-label">Re - Contraseña</label>
                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <input type="password" id="confirmation" name="confirmation" class="form-control" placeholder="Confirmar">
                                                    <!--span class="help-block">Mínimo 6 digitos, sin espacios.</span-->
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <button type="button" id="action_form_user" class="btn btn-primary btn-sm">
                                            <i id="icon_action_use" class="far fa-dot-circle"></i>
                                            <div id="txt_action_user" style='text-align:left;'> Registrar</div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left"></div>
                                    <div class="table-data__tool-right">
                                        <button class="au-btn au-btn--green au-btn--small" onclick="ShowFormRegisterUser();">
                                            <i class="fas fa-plus"></i> Usuario</button>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table id="dt_users" class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>NOMBRE</th>
                                                <th>E-MAIL</th>
                                                <th>ACCIONES</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js"></script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js"></script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <!-- DataTables JS -->
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
    <!-- Main JS-->
    <script src="js/main.js"></script>
    <!-- Notify JS-->
    <script type="text/javascript" src="js/notify.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            //PNotify.prototype.options.styling = "bootstrap3";
            $('#div_form_user').hide();
            $('#div_change_password').hide();
            /*$("#i_icon_user").attr('class', 'fas fa-user');
            $('#h5_title_form_user').text('Registrar Usuario');
            $('#label_change_password').attr('style', 'color: #49AFCD !important');
            $('#div_change_password').hide();
            $('#div_current_password').hide();*/

            // getUsers()
            LoadDataTableUsers();
        });

        function LoadDataTableUsers() {
            // Datatable Usuarios
            $('#dt_users').DataTable({
                language: {
                    url: "json/Spanish.json",
                },
                lengthMenu: [[10, 50, 100, -1], [10, 50, 100, "Todos"]],
                destroy: "true",
                processing: "true",
                serverSide: "true",
                order: [[ 0, "desc" ]],
                //scrollX: "true",
                ajax: "{{ route('user/getUsers') }}",
                data: {
                    //"dateConsult":$('#dateConsult').val(),
                },
                columns: [
                    {data: "id"},
                    {data: "complet_surname"},
                    {data: "email"},
                    //{data: "r_description"},
                    //{data: "st_name"},
                    {data: "actions"},
                ]
            });
        }

        function HideFormRegisterUser() {
            if ($('#div_form_user').is(':visible')) {
                $('#div_form_user').hide();
            }
        }

        function ShowFormRegisterUser() {
            //Limpiar campos
            //$('#id').val('');
            $('#name').val('');
            $('#code').val('');
            $('#email').val('');

            if ($('#div_form_user').is(':hidden')) {
                $('#div_form_user').show();
            }

            $('#div_change_password').hide();
            $('#div_password').show();
            $('#div_confirmation').show();
        }

        function ValidateEmail($email) {
            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            return emailReg.test( $email );
        }

        $('input[name=change_password]').on('change', function() {
            if ($(".switch-input").is(':checked') ) {
                $('input[name=status_change_password]').val('Si');
                $('input[name=password]').prop('required', true);
                $('input[name=confirmation]').prop('required', true);
            } else {
                $('input[name=status_change_password]').val('No');
                $('input[name=password]').val('');
                $('input[name=confirmation]').val('');
                $('input[name=password]').prop('required', false);
                $('input[name=confirmation]').prop('required', false);
            }

            if ($('#div_password').is(':hidden')) {
                $('#div_password').show();
            } else {
                $('#div_password').hide();
            }

            if ($('#div_confirmation').is(':visible')) {
                $('#div_confirmation').hide();
            } else {
                $('#div_confirmation').show();
            }
        });

        // Crear o Actualizar Usuario
        $('#action_form_user').on('click', function (e) {
            //Validaciones
            if ($('input[name=name]').val().trim().length > 5) {
                if ($('input[name=code]').val().trim().length > 5) {
                    if ($('input[name=email]').val().trim().length > 5) {
                        if (ValidateEmail($('input[name=email]').val().trim())) {
                            //Registrar Usuario
                            if ($('#txt_action_user').text().trim() == 'Registrar') {
                                alert($('#txt_action_user').text().trim());
                                $.ajax({
                                    type: "POST",
                                    url : "{{ route('user/createUser') }}",
                                    data: {
                                        "_token": $('input[name=_token]').val(),
                                        "typeuser": $('input[name=typeuser]').val(),
                                        "name": $('input[name=name]').val(),
                                        "code": $('input[name=code]').val(),
                                        "email": $('input[name=email]').val(),
                                        "password": $('input[name=password]').val(),
                                        "confirmation": $('input[name=confirmation]').val(),
                                    },
                                    dataType: "JSON",
                                    success: function(data) {
                                        if(data.status == "OK") {
                                            HideFormRegisterUser();
                                            $('input[name=name]').val('');
                                            $('input[name=code]').val('');
                                            $('input[name=email]').val('');
                                            $('input[name=password]').val('');
                                            $('input[name=confirmation]').val('');
                                            $.notify(data.text, "success");
                                        }
                                        if(data.status == "ERROR") {
                                            $.notify(data.text, "warn");
                                        }
                                        LoadDataTableUsers();
                                    },
                                    error: function (jqXHR, textStatus, errorThrown) {
                                        $.notify("Fallo interno.", "error");
                                    }
                                });
                            }

                            // Actualizar Usuario
                            if ($('#txt_action_user').text().trim() == 'Actualizar') {
                                alert($('#txt_action_user').text().trim());
                                $.ajax({
                                    type: "POST",
                                    url : "{{ route('user/updateUser') }}",
                                    data: {
                                        "_token": $('input[name=_token]').val(),
                                        "id": $('input[name=id]').val(),
                                        //"typeuser": $('input[name=typeuser]').val(),
                                        "name": $('input[name=name]').val(),
                                        //"code": $('input[name=code]').val(),
                                        //"email": $('input[name=email]').val(),
                                        //"password": $('input[name=password]').val(),
                                        //"confirmation": $('input[name=confirmation]').val(),
                                    },
                                    dataType: "JSON",
                                    success: function(data) {
                                        if(data.status == "OK") {
                                            HideFormRegisterUser();
                                            $('input[name=name]').val('');
                                            $('input[name=code]').val('');
                                            $('input[name=email]').val('');
                                            $('input[name=password]').val('');
                                            $('input[name=confirmation]').val('');
                                            $.notify(data.text, "success");
                                        }
                                        if(data.status == "ERROR") {
                                            $.notify(data.text, "warn");
                                        }
                                        LoadDataTableUsers();
                                    },
                                    error: function (jqXHR, textStatus, errorThrown) {
                                        $.notify("Fallo interno.", "error");
                                    }
                                });
                            }
                        } else {
                            $.notify("El correo electrónico no es válido.", "warn");
                        }
                    } else {
                        $.notify("El campo de correo electrónico se encuentra vacio.", "warn");
                    }
                } else {
                    $.notify("El documento requiere mínimo 6 caracteres.", "warn");
                }
            } else {
                $.notify("El nombre requiere mínimo 6 caracteres.", "warn");
            }
        });

        // Cargar Info Usuario
        $('#dt_users').on('click', '.btn-info[data-remote]', function (e) {
            if ($('#div_form_user').is(':hidden')) {
                $('#div_form_user').show();
            }
            $("#icon_action_user").attr('class', 'far fa-dot-circle');
            $('#txt_action_user').text('Actualizar');
            $('#div_change_password').show();
            $('#div_password').hide();
            $('#div_confirmation').hide();

            var id_user = $(this).data('remote');
            $.ajax({
                type: "POST",
                url : "{{ route('user/getUserById') }}",
                data: {
                    "_token"    : $('input[name=_token]').val(),
                    "id_user"   : id_user,
                },
                dataType: "JSON",
                success: function(data) {
                    $('#id').val(data.id);
                    $('#name').val(data.name);
                    $('#code').val(data.code);
                    $('#email').val(data.email);
                },
                error: function (jqXHR, textStatus, errorThrown){
                    /*new PNotify({
                        type: 'fail',
                        title: 'Error',
                        text: 'Error en el servidor',
                    });*/
                }
            });
        });
    </script>

</body>

</html>
<!-- end document-->
