t" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Ilham Setia BHakti">

    <title>Tambah Waktu</title>

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
              <form action="<?=site_url('admin/input_waktu_go')?>" method="post">
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Hari</label>
                  <div class="col-sm-10">
                    <select name="hari" class="form-select" aria-label="Default select example">
				    <option selected disabled>Pilih hari...</option>
					<option value="Senin">Senin</option>
					<option value="Selasa">Selasa</option>
					<option value="Rabu">Rabu</option>
					<option value="Kamis">Kamis</option>
					<option value="Jumat">Jumat</option>
					<option value="Sabtu">Sabtu</option>
					<option value="Minggu">Minggu</option>					
				  </select>
                  </div>
                </div>
				<div class="row mb-3">
                  <label for="inputTime" class="col-sm-2 col-form-label">Jam Mulai</label>
                  <div class="col-sm-10">
                    <input name="jam1" type="time" class="form-control">
                  </div>
                </div>				
                <div class="row mb-3">
                  <label for="inputTime" class="col-sm-2 col-form-label">Jam Selesai</label>
                  <div class="col-sm-10">
                    <input name="jam2" type="time" class="form-control">
                  </div>
                </div>
				
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Buat</button>
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
