<!--
Nama    : Kefilino Khalifa F
NPM     : 140810180028
Kelas   : B
-->

<?php
include_once("connection.php");
session_start();
if (isset($_SESSION['username'])) {
    header("Location: home.php");
    exit();
} else if (!empty($_POST['username']) && !empty($_POST['password'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $result = $conn->query("SELECT * FROM users WHERE username='$username' AND password='$password'");
    if (!mysqli_num_rows($result))
        $error = '<div class="alert alert-danger">Username atau Password salah!</div>';
    else {
        $data = $result->fetch_assoc();
        $_SESSION['username'] = $data['username'];
        $_SESSION['password'] = $data['password'];
        $_SESSION['level'] = $data['level'];
        header("Location: home.php");
        exit();
    }
} else if (!empty($_POST)){
    $error = '<div class="alert alert-danger">Username dan Password tidak boleh kosong!</div>';
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
</head>

<body>
    <div class="container">
        <div class="jumbotron text-center">
            <h1>Silahkan Login</h1>
        </div>
        <form method="POST" action="index.php">
            <div class="form-group">
                <label class="text">Username:</label>    
                <input class="form-control" type="text" name="username">
            </div>
            <div class="form-group">
                <label class="text">Password:</label>
                <input class="form-control" type="password" name="password">
            </div>
            <button class="btn btn-info">Login</button>
        </form>
        <?php echo (isset($error)) ? $error : "" ;?>
    </div>
</body>

</html>