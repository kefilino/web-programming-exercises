<!--
Nama    : Kefilino Khalifa F
NPM     : 140810180028
Kelas   : B
-->

<?php
include_once("connection.php");
$result = $conn->query("SELECT * FROM identitas");
$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tugas 10 PHP MySQL</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cyborg/bootstrap.min.css">
    <link rel="stylesheet" href="https://bootswatch.com/4/cyborg/bootstrap.css">
</head>

<body>
    <div class="jumbotron text-center">
        <h1>Identitas Mahasiswa</h1>
    </div>
    <div class="container">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>NPM</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Email</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($data as $user) {
                        echo "<tr>";
                        echo "<td>" . $no . "</td>";
                        echo "<td>" . $user['npm'] . "</td>";
                        echo "<td>" . $user['nama'] . "</td>";
                        echo "<td>" . $user['alamat'] . "</td>";
                        echo "<td>" . $user['tgl_lhr'] . "</td>";
                        echo "<td>" . ($user['jk'] == "L" ? "Laki-Laki" : "Perempuan") . "</td>";
                        echo "<td>" . $user['email'] . "</td>";
                        echo "<td><a href='edit.php?npm=" . $user['npm'] . "'>Edit</a></td>";
                        echo "<td><a href='delete.php?npm=" . $user['npm'] . "'>Delete</a></td></tr>";
                        $no++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <a href="add.php" class="btn btn-info">Tambah User</a>
    </div>
</body>

</html>