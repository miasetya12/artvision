@extends('admin.layouts.layout-admin')
 
@section('title', 'Admin Page')
 
@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="row">
                    <div class="col-md-10">
                        <div class="justify-content-between mb-4">
                            <h1 class="h3 mb-3"><strong>Instansi</strong> Pengguna</h1>
                        </div>
                    </div>
                    
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-end">
                            <a href="{{ url('/admin/instansi-create') }}" class="btn btn-primary ml-4">Tambah Instansi</a> <br>
                        </div>
                        <br>
                        <div class="table-responsive"> 
                            <table class="table table-striped" class="display nowrap">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nama Instansi</th>
                                        <th>Deskripsi Instansi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1 ?>
                                    @foreach ($instansi as $s)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $s->nama_instansi }}</td>
                                        <td>{{ $s->deskripsi_instansi  }}</td>
                                        <td>
                                            <div style="display: flex">
                                            <a href="{{ url('/admin/instansi-edit-'.$s->id_instansi)}}" class="btn btn-info mx-1">Edit</a>
                                            <form action="" method="POST" class="d-inline">
                                            @method('delete')
                                            <a href="{{ url('/admin/instansi-delete-'.$s->id_instansi)}}" class='btn btn-danger'>Delete</a>
                                            </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection