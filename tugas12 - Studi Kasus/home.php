<!--
Nama    : Kefilino Khalifa F
NPM     : 140810180028
Kelas   : B
-->

<?php
include_once("connection.php");
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
} else if (isset($_POST['logout'])) {
    session_unset();
    header("Location: index.php");
    exit();
}

$query = "SELECT biodata.*, users.email FROM biodata LEFT JOIN users ON biodata.username = users.username";
$query .= ($_SESSION['level'] != 0) ? " WHERE users.username='" . $_SESSION['username'] . "'" : "";
$result = $conn->query($query);
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
    <title>Tugas 12 Studi Kasus</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cyborg/bootstrap.min.css">
    <link rel="stylesheet" href="https://bootswatch.com/4/cyborg/bootstrap.css">
    <style>
        th {
            width: 30%;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="jumbotron text-center">
            <h3><?php echo ($_SESSION['level'] == 0) ? "Biodata Users" : "Biodata User"; ?></h3>
        </div>
        <div class="table-responsive">
            <?php foreach ($data as $row) {
                echo '<table class="table"><tbody>';
                echo ($_SESSION['level'] == 0) ? "username: " . $row['username'] : "";
                echo "<tr><th>Nama</th>";
                echo "<td>" . $row['nama'] . "</td></tr>";
                echo "<tr><th>NPM</th>";
                echo "<td>" . $row['npm'] . "</td></tr>";
                echo "<tr><th>Email</th>";
                echo "<td>" . $row['email'] . "</td></tr>";
                echo "<tr><th>Jenis Kelamin</th>";
                echo "<td>" . (($row['jk'] == "L") ? "Laki-Laki" : "Perempuan") . "</td></tr>";
                echo "<tr><th>Tanggal Lahir</th>";
                echo "<td>" . $row['tgl_lahir'] . "</td></tr>";
                echo "<tr><th>Alamat</th>";
                echo "<td>" . $row['alamat'] . "</td></tr>";
                echo "</tbody></table>";
            }
            ?>
        </div>
        <form method="POST" action="home.php">
            <input type="submit" class="btn btn-danger" name="logout" value="Logout">
        </form>
    </div>
</body>

</html>