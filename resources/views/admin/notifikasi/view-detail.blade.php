@extends('admin.layouts.layout-admin')
 
@section('title', 'Admin Page')
 
@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-md-10">
                <div class="justify-content-between mb-4">
                    <h1 class="h3 mb-3"><strong>Notifikasi</strong> Pengguna</h1>
                </div>
            </div>

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row ">
                            <div class="col-md-4 ">
                                <h5>Name</h5><p> {{ $notifikasi->nama_tamu}}</p>
                            </div>

                        </div>
                        <br>
                        {{-- <hr style="width:90%"> --}}
                        
                        <div class="row">
                            <div class="col-md-12 ">
                                <h5>Email</h5><p> {{ $notifikasi->email_tamu }}</p>
                            </div>
                        </div>
                        {{-- <hr> --}}
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <h5>Message</h5><p> {{ $notifikasi->pesan }}</p>
                            </div>
                        </div>
        <br>
                        {{-- <hr> --}}
                        <div class="row">
                            <div class="col-md-12">
                                <h5>Created Date</h5><p> {{ $notifikasi->created_at }}</p>
                            </div>
                        </div>
                        <br>
        
        
                        <a href="{{ url('/admin/notifikasi')}}" class='btn btn btn-dark'>Back</a>
                     
                    {{-- </div>
                  </div> --}}
            </div>
        </div>

    </div>
</div>
@endsection