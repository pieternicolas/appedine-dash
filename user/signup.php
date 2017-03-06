<?php include __DIR__ . '/include/header-home.php'; ?>

<body>
	<div class="background-image-left hidden-xs" style="background-image: url(&quot;../dist/img/Chef-sign-up-bg.jpg&quot;);"></div>


	<div class="container navigation">
		<a href="#" class="logo">
			<img src="../dist/img/Logo-black.svg" height="38px">
		</a>
		<div class="login-bar">
			<span class="hidden-xs">
				Already have an account?
			</span>					
			<div class="btn btn-temp-inverse login">
				<a href="#">LOG IN</a>
			</div>
		</div>
	</div>


	<div class="container">
		<div class="row col-sm-6 col-sm-offset-6 signup">
			<h1 class="text-capitalize">
				sign up to appedine to
				<br class="hidden-xs">
				<span class="primary-color">create request</span>
			</h1>
			<form action="request-all.php">
				<div class="form-group col-sm-6 ">
					<div class="text-uppercase form-heading">
						first name
					</div>
					<input type="text" class="form-control" id="" name="first-name" placeholder="Julia">
				</div>
				<div class="form-group col-sm-6 ">
					<div class="text-uppercase form-heading">
						last name
					</div>
					<input type="text" class="form-control" id="" name="last-name" placeholder="Doe">
				</div>
				<div class="form-group col-sm-6 ">
					<div class="text-uppercase form-heading">
						email
					</div>
					<input type="email" class="form-control" id="" name="email" placeholder="juliadoe@gmail.com">
				</div>
				<div class="form-group col-sm-6 ">
					<div class="text-uppercase form-heading">
						password
					</div>
					<input type="password" class="form-control" id="" name="password" placeholder="5+ characters">
				</div>
				<div class="form-group col-sm-6">
					<input type="submit" name="submit" value="Sign Up For Free" class="btn-temp text-uppercase">
				</div>
			</form>
		</div>

		<div class="row col-sm-6 col-sm-offset-6 signup-social">
			<div class="form-heading text-uppercase">
				or use social media
			</div>
			<div class="col-sm-6">
				<a href="#" class="btn-google btn"><i class="fa fa-lg fa-google-plus"></i> Sign Up with Google</a>
			</div>
			<div class="col-sm-6">
				<a href="#" class="btn-facebook btn"><i class="fa fa-lg fa-facebook-official"></i> Sign Up with Facebook</a>
			</div>
		</div>
	</div>
	<?php include __DIR__ . '/include/footer.php'; ?>