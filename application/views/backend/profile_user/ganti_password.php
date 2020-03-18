<section class="content-header">
  <h1>Ganti Password</h1>
</section>


<section class="content">
  <div class="row">
    <div class="col-lg-12">

        <?= $this->session->flashdata('message'); ?>

         <div class="box box-success">
            <div class="box-body box-profile">
              <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label>Password Lama</label>
                  <input type="password" name="password_lama" class="form-control" value="<?= set_value('password_lama'); ?>">
                  <?= form_error('password_lama'); ?>
                </div>
                <div class="form-group">
                  <label>Password Baru</label>
                  <input type="password" name="password_baru" class="form-control" value="<?= set_value('password_baru'); ?>">
                  <?= form_error('password_baru'); ?>
                </div>
                <div class="form-group">
                  <label>Konfirmasi Password</label>
                  <input type="password" name="passconf" class="form-control" value="<?= set_value('passconf'); ?>">
                  <?= form_error('passconf'); ?>
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