<style>
	.table > tbody > tr > td {
	     vertical-align: middle;
	}
</style>

<section class="content-header">
  <h1>Manajemen User</h1>
</section>

<section class="content">
  <div class="row">
    <div class="col-lg-12">
   		<div class="box">
   			<div class="box-header">
   				<h4 class="pull-left">Daftar User</h4>
		    	<a href="<?= base_url('administrator/user/tambah'); ?>" class="btn btn-success btn-sm pull-right">
		    		<i class="fa fa-user-plus"></i> Tambah
		    	</a>
   			</div>
	        <div class="box-body">
        	  <div class="table-responsive">
		          <table class="table table-bordered">
		          	<thead>
			            <tr>
			              <th class="text-center">#</th>
			              <th>Foto</th>
			              <th>Email</th>
			              <th>Nama</th>
			              <th>Aksi</th>
			            </tr>
		          	</thead>
		            <tbody>
		          	<?php 
		          		$no = 1;
		          		foreach( $users as $user ) :
		          	 ?>
		            	<tr>
			            	<td class="text-center" width="40"><?= $no++; ?></td>
			            	<td width="70"><img src="<?= base_url('assets/img/'.$user['foto']); ?>" width="60"></td>
			            	<td><?= $user['email']; ?></td>
			            	<td><?= $user['nama']; ?></td>
			            	<td width="80" align="center">
			            		<a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> hapus</a>
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