<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Ilham Setia BHakti">

    <title>Input Penyewa</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=base_url()?>css/dashboard.css" rel="stylesheet">
 </head>

  <body>
	<?php $this->load->view('v_admin_comp/nav'); ?>

    <div class="container-fluid">
      <div class="row">
	  <?php $this->load->view('v_admin_comp/side_bar'); ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Input Penyewa</h1>
          </div>

          <div class="jumbotron">
			<form action="<?= site_url('admin/input_go')?>" method="post">
				<div class="form-group">
					<label for="exampleInputEmail1">Nama Penyewa</label>
					<input class="form-control" type="text" name="nama">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Nomor Telpon</label>
					<input class="form-control" type="text" name="no_telp">
				</div>
				<button type="submit" class="btn btn-primary">Kirim</button>
			</form>	
          </div>
        </main>
      </div>
    </div>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    
	<script>
      feather.replace()
    </script>
  
  </body>
</html>