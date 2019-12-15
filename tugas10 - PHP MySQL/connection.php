<!--
Nama    : Kefilino Khalifa F
NPM     : 140810180028
Kelas   : B
-->

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mhs";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi server error : " . $conn->connect_error);
}
