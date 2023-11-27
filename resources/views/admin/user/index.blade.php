@extends('admin.layouts.layout-admin')
 
@section('title', 'Admin Page')
 
@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <div class="row">
            <div class="col-md-10">
                <div class="justify-content-between mb-4">
                    <h1 class="h3 mb-3"><strong>Informasi</strong> Pengguna</h1>
                </div>
            </div>
            
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                  <div class="card-body">
                        <div class="row">
                        
                          <div class="col-md-12">
                              @if(session()->has('message'))
                              <div class="alert alert-success text-center">{{ session('message') }}
                              </div>
                              @endif
                          </div>
                        </div>
          
                    
                      <div class="table-responsive"> 
                        <table class="table table-striped" class="display nowrap">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Nama Lengkap</th>
                              <th>Telp</th>
                              <th>Intansi</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php $i = 1?>
                        @foreach ($user as $c)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $c->nama_lengkap_user }}</td>
                            <td>{{ $c->telp_user  }}</td>
                            <td>{{ $c->id_instansi  }}</td>
                            <td>
                              <div style="display: flex">
                                 <a href="{{ url('/admin/user-view-'.$c->id_user )}}" class="btn btn-info">View</a>
                               <form action="" method="POST" class="d-inline">
                                @method('delete')
                                <a href="{{ url('/admin/user-delete-'.$c->id_user )}}" class='btn btn-danger'>Delete</a>
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
</div>
@endsection