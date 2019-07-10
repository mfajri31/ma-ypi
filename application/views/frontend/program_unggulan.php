<div class="container konten my-3">
	<div class="row">
		<div class="col-md-8">
			<h1><?= $program['judul']; ?></h1>
			
			<?= $program['keterangan']; ?>
		</div>

		<!-- sidebar -->
		<div class="col-md-4 mt-4">
			<?php sidebar(); ?>
		</div>
		<!-- /sidebar -->

	</div>
</div>