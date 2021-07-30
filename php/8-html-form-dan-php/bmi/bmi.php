<?php

//ambil data formulir: jenis kelamin, tinggi dan berat
$jenis_kelamin = $_POST['jenis_kelamin']; //1 = laki-laki; 2 = perempuan
$tinggi = $_POST['tinggi'];
$berat = $_POST['berat'];

function hitung_bmi($tinggi, $berat)
{
    $tinggi_dalam_meter = $tinggi / 100; //ubah cm -> m
    $tinggi_kuadrat = pow($tinggi_dalam_meter, 2); // pow() adalah fungsi untuk menghitung pangkat

    $hasil_bmi = $berat / $tinggi_kuadrat;

    return number_format($hasil_bmi, 1);
}

function kategori_bmi($hasil_bmi, $jenis_kelamin)
{
    $kategori = null;

    //jika dia laki-laki
    if ($jenis_kelamin == 1) {
        if ($hasil_bmi < 18) {
            $kategori = 'Kurus';
        } else if ($hasil_bmi >= 18 && $hasil_bmi <= 25) {
            $kategori = 'Normal';
        } else if ($hasil_bmi > 25 && $hasil_bmi <= 27) {
            $kategori = 'Kegemukan';
        } else {
            //lebih dari 27
            $kategori = 'Obesitas';
        }
    } else {
        //jika dia perempuan

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

$hasil_bmi = hitung_bmi($tinggi, $berat);
$kategori = kategori_bmi($hasil_bmi, $jenis_kelamin);
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
                                <td><b><?php echo $tinggi; ?> cm</b></td>
                            </tr>
                            <tr>
                                <td>Berat Badan:</td>
                                <td><b><?php echo $berat; ?> kg</b></td>
                            </tr>
                            <tr>
                                <td>Indeks Masa Tubuh / BMI</td>
                                <td><b><?php echo $hasil_bmi; ?></td>
                            </tr>
                            <tr>
                                <td>Kategori</td>
                                <td><b><?php echo $kategori; ?></b></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>