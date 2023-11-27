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
                            <h1 class="h3 mb-3"><strong>Periode</strong> Bidding</h1>
                        </div>
                    </div>
                    
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-end">
                            <a href="{{ url('/admin/periode-create') }}" class="btn btn-primary ml-4">Tambah Periode</a> <br>
                        </div>
                        <br>
                        <div class="table-responsive"> 
                            <table class="table table-striped" class="display nowrap">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Judul Kegiatan</th>
                                        <th>Tanggal Mulai</th>
                                        <th>Tanggal Selesai</th>
                                        <th>Status Periode</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1 ?>
                                    @foreach ($periode as $s)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $s->judul_event }}</td>
                                        <td>{{ $s->tanggal_mulai  }}</td>
                                        <td>{{ $s->tanggal_selesai  }}</td>
                                        <td>{{ $s->status_periode  }}</td>
                                    
                                        <td>
                                            <div style="display: flex">
                                            <a href="{{ url('/admin/periode-edit-'.$s->id_periode_bidding)}}" class="btn btn-info mx-1">Edit</a>
                                            <form action="" method="POST" class="d-inline">
                                            @method('delete')
                                            <a href="{{ url('/admin/periode-delete-'.$s->id_periode_bidding)}}" class='btn btn-danger'>Delete</a>
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