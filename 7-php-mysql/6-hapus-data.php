<?php

include '1-koneksi.php';

$query = "DELETE FROM mahasiswa WHERE id = 8";

$update = $connect->query($query);

if ($update) {
	echo "Berhasil menghapus data";
} else {
	printf("Gagal menghapus data. Error: %s", $connect->error);
}
