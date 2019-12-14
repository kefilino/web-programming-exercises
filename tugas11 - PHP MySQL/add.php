<!--
Nama    : Kefilino Khalifa F
NPM     : 140810180028
Kelas   : B
-->

<?php
include_once("connection.php");
if (isset($_POST['submit'])) {
    $_POST['jenis_kelamin'] = isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : "L";
    $query = "INSERT INTO identitas VALUES ('" . $_POST['npm'] . "','"
        . $_POST['nama'] . "','" . $_POST['alamat'] . "','" . $_POST['tanggal_lahir'] . "','"
        . $_POST['jenis_kelamin'] . "','" . $_POST['email'] . "');";
    if ($conn->query($query)) header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tugas 11 PHP MySQL</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cyborg/bootstrap.min.css">
    <link rel="stylesheet" href="https://bootswatch.com/4/cyborg/bootstrap.css">
</head>

<body>
    
    <div class="jumbotron text-center">
        <h1>Tambah User Baru</h1>
    </div>
    <div class="container">
        <form action="add.php" method="post">
            <div class="form-group">
                <label class="text">NPM:</label>
                <input class="form-control" type="text" name="npm">
            </div>
            <div class="form-group">
                <label class="text">Nama:</label>
                <input class="form-control" type="text" name="nama">
            </div>
            <div class="form-group">
                <label class="text">Alamat:</label>
                <input class="form-control" type="text" name="alamat">
            </div>
            <div class="form-group">
                <label class="text">Tanggal Lahir:</label>
                <input class="form-control" type="date" name="tanggal_lahir">
            </div>
            <div class="form-group">
                <label class="text">Jenis Kelamin:</label>
                <div class="radio">
                    <label><input type="radio" name="jenis_kelamin" value="L"> Laki-Laki</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="jenis_kelamin" value="P"> Perempuan</label>
                </div>
            </div>
            <div class="form-group">
                <label class="text">Email:</label>
                <input class="form-control" type="text" name="email">
            </div>
            <input type="submit" class="btn btn-success" name="submit" value="Tambah User">
        </form>
    </div>
</body>

</html>