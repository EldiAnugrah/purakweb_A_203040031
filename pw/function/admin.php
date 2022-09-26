<?php

require 'functions.php';

$buku = query("SELECT * FROM buku");

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

  <link rel="stylesheet" href="../style/styleA.css">

<title>Buku Jaya Abadi Selamanya</title>

</head>
<body>
  <h1>Daftar Buku</h1>
  <div class="div">
  <a href="tambah.php" class="waves-effect   green accent-4 btn">Tambah</a>
  <a href="../index.php" class="kembali waves-effect   blue accent-2 btn">kembali</a>
  </div>
  <br>
  <table class="striped">
    <tr>
      <th>no</th>
      <th>Cover</th>
      <th>Judul Buku </th>
      <th>Penulis Buku </th>
      <th>Jumlah Baca</th>
      <th>Rating Buku </th>
      <th>Genre</th>
      <th>action</th>
    </tr>
    <?php $i = 1;
    foreach ($buku as $bk) : ?>
      <tr>
        <td><?= $i++ ?></td>
        <td><img width="130px"; src="../img/<?= $bk['img']; ?>"></td>
        <td><?= $bk['judul_buku']; ?></td>
        <td><?= $bk['pengarang_buku']; ?></td>
        <td><?= $bk['jumlah_baca']; ?></td>
        <td><?= $bk['rating_buku']; ?></td>
        <td><?= $bk['genre']; ?></td> 

        <div class="container">
        <td>
          <a href="hapus.php?id=<?= $bk['id']; ?>" onclick="return confirm ('apakah anda yakin akan menghapus buku ?');" class="waves-effect  red accent-4 btn">Hapus</a>
          <br>
          <a href="ubah.php?id=<?= $bk['id']; ?>" class="waves-effect orange darken-2 btn">Update</a>
         </td>
        </div>
      </tr>
    <?php endforeach; ?>
  </table>
</body>
</html>
