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
            <div class="col-md-6 mx-auto">
                <div class="card shadow">
                    <div class="card-body">
                        <h3 class="display-4">Kalkulator BMI</h3>

                        <form action="hitung.php" method="post">
                            <div class="mb-3">
                                <label class="form-label">Jenis kelamin:</label>
                                <div>
                                    <label class="form-label" for="laki-laki">
                                        <input type="radio" name="jenis_kelamin" id="laki-laki" value="1"> Laki-laki
                                    </label>
                                </div>
                                <div>
                                    <label class="form-label" for="perempuan">
                                        <input type="radio" name="jenis_kelamin" id="perempuan" value="2"> Perempuan
                                    </label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="tinggi">Tinggi badan (cm):</label>
                                <input type="number" name="tinggi" id="tinggi" class="form-control" required="required">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="berat">Berat badan (kg):</label>
                                <input type="number" name="berat" id="berat" class="form-control" required="required">
                            </div>

                            <div class="mb-3 text-right">
                                <input type="submit" value="Hitung" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>