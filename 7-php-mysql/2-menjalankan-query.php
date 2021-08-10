<?php

// kesimpulan untuk menjalankan query
/**
 * 0. include koneksi
 * 1. Pastikan sudah berhasil terhubung dengan database
 * 2. Jalankan query menggunakan perintah "$connect->query()" seperti pada baris ke-5
 * 		Query select bisa diganti dengan query lain, seperti UPDATE, DELETE, dan lain-lain.
 * 3. Periksa apakah query memiliki hasil atau tidak menggunakan perintah "num_rows > 0".
 *		Jika `num_rows` lebih besar dari 0, artinya query memiliki hasil
 * 4. Lakukan looping data menggunakan while.
 * 		fetch_object() bisa diganti dengan method lain, seperti fetch_assoc(), fetch_all(), fetch_array() dll.
 * 		Perbedaanya adalah tipe data yang dihasilkan. fetch_object() akan menghasilkan object, sedangkan
 * 		fetch_assoc() dan fetch_array() akan menghasilkan array.
 */

//0
require '1-koneksi.php';

//1. oke
//2
$query = "select * from mahasiswa";
$ambil_data = $connect->query($query);

//3
if ($ambil_data->num_rows > 0) {
	while ($mahasiswa = $ambil_data->fetch_object()) {
		echo "Nama: {$mahasiswa->nama}";
		echo "<br>";
	}
} else {
	echo 'Tidak ada data';
}

function apakah_ada_data()
{
}
