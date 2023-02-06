<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg" style="background-color: #AA5656">
        <div class="container">
            <a class="navbar-brand" href="/">LPM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                {{-- <li class="nav-item">
                    <a class="nav-link" href="/home">Form</a>
                    </li> --}}


                {{-- <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
                </li> --}}
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a type="button" style="background-color: #F1DBBF" class="btn" href="/login">Log-In</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <br>
    @yield('konten')
    <br>

    {{-- <div class="container">
        <div class="col mt-5 text-center">
            <div class="row justify-content-center">
                <div class="jumbotron">
                    <p class="lead"><small> ONAR - XII RPL</small></p>
                    <hr class="my-4">
                    <p>&copy; Copyright 2023</p>
                </div>
            </div>
        </div>
    </div> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
