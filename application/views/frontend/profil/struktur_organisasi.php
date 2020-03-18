<div class="container konten my-3">
	<div class="row">
		<div class="col-md-8">
			<h1 align="center"><?= $struktur['judul']; ?></h1>

			<img src="<?= base_url('assets/img/struktur/'.$struktur['foto']); ?>" width="750">
		</div>

		<!-- sidebar -->
		<div class="col-md-4 mt-4">
			<?php sidebar(); ?>
		</div>
		<!-- /sidebar -->

	</div>
</div>