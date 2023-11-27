@extends('user.layouts.layout')
 
@section('title', 'Gallery Page')

@section('content')
    <div class="event-jumbotron">
        <div class="container-fluid py-5 event-konten-jumbotron">
            <p class="f-Rmono text-center">Dunia Kesenian</p>
            <h1 class="f-amiri text-center mb-3">Tambahkan <span class="coklat f-amiri">Warna</span> dan <span class="coklat f-amiri">Kebahagiaan</span> Hidupmu dengan <span class="coklat f-amiri">Seni</span></h1>
        </div>
    </div>

    <div class="event-container">
        <div class="container">
            <div class="event-kotak">
                <div class="row p-5 g-4">
                    <div class="col-lg-12">
                        <div class="event-card text-white">
                            <div class="row p-4">
                                <div class="col-lg-3 col-xs-12" style="box-sizing: border-box">
                                    <img  width="100%" height="100%" src="{{url('/assets/landing/burung.png')}}" alt="">
                                </div>
                                <div class="col-lg-6 col-xs-12 p-3 d-flex flex-column justify-content-around">
                                    <h2 class="f-amiri">Lelang Charity Night</h2>
                                    <p>Join us for a night of giving back and making a difference 
                                        in our community at our Charity Night event! ...</p>
                                    <span class="badge event-badge text-bg-success">Sedang Berlangsung</span>
                                </div>
                                <div class="col-lg-3 event-tanggal d-flex flex-column justify-content-around">
                                    <p>19 April 2023 - 24 Juni 2023</p>
                                    <a href="" class="f-Rmono coklat event-btn w-100 text-center">Lihat <span class="coklat">Lebih Banyak</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="event-card text-white">
                            <div class="row p-4">
                                <div class="col-lg-3 col-xs-12" style="box-sizing: border-box">
                                    <img  width="100%" height="100%" src="{{url('/assets/landing/burung.png')}}" alt="">
                                </div>
                                <div class="col-lg-6 col-xs-12 p-3 d-flex flex-column justify-content-around">
                                    <h2 class="f-amiri">Lelang Charity Night</h2>
                                    <p>Join us for a night of giving back and making a difference 
                                        in our community at our Charity Night event! ...</p>
                                    <span class="badge event-badge text-bg-primary">Akan Dimulai</span>
                                </div>
                                <div class="col-lg-3 event-tanggal d-flex flex-column justify-content-around">
                                    <p>19 April 2023 - 24 Juni 2023</p>
                                    <a href="" class="f-Rmono coklat event-btn w-100 text-center">Lihat <span class="coklat">Lebih Banyak</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="event-card text-white">
                            <div class="row p-4">
                                <div class="col-lg-3 col-xs-12" style="box-sizing: border-box">
                                    <img  width="100%" height="100%" src="{{url('/assets/landing/burung.png')}}" alt="">
                                </div>
                                <div class="col-lg-6 col-xs-12 p-3 d-flex flex-column justify-content-around">
                                    <h2 class="f-amiri">Lelang Charity Night</h2>
                                    <p>Join us for a night of giving back and making a difference 
                                        in our community at our Charity Night event! ...</p>
                                    <span class="badge event-badge text-bg-danger">Selesai</span>
                                </div>
                                <div class="col-lg-3 event-tanggal d-flex flex-column justify-content-around">
                                    <p>19 April 2023 - 24 Juni 2023</p>
                                    <a href="" class="f-Rmono coklat event-btn w-100 text-center">Lihat <span class="coklat">Lebih Banyak</span></a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection