<?php

include '1-koneksi.php';

//1. Buat Query Insert nya, sama saja seperti Query di heidi sql / phpmyadmin
$query = "INSERT INTO mahasiswa VALUES (null, 2, 'Yudi', 'G1A019002')";

//2. Masukkan data
$masukkan = $connect->query($query);

if ($masukkan) {
	echo 'Berhasil';
}
else {
	echo 'Gagal';
}

// insert ===> boolean