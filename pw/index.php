<?php 
  //panggil php 
  require 'function/functions.php';
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
<link rel="stylesheet" href="style/style.css">

  <title>Buku Jaya Abadi Selamanya Fix no debat</title>
</head>

<nav>
  <div class="container">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
      </ul>
    </div>
    </div>
  </nav>

  <h1 style="text-align:center ;">Buku Jaya Abadi Selamanya Fix no debat !!!!</h1>
<body>
  <div class="kontener">
      <div class="section">
        <div class="row">
        <?php foreach ($buku as $bk) : ?>
            <a href="function/admin.php?= $bk['id_buku']; ?>">
              <div class="col l3">
                <div class="card">
                  <div class="card-image">
                  <img height="430"; src="img/<?= $bk['img']; ?>">
                  </div>
                  <div class="card-content">
                    <p style="color: black;"> <span style="font-weight: bold;"> <?= $bk["judul_buku"]; ?> </span> </p>
                    <p style="color: #26a69a;"> <span style="font-weight: bold; font-color: blue;"> <?= $bk["pengarang_buku"]; ?></p> </span> 
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
            </a>
        </div>
      </div>
    </div>
</body>
</html>
