<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Diogo-Freitas">

    <title>Laravel - Dicas</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('vendor/fontawesome-free-6.0.0-web/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        #login {
            float: right;
        }

        .bg-purple {
            display: flex;
            justify-content: space-between;
        }

        .logo a {
            font-weight: bold;
            color: #fff;
            text-decoration: none;
        }

        #login a {
            color: white;
            text-decoration: none;
            padding: 10px;
        }

    </style>


    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.1/examples/offcanvas-navbar/offcanvas.css" rel="stylesheet">
</head>

<body class="bg-light">

    <main class="container">
        <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm">

            <span class="logo"><a href="{{ route('site.home') }}"><img class="me-3" src="https://getbootstrap.com/docs/5.1/assets/brand/bootstrap-logo-white.svg" alt="" width="48" height="38"> Dicas<a></span>

            <div id="login">
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 pt-1 py-4 pb-4 sm:block">
                        @auth
                            <a href="{{ route('panel.tips') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">{{ __('Log in') }}</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">{{ __('Register') }}</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div><!-- #login -->
        </div>

        <form id="form-search" action="{{ route('site.home') }}" method="GET">
            <div class="row">
                <div class="col-xl-3">
                    <div class="form-group ">
                        <div class="input-group mb-3 ">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Tipo</span>
                            </div><!-- .input-group-prepend -->
                            <select name="vehicle" class="form-control " onchange="this.form.submit()">
                                <option value="">Todos</option>
                                @foreach ($vehicles as $vehicle)
                                    <option value="{{ $vehicle->id }}" {{ $vehicle->id == request('vehicle') ? 'selected' : '' }}>{{ __($vehicle->vehicle) }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback"></div>
                        </div><!-- .input-group -->
                    </div><!-- .form-group -->
                </div><!-- .col-xl-3 -->
                <div class="col-xl-3">
                    <div class="input-group mb-3">
                        <input name="brand" value="{{ request('brand') }}" type="search" class="form-control" placeholder="Marca">
                    </div><!-- .input-group -->
                </div><!-- .col-xl-3 -->
                <div class="col-xl-3">
                    <div class="input-group mb-3">
                        <input name="model" value="{{ request('model') }}" type="search" class="form-control" placeholder="Modelo">
                    </div><!-- .input-group -->
                </div><!-- .col-xl-3 -->
                <div class="col-xl-3">
                    <div class="input-group mb-3">
                        <input name="version" value="{{ request('version') }}" type="search" class="form-control" placeholder="Versão">
                    </div><!-- .input-group -->
                </div><!-- .col-xl-3 -->
            </div><!-- .row -->
            <button type="submit" class="btn btn-primary">Buscar</button>
        </form><!-- #form-search -->

        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <h6 class="border-bottom pb-2 mb-0">Recentes</h6>

            @foreach ($tips as $tip)
                <div class="d-flex text-muted pt-3">
                    <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false">
                        @if ($tip->id % 2 == 0)
                            <rect width="100%" height="100%" fill="#e83e8c" /><text x="50%" y="50%" fill="#e83e8c" dy=".3em">32x32</text>
                        @elseif($tip->id % 3 == 0)
                            <rect width="100%" height="100%" fill="#007bff" /><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>
                        @else
                            <rect width="100%" height="100%" fill="#6f42c1" /><text x="50%" y="50%" fill="#6f42c1" dy=".3em">32x32</text>
                        @endif
                    </svg>
                    <p class="pb-3 mb-0 small lh-sm border-bottom">
                        <strong class="d-block text-gray-dark">Mrs. Shemar McDermott</strong><br>
                        <span>{{ $tip->brand->brand }}</span> - <span>{{ $tip->model->model }} @isset($tip->version)<small>({{ $tip->version  }})</small>@endisset</span><br><br>
                        {{ $tip->tip }}
                    </p>
                </div>
            @endforeach
           
        </div>
    </main>


    <script src="https://getbootstrap.com/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>
