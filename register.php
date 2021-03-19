<?php
include 'inc/header.php';
$query="SELECT kategori_id,kategori_nama FROM kategori";
$result=mysqli_query($mysqli, $query);
?>

<div class="container">
  <form action="register-proses.php" method="post">
      <div class="input-field">
        <input placeholder="Username" name="username" type="text" class="validate">
      </div>
      <div class="input-field">
        <input placeholder="Password" name="password" type="password" class="validate">
      </div>
      <div class="input-field">
        <input placeholder="Nama Lengkap" name="nama" type="text" class="validate">
      </div>
      <div class="input-field">
        <input placeholder="Tempat Lahir" name="tempat_lhr" type="text" class="validate">
      </div>
      <div class="input-field">
        <input placeholder="Tanggal Lahir" name="tgl_lhr" type="date" class="datepicker">
      </div>
      <div class="input-field">
        <input placeholder="Email" name="email" type="text" class="validate">
      </div>
      <div class="input-field">
        <select name="kategori">
          <option value="" disabled selected>Pilih Kategori</option>
          <?php
          while ($row = mysqli_fetch_array($result)) {
            echo "<option value='".$row['kategori_nama']."'>".$row['kategori_nama']."</option>";
          }
          ?>
        </select>
      </div>
      <div class="input-field">
        <input type="submit" name="register" value="Daftar" class="btn">
      </div>
  </form>
</div>

<?php include 'inc/footer.php'; ?>
