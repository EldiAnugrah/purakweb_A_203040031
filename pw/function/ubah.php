<?php

require 'functions.php';

$id = $_GET['id'];

$buku = query("SELECT * FROM buku");

$bk = query("select * from buku where id = $id");
//cek apakah tombol tambah telah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
    alert('data berhasil diubah');
    document.location.href = '../index.php';
    </script>";
  } else {
    echo " data gagal diubah";
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
    <h3>Form ubah Data</h3>
    <form action="" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?= $bk['id']; ?>">
      <ul>
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
            <input type="text" name="judul_buku" id="judul_buku" required value="<?= $bk['judul_buku'];?>"> 
          </label>
        </td>

        <td>
          <label>
            <input type="text" name="pengarang_buku" id="pengarang_buku" required value="<?= $bk['pengarang_buku'];?>">   
          </label>
        </td>

        <td>
          <label>
            <input type="text" name="jumlah_baca" id="jumlah_baca" required value="<?= $bk['jumlah_baca'];?>"> 
          </label>
        </td>
         
        <td>
          <label>
            <input type="text" name="rating_buku" id="rating_buku" required value="<?= $bk['rating_buku'];?>"> 
          </label>
        </td> 
        <td>
          <label>
            <input type="text" name="genre" id="genre" required value="<?= $bk['genre'];?>"> 
          </label>
        </td> 

        <td>
          <label>
            <input type="text" name="img" id="img" required value="<?= $bk['img'];?>"> 
          </label>
        </td>

      </tr>
  
  </table>
      <div class="button">
       <button class="waves-effect  orange darken-2 btn" type="submit" name="ubah" onclick="return confirm ('apakah anda yakin akan mengubah buku ?');"> ubah data</button>
       <a href="admin.php" class="kembali waves-effect   blue accent-2 btn">kembali</a>
       </div>
      </ul>

    </form>
    <script src="../js/script.js"></script>

    
</body>

</html>

