<section class="content-header">
	<h1>Manajemen Guru</h1>
</section>

<section class="content">
	<div class="row">
		<div class="col-lg-12">
			<div class="box">
				<div class="box-header">
					<h4 class="pull-left">Edit Guru</h4>
					<a href="<?= base_url('administrator/guru'); ?>" class="btn btn-success btn-sm pull-right" style="margin-bottom: 10px;">
						<i class="fa fa-chevron-left"></i> Kembali
					</a>
				</div>
				<div class="box-body">
					<form action="" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label>Nama</label>
							<input type="text" name="nama" class="form-control" value="<?= $guru['nama']; ?>">
							<?= form_error('nama'); ?>
						</div>
						<div class="form-group">
							<label>Jabatan</label>
							<input type="text" name="jabatan" class="form-control" value="<?= $guru['jabatan']; ?>">
							<?= form_error('jabatan'); ?>
						</div>
						<div class="form-group">
							<label>Mata Pelajaran</label>
							<input type="text" name="mapel" class="form-control" value="<?= $guru['mapel']; ?>">
							<?= form_error('mapel'); ?>
						</div>
						<div class="form-group">
							<label>Jumlah Jam Mengajar</label>
							<input type="number" name="jum_jam" class="form-control" value="<?= $guru['jum_jam']; ?>">
							<?= form_error('jum_jam'); ?>
						</div>
						<div class="form-group">
							<label>Foto</label> <br>
							<img src="<?= base_url('assets/img/guru/'.$guru['foto']); ?>" width="200">
							<input type="file" name="foto" class="form-control" value="<?= set_value('foto'); ?>">
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