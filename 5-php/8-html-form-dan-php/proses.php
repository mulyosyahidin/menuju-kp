<?php

// // Mengambil data dari method GET
// $get_nama = $_GET['nama'];
// $get_usia = $_GET['usia'];

// echo "Nama: $get_nama <br>";
// echo "Usia: $get_usia <br>";


// // Mengambil data dari method POST
// $post_nama = $_POST['nama'];
// $post_usia = $_POST['usia'];

// echo "Nama: $post_nama <br>";
// echo "Usia: $post_usia <br>";


//$nama = $_GET['nama'];
//$usia = $_GET['usia'];

//echo $nama;
//echo $usia;

if (isset($_POST['nama'])) {
  $nama = htmlspecialchars($_POST['nama']);
  $usia = $_POST['usia'];

  if (empty($nama)) {
    echo 'Nama harus diisi';
  }

  if (empty($usia)) {
    echo 'Usia harus diisi';
  }

  echo $nama;
  echo '<br>';
  echo $usia;
}
else {
  echo 'Nama harus ada';
}