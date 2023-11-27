@extends('admin.layouts.layout-admin')
 
@section('title', 'Admin Page')
 
@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3"><strong>Pelukis</strong> Karya Seni</h1>
            
            <div class="card">
                <div class="card-body">
                    <div class="justify-content-between mb-4">
                        <h1 class="h2 mb-0 text-gray-800 mb-4 ">Edit Pelukis</h1>
                    </div>

                    <hr>

                    <form class="forms-sample" action="{{ url('/admin/pelukis-update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 my-3">
                                <div class="form-group">
                                    <label>Nama Pelukis</label>
                                    <input type="text" value="{{$data_pelukis->nama_pelukis}}" name="nama_pelukis" class="form-control mt-2" value="{{ old('nama_pelukis') }}" placeholder="Masukan nama pelukis">
        
                                    @error('nama_pelukis')
                                    <small class="text-danger">Tolong Cek Kembali Nama Pelukis Anda</small>
                                    @enderror
                                </div>
                            </div>
        
                            <div class="col-lg-12 my-3">
                                <div class="form-group">
                                    <label>Nomor Telepon</label>
                                    <input type="text" value="{{$data_pelukis->telp_pelukis}}" name="nomor_telepon" class="form-control mt-2" value="{{ old('nomor_telepon') }}" placeholder="Masukan nomor telepon pelukis">
                                    @error('nomor_telepon')
                                    <small class="text-danger">Tolong cek Kembali Nomor Telepon Pelukis Anda</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12 my-3">
                                <div class="form-group">
                                    <label class="mb-3">Biografi Pelukis</label>

                                    <textarea name="biografi_pelukis" id="pelukisEditor">
                                        <?php echo($data_pelukis['biografi_pelukis']) ?>
                                    </textarea>
                                    @error('biografi_pelukis')
                                    <small class="text-danger">Tolong cek Kembali Biografi Pelukis Anda</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name='id' value="{{$data_pelukis->id_pelukis}}">
                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <a href="{{ url('/admin/pelukis')}}" class='btn btn-light'>Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
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