<div class="container konten my-3">
	<div class="row">
		<div class="col-md-8">
			<h1 class="mb-3"><?= $fasilitas['judul']; ?></h1>
			
			<div class="mb-3">
				<img src="<?= base_url('assets/img/fasilitas/'.$fasilitas['foto']); ?>" alt="Fasilitas MA YPI Martapura" class="img-fluid" width="700">
			</div>

			<div>
				<?= $fasilitas['isi']; ?>
			</div>
		</div>

		<!-- sidebar -->
		<div class="col-md-4 mt-4">
			<?php sidebar(); ?>
		</div>
		<!-- /sidebar -->

	</div>
</div>
