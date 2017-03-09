<?php include __DIR__ . '/include/header.php'; ?>

<body class="hold-transition skin-black layout-top-nav">
<div class="wrapper">

  <?php include __DIR__ . '/include/dash-navigation.php'; ?>

  <!-- Full Width Column -->
  <div class="content-wrapper" id="app">
    <div class="container">
      <!-- Main content -->
      
      <!-- Checkout fields -->
      <?php include __DIR__ . '/include/checkout-fields.php'; ?>

      <section class="content col-sm-3">
        <div class="box">
          <div class="col-sm-2">
            <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" height="55px">
          </div>
          <div class="col-sm-9 col-sm-offset-1">
            <p><b>William Wheeler</b></p>
            <p>Microwave Cooking is The Wave Of The Future </p>
          </div>
          <div style="clear: both"></div>
        </div>

        <div class="box">
          <div class="col-sm-6">
            Total
          </div>
          <div class="col-sm-6">
            <strong>$2,696.75</strong>
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