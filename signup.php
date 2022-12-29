<?php

require 'koneksi.php';

$nama = $_POST ["Nama"];
$password = $_POST ["Password"];
$alamat = $_POST ["Alamat"];
$email = $_POST ["Email"];

$query = "INSERT INTO user (Nama, Password, Alamat, Email)
                VALUES ('$nama', '$password', '$alamat', '$email')";

if(mysqli_query($conn, $query)){
    header("Location: home.php");
}else{
    echo "Gagal Mendaftar, silahkan periksa koneksi Anda". mysqli_error($conn);
}

?>
