@extends('user.layouts.layout')
 
@section('title', 'Landing Page')

@section('content')

{{-- Jumbotron --}}
<div class="jumbotron">
        <div class="container-fluid py-5 konten-jumbotron">
            <p class="f-Rmono text-center">Dunia Kesenian</p>
            <h1 class="f-amiri text-center mb-3">Ekspresi <span class="coklat f-amiri">Artistik:</span><br><span class="coklat f-amiri">Melepaskan</span> Potensi Kreativitas</h1>
            <a class="f-Rmono coklat" href="/event">Mulai <span class="coklat">Menawar</span></a>
        </div>
</div>

{{-- Quotes --}}
{{-- <div class="quotes d-flex justify-content-center align-items-center my-2">
    <div class="container">
        <div class="row">
            <h1 class="col-lg-12 px-5 f-amiri text-center">"Experience the beauty of art with our diverse collection of masterpieces. 
                Discover new artists and explore different styles as you immerse 
                yourself in a world of creativity and imagination"</h1>
        </div>
    </div>
</div> --}}


{{-- Newest Event --}}
<div class="img-bg">
    <div class="container">
        <div class="judul-berita pt-5">
            <p class="f-Rmono">Inilah Kami</p>
            <h3 class="fw-bold f-amiri coklat-tua">Event Terbaru</h3>
            <h6 class="f-amiri">Seni adalah bentuk ekspresi manusia yang kuat yang telah dihargai selama berabad-abad.
                Ini memungkinkan kita untuk mengeksplorasi kreativitas, emosi, dan ide kita dengan cara yang unik dan bermakna</h6>
        </div>
        
        <div class="card-event">
            <div class="row justify-content-start mt-4 g-4">
                <div class="col-lg-4 col-md-6 d-flex justify-content-center">
                    <div class="card-1">
                        <img src={{url('/assets/landing/birmingham.png')}} class="card-img-top p-3" alt="...">
                        <div class="card-body-event p-3">
                            <p class="card-text fw-bold">Artsy Aspirations: Exploring Creative Expression</p>
                            <p class="card-text">“Artistry: Inspiring Creativity and Expression" is a platform that celebrates the 
                            power of art to inspire...See More</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex justify-content-center">
                    <div class="card-1">
                        <img src={{url('/assets/landing/birmingham.png')}} class="card-img-top p-3" alt="...">
                        <div class="card-body-event p-3">
                            <p class="card-text fw-bold">Artsy Aspirations: Exploring Creative Expression</p>
                            <p class="card-text">“Artistry: Inspiring Creativity and Expression" is a platform that celebrates the 
                            power of art to inspire...See More</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex justify-content-center">
                    <div class="card-1">
                        <img src={{url('/assets/landing/birmingham.png')}} class="card-img-top p-3" alt="...">
                        <div class="card-body-event p-3">
                            <p class="card-text fw-bold">Artsy Aspirations: Exploring Creative Expression</p>
                            <p class="card-text">“Artistry: Inspiring Creativity and Expression" is a platform that celebrates the 
                            power of art to inspire...See More</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="see d-flex justify-content-center align-items-center py-5">
               <a href="#"><p class="f-amiri">See More </p></a>
        </div>
    </div>
</div>

{{-- Art Preview --}}
<div class="white-bg art-prev">
    <div class="container">
        <div class="judul-preview pt-5 text-center">
                <p class="f-Rmono hitam">Inilah Kami</p>
                <h3 class="f-amiri coklat-tua">Gallery</h3>
                <h6 class="f-amiri px-5 hitam">Seni adalah bentuk ekspresi manusia yang kuat yang telah dihargai selama berabad-abad.
                    Ini memungkinkan kita untuk mengeksplorasi kreativitas, emosi, dan ide kita dengan cara yang unik dan bermakna</h6>
        </div>
        
        <div class="kumpulan-art mt-5">
            <div class="row g-3">
                <div class="img-container col-6 col-md-8">
                    <img src={{url('/assets/landing/mata.png')}} class="art-img" alt="...">
                </div>

                <div class="img-container col-6 col-md-4">
                    <img src={{url('/assets/landing/vas-bunga.png')}} class="art-img"  alt="...">
                </div>

                <div class="img-container col-6 col-md-3">
                    <img src={{url('/assets/landing/img-3.png')}} class="art-img" alt="...">
                </div>

                <div class="img-container col-6 col-md-3" >
                    <img src={{url('/assets/landing/mona-lisa.png')}} class="art-img"  alt="...">
                </div>

                <div class="img-container col-6 col-md-6">
                    <img src={{url('/assets/landing/landscape.png')}} class="art-img"  alt="...">
                </div>

                <div class="img-container col-6 col-md-3">
                    <img src={{url('/assets/landing/war.png')}} class="art-img"  alt="...">
                </div>

                <div class="img-container col-6 col-md-6">
                    <img src={{url('/assets/landing/blocklamp.png')}} class="art-img"  alt="...">
                </div>

                <div class="img-container col-6 col-md-3">
                    <img src={{url('/assets/landing/birds.png')}} class="art-img"  alt="...">
                </div>
            </div>
        </div>
    </div>
</div>



{{-- Sekarang Menawar --}}
<div class="img-bg2 mt-5">
    <div class="siap d-flex justify-content-center align-items-center">
        <div class="col-lg-5 offset-lg-3 col-sm-4 offset-sm-6">
            <h1 class="judul-siap f-amiri">Siap <span class="coklat f-amiri">menawar</span> sekarang?</h1>
        </div>

        <div class="col-lg-3 col-sm-2">
            <button class="f-Rmono coklat">Mulai <span class="coklat-tua">Menawar</span></button>
        </div>
    </div>
</div>

{{-- Kontak Kami --}}

<section id="kontak" class="kontak">
    <div class="white-bg kontak-kami">
        <div class="container">
            <div class="kontak-kami mt-5 f-amiri">
                <p class="f-Rmono">Ingin Mengetahui Lebih Dalam ?</p>
                <h3 class="f-amiri coklat-tua">Kontak Kami</h3>
                <h6 class="f-amiri px-5 hitam">Halaman "Hubungi Kami" adalah bagian penting dari situs web mana pun, dan kami tidak terkecuali. <br>
                    Kami menerima semua pertanyaan, umpan balik, dan saran dan percaya bahwa meminta bantuan atau informasi adalah tanda kekuatan.</h6>
            </div>

            <div class="row g-4 mt-3">
                <div class="col-lg-6">
                    <div class="row text-center g-2">
                        <div class="col-lg-6 col-sm-6">
                            <div class="kontak-border">
                                <img class="py-3" src={{url('/assets/landing/trusted.png')}} alt="">
                                <h3 class="mt-3 f-Rmono coklat-tua">Terpercaya</h3>
                                <p class="mt-3 px-3">Berkomitmen memberikan pelayanan yang terpercaya</p>
                            </div>
                        </div>
                        
                        <div class="col-lg-6 col-sm-6">
                            <div class="kontak-border">
                                <img class="py-3" src={{url('/assets/landing/secure.png')}} alt="">
                                <h3 class="mt-3 f-Rmono coklat-tua">Aman</h3>
                                <p class="mt-3 px-3">Kami memperlakukan keamanan dan privasi dengan sangat serius</p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="kontak-border">
                                <img class="py-3" src={{url('/assets/landing/innovative.png')}} alt="">
                                <h3 class="mt-3 f-Rmono coklat-tua">Inovatif</h3>
                                <p class="mt-3 px-3">Memberikan inovasi terdepan di industri kesenian</p>
                            </div>
                        </div>
                        
                        <div class="col-lg-6 col-sm-6">
                            <div class="kontak-border">
                                <img class="py-3" src={{url('/assets/landing/friendly.png')}} alt="">
                                <h3 class="mt-3 f-Rmono coklat-tua">User Friendly</h3>
                                <p class="mt-3 px-3">Menghadirkan kemudahan dan kenyamanan ramah pengguna</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <form action="{{ url('/kontak-store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-2">
                            <div class="col-lg-12">
                                <div class="form-floating">
                                    <textarea name="pesan" type="text" class="form-control t-area" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                    <label for="floatingTextarea">Pesan anda</label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-floating">
                                    <input type="text" name="nama_tamu" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Nama anda</label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-floating">
                                    <input type="email" name="email_tamu" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Email anda</label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-dark btn-submit mt-2">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection

@if(session('status'))
  @push('script')
  <script>
      Swal.fire({
      icon: '{{session('status')}}',
      title: '{{session('message')}}',
    })
  </script>
  @endpush
@endif