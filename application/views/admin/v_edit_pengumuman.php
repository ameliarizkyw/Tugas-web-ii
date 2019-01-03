

	 <div class="col-md-12">
		<div class="card">
			<div class="card-header " ><?php echo $sub_judul; ?></div>
			<div class="card-body">

			<form action="<?php echo site_url('admin/pengumuman/proses_edit'); ?>" method="post">

				<div class="form-group">
					<label>Judul</label>
					<input type="text" class="form-control" name="judul" value="<?php echo $isi_data->judul;?>">
				</div>
				
				<div class="form-group">
					<label>Isi</label>
					<textarea name="isi" cols="30" rows="5" class="form-control"><?php echo $isi_data->isi;?></textarea>
				</div>
				
				<div class="form-group">
					<label>Penulis</label>
					<input type="text" class="form-control" name="penulis" value="<?php echo $isi_data->penulis;?>">
					<input type="hidden" name="id_pengumuman" value="<?php echo $isi_data->id;?>">
				</div>
				
				<input type="submit" name="submit" value="Simpan" class="btn btn-primary">
				<a href="<?php echo site_url('admin/pengumuman'); ?>" class="btn btn-dark">Batal</a>
				
			</form>	
			</div>

		</div>
	</div> 

	