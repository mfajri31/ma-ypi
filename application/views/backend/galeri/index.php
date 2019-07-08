<style>
	.table > tbody > tr > td {	
		vertical-align: middle;
	}
</style>

<section class="content-header">
  <h1>Manajemen Galeri</h1>
</section>

<section class="content">
  <div class="row">
    <div class="col-lg-12">
    
        <?= $this->session->flashdata('message'); ?>

   		<div class="box">
   			<div class="box-header">
   				<h4 class="pull-left">Daftar Galeri</h4>
		    	<a href="<?= base_url('administrator/galeri/tambah'); ?>" class="btn btn-success btn-sm pull-right">
		    		<i class="fa fa-user-plus"></i> Tambah
		    	</a>
   			</div>
	        <div class="box-body">
	        	Jumlah Foto : <?= $jumlah; ?>
        	  <div class="table-responsive">
		          <table class="table table-bordered">
		          	<thead>
			            <tr>
			              <th>Foto</th>
			              <th>Aksi</th>
			            </tr>
		          	</thead>
		            <tbody>
		          	<?php foreach( $galeri as $galeri ) : ?>
		            	<tr>
			            	<td><img src="<?= base_url('assets/img/galeri/'.$galeri['foto']); ?>" width="100"></td>
			            	<td width="150" align="center">
			            		<a href="<?= base_url('administrator/galeri/edit/'.$galeri['id']); ?>" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i> Edit</a>
			            		<a href="<?= base_url('administrator/galeri/hapus/'.$galeri['id']); ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Hapus</a>
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