<div class="container konten my-3">
	<div class="row">
		<div class="col-md-8">
			<h1>Ekstrakurikuler</h1>

			<h5>
				<ul type="square" class="eskul mt-4">
					<?php foreach( $ekskul as $ekskul ) : ?>
						<li><a href="<?= base_url('ekstrakurikuler/read/'.$ekskul['id']); ?>"><?= $ekskul['nama']; ?></a></li>
					<?php endforeach; ?>
				</ul>
			</h5>
			
		</div>

		<!-- sidebar -->
		<div class="col-md-4 mt-4">
			<?php sidebar(); ?>
		</div>
		<!-- /sidebar -->

	</div>
</div>