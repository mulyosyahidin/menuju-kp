<?php

/**
 * 1. Ambil data input formulir, yaitu jenis kelamin, tinggi dan berat badan
 */


/**
 * 2. Buat fungsi untuk menghitung bmi
 * 
 *    Fungsi ini menerima 2 argumen, yaitu `tinggi` dan `berat`
 *    dan mengembalikan (return) hasil perhitungan BMI (tipe data: float)
 */
function hitung_bmi($tinggi, $berat)
{
  $tinggi_meter = $tinggi / 100;
  $tinggi_kuadrat = pow($tinggi_meter, 2);

  $hasil_bmi = $berat / $tinggi_kuadrat;

  return number_format($hasil_bmi, 1);
}

/**
 * 3. Buat fungsi untuk menentukan kategori BMI
 * 
 *    Fungsi ini berguna untuk menentukan kategori BMI
 *    berdasarkan hasil perhitungan BMI.
 *    Fungsi ini menerima 2 argumen, yaitu `hasil bmi` dan `jenis kelamin`
 *    dan mengembalikan (return) kategori BMI (tipe data: string).
 * 
 *    Di dalam fungsi, buat percabangan berdasarkan `jenis kelamin`,
 *    kemudian tentukan kategori BMI masing-masing jenis kelamin berdasarkan `hasil bmi`
 */
function kategori_bmi($hasil_bmi, $jenis_kelamin)
{
  //if jenis_kelamin == 1, maka laki-laki,
  //else jenis kelamin == 2, maka perempuan

  if ($jenis_kelamin == 1) {
    //laki-laki
    if ($hasil_bmi < 18) {
      $kategori = 'Kurus';
    } else if ($hasil_bmi >= 18 && $hasil_bmi < 25) {
      $kategori = 'Normal';
    } else if ($hasil_bmi > 25 && $hasil_bmi < 27) {
      $kategori = 'Kegemukan';
    } else {
      $kategori = 'Obesitas';
    }
  } else if ($jenis_kelamin == 2) {
    if ($hasil_bmi < 17) {
      $kategori = 'Kurus';
    } else if ($hasil_bmi >= 17 && $hasil_bmi <= 23) {
      $kategori = 'Normal';
    } else if ($hasil_bmi > 23 && $hasil_bmi <= 27) {
      $kategori = 'Kegemukan';
    } else {
      //lebih dari 27
      $kategori = 'Obesitas';
    }
  }

  return $kategori;
}

/**
 * 4. Panggil fungsi penghitung bmi dengan memberikan argumen yang diperlukan
 * 5. Panggil fungsi kategori bmi dengan memberikan argumen yang diperlukan
 * 6. Tampilkan data ke HTML
 */

$jenis_kelamin = $_POST['jenis_kelamin'];
$tinggi_badan = $_POST['tinggi'];
$berat_badan = $_POST['berat'];

$hasil_hitung_bmi = hitung_bmi($tinggi_badan, $berat_badan);
$kategori_hasil_bmi = kategori_bmi($hasil_hitung_bmi, $jenis_kelamin);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kalkulator BMI</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            padding-top: 25px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card shadow">
                    <div class="card-body">
                        <h3 class="display-4 mb-3">Kalkulator BMI</h3>
                        <table class="table table-condensed table-hover">
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>
                                    <b>
                                        <?php if ($jenis_kelamin == 1) : ?>
                                            Laki-laki
                                        <?php else : ?>
                                            Perempuan
                                        <?php endif; ?>
                                    </b>
                                </td>
                            </tr>
                            <tr>
                                <td>Tinggi badan</td>
                                <td><b><?php echo $tinggi_badan; ?> cm</b></td>
                            </tr>
                            <tr>
                                <td>Berat Badan:</td>
                                <td><b><?php echo $berat_badan; ?> kg</b></td>
                            </tr>
                            <tr>
                                <td>Indeks Masa Tubuh / BMI</td>
                                <td><b><?php echo $hasil_hitung_bmi; ?></td>
                            </tr>
                            <tr>
                                <td>Kategori</td>
                                <td><b><?php echo $kategori_hasil_bmi; ?></b></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
