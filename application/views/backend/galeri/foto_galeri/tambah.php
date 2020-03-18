<section class="content-header">
	<h1>Manajemen Galeri</h1>
</section>

<section class="content">
	<div class="row">
		<div class="col-lg-12">
			<div class="box">
				<div class="box-header">
					<h4 class="pull-left">Tambah Foto</h4>
					<a href="<?= base_url('administrator/foto_galeri'); ?>" class="btn btn-success btn-sm pull-right" style="margin-bottom: 10px;">
						<i class="fa fa-chevron-left"></i> Kembali
					</a>
				</div>
				<div class="box-body">
					<form action="" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label>Foto</label>
							<input type="file" name="files[]" class="form-control" accept="image/*" multiple required>
						</div>
						<div class="form-group">
	            			<select name="kategori" class="form-control" required>
	            				<option value="">--Pilih Kategori--</option>

								<?php foreach( $kategori_galeri as $kg ) : ?>
		            				<option value="<?= $kg['id']; ?>"><?= $kg['nama']; ?></option>
		            			<?php endforeach; ?>
	            			</select>
	            		</div>
						<button type="submit" name="submit" class="btn btn-success" style="margin-bottom: 15px;">
							<i class="fa fa-plus"></i> Tambah
						</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>