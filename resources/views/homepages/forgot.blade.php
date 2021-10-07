<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Forgot Password</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="css/dashboard.css">
	<link rel="icon" type="image/png" href="img/logo 2.png">
</head>

<body class="login-page">
	<div class="container-fluid mx-auto">
		<div class="row justify-content-md-center">
			<div class="card-wrapper">
				<div class="brand">
					<img src="img/logo 2.png" class="logo">
				</div>
				<div class="card fat">
					<div class="card-body">
						<h4 class="card-title">Forgot Password</h4>
						<form method="POST" class="my-login-validation" novalidate="">
							<div class="form-group">
								<a>Enter Your Username or Phone Number and we’ll send you a link to get back into your
									account.</a>
							</div>

							<div class="form-group">
								<label for="username">Username or Phone Number</label>
								<input id="username" type="username" class="form-control" name="email" value="" required
									autofocus>
								<div class="invalid-feedback">
									Username or Phone Number is invalid
								</div>
							</div>

							<div class="form-group">
								<a class="btn btn-primary btn-block" type="submit" value="ForgotPassword"
									href="login.html" data-toggle="modal" data-target="#forgotmodal">
									FORGOT PASSWORD
								</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="forgotmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">SMS Code Sent</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">We sent a login code to Your Phone Number to get you back into your account.
				</div>
				<div class="modal-footer">
					<a class="btn btn-primary" href="halamanutama.html">OK</a>
				</div>
			</div>
		</div>
	</div>

	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>