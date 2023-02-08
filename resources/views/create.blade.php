@extends('template.templatedash')

@section('content')

    <div id="right-panel" class="right-panel">
        <header id="header" class="header">
            <div class="header-menu">
                <div class="col-sm-7">
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>
                        <div class="dropdown for-notification">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="count bg-danger">3</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="notification">
                            <p class="red">You have 3 Notification</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

        </header><!-- /header -->


        <div class="breadcrumbs">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-5">
                        <br>
                        <div class="card" style="width: 25rem;">
                            <div class="card-body">
                                <form action="/admin/register" method="POST">
                                    @csrf
                                        <h4 class=" text-center fw-bold">REGISTRASI</h4>
                                        <hr class="my-4">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Username :</label>
                                            <input type="text" name="name" class="form-control" autocomplete="off" placeholder="username anda...">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Email :</label>
                                            <input type="email" name="email" class="form-control" autocomplete="off" placeholder="email anda...">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Password :</label>
                                            <input type="password" name="password" class="form-control" autocomplete="off" placeholder="password anda...">
                                        </div>
                                        <button type="submit" class="btn btn-outline-dark">Submit</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

            {{-- <div class="content mt-3">

                <div class="animated fadeIn">
                    Isi home
                </div>

            </div> --}}
    </div>
@endsection



