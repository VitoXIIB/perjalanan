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
    <link href="{{ asset('assets/css/profile.css') }}" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="assets/images/logo_smk.jpg">
</head>

<body>
    <div>
        <nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-dark" aria-label="Main navigation">
            <div class="container">

                <!-- Image Logo -->
                <h3 style="color: #fff">Edit Profile</h3>

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
                        <li class="nav-item">
                            <a class="nav-link" href="/perjalanan">Perjalanan</a>
                        </li>
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
                        <form action="/updateprov/{{$edit->id}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row gutters-sm">
                                <div class="col-md-4 mb-3">
                                    <div class="card" style="background-color:#4d475c;">
                                        <div class="card-body">
                                            <div class="d-flex flex-column align-items-center text-center">
                                                <img @if(Auth::user()->foto != NULL || Auth::user()->foto > 0) src="{{asset('images/'.Auth::user()->foto)}}" @else src="{{asset('images/user.png')}}" @endif
                                                alt="Admin" class="rounded-circle" width="150">
                                                <div class="form-group mt-3">
                                                        <input type="file" name="foto" class="from-control" style="color: white" value="{{$edit->foto}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="card mb-3" style="background-color: #4d475c;">
                                        {{-- <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0" style="color: #fff;">NIK</h6>
                                                </div>
                                                <div class="col-sm-9 text-light">
                                                    <input type="text"
                                                        style="background-color: transparent; color: white;" name=""
                                                        id="">
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0" style="color: #fff;">Nama</h6>
                                                </div>
                                                <div class="col-sm-9 text-light">
                                                    <input type="text"
                                                        style="background-color: transparent; color: white;" name=""
                                                        id="">
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0" style="color: #fff;">Phone</h6>
                                                </div>
                                                <div class="col-sm-9 text-light">
                                                    <input type="text"
                                                        style="background-color: transparent; color: white;" name=""
                                                        id="">
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0" style="color: #fff;">Email</h6>
                                                </div>
                                                <div class="col-sm-9 text-light">
                                                    <input type="text"
                                                        style="background-color: transparent; color: white;" name=""
                                                        id="">
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0" style="color: #fff;">Username</h6>
                                                </div>
                                                <div class="col-sm-9 text-light">
                                                    <input type="text"
                                                        style="background-color: transparent; color: white;" name=""
                                                        id="">
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0" style="color: #fff;">Provinsi</h6>
                                                </div>
                                                <div class="col-sm-9 text-light">
                                                    <select name="selectProvinsi" id="selectProvinsi"
                                                        style="background-color: transparent; color: black;"></select>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0" style="color: #fff;">Kabupaten</h6>
                                                </div>
                                                <div class="col-sm-9 text-light">
                                                    <select name="selectKabupaten"
                                                        style="background-color: transparent; color: black;"
                                                        id="selectKabupaten"></select>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0" style="color: #fff;">Kecamatan</h6>
                                                </div>
                                                <div class="col-sm-9 text-light">
                                                    <select name="selectKecamatan"
                                                        style="background-color: transparent; color: black;"
                                                        id="selectKecamatan"></select>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <a class="btn btn-info btn-md" target="__blank" href="">Edit
                                                        Profile</a>
                                                </div>
                                            </div>
                                        </div> --}}
                                        <table class="table table-borderless">
                                            <tr>
                                                <td style="color: #fff">NIK</td>
                                                <td style="color: #fff">:</td>
                                                <td>
                                                    <input type="text" class="form-control"
                                                        style="background-color: transparent; color: white;" name="nik" value="{{$edit->nik}}"
                                                        id="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td  style="color: #fff">Nama</td>
                                                <td style="color: #fff">:</td>
                                                <td>
                                                    <input type="text" class="form-control"
                                                        style="background-color: transparent; color: white;" name="nama" value="{{$edit->nama}}"
                                                        id="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="color: #fff">Phone</td>
                                                <td style="color: #fff">:</td>
                                                <td>
                                                    <input type="text" class="form-control"
                                                        style="background-color: transparent; color: white;" name="telp" value="{{$edit->telp}}"
                                                        id="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="color: #fff">Email</td>
                                                <td style="color: #fff">:</td>
                                                <td>
                                                    <input type="email" class="form-control"
                                                        style="background-color: transparent; color: white;" name="email" value="{{$edit->email}}"
                                                        id="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="color: #fff">Username</td>
                                                <td style="color: #fff">:</td>
                                                <td>
                                                    <input type="text" class="form-control"
                                                        style="background-color: transparent; color: white;" name="username" value="{{$edit->username}}"
                                                        id="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="color: #fff">Provinsi</td>
                                                <td style="color: #fff">:</td>
                                                <td>
                                                    <select class="form-control" name="selectProvinsi" id="selectProvinsi"></select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="color: #fff">Kota</td>
                                                <td style="color: #fff">:</td>
                                                <td align="center">
                                                    <select class="form-control" name="selectKota" id="selectKota"></select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="color: #fff">Kecamatan</td>
                                                <td style="color: #fff">:</td>
                                                <td align="center">
                                                    <select class="form-control" name="selectKecamatan" id="selectKecamatan"></select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="color: #fff">Kelurahan</td>
                                                <td style="color: #fff">:</td>
                                                <td align="center">
                                                    <select class="form-control" name="selectKelurahan" id="selectKelurahan"></select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="color: #fff">Alamat</td>
                                                <td style="color: #fff">:</td>
                                                <td align="center">
                                                    <textarea class="form-control" name="alamat" id="alamat">{{$data->alamat ?? "Tidak Ada Data"}}</textarea>
                                                </td>
                                            </tr>
                                        </table>
                                        <div class="form-group mb-2"><button type="submit" class="form-control btn btn-primary">Simpan</button></div>
                                        <div class="form-group mb-2"><a href="/profile" class="form-control btn btn-warning" style="color: white">Kembali</a></div>
                                    </div>


                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div> <!-- end of container -->
    </div>

    <script>
        let selectProvinsi = document.getElementById('selectProvinsi');
        let selectKota = document.getElementById('selectKota');
        let selectKecamatan = document.getElementById('selectKecamatan');
        let selectKelurahan = document.getElementById('selectKelurahan');
        let alamat = document.getElementById('alamat');
        document.addEventListener("DOMContentLoaded", function() {
            fetchProvinsi();
            selectKota.style.display = "none";
            selectKecamatan.style.display = "none";
            selectKelurahan.style.display = "none";
            // fetchKota();
            // fetchKecamatan();
            // fetchKelurahan();
            getValueToAlamat();
        });
        const config = {
            method: "GET"
        };
        async function fetchProvinsi() {
            const URL = 'http://www.emsifa.com/api-wilayah-indonesia/api/provinces.json';
            await fetch(URL, config)
                .then(response => response.json())
                .then(provinsi => {
                    if (provinsi !== null || undefined) {
                        provinsi.map(data => {
                            let opt = document.createElement('option');
                            opt.value = data.id;
                            opt.innerHTML = data.name;
                            selectProvinsi.appendChild(opt);
                        })
                    } else {
                        let opt = document.createElement('option');
                        opt.value = "";
                        opt.innerHTML = "Data tidak tersedia";
                        selectKelurahan.appendChild(opt);
                    }
                }).catch(error => alert(`Data provinsi tidak ada`));
        }
        async function fetchKota(id) {
            const URL = `http://www.emsifa.com/api-wilayah-indonesia/api/regencies/${id === undefined || null ? "" : id}.json`;
            await fetch(URL, config)
                .then(response => response.json())
                .then(kota => {
                    if (kota !== null || undefined) {
                        kota.map(data => {
                            let opt = document.createElement('option');
                            opt.value = data.id;
                            opt.innerHTML = data.name;
                            selectKota.appendChild(opt);
                        })
                    } else {
                        let opt = document.createElement('option');
                        opt.value = "";
                        opt.innerHTML = "Data tidak tersedia";
                        selectKelurahan.appendChild(opt);
                    }
                });
        }
        async function fetchKecamatan(id) {
            const URL = `http://www.emsifa.com/api-wilayah-indonesia/api/districts/${id === undefined || null ? "" : id}.json`;
            await fetch(URL, config)
                .then(response => response.json())
                .then(kecamatan => {
                    if (kecamatan !== null || undefined) {
                        kecamatan.map(data => {
                            let opt = document.createElement('option');
                            opt.value = data.id;
                            opt.innerHTML = data.name;
                            selectKecamatan.appendChild(opt);
                        })
                    } else {
                        let opt = document.createElement('option');
                        opt.value = "";
                        opt.innerHTML = "Data tidak tersedia";
                        selectKelurahan.appendChild(opt);
                    }
                });
        }
        async function fetchKelurahan(id) {
            const URL = `http://www.emsifa.com/api-wilayah-indonesia/api/villages/${id === undefined || null ? "" : id}.json`;
            await fetch(URL, config)
                .then(response => response.json())
                .then(kelurahan => {
                    if (kelurahan !== null || undefined) {
                        kelurahan.map(data => {
                            let opt = document.createElement('option');
                            opt.value = data.id;
                            opt.innerHTML = data.name;
                            selectKelurahan.appendChild(opt);
                        })
                    } else {
                        let opt = document.createElement('option');
                        opt.value = "";
                        opt.innerHTML = "Data tidak tersedia";
                        selectKelurahan.appendChild(opt);
                    }
                });
        }
        // selectProvinsi.addEventListener('change', () => {
        //     console.log(selectProvinsi.options[selectProvinsi.selectedIndex].text);
        // })
        selectProvinsi.addEventListener('change', () => {
            fetchKota(selectProvinsi.value);
            selectKota.style.display = "block";
            selectKota.innerHTML = '';
            selectKecamatan.innerHTML = '';
            selectKelurahan.innerHTML = '';
        });
        selectKota.addEventListener('change', () => {
            fetchKecamatan(selectKota.value);
            selectKecamatan.style.display = "block";
            selectKecamatan.innerHTML = '';
            selectKelurahan.innerHTML = '';
        });
        selectKecamatan.addEventListener('change', () => {
            fetchKelurahan(selectKecamatan.value);
            selectKelurahan.style.display = "block";
            selectKelurahan.innerHTML = '';
        });
        function getValueToAlamat() {
            alamat.addEventListener('change', () => {
                let alamatText = alamat.value;
                document.getElementById('alamat').value = `${alamatText}, ${selectKelurahan.options[selectKelurahan.selectedIndex].text}, ${selectKecamatan.options[selectKecamatan.selectedIndex].text}, ${selectKota.options[selectKota.selectedIndex].text}, ${selectProvinsi.options[selectProvinsi.selectedIndex].text}, `;
                // console.log(`${alamatText}, ${selectKelurahan.options[selectKelurahan.selectedIndex].text}, ${selectKecamatan.options[selectKecamatan.selectedIndex].text}, ${selectKota.options[selectKota.selectedIndex].text}, ${selectProvinsi.options[selectProvinsi.selectedIndex].text}, `);
            });
        }
    </script>
 @include('sweetalert::alert')
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script> <!-- Bootstrap framework -->
    <script src="{{ asset('assets/js/swiper.min.js') }}"></script> <!-- Swiper for image and text sliders -->
    <script src="{{ asset('assets/js/purecounter.min.js') }}"></script> <!-- Purecounter counter for statistics numbers -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script> <!-- Custom scripts -->
</body>

</html>
