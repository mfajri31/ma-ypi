<section class="content-header">
	<h1>Manajemen Program Unggulan</h1>
</section>

<section class="content">
	<div class="row">
		<div class="col-lg-12">
			<div class="box">
				<div class="box-header">
					<h4 class="pull-left">Edit Program Unggulan</h4>
					<a href="<?= base_url('administrator/program_unggulan'); ?>" class="btn btn-success btn-sm pull-right" style="margin-bottom: 10px;">
						<i class="fa fa-chevron-left"></i> Kembali
					</a>
				</div>
				<div class="box-body">
					<form action="" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label>Judul</label>
							<input type="text" name="judul" class="form-control" value="<?= $program['judul']; ?>">
							<?= form_error('judul'); ?>
						</div>
						<div class="form-group">
							<label>Keterangan</label>
							<textarea name="keterangan" id="editor"><?= $program['keterangan']; ?></textarea>
							<?= form_error('keterangan'); ?>
						</div>
						<div class="form-group">
							<label>Foto</label> <br>
							<img src="<?= base_url('assets/img/program/'.$program['foto']); ?>" width="200">
							<input type="file" name="foto" class="form-control">
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