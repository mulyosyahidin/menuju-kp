<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Formulir Pendaftaran UKM XYZ Ft Unib</title>

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
          <h5 class="display-6 mb-5">Formulir Pendaftaran UKM XYZ Ft Unib</h5>
          <form action="proses-pendaftaran.php" method="post">
            <div class="mb-3">
              <label for="nama-lengkap" class="form-label">Nama Lengkap: <span class="required">*</span></label>
              <input type="text" name="nama" id="nama-lengkap" class="form-control" minlength="4" maxlength="255" required="required">
            </div>

            <div class="mb-3">
              <label for="npm-mahasiswa" class="form-label">NPM <span class="required">*</span></label>
              <input type="text" name="npm" id="npm-mahasiswa" class="form-control" minlength="9" maxlength="16" required="required">
            </div>

            <div class="mb-3">
              <strong>Jenis Kelamin:</strong>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis-kelamin-laki-laki" checked>
                <label class="form-check-label" for="jenis-kelamin-laki-laki">
                  Laki-laki
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis-kelamin-perempuan">
                <label class="form-check-label" for="jenis-kelamin-perempuan">
                  Perempuan
                </label>
              </div>
            </div>

            <div class="mb-3">
              <label for="prodi-mahasiswa" class="form-label">Program Studi:</label>
              <select name="prodi" class="form-select" id="prodi-mahasiswa">
                <option selected disabled>Pilih prodi...</option>
                <option value="A">Informatika</option>
                <option value="B">Teknik Elektro</option>
                <option value="C">Teknik Mesin</option>
                <option value="D">Teknik Sipil</option>
                <option value="E">Arsitektur</option>
                <option value="F">Sistem Informasi</option>
              </select>
            </div>

            <div class="mb-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="persetujuan" value="1" id="persetujuan" checked>
                <label class="form-check-label" for="persetujuan">
                  Saya setuju menjalankan kewajiban sebagai anggota UKM XYZ Ft Unib
                </label>
              </div>
            </div>

            <div>
              <strong>Akun UKM XYZ</strong>

              <div class="mb-3">
                <label for="email-user" class="form-label">Email: <span class="required">*</span></label>
                <input type="email" name="email" id="email-user" class="form-control" minlength="12" maxlength="255" required="required">
              </div>

              <div class="mb-3">
                <label for="password-user" class="form-label">Password: <span class="required">*</span></label>
                <input type="password" name="password" id="password-user" class="form-control" minlength="8" maxlength="255" required>
              </div>
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