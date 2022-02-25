
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 class="row">
        <!-- <small class="col-md-6">Financial Year: <?php echo $fin_year->fin_year; ?></small> -->
        <small id="date" class="col-md-6"></small>
        <!-- <small>Time: 4:00 PM</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section><br>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->

      <!-- /.row -->
		<div class="box">

            <!-- /.box-header -->
            <div class="box-body">
                <!-- <?php if($this->session->userdata['user_type']=='0'){ ?> -->
        <div class="row">
               <div class="col-lg-3">
                  <div class="row">

                     <div class="col-md-8 col-sm-6 col-xs-12">
                      <div class="info-box" style=" box-shadow: 2px 2px 2px 2px #f0efed;">
                        <span class="info-box-icon bg-green"><i class="fa fa-money"></i></span>

                        <div class="info-box-content">
                          <span class="info-box-text"></span>
                          <span class="info-box-number" id="pgroup" style="color: blue;"></span>
                           <span class="info-box-text" style="text-align: right;"></span>
                          <span class="info-box-number" id="pmember" style="text-align: right;color:blue;"></span>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                      <!-- /.info-box --><br><br>
                    </div>

                     <div class="col-md-8 col-sm-6 col-xs-12">
                      <div class="info-box" style=" box-shadow: 2px 2px 2px 2px #f0efed;">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-money"></i></span>

                        <div class="info-box-content">
                          <span class="info-box-text"></span>
                          <span class="info-box-number" id="pgroup" style="color: blue;"></span>

                           <span class="info-box-text" style="text-align: right;"></span>
                          <span class="info-box-number" id="pmember" style="text-align: right;color:blue;"></span>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                      <!-- /.info-box --><br><br>
                    </div>



                      <div class="col-md-8 col-sm-6 col-xs-12">
                      <div class="info-box" style=" box-shadow: 2px 2px 2px 2px #f0efed;">
                        <span class="info-box-icon bg-yellow"><i class="fa fa-money"></i></span>

                        <div class="info-box-content">
                           <span class="info-box-text"></span>
                                    <span class="info-box-number" id="awcloans" style="color:blue;"></span>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                      <!-- /.info-box --><br><br>
                    </div>



                </div>
            </div>

      </div>
      <?php } ?>


			</div>

       <?php /*if($this->session->userdata['user_type']=='A'){ ?>
            <!-- /.box-body -->
            <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Customers</span>
              <span class="info-box-number" id="customer"></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Vendors</span>
              <span class="info-box-number" id="vendor"></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-hourglass-half "></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Stock</span>
              <span class="info-box-number" id="stock"></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-shopping-bag "></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Shops</span>
              <span class="info-box-number" id="shop"></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>

	    </div>
			  <?php }*/ ?>
            <!-- /.box-footer -->
												<!--</div>-->
          <!-- /.box -->

        <!-- /.col -->


        <!-- /.col -->

      <!-- /.row -->
    </section>
    <!-- /.content -->



  </div>
