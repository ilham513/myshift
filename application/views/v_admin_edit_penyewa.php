<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Ilham Setia BHakti">

    <title>Edit Penyewa</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- MDB -->
	<link rel="stylesheet" href="<?=base_url()?>css/mdb.min.css" />
	<!-- Custom styles -->
	<link rel="stylesheet" href="<?=base_url()?>css/admin.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>

  <body>
	  <div>
		<?php $this->load->view('component/sidebar.php');?>
		<?php $this->load->view('component/navbar.php');?>	

	  </div>

<!--Main layout-->
  <main style="margin-top: 58px">
    <div class="container pt-4">
      <!--Section: Minimal statistics cards-->
      <section>
			 <!-- General Form Elements -->
              <form action="<?=site_url('admin/edit_go')?>" method="post">
				<input name="id" type="hidden" value="<?=$id?>" class="form-control">
			  
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Nama Karwayan</label>
                  <div class="col-sm-10">
                    <input name="nama" type="text" value="<?=$nama?>" class="form-control">
                  </div>
                </div>
				
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Nomor Telpon</label>
                  <div class="col-sm-10">
                    <input name="no_telp" value="<?=$no_telp?>" type="text" class="form-control">
                  </div>
                </div>
				
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Edit</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->	  
      </section>
      <!--Section: Minimal statistics cards-->
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
