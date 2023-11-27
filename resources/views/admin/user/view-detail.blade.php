@extends('admin.layouts.layout-admin')
 
@section('title', 'Admin Page')
 
@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-md-10">
                <div class="justify-content-between mb-4">
                    <h1 class="h3 mb-3"><strong>Informasi</strong> Pengguna</h1>
                </div>
            </div>

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        
                        {{-- <hr> --}}
                        <div class="row">
                            <div class="col-md-12">
                                <h5>Nama Lengkap</h5><p> {{ $user->nama_lengkap_user }}</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <h5>Nama Panggilan</h5><p> {{ $user->nama_panggilan_user }}</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <h5>Telp Pengguna</h5><p> {{ $user->telp_user }}</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <h5>Alamat Pengguna</h5><p> {{ $user->alamat_user }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h5>Email</h5><p> {{ $user->email_user }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 ">
                                @if ($user->instansi)
                                <h5>Instansi</h5><p> {{ $user->instansi->nama_instansi }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h5>Deskripsi Diri</h5><p> {{ $user->deskripsi_diri }}</p>
                            </div>
                        </div>
                        {{-- <hr> --}}
                    
                        <br>
        
        
                        <a href="{{ url('/admin/user')}}" class='btn btn btn-dark'>Back</a>
                     
                    {{-- </div>
                  </div> --}}
            </div>
        </div>

    </div>
</div>
@endsection