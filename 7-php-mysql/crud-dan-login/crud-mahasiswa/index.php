<?php

/**
 * File ini bertugas menampilkan semua data dari database
 * 
 * Alur:
 * 0. tidak perlu cek sudah login atau belum
 * 1. ambil data dari database, dari tabel mahasiswa dan join
 * 2. cek apa ada data di tabel `mahasiswa` atau tidak
 * 3. jika ada data, tampilkan ke dalam tabel
 * 4. jika tidak ada data, tampilkan pesan tidak ada.
 * 
 * Untuk membedakan tampilkan user yang login dan yang belum login, gunakan isset()
 * Misalnya pada baris 57, "<?php if (isset($_SESSION['is_login'])) : ?>",
 * jika sudah login, maka ada pesan "Halo {Nama user yang login}"
 * jika belum login, tidak ada pesan
 */
session_start();
require_once '../includes/db.php';

if (isset($_SESSION['pesan_flash'])) { //abaikan ini
	$pesan_flash = $_SESSION['pesan_flash'];
	
	unset($_SESSION['pesan_flash']);
}

$data_mahasiswa = $db->query("
	SELECT m.id, m.nama, m.nim, p.nama AS prodi, f.nama AS fakultas FROM mahasiswa m
	JOIN prodi p
	ON p.id = m.id_prodi
	JOIN fakultas f
	ON f.id = p.id_fakultas"); //1. query ambil data dari database
	
$cek_apakah_ada_data_di_database = ($data_mahasiswa->num_rows > 0); //2. maksudnya, jika `num_rows` > 0, maka akan true
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Data Mahasiswa</title>

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
			<?php if (isset($_SESSION['is_login'])) : ?>
				<div class="col-md-12 mb-3">
					<h2 class="display-5">
						Halo <?php echo $_SESSION['nama']; ?>
					</h2>
				</div>
			<?php endif; ?>

			<?php if (isset($pesan_flash)) : ?>
				<div class="col-md-12">
					<div class="alert alert-info">
						<?php echo $pesan_flash; ?>
					</div>
				</div>
			<?php endif; ?>

			<div class="col-md-12">
				<div class="card shadow-lg">
					<div class="card-header">
						Data Mahasiswa

						<?php if (isset($_SESSION['is_login'])) : ?>
							<a href="create.php" class="btn btn-primary btn-sm float-end">Tambah Data</a>
						<?php endif; ?>
					</div>

					<?php if ($cek_apakah_ada_data_di_database) : //3. jika ada data, tampilkan ke tabel 
					?>
						<div class="table-responsive">
							<table class="table table-condensed table-hover table-bordered">
								<thead>
									<tr>
										<th scope="col">#</th>
										<th scope="col">Nama</th>
										<th scope="col">NPM</th>
										<th scope="col">Prodi / Fakultas</th>
										<th scope="col">Tindakan</th>
									</tr>
								</thead>
								<tbody>
									<?php while ($mahasiswa = $data_mahasiswa->fetch_object()) : ?>
										<tr>
											<td><?php echo $mahasiswa->id; ?></td>
											<td><?php echo $mahasiswa->nama; ?></td>
											<td><?php echo $mahasiswa->nim; ?></td>
											<td><?php echo $mahasiswa->prodi; ?> / <?php echo $mahasiswa->fakultas; ?></td>
											<td>
												<a href="show.php?id=<?php echo $mahasiswa->id; ?>" class="btn btn-sm btn-info text-white">Lihat</a>
												
												<?php if (isset($_SESSION['is_login'])) : ?>
													<a href="edit.php?id=<?php echo $mahasiswa->id; ?>" class="btn btn-sm btn-warning text-white">Edit</a>
													<a href="destroy.php?id=<?php echo $mahasiswa->id; ?>" class="btn btn-sm btn-danger text-white">Hapus</a>
												<?php endif; ?>
											</td>
										</tr>
									<?php endwhile; ?>
								</tbody>
							</table>
						</div>
					<?php else : //4. jika tidak ada data di tabel `mahasiswa` 
					?>
						<div class="card-body">
							<div class="alert alert-info">
								Tidak ada data untuk ditampilkan.
							</div>
						</div>
					<?php endif; ?>

				</div>
			</div>
		</div>
	</div>
</body>

</html>