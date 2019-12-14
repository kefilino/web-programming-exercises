<!--
Nama    : Kefilino Khalifa F
NPM     : 140810180028
Kelas   : B
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tugas 7 Web Form</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cyborg/bootstrap.min.css">
    <link rel="stylesheet" href="https://bootswatch.com/4/cyborg/bootstrap.css">
</head>

<body>
    <div class="container">
        <h1>Form Pendaftaran</h1>
        <form method="POST" action="process.php">
            <div class="form-group">
                <label class="text">NPM:</label>
                <input class="form-control" type="text" name="NPM">
            </div>
            <div class="form-group">
                <label class="text">Nama:</label>
                <input class="form-control" type="text" name="Nama">
            </div>
            <div class="form-group">
                <label class="text">Alamat:</label>
                <input class="form-control" type="text" name="Alamat">
            </div>
            <div class="form-group">
                <label class="text">Tempat Lahir:</label>
                <input class="form-control" type="text" name="TempatLahir">
            </div>
            <div class="form-group">
                <label class="text">Tanggal Lahir:</label>
                <input class="form-control" type="date" name="TanggalLahir">
            </div>
            <div class="form-group">
                <label class="text">Jenis Kelamin:</label>
                <div class="radio">
                    <label><input type="radio" name="JenisKelamin" value="Laki-Laki"> Laki-Laki</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="JenisKelamin" value="Perempuan"> Perempuan</label>
                </div>
            </div>
            <div class="form-group">
                <label class="text">Hobi:</label>
                <div class="checkbox">
                    <label><input class="radio" type="checkbox" name="Hobi[]" value="Olahraga"> Olahraga</label>
                    <label><input class="radio" type="checkbox" name="Hobi[]" value="Musik"> Musik</label>
                    <label><input class="radio" type="checkbox" name="Hobi[]" value="Melukis"> Melukis</label>
                    <label><input class="radio" type="checkbox" name="Hobi[]" value="Fotografi"> Fotografi</label>
                </div>
            </div>
            <input type="submit" class="btn btn-info" value="Submit">
        </form>
    </div>
</body>

</html>