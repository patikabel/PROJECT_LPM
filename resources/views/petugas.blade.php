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
            <div class="row justify-content-center">
                <div class="col-sm-6">
                    <div class="page-header float-left">
                        <div class="page-title justify-content-center">
                            <h4 class="mt-4 text-center"><b>DAFTAR PETUGAS</b></h4>
                            <br>
                            <a class="btn btn-outline-success" href="/create" role="button">CREATE</a>
                            <br>
                            <br>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col" class="text-center">No</th>
                                    <th scope="col" class="text-center">Nama</th>
                                    <th scope="col" class="text-center">Email</th>
                                    @auth
                                    @if(auth()->user()->role == 'Administrator')
                                    <th scope="col" class="text-center">Action</th>
                                    @endif
                                    @endauth
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($petugas as $item)
                                    <tr>
                                    <th scope="row" class="text-center">{{ $item->id }}</th>
                                    <td class="text-center">{{$item->name}}</td>
                                    <td class="text-center">{{$item->email}}</td>
                                    @auth
                                    @if(auth()->user()->role == 'Administrator')
                                    <td class="text-center">
                                        <a class="btn" style="background-color: #9EA1D4" href="/user/" role="button"><i class="bi bi-eye"></i></a>
                                        <a class="btn" style="background-color: #A6BB8D" href="/dashboard/edit/{{ $item->id }}" role="button"><i class="bi bi-pencil-square"></i></a>
                                        <a class="btn trash-petugas" id="{{$item->id}}" style="background-color: #FD8A8A" role="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-trash3"></i></a>
                                    </td>
                                    </tr>
                                    @endif
                                    @endauth
                                    @endforeach
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h4 class="modal-title fs-5" id="exampleModalLabel">Yakin Ingin Menghapus Data Petugas ?</h4>
                                            {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <a type="button" id="button-trash-modal" href="/dashboard/delete/{{ $item->id }}" class="btn btn-primary">Delete</button>
                                                </a>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('.trash-petugas').click(function(){
                    const getId = $(this).attr('id')
                    $('#button-trash-modal').attr('href', `/dashboard/petugas/delete/${getId}`)
                })
            </script>
        </div>
    </div>
@endsection



