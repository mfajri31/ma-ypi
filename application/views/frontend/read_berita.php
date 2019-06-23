<div class="container konten my-3">
	<div class="row">
		<div class="col-md-8">
			<div class="row">
				<div class="col-sm-12 mb-3">
					<h1><?= $berita['judul']; ?></h1>
					<small class="text-secondary"><i class="far fa-clock"></i>
						<?= $berita['hari_post'].', '.$berita['tgl_post'].' - '.$berita['jam_post']; ?>
					</small>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-sm-12 mb-3">
					<img src="<?= base_url('assets/img/berita/'.$berita['foto']); ?>" class="img-fluid" style="width: 730px">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<?= $berita['isi']; ?>
				</div>
			</div>
		</div>

		<!-- sidebar -->
		<div class="col-md-4 mt-4">
			<?php sidebar(); ?>
		</div>
		<!-- /sidebar -->

	</div>
</div>