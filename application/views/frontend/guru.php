<div class="container konten my-3">
	<div class="row">
		<div class="col-md-8">
			<h1 class="text-center">Data Guru</h1>

			<div class="row" id="data-guru">
				
			</div>

			<div class="modal fade" id="modal-guru" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-lg" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Biodata Guru</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <div class="row">
			          <div class="col-md-4">
			          	<div class="text-center">
				            <img src="" id="foto" alt="" width="200">
			            </div>
			          </div>
			          <div class="col-md-8">
			          	<h4 id="nama"></h4>
			          	<table>
			          		<tr>
			          			<td>Jabatan</td>
			          			<td>&nbsp;:&nbsp;</td>
			          			<td id="jabatan"></td>
			          		</tr>
			          		<tr>
			          			<td>Mapel</td>
			          			<td>&nbsp;:&nbsp;</td>
			          			<td id="mapel"></td>
			          		</tr>
			          		<tr>
			          			<td>Jumlah Jam Mengajar</td>
			          			<td>&nbsp;:&nbsp;</td>
			          			<td id="jum_jam"></td>
			          		</tr>
			          	</table>
			          </div>
			        </div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-danger" data-dismiss="modal">Kembali</button>
			      </div>
			    </div>
			  </div>
			</div>
	
		</div>

		<!-- sidebar -->
		<div class="col-md-4 mt-4">
			<?php sidebar(); ?>
		</div>
		<!-- /sidebar -->

	</div>
</div>