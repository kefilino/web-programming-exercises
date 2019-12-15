<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tugas 13 Login CodeIgniter</title>
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
            <h3><?php echo (sizeof($users) > 1) ? "Biodata Users" : "Biodata User"; ?></h3>
        </div>
        <div class="table-responsive">
            <?php foreach ($users as $user) {
                echo '<table class="table"><tbody>';
                echo (sizeof($users) > 1) ? "username: " . $user->username : "";
                echo "<tr><th>Nama</th>";
                echo "<td>" . $user->nama . "</td></tr>";
                echo "<tr><th>NPM</th>";
                echo "<td>" . $user->npm . "</td></tr>";
                echo "<tr><th>Email</th>";
                echo "<td>" . $user->email . "</td></tr>";
                echo "<tr><th>Jenis Kelamin</th>";
                echo "<td>" . (($user->jk == "L") ? "Laki-Laki" : "Perempuan") . "</td></tr>";
                echo "<tr><th>Tanggal Lahir</th>";
                echo "<td>" . $user->tgl_lahir . "</td></tr>";
                echo "<tr><th>Alamat</th>";
                echo "<td>" . $user->alamat . "</td></tr>";
                echo "</tbody></table>";
            }
            ?>
        </div>
        <form method="POST" action="<?php echo base_url('index.php') ?>/Home/logout">
            <button class="btn btn-danger">Logout</button>
        </form>
    </div>
</body>

</html>