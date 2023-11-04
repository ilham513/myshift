<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Ilham Setia BHakti">

    <title>Edit Jadwal</title>

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
				<h5 class="mb-0"><strong>Edit Jadwal</strong></h5>
			  </div>
			  <div class="card-body">
			  <!-- General Form Elements -->
              <form action="<?=site_url('admin/jadwal_edit_go')?>" method="post">
                <div class="row mb-3 d-none">
                  <div class="col-sm-10">
                    <input name="id" type="hidden" value="<?=$edit->id?>" class="form-control">
                  </div>
                </div>
				
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Nama Karyawan</label>
                  <div class="col-sm-10">
                    <input name="nama_penyewa" type="text" value="<?=$edit->nama_penyewa?>" class="form-control">
                  </div>
                </div>

				<fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Waktu Sewa</legend>
                  <div class="col-sm-10">
                    <?php foreach($waktu as $waktu): ?>
					<div class="form-check mb-1">
                      <input class="form-check-input" type="radio" name="waktu_sewa" id="gridRadios1" value="<?=$waktu?>">
                      <label class="form-check-label" for="gridRadios1"><?=$waktu?></label>
                    </div>
					<?php endforeach; ?>
                  </div>
                </fieldset>	
				
				
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Ubah</button>
                  </div>
                </div>
              </form><!-- End General Form Elements -->
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
