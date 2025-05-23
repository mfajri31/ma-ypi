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
   				<h4 class="pull-left">Ekstrakurikuler</h4>
   				<a href="<?= base_url('administrator/ekstrakurikuler/tambah'); ?>" class="btn btn-success btn-sm pull-right">
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
			              <th>Keterangan</th>
			              <th>Aksi</th>
			            </tr>
		          	</thead>
		            <tbody>
		          	<?php 
		          		foreach( $ekstrakurikuler as $ekstrakurikuler ) :
		          	 ?>
		            	<tr>
		            		<td><img src="<?= base_url('assets/img/ekstrakurikuler/'.$ekstrakurikuler['foto']); ?>" width="80"></td>
			            	<td><?= stripslashes($ekstrakurikuler['nama']); ?></td>
			            	<td><?= stripslashes(word_limiter($ekstrakurikuler['keterangan'], 10)); ?></td>
			            	<td width="150" align="center">
			            		<a href="<?= base_url('administrator/ekstrakurikuler/edit/'.$ekstrakurikuler['id']); ?>" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i> Edit</a>
			            		<a href="<?= base_url('administrator/ekstrakurikuler	/hapus/'.$ekstrakurikuler['id']); ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Hapus</a>
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