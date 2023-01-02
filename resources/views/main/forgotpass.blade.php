<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- Font Awesome -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
rel="stylesheet"
/>
<!-- Google Fonts -->
<link
href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
rel="stylesheet"
/>
<!-- MDB -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.css"
rel="stylesheet"
/>
	{{-- <link rel="stylesheet" href="css/mdb.min.css"> --}}
	<link rel="stylesheet" href="{{asset('css/myform.css')}}">
	<title>Login</title>

</head>
<body>
	<section class="h-100 gradient-form">
		<div class="container py-5 h-100">
			<div class="row d-flex justify-content-center align-items-center h-100">
				<div class="col-xl-10">
					<div class="card rounded-3 text-black">
						<div class="row g-0">
							<div class="col-lg-6">
								<div class="card-body p-md-5 mx-md-4">
	
									<div class="text-center">
										<img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
											style="width: 185px;" alt="logo">
										<h4 class="mt-1 mb-5 pb-1">Admin Marga Lie</h4>
									</div>
	
									<form action="/login" method="POST">
										@csrf
										<p>Email Address for password reset</p>

										<div class="form-outline mb-4"> 
											<input type="email" id="email" name="email" class="form-control"
												placeholder="Email Address" />
											<label class="form-label" for="email">Email</label>
										</div>
										<div class="text-center pt-1 mb-5 pb-1">
											<button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Submit</button>
											<a class="text-muted" href="#!">Go Back?</a>
										</div>	
									</form>
									@if ($message = Session::get('error'))
										<div class="alert alert-danger alert-block">
											<strong>{{ $message }}</strong>
										</div>
									@endif
									@if ($message = Session::get('success'))
									<div class="alert alert-success" role="alert">
										<strong>{{ $message }}</strong>
									</div>
									@endif
									@if ($message = Session::get('auth'))
									<div class="alert alert-warning" role="alert">
										<strong>{{ $message }}</strong>
									</div>
									@endif
								</div>
							</div>
							<div class="col-lg-6 d-flex align-items-center gradient-custom-2">
								<div class="text-white px-3 py-4 p-md-5 mx-md-4 d-flex flex-column">
									<img src="./assets/margalielogo.png" alt="Marga lie logo" class="mx-auto">
									{{-- <h4 class="mb-4">We are more than just a company</h4> --}}
									<p class="small mb-0">Selamat Datang</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
{{-- <script src="mdb.min.js"></script> --}}
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.js"
></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
	$(document).ready( function() {
		setTimeout(() => {
			$(".alert").fadeOut(1000);
		}, 1000);
	}	
	)	
</script>
</html>