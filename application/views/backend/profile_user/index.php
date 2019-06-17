<section class="content-header">
  <h1>Profile Anda</h1>
</section>

<section class="content">
  <div class="row">
    <div class="col-lg-12">
        
        <?= $this->session->flashdata('message'); ?>

         <div class="box box-success">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive" src="<?= base_url('assets/img/profil/'.userLogin()['foto']); ?>" style="width: 200px;">

              <h3 class="profile-username text-center"><?= userLogin()['nama']; ?></h3>

              <p class="text-muted text-center"><?= userLogin()['level']; ?></p>

              <a href="<?= base_url('administrator/profile_user/edit_profile'); ?>" class="btn btn-success btn-block">
              	<i class="fa fa-edit"></i> <b>Edit Profile</b>
              </a>
              <a href="<?= base_url('administrator/profile_user/ganti_email'); ?>" class="btn btn-success btn-block">
                <i class="fa fa-edit"></i> <b>Ganti Email</b>
              </a>
              <a href="<?= base_url('administrator/profile_user/ganti_password'); ?>" class="btn btn-success btn-block">
              	<i class="fa fa-edit"></i> <b>Ganti Password</b>
              </a>
            </div>
        </div>
    </div>
  </div>
 

</section>