<section class="content-header">
  <h1>Ganti Email</h1>
</section>


<section class="content">
  <div class="row">
    <div class="col-lg-12">

        <?= $this->session->flashdata('pw_salah'); ?>

         <div class="box box-success">
            <div class="box-body box-profile">
              <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label>Masukkan Password Anda</label>
                  <input type="password" name="password" class="form-control" value="<?= set_value('password'); ?>">
                  <?= form_error('password'); ?>
                </div>
                <div class="pull-left">
                  <button type="submit" class="btn btn-success">
                    Lanjutkan <i class="fa fa-chevron-right"></i>
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