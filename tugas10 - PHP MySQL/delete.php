<!--
Nama    : Kefilino Khalifa F
NPM     : 140810180028
Kelas   : B
-->

<?php
include_once("connection.php");
$npm = $_GET['npm'];
$conn->query("DELETE FROM identitas WHERE npm='$npm'");
header("Location: index.php");