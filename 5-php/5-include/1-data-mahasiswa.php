<?php
  require 'data.php'; //ini sebagai statement
  require 'fungsi.php'; //ini sebagai fungsi
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Data Mahasiswa Pendaftar</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

  <style>
    body {
      padding-top: 50px;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-10 mx-auto">
        <h3 class="display-4">Data Mahasiswa</h3>

        <p>Pendaftaran UKM XYZ</p>
        <p>Syarat diterima: <code>semester >= 4</code></p>

        <table class="table table-striped">
          <thead class="thead-dark">
            <th scope="col">ID</th>
            <th scope="col">Nama</th>
            <th scope="col">Semester</th>
            <th scope="col">No. HP</th>
            <th scope="col">Email</th>
            <th scope="col">Prodi</th>
            <th scope="col">Diterima</th>
          </thead>
          <tbody>
            <?php foreach ($students as $student) : ?>
              <tr>
                <td><?php echo $student['id']; ?></td>
                <td><?php echo $student['nama']; ?></td>
                <td><?php echo $student['semester']; ?></td>
                <td><?php echo $student['hp']; ?></td>
                <td><?php echo $student['email']; ?></td>
                <td><?php echo $student['prodi']['nama']; ?></td>
                <td>
                  <?php echo apakah_diterima($student['semester']); ?>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>

</html>