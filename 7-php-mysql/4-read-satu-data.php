<?php

include '1-koneksi.php';

$query = "SELECT * FROM mahasiswa WHERE id = 2"; //1. klausa WHERE akan mengambil hanya satu data saja.

$data = $connect->query($query); //2. jalankan query ke database

if ($data->num_rows > 0) { //3. periksa apakah data ada atau tidak
	$mahasiswa = $data->fetch_object(); //5. Ambil data dalam bentuk object

	echo "Nama: {$mahasiswa->nama} <br>"; //6. Tampilkan data
	echo "NIM: {$mahasiswa->nim} <br>";
} else { //4. Jika tidak ada, tampilkan pesan
	echo 'Data tidak ada';
}
