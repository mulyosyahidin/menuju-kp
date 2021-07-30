<?php

/**
 * (satu)
 * Foreach adalah looping yang melakukan perulangan dari data array.
 * Jadi, untuk menggunakan foreach kita sudah harus punya data arraynya,
 * bisa itu dari database atau array statis (dibuat manual).
 * 
 * Data array harus bersifat jamak. Contoh:
 */

$countries = [
  'Indonesia',
  'Jepang',
  'Vietnam',
  'Thailand',
  'Myanmar'
];

/**
 * (dua)
 * Foreach bersifat "mengindividukan" di setiap iterasinya.
 * Data jamak akan diubah menjadi data tunggal.
 * 
 * Foreach menggunakan keyword "as", yang berguna untuk men "tunggal" kan data.
 * $countries as $country bisa dibaca:
 * loop "semua data negara ($countries)" sebagai "negara ($country)"
 */
foreach ($countries as $country) {
  echo 'Negara: ' . $country;
  echo '<br>';
}

/**
 * (tiga)
 * Contoh lanjutan:
 * melakukan looping data provinsi yang terdiri dari nama provinsi dan ibu kotanya.
 */
$provinces = array(
  array(
    'nama' => 'Sumatera Barat',
    'ibukota' => 'Padang',
  ),
  array(
    'nama' => 'Sumatera Utara',
    'ibukota' => 'Medan'
  ),
  array(
    'nama' => 'Sumatera Selatan',
    'ibukota' => 'Palembang'
  ),
);

echo '<br>';
echo '<br>';

foreach ($provinces as $province) {
  /**
   * Di dalam sini, semua data bersifat tunggal.
   * Untuk menampilkan data
   */
  echo 'Nama provinsi: ' . $province['nama'];
  echo '<br>';
  echo 'Ibu kota: ' . $province['ibukota'];
  echo '<br>';
  echo '<br>';
}
