<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Ilham Setia BHakti">

    <title>Input Waktu</title>

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
            <h1 class="h2">Input Watu</h1>
          </div>

          <div class="jumbotron">
			<form action="<?= site_url('admin/input_waktu_go')?>" method="post">
				<div class="form-group">
					<label for="exampleInputEmail1">Hari</label>
					<select class="custom-select" name="hari">
						<option selectrd value="Senin">Senin</option>
						<option value="Selasa">Selasa</option>
						<option value="Rabu">Rabu</option>
						<option value="Kamis">Kamis</option>
						<option value="Jumat">Jumat</option>
						<option value="Sabtu">Sabtu</option>
						<option value="Minggu">Minggu</option>
					</select>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Waktu Mulai</label>
					<input class="form-control" type="time" name="jam1">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Waktu Selesai</label>
					<input class="form-control" type="time" name="jam2">
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