<?php

/**
 * File ini bertugas memperbarui data di database berdasarkan id
 * 
 * Alur:
 * 0. periksa sudah login atau belum
 * 1. pastikan file ini hanya diakses dari action form, bukan ditulis langsung di address bar
 * 2. ambil id data dari URL, yaitu id data yang akan di update
 * 3. ambil data dari form (nama, nim, id_prodi)
 * 4. periksa data ada atau tidak berdasarkan id (langkah 2)
 * 5. jika ada, lakukan query untuk mengupdate data
 * 6. jika berhasil meng update / mengubah data, kembalikan ke halaman show.php
 * 7. jika gagal, tampilkan pesan gagal
 */
session_start();
require_once '../includes/db.php';

if (!isset($_SESSION['is_login'])) {
	// periksa apakah user yang mengakses sudah login atau belum
	// jika belum login, arahkan ke halaman login.
	// jika sudah login, biarkan saja
	header('location: ../login.php');
}

if (isset($_POST['submit'])) { //1. periksa apakah form disubmit apa tidak

	//2. ambil id data yang akan di edit dari URL
	$id = $_GET['id'];

	//3. ambil data nama, nim dan id_prodi dari form
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$id_prodi = $_POST['id_prodi'];

	$query = $db->query("SELECT * FROM mahasiswa WHERE id = '$id'"); //query mengambil data

	//4. Periksa apa datanya ada atau tidak
	$cek_data = ($query->num_rows > 0); //cek data ada atau tidak

	if ($cek_data) {
		$update_data = $db->query("
			UPDATE mahasiswa SET
				nama = '$nama',
				nim = '$nim',
				id_prodi = '$id_prodi'
			WHERE id = '$id'
		"); // 5. update data di database berdasarkan id (WHERE id)

		if ($update_data) {
			//6. jika berhasil menyimpan / mengubah data, kembalikan ke halaman show.php

			header("Location: show.php?id=$id");
		} else {
			//7. jika gagal memperbarui data
			printf("Terjadi kesalahan saat menambahkan data: <b>%s</b>", $db->error);
		}
	} else {
		echo "Data dengan id tersebut tidak ada !!!!";
	}
} else {
	echo 'Akses tidak sah !!!';
}
