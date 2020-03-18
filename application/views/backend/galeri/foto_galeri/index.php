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
		    	<a href="<?= base_url('administrator/foto_galeri/tambah'); ?>" class="btn btn-success btn-sm pull-right">
		    		<i class="fa fa-user-plus"></i> Tambah
		    	</a>
   			</div>
	        <div class="box-body">
        	  <div class="table-responsive">
        	  	<form method="post" action="<?= base_url('administrator/foto_galeri/bulk_delete') ?>" id="form-delete">
        	  		<button type="button" class="btn btn-danger btn sm" id="btn-delete" style="margin-bottom: 10px; float: right;"><i class="fa fa-trash-o"></i> Hapus</button>
		          <table class="table table-bordered">
		          	<thead>
			            <tr>
			              <th><input type="checkbox" id="check-all"></th>
			              <th>Foto</th>
			              <th>Kategori</th>
			              <th>Aksi</th>
			            </tr>
		          	</thead>
		            <tbody>
		          	<?php foreach( $foto_galeri as $fg ) : ?>
		            	<tr>
		            		<td width="10"><input type='checkbox' class='check-item' name='id[]' value="<?= $fg['id']; ?>"></td>
			            	<td width="100" align="center"><img src="<?= base_url('assets/img/galeri/'.$fg['foto']); ?>" width="100"></td>
			            	<td><?= $fg['nama']; ?></td>
			            	<td width="150" align="center">
			            		<a href="<?= base_url('administrator/foto_galeri/edit/'.$fg['id']); ?>" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i> Edit</a>
			            		<!-- <a href="<?= base_url('administrator/foto_galeri/hapus/'.$fg['id']); ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Hapus</a> -->
			            	</td>
			            </tr>
			        	<?php endforeach; ?>
		            </tbody>
		          </table>
		      	</form>
	          </div>
	        </div>
      	</div>
    </div>
  </div>


</section>