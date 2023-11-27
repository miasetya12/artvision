<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('/css/sweetalert/sweetalert2.min.css')}}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="{{url('/css/user/style.css')}}">
    <link rel="stylesheet" href="{{url('/css/user/detail.css')}}">
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css"> --}}
    @stack('css')
  </head>
  <body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary justify-content-between">
      <div class="container">
        <a class="navbar-brand fw-bold" href="/"><span class="coklat-tua">Art</span>vision</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-grow-1 justify-content-center" id="navbarSupportedContent">
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
              <a href="/" class="nav-link px-4 link-dark {{ $active === 'home' ? 'fw-bold' : '' }} coklat-tua">Home</a>
            </li>
            <li class="nav-item">
              <a href="/event" class="nav-link px-4 link-dark {{ $active === 'event' ? 'fw-bold' : '' }} coklat-tua">Event</a>
            </li>
            <li class="nav-item">
              <li>
                <a href="/gallery" class="nav-link px-4 link-dark {{ $active === 'gallery' ? 'fw-bold' : '' }} coklat-tua">Gallery</a>
            </li>
            <li class="nav-item">
              <a href="/#kontak" class="nav-link px-4 link-dark {{ $active === 'contact' ? 'fw-bold' : '' }} coklat-tua">Contact</a>
            </li>
          </ul>
        </div>
        @if(session('uName'))
          <div class="collapse navbar-collapse flex-grow-0 justify-content-end" style="min-width:0;" id="navbarSupportedContent">
            <div class="dropdown">
              <button class="btn-nav btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{session('uName')}}
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/logout">Logout</a></li>
              </ul>
            </div>
          </div>
        @else
        <div class="collapse navbar-collapse flex-grow-0 justify-content-end" style="min-width:0;" id="navbarSupportedContent">
          <a href="/login" class="btn btn-dark px-3" type="button">
            Login
          </a>
          </div>
        @endif
      </div>
    </nav>
    
    @yield('content')
    <section class="footer mt-5 py-5">
      <div class="container text-white">
          <div class="row">
              <div class="col-6 col-xs-12">
                  <h2><a class="navbar-brand fw-bold" href="/"><span class="coklat-tua">Art</span>vision</a></h2>
                  <p class="text-white-50">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis possimus ipsam ex nemo asperiores fuga ipsum natus consequatur, repudiandae dignissimos.</p>
              </div>
              <div class="col-3 col-xs-12 useful-links">
                  <h2 class="coklat">Useful Links</h2>
                  <a href="#" class="d-block mt-2 text-secondary">Home</a>
                  <a href="#" class="d-block mt-2 text-secondary">Events</a>
                  <a href="#" class="d-block mt-2 text-secondary">Gallery</a>
                  <a href="#" class="d-block mt-2 text-secondary">Contact</a>
                  </ul>
              </div>
              <div class="col-3 col-xs-12 follow-us">
                  <h2 class="mb-3 coklat">Follow Us</h2>
                  <a href="">
                      <span class="circle-icon mx-2"><img src={{url('/assets/images/icon/instagram.svg')}} width="20px" alt="..."></span>
                  </a>
                  <a href="">
                      <span class="circle-icon"><img src={{url('/assets/images/icon/x-twitter.svg')}} width="20px" alt="..."></span>
                  </a>
                  <a href="">
                      <span class="circle-icon mx-2"><img src={{url('/assets/images/icon/whatsapp.svg')}} width="20px" alt="..."></span>
                  </a>
              </div>
          </div>
          <hr>
          <div class="row copyright">
              <div class="col-6">
                  <p>&copy; Copyright ArtVision. All right reserved.</p>
              </div>
              <div class="col-6 d-flex justify-content-end">
                  <span><a href="" class="mx-3 coklat">Privacy Policy</a></span>
                  <span><a href="" class="coklat">Terms & Condition</a></span>
              </div>
          </div>
      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="{{url('/js/sweetalert/sweetalert2.all.min.js')}}"></script>
    <script src="{{url('/js/sweetalert/sweetalert2.min.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    {{-- <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script> --}}
    @stack('script')



  </body>
</html>