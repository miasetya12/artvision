@extends('admin.layouts.layout-admin')
 
@section('title', 'Admin Page')
 
@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12 grid-margin stretch-card" data-aos="zoom-out-right">
                <div class="card">
                    <div class="card-body">
                        <div class="justify-content-between mb-4">
                            <h1 class="h2 mb-0 text-gray-800 mb-4 ">Tambah Periode Bidding</h1>
                        </div>
                        <hr>
        
                         @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
        
                        <form class="forms-sample" action="{{ url('/admin/periode-store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                               
                                <div class="col-lg-12 my-3">
                                    <div class="form-group">
                                        <label>Judul Event</label>
                                        <input type="text" name="judul_event" class="form-control" value="{{ old('judul_event') }}" placeholder="Masukan judul event">
            
                                        @error('judul_event')
                                        <small class="text-danger">Tolong Cek Kembali Judul Event Anda</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 my-3">
                                    <div class="form-group">
                                        <label>Deskripsi Periode</label>
                                        <input type="text" name="deskripsi_event" class="form-control" value="{{ old('deskripsi_event') }}" placeholder="Masukan deskripsi periode">
            
                                        @error('deskripsi_event')
                                        <small class="text-danger">Tolong Cek Kembali Deskripsi Periode Anda</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>   

                            <div class="row">
                                <div class="col-lg-4 my-3">
                                    <div class="form-group">
                                        <label>Tanggal Mulai</label>
                                        <input type="date" name="tanggal_mulai" class="form-control" value="{{ old('tanggal_mulai') }}" >
            
                                        @error('tanggal_mulai')
                                        <small class="text-danger">Tolong Cek Kembali Tanggal Mulai Periode</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4 my-3">
                                    <div class="form-group">
                                        <label>Tanggal Selesai</label>
                                        <input type="date" name="tanggal_selesai" class="form-control" value="{{ old('tanggal_selesai') }}">
            
                                        @error('tanggal_selesai')
                                        <small class="text-danger">Tolong Cek Kembali Tanggal Selesai Periode</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4 my-3">
                                    <div class="form-group">
                                         <label>Status Periode</label>
                                         {{-- <input type="text" name="status_periode" class="form-control" value="{{ old('status_periode') }}" placeholder="Masukan nama instansi"> --}}

                                         <select class="form-control form-select" name="status_periode" id="status_periode" placeholder="Masukan status periode">
                                         <option selected disabled hidden>{{old('status_periode')}} </option>
                                         @foreach($statuses as $status_periode)
                                             <option value={{$status_periode}}>{{($status_periode)}}</option>
                                         @endforeach
                                             
                                       </select>

                                        @error('status_periode')
                                        <small class="text-danger">Tolong Cek Kembali Status Periode Anda</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-8 my-3">
                                    <div class="form-group">
                                        <label>Foto</label>
                                        <input type="file" name="foto_event" class="form-control" value="{{ old('foto_event') }}" placeholder="Masukan nama instansi">
            
                                        @error('foto_event')
                                        <small class="text-danger">Tolong Cek Kembali Foto Event Anda</small>
                                        @enderror
                                    </div>
                                </div>

                            </div>
            
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <a href="{{ url('/admin/periode')}}" class='btn btn-light'>Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection