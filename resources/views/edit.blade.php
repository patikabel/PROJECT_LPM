@extends('template.templatedash')

@section('content')

 <div class="container">
    <div class="row">
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
        <div class="col-lg-6 col-12">
            <div class="card">
                <div class="card-header">
                    <div class="text-center">
                        Tanggapan petugas
                    </div>
                </div>
                <div class="card-body">
                <form action="/tanggapan/createOrUpdate/{{$data->id}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <div class="mb-3">
                                <label for="tanggapan" class="form-label">Tanggapan : </label>
                                <textarea class="form-control" id="tanggapan" name="tanggapan" rows="5" placeholder="Belum ada tanggapan">{{ $tanggapan   ->tanggapan ?? '' }}</textarea>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Button</button>

                    </form>
                    @if (Session::has('status'))
                        <div class="alert alert-success mt-2">
                            {{ Session::get('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
 </div>
@endsection
