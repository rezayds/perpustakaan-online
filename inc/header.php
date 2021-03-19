<?php
session_start();
require 'inc/koneksi.php';
$quekat = mysqli_query($mysqli, 'SELECT*FROM kategori');

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PerpusOnline | Baca Buku Disini!</title>
        <link rel="stylesheet" href="css/materialize.css" media="all" title="no title" charset="utf-8">
    </head>
    <body>

    <?php
    if (isset($_SESSION['user']) != "") {
        $q = mysqli_query($mysqli, 'SELECT*FROM user WHERE id='.$_SESSION['user']);
        $t = mysqli_fetch_array($q);
        ?>
        <ul id="kategori" class="dropdown-content">
        <?php
          while ($kat = mysqli_fetch_array($quekat)) {
            echo "<li><a href='kategori.php?kategori_nama=".$kat['kategori_nama']."'>".$kat['kategori_nama']."</a></li>";
          }
        ?>
        </ul>
        <div class="navbar-fixed" style="margin-bottom:20px">
            <nav>
                <div class="nav-wrapper container">
                    <a href="index.php" class="brand-logo">PerpusOnline</a>
                    <ul class="right hide-on-med-and-down">
                        <li><a class="dropdown-button" href="#!" data-activates="kategori">Kategori</a></li>
                        <li>
                            <a href="inc/logout.php?logout" class="modal-trigger">Logout, <?php echo $t['nama']; ?></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <?php
        } else {
        ?>

        <div class="navbar-fixed" style="margin-bottom:20px">
          <nav>
            <div class="nav-wrapper container">
              <a href="index.php" class="brand-logo">PerpusOnline</a>
              <ul class="right hide-on-med-and-down">
                <li><a href="#login" class="modal-trigger">Login</a></li>
              </ul>
            </div>
          </nav>
        </div>

        <div id="login" class="modal">
          <div class="modal-content">
            <h4 class="center">Login</h4>
            <form class="" action="inc/login.php" method="post" enctype="multipart/form­data">
              <div class="input-field">
                <input placeholder="Username" name="username" type="text" class="validate">
              </div>
              <div class="input-field">
                <input placeholder="Password" name="password" type="password" class="validate">
              </div>
              <div class="input-field">
                <input type="submit" class="btn" name="login" value="Login">
              </div>
            </form>
          </div>

          <div class="modal-footer">
            <a href="register.php" class=" modal-action modal-close waves-effect waves-green btn-flat">Belum Punya Akun? daftar disini</a>
          </div>
        </div>

    <?php
    }
     ?>
