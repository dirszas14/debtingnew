<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Bayar Angsuran Debitur
      </h1>
    </section>
   
    <!-- Main content -->
    <section class="content container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Form Pembayaran Angsuran Debitur</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              </div>
            </div>
            <div class="box-body" style="">
              <div class="row">
               <div class="col-md-12"> 
                <?php echo form_open('admin/bayarangsurandebitur',array('class'=>'form-horizontal','method'=>'post')); ?>
                  <div class="form-group">
                    <label for="" class="col-md-2 control-label ">Id Debitur</label>
                    <div class="col-md-10">
                      <input type="text" class="form-control" name="id_debitur" value="<?=$fetch_data['id_debitur']?>" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-md-2 control-label">Nama Debitur</label>
                    <div class="col-md-10">
                      <input type="text" class="form-control" name="nama" value="<?=$fetch_data['nama']?>" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-md-2 control-label">Nama Barang</label>
                    <div class="col-md-10">
                      <input type="text" class="form-control" name="nama_barang" value="<?=$fetch_data['nama_barang']?>" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-md-2 control-label">Jumlah Pembayaran</label>
                    <div class="col-md-10">
                      <input type="text" class="form-control" name="jumlah_bayar" value="<?=$fetch_data['bayar_perangsur']?>" readonly>
                    </div>
                  </div>
                  <input type="hidden" name="id_barang" value="<?=$fetch_data['id_barang']?>" placeholder="">
                  <div class="col-md-2 col-md-offset-10">
                    <input type="submit" class="btn btn-primary pull-right" name="submit" value="Bayar">
                    
                  </div>
                <?php echo form_close(); ?>
               </div>
              </div>
            </div>
          </div>
         </div>
       </div> 
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

