<!doctype html>
<html lang="en">
  <head>
  	<title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="assets/loginadem/css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(assets/loginadem/images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Account Log In</h3>
		      	<form action="<?= site_url('/emplogin_process') ?>"  method="post" class="signin-form">
		      		<div class="form-group">
		      			<input type="text" name="email" class="form-control" placeholder="Email" required>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" name="password" type="password" class="form-control" placeholder="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div>
		            	
								</div>
								<div class="text-center">
									<a href="#" style="color: #fff">Forgot Password</a>
								</div>
	            </div>
	          </form>


	          <p class="w-100 text-center">&mdash; Don't have an account yet?&mdash;</p>
              
	          <div class="social d-flex text-center">
	          	<a href="/empregister" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Register</a>
	          </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="assets/loginadem/js/jquery.min.js"></script>
  <script src="assets/loginadem/js/popper.js"></script>
  <script src="assets/loginadem/js/bootstrap.min.js"></script>
  <script src="assets/loginadem/js/main.js"></script>

	</body>
</html>

