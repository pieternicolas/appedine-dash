<?php include __DIR__ . '/include/header.php'; ?>

<body class="hold-transition skin-black layout-top-nav">
<div class="wrapper">
  
  <?php include __DIR__ . '/include/dash-navigation.php'; ?>
  
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header col-lg-8">
        <div >
          <div class="box box-default">
            <div class="box-header">
              <h1 class="box-title">Welcome to AppeDine, Julia</h1>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              Create request to find best chefs with menus and dishes that matches your criterias. Fill in the form and create request. You can also invite chefs.
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </section>

      <!-- Main content -->
      <section class="content col-lg-9">
        <h1 class="col-sm-12">
          Create new request
        </h1>
        <form>
          <div class="form-group col-sm-12">
            <label class="text-uppercase">Title</label>
            <input type="text" class="form-control" placeholder="Need a chef for todays dinner">
          </div>

          <div class="form-group col-sm-12">
            <label class="text-uppercase">Description</label>
            <textarea class="form-control" rows="3" placeholder="Describe as much as possible what you need"></textarea>
          </div>

          <div class="form-group col-sm-6">
            <label class="text-uppercase">Date:</label>
            <div class="input-group date">
              <input type="text" class="form-control pull-right" id="datepicker" placeholder="When chef is needed">
              <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </div>
            </div>
          </div>

          <div class="form-group col-sm-6">
            <label class="text-uppercase">Cuisines</label>
            <select class="form-control select2" multiple="multiple" data-placeholder="Select multiple cuisines" style="width: 100%;">
              <option>Placeholder</option>
              <option>Placeholder</option>
              <option>Placeholder</option>
              <option>Placeholder</option>              
            </select>
          </div>

          <span class="hidden-xs">&nbsp;</span>

          <div class="form-group col-sm-6">
            <label class="text-uppercase">Total Pax</label>
            <input type="number" class="form-control" placeholder="Number of guests" min="0">
          </div>

          <div class="form-group col-sm-6">
            <label class="text-uppercase">Location</label>
            <select class="form-control select2" style="width: 100%;">
              <option selected="selected">Alabama</option>
              <option>Alaska</option>
              <option>California</option>
              <option>Delaware</option>
              <option>Tennessee</option>
              <option>Texas</option>
              <option>Washington</option>
            </select>
          </div>

          <div class="form-group col-sm-6">
            <label class="text-uppercase">Budget per pax</label>
            <div class="input-group">
              <span class="input-group-addon">$</span>
              <input type="number" class="form-control" placeholder="How much would you pay per person" min="0">
              <span class="input-group-addon">.00</span>
            </div>
          </div>

          <div class="form-group col-sm-6">
            <label class="text-uppercase">Budget per hour</label>
            <div class="input-group">
              <span class="input-group-addon">$</span>
              <input type="number" class="form-control" placeholder="How much would you pay per hour" min="0">
              <span class="input-group-addon">.00</span>
            </div>
          </div>

          <div class="form-group col-sm-6">
            <div class="input-group">
              <input type="submit" value="Create request" class="btn btn-default text-uppercase">
            </div>
          </div>
        </form>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->

<?php include __DIR__ . '/include/footer.php'; ?>
