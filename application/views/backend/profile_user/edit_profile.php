<section class="content-header">
  <h1>Edit Profile</h1>
</section>

<section class="content">
  <div class="row">
    <div class="col-lg-12">
         <div class="box box-success">
            <div class="box-body box-profile">
              <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label>Foto</label> <br>
                  <img src="<?= base_url('assets/img/profil/'.userLogin()['foto']); ?>" width=150>
                  <input type="file" name="foto" class="form-control">
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" class="form-control" value="<?= userLogin()['nama']; ?>">
                  <?= form_error('nama'); ?>
                </div>
                <div>
                  <input type="hidden" name="email" value="<?= userLogin()['email']; ?>">
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