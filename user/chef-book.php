<?php include __DIR__ . '/include/header.php'; ?>

<body class="hold-transition skin-black layout-top-nav">
<div class="wrapper">
  
  <!-- Navigation -->
  <header class="main-header main-header-home inverse-bg">
    <nav class="navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <img src="../dist/img/Logo.png" height="35px">
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
          <div>
            <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" height="60px">
          </div>
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
