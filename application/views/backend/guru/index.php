<style>
	.table > tbody > tr > td {	
		vertical-align: middle;
	}
</style>

<section class="content-header">
  <h1>Manajemen Guru</h1>
</section>

<section class="content">
  <div class="row">
    <div class="col-lg-12">
    
        <?= $this->session->flashdata('message'); ?>

   		<div class="box">
   			<div class="box-header">
   				<h4 class="pull-left">Data Guru</h4>
		    	<a href="<?= base_url('administrator/guru/tambah'); ?>" class="btn btn-success btn-sm pull-right">
		    		<i class="fa fa-user-plus"></i> Tambah
		    	</a>
   			</div>
	        <div class="box-body">
        	  <div class="table-responsive">
		          <table class="table table-bordered">
		          	<thead>
			            <tr>
			              <th>Foto</th>
			              <th>Nama</th>
			              <th>Jabatan</th>
			              <th>Mapel</th>
			              <th>Jml jam Mengajar</th>
			              <th>Aksi</th>
			            </tr>
		          	</thead>
		            <tbody>
		          	<?php foreach( $guru as $guru ) : ?>
		            	<tr>
			            	<td><img src="<?= base_url('assets/img/guru/'.$guru['foto']); ?>" width="60"></td>
			            	<td><?= $guru['nama']; ?></td>
			            	<td><?= $guru['jabatan']; ?></td>
			            	<td><?= $guru['mapel'] != '' ? $guru['mapel'] : '<p class="text-center">-</p>'; ?></td>
			            	<td width="150" align="center"><?= $guru['jum_jam'] != 0 ? $guru['jum_jam']." jam" : '<p class="text-center">-</p>'; ?></td>
			            	<td width="150" align="center">
			            		<a href="<?= base_url('administrator/guru/edit/'.$guru['id']); ?>" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i> Edit</a>
			            		<a href="<?= base_url('administrator/guru/hapus/'.$guru['id']); ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> hapus</a>
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