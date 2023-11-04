<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Ilham Setia BHakti">

    <title>Log Absen</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- MDB -->
	<link rel="stylesheet" href="<?=base_url()?>css/mdb.min.css" />
	<!-- Custom styles -->
	<link rel="stylesheet" href="<?=base_url()?>css/admin.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>

  <body>
	  <!--Main Navigation-->
	  <header>
		<?php $this->load->view('component/sidebar.php');?>

		<?php $this->load->view('component/navbar.php');?>	
	  </header>
	  <!--Main Navigation-->
	  
  <!--Main layout-->
  <main style="margin-top: 58px">
    <div class="container pt-4">

	 <!-- Section: Main chart -->
		  <section class="mb-4">
			<div class="card">
			  <div class="card-header py-3">
				<h5 class="mb-0"><strong>Daftar Absen</strong></h5>
			  </div>
			  <div class="card-body">
				<!--div class="d-grid gap-2 mb-3 d-md-flex justify-content-md-end">
				  <a href="<?=site_url("admin/jadwal_otomatis")?>"><button type="button" class="btn btn-success">Generete Jadwal</button> | <a href="<?=site_url("admin/jadwal_reset")?>"><button type="button" class="btn btn-danger">Reset Jadwal</button> | <a href="<?=site_url("admin/jadwal_satuan")?>"><button type="button" class="btn btn-primary">Input Satuan</button>
				</div-->
				
				<table class="table align-middle mb-0 bg-white">
				  <thead class="bg-light">
					<tr>
					  <th>ID</th>
					  <th>Nama Karyawan</th>
					  <th>Waktu Absen</th>
					  <th>Lokasi</th>
					  <th>Actions</th>
					</tr>
				  </thead>
				  <tbody>
				  <?php foreach($array_absen as $absen): ?>
					<tr>
					  <td><?= $absen->id_absen?></td>
					  <td><?= $absen->nama_karyawan?></td>
					  <td><?= $absen->timestamp_absen?></td>
					  <td><a href="https://maps.google.com/maps?q=<?=$absen->lokasi?>&hl=id&z=14&amp" target="_blank">Lihat Lokasi</a></td>
					  <td>
						<a href="<?=site_url('admin/edit_absen/'.$absen->id_absen)?>"><span class="fw-bold me-2 text-primary" onclick="return editchecked('##');"><i class="fa-solid fa-pen-to-square"></i></span></a>
						<a href="<?=site_url('admin/hapus_absen/'.$absen->id_absen)?>"><span class="fw-bold text-danger" onclick="return deletechecked('##');"><i class="fa-solid fa-trash"></i></span></a>
					  </td>
					</tr>
					<?php endforeach; ?>
				  </tbody>
				</table>	
				
					
			  </div>
			</div>
		  </section>
	  <!-- Section: Main chart -->
	
    </div>
  </main>
  <!--Main layout-->
  
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    
	<script>
      feather.replace()
    </script>
 
 <!-- MDB -->
  <script type="text/javascript" src="<?=base_url()?>js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript" src="<?=base_url()?>js/admin.js"></script>
  
  </body>
</html>
