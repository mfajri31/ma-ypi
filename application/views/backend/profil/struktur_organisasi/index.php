<section class="content-header">
  <h1>Manajemen Profil</h1>
</section>

<section class="content">
  <div class="row">
    <div class="col-lg-12">
    
        <?= $this->session->flashdata('message'); ?>

   		<div class="box">
   			<div class="box-header">
   				<h4 class="pull-left">Struktur Organisasi</h4>
   			</div>
	        <div class="box-body">
        	  <div class="table-responsive">
		          <table class="table table-bordered">
		          	<thead>
			            <tr>
			              <th>Judul</th>
			              <th>Foto</th>
			              <th>Aksi</th>
			            </tr>
		          	</thead>
		            <tbody>
		          	<?php 
		          		foreach( $struktur as $struktur ) :
		          	 ?>
		            	<tr>
			            	<td><?= $struktur['judul']; ?></td>
			            	<td><img src="<?= base_url('assets/img/struktur/'.$struktur['foto']); ?>" width="100"></td>
			            	<td width="100" align="center">
			            		<a href="<?= base_url('administrator/struktur_organisasi/edit/'.$struktur['id']); ?>" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i> Edit</a>
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