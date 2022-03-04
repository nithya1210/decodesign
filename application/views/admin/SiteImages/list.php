<style type="text/css">
.fsize
{
  font-size: 14px;
  font-family: 'Rubik', sans-serif;
}
</style>
<div class="content-wrapper">
  <section class="content-header">
  <ol class="breadcrumb">
    <li class="active"></li>
  </ol>
</section>
<form class="form-horizontal" method="POST" action="<?php echo base_url();?>SiteImages/insert" enctype="multipart/form-data">
  <section class="content">
    <div class="row">
      <div class="box">
        <div class="box-header">
          <input type="hidden" id="response" value="<?php echo $this->session->flashdata('response');?>" />
          <div class="col-md-8"><h2 class="box-title"></h2> </div>
        </div>
        <div class="box-body">
          <div class="col-md-6"></div>
          <select class="form-control col-sm-2" name="field">
            <?php foreach ($fields as $field): ?>
              <option value="<?php echo $field->image_id; ?>"><?php echo $field->image_field; ?></option>
            <?php endforeach; ?>
          </select>
          </div>
          <div class="col-md-6"></div>
          <input type="file" name="picture" value="">
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
            <button type="submit" name="submit"class="btn btn-primary">Save</button>
          </div>
        </div>
      </div>
    </div>
  </section>
</form>
</div>
