@extends('layoutadmin.layoutadmin')

@section('konten')
 <div class="container">
    <div class="row justify-content-center">
        <div class="col col-md-10">
            @if (session()->has('error'))
                <div class="d-flex justify-content-center">
                    <div class="alert alert-danger alert-dismissible fade show" style="width: 18rem;" role="alert">
                        {{session('error')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
                    @endif
                     @if (session()->has('success'))
                     <div class="d-flex justify-content-center">
                         <div class="alert alert-success alert-dismissible fade show mb-3" style="width: 18rem;" role="alert">
                             {{session('success')}}
                             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                         </div>
                     </div>
                     @endif
            <div class="card position-absolute top-50 start-50 translate-middle" style="width: 18rem;">
                <div class="card-body">
                    <form action="/datalogin" method="POST">
                    @csrf
                        <h4 class=" text-center fw-bold">LOG-IN</h4>
                        <hr class="my-4">
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Email address</label>
                              <input type="email" name="email" class="form-control @if(session('error')) is-invalid @endif" id="exampleInputEmail1" autocomplete="off" placeholder="email anda...">
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">Password</label>
                              <input type="password" name="password" class="form-control" id="exampleInputPassword1" autocomplete="off" placeholder="password anda...">
                            </div>
                        <p>Belum punya akun? <a href="/register">daftar disini!</a></p>
                        <button type="submit" class="submit btn btn-outline-dark">Submit</button>
                    </form>

                </div>
              </div>
        </div>
    </div>
 </div>

@endsection
