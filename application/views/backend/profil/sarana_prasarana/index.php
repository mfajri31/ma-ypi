<section class="content-header">
  <h1>Manajemen Profil</h1>
</section>

<section class="content">
  <div class="row">
    <div class="col-lg-12">
    
        <?= $this->session->flashdata('message'); ?>

   		<div class="box">
   			<div class="box-header">
   				<h4 class="pull-left">Sarana dan Prasarana</h4>
   			</div>
	        <div class="box-body">
        	  <div class="table-responsive">
		          <table class="table table-bordered">
		          	<thead>
			            <tr>
			              <th>Judul</th>
			              <th>Isi</th>
			              <th>Aksi</th>
			            </tr>
		          	</thead>
		            <tbody>
		          	<?php 
		          		foreach( $sarana as $sarana ) :
		          	 ?>
		            	<tr>
			            	<td><?= $sarana['judul']; ?></td>
			            	<td><?= word_limiter($sarana['isi'], 30); ?></td>
			            	<td width="100" align="center">
			            		<a href="<?= base_url('administrator/sarana_prasarana/edit/'.$sarana['id']); ?>" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i> Edit</a>
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