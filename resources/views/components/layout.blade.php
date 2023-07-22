<!doctype html>
<html lang="pt-BR" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} - Controle de Veículos</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body class="d-flex h-100">
<div class="d-flex flex-column flex-shrink-0 p-3 bg-light h-100" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <span class="fs-4">Controle de Veículos</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="#" class="nav-link active" aria-current="page">
                Home
            </a>
        </li>
        <li class="nav-item">
            <a href="/marcas" class="nav-link" aria-current="page">
                Marcas
            </a>
        </li>
        <li class="nav-item">
            <a href="/modelos" class="nav-link" aria-current="page">
                Modelos
            </a>
        </li>
        <li class="nav-item">
            <a href="/veiculos" class="nav-link" aria-current="page">
                Veículos
            </a>
        </li>
    </ul>
</div>
<div class="row w-100 h-100">
    <div class="col h-100">
        <div class="bg-primary-subtle p-5 h-100">

            <div class="container mt-3">
                <div class="card">
                    <div class="card-header">
                        <h1>{{ $title }}</h1>
                    </div>
                    <div class="card-body">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
