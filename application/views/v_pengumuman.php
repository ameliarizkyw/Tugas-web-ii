
<!DOCTYPE html>
<html>
<head>
	<title>Pengumuman</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css') ?>">
</head>
<body>
	<div class="container">
	
	<h1>Pengumuman wisuda</h1>
	<h2>Tanggal wisuda : <?php echo $Tanggal ?></h2>
	<h2>Dosen : <?php echo $Dosen ?></h2>

	<a href="<?php echo site_url('pengumuman/detail'); ?>" class="btn btn-outline-success">Detail</a>

	</div>
</body>
</html>