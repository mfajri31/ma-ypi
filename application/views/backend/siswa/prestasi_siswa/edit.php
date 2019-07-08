<section class="content-header">
	<h1>Manajemen Siswa</h1>
</section>

<section class="content">
	<div class="row">
		<div class="col-lg-12">
			<div class="box">
				<div class="box-header">
					<h4 class="pull-left">Edit Prestasi Siswa</h4>
					<a href="<?= base_url('administrator/prestasi_siswa'); ?>" class="btn btn-success btn-sm pull-right" style="margin-bottom: 10px;">
						<i class="fa fa-chevron-left"></i> Kembali
					</a>
				</div>
				<div class="box-body">
					<form action="" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label>Judul</label>
							<input type="text" name="judul" class="form-control" value="<?= $prestasi['judul']; ?>">
							<?= form_error('judul'); ?>
						</div>
						<div class="form-group">
							<label>Keterangan</label> <small class="">(opsional)</small>
							<textarea name="keterangan" cols="30" rows="5" class="form-control"><?= $prestasi['keterangan']; ?></textarea>
						</div>
						<div class="form-group">
							<label>Foto</label> <br>
							<img src="<?= base_url('assets/img/prestasi/'.$prestasi['foto']); ?>" width="200">
							<input type="file" name="foto" class="form-control" value="<?= set_value('foto'); ?>">
							<?= $this->session->flashdata('error_foto'); ?>
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