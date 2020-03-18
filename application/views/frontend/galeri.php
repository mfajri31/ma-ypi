<div class="container konten my-3">
	<div class="row">
		<div class="col-md-8">
			<h1 class="text-center mb-4">Galeri</h1>
			
			<div class="row mb-4" style="margin-bottom: 50px;">
				
				<?php foreach($kategori_galeri as $kategori_galeri) : ?>
				<div class="col-md-4 pb-4">
					<div class="card mt-3" style="min-height: 250px; max-height: 250px;">
					  <img class="card-img-top" src="<?= base_url('assets/img/kategori_galeri/'.$kategori_galeri['foto']) ?>" alt="<?= $kategori_galeri['nama'] ?>">

					  <div class="card-body">
					    <a href="<?= base_url('galeri/'.$kategori_galeri['id'].'/'.$kategori_galeri['slug']); ?>"><h4 class="card-title"><?= $kategori_galeri['nama']; ?></h4></a>
					  </div>
					</div>
				</div>
				<?php endforeach; ?>
				
			</div>
		</div>

		<!-- sidebar -->
		<div class="col-md-4 mt-4">
			<?php sidebar(); ?>
		</div>
		<!-- /sidebar -->

	</div>
</div>