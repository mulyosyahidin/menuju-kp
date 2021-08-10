<?php

include '1-koneksi.php';

$query = "UPDATE mahasiswa SET nama = '[nama baru]' WHERE id = [id yang akan diupdate]";

$update = $connect->query($query);

if ($update) {
	echo "Berhasil memperbarui data";
} else {
	printf("Gagal memperbarui data. Error: %s", $connect->error);
}
