<?php include __DIR__ . '/include/header.php'; ?>

<body class="hold-transition skin-black layout-top-nav">
<div class="wrapper">

  <?php include __DIR__ . '/include/dash-navigation.php'; ?>

  <!-- Full Width Column -->
  <div class="content-wrapper" id="app">
    <div class="container">
      <!-- Main content -->
      
      <!-- Checkout fields -->
      <section class="content col-sm-9">
      <?php include __DIR__ . '/include/checkout-fields.php'; ?>
      </section>

      <section class="content col-sm-3">
        <h2>Booking Details</h2>
        <div class="box box-menu inverse">
          <div class="view-menu">
            <h5>Quick And Easy Lunches For The Cooking Challenged</h5>
            <h6>Mueller</h6>
            
            <p class="view-menu-content">Choosing A Quality Cookware Set</p>
          </div>
          <img src="../dist/img/chef-menu-2.jpg" style="width: 100%; height: 125px;">
          <div class="view-menu">
            <h6>307 W. 5th St., B Austin, TX 78701</h6>
          </div>
          <div class="view-menu row text-uppercase">
            <div class="col-sm-6">
              <h6><strong>Event Date and time</strong></h6>
            </div>
            <div class="col-sm-6">
              <h6>15 Mar 2017 - 14:30</h6>
            </div>
            <div class="col-sm-6">
              <h6><strong>Duration</strong></h6>
            </div>
            <div class="col-sm-6">
              <h6>5 hours</h6>
            </div>
            <div class="col-sm-6">
              <h6><strong>Headcount</strong></h6>
            </div>
            <div class="col-sm-6">
              <h6>6 &nbsp; <i class="fa fa-male"></i></h6>
            </div>
          </div>
          <div style="clear: both"></div>
        </div>

        <div class="box row">
          
          <div class="col-sm-6">
            Total
          </div>
          <div class="col-sm-6">
            <strong><i class="fa fa-usd"></i>12,696.75</strong>
          </div>
          <div class="col-sm-6">
            Amount due now
          </div>
          <div class="col-sm-6">
            <h4><strong><i class="fa fa-usd"></i>6,348.37</strong></h4>
          </div>
          <div class="divider col-sm-12 hidden-xs"><hr></div>
          <div class="col-sm-6">
            Amount due March 7, 2017
          </div>
          <div class="col-sm-6">
            <strong><i class="fa fa-usd"></i>6,348.37</strong>
          </div>
          <div style="clear: both;"></div>
        </div>

      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->

<?php include __DIR__ . '/include/footer.php'; ?>