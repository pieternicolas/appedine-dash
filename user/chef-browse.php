<?php include __DIR__ . '/include/header.php'; ?>

<body class="hold-transition skin-black layout-top-nav">
<div class="wrapper">
	
	<!-- Navigation -->
	<header class="main-header main-header-home inverse">
		<nav class="navbar">
			<div class="container">
				<a class="navbar-brand" href="index.html">
					<img src="../dist/img/Logo-black.svg" height="35px">
					<div class="mini-logo text-capitalize">
						Chef on demand
					</div>
				</a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
					<span class="glyphicon glyphicon-th-list"></span>                      
				</button>
				<div class="collapse navbar-collapse row text-uppercase" id="navbar">
					<!-- Navigation left -->
					<div class="navbar-left">
						<ul class="nav navbar-nav">
							<li>
								<a href="#">Chef on demand</a>
							</li>
							<li>
								<a href="#">how it works</a>
							</li>
						</ul>
					</div>
					<!-- Navigation left end -->
					<!-- Navigation right -->
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="#">log in</a>
						</li>
						<li>
							<button href="#" class="btn btn-default text-uppercase">Become a chef</button>
						</li>
					</ul>
					<!-- Navigation right (end) -->
					&nbsp;
				</div>
			</div>
		</nav>
	</header>
	<!-- Navigation (end) -->

<!-- Full Width Column -->
	<div class="content-wrapper" id="app">
		<div class="container">
			<!-- Main content -->
			<section class="content">
				<div class="col-sm-12">
					<h1>
					All chefs on demand
					</h1>
					<p>Find fun event ideas and venues in Austin for your next client entertainment event, <br class="hidden-xs"> team-building activity, company party, corporate meeting and more.</p>
				</div>
				<div class="col-sm-3">
					<div class="box">
						<label>FILTERS</label>
						<a href="#" class="pull-right primary-color">CLEAR ALL</a>
						<div>
							<label>Search</label>
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Keyword, location">
								<div class="input-group-addon">
									<i class="fa fa-search"></i>
								</div>
							</div>
						</div>
						<div>
							<label>Availability</label>
							<div class="input-group date">
								<input type="text" class="form-control" id="datepicker" placeholder="Choose a date">
								<div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								</div>
							</div>
						</div>
						<div>
							<label>Group size</label>
							<div class="input-group">
								<input type="number" class="form-control" placeholder="Number of people">
								<div class="input-group-addon">
									<i class="fa fa-users"></i>
								</div>
							</div>
						</div>
						<div>
							<label>Cuisine</label>
							<select class="form-control select2" multiple="multiple" data-placeholder="Select from list">
								<option>Alabama</option>
								<option>Alaska</option>
								<option>California</option>
								<option>Delaware</option>
								<option>Tennessee</option>
								<option>Texas</option>
								<option>Washington</option>
							</select>
						</div>
					</div>
				</div>
				<div class="col-sm-9">
					<h3>Popular chefs on-demand</h3>
					<div class="row">
						<div class="col-sm-4">
	            <div class="box box-chef inverse">
	              <img src="../dist/img/chef-menu-1.jpg" style="width: 100%; height: 125px;">
	              <div class="view-chef">
	                <img src="../dist/img/user1-128x128.jpg" class="img-circle" width="100px" height="100px">
	                <h5>Bess Ball</h5>
	                <h6>North Quintonchester</h6>
	                <p class="view-chef-content">Thrill Friends And Family With A Make It Yourself Pizza Party</p>
	                <p>
	                  <i class="fa fa-usd"></i><span class="view-chef-price">96+</span><br class="hidden-xs">
	                  per person
	                </p>
	                <div>
	                  <button class="btn btn-flat">Caribbean</button>
	                  <button class="btn btn-flat">European</button>
	                  <span class="text-muted"><small>+3 more</small></span>
	                </div>
	              </div>
	            </div>
	          </div>
	          <div class="col-sm-4">
	            <div class="box box-chef inverse">
	              <img src="../dist/img/chef-menu-1.jpg" style="width: 100%; height: 125px;">
	              <div class="view-chef">
	                <img src="../dist/img/user1-128x128.jpg" class="img-circle" width="100px" height="100px">
	                <h5>Carolyn Sanders</h5>
	                <h6>Grayceshire</h6>
	                <p class="view-chef-content">Delivering kisses and miracles</p>
	                <p>
	                  <i class="fa fa-usd"></i><span class="view-chef-price">57+</span><br class="hidden-xs">
	                  per person
	                </p>
	                <div>
	                  <button class="btn btn-flat">International</button>
	                  <button class="btn btn-flat">Spanish</button>
	                  <span class="text-muted"><small>+2 more</small></span>
	                </div>
	              </div>
	            </div>
	          </div>
	          <div class="col-sm-4">
	            <div class="box box-chef inverse">
	              <img src="../dist/img/chef-menu-1.jpg" style="width: 100%; height: 125px;">
	              <div class="view-chef">
	                <img src="../dist/img/user1-128x128.jpg" class="img-circle" width="100px" height="100px">
	                <h5>Steven Marsh</h5>
	                <h6>Jamirchester</h6>
	                <p class="view-chef-content">When to use high heat on your barbeque</p>
	                <p>
	                  <i class="fa fa-usd"></i><span class="view-chef-price">127+</span><br class="hidden-xs">
	                  per person
	                </p>
	                <div>
	                  <button class="btn btn-flat">Caribbean</button>
	                  <button class="btn btn-flat">European</button>
	                  <span class="text-muted"><small>+3 more</small></span>
	                </div>
	              </div>
	            </div>
	          </div>
					</div>
					<h3>There are 48 available chefs</h3>
						<div class="row">
							<div class="col-sm-4">
		            <div class="box box-chef">
		              <img src="../dist/img/chef-menu-1.jpg" style="width: 100%; height: 125px;">
		              <div class="view-chef">
		                <img src="../dist/img/user1-128x128.jpg" class="img-circle" width="100px" height="100px">
		                <h5>Bess Ball</h5>
		                <h6>North Quintonchester</h6>
		                <p class="view-chef-content">Thrill Friends And Family With A Make It Yourself Pizza Party</p>
		                <p>
		                  <i class="fa fa-usd"></i><span class="view-chef-price">96+</span><br class="hidden-xs">
		                  per person
		                </p>
		                <div>
		                  <button class="btn btn-flat inverse">Caribbean</button>
		                  <button class="btn btn-flat inverse">European</button>
		                  <span class="text-muted"><small>+3 more</small></span>
		                </div>
		              </div>
		            </div>
		          </div>
		          <div class="col-sm-4">
		            <div class="box box-chef">
		              <img src="../dist/img/chef-menu-1.jpg" style="width: 100%; height: 125px;">
		              <div class="view-chef">
		                <img src="../dist/img/user1-128x128.jpg" class="img-circle" width="100px" height="100px">
		                <h5>Carolyn Sanders</h5>
		                <h6>Grayceshire</h6>
		                <p class="view-chef-content">Delivering kisses and miracles</p>
		                <p>
		                  <i class="fa fa-usd"></i><span class="view-chef-price">57+</span><br class="hidden-xs">
		                  per person
		                </p>
		                <div>
		                  <button class="btn btn-flat inverse">International</button>
		                  <button class="btn btn-flat inverse">Spanish</button>
		                  <span class="text-muted"><small>+2 more</small></span>
		                </div>
		              </div>
		            </div>
		          </div>
		          <div class="col-sm-4">
		            <div class="box box-chef">
		              <img src="../dist/img/chef-menu-1.jpg" style="width: 100%; height: 125px;">
		              <div class="view-chef">
		                <img src="../dist/img/user1-128x128.jpg" class="img-circle" width="100px" height="100px">
		                <h5>Steven Marsh</h5>
		                <h6>Jamirchester</h6>
		                <p class="view-chef-content">When to use high heat on your barbeque</p>
		                <p>
		                  <i class="fa fa-usd"></i><span class="view-chef-price">127+</span><br class="hidden-xs">
		                  per person
		                </p>
		                <div>
		                  <button class="btn btn-flat inverse">Caribbean</button>
		                  <button class="btn btn-flat inverse">European</button>
		                  <span class="text-muted"><small>+3 more</small></span>
		                </div>
		              </div>
		            </div>
		          </div>
		          <div class="col-sm-4">
		            <div class="box box-chef">
		              <img src="../dist/img/chef-menu-1.jpg" style="width: 100%; height: 125px;">
		              <div class="view-chef">
		                <img src="../dist/img/user1-128x128.jpg" class="img-circle" width="100px" height="100px">
		                <h5>Bess Ball</h5>
		                <h6>North Quintonchester</h6>
		                <p class="view-chef-content">Thrill Friends And Family With A Make It Yourself Pizza Party</p>
		                <p>
		                  <i class="fa fa-usd"></i><span class="view-chef-price">96+</span><br class="hidden-xs">
		                  per person
		                </p>
		                <div>
		                  <button class="btn btn-flat inverse">Caribbean</button>
		                  <button class="btn btn-flat inverse">European</button>
		                  <span class="text-muted"><small>+3 more</small></span>
		                </div>
		              </div>
		            </div>
		          </div>
		          <div class="col-sm-4">
		            <div class="box box-chef">
		              <img src="../dist/img/chef-menu-1.jpg" style="width: 100%; height: 125px;">
		              <div class="view-chef">
		                <img src="../dist/img/user1-128x128.jpg" class="img-circle" width="100px" height="100px">
		                <h5>Carolyn Sanders</h5>
		                <h6>Grayceshire</h6>
		                <p class="view-chef-content">Delivering kisses and miracles</p>
		                <p>
		                  <i class="fa fa-usd"></i><span class="view-chef-price">57+</span><br class="hidden-xs">
		                  per person
		                </p>
		                <div>
		                  <button class="btn btn-flat inverse">International</button>
		                  <button class="btn btn-flat inverse">Spanish</button>
		                  <span class="text-muted"><small>+2 more</small></span>
		                </div>
		              </div>
		            </div>
		          </div>
		          <div class="col-sm-4">
		            <div class="box box-chef">
		              <img src="../dist/img/chef-menu-1.jpg" style="width: 100%; height: 125px;">
		              <div class="view-chef">
		                <img src="../dist/img/user1-128x128.jpg" class="img-circle" width="100px" height="100px">
		                <h5>Steven Marsh</h5>
		                <h6>Jamirchester</h6>
		                <p class="view-chef-content">When to use high heat on your barbeque</p>
		                <p>
		                  <i class="fa fa-usd"></i><span class="view-chef-price">127+</span><br class="hidden-xs">
		                  per person
		                </p>
		                <div>
		                  <button class="btn btn-flat inverse">Caribbean</button>
		                  <button class="btn btn-flat inverse">European</button>
		                  <span class="text-muted"><small>+3 more</small></span>
		                </div>
		              </div>
		            </div>
		          </div>
						</div>
						<div class="row">
							<button class="btn btn-plain col-sm-4 col-sm-offset-4">Show More</button>
						</div>
				</div>
				&nbsp;
			</section>
			<!-- /.content -->
		</div>
		<!-- /.container -->
	</div>

	<!-- Footer -->
			
		<?php include __DIR__ . '/include/footer-home.php'; ?>
	
	<!-- Footer (end) --> 
	
	<!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->

<?php include __DIR__ . '/include/footer.php' ?>