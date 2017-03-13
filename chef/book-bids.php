<?php include __DIR__ . '/include/header.php'; ?>

<body class="hold-transition skin-black sidebar-mini">

<?php include __DIR__ . '/include/dash-navigation.php' ?>

<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header col-sm-10">
			<h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item-active">Your new jobs</li>
				</ol>
			</h1>
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-sm-10">
					<ul class="nav nav-tabs">
	          <li role="request-list">
	            <a href="#">All</a>
	          </li>
	          <li role="request-list">
	            <a href="#">Pending</a>
	          </li>
	          <li role="request-list">
	            <a href="#">Archived</a>
	          </li>
        	</ul>
				</div>
			</div>
			<div class="row">
				<div class="box col-sm-10">
					<div class="col-sm-6">
						<h4>Need a chef for todays dinner &nbsp;<span class="btn btn-flat btn-xs">Cost per pax = &nbsp; <i class="fa fa-usd"></i> 40,00 </span></h4>
						<p>You have a skillet that came from your mom, and before that your grandma, and has now fallen into your hands… </p>
					</div>
					<div class="col-sm-2 col-sm-offset-2">
						<a href="#" class="btn btn-primary btn-block">Bid Now</a>
						<a href="#" class="btn btn-archive btn-block">Reject</a>
					</div>
				</div>
				<div class="box col-sm-10">
					<div class="col-sm-6">
						<h4>Barbeque Techniques Two Methods To Consider &nbsp;<span class="btn btn-flat btn-xs">Cost per hour = &nbsp; <i class="fa fa-usd"></i>20,00</span></h4>
						<p>You have a skillet that came from your mom, and before that your grandma, and has now fallen into your hands… </p>
					</div>
					<div class="col-sm-2 col-sm-offset-2">
						<a href="#" class="btn btn-primary btn-block">Chat</a>
						<a href="#" class="btn btn-archive btn-block">Withdraw bid</a>
					</div>
				</div>
			</div>
		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->

<?php include __DIR__ . '/include/dash-sidebar.php' ?>

<?php include __DIR__ . '/include/footer.php'; ?>