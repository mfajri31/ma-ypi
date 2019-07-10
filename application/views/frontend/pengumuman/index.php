<div class="container konten my-3">
	<div class="row">
		<div class="col-md-12">
			<h1 class="mb-4">Pengumuman</h1>

			<?php foreach( $pengumuman as $pengumuman ) : ?>
				<h5>
					<a href=""><?= $pengumuman['judul']; ?></a>
				</h5>
				<div class="pengumuman">
					<?= word_limiter($pengumuman['isi'], 20) ?>
				</div>
				<hr>
			<?php endforeach; ?>
		</div>

	</div>
</div>