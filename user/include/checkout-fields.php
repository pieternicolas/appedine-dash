
	<h1>
		Checkout
	</h1>
	<div class="col-sm-12 box">
		
			<span class="text-uppercase h6">Logged as :</span>
			<img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" height="40px">
			<span class="h4">Julia Doe</span><br>
			<a href="#" class="h6 primary-color">Log out</a>
		
		
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
				<div class="row">
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
			
			<div class="form-group col-xs-4">
				<input type="submit" class="btn btn-primary text-uppercase form-control" value="Complete Purchase">
			</div>
		
	</div>
	</form>
