<?php include __DIR__ . '/include/header.php'; ?>

<body class="hold-transition skin-black layout-top-nav">
<div class="wrapper">
  
  <?php include __DIR__ . '/include/dash-navigation.php'; ?>

<!-- Full Width Column -->
  <div class="content-wrapper" id="app">
    <div class="container" id="root">
      <!-- Main content -->
      <p v-text="test"></p>
      <button type="button" v-on:click="doThis()">hi</button>
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
