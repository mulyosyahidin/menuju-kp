<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'menuju_kp';

$connect = new mysqli($host, $user, $password, $database); //akan menghasilkan resource database

if ($connect->connect_errno) {
	echo 'Gagal terhubung';
	die();
}


/**
 * 1. siapkan host, user, password, nama db yang akan digunakan
 * 2. Periksa apakah koneksi berhasil atau tidak menggunakan `connect_errno`
 */
