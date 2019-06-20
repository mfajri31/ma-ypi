<section class="content-header">
	<h1>Manajemen Berita</h1>
</section>

<section class="content">
	<div class="row">
		<div class="col-lg-12">
			<div class="box">
				<div class="box-header">
					<h4 class="pull-left">Edit Header</h4>
					<a href="<?= base_url('administrator/header'); ?>" class="btn btn-success btn-sm pull-right" style="margin-bottom: 10px;">
						<i class="fa fa-chevron-left"></i> Kembali
					</a>
				</div>
				<div class="box-body">
					<form action="" method="post" enctype="multipart/form-data">
						<div>
							<input type="hidden" name="id" value="<?= $header['id']; ?>" readonly>
						</div>
						<div class="form-group">
							<label>Slide</label> <br>
							<img src="<?= base_url('assets/img/header/'.$header['slide']); ?>" width="150">
							<input type="file" name="slide" class="form-control">
						</div>
						<button type="submit" class="btn btn-success" style="margin-bottom: 15px;">
							<i class="fa fa-download"></i> Simpan
						</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>