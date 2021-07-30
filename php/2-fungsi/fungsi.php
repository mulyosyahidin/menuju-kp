<?php

function cetak_nama($nama = 'default', $berapa_kali = 2) { //block function
  for ($i = 1; $i <= $berapa_kali; $i++) {
    echo $nama;
    echo '<br>';
  }
}

cetak_nama('Martin MS', 3);

// cetak_nama('Naufal', 2);

function tambah($x, $y) { //inline
  $hasil = $x + $y;

  return $hasil;
}

echo tambah(2, 3);
