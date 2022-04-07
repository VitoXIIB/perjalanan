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
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>Peduli Diri</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/fontawesome-all.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/swiper.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/styles.css')}}" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="assets/images/logo_smk.jpg">
</head>
<body>
    <div>
        <nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-dark" aria-label="Main navigation">
            <div class="container">
                
                <!-- Image Logo -->
            <h3 style="color: #fff">Perjalanan</h3> 
    
            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text" href="index.html">Elma</a> -->
    
            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ms-auto navbar-nav-scroll">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/utama">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/perjalanan">Perjalanan</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">User</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown01">
                            <li><a class="dropdown-item" href="/profile">Profile</a></li>
                            <li><div class="dropdown-divider"></div></li>
                            <li><a class="dropdown-item" href="/logout">Logout</a></li>
                            <li><div class="dropdown-divider"></div></li>
                        </ul>
                    </li>
                </ul>
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav>
</div>
    <header id="header" class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" style="margin-top: -130px">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th style="color: #fff">No</th>
                                <th style="color: #fff">Tanggal</th>
                                <th style="color: #fff">Jam</th>
                                <th style="color: #fff">Lokasi</th>
                                <th style="color: #fff">Suhu Tubuh</th>
                                <th style="color: #fff">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $no => $item)
                                <tr>
                                    <td style="color: #fff">{{ $no + 1 }}</td>
                                    <td style="color: #fff">{{ $item->tanggal }}</td>
                                    <td style="color: #fff">{{ $item->jam }}</td>
                                    <td style="color: #fff">{{ $item->lokasi }}</td>
                                    <td style="color: #fff">{{ $item->suhu_tubuh }}</td>
                                    <td style="color: #fff">
                                        <a href="/destroy/{{ $item->id }}" class="btn btn-sm btn-danger">Hapus</i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div>
                            <a href="/tambah" class="btn btn-success">Tambah Perjalanan</a>
                        </div>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header>

<!-- Scripts -->
@include('sweetalert::alert')
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script> <!-- Bootstrap framework -->
<script src="{{asset('assets/js/swiper.min.js')}}"></script> <!-- Swiper for image and text sliders -->
<script src="{{asset('assets/js/purecounter.min.js')}}"></script> <!-- Purecounter counter for statistics numbers -->
<script src="{{asset('assets/js/scripts.js')}}"></script> <!-- Custom scripts -->
</body>
</html>


            