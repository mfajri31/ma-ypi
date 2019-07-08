<section class="content-header">
  <h1>Manajemen Kontak</h1>
</section>

<section class="content">
  <div class="row">
    <div class="col-lg-12">
    
        <?= $this->session->flashdata('message'); ?>

   		<div class="box">
   			<div class="box-header">
   				<h4 class="pull-left">Kontak</h4>
   			</div>
	        <div class="box-body">
        	  <div class="table-responsive">
		          <table class="table table-bordered">
		          	<thead>
			            <tr>
			              <th>Email</th>
			              <th>Telp</th>
			              <th>Alamat</th>
			              <th>Aksi</th>
			            </tr>
		          	</thead>
		            <tbody>
		          	<?php 
		          		$no = 1;
		          		foreach( $kontak as $kontak ) :
		          	 ?>
		            	<tr>
		            		<td><?= $kontak['email']; ?></td>
		            		<td><?= $kontak['telp']; ?></td>
		            		<td><?= $kontak['alamat']; ?></td>
			            	<td width="100" align="center">
			            		<a href="<?= base_url('administrator/kontak/edit/'.$kontak['id']); ?>" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i> Edit</a>
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