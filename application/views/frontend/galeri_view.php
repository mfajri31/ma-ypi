<div class="container konten my-3">
	<div class="row">
		<div class="col-md-8">
			<h1 class="text-center mb-4"><?= $kategori[0]['nama']; ?></h1>

			<?php 
				if( empty($galeri) ){
					echo "Tidak ada foto dalam album ini";
				}
			 ?>
			
			<div class="row mb-4">
				
				<?php foreach($galeri as $galeri) : ?>
				<div class="col-md-4">
					<div class="card mt-3">
					  <div class="zoom-gallery">
						  	<a href="<?= base_url('assets/img/galeri/'.$galeri['foto']); ?>">
							  	<img class="card-img-top" src="<?= base_url('assets/img/galeri/'.$galeri['foto']) ?>" alt="<?= $kategori[0]['nama']; ?>" title="<?= $kategori[0]['nama']; ?>">
							</a>
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

