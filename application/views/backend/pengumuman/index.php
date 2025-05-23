<style>
	.table > tbody > tr > td {	
		vertical-align: middle;
	}
</style>

<section class="content-header">
  <h1>Manajemen Pengumuman</h1>
</section>

<section class="content">
  <div class="row">
    <div class="col-lg-12">
    
        <?= $this->session->flashdata('message'); ?>

   		<div class="box">
   			<div class="box-header">
   				<h4 class="pull-left">Pengumuman</h4>
		    	<a href="<?= base_url('administrator/pengumuman/tambah'); ?>" class="btn btn-success btn-sm pull-right">
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
			              <th>Aksi</th>
			            </tr>
		          	</thead>
		            <tbody>
		          	<?php 
		          		$no = 1;
		          		foreach( $pengumuman as $pengumuman ) :
		          	 ?>
		            	<tr>
		            		<td width="100" align="center">
		            			<?php if( $pengumuman['foto'] != 'none' ) : ?>
			            			<img src="<?= base_url('assets/img/pengumuman/'.$pengumuman['foto']); ?>" width="80">
			            		<?php else : ?>
			            			-
			            		<?php endif; ?>
		            		</td>
		            		<td><?= $pengumuman['judul']; ?></td>
			            	<td width="150" align="center">
			            		<a href="<?= base_url('administrator/pengumuman/edit/'.$pengumuman['id']); ?>" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i> Edit</a>
			            		<a href="<?= base_url('administrator/pengumuman/hapus/'.$pengumuman['id']); ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Hapus</a>
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