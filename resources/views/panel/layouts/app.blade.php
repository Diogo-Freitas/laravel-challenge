
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">
    <meta name="author" content="Diogo-Freitas">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Custom fonts -->
    <link href="http://localhost/vendor/fontawesome-free-6.0.0-web/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles -->
    <link href="http://localhost/css/panel.css" rel="stylesheet">

    <link rel="shortcut icon" href="http://localhost/img/favicon.ico">
    <title>Panel - Tips</title>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('panel.layouts.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @include('panel.layouts.topbar')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    @include('panel.layouts.alerts')
                    
                    @yield('main')

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           @include('panel.layouts.footer')

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <script src="http://localhost/vendor/jquery/jquery.min.js"></script>
    <script src="http://localhost/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="http://localhost/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="http://localhost/js/panel.js"></script>

        <!-- Exibir alerta de configrmação quando clicar em excluir -->
    <script src="http://localhost/vendor/sweetalert2/sweetalert2.min.js"></script>
    <script src="http://localhost/vendor/sweetalert2/sweetalert2.script.js"></script>
    <link rel="stylesheet" href="http://localhost/vendor/sweetalert2/sweetalert2.min.css">

    @yield('scripts')

</body>

</html>