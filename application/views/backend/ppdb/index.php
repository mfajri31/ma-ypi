<style>
	.table > tbody > tr > td {	
		vertical-align: middle;
	}
</style>

<section class="content-header">
  <h1>Manajemen PPDB</h1>
</section>

<section class="content">
  <div class="row">
    <div class="col-lg-12">
    
        <?= $this->session->flashdata('message'); ?>

   		<div class="box">
   			<div class="box-header">
   				<h4 class="pull-left">PPDB</h4>
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
		          		foreach( $ppdb as $ppdb ) :
		          	 ?>
		            	<tr>
		            		<td width="100" align="center">
		            			<?php if( $ppdb['foto'] != 'none' ) : ?>
			            			<img src="<?= base_url('assets/img/ppdb/'.$ppdb['foto']); ?>" width="80">
			            		<?php else : ?>
			            			-
			            		<?php endif; ?>
		            		</td>
		            		<td><?= $ppdb['judul']; ?></td>
			            	<td width="200" align="center">
			            		<a href="<?= base_url('administrator/ppdb/edit/'.$ppdb['id']); ?>" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i> Edit</a>

			            		<?php if( $ppdb['foto'] != 'none' ) : ?>
				            		<a href="<?= base_url('administrator/ppdb/hapus_gambar/'.$ppdb['id']); ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Hapus Foto</a>
				            	<?php endif; ?>
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