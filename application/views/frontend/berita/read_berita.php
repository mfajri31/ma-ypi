<div class="container konten my-3">
	<div class="row">
		<div class="col-md-8">
			<div class="row">
				<div class="col-sm-12 mb-3">
					<h1><?= $berita['judul']; ?></h1>
					<small class="text-secondary"><i class="far fa-clock"></i>
						<?= $berita['hari_post'].', '.$berita['tgl_post'].' - '.$berita['jam_post']; ?>
					</small>
					<a href="http://www.facebook.com/sharer.php?u=<?= base_url() ?>berita/read/<?= $berita['id']."/".$berita['slug']; ?>" target="_blank" class="btn btn-primary btn-circle btn-sm float-right ml-2">
						<i class="fab fa-facebook-f"></i>
				    </a>
				    <a href="https://twitter.com/share?url=<?= base_url() ?>berita/read/<?= $berita['id']."/".$berita['slug']; ?>" target="_blank" class="btn btn-primary btn-circle btn-sm float-right ml-2">
				     	<i class="fab fa-twitter"></i>
				    </a>
				    <a href="whatsapp://send?text=<?= base_url() ?>berita/read/<?= $berita['id']."/".$berita['slug']; ?>" target="_blank" class="btn btn-success btn-circle btn-sm float-right lm-2">
				     	<i class="fab fa-whatsapp"></i>
				    </a>

				    <b class="mr-2 float-right mt-1 bagikan">BAGIKAN:</b>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-sm-12 mb-3">
					<img src="<?= base_url('assets/img/berita/'.$berita['foto']); ?>" class="img-fluid" style="width: 730px" alt="<?= $berita['slug']; ?>">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<?= $berita['isi']; ?>
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