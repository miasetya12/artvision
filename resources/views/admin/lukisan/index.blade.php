@extends('admin.layouts.layout-admin')
 
@section('title', 'Admin Page')
 
@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Lukisan</strong> Lukisan</h1>
        
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-end">
                    <a href="{{ url('/admin/lukisan-create') }}" class="btn btn-primary">Tambah Lukisan</a> <br>
                </div>
                <br>
                <div class="table-responsive"> 
                    <table class="table table-striped" class="display nowrap">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nama Pelukis</th>
                                <th>Judul Lukisan</th>
                                <th>Deskripsi Lukisan</th>
                                <th>Foto Lukisan</th>
                                <th>Harga Awal</th>
                                <th>Status Lukisan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1?>
                            @foreach ($data_lukisan as $item)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $item->nama_pelukis }}</td>
                                <td>{{ $item->judul_lukisan }}</td>
                                <td>{{ $item->deskripsi_lukisan }}</td>
                                <td><img src="{{ $item->foto_lukisan }}" width="100%" alt=""></td>
                                <td>{{ $item->harga_awal }}</td>
                                <td>{{ $item->status_lukisan }}</td>
                                <td>
                                    <div class="d-flex justify-content-around">
                                    <a href="{{ url('/admin/lukisan-edit-'.$item->id_lukisan)}}" class="btn btn-info mx-1">Edit</a>
                                    <form action="" method="POST" class="d-inline">
                                    @method('delete')
                                    <a href="{{ url('/admin/lukisan-delete-'.$item->id_lukisan)}}" class='btn btn-danger'>Delete</a>
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
@endsection