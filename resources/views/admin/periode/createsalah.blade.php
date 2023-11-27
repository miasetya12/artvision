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
                            <h1 class="h2 mb-0 text-gray-800 mb-4 ">Tambah Instansi</h1>
                        </div>
                        <hr>
        
                        {{-- @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif --}}
        
                        <form class="forms-sample" action="{{ url('/admin/periode-store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                               
                                <div class="col-lg-12 my-3">
                                    <div class="form-group">
                                        <label>Judul Event</label>
                                        <input type="text" name="judul_event" class="form-control" value="{{ old('judul_event') }}" placeholder="Masukan nama instansi">
            
                                        @error('judul_event')
                                        <small class="text-danger">Tolong Cek Kembali Nama Instansi Anda</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 my-3">
                                    <div class="form-group">
                                        <label>Deskripsi</label>
                                        <textarea type="text" name="deskripsi_event" class="form-control" value="{{ old('deskripsi_event') }}" placeholder="Masukan nama instansi"> </textarea>
            
                                        @error('deskripsi_event')
                                        <small class="text-danger">Tolong Cek Kembali Nama Instansi Anda</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>   

                            <div class="row">
                                <div class="col-lg-4 my-3">
                                    <div class="form-group">
                                        <label>Tanggal Mulai</label>
                                        <input type="date" name="tanggal_mulai" class="form-control" value="{{ old('tanggal_mulai') }}" placeholder="Masukan nama instansi">
            
                                        @error('tanggal_mulai')
                                        <small class="text-danger">Tolong Cek Kembali Nama Instansi Anda</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4 my-3">
                                    <div class="form-group">
                                        <label>Tanggal Selesai</label>
                                        <input type="date" name="tanggal_selesai" class="form-control" value="{{ old('tanggal_selesai') }}" placeholder="Masukan nama instansi">
            
                                        @error('tanggal_selesai')
                                        <small class="text-danger">Tolong Cek Kembali Nama Instansi Anda</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4 my-3">
                                    <div class="form-group">
                                         <label>Status Periode</label>
                                        <select class="form-control form-select" name="status_periode" id="status_periode">
                                            <option selected disabled hidden>Status Periode</option>
                                            @foreach($statuses as $status)
                                                <option value={{$status}}>{{$status}}</option>
                                            @endforeach
                                          </select>
                                        {{-- <label>Status Periode</label>
                                        <input type="text" name="status_periode" class="form-control" value="{{ old('status_periode') }}" placeholder="Masukan nama instansi">
             --}}
                                        @error('status_periode')
                                        <small class="text-danger">Tolong Cek Kembali Nama Instansi Anda</small>
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
                                        <small class="text-danger">Tolong Cek Kembali Nama Instansi Anda</small>
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