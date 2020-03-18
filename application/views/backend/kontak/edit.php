<section class="content-header">
	<h1>Manajemen Kontak</h1>
</section>

<section class="content">
	<div class="row">
		<div class="col-lg-12">
			<div class="box">
				<div class="box-header">
					<h4 class="pull-left">Edit Kontak</h4>
					<a href="<?= base_url('administrator/kontak'); ?>" class="btn btn-success btn-sm pull-right" style="margin-bottom: 10px;">
						<i class="fa fa-chevron-left"></i> Kembali
					</a>
				</div>
				<div class="box-body">
					<form action="" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label>Email</label>
							<input type="text" name="email" class="form-control" value="<?= $kontak['email']; ?>">
							<?= form_error('email'); ?>
						</div>
						<div class="form-group">
							<label>Telp</label>
							<input type="number" name="telp" class="form-control" value="<?= $kontak['telp']; ?>">
							<?= form_error('telp'); ?>
						</div>
						<div class="form-group">
							<label>Alamat</label>
							<textarea name="alamat" cols="30" rows="5" class="form-control"><?= $kontak['alamat']; ?></textarea>
							<?= form_error('alamat'); ?>
						</div>
						<button type="submit" class="btn btn-success" style="margin-bottom: 15px;">
							<i class="fa fa-download"></i> Simpan
						</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>