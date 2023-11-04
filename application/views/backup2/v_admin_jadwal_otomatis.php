<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Ilham Setia BHakti">

    <title>Jadwal Otomatis</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/dashboard/dashboard.css" rel="stylesheet">
  </head>

  <body>
	<?php $this->load->view('v_admin_comp/nav'); ?>

    <div class="container-fluid">
      <div class="row">
	  <?php $this->load->view('v_admin_comp/side_bar'); ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Jadwal Otomatis</h1>
          </div>

          <div class="jumbotron">
          <?php 
            $this->load->view('fungsi');
            
            $jumlah_individu = 10;
            $laju_mutasi = 0.6;

            $chunk_penyewa = array_chunk($penyewa, count($penyewa) / 2);
            $chunk_waktu = array_chunk($waktu, count($waktu) / 2);

            $jadwal_optimal= GA($chunk_penyewa[0],$chunk_waktu[0],$jumlah_individu, $laju_mutasi);

            //bentuk jadwal ke db   
            for ($x = 0; $x < count($jadwal_optimal["kromosom_penyewa"]); $x++) {
              $jadwal_optimal_db[] = array("kromosom_penyewa"=> $jadwal_optimal["kromosom_penyewa"][$x] - 1
                                          , "kromosom_waktu"=> $jadwal_optimal["kromosom_waktu"][$x] - 1);
            }
            // echo '<pre>';print_r($jadwal_optimal_db);die();

            //bentuk jadwal ke db chunk
            $tes = range(count($penyewa) / 2,count($penyewa));

            for ($x = 0; $x < count($chunk_penyewa[1]); $x++) {
              $jadwal_optimal_db[] = array("kromosom_penyewa"=> $tes[$x]
                                          , "kromosom_waktu"=> $tes[$x]);
            }

            shuffle($jadwal_optimal_db);
            
          ?>

<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Name</th>
										<th>Waktu</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($jadwal_optimal_db as $i): ?>
									<tr>
										<td width="150">
											<?php echo $penyewa[$i["kromosom_penyewa"]]->nama ?>
										</td>
										<td width="150">
											<?php echo $waktu[$i["kromosom_waktu"]]->hari . ", " . $waktu[$i["kromosom_waktu"]]->jam ?>
										</td>
                  </tr>
									<?php endforeach; ?>
								</tbody>
							</table>
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
