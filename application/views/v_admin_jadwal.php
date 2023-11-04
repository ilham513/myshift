<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Ilham Setia BHakti">

    <title>Jadwal</title>

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
            <h1 class="h2">Jadwal Shift</h1>
          </div>

          <div class="jumbotron">
            <table class="table table-hover" id="sortTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Nama Karyawan</th>
                  <th>Waktu Shift</th>
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
                  <td width="150">
                    <a href="<?=site_url('admin/jadwal_edit/'.$jadwal->id)?>">Edit</a> | <a href="<?=site_url('admin/jadwal_hapus/'.$jadwal->id)?>">Hapus</a>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>

            <a href="<?=site_url("admin/jadwal_otomatis")?>"><button type="button" class="btn btn-success">Generete Jadwal</button> | <a href="<?=site_url("admin/jadwal_reset")?>"><button type="button" class="btn btn-danger">Reset Jadwal</button> | <a href="<?=site_url("admin/jadwal_satuan")?>"><button type="button" class="btn btn-primary">Input Satuan</button>
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
