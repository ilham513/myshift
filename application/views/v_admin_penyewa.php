<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Ilham Setia BHakti">

    <title>List Karyawan</title>

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
				<h5 class="mb-0"><strong>List Karyawan</strong></h5>
			  </div>
			  <div class="card-body">
				<div class="d-grid gap-2 mb-3 d-md-flex justify-content-md-end">
				  <a href="<?=site_url('kurir/add')?>"><button class="btn btn-success fw-bold" type="button">Tambah Karywan</button></a>
				</div>
				
				<table class="table align-middle mb-0 bg-white">
				  <thead class="bg-light">
					<tr>
					  <th>ID</th>
					  <th>Nama</th>
					  <th>Nomor Telpon</th>
					  <th>Actions</th>
					</tr>
				  </thead>
				  <tbody>
				  <?php foreach($array_penyewa as $penyewa): ?>
					<tr>
					  <td><?= $penyewa->id ?></td>
					  <td><?= $penyewa->nama ?></td>
					  <td><?= $penyewa->no_telp ?></td>
					  <td>
						<a href="<?=site_url('kurir/edit/'.$penyewa->id)?>"><span class="fw-bold me-2 text-primary" onclick="return editchecked('##');"><i class="fa-solid fa-pen-to-square"></i></span></a>
						<a href="<?=site_url('kurir/hapus/'.$penyewa->id)?>"><span class="fw-bold text-danger" onclick="return deletechecked('##');"><i class="fa-solid fa-trash"></i></span></a>
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
  
  </body>
</html>
