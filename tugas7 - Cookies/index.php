<!--
Nama    : Kefilino Khalifa F
NPM     : 140810180028
Kelas   : B
-->

<?php
if (isset($_POST['warna'])) {
    setcookie("warna", $_POST['warna'], time() + (86400));
    header("Refresh:0");
}
if (isset($_POST['reset'])) {
    setcookie("warna", "", time() - 3600);
    header("Refresh:0");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tugas 7 Cookies</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cyborg/bootstrap.min.css">
    <link rel="stylesheet" href="https://bootswatch.com/4/cyborg/bootstrap.css">
    <style>
        body {
            <?php
            if (isset($_COOKIE['warna'])) {
                echo "background-color: " . $_COOKIE['warna'] . ";";
            }
            ?>
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Cookies - Warna Page</h1>
        <form method="POST" action="index.php">
            <div class="form-group">
                <label for="warna">Pilih Warna : </label><br>
                <div style="color: black; background-color: yellow;">
                    <label><input type="radio" name="warna" value="yellow"> Kuning</label>
                </div>
                <div style="color: black; background-color: blue;">
                    <label><input type="radio" name="warna" value="blue"> Biru</label>
                </div>
                <div style="color: black; background-color: red;">
                    <label><input type="radio" name="warna" value="red"> Merah</label>
                </div>
            </div>
            <button class="btn btn-primary">Ubah</button>
            <input type="submit" class="btn btn-danger" name="reset" value="Reset">
        </form>
    </div>
</body>

</html>