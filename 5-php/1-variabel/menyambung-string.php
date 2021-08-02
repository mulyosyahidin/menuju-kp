<?php
$nama_depan = 'Martin';
$nama_tengah = 'Mulyo';
$nama_belakang = 'Syahidin';

$nama_lengkap = $nama_depan . $nama_tengah . $nama_belakang; //menggabung 3 variabel sebelumnya

echo $nama_lengkap; //tapi hasilnya tidak ada spasi antar kata
echo '<br>'; //baris baru

$nama_lengkap_dengan_spasi = $nama_depan .' '. $nama_tengah .' '. $nama_belakang;
echo $nama_lengkap_dengan_spasi; //ini ada spasinya
echo '<br>';

$prodi = 'Informatika';

$kalimat = 'Saya sedang kuliah di prodi '. $prodi .' Universitas Bengkulu';
echo $kalimat;
echo '<br>';

$kalimat2 = "Saya kuliah di prodi $prodi Universitas Bengkulu";
echo $kalimat2;