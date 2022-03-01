<style type="text/css">
.fsize
{
  font-size: 14px;
  font-family: 'Rubik', sans-serif;
}
</style>
<div class="content-wrapper">
  <section class="content-header">
    <!-- <h1>
      ADD DYNAMICTEXTBOXCES
      <small id="date" class="col-md-4"></small>
    </h1> -->
    <ol class="breadcrumb">
      <!-- <li><a href="<?php echo base_url();?>Dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="<?php echo base_url();?>District/"><i class="fa fa-dashboard"></i> Back to List</a></li> -->
      <li class="active"></li>
    </ol>
  </section>
  <form class="form-horizontal" method="POST" action="<?php echo base_url();?>Hero/changeHeroText" enctype="multipart/form-data">
    <section class="content">

      <div class="row">
        <div class="box">
          <div class="box-header">
            <input type="hidden" id="response" value="<?php echo $this->session->flashdata('response');?>" />
            <div class="col-md-8"><h2 class="box-title"></h2> </div>
          </div>
          <div class="box-body">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
              <div class="panel panel-danger">
                <div class="panel-heading">
                  <h3 class="panel-title"><b>Add HeroText </b></h3>
                  <!-- <div class="col-md-6"> -->
                  </div>
                  <div class="form-group row">
                    <div class="col-md-6">
                      <label class="fsize">HeroText Name</label>
                      <input type="text" class="form-control" name="herotext_name" value="">
                    </div>
                    <div class="col-md-6">
                      <label class="fsize">HeroText Description</label>
                      <input type="text" class="form-control" name="herotext_description" value="">
                    </div>
                    <div class="col-md-6">
                      <label class="fsize">Store Text</label>
                      <input type="text" class="form-control" name="store_text" value="">
                    </div>
                    <div class="col-md-6">
                      <label class="fsize">Chart Text</label>
                      <input type="text" class="form-control" name="chart_text" value="">
                    </div>
                    <div class="col-md-6">
                      <label class="fsize">Calender Text</label>
                      <input type="text" class="form-control" name="calendar_text" value="">
                    </div>
                    <div class="col-md-6">
                      <label class="fsize">Paint Text</label>
                      <input type="text" class="form-control" name="paint_text" value="">
                    </div>
                    <div class="col-md-6">
                      <label class="fsize">Database Text</label>
                      <input type="text" class="form-control" name="database_text" value="">
                    </div>
                    </div>
                  </div>
                </div>
              </div>
              <br>
              <div class="box-footer">
                <div class="row">
                  <div class="col-md-6">
                  </div>
                  <div class="col-md-4">
                    <button type="button" class="btn btn-danger" onclick="window.location.reload();">Cancel</button>
                    <button type="submit" name="submit"class="btn btn-primary">Add HeroText</button>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </form>
      </div>
