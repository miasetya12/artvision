@extends('admin.layouts.layout-admin')
 
@section('title', 'Admin Page')
 
@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="justify-content-between mb-4">
                            <h1 class="h2 mb-0 text-gray-800 mb-4 ">Edit Instansi</h1>
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
                        @endif                    --}}
                        <div class="col-md-8"> 
                            <form class="forms-sample" action="{{ url('/admin/instansi-update-'.$instansi->id_instansi) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="col-lg-8 my-3">
                                    <div class="form-group">
                                        <label>Nama Instansi</label>
                                        <input type="text" name="nama_instansi" class="form-control" value="{{$instansi->nama_instansi }}" placeholder="Masukan nama instansi">
                                        @error('nama_instansi')
                                        <small class="text-danger">Tolong Cek Kembali Nama Instansi Anda</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-10 my-3">
                                    <div class="form-group">
                                        <label>Deskripsi Instansi</label>
                                        <input type="text" name="deskripsi_instansi" class="form-control py-3" value="{{ $instansi->deskripsi_instansi }}" placeholder="Masukan deskripsi instansi">
                                        @error('deskripsi_instansi')
                                        <small class="text-danger">Tolong cek Kembali Deskripsi Instansi Anda</small>
                                        @enderror
                                    </div>       
                                </div>   
                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                <a href="{{ url('/admin/instansi')}}" class='btn btn-light'>Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection