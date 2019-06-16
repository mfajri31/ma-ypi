<section class="content-header">
	<h1>Manajemen User</h1>
</section>

<section class="content">
	<div class="row">
		<div class="col-lg-12">
			<div class="box">
				<div class="box-header">
					<h4 class="pull-left">Tambah User</h4>
					<a href="<?= base_url('administrator/user'); ?>" class="btn btn-success btn-sm pull-right" style="margin-bottom: 10px;">
						<i class="fa fa-chevron-left"></i> Kembali
					</a>
				</div>
				<div class="box-body">
					<form action="" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label>Nama</label>
							<input type="text" name="nama" class="form-control" value="<?= set_value('nama'); ?>">
							<?= form_error('nama'); ?>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="text" name="email" class="form-control" value="<?= set_value('email'); ?>">
							<?= form_error('email'); ?>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" class="form-control" value="<?= set_value('password'); ?>">
							<?= form_error('password'); ?>
						</div>
						<div class="form-group">
							<label>Konfirmasi Password</label>
							<input type="password" name="passconf" class="form-control" value="<?= set_value('passconf'); ?>">
							<?= form_error('passconf'); ?>
						</div>
						<button type="submit" class="btn btn-success" style="margin-bottom: 15px;">
							<i class="fa fa-plus"></i> Tambah
						</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>