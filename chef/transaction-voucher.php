<?php include __DIR__ . '/include/header.php'; ?>

<body class="hold-transition skin-black sidebar-mini">

<?php include __DIR__ . '/include/dash-navigation.php' ?>

<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header col-sm-10">
			<h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item-active">Transactions</li>
				</ol>
			</h1>
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-sm-10">
					<ul class="nav nav-tabs">
						<li role="request-list">
							<a href="#">Previous Engagements</a>
						</li>
						<li role="request-list">
							<a href="#">Transaction History</a>
						</li>
						<li role="request-list" class="active">
							<a href="#">Vouchers Transaction</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="box">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Vouchers</th>
							<th>Date created</th>
							<th>Redeemed</th>
							<th>Revenue received</th>
							<th>Outstanding</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>Chicken wing teriyaki</th>
							<th>02/28/2017</th>
							<th>124/150</th>
							<th><i class="fa fa-usd"></i>123,000</th>
							<th><i class="fa fa-usd"></i>15,000</th>
						</tr>
						<tr>
							<th>Chicken wing teriyaki</th>
							<th>02/28/2017</th>
							<th>124/150</th>
							<th><i class="fa fa-usd"></i>123,001</th>
							<th><i class="fa fa-usd"></i>15,000</th>
						</tr>
						<tr>
							<th>Chicken wing teriyaki</th>
							<th>02/28/2017</th>
							<th>124/150</th>
							<th><i class="fa fa-usd"></i>123,000</th>
							<th><i class="fa fa-usd"></i>15,000</th>
						</tr>
					</tbody>
				</table>
			</div>
		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->

<?php include __DIR__ . '/include/dash-sidebar.php' ?>

<?php include __DIR__ . '/include/footer.php'; ?>