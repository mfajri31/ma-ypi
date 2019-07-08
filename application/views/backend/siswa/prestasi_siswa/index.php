<style>
	.table > tbody > tr > td {	
		vertical-align: middle;
	}
</style>

<section class="content-header">
  <h1>Manajemen Siswa</h1>
</section>

<section class="content">
  <div class="row">
    <div class="col-lg-12">
    
        <?= $this->session->flashdata('message'); ?>

   		<div class="box">
   			<div class="box-header">
   				<h4 class="pull-left">Prestasi Siswa</h4>
   				<a href="<?= base_url('administrator/prestasi_siswa/tambah'); ?>" class="btn btn-success btn-sm pull-right">
		    		<i class="fa fa-user-plus"></i> Tambah
		    	</a>
   			</div>
	        <div class="box-body">
        	  <div class="table-responsive">
		          <table class="table table-bordered">
		          	<thead>
			            <tr>
			              <th>Foto</th>
			              <th>Judul</th>
			              <th>Keterangan</th>
			              <th>Aksi</th>
			            </tr>
		          	</thead>
		            <tbody>
		          	<?php 
		          		foreach( $prestasi as $prestasi ) :
		          	 ?>
		            	<tr>
		            		<td><img src="<?= base_url('assets/img/prestasi/'.$prestasi['foto']); ?>" width="80"></td>
			            	<td><?= $prestasi['judul']; ?></td>
			            	<td><?= word_limiter($prestasi['keterangan'], 10); ?></td>
			            	<td width="150" align="center">
			            		<a href="<?= base_url('administrator/prestasi_siswa/edit/'.$prestasi['id']); ?>" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i> Edit</a>
			            		<a href="<?= base_url('administrator/prestasi_siswa/hapus/'.$prestasi['id']); ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Hapus</a>
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