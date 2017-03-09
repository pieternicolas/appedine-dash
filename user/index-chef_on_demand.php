
<?php include __DIR__ . '/include/header.php'; ?>

<body class="hold-transition skin-black layout-top-nav">
  <div class="wrapper">
      <div class="main-area" style="background-image: url(&quot;../dist/img/homepage--for-chefs.jpg&quot;);">
        <!-- Navigation -->
        <header class="main-header main-header-home">
          <nav class="navbar">
            <div class="container">
              <a class="navbar-brand" href="index.html">
                <img src="../dist/img/Logo.png" height="35px">
                <div class="mini-logo text-capitalize">
                  chef-on-demand
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
                      <a href="#">chefs-on-demand</a>
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
                    <button href="#" class="btn btn-default text-uppercase">Become Chef</button>
                  </li>
                </ul>
                <!-- Navigation right (end) -->
                &nbsp;
              </div>
            </div>
          </nav>
        </header>
        <!-- Navigation (end) -->
        <div class="text-uppercase heading">
          <div class="row col-sm-8 col-sm-offset-2">
            <h1>discover &amp; book <br class="hidden-xs">
            <span class="primary-color"><b>chefs in your area</b></span></h1>
            <div class="col-sm-4 col-sm-offset-4"><a href="signup.php" class="btn btn-default btn-block">create request</a></div>
          </div>
        </div>
        <div style="clear: both;"></div>
      </div>
      

      <!-- Main content -->
      <!-- 1st content row -->
      <section class="container-fluid content chefs">
        <div class="row content-heading">
          <h1 class="text-capitalize">
            pro chefs: work with the best
          </h1>
          <p class="col-sm-8 col-sm-offset-2 text-capitalize">
            we promote and drive your sales for chef's culinary service / your pop up events / your unique spaces for corporate bookings / food tickets for you f &amp; b promo campaign
          </p>
        </div>

        <div class="row profile-row">
          <a href="#" class="col-sm-3 profile">
            <div class="profile-pic">
              <img class="img-circle" src="../dist/img/placeholder.svg" width="100px">
            </div>
            <div class="profile-name text-uppercase">
              william wheeler
            </div>
            <div class="profile-quote text-capitalize">
              microwave cooking is the wave of the future
            </div>
            <div class="profile-view">
              <button href="#" class="btn btn-inverse text-uppercase">view profile</button>
            </div>
          </a>
          <a href="#" class="col-sm-3 profile">
            <div class="profile-pic">
              <img class="img-circle" src="../dist/img/placeholder.svg" width="100px">
            </div>
            <div class="profile-name text-uppercase">
              blanche gonzalez
            </div>
            <div class="profile-quote text-capitalize">
              how to cook turkey on natural gas grills
            </div>
            <div class="profile-view">
              <button href="#" class="btn btn-inverse text-uppercase">view profile</button>
            </div>
          </a>
          <a href="#" class="col-sm-3 profile">
            <div class="profile-pic">
              <img class="img-circle" src="../dist/img/placeholder.svg" width="100px">
            </div>
            <div class="profile-name text-uppercase">
              scott estrada
            </div>
            <div class="profile-quote text-capitalize">
              beryl cook s art quirky uk artist
            </div>
            <div class="profile-view">
              <button href="#" class="btn btn-inverse text-uppercase">view profile</button>
            </div>
          </a>
          <a href="#" class="col-sm-3 profile">
            <div class="profile-pic">
              <img class="img-circle" src="../dist/img/placeholder.svg" width="100px">
            </div>
            <div class="profile-name text-uppercase">
              celia paul
            </div>
            <div class="profile-quote text-capitalize">
              bbq myths getting you down
            </div>
            <div class="profile-view">
              <button href="#" class="btn btn-inverse text-uppercase">view profile</button>
            </div>
          </a>
          <div class="profile-all">
            <a href="#" class="btn btn-default text-uppercase">browse all chefs</a>
          </div>
        </div>
      </section>
      <!-- 1st content row (end) -->

      <!-- 2nd content row -->
      <div class="container-fluid content chefs-2">
        <div class="row content-heading">
          <h1 class="text-capitalize">
            how it works
          </h1>
          <p>
            When it comes to barbequing, there are two main schools of thought for the techniques that you can use.
          </p>
        </div>

        <div class="row">
          <div class="col-sm-4 how">
            <img class="how-pic" src="../dist/img/content.png" width="100px">
            <div class="how-heading text-capitalize">
              create request
            </div>
            <div class="how-quote">
              You may be a person who loves to cook. You absolutely love to spend time in your kitchen.
            </div>
          </div>
          <div class="col-sm-4 how">
            <img class="how-pic" src="../dist/img/auction.png" width="100px">
            <div class="how-heading text-capitalize">
              get bids
            </div>
            <div class="how-quote">
              You may be a person who loves to cook. You absolutely love to spend time in your kitchen.
            </div>
          </div>
          <div class="col-sm-4 how">
            <img class="how-pic" src="../dist/img/chef.png" width="100px">
            <div class="how-heading text-capitalize">
              choose chef
            </div>
            <div class="how-quote">
              You may be a person who loves to cook. You absolutely love to spend time in your kitchen.
            </div>
          </div>
        </div>
      </div>
      <!-- 2nd content row (end) -->
      <!-- Main content (end) -->

      <!-- Footer -->
      
        <?php include __DIR__ . '/include/footer-home.php'; ?>
      
      <!-- Footer (end) --> 
  
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->
<?php include __DIR__ . '/include/footer.php'; ?>