<div class="container konten my-3">
	<div class="row">
		<div class="col-md-8">
			<div class="row">
				<div class="col-sm-12">
					<h1><?= $ekskul['nama']; ?></h1>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 mb-3">
					<img src="<?= base_url('assets/img/ekstrakurikuler/'.$ekskul['foto']); ?>" class="img-fluid" width="700" alt="<?= $ekskul['nama']; ?>">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<?= $ekskul['keterangan']; ?>
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