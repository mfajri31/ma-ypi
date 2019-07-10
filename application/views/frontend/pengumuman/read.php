<div class="container konten my-3">
	<div class="row">
		<div class="col-md-8">
			<div class="row">
				<div class="col-sm-12">
					<h1><?= $pengumuman['judul']; ?></h1>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 mb-3">
					<?php if( $pengumuman['foto'] != 'none' ) : ?>
						<img src="<?= base_url('assets/img/pengumuman/'.$pengumuman['foto']); ?>" class="img-fluid" width="700" alt="<?= $pengumuman['judul']; ?>">
					<?php endif; ?>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<?= $pengumuman['isi']; ?>
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