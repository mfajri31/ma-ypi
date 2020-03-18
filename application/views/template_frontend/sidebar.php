<div class="row">
	<div class="col-md-12">
		<h3 class="text-center mb-4">Pengumuman Terbaru</h3>

		<ul class="list-group list-group-flush">
		  <?php foreach( $pengumuman as $pengumuman ) : ?>
			  <li class="list-group-item"><a href="<?= base_url('pengumuman/read/'.$pengumuman['id']."/".$pengumuman['slug']); ?>"><?= $pengumuman['judul']; ?></a></li>
		  <?php endforeach; ?>
		  <p class="text-center mt-3"><a href="<?= base_url('pengumuman'); ?>">Lihat Semua</a></p>
		</ul>
	</div>
</div>

<div class="row mt-4">
	<div class="col-md-12">
		<h3 class="text-center mb-3">Berita Terbaru</h3>

		<ul class="list-group list-group-flush">
			<?php foreach( $berita as $berita ) : ?>
			<li class="list-group-item">
				<img src="<?= base_url('assets/img/berita/'.$berita['foto']); ?>" width="100" class="float-left mr-3 mt-2">
				<div><?= word_limiter($berita['judul'], 5); ?></div>
				<a href="<?= base_url('berita/'.$berita['id'].'/'.$berita['slug']); ?>"> Baca Selengkapnya</a>
			</li>
			<?php endforeach; ?>
			<p class="text-center mt-3"><a href="<?= base_url('berita'); ?>">Lihat Semua</a></p>
		</ul>
	</div>
</div>