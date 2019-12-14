<!--
Nama    : Kefilino Khalifa F
NPM     : 140810180028
Kelas   : B
-->

<?php
include_once("connection.php");
$npm = isset($_GET['npm']) ? $_GET['npm'] : "";
$data = $conn->query("SELECT * FROM identitas WHERE npm='$npm'")->fetch_assoc();
if (!isset($data)) header("Location: index.php");

if (isset($_POST['submit'])) {
    $query = "UPDATE identitas SET npm='" . $_POST['npm'] . "', nama='"
        . $_POST['nama'] . "', alamat='" . $_POST['alamat'] . "', tgl_lhr='" . $_POST['tanggal_lahir'] . "', jk='"
        . $_POST['jenis_kelamin'] . "', email='" . $_POST['email'] . "' WHERE npm='" . $_GET['npm'] . "';";
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
        <h1>Edit Data User</h1>
    </div>
    <div class="container">
        <form action="edit.php?npm=<?php echo $data['npm']?>" method="post">
            <div class="form-group">
                <label class="text">NPM:</label>
                <input class="form-control" type="text" name="npm" value="<?php echo $data['npm']?>">
            </div>
            <div class="form-group">
                <label class="text">Nama:</label>
                <input class="form-control" type="text" name="nama" value="<?php echo $data['nama']?>">
            </div>
            <div class="form-group">
                <label class="text">Alamat:</label>
                <input class="form-control" type="text" name="alamat" value="<?php echo $data['alamat']?>">
            </div>
            <div class="form-group">
                <label class="text">Tanggal Lahir:</label>
                <input class="form-control" type="date" name="tanggal_lahir" value="<?php echo $data['tgl_lhr']?>">
            </div>
            <div class="form-group">
                <label class="text">Jenis Kelamin:</label>
                <div class="radio">
                    <label><input type="radio" name="jenis_kelamin" value="L"
                    <?php echo ($data['jk'] == "L") ? "checked" : ""; ?>> Laki-Laki</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="jenis_kelamin" value="P"
                    <?php echo ($data['jk'] == "P") ? "checked" : ""; ?>> Perempuan</label>
                </div>
            </div>
            <div class="form-group">
                <label class="text">Email:</label>
                <input class="form-control" type="text" name="email" value="<?php echo $data['email']?>">
            </div>
            <input type="submit" class="btn btn-warning" name="submit" value="Edit User">
        </form>
    </div>
</body>

</html>