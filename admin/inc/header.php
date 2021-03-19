<?php
session_start();
require '../inc/koneksi.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Halaman Pengurus</title>
    <link rel="stylesheet" href="css/materialize.css" media="all" title="no title" charset="utf-8">
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>

    <div class="navbar-fixed" style="margin-bottom:20px">
      <nav>
        <div class="nav-wrapper container">
          <a href="#!" class="brand-logo">Halaman Pengurus</a>
          <ul class="right hide-on-med-and-down">
            <?php
            if (isset($_SESSION['admin'])!="") {
              ?>
              <li><a href="upload.php">Upload Buku</a></li>
              <li><a href="inc/logout.php?logout">Logout</a></li>
              <?php
            }
            ?>
          </ul>
        </div>
      </nav>
    </div>
