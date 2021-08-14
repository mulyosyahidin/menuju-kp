<?php

/**
 * File ini bertugas untuk menampilkan hanya satu data berdasarkan ID di URL
 * 
 * Alur:
 * 0. periksa sudah login atau belum
 * 1. Ambil id dari URL
 * 2. Lakukan query ke database berdasarkan id (WHERE m.id = $id, maksudnya hanya menyeleksi satu data)
 * 3. Periksa apa datanya ada atau tidak
 * 4. Ambil data dari database menjadi objek
 * 5. Jika data, tampilkan ke html
 * 6. Jika data tidak ada
 */
session_start();

require_once '../includes/db.php';

$id = $_GET['id']; //1. ambil `id` dari URL

$query = $db->query("
	SELECT m.id, m.nama, m.nim, p.nama AS prodi, f.nama AS fakultas FROM mahasiswa m
		JOIN prodi p
			ON p.id = m.id_prodi
		JOIN fakultas f
		ON f.id = p.id_fakultas
	WHERE m.id = '$id'"); //2. query untuk mengambil data dari database

$apakah_data_ada = ($query->num_rows > 0); //3. cek apakah data dengan id yang diberikan ada atau tidak
$data = $query->fetch_object(); //4. ambil datanya
?>
<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php if ($apakah_data_ada) : ?>
		<title><?php echo $data->nama; ?></title>
	<?php else : ?>
		<title>Upps.. Data tidak ada</title>
	<?php endif; ?>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
	<style>
		body {
			font-family: 'PT Sans', sans-serif;
			padding: 50px 20px 0;
		}
	</style>
</head>
<div class="container">
	<div class="row">
		<div class="col-8 mx-auto">
			<?php if ($apakah_data_ada) : //5. jika data ada 
			?>
				<div class="card shadow-lg">
					<div class="card-header">
						<?php echo $data->nama; ?>

						<a href="index.php" class="float-end btn btn-sm btn-secondary">Kembali</a>
					</div>
					<div class="table-responsive">
						<table class="table table-bordered table-condensed table-hover">
							<tr>
								<td>ID</td>
								<td>:</td>
								<td><b><?php echo $data->id; ?></b></td>
							</tr>
							<tr>
								<td>Nama</td>
								<td>:</td>
								<td><b><?php echo $data->nama; ?></b></td>
							</tr>
							<tr>
								<td>NIM</td>
								<td>:</td>
								<td><b><?php echo $data->nim; ?></b></td>
							</tr>
							<tr>
								<td>Prodi</td>
								<td>:</td>
								<td><b><?php echo $data->prodi; ?></b></td>
							</tr>
							<tr>
								<td>Fakultas</td>
								<td>:</td>
								<td><b><?php echo $data->fakultas; ?></b></td>
							</tr>
						</table>
					</div>

					<?php if ( isset($_SESSION['is_login'])) : ?>
					<div class="card-footer">
						<a href="edit.php?id=<?php echo $id; ?>" class="btn btn-sm btn-warning text-white">Edit</a>
						<a href="destroy.php?id=<?php echo $id; ?>" class="btn btn-sm btn-danger text-white">Hapus</a>
					</div>
					<?php endif; ?>

				</div>
			<?php else : //6. jika data tidak ada 
			?>
				<div class="alert alert-danger">
					Data tidak ada !!!
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>

<body>

</body>

</html>