<!--
Nama    : Kefilino Khalifa F
NPM     : 140810180028
Kelas   : B
-->

<?php
if (!empty($_POST)) {
    $npm = $_POST['NPM'];
    $nama = $_POST['Nama'];
    $alamat = $_POST['Alamat'];
    $tempat = $_POST['TempatLahir'];
    $tanggal = $_POST['TanggalLahir'];
    $jk = $_POST['JenisKelamin'];
    $hobi = $_POST['Hobi'];
}
?>

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
        <h1>Hasil Form Pendaftaran</h1>
        <div class="form-group" style="font-size: 24px;">
            NPM: <?php echo $npm; ?><br>
            Nama: <?php echo $nama; ?><br>
            Alamat: <?php echo $alamat; ?><br>
            Tempat Lahir: <?php echo $tempat; ?><br>
            Tanggal Lahir: <?php echo $tanggal; ?><br>
            Jenis Kelamin: <?php echo $jk; ?><br>
            Hobi:<br>
            <?php foreach ($hobi as $hobby) {
                echo "- " . $hobby . "<br>";
            }
            ?>
        </div>
    </div>
</body>

</html>