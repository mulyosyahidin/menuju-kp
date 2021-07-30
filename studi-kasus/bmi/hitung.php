<?php
function hitungBMI($tinggi, $berat)
{
    //Rumus menghitung indeks masa tubuh (BMI)
    //=> Berat / (tinggi kuadrat)

    $hitungTinggi = pow($tinggi / 100, 2); // pow() adalah fungsi untuk menghitung kuadrat
    $bmi = $berat / $hitungTinggi;

    return number_format($bmi, 1);
}

function kategoriBMI($hasilBMI, $jenis_kelamin)
{
    $kategoriBMI = ['Kurus', 'Ideal', 'Kegemukan', 'Obesitas'];
    $kategori = null;

    //jika dia laki-laki
    if ($jenis_kelamin == 1) {
        if ($hasilBMI <= 18) {
            $kategori = $kategoriBMI[0];
        } else if ($hasilBMI > 18 && $hasilBMI <= 25) {
            $kategori = $hasilBMI[1];
        } else if ($hasilBMI > 25 && $hasilBMI <= 27) {
            $kategori = $kategoriBMI[2];
        } else {
            //lebih dari 27
            $kategori = $kategoriBMI[3];
        }
    } else {
        //jika dia perempuan

        if ($hasilBMI <= 17) {
            $kategori = $kategoriBMI[0];
        } else if ($hasilBMI > 17 && $hasilBMI <= 23) {
            $kategori = $hasilBMI[1];
        } else if ($hasilBMI > 23 && $hasilBMI <= 27) {
            $kategori = $kategoriBMI[2];
        } else {
            //lebih dari 27
            $kategori = $kategoriBMI[3];
        }
    }

    return $kategori;
}

$jenis_kelamin = $_POST['jenis_kelamin'];
$usia = $_POST['usia'];
$tinggi = $_POST['tinggi'];
$berat = $_POST['berat'];

$hasilBMI = hitungBMI($tinggi, $berat);

//setelah didapatkan perhitungan hasil BMInya,
//selanjutnya cari kategori BMI tersebut
$kategori = kategoriBMI($hasilBMI, $jenis_kelamin);

/**
 * Perhitungan dikutip dari situs
 * https://www.gooddoctor.co.id/hidup-sehat/nutrisi/cara-menghitung-bmi/
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kalkulator BMI</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">

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
                        <h3 class="display-4">Kalkulator BMI</h3>
                        <table class="table table-striped table-condensed">
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
                                <td>Usia</td>
                                <td><b><?php echo $usia; ?> tahun</b></td>
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
                                <td><b><?php echo $hasilBMI; ?></td>
                            </tr>
                            <tr>
                                <td>Kategori</td>
                                <td><b><?php echo $kategori; ?></b></td>
                            </tr>
                        </table>

                        <div class="text-center">
                            <img src="bmi.png" alt="Rumus BMI" style="border: 1px solid #333" class="img-fluid">
                        </div>

                        <p class="mt-2">Referensi:
                            <a href="https://www.gooddoctor.co.id/hidup-sehat/nutrisi/cara-menghitung-bmi/" target="_blank">https://www.gooddoctor.co.id/hidup-sehat/nutrisi/cara-menghitung-bmi/</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>