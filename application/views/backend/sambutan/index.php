<style>
	.table > tbody > tr > td {	
		vertical-align: middle;
	}
</style>

<section class="content-header">
  <h1>Manajemen Beranda</h1>
</section>

<section class="content">
  <div class="row">
    <div class="col-lg-12">
    
        <?= $this->session->flashdata('message'); ?>

   		<div class="box">
   			<div class="box-header">
   				<h4 class="pull-left">Sambutan</h4>
   			</div>
	        <div class="box-body">
        	  <div class="table-responsive">
		          <table class="table table-bordered">
		          	<thead>
			            <tr>
			              <th>Foto</th>
			              <th>Judul</th>
			              <th>Isi</th>
			              <th>Aksi</th>
			            </tr>
		          	</thead>
		            <tbody>
		          	<?php 
		          		foreach( $sambutan as $sambutan ) :
		          	 ?>
		            	<tr>
			            	<td width="70"><img src="<?= base_url('assets/img/sambutan/'.$sambutan['foto']); ?>" width="60"></td>
			            	<td><?= $sambutan['judul']; ?></td>
			            	<td><?= word_limiter($sambutan['isi'], 5); ?></td>
			            	<td width="100" align="center">
			            		<a href="<?= base_url('administrator/sambutan/edit/'.$sambutan['id']); ?>" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i> Edit</a>
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