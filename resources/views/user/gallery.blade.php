@extends('user.layouts.layout')
 
@section('title', 'Gallery Page')

@section('content')
    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>';" class="my-4" aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Gallery</li>
            </ol>
        </nav>


        {{-- product yang di lelang --}}
        <div class="row g-2 r-card">
            @foreach($data_lukisan as $item)
                <div class="col-lg-3 col-6">
                    <div class="card h-100">
                        <img src={{url('/assets/landing/birmingham.png')}} class="card-img-top" width="100%" alt="...">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div class="div">
                                <p class="card-text fw-bold my-2">{{$item->judul_lukisan}}</p>
                                <p class="card-text coklat my-2">{{$item->nama_pelukis}}</p>
                                <p class="card-text">{{Str::limit($item->deskripsi_lukisan,80)}}</p>
                            </div>
                            <div class="div mt-3">
                                <a href="/gallery/detail/{{$item->id_lukisan}}" class="btn btn-dark d-block">See Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection