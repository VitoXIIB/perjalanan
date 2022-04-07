
<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{asset('sign/css/style.css')}}">
	<link rel="icon" href="assets/images/logo_smk.jpg">
	</head>
	<body style="background-image: url(assets/images/header-background.jpg)">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					
			      </div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4" style="color: white">Masuk</h3>
			      		</div>

			      	</div>
							<form action="/postlogin" method="post" class="signin-form">@csrf
			      		<div class="form-group mb-3">
			      			<label class="label" for="name" style="color: white">Email</label>
			      			<input type="text" class="form-control" style="background-color: #4d475c; color: white;" autocomplete="off" name="email" required>
			      		</div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password" style="color: white">Kata Sandi</label>
		              <input type="password" class="form-control" style="background-color:#4d475c; color: white;" name="password" required>
		            </div>
		            <div class="form-group mb-3">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Masuk</button>
		            </div>
		            
		          </form>
                      <p class="text-center">Tidak Punya Akun? <a href="/register" class="text-info">Daftar Akun</a></p>
		        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{asset('sign/js/jquery.min.js')}}"></script>
  <script src="{{asset('sign/js/popper.js')}}"></script>
  <script src="{{asset('sign/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('sign/js/main.js')}}"></script>
  @include('sweetalert::alert')
	</body>
</html>

