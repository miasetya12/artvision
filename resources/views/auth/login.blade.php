@extends('auth.layouts.app')
 
@section('title', 'Login Page')
 
@section('content')
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-12 p-5 d-flex flex-column justify-content-center">
          <div class="form-description p">
            <h2 class="fw-bold">Selamat Datang Kembali</h2>
            <p class="opacity-50">Selamat Datang Kembali! Tolong masukkan detail anda</p>
          </div>
          <div class="form-body">
            <form method="POST" action="/login">
              @csrf
              <div class="mb-3">
                <label for="email" class="form-label fw-bold">Email</label>
                <input type="email" value="{{ old('email') }}" name="email" class="form-control p-3 f-Rmono" placeholder="Masukkan email anda" id="email" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label fw-bold">Password</label>
                <input type="password" name="password" class="form-control p-3 f-Rmono" placeholder="Masukkan password anda" id="password">
              </div>
              <div class="d-flex justify-content-between">
                <div class="mb-4 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label f-amiri" for="exampleCheck1">Ingat saya</label>
                </div>
              </div>
              <button type="submit" class="btn btn-dark btn-submit mb-2">Submit</button>
              <p class="text-center f-amiri">Belum punya akun ? <a href="/register" class="fw-bold f-amiri text-dark t-red">Sign up disini</a></p>
            </form>
          </div>
        </div>
        <div class="d-none col-md-6 d-md-block side-login-img"></div>
      </div>
    </div>
@endsection

@if(session('status'))
  @push('script')
  <script>
      Swal.fire({
      icon: '{{session('status')}}',
      title: '{{session('message')}}',
    })
  </script>
  @endpush
@endif