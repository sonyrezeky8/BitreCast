<?php

require 'koneksi.php';

$nama = $_POST ["Nama"];

$query = "SELECT Nama FROM user";

if(mysqli_query($conn, $query)){
    echo 'muncul ini';
}else{
    echo "Gagal Mendaftar, silahkan periksa koneksi Anda". mysqli_error($conn);
}

?>

<!DOCTYPE html>
<html lang="en">
<html>

 <head>
 <title>BitreCast</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">

  .muncul{
    position: absolute;
    margin: 1px 0px 0px 20px;
    padding-top: 4px;
    width:12%;
  }
  </style>

<div class="muncul" >
  <p>Bitrecast menggunakan data</p>