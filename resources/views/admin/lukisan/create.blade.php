@extends('admin.layouts.layout-admin')
 
@section('title', 'Admin Page')
 
@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <div class="card">
            <div class="card-body">
                <div class="justify-content-between mb-4">
                    <h1 class="h2 mb-0 text-gray-800 mb-4 ">Tambah Lukisan</h1>
                </div>

                <hr>

                <form class="forms-sample" action="{{ url('/admin/pelukis-store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12 my-3">
                            <div class="form-group">
                                <label>Nama Pelukis</label>
                                <input type="text" name="nama_pelukis" class="form-control mt-2" value="{{ old('nama_lukisan') }}" placeholder="Masukan nama pelukis">
    
                                @error('nama_pelukis')
                                <small class="text-danger">Tolong Cek Kembali Pelukis Anda</small>
                                @enderror
                            </div>
                        </div>
    
                        <div class="col-lg-12 my-3">
                            <div class="form-group">
                                <label>Judul Lukisan</label>
                                <input type="text" name="judul_lukisan" class="form-control mt-2" value="{{ old('judul_lukisan') }}" placeholder="Masukan judul lukisan">
                                @error('judul_lukisan')
                                <small class="text-danger">Tolong cek Kembali Nomor Telepon Pelukis Anda</small>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-12 my-3">
                            <div class="form-group">
                                <label class="mb-3">Deskripsi Lukisan</label>

                                <textarea name="deskripsi_lukisan" id="pelukisEditor">
                                    
                                </textarea>
                                @error('deskripsi_lukisan')
                                <small class="text-danger">Tolong cek Kembali Deskripsi Lukisan Anda</small>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-12 my-3">
                            <div class="form-group">
                                <label class="mb-3">Foto Lukisan</label>

                                <input type="" name="foto_lukisan" class="form-control mt-2">
                                @error('deskripsi_lukisan')
                                <small class="text-danger">Tolong cek Kembali Foto Lukisan Anda</small>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-12 my-3">
                            <div class="form-group">
                                <label class="mb-3">Harga Awal</label>

                                <input type="number" name="harga_awal" class="form-control mt-2">
                                @error('harga_awal')
                                <small class="text-danger">Tolong cek Kembali Harga Awal Lukisan Anda</small>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-12 my-3">
                            <div class="form-group">
                                <label class="mb-3">Status Lukisan</label>

                                <input type="number" name="status_lukisan" class="form-control mt-2">
                                @error('status_lukisan')
                                <small class="text-danger">Tolong cek Kembali Status Lukisan Anda</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="{{ url('/admin/pelukis')}}" class='btn btn-light'>Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script>
    tinymce.init({
      selector: 'textarea#pelukisEditor', // Replace this CSS selector to match the placeholder element for TinyMCE
      plugins: 'lists',
      toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist'
    });
</script>
@endpush