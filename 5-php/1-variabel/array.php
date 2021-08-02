<?php
//array satu dimensi:
$siswa = array('Joni', 'Dika Saputra', 'Jhon Doe'); // ini array satu dimensi
$guru = ['Kakashi', 'Iruka']; // ini juga array satu dimensi

//Menampilkan data:
echo $siswa[2]; //hasil: 'Jhon Doe';
echo '<br>';

//array dengan kunci dan value
$data = [
	'fakultas' => 'Teknik',
	'prodi' => 'Informatika',
];

//menampilkan data:
echo $data['prodi']; //hasil: Informatika
echo '<br>';

/**
 * Pada array $data,
 * `fakultas` dan `prodi` disebut "kunci" (key)
 * sedangkan `Teknik` dan `Informatika` disebut "value" (nilai / isi)
 * 
 * `fakultas` merupakan key dari `Teknik`,
 * dan `Informatika` merupakan value dari key `prodi`
 * (saling berpasangan)
**/

//array multi dimensi
$data_mahasiswa = [
	'nama' => 'Martin Mulyo Syahidin',
	'npm' => 'G1A019061',
	'data_prodi' => [
		'nama' => 'Informatika',
		'kaprodi' => 'Arie Vatresia, S.T., M.T.I., Ph.D.',

		'data_fakultas' => [
			'nama' => 'Teknik',
			'dekan' => ''
		]
	],
];

//menampilkan data:
echo $data_mahasiswa['data_prodi']['kaprodi']; //hasil: Arie Vatresia, S.T., M.T.I., Ph.D.

/**
 * Inti array multi dimensi adalah: ada array di dalam array.
 * Pada array $data_mahasiswa, terdapat key "data_prodi" yang berisi array lagi,
 * yaitu array data prodi.
 * Di dalam key "data_prodi" ini ada key "data_fakultas" yang berisi data fakultas.
 * 
 * Jadi array $data_mahasiswa ini terdiri dari 3 dimensi.
**/