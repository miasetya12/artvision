@extends('user.layouts.layout')
 
@section('title', 'Detail Gallery Page')

@section('content')
<div class="detail">
    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>';" class="my-4" aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item"><a href="/gallery">Gallery</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$data_lukisan->judul_lukisan}}</li>
            </ol>
        </nav>

        <div class="row g-2">
            <div class="col-lg-6">
                <div class="background">
                    <img src="{{$data_lukisan->foto_lukisan}}" width="100%" alt="">
                </div>
            </div>
            <div class="col-lg-6 text-detail">
                <h3 class="f-amiri fw-bold coklat-tua">Detail</h3>
                <h3 class="fw-bold mt-1">{{$data_lukisan->judul_lukisan}}</h3>
                <p class="mt-3">Dibuat oleh {{$data_lukisan->nama_pelukis}}</p>

                <p class="mt-5">{{$data_lukisan->deskripsi_lukisan}}</p>
                <h3 class="f-amiri mt-4 coklat">Starting Bid Rp {{number_format($data_lukisan->harga_awal,2,',','.')}}</h3>
            </div>
        </div>
    </div>
</div>
    <div class="bidding-prev">
      <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="bidd pt-5 text-center">
                    <h3 class="fw-bold f-amiri coklat-tua">Pratinjau Penawaran</h3>
                    <h6 class="f-amiri mb-5">Di sini Anda dapat melihat hasil penawaran saat ini dari penawaran tertinggi hingga terendah.
                        Tidak melihat apapun? Jadilah yang pertama.</h6>
                </div>
            </div>
        </div>
      </div>
    </div>
      
{{-- 
    <div class="bidding">
      <div class="row">
        <div class="col-lg-3">
          <h6>Mulai Penawaran</h6>
        </div>
          <div class="col-lg-6">
            <form action="">
              <div class="col-lg-3">
                <input class="form-control" placeholder="Masukan Nominalnya" id="">
              </div>                       
               <div class="col-lg-3">
                <button type="submit" class="btn btn-dark btn-submit mt-2">Submit</button>
              </div>
            </div>
            </form>
        </div>
    </div> --}}
 
        <div class="container go-bid">
            <div class="row g-5">
            <div class="col-lg-12">
                <table class="table bidding-table" id="biddingTable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Penawar</th>
                        <th scope="col">Nominal</th>
                        <th scope="col">Waktu Penawaran</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td scope="row">1</td>
                        <td>Ngurah</td>
                        <td>7.500.000</td>
                        <td>20:09, 25 Mei 2023</td>
                      </tr>
                      <tr>
                        <td scope="row">2</td>
                        <td>Mia</td>
                        <td>6.500.000</td>
                        <td>19:43, 25 Mei 2023</td>
                      </tr>
                      <tr>
                        <td scope="row">3</td>
                        <td>Gusmas</td>
                        <td>5.000.000</td>
                        <td>14:27, 25 Mei 2023</td>
                      </tr>
                    </tbody>
                  </table>
            </div>

                <div class="col-lg-6 offset-lg-3">
                    <form action="">
                        <div class="row g-2">
                            <div class="col-lg-12">
                                <div class="form-floating">
                                    <input class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></input>
                                    <label for="floatingTextarea">Masukan Nominalnya</label>
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
@endsection

@push('script')
    <script>
        let table = new DataTable('#biddingTable', {
            responsive: true,
            pageLength: 3,
            lengthChange: false
        });
    </script>
@endpush