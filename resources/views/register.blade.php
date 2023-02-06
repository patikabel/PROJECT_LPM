@extends('layout.layout')

@section('konten')
 <div class="container">
    <div class="row justify-content-center">
        <div class="col col-md-10">
            <div class="card position-absolute top-50 start-50 translate-middle" style="width: 18rem;">
                <div class="card-body">
                    <form action="/register" method="POST">
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
                            <p>Sudah punya akun? <a href="/login">login disini!</a></p>
                            <button type="submit" class="btn btn-outline-dark">Submit</button>
                        </form>
                        </div>

            </div>
        </div>
    </div>
 </div>

@endsection
