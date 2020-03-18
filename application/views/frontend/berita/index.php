<div class="container konten my-3">
	<div class="row">
		<div class="col-md-12">
			<h1 class="ml-4">Daftar Berita</h1>

			<ul class="list-group list-group-flush">
				<?php foreach( $berita as $berita ) : ?>
					<li class="list-group-item">
						<h3><?= $berita['judul']; ?></h3>
						<img src="<?= base_url('assets/img/berita/'.$berita['foto']); ?>" width="180" class="float-left mr-3 mt-2">
						<div class="text-justify"><?= word_limiter($berita['isi'], 20); ?></div>

						<a href="<?= base_url('berita/'.$berita['id'].'/'.$berita['slug']); ?>" class="btn btn-primary float-right mt-3">Baca Selengkapnya</a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>
