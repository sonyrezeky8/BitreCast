<?php 
require 'koneksi.php';

$conn = mysqli_connect($host, $username, $password, $db_name);

if(isset($_POST['submit'])){
$query = "SELECT * FROM Nama where id_user = $_POST[id]";
$query2 = mysqli_query($conn, $query);
while($row = mysqli_fetch_assoc($query2)){
    echo $row['Nama'];
}
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
  <link rel="stylesheet" href="@sweetalert2/themes/dark/dark.css">
  <link rel="stylesheet" href="sweetalert2.min.css">
  <script src="sweetalert2.all.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.2.js" integrity="sha256-pkn2CUZmheSeyssYw3vMp1+xyub4m+e+QK4sQskvuo4=" crossorigin="anonymous"></script>
  <style type="text/css">

    </style>

<body>
<form class="modal-content" action="signup.php" method="POST">
    <div class="panel">
      <h3>Pendaftaran Akun</h3>
      <p>Silahkan masukkan data diri lengkap Anda disini !</p>
</br>
      <input type="text" placeholder="Masukkan Nama" name="Nama" required>
      <input type="password" placeholder="Masukkan Password" name="Password" required>
      <input type="text" placeholder="Masukkan Alamat" name="Alamat" required>
      <input type="text" placeholder="Masukkan Email" name="Email" required>
      <div class="clearfix">
        <button type="submit" class="signupbtn" name="signup">Sign Up </button>
    </div>
    </div>
    </div>
  </form>
</body>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  </script>
