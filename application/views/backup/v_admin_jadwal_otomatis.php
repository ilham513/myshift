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






<?php //$starttime = microtime(true); // Top of page

$this->load->view('fungsi');

$penyewa = ["penyewa 1",
"penyewa 2",
"penyewa 3",
"penyewa 4",
"penyewa 5",
"penyewa 6",
"penyewa 7",
"penyewa 8",
"penyewa 9",
"penyewa 10"];

$waktu = ["1-May-2022 08:00 - 10:00",
 "2-May-2022 08:00 - 10:00",
 "3-May-2022 08:00 - 10:00",
 "4-May-2022 08:00 - 10:00",
 "5-May-2022 08:00 - 10:00",
 "6-May-2022 08:00 - 10:00",
 "7-May-2022 08:00 - 10:00",
 "8-May-2022 08:00 - 10:00",
 "9-May-2022 08:00 - 10:00",
 "10-May-2022 08:00 - 10:00"];

#potong setengah array
$len = count($penyewa) + 1;

$penyewa1 = array_slice($penyewa, 0, $len / 2);
$penyewa2 = array_slice($penyewa, $len / 2);

$waktu1 = array_slice($waktu, 0, $len / 2);
$waktu2 = array_slice($waktu, $len / 2);

$jumlah_individu = 10;
$laju_mutasi = 0.6;

//buat n individu
$populasi = buat_kumpulan_individu($penyewa, $waktu, $jumlah_individu);


$isLooping = true;
$n_generasi = 0;

while($isLooping == true) {
  //hitung nilai_fitness setiap individu
  for($i=0;$i < $jumlah_individu; $i++){
  $populasi[$i]["nilai_fitness"] = hitung_nilai_fitness($populasi[$i]);
  }

  //susun nilai_fitness tertinggi
  $columns = array_column($populasi, 'nilai_fitness');
  array_multisort($columns, SORT_DESC, $populasi);

  $n_generasi++;
  echo "Nilai Fitness Tertinggi Generasi ke-".$n_generasi.": ".$populasi[0]["nilai_fitness"]."<br/>";
  if($populasi[0]["nilai_fitness"] >= 1){$isLooping = false; break;}

  //cross over (individu 1 x individu 2)
  #list($child1,$child2) = crossover($populasi[0], $populasi[1]);
  list($child1,$child2) = shuffle2arrays($populasi[0], $populasi[1]);

  //mutasi
  $mutant1 = mutation($child1, $laju_mutasi);
  $mutant2 = mutation($child2, $laju_mutasi);
  $mutant1["nilai_fitness"] = hitung_nilai_fitness($mutant1);
  $mutant2["nilai_fitness"] = hitung_nilai_fitness($mutant2);

  //regenerasi
  $children = array($mutant1,$mutant2);
  $populasi = regeneration($children, $populasi);
}

// echo '<hr/>';
// print_r($populasi[0]); die();

$jadwal_optimal = array_combine($populasi[0]["kromosom_penyewa"], $populasi[0]["kromosom_waktu"]);
// print_r($jadwal_optimal); die();
echo '<hr/>';



// $endtime = microtime(true); // Bottom of page
// printf("Page loaded in %f seconds", $endtime - $starttime );
?>


<table class="table table-hover" id="dataTable" cellspacing="0">
								<thead>
									<tr>
										<th>Nama Penyewa</th>
										<th>Waktu Sewa</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($jadwal_optimal as $i_penyewa=>$i_waktu): ?>
									<tr>
										<td>
											<?php echo $penyewa[$i_penyewa-1] ?>
										</td>
										<td>
											<?php echo $waktu[$i_waktu-1] ?>
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
