<?php

/**
 * Di file destroy.php ini, melakukan tugas penghapusan data berdasarkan id
 * 
 * Alur
 * 0. periksa sudah login atau belum
 * 1. ambil id dari URL
 * 2. periksa apakah data mahasiswa dengan id di URL ada di database atau tidak
 * 		Hanya data yang ada di database yang boleh dihapus
 * 3. jika data tidak ada, tampilkan pesan bahwa data tidak ada
 * 		bisa juga tindakan lain, seperti dikembalikan ke index.php, atau halaman 404, dll
 * 4. jika data ada, hapus datanya menggunakan query DELETE
 * 5. jika berhasil menghapus data, kembalikan ke halaman index.php
 * 6. jika gagal menghapus data, tampilkan pesan gagal menghapus data
 */
session_start();

require_once '../includes/db.php';

if (!isset($_SESSION['is_login'])) {
	// periksa apakah user yang mengakses sudah login atau belum
	// jika belum login, arahkan ke halaman login.
	// jika sudah login, biarkan saja
	header('location: ../login.php?from=delete.php');
}

$id = $_GET['id']; //1. ambil `id` dari URL

$cek_data = $db->query("SELECT * FROM mahasiswa WHERE id = '$id'");

if ($cek_data->num_rows > 0) { //2. periksa apakah data ada atau tidak
	// data hanya boleh dihapus jika data itu ada.
	$hapus_data = $db->query("DELETE FROM mahasiswa WHERE id = '$id'"); //4. query untuk menghapus data

	if ($hapus_data) {
		//5. jika data berhasil dihapus, kembalikan ke halaman index.php
		$_SESSION['pesan_flash'] = 'Berhasil menghapus data';

		header('location: index.php');
	} else {
		//6. jika data gagal dihapus karena kesalahan
		printf("Terjadi kesalahan saat menghapus data: <b>%s</b>", $db->error);
	}
} else {
	//3. jika data tidak ada
	echo "Data tidak ada !!!";
}
