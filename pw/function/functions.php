<?php 
function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'prakweb_a_203040031_pw');
}

function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);


  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}


function tambah($data)
{
  $conn = koneksi();

  $judul_buku = htmlspecialchars($data['judul_buku']);
  $pengarang_buku = htmlspecialchars($data['pengarang_buku']);
  $jumlah_baca = htmlspecialchars($data['jumlah_baca']);
  $rating_buku = htmlspecialchars($data['rating_buku']);
  $img = htmlspecialchars($data['img']);
  $genre = htmlspecialchars($data['genre']);

  
  $query = "INSERT INTO buku 
            VALUES ('', '$judul_buku', '$pengarang_buku', '$jumlah_baca', '$rating_buku', '$img', '$genre')";

  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();

  mysqli_query($conn, "DELETE FROM buku WHERE id=$id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();

  $id = $data['id'];
  $judul_buku = htmlspecialchars($data['judul_buku']);
  $pengarang_buku = htmlspecialchars($data['pengarang_buku']);
  $jumlah_baca = htmlspecialchars($data['jumlah_baca']);
  $rating_buku = htmlspecialchars($data['rating_buku']);
  $img = htmlspecialchars($data['img']);
  $genre = htmlspecialchars($data['genre']);

  
  $query = "UPDATE buku 
            SET
            judul_buku = '$judul_buku',
            pengarang_buku = '$pengarang_buku',
            jumlah_baca = '$jumlah_baca',
            rating_buku = '$rating_buku',
            img = '$img',
            genre = '$genre'
            where 
            id = $id";
  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
