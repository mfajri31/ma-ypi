<div class="container konten my-3">
	<div class="row">
		<div class="col-md-8">
			<h1 class="text-center">Prestasi Siswa</h1>

			<div class="row">
				<?php foreach( $prestasi as $prestasi ) : ?>
				<div class="col-md-4">
					<div class="card mt-3">
					  <div class="zoom-gallery">
					  	<a href="<?= base_url('assets/img/prestasi/'.$prestasi['foto']); ?>" title="<?= $prestasi['judul'] ?>">
						  <img class="card-img-top" src="<?= base_url('assets/img/prestasi/'.$prestasi['foto']); ?>" alt="Card image cap">
					  	</a>
					  </div>
					  <div class="card-body">
					    <h5 class="card-title"><?= $prestasi['judul']; ?></h5>
					    <p class="card-text"><?= $prestasi['keterangan']; ?></p>
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