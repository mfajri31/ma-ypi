<div class="container konten my-3">
	<div class="row">
		<div class="col-md-8">
			<h1 class="text-center mb-4">Galeri</h1>
			
			<div class="row">
				<?php foreach ($galeri as $galeri) : ?>
				<div class="col-md-3 mb-3">
					<div class="card">
						<div class="zoom-gallery">
							<a href="<?= base_url('assets/img/galeri/'.$galeri['foto']); ?>" title="Galeri MA YPI Martapura OKUT SUMSEL">
							  <img src="<?= base_url('assets/img/galeri/'.$galeri['foto']); ?>" class="card-img-top">
							</a>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>

		<!-- sidebar -->
		<div class="col-md-4 mt-4">
			<?php sidebar(); ?>
		</div>
		<!-- /sidebar -->

	</div>
</div>