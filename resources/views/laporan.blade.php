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
                <div class="col-sm-10">
                    <div class="page-header float-left">
                        <div class="page-title">
                    <h4 class="mt-4 text-center"><b>DAFTAR LAPORAN</b></h4>
                    <br>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col" class="text-center">No</th>
                            <th scope="col" class="text-center">Nama</th>
                            <th scope="col" class="text-center">Alamat</th>
                            <th scope="col" class="text-center">Nomor</th>
                            <th scope="col" class="text-center">Laporan</th>
                            <th scope="col" class="text-center">Tanggal</th>
                            <th scope="col" class="text-center">Image</th>
                            @auth
                            @if(auth()->user()->role == 'Administrator' || auth()->user()->role == 'Petugas')
                            <th scope="col" class="text-center">Action</th>
                            @endif
                            @endauth
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                              <th scope="row" class="text-center">{{ $no++ }}</th>
                              <td class="text-center">{{$item->nama}}</td>
                              <td class="text-center">{{$item->alamat}}</td>
                              <td class="text-center">{{$item->nomor}}</td>
                              <td class="text-center">{{$item->laporan}}</td>
                              <td class="text-center">{{$item->tanggal}}</td>
                              <td class="text-center">
                                <img src="/storage/image/{{$item->upload}}" width="50" alt="">
                              </td>
                              @auth
                              @if(auth()->user()->role == 'Administrator' || auth()->user()->role == 'Petugas')
                              <td class="text-center">
                                <a class="btn" style="background-color: #9EA1D4" href="/user/" role="button"><i class="bi bi-eye"></i></a>
                                <a class="btn" style="background-color: #A6BB8D" href="/dashboard/edit/{{ $item->id }}" role="button"><i class="bi bi-pencil-square"></i></a>
                                <a class="btn trash-laporan" id="{{$item->id}}" style="background-color: #FD8A8A" role="button" data-bs-toggle="modal" data-bs-target="#exampleModal3"><i class="bi bi-trash3"></i></a>
                              </td>
                            </tr>
                            @endif
                            @endauth
                            @endforeach
                            <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h4 class="modal-title fs-5" id="exampleModalLabel">Yakin Ingin Menghapus Laporan ?</h4>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <a type="button" id="button-trash-modal" href="" class="btn btn-primary">Delete</button>
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
                $('.trash-laporan').click(function(){
                    const getId = $(this).attr('id')
                    $('#button-trash-modal').attr('href', `/dashboard/delete/${getId}`)
                })
            </script>
        </div>
    </div>
@endsection



