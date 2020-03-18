<style>
	.table > tbody > tr > td {	
		vertical-align: middle;
	}
</style>

<section class="content-header">
  <h1>Manajemen Berita</h1>
</section>

<section class="content">
  <div class="row">
    <div class="col-lg-12">
    
        <?= $this->session->flashdata('message'); ?>

   		<div class="box">
   			<div class="box-header">
   				<h4 class="pull-left">Daftar Berita</h4>
		    	<a href="<?= base_url('administrator/berita/tambah'); ?>" class="btn btn-success btn-sm pull-right">
		    		<i class="fa fa-user-plus"></i> Tambah
		    	</a>
   			</div>
	        <div class="box-body">
        	  <div class="table-responsive">
		          <table class="table table-bordered">
		          	<thead>
			            <tr>
			              <th class="text-center">#</th>
			              <th>Foto</th>
			              <th>Judul</th>
			              <th>Penulis</th>
			              <th>Waktu Posting</th>
			              <th>Aksi</th>
			            </tr>
		          	</thead>
		            <tbody>
		          	<?php 
		          		$no = 1;
		          		foreach( $berita as $berita ) :
		          	 ?>
		            	<tr>
			            	<td class="text-center" width="40"><?= $no++; ?></td>
			            	<td width="70"><img src="<?= base_url('assets/img/berita/'.$berita['foto']); ?>" width="60"></td>
			            	<td><?= $berita['judul']; ?></td>
			            	<td><?= $berita['penulis']; ?></td>
			            	<td><?= $berita['hari_post'].', '.$berita['tgl_post']; ?></td>
			            	<td width="150" align="center">
			            		<a href="<?= base_url('administrator/berita/edit/'.$berita['id']); ?>" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i> Edit</a>
			            		<a href="<?= base_url('administrator/berita/hapus/'.$berita['id']); ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Hapus</a>
			            	</td>
			            </tr>
			        <?php endforeach; ?>
		            </tbody>
		          </table>
	          </div>
	        </div>
      	</div>
    </div>
  </div>
 

</section>