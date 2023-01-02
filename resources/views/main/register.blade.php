<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/mdb.min.css">
	<link rel="stylesheet" href="css/myform.css">
	<title>Register</title>
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
										<p>Register your account</p>
	
										<div class="form-outline mb-4">
											<input type="email" id="form2Example11" class="form-control"
												placeholder="Phone number or email address" />
											<label class="form-label" for="form2Example11">Username</label>
										</div>
	
										<div class="form-outline mb-4">
											<input type="password" id="form2Example22" class="form-control" />
											<label class="form-label" for="form2Example22">Password</label>
										</div>

										<div class="form-outline mb-4">
											<input type="confirmPassword" id="form2Example22" class="form-control" />
											<label class="form-label" for="form2Example22">Confirm your Password</label>
										</div>
	
										<div class="text-center pt-1 mb-5 pb-1">
											<button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Register</button>
											</div>
									</form>
	
								</div>
							</div>
							<div class="col-lg-6 d-flex align-items-center gradient-custom-2">
								<div class="text-white px-3 py-4 p-md-5 mx-md-4">
									<h4 class="mb-4">Perkumpulan Keluarga Marga Lie</h4>
									<p class="small mb-0"></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
<script src="css/mdb.min.js"></script>
</html>