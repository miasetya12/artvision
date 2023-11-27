@extends('admin.layouts.layout-admin')
 
@section('title', 'Admin Page')
 
@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Pelukis</strong> Karya Seni</h1>
        
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-end">
                    <a href="{{ url('/admin/pelukis-create') }}" class="btn btn-primary">Tambah Pelukis</a> <br>
                </div>
                <br>
                <div class="table-responsive"> 
                    <table class="table table-striped" class="display nowrap">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nama Pelukis</th>
                                <th>No. Telepon</th>
                                <th>Biografi Pelukis</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1?>
                            @foreach ($data_pelukis as $item)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $item->nama_pelukis }}</td>
                                <td>{{ $item->telp_pelukis  }}</td>
                                <td class="table-biografi"><?php echo($item['biografi_pelukis']) ?></td>
                                <td>
                                    <div class="d-flex justify-content-around">
                                    <a href="{{ url('/admin/pelukis-edit-'.$item->id_pelukis)}}" class="btn btn-info mx-1">Edit</a>
                                    <form action="" method="POST" class="d-inline">
                                    @method('delete')
                                    <a href="{{ url('/admin/pelukis-delete-'.$item->id_pelukis)}}" class='btn btn-danger'>Delete</a>
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
</main>
@endsection