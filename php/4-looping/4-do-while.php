<?php

function buat_kode()
{
  return rand(1, 10); //menghasilkan angka acak dari satu sampai 10
}

function cek_apakah_kode_sudah_dipakai($kode)
{
  $kode_unik_dari_database = array(
    '1', '2', '3', '4', '5', '6',
  ); //anggap saja ini dari database

  /**
   * Fungsi in_array() berguna untuk memeriksa apakah suatu elemen ada
   * di dalam array atau tidak.
   * 
   * Misalnya: in_array('2', $kode_unik_dari_database)
   * maka akan diperiksa, apakah `2` ada di array `$kode_unik_dari_database`
   * atau tidak. Jika ada, maka akan mengembalikan "true",
   * jika tidak ada maka akan mengembalikan "false"
   */

  return in_array($kode, $kode_unik_dari_database);
}

$kode_baru = buat_kode();
$berhasil = true;
$n = 1;

do {
  echo 'Iterasi ke ' . $n;
  echo '<br>';
  echo '$kode_baru ==> ' . $kode_baru;
  echo '<br>';
  echo 'Apakah ' . $kode_baru . ' ada di database? ';
  var_dump(cek_apakah_kode_sudah_dipakai($kode_baru));
  echo '<br>';
  echo '<br>';


  if (cek_apakah_kode_sudah_dipakai($kode_baru)) {
    //true
    $kode_baru = buat_kode();
    $berhasil = false;
  } else {
    $berhasil = true;
  }

  $n++;
} while (!$berhasil);

echo 'Kode unik baru: ' . $kode_baru;
