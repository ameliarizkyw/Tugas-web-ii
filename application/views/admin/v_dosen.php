
		 <div class="col-md-12">
		 	<br>
			<div class="card">
				<div class="card-header bg-drag bg-info" ><?php echo $sub_judul; ?></div>
				<div class="card-body">
					<a href="<?php echo site_url("admin/dosen/tambah") ?>" class="btn btn-danger btn-sm">+Tambah Data</a>
					<br>
					<br>

					<table class="table table-bordered">
						<tr>
							<th>NIK</th>
					        <th>Nama Dosen</th>
							<th>Alamat</th>
							<th>Tgl Dibuat</th>
							<th>Aksi</th>
						</tr>

						<?php foreach ($isi_tabel as $key) { ?>

						<tr>
							<td><?php echo $key->nik; ?></td>
							<td><?php echo $key->nama_dosen; ?></td>
							<td><?php echo $key->alamat; ?></td>
							<td><?php echo date('d M Y', strtotime($key->created_at)); ?></td>
							<td>
								<a href="<?php echo site_url('admin/dosen/edit/'.$key->nik); ?>" class="btn btn-info btn-sm">Edit</a>

								<a href="<?php echo site_url('admin/dosen/hapus/'.$key->nik); ?>" class="btn btn-dark btn-sm" onclick="return confirm('You sure to remove??');">Hapus</a>

							</td>
						</tr>
						<?php  } ?>
					</table>
				</div>
			</div>
		</div> 

	