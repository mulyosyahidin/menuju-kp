<?php
$angka = 10; //integer
$hasil = 10.881; //float

$nama = 'Martin MS'; //string
$kota = "Bengkulu"; //string

$verifikasi = true; //boolean, "TRUE" atau "true" adalah sama
$verifikasi_lagi = FALSE; //boolean, "FALSE" atau "false" adalah sama

$data = array('Martin MS', 123, TRUE, 'Informatika'); //ini array
$siswa = ['Andi', 'Dedi', 'Doni', 'Ahmad']; //ini juga array

$awal = null; //null, bisa ditulis NULL (huruf kapital semua)

$db = new mysqli(); //ini object
$sebuah_class = new stdClass(); //ini juga object

/*
  * untuk mengetahui tipe data sebuah variabel, bisa menggunakan fungsi "gettype()."
  * contoh: echo gettype($nama_variabel)
*/

echo gettype($db); //akan menampilkan tipe data dari variabel "$db"