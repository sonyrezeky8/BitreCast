<?php

session_start();
require 'koneksi.php';

$nama = $_POST ["Nama"];
$password = $_POST ["Password"];

$query = "SELECT * FROM user WHERE Nama = '$nama' AND Password = '$password'";

$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0){
    sleep(2);
    header("Location: home_special.php");
}else{
    sleep(2);
    header("Location: home.php");
}

?>
