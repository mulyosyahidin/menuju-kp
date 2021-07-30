<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Menyimpan Data di Session</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'PT Sans', sans-serif;
      padding: 50px 20px 0;
    }

    .required {
      color: red;
      font-weight: bold;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-8 mx-auto">
        <div class="card shadow-lg p-5">
          <h5 class="display-6 mb-3">Halo, selamat datang!</h5>

          <?php if ( isset($_SESSION['nama'])) : ?>
            Kamu sudah memasukan nama: <?php echo $_SESSION['nama']; ?>
          <?php endif; ?>

          <form action="proses.php" method="post">
            <div class="mb-3">
              <label for="nama-lengkap" class="form-label">Nama Lengkap: <span class="required">*</span></label>
              <input type="text" name="nama" id="nama-lengkap" class="form-control" minlength="4" maxlength="255" required="required">
            </div>

            <div class="text-end">
              <input type="submit" value="Daftar" class="btn btn-primary">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>