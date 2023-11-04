<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Ilham Setia BHakti">

    <title>Admin</title>

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
        <div class="row p-2">
          <div class="col-xl-3 col-sm-6 col-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between px-md-1">
                  <div>
                    <h3 class="text-primary"><?=$this->crud_model->menghitung_jumlah_row('penyewa')?></h3>
                    <p class="mb-0">Karyawan</p>
                  </div>
                  <div class="align-self-center">
                    <i class="fas fa-user text-primary fa-3x"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--div class="col-xl-3 col-sm-6 col-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between px-md-1">
                  <div>
                    <h3 class="text-success">XXXXX</h3>
                    <p class="mb-0">Kurir</p>
                  </div>
                  <div class="align-self-center">
                    <i class="fas fa-motorcycle text-success fa-3x"></i>
                  </div>
                </div>
              </div>
            </div>
          </div-->		  
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
