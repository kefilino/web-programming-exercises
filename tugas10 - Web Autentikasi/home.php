<!--
Nama    : Kefilino Khalifa F
NPM     : 140810180028
Kelas   : B
-->

<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
} else if (isset($_POST['logout'])) {
    session_unset();
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tugas 10 Web Autentikasi</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cyborg/bootstrap.min.css">
    <link rel="stylesheet" href="https://bootswatch.com/4/cyborg/bootstrap.css">
</head>

<body>
    <div class="container">
        <h1>Web Autentikasi - Success Page</h1>
        <form method="POST" action="home.php">
            <div class="jumbotron text-center">
                <h3>Anda telah berhasil login!</h3>
            </div>
            <input type="submit" class="btn btn-danger" name="logout" value="Logout">
        </form>
    </div>
</body>

</html>