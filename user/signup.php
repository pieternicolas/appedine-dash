<?php include __DIR__ . '/include/header.php'; ?>

<body>
	<div class="background-image-left hidden-xs" style="background-image: url(&quot;../dist/img/Chef-sign-up-bg.jpg&quot;);"></div>


	<div class="container nav nav-transparent">
		<a href="#" class="logo">
			<img src="../dist/img/Logo.png" height="38px" class="hidden-xs">
			<img src="../dist/img/Logo-black.svg" height="38px" class="visible-xs">
		</a>
		<div class="login-bar pull-right">
			<span class="hidden-xs">
				Already have an account? &nbsp;
			</span>

			<a href="#" class="btn btn-inverse">LOG IN</a>
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
					<input type="submit" name="submit" value="Sign Up For Free" class="btn btn-default text-uppercase">
				</div>
			</form>
		</div>

		<div class="row col-sm-6 col-sm-offset-6 signup-social">
			<div class="form-heading">
			<label class="text-uppercase">Or use social media</label>
			</div>
			<div class="col-sm-6">
				<a href="#" class="btn btn-login-google"><i class="fa fa-lg fa-google-plus"></i>&nbsp; Sign Up with Google</a>
			</div>
			<br class="visible-xs">
			<div class="col-sm-6">
				<a href="#" class="btn btn-login-fb"><i class="fa fa-lg fa-facebook-official"></i>&nbsp; Sign Up with Facebook</a>
			</div>
		</div>
	</div>
	<?php include __DIR__ . '/include/footer.php'; ?>