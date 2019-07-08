<style>
	.table > tbody > tr > td {	
		vertical-align: middle;
	}
</style>

<section class="content-header">
  <h1>Manajemen Program Unggulan</h1>
</section>

<section class="content">
  <div class="row">
    <div class="col-lg-12">
    
        <?= $this->session->flashdata('message'); ?>

   		<div class="box">
   			<div class="box-header">
   				<h4 class="pull-left">Program Unggulan</h4>
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
		          		foreach( $program as $program ) :
		          	 ?>
		            	<tr>
		            		<td><img src="<?= base_url('assets/img/program/'.$program['foto']); ?>" width="60"></td>
			            	<td><?= $program['judul']; ?></td>
			            	<td><?= word_limiter($program['keterangan'], 30); ?></td>
			            	<td width="100" align="center">
			            		<a href="<?= base_url('administrator/program_unggulan/edit/'.$program['id']); ?>" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i> Edit</a>
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