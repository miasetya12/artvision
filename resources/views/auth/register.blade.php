@extends('auth.layouts.app')
 
@section('title', 'Register Page')

@section('content')


<div class="container">
  <div class="row">
    <div class="col-md-12 col-sm-12 p-5">
      <div class="form-heading">
        <h1 class= "fw-bold">Create an Account</h1>
        <p class="opacity-50 mb-5" >Sign up now and go bidding!</p>
      </div>
      <div class="form-body">
        <form method="POST" action="/register">
          @csrf
          {{-- Form Pertama--}}
          <div class="row justify-content-start">
            <div class="col-md-5 col-sm-12 mb-3">
              <div class="form-group">
                <label for="nama_lengkap" class="form-label fw-bold">Nama Lengkap</label>
                <input type="text" value="{{ old('nama_lengkap') }}" name="nama_lengkap" class="form-control p-2 f-Rmono" placeholder="Masukkan nama lengkap anda" id="nama_lengkap">
              </div>
            </div>

            <div class="col-md-3 col-sm-12 mb-3">
              <div class="form-group">
                <label for="nama_panggilan" class="form-label fw-bold">Nama Panggilan</label>
                <input type="text" value="{{ old('nama_panggilan') }}" name="nama_panggilan" class="form-control p-2 f-Rmono" placeholder="Masukkan nama panggilan" id="nama_panggilan">
              </div>
            </div>

            <div class="col-md-4 col-sm-12 mb-3">
              <div class="form-group">
                <label for="nomor_telepon" class="form-label fw-bold">Nomor telepon</label>
                <input type="number" value="{{ old('nomor_telepon') }}" name="nomor_telepon" class="form-control p-2 f-Rmono" placeholder="Masukkan nomor telepon anda" id="nomor_telepon">
              </div>
            </div>
          </div>

          {{-- Form Kedua --}}
          <div class="row justify-content-start">
            <div class="col-md-6 col-sm-12 mb-3">
              <div class="form-group">
                <label for="alamat" class="form-label fw-bold">Address</label>
                <input type="text" value="{{ old('alamat') }}" name="alamat" class="form-control p-2 f-Rmono" placeholder="Masukkan alamat anda" id="alamat">
              </div>
            </div>

            <div class="col-md-6 col-sm-12 mb-3">
              <div class="form-group">
                <label for="instansi" class="form-label fw-bold">Instansi</label>
                <select class="form-control form-select f-Rmono" name="instansi" id="instansi">
                  <option selected disabled hidden>Pilih Salah Satu Instansi</option>
                  @foreach($data_instansi as $item)
                      <option value={{$item->id_instansi}} {{ old('instansi') == $item->id_instansi ? 'selected' : '' }}>{{$item->nama_instansi}}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>

        {{-- Form Ketiga --}}
        <div class="row justify-content-start">
          <div class="col-md-5 col-sm-12 mb-3">
            <div class="form-group">
              <label for="email" class="form-label fw-bold">Email</label>
              <input type="email" value="{{ old('email') }}" name="email" class="form-control p-2 f-Rmono" placeholder="Masukkan email anda" id="email">
            </div>
          </div>

          <div class="col-md-7 col-sm-12 mb-3">
            <div class="form-group">
              <label for="deskripsi_diri" class="form-label fw-bold">Deskripsi Diri</label>
              <input type="text" value="{{ old('deskripsi_diri') }}" name="deskripsi_diri" class="form-control p-2 f-Rmono" placeholder="Deskripsikan diri anda" id="deskripsi_diri">
            </div>
          </div>
        </div>

        {{-- Form Keempat --}}
        <div class="row justify-content-start">
          <div class="col-md-6 col-sm-12 mb-3">
            <div class="form-group">
              <label for="password" class="form-label fw-bold">Password</label>
              <input type="password" name="password" class="form-control p-2 f-Rmono" placeholder="Masukkan password anda" id="password">
            </div>
          </div>

          <div class="col-md-6 col-sm-12 mb-3">
            <div class="form-group">
              <label for="konfirmasi_password" class="form-label fw-bold">Confirm Password</label>
              <input type="password" name="konfirmasi_password" class="form-control p-2 f-Rmono" placeholder="Masukkan password anda" id="konfirmasi_password">
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-dark btn-submit mb-2 mt-3">Registrasi</button>
        <p class="form-label text-center">Sudah memiliki akun?<a href="/login" class="form-label fw-bold text-dark t-red"> Sign in</a></p>
      </form>
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