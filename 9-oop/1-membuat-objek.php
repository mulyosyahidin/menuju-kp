<?php

/**
 * file akan membuat objek dari class "Mahasiswa"
 */

require('Classess/Mahasiswa.php'); //karena beda file, include file class nya

$mahasiswa = new Mahasiswa; //membuat objek class mahasiswa

$mahasiswa->nama = 'Martin MS';