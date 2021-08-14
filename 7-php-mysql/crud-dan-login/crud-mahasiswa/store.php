<?php

/**
 * File ini bertugas menyimpan data mahasiswa dari form create.php
 * 
 * Alur:
 * 0. periksa sudah login atau belum
 * 1. pastikan file ini hanya diakses dari action form, bukan ditulis langsung di address bar
 * 2. ambil data nama, nim dan id_prodi dari form
 * 3. masukkan ke database
 * 4. jika berhasil menambah data, kembalikan ke halaman index.php dengan pesan berhasil
 * 5. jika gagal menambah data, tampilkan pesan gagal
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

	//2. ambil data nama, nim dan id_prodi dari form
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$id_prodi = $_POST['id_prodi'];

	//3. masukkan data ke database
	$masukkan = $db->query("
		INSERT INTO mahasiswa (id, nama, nim, id_prodi) VALUES
		(NULL, '$nama', '$nim', '$id_prodi')
	");

	if ($masukkan) {
		//4. jika berhasil menambah data, kembalikan ke halaman index
		$_SESSION['pesan_flash'] = 'Berhasil menambahkan data baru';

		header('location: index.php');
	} else {
		//5. jika gagal menambah data
		printf("Terjadi kesalahan saat menambahkan data: <b>%s</b>", $db->error);
	}
} else {
	echo 'Akses tidak sah !!!';
}
