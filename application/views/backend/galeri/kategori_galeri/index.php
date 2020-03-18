<style>
	.table > tbody > tr > td {	
		vertical-align: middle;
	}
</style>

<section class="content-header">
  <h1>Manajemen Kategori Galeri</h1>
</section>

<section class="content">
  <div class="row">
    <div class="col-lg-12">
    
        <?= $this->session->flashdata('message'); ?>

   		<div class="box">
   			<div class="box-header">
   				<h4 class="pull-left">Daftar Kategori Galeri</h4>
		    	<a href="<?= base_url('administrator/kategori_galeri/tambah'); ?>" class="btn btn-success btn-sm pull-right">
		    		<i class="fa fa-user-plus"></i> Tambah
		    	</a>
   			</div>
	        <div class="box-body">
        	  <div class="table-responsive">
		          <table class="table table-bordered">
		          	<thead>
			            <tr>
			              <th>Foto</th>
			              <th>Nama Kategori</th>
			              <th>Aksi</th>
			            </tr>
		          	</thead>
		            <tbody>
		            <?php foreach( $kategori_galeri as $kg ) : ?>
		            	<tr>
			            	<td width="100" align="center"><img src="<?= base_url('assets/img/kategori_galeri/'.$kg['foto']); ?>" width="60"></td>
			            	<td><?= $kg['nama']; ?></td>
			            	<td width="150" align="center">
			            		<a href="<?= base_url('administrator/kategori_galeri/edit/'.$kg['id']); ?>" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i> Edit</a>
			            		<a href="<?= base_url('administrator/kategori_galeri/hapus/'.$kg['id']); ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Hapus</a>
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