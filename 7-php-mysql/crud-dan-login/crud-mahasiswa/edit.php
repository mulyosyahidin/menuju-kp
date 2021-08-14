<?php

/**
 * Pada file edit.php ini bertugas untuk menampilkan form edit data
 * Formnya sama dengan create.php, hanya saja pada pertama dibuka,
 * semua inputnya sudah diisi data dari database (data saat ini / data yang lama)
 * 
 * Alur:
 * 0. periksa sudah login atau belum
 * 1. ambil id mahasiswa dari URL
 * 2. Periksa apa datanya ada atau tidak
 * 3. ambil data dari database menjadi objek
 * 4. ambil data prodi dari database untuk dipilih
 * 5. jika data ada, tampilkan ke form
 * 6. jika data tidak ada, tampilkan pesan data tidak ada
 */
session_start();

require_once '../includes/db.php';

if (!isset($_SESSION['is_login'])) {
	// periksa apakah user yang mengakses sudah login atau belum
	// jika belum login, arahkan ke halaman login.
	// jika sudah login, biarkan saja
	header('location: ../login.php?from=create.php');
}

//1. ambil id dari URL
$id = $_GET['id'];

$query = $db->query("SELECT * FROM mahasiswa WHERE id = '$id'"); //query mengambil data

//2. Periksa apa datanya ada atau tidak
$cek_data = ($query->num_rows > 0); //cek data ada atau tidak

//3. ambil data dari database menjadi objek
$mahasiswa = $query->fetch_object();

//4. ambil data prodi dari database untuk dipilih
$get_prodi = $db->query("SELECT * FROM prodi");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Edit Data Mahasiswa</title>

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
				<?php if ($cek_data) : //5. data ada di database 
				?>
					<form action="update.php?id=<?php echo $id; ?>" method="post">

						<div class="card shadow-lg">
							<div class="card-header">
								Edit Data Mahasiswa

								<a href="index.php" class="float-end btn btn-sm btn-secondary">Kembali</a>
							</div>
							<div class="card-body">
								<div class="mb-3">
									<label for="nama" class="form-label">Nama:</label>
									<!-- Bedanya edit dan create: pada form edit, kolom input ada isinya, yaitu data yang lama -->
									<input type="text" name="nama" value="<?php echo $mahasiswa->nama; ?>" id="nama" class="form-control" required="required">
								</div>

								<div class="mb-3">
									<label for="nim" class="form-label">NIM:</label>
									<input type="text" name="nim" id="nim" value="<?php echo $mahasiswa->nim; ?>" class="form-control" required="required">
								</div>

								<div class="mb-3">
									<label for="prodi" class="form-label">Prodi:</label>
									<select name="id_prodi" id="prodi" class="form-control">
										<option selected="selected" disabled="disabled">Pilih Prodi...</option>
										<?php if ($get_prodi->num_rows > 0) : ?>
											<?php while ($prodi = $get_prodi->fetch_object()) : ?>
												<option value="<?php echo $prodi->id; ?>" <?php if ($prodi->id == $mahasiswa->id_prodi) echo "selected"; ?>><?php echo $prodi->nama; ?></option>
											<?php endwhile; ?>
										<?php endif; ?>
									</select>
								</div>
							</div>
							<div class="card-footer">
								<input type="submit" name="submit" value="Simpan" class="btn btn-primary">
							</div>
						</div>

					</form>
				<?php else : //6. data tidak ada di database 
				?>
					<div class="alert alert-danger">
						Data tidak ada !!
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</body>

</html>