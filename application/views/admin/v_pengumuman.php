
		 <div class="col-md-12">
			<div class="card">
				<div class="card-header " ><?php echo $sub_judul; ?></div>
				<div class="card-body">

					<?php 

					if ($this->session->flashdata('info')) {
						echo "<div class='alert alert-primary'>".$this->session->flashdata('info')."</div>";
						}
				    
					 ?>

					<a href="<?php echo site_url('admin/pengumuman/tambah');?>" 
					class="btn btn-primary">Tambah Data</a>
					<br>
					<br>

					<?php 
					foreach ($isi_tabel as $value) : 
					?>
					<div style="border: 1px solid red; padding: 15px; margin-bottom: 10px ">
					<div class="row">
						<div class="col-sm-1">
							<img width="100px" height="100px"
							 src="<?= base_url('assets/20160207_062253.jpg') ?>" class="img-thumbnail">
						</div>

						<div class="col-xl-4">
							Penulis <strong><?= $value->penulis; ?></strong>
							<br>
							17-08-2018			
						</div>

						<div class="col-xl-7">

							<a href="<?= site_url('admin/pengumuman/hapus/'.$value->id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ?')" >Hapus</a>

							<a href="<?=site_url('admin/pengumuman/edit/'.$value->id); ?>" class="btn btn-warning btn-sm">Edit</a>
						</div>
	
					</div>
					<div class="row">
						<div class="col-sm-12">
							<h4><?=$value->judul;  ?></h4>
							<p>Isi Pengumuman</p>
						 </div>
						 </div>
					</div>
				<?php endforeach ?>
			    </div>
			
			</div>
		</div> 

	