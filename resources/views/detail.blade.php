@extends('template.templatedash')

@section('content')

 <div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-12">
            <div class="card">
                <div class="card-header">
                    <div class="text-center">
                        Detail Laporan
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>Nama</th>
                                <td>:</td>
                                <td>{{ $data->nama }}</td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>:</td>
                                <td>{{ $data->alamat }}</td>
                            </tr>
                            <tr>
                                <th>Nomor</th>
                                <td>:</td>
                                <td>{{ $data->nomor }}</td>
                            </tr>
                            <tr>
                                <th>Laporan</th>
                                <td>:</td>
                                <td>{{ $data->laporan }}</td>
                            </tr>
                            <tr>
                                <th>Tanggal</th>
                                <td>:</td>
                                <td>{{ $data->tanggal }}</td>
                            </tr>
                            <tr>
                                <th>Image</th>
                                <td>:</td>
                                <td> <img src="/storage/image/{{$data->upload}}" width="200" alt=""></td>
                            </tr>
                        </tbody>
                    </table>
                    <a class="btn btn-outline-dark" href="/laporan" role="button">Back</a>
                </div>
            </div>
        </div>
    </div>
 </div>
@endsection
