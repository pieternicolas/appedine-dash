<?php include __DIR__ . '/include/header.php'; ?>

<body class="hold-transition skin-black sidebar-mini">

<?php include __DIR__ . '/include/dash-navigation.php' ?>

<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header col-sm-10">
			<h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Pop Up Events</a></li>
					<li class="breadcrumb-item-active">Create Event</li>

					<span class="pull-right">
						<a href="#" class="btn btn-archive">Cancel</a>
						<a href="#" class="btn btn-primary">Create</a>
					</span>
				</ol>
			</h1>
		</section>

		<!-- Main content -->
		<section class="content">
			<form>
				<div class="col-lg-2">
					
				</div>
				<div class="col-lg-8">
					<div class="form-group col-sm-12">
						<input type="text" class="form-control input-lg" placeholder="Give it a title">
					</div>
					<div class="form-group col-sm-6">
						<label>Location</label>
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Enter location">
							<div class="input-group-addon">
								<i class="fa fa-location-arrow"></i>
							</div>
						</div>
					</div>
					<div class="form-group col-sm-6">
						<label>Cost per person</label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-usd"></i>
							</div>
							<input type="number" class="form-control" placeholder="10" min="0">
							<div class="input-group-addon">
								.00
							</div>
						</div>
					</div>
					<div class="form-group col-sm-6">
						<label>Availability dates</label>
						<div class="input-group">
							<input type="text" class="form-control" id="datepicker" placeholder="Choose dates">
							<div class="input-group-addon">
		            <i class="fa fa-calendar"></i>
		          </div>
						</div>
					</div>
					<div class="form-group col-sm-6">
						<label>Event type</label>
						<div class="input-group">
							<select class="form-control">
								<option disabled selected>Select from list</option>
								<option>Placeholder 1</option>
								<option>Placeholder 2</option>
								<option>Placeholder 3</option>
							</select>
							<div class="input-group-addon">
								<i class="fa fa-list"></i>
							</div>
						</div>
					</div>
					<div class="form-group col-sm-6">
						<label>Min pax</label>
						<div class="input-group">
							<input type="number" class="form-control" placeholder="Min guests" min="0">
							<div class="input-group-addon">
								<i class="fa fa-users"></i>
							</div>
						</div>
					</div>
					<div class="form-group col-sm-6">
						<label>Max pax</label>
						<div class="input-group">
							<input type="number" class="form-control" placeholder="Max guests" min="0">
							<div class="input-group-addon">
								<i class="fa fa-users"></i>
							</div>
						</div>
					</div>
					<div class="bootstrap-timepicker">
						<div class="form-group col-sm-6">
							<label>Start time</label>
							<div class="input-group">
								<input type="text" class="form-control timepicker" placeholder="Start time" min="0">
								<div class="input-group-addon">
									<i class="fa fa-clock-o"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="bootstrap-timepicker">
						<div class="form-group col-sm-6">
							<label>End time</label>
							<div class="input-group">
								<input type="text" class="form-control timepicker" placeholder="End time" min="0">
								<div class="input-group-addon">
									<i class="fa fa-clock-o"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group col-sm-12">
						<label>Description</label>
						<textarea class="form-control" placeholder="Describe the event"></textarea>
					</div>
					<div class="form-group col-sm-12">
						<label>Food &amp; Beverage</label>
						<div>
							<button class="btn btn-primary">Add existing menu</button>
						</div>
					</div>
					<div class="form-group col-sm-12">
						<label>Features</label>
						<div>
							<input type="checkbox" class="minimal" name="external-music"> &nbsp; External music
							<input type="checkbox" class="minimal" name="projector"> &nbsp; Projector / TV
							<input type="checkbox" class="minimal" name="sound"> &nbsp; Microphone / Sound
							<input type="checkbox" class="minimal" name="smoking"> &nbsp; Smoking Area
							<input type="checkbox" class="minimal" name="wifi"> &nbsp; Wifi
							<input type="checkbox" class="minimal" name="parking"> &nbsp; Parking
							<input type="checkbox" class="minimal" name="aircon"> &nbsp; Air condition
							<input type="checkbox" class="minimal" name="disability"> &nbsp; Disability access
		 				</div>
					</div>
				</div>
			</form>
		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->

<?php include __DIR__ . '/include/dash-sidebar.php' ?>

<?php include __DIR__ . '/include/footer.php'; ?>