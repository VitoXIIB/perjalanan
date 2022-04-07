<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>Peduli Diri</title>

    <!-- Styles -->
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&family=Poppins:wght@600&display=swap"
        rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/fontawesome-all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/swiper.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    <link href="{{asset('assets/css/profile.css') }}" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="assets/images/logo_smk.jpg">
</head>

<body>
    <div>
        <nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-dark" aria-label="Main navigation">
            <div class="container">

                <!-- Image Logo -->
                <h3 style="color: #fff">Profile</h3>

                <!-- Text Logo - Use this if you don't have a graphic logo -->
                <!-- <a class="navbar-brand logo-text" href="index.html">Elma</a> -->

                <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav ms-auto navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/utama">Home</a>
                        </li>
                        @if (auth()->user()->role == "user")
                        <li class="nav-item">
                            <a class="nav-link" href="/perjalanan">Perjalanan</a>
                        </li>
                        @endif
                        @if (auth()->user()->role == "admin")
                        <li class="nav-item">
                          <a class="nav-link" href="/user">Data User</a>
                      </li>
                      @endif
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown"
                                aria-expanded="false">User</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown01">
                                <li><a class="dropdown-item" href="/profile">Profile</a></li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li><a class="dropdown-item" href="/logout">Logout</a></li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div> <!-- end of navbar-collapse -->
            </div> <!-- end of container -->
        </nav>
    </div>

    <div class="basic-5">
        <div class="container">
            <div class="row">
            </div> <!-- end of row -->
            <div class="row">
                <div class="container">
                    <div class="main-body">
                    
                          {{-- <!-- Breadcrumb -->
                          <nav aria-label="breadcrumb" class="main-breadcrumb">
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                              <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
                              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                            </ol>
                          </nav>
                          <!-- /Breadcrumb --> --}}
                    
                          <div class="row gutters-sm">
                            <div class="col-md-4 mb-3">
                              <div class="card" style="background-color:#4d475c;">
                                <div class="card-body">
                                  <div class="d-flex flex-column align-items-center text-center">
                                    <img @if(Auth::user()->foto != NULL || Auth::user()->foto > 0) src="{{asset('images/'.Auth::user()->foto)}}" @else src="{{asset('images/user.png')}}" @endif
                                    alt="Admin" class="rounded-circle" width="150">
                                    <div class="mt-3">
                                      <h4 style="color: #fff">{{auth()->user()->nama}}</h4>
                                      <p class="text-primary mb-1">{{auth()->user()->email}}</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-8">
                              <div class="card mb-3" style="background-color: #4d475c;">
                                <div class="card-body">
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <h6 class="mb-0" style="color: #fff;">NIK</h6>
                                    </div>
                                    <div class="col-sm-9 text-light">
                                      {{auth()->user()->nik}}
                                    </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <h6 class="mb-0" style="color: #fff;">Nama</h6>
                                    </div>
                                    <div class="col-sm-9 text-light">
                                        {{auth()->user()->nama}}
                                    </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <h6 class="mb-0" style="color: #fff;">Phone</h6>
                                    </div>
                                    <div class="col-sm-9 text-light">
                                        {{auth()->user()->telp}}
                                    </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <h6 class="mb-0" style="color: #fff;">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-light">
                                        {{auth()->user()->email}}
                                    </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <h6 class="mb-0" style="color: #fff;">Username</h6>
                                    </div>
                                    <div class="col-sm-9 text-light">
                                        {{auth()->user()->username}}
                                    </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <h6 class="mb-0" style="color: #fff;">Alamat</h6>
                                    </div>
                                    <div class="col-sm-9 text-light">
                                        {{auth()->user()->alamat}}
                                    </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-12">
                                      <a class="btn btn-info btn-md" href="/edit/{{ auth()->user()->id }}">Edit Profile</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                
                
                
                            </div>
                          </div>
                
                        </div>
                    </div>
            </div>
        </div> <!-- end of container -->
    </div>
  
@include('sweetalert::alert')
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script> <!-- Bootstrap framework -->
    <script src="{{ asset('assets/js/swiper.min.js') }}"></script> <!-- Swiper for image and text sliders -->
    <script src="{{ asset('assets/js/purecounter.min.js') }}"></script> <!-- Purecounter counter for statistics numbers -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script> <!-- Custom scripts -->
</body>

</html>
