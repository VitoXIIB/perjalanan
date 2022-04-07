<!doctype html>
<html lang="en">

<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('sign/css/style.css') }}">
    <link rel="icon" href="assets/images/logo_smk.jpg">
</head>

<body style="background-image: url(assets/images/header-background.jpg)"> 
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-6">
                    <div class="wrap" style="background-color: #4d475c;">
                        <div class=" col-md-12">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4 mt-3 d-flex justify-content-center" style="color: white">Daftar Akun</h3>
                                </div>
                            </div>
                            <form action="/postregis" class="signin-form" method="POST">
                                @csrf
                                <div class="form-group mb-3 ">
                                    <label class="label" for="name" style="color: white;">NIK</label>
                                    <input type="number" class="form-control" name="nik" required style="background-color: #4d475c; color: white;" autocomplete="off">
                                </div>
                                <div class="form-group mb-3 ">
                                    <label class="label" for="name" style="color: white;">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama" required style="background-color: #4d475c; color: white;" autocomplete="off">
                                </div>
                                <div class="form-group mb-3 ">
                                    <label class="label" for="name" style="color: white;">Telepon</label>
                                    <input type="number" class="form-control" name="telp" required style="background-color: #4d475c; color: white;" autocomplete="off">
                                </div>
                                <div class="form-group mb-3 ">
                                    <label class="label" for="name" style="color: white;">Email</label>
                                    <input type="email" class="form-control" name="email" required style="background-color: #4d475c; color: white;" autocomplete="off">
                                </div>
                                <div class="form-group mb-3 ">
                                    <label class="label" for="name" style="color: white;">Username</label>
                                    <input type="text" class="form-control" name="username" required style="background-color: #4d475c; color: white;" autocomplete="off">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password" style="color: white;">Kata Sandi</label>
                                    <input type="password" class="form-control" name="password" required style="background-color: #4d475c; color: white;" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Simpan</button>
                                </div>
                                <div class="form-group mb-2">
                                    <a href="/login" class="form-control btn btn-info rounded submit px-3">Kembali</a>
                                </div>
                                <div class="form-group d-md-flex">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('sign/js/jquery.min.js') }}"></script>
    <script src="{{ asset('sign/js/popper.js') }}"></script>
    <script src="{{ asset('sign/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('sign/js/main.js') }}"></script>

</body>

</html>
