<!--
Nama    : Kefilino Khalifa F
NPM     : 140810180028
Kelas   : B
-->

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tugas 12 Login CodeIgniter</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cyborg/bootstrap.min.css">
    <link rel="stylesheet" href="https://bootswatch.com/4/cyborg/bootstrap.css">
</head>

<body>
    <div class="container">
        <div class="jumbotron text-center">
            <h1>Silahkan Login</h1>
        </div>
        <form method="POST" action="<?php echo base_url('index.php') ?>/Welcome/login">
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