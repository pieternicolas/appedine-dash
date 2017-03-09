<section class="content col-sm-9">
	<h1>
		Checkout
	</h1>
	<div class="col-sm-12 box">
		<div class="col-sm-3">
			Logged as <br>
			<img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" height="40px">
			<span >
				Julia Doe
				<a href="#">Log out</a>
			</span>
		</div>
		&nbsp;
	</div>

	<div class="box col-sm-12">
		<form action="checkout-success.php">
			<h3 class="col-sm-12">
				Payment information
			</h3>
			<div class="form-group col-sm-6">
				<label>Card Number</label>
					<div class="input-group">
						<input type="text" class="form-control" placeholder="1234 5678 9012 3456">
						<div class="input-group-addon">
							<i class="fa fa-credit-card-alt"></i>
						</div>
					</div>
				
			</div>

			<div class="form-group col-sm-6">
				<div>
					<div class="col-sm-7">
						<label>Exp. Date</label>
						<input type="text" class="form-control" placeholder="09/18">
					</div>
					<div class="col-sm-5">
						<label>CVV</label>
						<input type="text" class="form-control" placeholder="123">
					</div>
				</div>
			</div>

			<div class="form-group col-sm-6">
				<label>First Name</label>
				
					<input type="text" class="form-control" placeholder="Julia">
				
			</div>

			<div class="form-group col-sm-6">
				<label>Last Name</label>
				
					<input type="text" class="form-control" placeholder="Doe">
				
			</div>
			&nbsp;
		
	</div>

	<input type="submit" class="btn btn-primary col-sm-4" value="Complete Purchase">
	</form>
</section>