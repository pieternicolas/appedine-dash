<?php include __DIR__ . '/include/header.php'; ?>
<body class="hold-transition skin-black layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="index.html" class="navbar-brand"><img src="../dist/img/Logo-black.svg" height="30px"></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav text-uppercase">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Browse <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
              </ul>
            </li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">My Bookings</a></li>
            <li class="active"><a href="requests.html">My Requests</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Notifications Menu -->
            <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
              <!-- Inner Menu: contains the notifications -->
              <ul class="menu">
                <!-- start notification -->
                <li>
                <a href="#">
                  <i class="fa fa-users text-aqua"></i> 5 new members joined today
                </a>
                </li>
                <!-- end notification -->
              </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
            </li>
            
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Julia Doe</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
              <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

              <p>
                Julia Doe
                <small>Member since Nov. 2012</small>
              </p>
              </li>
              
              <!-- Menu Footer-->
              <li class="user-footer">
              <div class="pull-left">
                <a href="#" class="btn btn-profile btn-flat">Profile</a>
              </div>
              <div class="pull-right">
                <a href="#" class="btn btn-profile btn-flat">Sign out</a>
              </div>
              </li>
            </ul>
            </li>
          </ul>
          </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>

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
                <a href="request-view.html" class="btn btn-secondary text-uppercase ">View new bids</a>
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
        <a href="request-create.html" class="btn btn-default">Create request</a>
      </div>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->


<?php include __DIR__ . '/include/footer.php'; ?>