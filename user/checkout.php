<?php include __DIR__ . '/include/header.php'; ?>

<body class="hold-transition skin-black layout-top-nav">
<div class="wrapper">

  <?php include __DIR__ . '/include/dash-navigation.php'; ?>

  <!-- Full Width Column -->
  <div class="content-wrapper" id="app">
    <div class="container">
      <!-- Main content -->
      <section class="content col-sm-9">
        <h1>
          Checkout
        </h1>
        <div class="col-sm-12 box">
          <div class="col-sm-3">
            Logged as <br>
            <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" height="40px">
            <span >
              Julia Doe
              <a href="#">Log out</a>
            </span>
          </div>
          <div class="col-sm-7">
            <div class="form-group">
              <label>
                <h5>
                  Saved cards
                </h5>
              </label>
              <select class="form-control">
                <option>Card 1</option>
                <option>Card 2</option>
              </select>
            </div>
          </div>
          <div class="col-sm-2">
            <a href="#" class="btn btn-primary">
              Add new card
            </a>
          </div>
          &nbsp;
        </div>

        <div class="box col-sm-12">
          <form action="checkout-success.php">
            <h5 class="col-sm-12">
              Payment information
            </h5>
            <div class="form-group col-sm-6">
              <label>Card Number</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="1234 5678 9012 3456">
                  <div class="input-group-addon">
                    <i class="fa fa-credit-card-alt"></i>
                  </div>
                </div>
              
            </div>

            <div class="form-group col-sm-6">
              <div>
                <div class="col-sm-7">
                  <label>Exp. Date</label>
                  <input type="text" class="form-control" placeholder="09/18">
                </div>
                <div class="col-sm-5">
                  <label>CVV</label>
                  <input type="text" class="form-control" placeholder="123">
                </div>
              </div>
            </div>

            <div class="form-group col-sm-6">
              <label>First Name</label>
              
                <input type="text" class="form-control" placeholder="Julia">
              
            </div>

            <div class="form-group col-sm-6">
              <label>Last Name</label>
              
                <input type="text" class="form-control" placeholder="Doe">
              
            </div>

            <div class="form-group col-sm-6">
              <label>Billing Address 1</label>
              
                <input type="text" class="form-control" placeholder="Jackson Street">
              
            </div>

            <div class="form-group col-sm-6">
              <label>Billing Address 2</label>
               
                <input type="text" class="form-control" placeholder="8b,39">
              
            </div>

            <div class="form-group col-sm-6">
              <label>State/Province</label>
               
                <input type="text" class="form-control" placeholder="Florida">
              
            </div>

            <div class="form-group col-sm-6">
              <div class="col-sm-8">
                <label>City</label>
                 
                  <input type="text" class="form-control" placeholder="Miami">
                
              </div>
              <div class="col-sm-4">
                <label>ZIP</label>
                 
                  <input type="text" class="form-control" placeholder="11001">
                
              </div>
            </div>
            &nbsp;
          
        </div>

        <input type="submit" class="btn btn-primary col-sm-4" value="Complete Purchase">
        </form>
      </section>
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
            Subtotal
          </div>
          <div class="col-sm-6">
            $2,047.75
          </div>
          <div class="col-sm-6">
            Tax &amp; Gratuity
          </div>
          <div class="col-sm-6">
            $640
          </div>
          <div class="col-sm-6">
            Total
          </div>
          <div class="col-sm-6">
            <strong>$2,696.75</strong>
          </div>
          <div style="clear: both;"></div>
        </div>

        <div class="box">
          <div class="col-sm-12">
            <h4>Got a question? Call us!<br class="hidden-xs">
            1-855-744-8447
            </h4>
          </div>
          <div style="clear: both"></div>
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