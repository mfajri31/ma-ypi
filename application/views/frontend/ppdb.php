<div class="container konten my-3">
	<div class="row">
		<div class="col-md-8">
			<h1><?= $ppdb['judul']; ?></h1>

			<?= $ppdb['isi']; ?>
		</div>

		<!-- sidebar -->
		<div class="col-md-4 mt-4">
			<?php sidebar(); ?>
		</div>
		<!-- /sidebar -->

	</div>
</div>