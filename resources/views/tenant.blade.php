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
                        <!--li class="active">
                            <a href="{{ route('home') }}">
                                <i class="fas fa-file-upload"></i>Archivos
                            </a>
                        </li-->
                        <li class="active">
                            <a href="{{ route('tenant') }}">
                                <i class="fas fa-file-alt"></i>Comprobantes de recaudo</a>
                        </li>
                        <!--li>
                        <a href="{{ route('tenant') }}">
                                <i class="fas fa-receipt"></i>Recibos</a>
                        </li>
                        <li>
                            <a href="{{ route('tenant') }}">
                                <i class="fas fa-money-check"></i>Extractos</a>
                        </li>
                        <li>
                            <a href="{{ route('tenant') }}">
                                <i class="fas fa-check-double"></i>Certificaciones</a>
                        </li-->
                        <li>
                            <a href="{{ route('tenant') }}">
                                <i class="fas fa-file-invoice"></i>Facturas de arrendamiento</a>
                        </li>
                        <!--li class="has-sub">
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
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.png" alt="avatar" />
                                                    </a>
                                                </div>
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
                        <div class="row">
                            <div class="col-lg-12">
                                <!--div class="card">
                                    <form method="post" action="{{ route('file') }}" enctype="multipart/form-data" class="form-horizontal">
                                        {{csrf_field()}}
                                        <div class="card-header">
                                            <strong>Archivos</strong>: Recibos, volantes, Extractos y certificados
                                        </div>
                                        <div class="card-body card-block">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-multiple-input" class=" form-control-label">Seleccione archivos:</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="file-multiple-input" name="filenames[]" multiple="" class="form-control-file">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary btn-sm">
                                                <i class="far fa-dot-circle"></i> Cargar
                                            </button>
                                        </div>
                                    </form>
                                </div-->
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left"></div>
                                    <!--div class="table-data__tool-right">
                                        <button onclick="exportar();">Export PDF</button>
                                        <a href="{{ route('recaudo/pdf') }}">Export PDF</a>
                                        <a href="{{ route('/download') }}">Download PDF</a>
                                        <a href="{{ route('/download') }}">Download2 PDF</a>
                                        <a href="http://localhost/luisoto//public/files/_filename.pdf" download="_filename">_filename</a>
                                    </div-->
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
                                    <table id="dt_recaudos" class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>CUENTA</th>
                                                <th>DOCUMENTO</th>
                                                <th>VALOR</th>
                                                <th>FECHA</th>
                                                <th></th>
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
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <!-- Main JS-->
    <script src="js/main.js"></script>
    <!-- DataTables JS -->
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            LoadDataTableRecaudos();
        });

        function LoadDataTableRecaudos() {
            $('#dt_recaudos').DataTable({
                language: {
                    url: "json/Spanish.json",
                },
                lengthMenu: [[10, 50, 100, -1], [10, 50, 100, "Todos"]],
                destroy: "true",
                processing: "true",
                serverSide: "true",
                order: [[ 0, "desc" ]],
                ajax: {
                    url: "recaudo/getRecaudos",
                    data: function (d) {
                        d.code = {{ Auth::user()->code }};
                    },
                },
                columns: [
                    {data: "id"},
                    {data: "cuenta"},
                    {data: "documento"},
                    {data: "valor_neto_1"},
                    {data: "fecha_max_recaudo_1"},
                    {data: "actions"},
                ]
            });
        }

        function exportar() {
            var _token = $('input[name=_token]').val();
            $.ajax({
                type: "POST",
                url : "{{ route('recaudo_pdf') }}",
                data: {
                    "_token": _token,
                    "code"  : {{ Auth::user()->code }},
                },
                dataType: "JSON",
                success: function(data) {
                    window.open(data, '_blank');
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    alert('FAIL');
                }
            });
        }

        $('#dt_recaudos').on('click', '.btn-info[data-remote]', function (e) {
            var _token = $('input[name=_token]').val();
            var code = $(this).data('remote');
            $.ajax({
                type: "POST",
                url : "recaudo/pdf",
                data: {
                    "_token": _token,
                    "code"  : code,
                },
                dataType: "JSON",
                success: function(data) {
                    window.open(data, '_blank');
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    alert('FAIL');
                }
            });
            /*var _token = $('input[name=_token]').val();
            $.ajax({
                type: "POST",
                url : "recaudo/pdf",
                data: {},
                //dataType: "JSON",
                success: function(data) {
                    //alert('OK');
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    alert('FAIL');
                }
            });*/
        });
    </script>

</body>

</html>
<!-- end document-->
