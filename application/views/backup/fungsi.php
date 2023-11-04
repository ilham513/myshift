<?php
#fungsi buat_individu(penyewa, waktu)
function buat_individu($penyewa, $waktu){
  foreach($penyewa as $i=>$penyewa){
    $penyewa_encoded[($i+1)] = $penyewa;
  }
  
  foreach($waktu as $i=>$waktu){
    $waktu_encoded[($i+1)] = $waktu;
  }
  
  for ($i = 0; $i < count($penyewa_encoded); $i++) {
    $kromosom_penyewa[] = rand(1,count($penyewa_encoded));
    $kromosom_waktu[] = rand(1,count($penyewa_encoded));
  }
  
  $individu["kromosom_penyewa"] = $kromosom_penyewa;
  $individu["kromosom_waktu"] = $kromosom_waktu;

  return $individu;
}

#fungsi buat_kumpulan_individu(penyewa, waktu, n individu)
function buat_kumpulan_individu($penyewa, $waktu, $n_individu){
  for ($i = 0; $i < $n_individu; $i++) {
    $kumpulan_individu[] = buat_individu($penyewa, $waktu);
  }
  
  return $kumpulan_individu;
}

#hitung nilai fitness
function hitung_nilai_fitness($individu){
  $tumbukan_penyewa = 0;
  $maps = array_count_values($individu["kromosom_penyewa"]);
  foreach ($maps as $map) {
    if($map >1){
      $tumbukan_penyewa += $map;
    }
  }
  
  $maps = array_count_values($individu["kromosom_waktu"]);
  foreach ($maps as $map) {
    if($map >1){
      $tumbukan_penyewa += $map;
    }
  }
  
  #echo "Tumbukan Pertandingn = ".$tumbukan_penyewa;
  $nilai_fitness = 1/(1+$tumbukan_penyewa);

  return $nilai_fitness;
}

#fungsi crossover
function crossover($parent1, $parent2){
  //echo "P1 = "; print_r($parent1);
  //echo "P2 = "; print_r($parent2);
  //echo "<hr/>";
  
  $child1 = $parent1;
  $child2 = $parent2;
  
  $CP = round(count($parent1["kromosom_penyewa"])/2);
  
  $len = count($child1["kromosom_penyewa"]);

  $atas = ceil($len / 2);
  $bawah = floor($len / 2);
  
  $bag1 = array_slice($child1["kromosom_penyewa"], 0, $atas);
  $bag2 = array_slice($child1["kromosom_penyewa"], $bawah);
  $bag3 = array_slice($child2["kromosom_penyewa"], 0, $atas);
  $bag4 = array_slice($child2["kromosom_penyewa"], $bawah);
  
  $child1["kromosom_penyewa"] = array_merge($bag1, $bag3);
  $child2["kromosom_penyewa"] = array_merge($bag2, $bag4);
  
  $bag1 = array_slice($child1["kromosom_waktu"], 0, $atas);
  $bag2 = array_slice($child1["kromosom_waktu"], $bawah);
  $bag3 = array_slice($child2["kromosom_waktu"], 0, $atas);
  $bag4 = array_slice($child2["kromosom_waktu"], $bawah);
  
  $child1["kromosom_waktu"] = array_merge($bag1, $bag3);
  $child2["kromosom_waktu"] = array_merge($bag2, $bag4);
  
  $child1["nilai_fitness"] = hitung_nilai_fitness($child1);
  $child2["nilai_fitness"] = hitung_nilai_fitness($child2);
  
  // echo "<pre>C1 = "; print_r($child1);
  // echo "C2 = "; print_r($child2);
  // echo "<hr/></pre>"; die();

  
  return array($child1, $child2);
}

#fungsi mutasi
function mutation($child, $laju_mutasi){
  for ($i = 0; $i < count($child["kromosom_penyewa"]); $i++) {
    $randomFloat = rand(0, 10) / 10;
    
    if($randomFloat <= $laju_mutasi){
      $mutant["kromosom_penyewa"][] = rand(1,count($child["kromosom_penyewa"]));
    }else{
      $mutant["kromosom_penyewa"][] = $child["kromosom_penyewa"][$i];
    }
    
    if($randomFloat <= $laju_mutasi){
      $mutant["kromosom_waktu"][] = rand(1,count($child["kromosom_waktu"]));
    }else{
      $mutant["kromosom_waktu"][] = $child["kromosom_waktu"][$i];
    } 
  }
  return $mutant;
}

#Fungsi regeneration
function regeneration($children, $populasi){
  //hapuskan dua nilai populasi terendah
  array_pop($populasi);
  array_pop($populasi);

  return array_merge($children,$populasi);
}

function shuffle2arrays($individu1, $individu2){
    if (count($individu1) != count($individu2))
    {
        return false;
    }

    $array1 = $individu1["kromosom_penyewa"];
    $array2 = $individu1["kromosom_waktu"];

    $count = count($array1);
    $keys  = array_rand(range(0, ($count-1)), $count);

    $new_array1 = array();
    $new_array2 = array();

    for ($i = 0; $i < $count; $i++)
    {
        $new_array1[$i] = $array1[$keys[$i]];
        $new_array2[$i] = $array2[$keys[$i]];
    }

    $child1["kromosom_penyewa"]= $new_array1;
    $child1["kromosom_waktu"] = $new_array2;
    $child1["nilai_fitness"] = hitung_nilai_fitness($child1);

    //individu 2

    $array1 = $individu2["kromosom_penyewa"];
    $array2 = $individu2["kromosom_waktu"];

    $count = count($array1);
    $keys  = array_rand(range(0, ($count-1)), $count);

    $new_array1 = array();
    $new_array2 = array();

    for ($i = 0; $i < $count; $i++)
    {
        $new_array1[$i] = $array1[$keys[$i]];
        $new_array2[$i] = $array2[$keys[$i]];
    }

    $child2["kromosom_penyewa"]= $new_array1;
    $child2["kromosom_waktu"] = $new_array2;
    $child2["nilai_fitness"] = hitung_nilai_fitness($child2);

    return array($child1, $child2);
}
?>