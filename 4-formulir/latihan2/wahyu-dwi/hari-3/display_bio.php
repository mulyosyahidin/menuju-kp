<?php
    if (isset($_POST['inputBiodata'])){
        $namaPanjang = $_POST['firstName']." ".$_POST['lastName'];
        $email = $_POST['email'];
        $subjek = ucfirst($_POST['selectSubject']);
        $pesan = $_POST['pesanku'];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head></head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <main class="container col-6">
        <section class="form-input form-control my-5">
            <div class="title text-center m-4">
                <h2>Data Anggota Bulu Burung</h2>
            </div>
            <div>
                <form class="p-3" action='display_bio.php' method='post' name='inputBiodata'>
                    <div class="mb-3">
                        <label for="firstName lastName" class="form-label">Full Name</label>
                        <input class="form-control" type="text" value="<?php echo $namaPanjang; ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input class="form-control" type="text" value="<?php echo $email; ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="selectSubject" class="form-label">Subject</label>
                        <select class="form-select" id="selectSubject" name="selectSubject" disabled>
                            <option value="<?php echo $subjek; ?>" selected><?php echo $subjek; ?></option>
                        </select>
                    </div>         
                    <div class="mb-3"></div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Your Message</span></label>
                        <textarea class="form-control" style="height: 100px" disabled><?php echo $pesan; ?></textarea>
                    </div>
                  </form>
            </div>
        </section>
    </main>
    
</body>
</html>

