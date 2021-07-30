<?php
session_start();

$nama = $_POST['nama'];

// $_SESSION['nama'] = $nama;

$_SESSION['nama'] = $nama;


header('Location: a.php');

// echo 'Berhasil set session, silahkan akses file <b>a.php</b> atau file <b>b.php</b> untuk melihat isi session';
