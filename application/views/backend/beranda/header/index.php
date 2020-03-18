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
   				<h4 class="pull-left">Header</h4>
   			</div>
	        <div class="box-body">
        	  <div class="table-responsive">
		          <table class="table table-bordered">
		          	<thead>
			            <tr>
			              <th>Urutan Slide</th>
			              <th>Gambar Slide</th>
			              <th>Aksi</th>
			            </tr>
		          	</thead>
		            <tbody>
		          	<?php 
			          	$no = 1;
		          		foreach( $header as $header ) :
		          	 ?>
		            	<tr>
		            		<td width="100">Slide <?= $no++; ?></td>
			            	<td><img src="<?= base_url('assets/img/header/'.$header['slide']); ?>" width="100"></td>
			            	<td width="100" align="center">
			            		<a href="<?= base_url('administrator/header/edit/'.$header['id']); ?>" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i> Edit</a>
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