<br>
<br>
<br>
<div class="container margin-jumbroton" style="padding: 0px 0px;">
  <div class="jumbotron">
    <h2 align="center">Ganti Password</h2>
    <?php if ($this->session->flashdata('info')): ?>
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h5><i class="icon fa fa-check"></i>Berhasil Menganti password </h5>
            </div>
    <?php endif; ?>
      <?php echo form_open('debitur/gantipassword',array('class'=>'form-horizontal','method'=>'post')); ?>
        
          <div class="form-group">
            <label for="" class="col-md-2 control-label"></label>
            <div class="col-md-10">
             
            </div>
          </div>
          <div class="form-group">
            <label for="" class="col-md-2 control-label">Password Baru</label>
            <div class="col-md-10">
              <input type="password" name="passwordbaru" class="form-control" required>
            </div>
          </div>
           <div class="form-group">
            <label for="" class="col-md-2 control-label">Konfirmasi Password</label>
            <div class="col-md-10">
              <input type="password" name="confirmpassword" class="form-control" required>
            </div>
          </div>
          <br>
          <br>
          <br>
          <br><br>
          <div class="col-md-2 col-md-offset-10">
            <input type="submit" class="btn btn-primary pull-right" name="submit" value="Ganti Password">
          </div>
      <?php echo form_close(); ?>
  </div>
</div>
 







