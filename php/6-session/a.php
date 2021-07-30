<?php
session_start();

$nama = $_SESSION['nama'];

echo 'Halo ' . $nama;
