<!--
Nama    : Kefilino Khalifa F
NPM     : 140810180028
Kelas   : B
-->

<?php
session_start();
if (isset($_POST['username']) && isset($_POST['password'])) {
    if (isset($_SESSION['password'])) {
        if ($_SESSION['password'] == $_POST['passconf']) {
            $_SESSION['password'] == $_POST['password'];
            $success = "Data telah berhasil diubah!<br>";
        } else {
            $error = "Password tidak sama dengan password sebelumnya!<br>";
        }
    } else {
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = ($_POST['password']);
    }
}
if (isset($_POST['reset'])) {
    session_unset();
    unset($error);
    unset($success);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tugas 8 Session</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cyborg/bootstrap.min.css">
    <link rel="stylesheet" href="https://bootswatch.com/4/cyborg/bootstrap.css">
</head>

<body>
    <div class="container">
        <h1>Session - Data Pengguna</h1>
        <form method="POST" action="index.php">
            <div class="form-group">
            <?php
                if (isset($_SESSION['password']))
                    echo '<label class="text">Username Baru:</label>';
                else echo '<label class="text">Username:</label>';
                ?>
                <input class="form-control" type="text" name="username"
                value="<?php echo (isset($_SESSION['username']) ? $_SESSION['username'] : ""); ?>">
            </div>
            <div class="form-group">
                <?php
                if (isset($_SESSION['password']))
                    echo '<label class="text">Password Baru:</label>';
                else echo '<label class="text">Password:</label>';
                ?>
                <input class="form-control" type="password" name="password">
            </div>
            <div class="form-group">
                <?php if (isset($_SESSION['password'])) {
                    echo '<label class="text">Konfirmasi Password Sebelumnya:</label>';
                    echo '<input class="form-control" type="password" name="passconf">';
                }
                ?>
            </div>
            <button class="btn btn-info">Submit</button>
            <input type="submit" class="btn btn-danger" name="reset" value="Reset">
        </form>
        <div class="form-group">
            <?php
            echo (isset($error)) ? $error : "" ;
            echo (isset($success)) ? $success : "" ;
            if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
                echo "Username : " . $_SESSION['username'] . "<br>";
                echo "Password : " . $_SESSION['password'] . "<br>";
            }
            ?>
        </div>
    </div>
</body>

</html>