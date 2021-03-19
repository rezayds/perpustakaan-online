<?php
include 'inc/header.php';
include 'aksi-edit.php';
$id = $_GET['edit_id'];
$getdata = mysqli_query($mysqli, 'SELECT*FROM buku WHERE kode_buku="'.$id.'"');
$data = mysqli_fetch_array($getdata);
?>

<div class="container">
	<form action="" method="post" enctype="multipart/form-data">
		<input type="text" name="kode_buku" value="<?php echo $data['kode_buku'] ?>" placeholder="Kode Buku" disabled>
		<input type="text" name="judul_buku" value="<?php echo $data['judul_buku'] ?>" placeholder="Judul Buku">
		<input type="text" name="penerbit" value="<?php echo $data['penerbit'] ?>" placeholder="Penerbit">
		<textarea name="deskripsi" class="materialize-textarea" placeholder="Deskripsi Buku"><?php echo $data['deskripsi'] ?></textarea>
		<select name="kategori">
			<option value="" disabled selected>Pilih kategori Buku</option>
			<?php
			$datakat = "SELECT*FROM kategori";
			$quekat = mysqli_query($mysqli, $datakat);
			while ($kat = mysqli_fetch_array($quekat)) {
			?>
			<option value="<?php echo $kat['kategori_nama'] ?>" selected="<?php $kat['kategori_nama'] ?>"><?php echo $kat['kategori_nama']; ?></option>
			<?php
			}
			?>
		</select>
		<div class="file-field input-field">
			<div class="btn">
				<span>File</span>
				<input type="file" name="file" >
			</div>
			<div class="file-path-wrapper">
				<input class="file-path validate" type="text" >
			</div>
		</div>
		<button type="submit" name="btn-update" class="btn">Update Buku</button>
	</form>
</div>

<?php include 'inc/footer.php'; ?>
