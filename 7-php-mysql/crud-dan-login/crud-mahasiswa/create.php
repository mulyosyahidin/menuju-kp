<?php

/**
 * Pada file create.php (menambah data) ini tidak melakukan apa-apa,
 * hanya bertugas untuk menampilkan formulir tambah data saja.
 * 
 * Alur:
 * 0. Periksa sudah login atau belum
 * 1. Ambil data prodi dari database untuk dipilih nanti
 * 2. Tampilkan form
 */
session_start();

require_once '../includes/db.php';

if (!isset($_SESSION['is_login'])) {
	// periksa apakah user yang mengakses sudah login atau belum
	// jika belum login, arahkan ke halaman login.
	// jika sudah login, biarkan saja
	header('location: ../login.php?from=create.php');
}

$get_prodi = $db->query("SELECT * FROM prodi"); //1. ambil data prodi untuk dipilih
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Tambah Data Mahasiswa</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
	<style>
		body {
			font-family: 'PT Sans', sans-serif;
			padding: 50px 20px 0;
		}
	</style>
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 mx-auto">
				<!-- Arahkan form ke file store.php -->
				<form action="store.php" method="post">

					<div class="card shadow-lg">
						<div class="card-header">
							Tambah Data Mahasiswa

							<a href="index.php" class="float-end btn btn-sm btn-secondary">Kembali</a>
						</div>
						<div class="card-body">
							<div class="mb-3">
								<label for="nama" class="form-label">Nama:</label>
								<input type="text" name="nama" id="nama" class="form-control" required="required">
							</div>

							<div class="mb-3">
								<label for="nim" class="form-label">NIM:</label>
								<input type="text" name="nim" id="nim" class="form-control" required="required">
							</div>

							<div class="mb-3">
								<label for="prodi" class="form-label">Prodi:</label>
								<select name="id_prodi" id="prodi" class="form-control">
									<option selected="selected" disabled="disabled">Pilih Prodi...</option>


									<?php if ($get_prodi->num_rows > 0) : ?>
										<?php while ($prodi = $get_prodi->fetch_object()) : ?>
											<option value="<?php echo $prodi->id; ?>"><?php echo $prodi->nama; ?></option>
										<?php endwhile; ?>
									<?php endif; ?>
								</select>
							</div>
						</div>
						<div class="card-footer">
							<input type="submit" name="submit" value="Tambah Data" class="btn btn-primary">
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</body>

</html>