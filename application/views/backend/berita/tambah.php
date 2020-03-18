<section class="content-header">
	<h1>Manajemen Berita</h1>
</section>

<section class="content">
	<div class="row">
		<div class="col-lg-12">
			<div class="box">
				<div class="box-header">
					<h4 class="pull-left">Tambah Berita</h4>
					<a href="<?= base_url('administrator/berita'); ?>" class="btn btn-success btn-sm pull-right" style="margin-bottom: 10px;">
						<i class="fa fa-chevron-left"></i> Kembali
					</a>
				</div>
				<div class="box-body">
					<form action="" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label>Judul</label>
							<input type="text" name="judul" class="form-control" value="<?= set_value('judul'); ?>">
							<?= form_error('judul'); ?>
						</div>
						<div class="form-group">
							<label>Isi</label>
							<textarea name="isi" id="editor" class="form-control"><?= set_value('isi'); ?></textarea>
							<?= form_error('isi'); ?>
						</div>
						<div class="form-group">
							<input type="hidden" name="penulis" class="form-control" value="<?= userLogin()['nama']; ?>" readonly>
							<?= form_error('penulis'); ?>
						</div>
						<div class="form-group">
							<label>Foto</label>
							<input type="file" name="foto" class="form-control" value="<?= set_value('foto'); ?>">
							<?= $this->session->flashdata('error_foto'); ?>
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