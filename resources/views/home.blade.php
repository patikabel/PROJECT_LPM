@extends('layout.layout')

@section('konten')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-md-10">
                <div class="card position-relative top-50 start-50 translate-middle" style="width: 30rem;">
                    <div class="card-body">
                        <form action="/data" enctype="multipart/form-data" method="POST">
                            @csrf
                            <h4 class="text-center fw-bold">Laporan Pengaduan Masyarakat</h4>
                            <hr class="my-4">
                          <div class="mb-3">
                            <label for="nama" class="form-label">Nama : </label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="inputkan nama anda...">
                          </div>
                          <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Alamat : </label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="alamat" rows="2" placeholder="inputkan alamat anda..."></textarea>
                          </div>
                          <div class="mb-3">
                            <label for="nomor" class="form-label">No Handphone : </label>
                            <input type="number" class="form-control" id="quantity" name="nomor" placeholder="inputkan nomor telepon anda...">
                          </div>
                          {{-- <form>
                            <label for="quantity">Quantity (between 1 and 5):</label>
                            <input type="number" id="quantity" name="quantity" min="1" max="5">
                          </form> --}}
                          <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Laporan : </label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="laporan" rows="2" placeholder="inputkan keluhan anda..."></textarea>
                          </div>
                          <div class="mb-3">
                            <label for="date" class="form-label">Tanggal : </label>
                            <input type="date" id="date" name="tanggal">
                          </div>
                          <div class="mb-3">
                            <label for="upload" class="form-label">Upload Gambar :</label>
                          <div class="input-group mb-3">
                            <input type="file" class="form-control" id="upload" name="upload">
                            <label class="input-group-text" for="upload">Upload</label>
                          </div>

                          <input class="btn btn-outline-dark" type="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
