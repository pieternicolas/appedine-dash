<?php include __DIR__ . '/include/header.php'; ?>

<body class="hold-transition skin-black layout-top-nav">
<div class="wrapper">
  
  <?php include __DIR__ . '/include/dash-navigation.php'; ?>

<!-- Full Width Column -->
  <div class="content-wrapper" id="voucherTest">
    <div class="container">
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-6">
            <h1>My vouchers</h1>
          </div>
        </div>
        <ul class="nav nav-tabs">
          <li role="request-list" class="active">
            <a href="#">All</a>
          </li>
          <li role="request-list">
            <a href="#">Active</a>
          </li>
          <li role="request-list">
            <a href="#">Redeemed</a>
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
              <div class="request-view" :class="{ 'hidden': isRedeemed }">
                <a href="#" class="btn btn-secondary text-uppercase" data-toggle="modal" data-target="#voucherRedeem">Redeem</a>
              
                <a href="#" class="btn btn-secondary text-uppercase" data-toggle="modal" data-target="#voucherShare">Share now</a>
              </div>
              <div class="request-view" :class="{ 'hidden': !isRedeemed }">
                <a href="#" class="btn btn-archive text-uppercase ">Redeemed</a>
              </div>
          </div>
          <div :class="{ 'overlay': isRedeemed }"></div>
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
                <a href="#" class="btn btn-archive text-uppercase ">Redeemed</a>
              </div>
          </div>
          <div class="overlay"></div>
        </div>
      </section>

      <!-- Modal redeem -->
      <div class="modal fade" tabindex="-1" role="dialog" id="voucherRedeem">
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header text-center">
              <img src="../dist/img/redeem.png" class="img-circle" height="100px" width="100px">
            </div>
            <div class="modal-body text-center">
              <h4>Enter merchant's PIN code below</h4>
              <div>
                <div class="form-group">
                  <input type="text" class="form-control text-center" onkeypress="return isNumberKey(event)" placeholder="6 digit PIN code" maxlength="6">
                </div>
                <button class="btn btn-default" @click="redeemVoucher">Redeem</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Modal share now -->
      <div class="modal fade" tabindex="-1" role="dialog" id="voucherShare">
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header text-center">
              <img src="../dist/img/gift.png" class="img-circle" height="100px" width="100px">
            </div>
            <div class="modal-body text-center">
              <h4>Enter your friend's account name</h4>
              <form>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Account name">
                </div>
                <input type="submit" class="btn btn-default" value="Gift">
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->

<script>
  function isNumberKey(evt)
  {
     var charCode = (evt.which) ? evt.which : event.keyCode
     if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;

     return true;
  }
</script>

<?php include __DIR__ . '/include/footer.php'; ?>