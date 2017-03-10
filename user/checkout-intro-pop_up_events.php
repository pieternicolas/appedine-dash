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
                  Events
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
                      <a href="#">events</a>
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
                    <button href="#" class="btn btn-default text-uppercase">Become a venue partner</button>
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
      
      
      <section class="content col-sm-9">
        <h1>Checkout</h1>
        <h2>Already have an account?</h2>
        <div class="row">
          <form>
            <div class="form-group col-sm-6 ">
              <label>Email</label>
              <input type="email" class="form-control" placeholder="juliadoe@gmail.com">
            </div>
            <div class="form-group col-sm-6 ">
              <label>Password</label>
              <input type="password" class="form-control" placeholder="Enter your password">
            </div>
            <div class="form-group col-sm-6">
              <input type="submit" class="btn btn-primary" value="Log In">
            </div>
          </form>
        </div>
        <h2>I'm a new user</h2>
        <div class="row">
          <form>
            <div class="form-group col-sm-6 ">
              <label>First name</label>
              <input type="text" class="form-control" placeholder="Julia">
            </div>
            <div class="form-group col-sm-6 ">
              <label>Last name</label>
              <input type="text" class="form-control" placeholder="Doe">
            </div>
            <div class="form-group col-sm-6 ">
              <label>Email</label>
              <input type="email" class="form-control" placeholder="juliadoe@gmail.com">
            </div>
            <div class="form-group col-sm-6 ">
              <label>Password</label>
              <input type="password" class="form-control" placeholder="5+ characters">
            </div>
            <div class="form-group col-sm-6">
              <input type="submit" class="btn btn-primary" value="Sign up">
            </div>
          </form>
        </div>
        <div class="box">
          <span class="h2">Want to stay private?</span>
          <span title="In Guest Payment mode your personal and payment information wont be saved. We will send you an email with event booking details. If you wish to track your booking from dashboard you shoud login or create profile." class="h6 text-uppercase pull-right">What is this?</span>
          <div class="divider">&nbsp;</div>
          <div>
            <a href="#" class="btn btn-archive">Guest Payment</a>
          </div>
        </div>
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