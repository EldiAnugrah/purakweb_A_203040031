<?php

require 'functions.php';

//cek apakah tombol tambah telah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
    alert('data berhasil ditambahkan');
    document.location.href = '../index.php';
    </script>";
  } else {
    echo " data gagal ditambahkan";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<link rel="stylesheet" href="../style/styleB.css">

</head>

<body>
  <div class="container">
    <h3>Form Tambah Data</h3>
    <form action="" method="POST" enctype="multipart/form-data">
    <table class="striped">
    <tr>
      <th>Judul Buku </th>
      <th>Penulis Buku </th>
      <th>Jumlah Baca</th>
      <th>Rating Buku </th>
      <th>Genre</th>
      <th>Cover</th>
    </tr>

      <tr>
        <td>
        <label>
            <input type="text" name="judul_buku" id="judul_buku" required>
          </label>
        </td>

        <td>
        <label>
            <input type="text" name="pengarang_buku" id="pengarang_buku" required>
          </label>
        </td>

        <td>
        <label>
            <input type="text" name="jumlah_baca" id="jumlah_baca" required>
          </label>
        </td>

        <td>
        <label>
            <input type="text" name="rating_buku" id="rating_buku" required>
          </label>
        </td>
        <td>
        <label>
            <input type="text" name="genre" id="genre" required>
          </label>
        </td> 

        <td>
        <label>
            <input type="text" name="img" id="img" required>
          </label>
        </td>

      </tr>
  
  </table>
      <div class="button">
          <button class="waves-effect   green accent-4 btn" type="submit" name="tambah" onclick="return confirm ('apakah anda yakin akan menambah buku ?');"> Tambah data</button>
          <a href="admin.php" class="kembali waves-effect   blue accent-2 btn">kembali</a>
      </div>    
    </form>
    <script src="../js/script.js"></script>
</body>

</html>

