<?php
require 'inc/header.php';
?>

<div class="container">
	<form action="aksi-upload.php" method="post" enctype="multipart/form-data">
		<input type="text" name="kode_buku" value="" placeholder="Kode Buku">
		<input type="text" name="judul_buku" value="" placeholder="Judul Buku">
		<input type="text" name="penerbit" value="" placeholder="Penerbit">
		<textarea name="deskripsi" class="materialize-textarea" placeholder="Deskripsi Buku"></textarea>
		<select name="kategori">
			<option value="" disabled selected>Pilih kategori Buku</option>
			<?php
			$datakat = "SELECT*FROM kategori";
			$quekat = mysqli_query($mysqli, $datakat);
			while ($kat = mysqli_fetch_array($quekat)) {
			?>
			<option value="<?php echo $kat['kategori_nama']; ?>"><?php echo $kat['kategori_nama']; ?></option>
			<?php
			}
			?>
		</select>
		<div class="file-field input-field">
			<div class="btn">
				<span>File</span>
				<input type="file" name="file">
			</div>
			<div class="file-path-wrapper">
				<input class="file-path validate" type="text">
			</div>
		</div>
		<button type="submit" name="btn-upload" class="btn">upload</button>
	</form>
</div>


<?php require 'inc/footer.php'; ?>
