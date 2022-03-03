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
  <!-- <form class="form-horizontal" method="POST" action="<?php echo base_url();?>Hero/updateFields" enctype="multipart/form-data"> -->
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
                <h3 class="panel-title"><b>Add Home Text </b></h3>
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
                <div class="col-md-6">
                  <label class="fsize">HERO image</label>
                  <input type="file" class="form-control" name="database_text" value="">
                </div>
              </div>
            </div>
            <div class="panel-heading">
              <h3 class="panel-title"><b>Add About Text </b></h3>
              <!-- <div class="col-md-6"> -->
            </div>
            <div class="form-group row">
              <div class="col-md-6">
                <label class="fsize">About Caption</label>
                <input type="text" class="form-control" name="about_caption" value="">
              </div>
              <div class="col-md-6">
                <label class="fsize">About Description</label>
                <input type="text" class="form-control" name="about_description" value="">
              </div>
              <div class="col-md-6">
                <label class="fsize">About Description1</label>
                <input type="text" class="form-control" name="about_description1" value="">
              </div>
              <div class="col-md-6">
                <label class="fsize">About Description2</label>
                <input type="text" class="form-control" name="about_description2" value="">
              </div>
              <div class="col-md-6">
                <label class="fsize">About Description3</label>
                <input type="text" class="form-control" name="about_description3" value="">
              </div>
              <div class="col-md-6">
                <label class="fsize">About Description4</label>
                <input type="text" class="form-control" name="about_description4" value="">
              </div>
              <div class="col-md-6">
                <label class="fsize">About Subheading1</label>
                <input type="text" class="form-control" name="about_description5" value="">
              </div>
              <div class="col-md-6">
                <label class="fsize">About SubheadingDescription1</label>
                <input type="text" class="form-control" name="about_description6" value="">
              </div>
              <div class="col-md-6">
                <label class="fsize">About Subheading2</label>
                <input type="text" class="form-control" name="about_description7" value="">
              </div>
              <div class="col-md-6">
                <label class="fsize">About SubheadingDescription2</label>
                <input type="text" class="form-control" name="about_description8" value="">
              </div>
              <div class="col-md-6">
                <label class="fsize">About Subheading3</label>
                <input type="text" class="form-control" name="about_description9" value="">
              </div>
              <div class="col-md-6">
                <label class="fsize">About SubheadingDescription3</label>
                <input type="text" class="form-control" name="about_description10" value="">
              </div>
              <div class="col-md-6">
                <label class="fsize">About Subheading4</label>
                <input type="text" class="form-control" name="about_description11" value="">
              </div>
              <div class="col-md-6">
                <label class="fsize">About SubheadingDescription4</label>
                <input type="text" class="form-control" name="about_description12" value="">
              </div>
            </div>
            <div class="panel-heading">
              <h3 class="panel-title"><b>Add Services Text </b></h3>
              <!-- <div class="col-md-6"> -->
            </div>
            <div class="form-group row">
              <div class="col-md-6">
                <label class="fsize">Services Caption</label>
                <input type="text" class="form-control" name="service_caption" value="">
              </div>
              <div class="col-md-6">
                <label class="fsize">Services Description</label>
                <input type="text" class="form-control" name="service_description" value="">
              </div>
              <div class="col-md-6">
                <label class="fsize">Services Sub Caption</label>
                <input type="text" class="form-control" name="services_subcaption" value="">
              </div>
              <div class="col-md-6">
                <label class="fsize">Services Sub Description</label>
                <input type="text" class="form-control" name="services_subdescription" value="">
              </div>
              <div class="col-md-6">
                <label class="fsize">Services Sub Caption1</label>
                <input type="text" class="form-control" name="services_subcaption1" value="">
              </div>
              <div class="col-md-6">
                <label class="fsize">Services Sub Description1</label>
                <input type="text" class="form-control" name="services_subdescription1" value="">
              </div>
              <div class="col-md-6">
                <label class="fsize">Services Sub Caption2</label>
                <input type="text" class="form-control" name="services_subcaption2" value="">
              </div>
              <div class="col-md-6">
                <label class="fsize">Services Sub Description2</label>
                <input type="text" class="form-control" name="services_subdescription2" value="">
              </div>
              <div class="col-md-6">
                <label class="fsize">Services Sub Caption3</label>
                <input type="text" class="form-control" name="services_subcaption3" value="">
              </div>
              <div class="col-md-6">
                <label class="fsize">Services Sub Description3</label>
                <input type="text" class="form-control" name="services_subdescription3" value="">
              </div>
              <div class="col-md-6">
                <label class="fsize">Services Sub Caption4</label>
                <input type="text" class="form-control" name="services_subcaption4" value="">
              </div>
              <div class="col-md-6">
                <label class="fsize">Services Sub Description4</label>
                <input type="text" class="form-control" name="services_subdescription4" value="">
              </div>
              <div class="col-md-6">
                <label class="fsize">Services Sub Caption5</label>
                <input type="text" class="form-control" name="services_subcaption5" value="">
              </div>
              <div class="col-md-6">
                <label class="fsize">Services Sub Description5</label>
                <input type="text" class="form-control" name="services_subdescription5" value="">
              </div>
              <div class="col-md-6">
                <label class="fsize">Services Action</label>
                <input type="text" class="form-control" name="services_action" value="">
              </div>
              <div class="col-md-6">
                <label class="fsize">Services Action Description</label>
                <input type="text" class="form-control" name="services_actiondescription" value="">
              </div>
            </div>
            <div class="panel-heading">
              <h3 class="panel-title"><b>Add PORTFOLIO Text </b></h3>
              <!-- <div class="col-md-6"> -->
            </div>
            <div class="form-group row">
              <div class="col-md-6">
                <label class="fsize">PORTFOLIO Caption</label>
                <input type="text" class="form-control" name="portfolio_caption" value="">
              </div>
              <div class="col-md-6">
                <label class="fsize">PORTFOLIO Description</label>
                <input type="text" class="form-control" name="portfolio_description" value="">
              </div>
              <div class="col-md-6">
                <label class="fsize">PORTFOLIO Subheading1</label>
                <input type="text" class="form-control" name="portfolio_subheading1" value="">
              </div>
              <div class="col-md-6">
                <label class="fsize">PORTFOLIO Subheadingdescription</label>
                <input type="text" class="form-control" name="portfolio_subheadingdes" value="">
              </div>
            </div>
            <div class="panel-heading">
              <h3 class="panel-title"><b>Add Team Text </b></h3>
              <!-- <div class="col-md-6"> -->
            </div>
            <div class="form-group row">
              <div class="col-md-6">
                <label class="fsize">Team Caption</label>
                <input type="text" class="form-control" name="team_caption" value="">
              </div>
              <div class="col-md-6">
                <label class="fsize">Team Description</label>
                <input type="text" class="form-control" name="team_description" value="">
              </div>
            </div>
            <div class="panel-heading">
              <h3 class="panel-title"><b>Add contact Text </b></h3>
              <!-- <div class="col-md-6"> -->
            </div>
            <div class="form-group row">
              <div class="col-md-6">
                <label class="fsize">Contact Caption</label>
                <input type="text" class="form-control" name="contact_caption" value="">
              </div>
              <div class="col-md-6">
                <label class="fsize">contact Description</label>
                <input type="text" class="form-control" name="contact_description" value="">
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
