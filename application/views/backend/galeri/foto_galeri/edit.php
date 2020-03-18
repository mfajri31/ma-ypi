<section class="content-header">
	<h1>Manajemen Galeri</h1>
</section>

<section class="content">
	<div class="row">
		<div class="col-lg-12">
			<div class="box">
				<div class="box-header">
					<h4 class="pull-left">Edit Foto Galeri</h4>
					<a href="<?= base_url('administrator/foto_galeri'); ?>" class="btn btn-success btn-sm pull-right" style="margin-bottom: 10px;">
						<i class="fa fa-chevron-left"></i> Kembali
					</a>
				</div>
				<div class="box-body">
					<form action="" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label>Foto</label> <br>
							<img src="<?= base_url('assets/img/galeri/'.$foto_galeri['foto']); ?>" width="200">
							<input type="file" name="foto" class="form-control">
						</div>
						<div class="form-group">
	            			<select name="kategori" class="form-control">
								<?php foreach( $kategori_galeri as $kg ) : ?>
		            				<option value="<?= $kg['id']; ?>" <?php if($kg['id']==$foto_galeri['kategori']){echo "selected";} ?>><?= $kg['nama']; ?></option>
		            			<?php endforeach; ?>
	            			</select>
	            		</div>
						<button type="submit" name="submit" class="btn btn-success" style="margin-bottom: 15px;">
							<i class="fa fa-download"></i> Simpan
						</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>