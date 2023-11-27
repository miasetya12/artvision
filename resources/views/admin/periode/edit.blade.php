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
                            <h1 class="h2 mb-0 text-gray-800 mb-4 ">Edit Periode Bidding</h1>
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
                        <div class="col-md-12"> 
                            <form class="forms-sample" action="{{ url('/admin/periode-update-'.$periode->id_periode_bidding) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Foto</label> <br>
                                            <img src="{{ asset('/uploads/fotoPeriode/'.$periode->foto_event) }}" alt="" style="max-width: 250px; max-height:250px; display: flex;  justify-content: center;
                                            align-items: center;" class="my-3">

                                            
                                            <input type="file" name="foto_event" class="form-control" value="{{ $periode->foto_event }}" placeholder="Masukan nama instansi">
                                            @error('foto_event')
                                            <small class="text-danger">Tolong Cek Kembali Foto Event Anda</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-8">
                                        <div class="row">
                                
                                            <div class="col-lg-12 my-3">
                                                <div class="form-group">
                                                    <label>Judul Event</label>
                                                    <input type="text" name="judul_event" class="form-control" value="{{$periode->judul_event }}"  placeholder="Masukan judul event">
                        
                                                    @error('judul_event')
                                                    <small class="text-danger">Tolong Cek Kembali Judul Event Anda</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-12 my-3">
                                                <div class="form-group">
                                                    <label>Deskripsi</label>
                                                    <input type="text" name="deskripsi_event" class="form-control" value="{{$periode->deskripsi_event }}" placeholder="Masukan deskripsi periode">
                        
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
                                                    <input type="date" name="tanggal_mulai" class="form-control" value="{{$periode->tanggal_mulai }}" placeholder="Masukan nama instansi">
                        
                                                    @error('tanggal_mulai')
                                                    <small class="text-danger">Tolong Cek Kembali Tanggal Mulai Periode</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-4 my-3">
                                                <div class="form-group">
                                                    <label>Tanggal Selesai</label>
                                                    <input type="date" name="tanggal_selesai" class="form-control" value="{{$periode->tanggal_selesai }}" placeholder="Masukan nama instansi">
                        
                                                    @error('tanggal_selesai')
                                                    <small class="text-danger">Tolong Cek Kembali Tanggal Selesai Periode</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-4 my-3">
                                                <div class="form-group">
                                                    <label>Status Periode</label>
                                                    
                                                    <select class="form-control form-select" name="status_periode" id="status_periode">
                                                        <option selected disabled hidden value={{$periode->status_periode}}>{{$periode->status_periode}} </option>
                                                            @foreach($statuses as $status)
                                                                <option value={{$status}} @if(old('status_periode') == $status) selected @endif>{{$status}}</option>
                                                            @endforeach
                                                            
                                                    </select>
                                                    {{-- <label>Status Periode</label>
                                                    <input type="text" name="status_periode" class="form-control" value="{{ $periode->status_periode }}" placeholder="Masukan nama instansi">
                        --}}
                                                    @error('status_periode')
                                                    <small class="text-danger">Tolong Cek Kembali Status Periode Anda</small>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-lg-4 my-3">
                                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                                <a href="{{ url('/admin/periode')}}" class='btn btn-light'>Cancel</a>
                                            </div>
                                            

                                            
                                        </div>

                                    </div>


                                    
        
                                   
        
                                    {{-- <div class="row">
                                        <div class="col-lg-8 my-3">
                                            <div class="form-group">
                                                <label>Foto</label>
                                                <input type="file" name="foto_event" class="form-control" value="{{ $periode->foto_event }}" placeholder="Masukan nama instansi">
                                                <img src="{{ asset('/uploads/fotoPeriode/'.$periode->foto_event) }}" alt="" style="margin-top: 10px" width="60px" height="60px">
                                                {{-- <img src="{{ old('foto_event')}}" alt="" style="margin-top: 10px" width="60px" height="60px">
                                                @error('foto_event')
                                                <small class="text-danger">Tolong Cek Kembali Nama Instansi Anda</small>
                                                @enderror
                                            </div>
                                        </div>
        
                                    </div> --}}
                                </div>
                
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection