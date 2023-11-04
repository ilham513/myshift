<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Ilham Setia BHakti">

    <title>Jadwal Shift</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url('css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=base_url('css/dashboard.css')?>" rel="stylesheet">

    <style>
    </style>
  </head>

    <body>
	<header>
	  <div class="bg-dark" id="navbarHeader">
		<div class="container">
		  </div>
		</div>
	  </div>
	  <div class="navbar navbar-dark bg-dark shadow-sm">
		<div class="container">
		  <a href="#" class="navbar-brand d-flex align-items-center">
			<strong>Jadwal Kerja Karyawan</strong>
		  </a>
		  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
		  </button>
		</div>
	  </div>
	</header>

    <main role="main" class="container">
	  <section class="container mb-5">
		  <div class="mx-auto pt-5">
			<table class="table table-striped table-hover" id="sortTable" width="100%" cellspacing="0">
				  <thead class="thead-dark">
					<tr>
					  <th>Nama Karyawan</th>
					  <th>Jam Kerja</th>
					</tr>
				  </thead>
				  <tbody>
					<?php foreach ($jadwal as $jadwal): ?>
					<tr>
					  <td width="150">
						<?php echo $jadwal->nama_penyewa ?>
					  </td>
					  <td width="150">
						<?php echo $jadwal->waktu_sewa ?>
					  </td>
					</tr>
					<?php endforeach; ?>
				  </tbody>
				</table>
		  </div>
	  </section>
	</main>

	<footer class="text-muted">
	  <div class="container">
		<p class="float-end text-end mb-1">
		  <a href="<?=site_url('login')?>">Login admin</a>
		</p>
	  </div>
	</footer>
    </body>
</html>