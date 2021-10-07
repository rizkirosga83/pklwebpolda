<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="icon" type="image/png" href="img/logo 2.png">
</head>

<body class="login-page">
	<div class="container-fluid mx-auto">
		<div class="row justify-content-md-center">
			<div class="card-wrapper">
				<div class="brand">
					<img src="img/logo 2.png" alt="logo">
				</div>
				<div class="card fat">
					<div class="card-body">
						<h4 class="card-title">Login</h4>
						<form method="POST" class="my-login-validation" novalidate="">
							<div class="form-group">
								<label for="username">Username</label>
								<input id="username" type="username" class="form-control" name="email" value="" required
									autofocus>
								<div class="invalid-feedback">
									Username is invalid
								</div>
							</div>

							<div class="form-group">
								<label for="password">Password
									<a href="{{url('forgot')}}" class="float-right">
										Forgot Password? </a>
								</label>
								<input id="password" type="password" class="form-control" name="password" required
									data-eye>
								<div class="invalid-feedback">
									Password is required
								</div>
							</div>

							<div class="form-group">
								<a class="btn btn-primary btn-block" type="submit" value="login" href="{{url('home')}}">
									LOGIN
								</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>


</body>

</html>