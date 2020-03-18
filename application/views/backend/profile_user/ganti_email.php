<section class="content-header">
  <h1>Ganti Email</h1>
</section>


<section class="content">
  <div class="row">
    <div class="col-lg-12">

         <div class="box box-success">
            <div class="box-body box-profile">
              <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label>Masukkan Email Baru</label>
                  <input type="email" name="email" class="form-control" value="<?= set_value('email'); ?>">
                  <?= form_error('email'); ?>
                </div>
                <div class="pull-left">
                  <button type="submit" class="btn btn-success">
                    <i class="fa fa-download"></i> Simpan
                  </button>
                </div>
                <div class="pull-right">
                  <a href="<?= base_url('administrator/profile_user'); ?>" class="btn btn-danger">
                    <i class="fa fa-chevron-left"></i> kembali
                  </a>
                </div>
              </form>
            </div>
        </div>
    </div>
  </div>
 

</section>