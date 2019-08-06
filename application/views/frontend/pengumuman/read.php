<div class="container konten my-3">
	<div class="row">
		<div class="col-md-8">
			<div class="row">
				<div class="col-sm-12">
					<h1><?= $pengumuman['judul']; ?></h1>

					<a href="http://www.facebook.com/sharer.php?u=<?= base_url() ?>pengumuman/read/<?= $pengumuman['id']."/".$pengumuman['slug']; ?>" target="_blank" class="btn btn-primary btn-circle btn-sm float-right ml-2">
						<i class="fab fa-facebook-f"></i>
				    </a>
				    <a href="https://twitter.com/share?url=<?= base_url() ?>pengumuman/read/<?= $pengumuman['id']."/".$pengumuman['slug']; ?>" target="_blank" class="btn btn-primary btn-circle btn-sm float-right ml-2">
				     	<i class="fab fa-twitter"></i>
				    </a>
				    <a href="whatsapp://send?text=<?= base_url() ?>pengumuman/read/<?= $pengumuman['id']."/".$pengumuman['slug']; ?>" target="_blank" class="btn btn-success btn-circle btn-sm float-right lm-2">
				     	<i class="fab fa-whatsapp"></i>
				    </a>

				    <b class="mr-2 float-right mt-1 bagikan">BAGIKAN:</b>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 mb-3">
					<?php if( $pengumuman['foto'] != 'none' ) : ?>
						<img src="<?= base_url('assets/img/pengumuman/'.$pengumuman['foto']); ?>" class="img-fluid" width="700" alt="<?= $pengumuman['judul']; ?>">
					<?php endif; ?>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<?= $pengumuman['isi']; ?>
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