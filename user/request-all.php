<?php include __DIR__ . '/include/header.php'; ?>

<body class="hold-transition skin-black layout-top-nav">
<div class="wrapper">
  
  <?php include __DIR__ . '/include/dash-navigation.php'; ?>

<!-- Full Width Column -->
  <div class="content-wrapper" id="app">
    <div class="container">
      <!-- Main content -->
      <section class="content col-sm-10">
        <h1 class="col-sm-12">
          My requests
        </h1>
        <ul class="nav nav-tabs col-sm-10">
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

        <div class="box col-sm-10 request">
          <div class="col-sm-8 box-header">
            <h3>
              Need a chefs for today's dinner
            </h3>
            <p>
              You have a skillet that come from your mom, and before that your grandma, and now has fallen into your hands ...
            </p>
          </div>
          <div class="col-sm-3 col-sm-offset-1">
              <div class="request-view">
                <a href="request-view.php" class="btn btn-secondary text-uppercase ">View new bids</a>
              </div>
              <div class="request-action">
                <a href="#"><i class="fa fa-files-o fa-lg"></i></a>
                <a href="#"><i class="fa fa-pencil fa-lg"></i></a>
                <a href="#"><i class="fa fa-archive fa-lg"></i></a>
                <a href="#"><i class="fa fa-trash-o fa-lg"></i></a>
              </div>
          </div>
        </div>
        <div class="box col-sm-10 request">
          <div class="col-sm-8">
            <h3>
              Bbq Grilling Versus Smoking The Great Debate
            </h3>
            <p>
              You may be a person who loves to cook. You absolutely love to spend time in your kitchen. As a result, you like to outfit your kitchen with the latest…
            </p>
          </div>
          <div class="col-sm-3 col-sm-offset-1">
              <div class="request-view">
                <a href="#" class="btn btn-archive text-uppercase ">Archived</a>
              </div>
          </div>
          <div class="overlay"></div>
        </div>
      </section>
      <div class="col-sm-2">
        <a href="request-create.php" class="btn btn-default">Create request</a>
      </div>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->


<?php include __DIR__ . '/include/footer.php'; ?>