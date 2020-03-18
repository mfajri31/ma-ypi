<div class="container konten my-3">
	<div class="row">
		<div class="col-md-8">
			<h1 class="text-center"><?= $sambutan['judul']; ?></h1>

			<div class="text-center mt-3 mb-3">
				<img src="<?= base_url('assets/img/sambutan/'.$sambutan['foto']); ?>" width="200">
			</div>

			<?= $sambutan['isi']; ?>
		</div>

		<!-- sidebar -->
		<div class="col-md-4 mt-4">
			<?php sidebar(); ?>
		</div>
		<!-- /sidebar -->

	</div>
</div>